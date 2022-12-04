<?php get_header(); ?>

<?php echo do_shortcode('[flexy_breadcrumb]'); ?>


<h2>スポット検索
</h2>

<?php get_search_form(); ?>








<main class="main">

    <p>記事の表示</p>

    <!-- ショップ記事表示 -->
    <?php
    $args = array(
        'post_type' => 'shop', //カスタム投稿タイプを指定
        // 'taxonomy' => 'news_category', //カスタムタクソノミーを指定
        'orderby' => 'rand', // ランダムで表示
        'posts_per_page' => 1, //表示する記事数
    );
    $spot_query = new WP_Query($args); //サブループを変数に格納
    if ($spot_query->have_posts()) :
        while ($spot_query->have_posts()) :
            $spot_query->the_post();
    ?>

    <!-- ここにhtml -->
    <div class="col-md-3">
        <?php get_template_part('template-parts/loop', 'spot') ?>
    </div>

    <?php endwhile;
    endif;
    wp_reset_postdata(); //サブループを抜ける
    ?>

    <!-- スポット記事表示 -->
    <?php
    $args = array(
        'post_type' => 'spot', //カスタム投稿タイプを指定
        // 'taxonomy' => 'news_category', //カスタムタクソノミーを指定
        'orderby' => 'rand', // ランダムで表示
        'posts_per_page' => 1, //表示する記事数
    );
    $spot_query = new WP_Query($args); //サブループを変数に格納
    if ($spot_query->have_posts()) :
        while ($spot_query->have_posts()) :
            $spot_query->the_post();
    ?>

    <!-- ここにhtml -->
    <div class="col-md-3">
        <?php get_template_part('template-parts/loop', 'spot') ?>
    </div>

    <?php endwhile;
    endif;
    wp_reset_postdata(); //サブループを抜ける
    ?>

    <!-- サイクル記事表示 -->
    <?php
    $args = array(
        'post_type' => 'cycle', //カスタム投稿タイプを指定
        // 'taxonomy' => 'news_category', //カスタムタクソノミーを指定
        'orderby' => 'rand', // ランダムで表示
        'posts_per_page' => 1, //表示する記事数
    );
    $spot_query = new WP_Query($args); //サブループを変数に格納
    if ($spot_query->have_posts()) :
        while ($spot_query->have_posts()) :
            $spot_query->the_post();
    ?>

    <!-- ここにhtml -->
    <div class="col-md-3">
        <?php get_template_part('template-parts/loop', 'spot') ?>
    </div>

    <?php endwhile;
    endif;
    wp_reset_postdata(); //サブループを抜ける
    ?>




</main>


<?php get_footer(); ?>