<!-- awa農ライフのfunction -->
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
}
add_action('after_setup_theme', 'naruto_cycle_theme_support');

/**
 * ファイルを読み込む
 *
 *  01.リセットCSSと共通のCSS，JSを読み込む
 *  02.ページごとのCSSとJSを読み込む
 */

// -------------------------------
// 01.共通のCSSやJS，外部ファイルを読み込む
// -------------------------------
add_action('wp_enqueue_scripts', 'add_common_stylesheet_script');
function add_common_stylesheet_script()
{

    //font-awesomeを読み込む
    wp_enqueue_style('naruto_cycle-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css');

    //共通のCSS（common.css）を読み込む
    // 01.『リセットCSS（reset.css）』
    wp_enqueue_style('naruto_cycle-reset', get_template_directory_uri() . '/assets/css/reset.css', array(), false);

    // 02.『common.css』
    wp_enqueue_style('naruto_cycle-common-style', get_template_directory_uri() . '/assets/css/common.css', array(), false);

    // 03.『ヘッダーのCSS（template-header.css）』
    wp_enqueue_style('naruto_cycle-template_header', get_template_directory_uri() . '/assets/css/template_header.css', array(), false);

    // 04.『フッターのCSS（template-footer.css）』
    wp_enqueue_style('naruto_cycle-template_footer', get_template_directory_uri() . '/assets/css/template_footer.css', array(), false);

    // 共通のJavaScriptを読み込む
    // jQueryライブラリを読み込む
    wp_enqueue_script('jquery');

    // 00.『jQuery』
    // WordPress本体のjquery.jsを読み込まない
    // wp_deregister_script('jquery');

    //GoogleCDNから読み込む
    wp_enqueue_script(
        'jquery-min.js',
        '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'
    );

    // 01.『common.js』
    wp_enqueue_script('naruto_cycle-common-script', get_template_directory_uri() . '/assets/js/common.js', '', '', true);

    // 02.『template-header.js』
    wp_enqueue_script('naruto_cycle-header-script', get_template_directory_uri() . '/assets/js/template_header.js', '', '', true);

    // 03.『template-footer.js』
    wp_enqueue_script('naruto_cycle-footer-script', get_template_directory_uri() . '/assets/js/template_footer.js', '', '', true);

    //slickCSSを読み込む
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/slick/slick.css', false);

    //slick-themeCSSを読み込む
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/slick/slick-theme.css', false);

    //slickのJSを読み込み
    wp_enqueue_script('slick-min', get_template_directory_uri() . '/assets/slick/slick.min.js', '', '', true);
}

/**-----------------------------------------
/*
/*    02.ページごとに読み込むCSS・JSを変える
//
//      02-A:トップページ
//      02-B:このサイトについて
//      02-C:ニュース ←※(is_single)をカスタム投稿(is_singular)より前に書くと，
//                     カスタム投稿(is_singular)でファイルを読み込まなくなる。
なので，02-Iの後ろに移動させました。(2022.10.07大北)
//      02-D:コース
//      02-E:ショップ
//      02-F:マイページ
//      02-G:その他固定ページ
//      02-H:
//      02-I：
//      02-J:index.php
//
/* -------------------------------------------------------------------------- */

