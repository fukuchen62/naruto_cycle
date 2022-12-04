<?php
/*
Template Name: 全記事一覧テスト
*/
?>

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

                <?php
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 5, //表示（取得）する記事の数
                    'paged' => $paged
                );
                $my_query = new WP_Query($args);

                if ($my_query->have_posts()) :
                    while ($my_query->have_posts()) : $my_query->the_post();
                ?>
                <!-- ニュース記事１つ分の入れ物 -->
                <div class="news_card">

                    <!-- ニュース記事１つ分の枠の設定 -->

                    <?php get_template_part('template-parts/loop', 'news'); ?>



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

                    <!-- <?php get_sidebar('archives'); ?> -->
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