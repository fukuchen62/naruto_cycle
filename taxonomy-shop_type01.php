<?php get_header(); ?>

<!-- ヘッダー切り取りここまで -->
<main>
    <!-- キービジュアル -->
    <div class="key_bg_under">
        <img src="https://placehold.jp/1440x400.png" alt="マイページキービジュアル" class="key_bg_under_img">
    </div>

    <!-- パンくずリスト -->
    <div class="bradcrumbs">
        <!-- パンくず -->
        <?php echo do_shortcode('[flexy_breadcrumb]'); ?>
    </div>
    <div class="wrap">

        <!-- ページタイトル -->
        <h2 class="search_title_jp">スポットを探す</h2>
        <h2 class="search_title">SEARCH</h2>
        <div class="wrap_search_container">

            <?php get_search_form(); ?>


        </div>



        <!-- PC表示の人のあしらい１ -->
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/search_form_img1.png" alt="装飾" class="search_img1_pc img_pc_only">
        <!-- PC表示の人のあしらい２ -->
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/search_form_img2.png" alt="装飾" class="search_img2_pc img_pc_only">
    </div>

    <!-- スマホ表示の人のあしらい -->
    <img src="assets/img/search_form_img1.png" alt="装飾" class="search_img1_sp">

    <div class="reccomend_wrap">

        <!-- <div class="pickup">＼ PICK UP! ／ </div> -->
        <!-- ピックアップタイトル -->

        <h2 class="reccomend_title_jp"><?php single_term_title(''); ?></h2>
        <h2 class="reccomend_title"><?php echo strtoupper($term); ?></h2>
    </div>
    <!-- 記事一覧 -->
    <div class="spot_list_wrap">
        <!-- カード全体の入れ物 -->
        <ul class="spot_list">


            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

            <li class="card_container">
                <!-- カード -->
                <?php get_template_part('template-parts/loop', 'spot') ?>
            </li>


            <?php endwhile;
            endif;

            ?>

        </ul>
    </div>
</main>


<?php get_footer(); ?>