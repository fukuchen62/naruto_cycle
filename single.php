<?php get_header(); ?>
<h2>記事ページ</h2>

<!-- ワードプレスループ始まり -->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<?php the_title(); ?>
<?php the_content(); ?>

<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>