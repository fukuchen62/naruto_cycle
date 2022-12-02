<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.min.css" rel="stylesheet">
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>
    <header class="header">
        <div class="header_links">
            <nav class="gnav">ヘッダーとナビゲーション
                <ul>
                    <?php
                    $args = array(
                        'menu' => 'global-navigation', //作成したメニュー名
                        'menu_class' => '', //メニューに使うクラス名
                        'container' => false, //ulタグを囲んでいるdivを削除
                    );
                    wp_nav_menu($args);
                    ?>

                    <!-- <li>about</li>
                <li>course</li>
                <li>search</li>
                <li>Q&A</li>
                <li>my page</li>
                <li>contact</li> -->
                </ul>
            </nav>
            <?php wp_head(); ?>
        </div>
    </header>