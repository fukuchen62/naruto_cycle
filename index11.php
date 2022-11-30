<?php get_header(); ?>

<!-- パンくず -->
<?php echo do_shortcode('[flexy_breadcrumb]'); ?>

<h2><span>ニュース</span> NEWS</h2>

<main>
    <?php if (is_month()) : ?>
    <h2><?php the_time('Y年m月'); ?></h2>
    <?php else : ?>
    <h2><?php wp_title(''); ?></h2>
    <?php endif; ?>


    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>


    <div class="col-md-3">

        <?php get_template_part('template-parts/loop', 'news') ?>

    </div>
    <?php endwhile; ?>
    <!-- ループの終了 -->
    <?php endif; ?>

    <div>
        <?php get_sidebar('categories'); ?>
        <?php get_sidebar('archives'); ?>
    </div>

</main>
<?php get_footer(); ?>