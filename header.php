<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="鳴門を自転車でぐるっと巡るサイクリングコースを紹介。定番の観光地から穴場スポットまで網羅したおススメコースをマップで確認！知っておきたい注意点や駐輪場の事まで詳しく掲載。鳴門の自転車旅には欠かせないサイクリング情報サイトです。" />
    <meta name="keywords" content="サイクリングマップ,四国,サイクルショップ,ASA,淡路島,大鳴門橋,おすすめ,徳島,鳴門,観光,サイクリング,自転車、絶景,サイクリングコース" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <!-- <title>なるとサイくるっと！</title> -->
    <!-- 外部css -->
    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/header.css" /> -->
    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/footer.css" /> -->
    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/index.css" /> -->

    <!--↓今は使っていないが今後別バージョンで読み込む  -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/wave.css" />

    <!-- googlefont本体ここから2行 -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin /> -->
    <!-- 全体用font↓ -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Arvo&family=Noto+Sans+JP:wght@400;900&display=swap" rel="stylesheet" /> -->
    <!-- h1のfont↓ -->

    <!-- FontAwesome↓ -->
    <!-- <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet" /> -->
    <!-- jQuery本体↓ -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
    <!-- ファビコン↓() -->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="wrap">
        <!--＝＝＝＝＝＝＝＝＝＝＝＝＝ headerここから ＝＝＝＝＝＝＝＝＝＝＝＝＝-->
        <header class="header flex">
            <div class="header_logo">
                <h1>
                    <a href="<?php echo home_url(); ?>">
                        <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/header_logo_img.png" alt="なるとサイくるっと！のロゴ" />
                    </a>
                </h1>
            </div>
            <nav>
                <ul class="menu">
                    <li class="menu-list font_edge_white">
                        <a href="<?php echo home_url('/news/'); ?>"><ruby>NEWS<rt>新着情報</rt></ruby></a>
                    </li>
                    <li class="menu-list font_edge_white">
                        <a href="<?php echo get_permalink(2); ?>"><ruby>HOWTO<rt>鳴門でサイクリング</rt></ruby></a>
                    </li>
                    <li class="menu-list font_edge_white">
                        <a href="<?php echo get_permalink(183); ?>"><ruby>COURSE<rt>コース詳細</rt></ruby></a>
                    </li>
                    <li class="menu-list font_edge_white">
                        <a href="<?php echo home_url('/spot/'); ?>"><ruby>SPOT<rt>スポット検索</rt></ruby></a>
                    </li>
                    <li class="menu-list font_edge_white">
                        <a href="<?php echo home_url('/mypage/'); ?>"><ruby>MYPAGE<rt>マイページ</rt></ruby></a>
                    </li>
                    <li class="menu-list font_edge_white">
                        <a href="<?php echo home_url('/question/'); ?>"><ruby>Q&A<rt>よくある質問</rt></ruby></a>
                    </li>
                </ul>
                <button type="button" class="btn js-btn">
                    <span class="btn-line"></span>
                </button>
            </nav>
        </header>
        <!--＝＝＝＝＝＝＝＝＝＝＝＝＝ headerここまで ＝＝＝＝＝＝＝＝＝＝＝＝＝-->