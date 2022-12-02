<?php get_header(); ?>
<!-- パンくず -->
<?php echo do_shortcode('[flexy_breadcrumb]'); ?>

<h2>記事ページ</h2>

<!-- ワードプレスループ始まり -->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<article id="<?php the_ID(); ?>">
    <!-- タイトル -->
    <h2><?php the_title(); ?></h2>
    <!-- 日付 -->
    <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
    <!-- カテゴリ -->
    <?php the_category(); ?>
    <!-- 内容 -->
    <?php the_content(); ?>
</article>

<!-- 前後記事のリンク -->
<div>
    <?php previous_post_link(); ?>

    <?php next_post_link(); ?>
</div>

<?php endwhile; ?>
<?php endif; ?>

<div>
    <?php get_sidebar('categories'); ?>
    <?php get_sidebar('archives'); ?>
</div>
<?php get_footer(); ?>