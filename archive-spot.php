<?php get_header(); ?>

<?php echo do_shortcode('[flexy_breadcrumb]'); ?>


<h2>スポット検索
</h2>

<?php get_search_form(); ?>



<p>記事の表示</p>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>


<div class="col-md-3">

    <?php get_template_part('template-parts/loop', 'course') ?>

</div>
<?php endwhile; ?>
<!-- ループの終了 -->
<?php endif; ?>

<?php get_footer(); ?>