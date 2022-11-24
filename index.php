<?php get_header(); ?>
<h2>記事一覧</h2>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>


<div class="col-md-3">

    <?php get_template_part('template-parts/loop', 'news') ?>

</div>
<?php endwhile; ?>
<!-- ループの終了 -->
<?php endif; ?>

<?php get_footer(); ?>