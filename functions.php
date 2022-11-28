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