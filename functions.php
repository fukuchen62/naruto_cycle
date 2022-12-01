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

    // 03.『ヘッダーのCSS（header.css）』
    wp_enqueue_style('naruto_cycle-template_header', get_template_directory_uri() . '/assets/css/header.css', array(), false);



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