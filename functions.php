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
    $vars[] = 'shop'; // 必要に応じて追加.
    return $vars;
}
add_filter('query_vars', 'theme_query_vars');


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
    wp_enqueue_style('naruto_cycle-fontawesome_a', "https://fonts.googleapis.com");
    wp_enqueue_style('naruto_cycle-fontawesome_b', "https://fonts.gstatic.com");
    wp_enqueue_style('naruto_cycle-fontawesome_c', "https://fonts.googleapis.com/css2?family=Arvo&family=Noto+Sans+JP:wght@400;900&display=swap");



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
    wp_enqueue_script('jquery');

    // 00.『jQuery』
    // WordPress本体のjquery.jsを読み込まない
    // wp_deregister_script('jquery');

    //GoogleCDNから読み込む
    // wp_enqueue_script(
    //     'jquery-min.js',
    //     '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'
    // );

    // 01.『common.js』
    wp_enqueue_script('naruto_cycle-common-script', get_template_directory_uri() . '/assets/js/common.js', '', '', true);

    // 02.『header.js』
    wp_enqueue_script('naruto_cycle-header-script', get_template_directory_uri() . '/assets/js/header.js', '', '', true);

    // 03.『template-footer.js』
    // wp_enqueue_script('naruto_cycle-footer-script', get_template_directory_uri() . '/assets/js/footer.js', '', '', true);

}


// 02.ページごとの読み込み
// 02-A:トップページ



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

        // トップページ用のJS（top.js）を読み込む
        wp_enqueue_script('naruto_cycle-top-script', get_template_directory_uri() . '/assets/js/index.js', '', '', true);
    }
}