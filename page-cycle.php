<?php get_header(); ?>
<h2>サイクリングについて</h2>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<?php the_title(); ?>
<?php the_content(); ?>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>