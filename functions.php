<?php

/**
 * WordPressの既成機能を有効させる
 *
 * @return void
 */
function naruto_cycle_theme_support()
{
    /**
     * <title>タグを出力する
     */
    add_theme_support('title-tag');

    /**
     * アイキャッチ画像を使用可能にする
     */
    add_theme_support('post-thumbnails');

    /**
     * カスタムメニュー機能を使用可能にする
     */
    add_theme_support('menus');

    //固定ページで抜粋を使えるようにする
    add_post_type_support('page', 'excerpt');
}
add_action('after_setup_theme', 'naruto_cycle_theme_support');


//トップページのみ投稿表示を2件に変更
function naruto_cycle_pre_get_posts($query)
{
    //管理画面。メインクエリ以外には設定しない
    if (is_admin() || !$query->is_main_query()) {
        return;
    }
    //topページの場合
    if ($query->is_home()) {
        $query->set('posts_per_page', 2);
        return;
    }
}
add_action('pre_get_posts', 'naruto_cycle_pre_get_posts');

//記事ランダム表示
function sortpost_rand($query)
{
    if (is_admin() || !$query->is_post_type_archive()) {
        return;
    }
    $query->set('orderby', 'rand');
}
add_action('pre_get_posts', 'sortpost_rand');

// 検索の独自ＧＥＴパラメータ
function theme_query_vars($vars)
{
    $vars[] = 'eat'; // 必要に応じて追加.
    $vars[] = 'buy'; // 必要に応じて追加.
    $vars[] = 'enjoy'; // 必要に応じて追加.
    $vars[] = 'cyclespot'; // 必要に応じて追加.
    return $vars;
}
add_filter('query_vars', 'theme_query_vars');



// funciton.phpの動作確認(確認したい場所にコピーする)
// function test()
// {
//     echo '<script>alert(\'function.phpは効いています！\')</script>';
// }
// add_action('wp_head', 'test');



// ファイルを読み込む
//
//   01.リセットCSSと共通のCSS，JSを読み込む
//   02.ページごとのCSSとJSを読み込む

add_action('wp_enqueue_scripts', 'add_common_stylesheet_script');
function add_common_stylesheet_script()
{
    //font-awesomeを読み込む
    wp_enqueue_style('naruto_cycle-fontawesome', '"https://use.fontawesome.com/releases/v5.6.1/css/all.css" ');

    //googlefontを読み込む
    wp_enqueue_style('naruto_cycle-googlefonts_a', "https://fonts.googleapis.com");
    wp_enqueue_style('naruto_cycle-googlefonts_b', "https://fonts.gstatic.com");
    wp_enqueue_style('naruto_cycle-googlefonts_c', "https://fonts.googleapis.com/css2?family=Arvo&family=Noto+Sans+JP:wght@400;900&display=swap");

    //共通のCSS（common.css）を読み込む

    // 01.『リセットCSS（reset.css）』
    wp_enqueue_style('naruto_cycle-reset', get_template_directory_uri() . '/assets/css/reset.css', array(), false);

    // 02.『common.css』
    wp_enqueue_style('naruto_cycle-common-style', get_template_directory_uri() . '/assets/css/common.css', array(), false);

    // 03.『ヘッダーのCSS（header.css）』
    wp_enqueue_style('naruto_cycle-template_header', get_template_directory_uri() . '/assets/css/header.css', array(), false);

    // 04.『フッターのCSS（footer.css）』
    wp_enqueue_style('naruto_cycle-template_footer', get_template_directory_uri() . '/assets/css/footer.css', array(), false);

    // 共通のJavaScriptを読み込む
    // jQueryライブラリを読み込む
    // wp_enqueue_script('jquery');

    // 00.『jQuery』

    if (!is_admin()) {
        // WordPress本体のjquery.jsを読み込まない
        wp_deregister_script('jquery');

        //GoogleCDNから読み込む
        wp_enqueue_script(
            'jquery-min.js',
            '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'
        );
    }

    // 01.『common.js』
    wp_enqueue_script('naruto_cycle-common-script', get_template_directory_uri() . '/assets/js/common.js', '', '', true);

    // 02.『header.js』
    wp_enqueue_script('naruto_cycle-header-script', get_template_directory_uri() . '/assets/js/header.js', '', '', true);

    // 03.『footer.js』
    wp_enqueue_script('naruto_cycle-footer-script', get_template_directory_uri() . '/assets/js/footer.js', '', '', true);

    // 04.『3wave.js』
    wp_enqueue_script('naruto_cycle-footer_3wave-script', get_template_directory_uri() . '/assets/js/3wave.js', '', '', true);
}