add_action('wp_enqueue_scripts', 'add_individual_stylesheet_script');
function add_individual_stylesheet_script()
{

    //----------------------
    //  02-A:トップページ
    //----------------------
    if (is_home()) {

        //トップページのCSS（top.css）を読み込む
        wp_enqueue_style('naruto_cycle-top', get_template_directory_uri() . '/assets/css/top.css', array(), false);

        //トップページのヘッダーのCSS（template_top_header.css）を読み込む
        wp_enqueue_style('naruto_cycle-template_top_header', get_template_directory_uri() . '/assets/css/template_top_header.css', array(), false);

        // //slickCSSを読み込む
        // wp_enqueue_style('slick', get_template_directory_uri() . '/assets/slick/slick.css', false);

        // //slick-themeCSSを読み込む
        // wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/slick/slick-theme.css', false);

        // トップページ用のJS（top.js）を読み込む
        wp_enqueue_script('naruto_cycle-top-script', get_template_directory_uri() . '/assets/js/top.js', '', '', true);

        // トップページ用のJS（template_top_footer.js）を読み込む
        // wp_enqueue_script('awa_nolife-template_top_footer', get_template_directory_uri() . '/assets/js/template_top_footer.js', '', '', true);
    }
    //----------------------
    //  02-B:このサイトについて
    //----------------------
    elseif (is_page('aboutsite')) {

        //このサイトについてのCSS（about.css）を読み込む
        wp_enqueue_style('naruto_cycle-about', get_template_directory_uri() . '/assets/css/about.css', array(), false);
    }

    //----------------------
    //  02-B:このサイトについて ※一番最後に貼り付けている。
    //----------------------
    // (is_single)をカスタム投稿(is_singular)より前に書くと，カスタム投稿(is_singular)でファイルを読み込まなくなる。

    //----------------------
    //  02-D:ショップ・スポット
    //----------------------
    elseif (is_search()) {

        // 体験の詳細検索のCSS（farming_search.css）を読み込む
        wp_enqueue_style('naruto_cycle-search-event', get_template_directory_uri() . '/assets/css/spot_search.css', array(), false);
    }



    // 体験の地域検索のCSSなどを書く
    //     wp_enqueue_style('awa_nolife-taxonomy-area', get_template_directory_uri() . '/assets/css/farming_area.css', array(), false);
    // } elseif (is_singular('event')) {

    // 体験の個別ページのCSS（farming_event.css）を読み込む

    //     wp_enqueue_style('awa_nolife-single-event', get_template_directory_uri() . '/assets/css/farming_event.css', array(), false);
    // }
    //----------------------
    //  02-E:コース紹介
    //----------------------
    elseif (is_post_type_archive('course')) {

        // コースの一覧ページのCSS（farmer.css）を読み込む
        wp_enqueue_style('raruto_cycle-archive-course', get_template_directory_uri() . '/assets/css/course.css', array(), false);

        //course.jsを読み込み
        wp_enqueue_script('raruto_cycle-course', get_template_directory_uri() . '/assets/js/course.js', '', '', true);
    } elseif (is_single('course')) {

        // こーすの個別ページのCSS（farmer_content.css）を読み込む
        wp_enqueue_style('raruto_cycle-single-course', get_template_directory_uri() . '/assets/css/single_course.css', array(), false);
    }
    //----------------------
    //  02-F:農ライフ記事
    //----------------------
    elseif (is_post_type_archive('special')) {

        // 農ライフ記事の一覧ページのCSS（life.css）を読み込む
        wp_enqueue_style('awa_nolife-archive-special', get_template_directory_uri() . '/assets/css/life.css', array(), false);
    } elseif (is_singular('special')) {

        // 農ライフ記事の個別ページのCSS（.css）を読み込む
        wp_enqueue_style('awa_nolife-single-special', get_template_directory_uri() . '/assets/css/life_content.css', array(), false);
    }
    //----------------------
    //  02-G:野菜
    //----------------------
    elseif (is_post_type_archive('vegetable')) {

        // 野菜の一覧ページのCSS（food.css）を読み込む
        wp_enqueue_style('awa_nolife-archive-vegetable', get_template_directory_uri() . '/assets/css/food.css', array(), false);
    } elseif (is_singular('vegetable')) {

        // 野菜の個別ページのCSS（food_info.css）を読み込む
        wp_enqueue_style('awa_nolife-archive-vegetable', get_template_directory_uri() . '/assets/css/food_info.css', array(), false);

        // 野菜の個別ページのJS（food_info.js）を読み込む
        wp_enqueue_script('awa_nolife-food_info-script', get_template_directory_uri() . '/assets/js/food_info.js', '', '', true);
    }
    //----------------------
    //  02-H:マイページ
    //----------------------
    else if (is_page('mypage')) {

        //マイページのCSS（mypage.css）を読み込む
        wp_enqueue_style('awa_nolife-mypage', get_template_directory_uri() . '/assets/css/mypage.css', array(), false);
    }
    //----------------------
    //  02-Iその他の固定ページ
    //----------------------
    else if (is_page('qa')) {

        //Q＆AページのCSS（question.css）を読み込む
        wp_enqueue_style('awa_nolife-qa', get_template_directory_uri() . '/assets/css/question.css', array(), false);
    } else if (is_page('contact')) {

        //お問合せページのCSS（contact.css）を読み込む
        wp_enqueue_style('awa_nolife-contact', get_template_directory_uri() . '/assets/css/contact.css', array(), false);
    } else if (is_page('privacy')) {

        //プライバシーポリシーのCSS（privacy.css）を読み込む
        wp_enqueue_style('awa_nolife-privacy', get_template_directory_uri() . '/assets/css/privacy.css', array(), false);
    } else if (is_page('teammaru')) {

        //サイト制作にあたってのCSS（writer.css）を読み込む
        wp_enqueue_style('awa_nolife-teammaru', get_template_directory_uri() . '/assets/css/writer.css', array(), false);
    }
    //----------------------
    //  02-J:index.php
    //----------------------
    elseif (is_category()) {

        //ニュース一覧のCSS（news.css）を読み込む
        wp_enqueue_style('awa_nolife-index', get_template_directory_uri() . '/assets/css/index.css', array(), false);
    }

    //----------------------
    //  02-C:ニュース
    //----------------------
    elseif (is_page('news')) {

        //ニュース一覧のCSS（news.css）を読み込む
        wp_enqueue_style('raruto_cycle-news', get_template_directory_uri() . '/assets/css/news.css', array(), false);
    } elseif (is_single()) {

        //ニュースの個別ページのCSS（news-content.css）を読み込む
        wp_enqueue_style('raruto_cycle-news-content', get_template_directory_uri() . '/assets/css/news_content.css', array(), false);
    }
}

