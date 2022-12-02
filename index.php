<!-- ヘッダー切り取りここから -->

<?php get_header(); ?>


<!-- ヘッダー切り取りここまで -->
<main>
    <div class="news_main_wrap">
        <!-- キービジュアル -->
        <div class="key_bg_under">
            <img src="https://placehold.jp/1440x400.png" alt="マイページキービジュアル" class="key_bg_under_img">
        </div>

        <!-- パンくずリスト -->
        <div class="bradcrumbs">
            <!-- パンくず -->
            <?php echo do_shortcode('[flexy_breadcrumb]'); ?>
        </div>
        <!-- ページ見出し -->
        <section class="news">
            <h2 class="course_top headline"><ruby>NEWS<rt>ニュース</rt></ruby></h2>
        </section>
        <div class="news_detail">
            <div class="news_detail_container flex">

                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <!-- ニュース記事１つ分の入れ物 -->
                <div class="news_card">
                    <!-- ニュース記事１つ分の枠の設定 -->
                    <div class="news_card_item">
                        <!-- 記事の写真 -->
                        <!-- <div class="news_news_article_img_container flex"> -->
                        <!-- ニュース記事の写真 -->
                        <a href="<?php the_permalink(); ?>">


                            <?php if (has_post_thumbnail()) : ?>

                            <?php the_post_thumbnail('thumbnail'); ?>

                            <?php else : ?>
                            <img src="<?php echo $pic_url; ?>" alt="ニュース写真" class="news_card_item_img">
                            <?php endif; ?>
                            <!-- </div> -->
                            <div class="news_article_info_container">
                                <!-- ニュース記事テキストの入れ物 -->
                                <div class="news_article_info_box flex column">
                                    <!-- 日付とカテゴリ名 -->
                                    <div class="article_meta flex">
                                        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                                        <div class="post-categories">
                                            <?php the_category() ?>
                                        </div>
                                    </div>
                                    <!-- 記事タイトル -->
                                    <h2 class="news_card_item_name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <!-- 記事見出しの入れ物 -->
                                    <div class="news_card_txt_container">
                                        <div class="news_card_txt">
                                            <p><?php the_excerpt(); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- スポットもっと見るボタン -->
                                <div class="news_card_item_btn"><a href="<?php the_permalink(); ?>">[続きを読む]</a></div>
                            </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>




                <!-- ページネーション -->
                <div class="news_pagination_container flex">
                    <p class="page_box">1</p>
                    <p class="page_box">2</p>
                </div>
                <!--アーカイブ -->
                <aside class="news_detail_archive_wrap">

                    <?php get_sidebar('categories'); ?>
                    <!-- <div class="news_detail_archive no1">
                            <h2 class="news_detail_archive_title">カテゴリ一覧</h2>
                            <ul class="news_detail_archive_list">
                                <li><a href="#">お知らせ</a></li>
                                <li><a href="#">イベント</a></li>
                                <li><a href="#">コラム</a></li>
                            </ul>
                        </div> -->

                    <?php get_sidebar('archives'); ?>
                    <!-- <div class="news_detail_archive">
                            <h2 class="news_detail_archive_title">月別アーカイブ</h2>
                            <ul class="news_detail_archive_list">
                                <li><a href="#">2022年11月</a></li>
                                <li><a href="#">2022年12月</a></li>

                            </ul>
                        </div> -->
                </aside>
            </div>
        </div>
    </div>
    <div class="news_bottom_container">
        <!-- PCのみ出るニュース下部の自転車 -->
        <img class="news_bottom_cycle_img buruburu" src="<?php echo get_template_directory_uri(); ?>/assets/img/news_img.png" alt="ニュース下部装飾">

        <!-- 下部背景の入れ物 -->
        <div class="loop_wrap">
            <!-- PCのみ出るニュース下部の背景 -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/news_bottom_bg_img.png"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/news_bottom_bg_img.png">
        </div>
    </div>
    <!-- PCのみ出るニュース下部の背景 -->
    <!-- <img class="news_bottom_bg_img" src="./assets/image/news_bottom_bg_img.png" alt="ニュース下部背景"> -->

    <!-- 元々のラップ -->
    <!-- </div> -->
</main>
<!-- フッターナビ -->

<!-- <?php get_footer(); ?> -->

<!-- フッター切り取りここまで -->