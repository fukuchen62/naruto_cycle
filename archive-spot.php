<?php get_header(); ?>

<?php echo do_shortcode('[flexy_breadcrumb]'); ?>


<h2>スポット検索
</h2>

<?php get_search_form(); ?>








<main class="main">

    <p>記事の表示</p>

    <!-- ショップタイプの投稿のループ -->
    <?php
    $shops = get_terms(array('taxonomy' => 'shop_type'));
    if (!empty($shops)) :
    ?>

    <?php foreach ($shops as $shop) : ?>

    <section class="sec">
        <div class="container">
            <div class="sec_header">
                <h2 class="title title-jp"><?php echo $shop->name; ?></h2>
                <span class="title title-en"><?php echo strtoupper($shop->slug); ?></span>
            </div>
            <div class="row justify-content-center">

                <?php
                        //ショップの投稿タイプ
                        $args = array(
                            'post_type' => 'shop', 'spot', 'cycle',
                            'posts_per_page' => -1,
                        );
                        //ショップの種類で絞り込む
                        $taxquerysp = array('relation' => 'AND');
                        $taxquerysp[] = array(
                            'taxonomy' => 'shop_type',
                            'terms' => $shop->slug,
                            'field' => 'slug',
                        );
                        $args['tax_query'] = $taxquerysp;

                        $the_query = new WP_Query($args);
                        if ($the_query->have_posts()) :
                        ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>


                <div class="col-md-3">

                    <?php get_template_part('template-parts/loop', 'spot') ?>

                </div>
                <?php endwhile; ?>
                <!-- ループの終了 -->
                <?php endif; ?>





            </div>
        </div>
    </section>

    <?php endforeach; ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>

    <!-- スポットタイプの投稿のループ -->
    <?php
    $spots = get_terms(array('taxonomy' => 'spot_type'));
    if (!empty($spots)) :
    ?>

    <?php foreach ($spots as $spot) : ?>

    <section class="sec">
        <div class="container">
            <div class="sec_header">
                <h2 class="title title-jp"><?php echo $spot->name; ?></h2>
                <span class="title title-en"><?php echo strtoupper($spot->slug); ?></span>
            </div>
            <div class="row justify-content-center">

                <?php
                        //スポットの投稿タイプ
                        $args = array(
                            'post_type' => 'spot',
                            'posts_per_page' => -1,
                        );
                        //スポットの種類で絞り込む
                        $taxquerysp = array('relation' => 'AND');
                        $taxquerysp[] = array(
                            'taxonomy' => 'spot_type',
                            'terms' => $spot->slug,
                            'field' => 'slug',
                        );
                        $args['tax_query'] = $taxquerysp;

                        $the_query = new WP_Query($args);
                        if ($the_query->have_posts()) :
                        ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>


                <div class="col-md-3">

                    <?php get_template_part('template-parts/loop', 'spot') ?>

                </div>
                <?php endwhile; ?>
                <!-- ループの終了 -->
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>




            </div>
        </div>
    </section>

    <?php endforeach; ?>
    <?php endif; ?>

</main>


<?php get_footer(); ?>