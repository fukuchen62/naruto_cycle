<!-- ヘッダー切り取りここから -->
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="鳴門を自転車でぐるっと巡るサイクリングコースを紹介。定番の観光地から穴場スポットまで網羅したおススメコースをマップで確認！知っておきたい注意点や駐輪場の事まで詳しく掲載。鳴門の自転車旅には欠かせないサイクリング情報サイトです。" />
    <meta name="keywords" content="サイクリングマップ,四国,サイクルショップ,ASA,淡路島,大鳴門橋,おすすめ,徳島,鳴門,観光,サイクリング,自転車、絶景,サイクリングコース" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <title>なるとサイくるっと！</title>
    <!-- 外部css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/header.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/footer.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/news_detail.css" />

    <!-- googlefont本体ここから2行 -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Arvo&family=Noto+Sans+JP:wght@400;900&display=swap" rel="stylesheet">
    <!-- 全体用font↓ -->

    <!-- h1のfont↓ -->

    <!-- FontAwesome↓ -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet" />
    <!-- jQuery本体↓ -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- ファビコン↓() -->
</head>

<body>
    <div class="wrap">

        <!--＝＝＝＝＝＝＝＝＝＝＝＝＝ headerここから ＝＝＝＝＝＝＝＝＝＝＝＝＝-->
        <header class="header flex">
            <div class="header_logo">
                <h1><a href="#"><img class="img" src="./assets/image/header_logo_img.png" alt="なるとサイくるっと！のロゴ"></a></h1>
            </div>
            <nav>
                <ul class="menu">
                    <li class="menu-list font_edge_white">
                        <a href="news.html">NEWS</a>
                    </li>
                    <li class="menu-list font_edge_white">
                        <a href="howto.html">HOWTO</a>
                    </li>
                    <li class="menu-list font_edge_white">
                        <a href="course.html">COURSE</a>
                    </li>
                    <li class="menu-list font_edge_white">
                        <a href="spot.html">SPOT</a>
                    </li>
                    <li class="menu-list font_edge_white">
                        <a href="mypage.html">MYPAGE</a>
                    </li>
                    <li class="menu-list font_edge_white">
                        <a href="question.html">Q&A</a>
                    </li>
                </ul>
                <button type="button" class="btn js-btn">
                    <span class="btn-line"></span>
                </button>
            </nav>
        </header>
        <!--＝＝＝＝＝＝＝＝＝＝＝＝＝ headerここまで ＝＝＝＝＝＝＝＝＝＝＝＝＝-->
        <main>
            <div class="news_detail_wrap">
                <!-- キービジュアル -->
                <div class="key_bg_under">
                    <img src="https://placehold.jp/1440x400.png" alt="マイページキービジュアル" class="key_bg_under_img">
                </div>

                <!-- パンくずリスト -->
                <div class="bradcrumbs">
                    <!-- ここに＞パンくずリストが＞入ります -->
                    <?php echo do_shortcode('[flexy_breadcrumb]'); ?>
                </div>
                <div class="news_detail">
                    <div class="news_detail_container flex">
                        <article class="news_detail_article">
                            <h2 class="article_title"><?php the_title(); ?></h2>

                            <div class="article_meta flex">
                                <!-- 項目なし -->
                                <!-- 日付 -->
                                <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                                <!-- カテゴリ -->
                                <div class="post-categories">
                                    <a href="#"><?php the_category(); ?></a>
                                </div>
                            </div>

                            <div class="article_body">
                                <div class="news_detail_content">

                                    <!-- 内容 -->
                                    <?php the_content(); ?>
                                </div>
                            </div>

                            <!-- 前後記事のリンク -->
                            <div>
                                <?php previous_post_link(); ?>

                                <?php next_post_link(); ?>
                            </div>
                        </article>

                        <aside class="news_detail_archive_wrap">
                            <div class="news_detail_archive no1">

                                <h2 class="news_detail_archive_title  news_detail_archive_list"><?php get_sidebar('categories'); ?></h2>
                            </div>
                            <!-- <br> -->
                            <div class="news_detail_archive">

                                <h2 class="news_detail_archive_title news_detail_archive_list"><?php get_sidebar('archives'); ?></h2>
                            </div>
                        </aside>
                    </div>
                </div>
                <img class="news_bottom_img" src="image/news_img.png" alt="ニュース下部装飾">
            </div>
        </main>
        <!--＝＝＝＝＝＝＝＝＝＝＝＝＝ footerここから ＝＝＝＝＝＝＝＝＝＝＝＝＝-->

        <footer class="footer bg_blue white txt_c debug">
            <ul class="banner_list gap32_16 m_bottom40">
                <!-- asaなどのバナーがliで入ります -->
                <li class="banner_item"><a href=""><img src="https://placehold.jp/234x60.png" alt="○○のバナー"></a></li>
                <li class="banner_item"><a href=""><img src="https://placehold.jp/234x60.png" alt="○○のバナー"></a></li>
                <li class="banner_item"><a href=""><img src="https://placehold.jp/234x60.png" alt="○○のバナー"></a></li>
            </ul>
            <nav class="fnav_container bg_blue debug">

                <!-- フッターナビ -->
                <!-- 近藤追加分 -->
                <ul class="fnav">
                    <ul class="fnav_w_list flex">
                        <li class="footer_headline">
                            <ul class="footer_list">
                                <li class="footer_nav_item bold"><a href="news.html">ニュース</a></li>
                                <li class="footer_nav_item bold"><a href="howto.html">鳴門サイクリングについて</a></li>
                                <li class="footer_nav_item bold"><a href="mypage.html">マイページ</a></li>
                            </ul>
                        </li>
                        <li class="footer_headline"><a href="course.html">サイクリングコース</a>
                            <ul class="footer_list">
                                <li class="footer_nav_item"><a href=".html"></a>初心者モデルコース</li>
                                <li class="footer_nav_item"><a href=".html">短距離コース</a></li>
                                <li class="footer_nav_item"><a href=".html">中距離コース</a></li>
                                <li class="footer_nav_item"><a href=".html">長距離コース</a></li>
                            </ul>
                        </li>
                        <li class="footer_headline"><a href=".html">周辺スポット検索</a>
                            <ul class="footer_list">
                                <li class="footer_nav_item"><a href=".html">食べる</a></li>
                                <li class="footer_nav_item"><a href=".html">見る</a></li>
                                <li class="footer_nav_item"><a href=".html">買う</a></li>
                                <li class="footer_nav_item"><a href=".html">楽しむ</a></li>
                                <li class="footer_nav_item"><a href=".html">サイクルスポット</a></li>
                            </ul>
                        </li>
                        <li class="footer_headline">Q＆A・その他
                            <ul class="footer_list">
                                <li class="footer_nav_item"><a href="question.html">Q＆A</a></li>
                                <li class="footer_nav_item"><a href="contact.html">お問い合わせ</a></li>
                                <li class="footer_nav_item"><a href="privacy.html">プライバシーポリシー・免責事項</a></li>
                                <li class="footer_nav_item"><a href="aboutsite.html">サイト制作にあたって</a></li>
                            </ul>
                        </li>
                    </ul>
            </nav>
            <!-- 追加分ここまで -->

            <div class="sns_container flex gap32_16">
                <!-- twitter -->
                <a href=""><img class="sns_icon" src="./image/Twitter social icons - circle - blue.png" alt="ツイッターアイコン"></a>
                <!-- facebook -->
                <a href=""><img class="sns_icon" src="./image/f_logo_RGB-Blue_144.png" alt="ツイッターアイコン"></a>
            </div>
            <p class="copyright txt_c">AllCopyRight©なるとサイくるっと！</p>
        </footer>

        <!--＝＝＝＝＝＝＝＝＝＝＝＝＝ footerここまで ＝＝＝＝＝＝＝＝＝＝＝＝＝-->
        <script src="./assets/js/question.js"></script>
        <script src="./assets/js/common.js"></script>
    </div>
</body>

</html>
<!-- フッター切り取りここまで -->