/**
 * wp_body_openのタイミングで出力したいソースコードを挿入する
 */
add_action('wp_body_open', function () {
    // ここに挿入したいソースコードを記述
    // echo '<h2>こんにちは、テストです。</h2>';
});

// タイトルのセパレータを変更する
add_filter('document_title_separator', 'raruto_cycle_document_title_separator');
function raruto_cycle_document_title_separator($separator)
{
    $separator = '@'; //タイトルの区切り文字を「｜」にする
    return $separator;
}

// タイトルを変更する
// add_filter('document_title_parts', 'raruto_cycle_document_title_parts');
// function raruto_cycle_document_title_parts($title)
// {
//     if (is_home()) {
//         // print_r($title);
//         // unset($title['tagline']);   //タグラインを削除
//         // $title['tagline'] = '最高最高！！！';
//         // $title['title'] = "BISTRO CALMEは、カジュアルワインバーよりなビストロ";

//     } else if (is_search()) {
//         $title['title'] = "体験をさがす";
//     }
//     return $title;
// }

// add_filter('comment_form_default_fields', 'awa_nolife_comment_form_default_fields');
// function awa_nolife_comment_form_default_fields($args)
// {
//     $args['url'] = '';
//     $args['author'] = '';
//     $args['email'] = '';
//     return $args;
// }

// add_action('pre_get_posts', 'awa_nolife_pre_get_posts');
// function awa_nolife_pre_get_posts($query)
// {
//     if (is_admin() || !$query->is_main_query()) {
//         return; //関数から抜け出す
//     }
//     // 管理画面とメインクエリのページ
//     // 更にトップページの場合は
//     if ($query->is_home()) {
//         // $query->set('category_name', 'news');
//         $query->set('posts_per_page', 3);
//     }
// }

// add_action('wp', 'awa_nolife_wpautop');
// function awa_nolife_wpautop()
// {
//     if (is_page('contact')) {
//         remove_filter('the_content', 'wpautop');
//     }
// }

// 検索条件を体験（event）だけにする
// function SearchFilter($query)
// {
//     // if ($query->is_search) {
//     //     $query->set('post_type', 'event');
//     // }
//     return $query;
// }
// add_filter('pre_get_posts', 'SearchFilter');

// 農ライフ特集 抜粋を投稿可とする
// add_post_type_support('special', 'excerpt');

// // カテゴリー一覧の各項目の右に '>' を表示する
// add_filter('wp_list_categories', 'span_before_link_list_categories');
// function span_before_link_list_categories($list)
// {
//     // $list = str_replace('</a>', '<span  class="li-right">></span></a>', $list);
//     return $list;
// }
?>