// 02.ページごとの読み込み
// 02-A:トップページ
// 02-B:newsページ
// 02-C:howtoページ
// 02-D:courseページ
// 02-E:spot検索ページ



add_action('wp_enqueue_scripts', 'add_individual_stylesheet_script');
function add_individual_stylesheet_script()
{

    // 02-A:トップページ
    if (is_home()) {
        //トップページのCSS（top.css）を読み込む
        wp_enqueue_style(
            'naruto_cycle-top',
            get_template_directory_uri() . '/assets/css/index.css',
            array(),
            false
        );
        //トップページのヘッダーのCSS（template_top_header.css）を読み込む
        // wp_enqueue_style('naruto_cycle-template_top_header', get_template_directory_uri() . '/assets/css/template_top_header.css', array(), false);

        // トップページ用のJS（index.js）を読み込む
        wp_enqueue_script('naruto_cycle-top-script', get_template_directory_uri() . '/assets/js/index.js', '', '', true);
    }

    // 02-B:newsページ
    // 一覧ページCSS（news.css）
    else if (is_page('news')) {
        wp_enqueue_style('naruto_cycle-archive_news', get_template_directory_uri() . '/assets/css/news.css', array(), false);
        wp_enqueue_style('naruto_cycle-archive_news2', get_template_directory_uri() . '/assets/css/news_detail.css', array(), false);

        wp_enqueue_style('naruto_cycle-template_header', get_template_directory_uri() . '/assets/css/header.css', array(), false);

        // js
        wp_enqueue_script('naruto_cycle-archive_news-script1', get_template_directory_uri() . '/assets/js/index.js', '', '', true);
        wp_enqueue_script('naruto_cycle-archive_news_script2', get_template_directory_uri() . '/assets/js/jquery.bgswitcher.js', '', '', true);
        wp_enqueue_script(
            'naruto_cycle-archive_news_script3',
            get_template_directory_uri() . '/assets/js/bgswitcher.js',
            '',
            '',
            true
        );
    }
    // カテゴリー別一覧
    else if (is_category()) {
        wp_enqueue_style('naruto_cycle-archive_news', get_template_directory_uri() . '/assets/css/news.css', array(), false);
        wp_enqueue_style('naruto_cycle-archive_news2', get_template_directory_uri() . '/assets/css/news_detail.css', array(), false);

        wp_enqueue_style('naruto_cycle-template_header', get_template_directory_uri() . '/assets/css/header.css', array(), false);

        // js
        wp_enqueue_script('naruto_cycle-archive_news-script1', get_template_directory_uri() . '/assets/js/index.js', '', '', true);
        wp_enqueue_script('naruto_cycle-archive_news_script2', get_template_directory_uri() . '/assets/js/jquery.bgswitcher.js', '', '', true);
        wp_enqueue_script(
            'naruto_cycle-archive_news_script3',
            get_template_directory_uri() . '/assets/js/bgswitcher.js',
            '',
            '',
            true
        );

        //月別アーカイブ
    } else if (is_month()) {
        wp_enqueue_style('naruto_cycle-archive_news', get_template_directory_uri() . '/assets/css/news.css', array(), false);
        wp_enqueue_style(
            'naruto_cycle-archive_news2',
            get_template_directory_uri() . '/assets/css/news_detail.css',
            array(),
            false
        );

        wp_enqueue_style('naruto_cycle-template_header', get_template_directory_uri() . '/assets/css/header.css', array(), false);

        // js
        wp_enqueue_script('naruto_cycle-archive_news-script1', get_template_directory_uri() . '/assets/js/index.js', '', '', true);
        wp_enqueue_script('naruto_cycle-archive_news_script2', get_template_directory_uri() . '/assets/js/jquery.bgswitcher.js', '', '', true);
        wp_enqueue_script(
            'naruto_cycle-archive_news_script3',
            get_template_directory_uri() . '/assets/js/bgswitcher.js',
            '',
            '',
            true
        );
    }



    // 詳細ページCSS（news.css）
    else if (is_singular("post")) {
        wp_enqueue_style('naruto_cycle-news_content', get_template_directory_uri() . '/assets/css/news_detail.css', array(), false);
        // js
        wp_enqueue_script('naruto_cycle-news_content-script', get_template_directory_uri() . '/assets/js/index.js', '', '', true);
        wp_enqueue_script('naruto_cycle-news_content_script', get_template_directory_uri() . '/assets/js/jquery.bgswitcher.js', '', '', true);
        wp_enqueue_script(
            'naruto_cycle-news_content_script2',
            get_template_directory_uri() . '/assets/js/bgswitcher.js',
            '',
            '',
            true
        );
    }
    // 02-C:howtoページ
    else if (is_page('cycle')) {
        //slickCSSを読み込む
        wp_enqueue_style('slick', get_template_directory_uri() . '/assets/slick/slick.css', false);

        //slick-themeCSSを読み込む
        wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/slick/slick-theme.css', false);

        //固有CSS
        wp_enqueue_style('naruto_cycle-howto', get_template_directory_uri() . '/assets/css/howto.css', array(), false);

        //slickのJSを読み込み
        wp_enqueue_script('slick-min', get_template_directory_uri() . '/assets/slick/slick.min.js', '', '', true);

        // js
        wp_enqueue_script('naruto_cycle-howto-script', get_template_directory_uri() . '/assets/js/howto.js', '', '', true);
    }

    // 02-D:courseページ
    else if (is_singular('course')) {
        wp_enqueue_style('naruto_cycle-course', get_template_directory_uri() . '/assets/css/course.css', array(), false);
        // js
        wp_enqueue_script('naruto_cycle-course-script', get_template_directory_uri() . '/assets/js/course.js', '', '', true);
    }

    // 02-E:spot検索ページ
    elseif (is_post_type_archive(array('shop', 'spot', 'cycle'))) {
        wp_enqueue_style('naruto_cycle-spot_search', get_template_directory_uri() . '/assets/css/search.css', array(), false);
        // js
        wp_enqueue_script('naruto_cycle-spot_search-script', get_template_directory_uri() . '/assets/js/mypage.js', '', '', true);
    }
    // 検索結果ページ
    elseif (is_search()) {
        wp_enqueue_style('naruto_cycle-spot_search_result', get_template_directory_uri() . '/assets/css/search.css', array(), false);
        wp_enqueue_style('naruto_cycle-spot_search_result2', get_template_directory_uri() . '/assets/css/search_result.css', array(), false);
        // js
        wp_enqueue_script('naruto_cycle-spot_search_result-script', get_template_directory_uri() . '/assets/js/course.js', '', '', true);
    }
    // タクソノミー（食べる、買う、楽しむ、サイクル）一覧ページページ
    elseif (is_tax()) {
        wp_enqueue_style('naruto_cycle-spot_search_result', get_template_directory_uri() . '/assets/css/search.css', array(), false);
        wp_enqueue_style('naruto_cycle-spot_search_result2', get_template_directory_uri() . '/assets/css/search_result.css', array(), false);
        // js
        wp_enqueue_script('naruto_cycle-spot_search_result-script', get_template_directory_uri() . '/assets/js/course.js', '', '', true);
    }

    // spot詳細ページ
    else if (is_singular(array('shop', 'spot', 'cycle', 'course'))) {
        wp_enqueue_style('naruto_cycle-spot_detail', get_template_directory_uri() . '/assets/css/spot_detail.css', array(), false);
        // js
        wp_enqueue_script('naruto_cycle-spot_spot_detail-script', get_template_directory_uri() . '/assets/js/course.js', '', '', true);
        wp_enqueue_script('naruto_cycle-spot_spot_detail-script2', get_template_directory_uri() . '/assets/js/spot.js', '', '', true);
    }
    //mypage
    else if (is_page('mypage')) {
        wp_enqueue_style('naruto_cycle-mypage', get_template_directory_uri() . '/assets/css/mypage.css', array(), false);
        // js
        wp_enqueue_script('naruto_cycle-mypage-script', get_template_directory_uri() . '/assets/js/mypage.js', '', '', true);
    }

    // Q&A
    else if (is_page('question')) {
        wp_enqueue_style('naruto_cycle-question', get_template_directory_uri() . '/assets/css/question.css', array(), false);
        // js
        wp_enqueue_script('naruto_cycle-question-script', get_template_directory_uri() . '/assets/js/question.js', '', '', true);
    }
    // お問い合わせ
    else if (is_page('contact')) {
        wp_enqueue_style('naruto_cycle-contact', get_template_directory_uri() . '/assets/css/question.css', array(), false);
        // js
        wp_enqueue_script('naruto_cycle-contact-script', get_template_directory_uri() . '/assets/js/question.js', '', '', true);
    }
    // 制作に当たって
    else if (is_page('aboutsite')) {
        wp_enqueue_style('naruto_cycle-aboutsite', get_template_directory_uri() . '/assets/css/aboutsite.css', array(), false);
        wp_enqueue_style('naruto_cycle-aboutsite2', get_template_directory_uri() . '/assets/css/index.css', array(), false);
        // js
        wp_enqueue_script('naruto_cycle-aboutsite-script', get_template_directory_uri() . '/assets/js/question.js', '', '', true);
    }
    // プライバシーポリシー
    else if (is_page('privacy')) {
        wp_enqueue_style('naruto_cycle-privacy', get_template_directory_uri() . '/assets/css/privacy.css', array(), false);
    }
}
