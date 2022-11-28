<?php get_header(); ?>
<h2>おといあわせ</h2>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>


<div class="col-md-3">


    <?php the_content(); ?>
</div>
<?php endwhile; ?>
<!-- ループの終了 -->
<?php endif; ?>
<?php get_footer(); ?>