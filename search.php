<?php get_header(); ?>
<h2>検索ページ</h2>

<?php
$s = $_GET['s'];

if (isset($_GET['check01'])) {
    $taxquerysp[] = array(
        'taxonomy' => 'category',
        'terms' => $_GET['check01'],
        'operator' => 'AND',
        'include_children' => false
    );
} else {
    $taxquerysp[] = '';
}

$search_args = array(
    's' => $s,
    'tax_query' => $taxquerysp
);
$the_query = new WP_Query($search_args); ?>

<?php get_search_form(); //検索フォームの表示
?>

<div>検索結果：全 <?php echo $the_query->found_posts . ' 件'; ?></div>

<?php /* Start the Loop */ ?>
<?php if ($the_query->found_posts) {
    while ($the_query->have_posts()) : $the_query->the_post(); ?>

～～結果がある場合、ここに表示したい内容～～

<?php endwhile; ?>

<?php wp_reset_postdata(); ?>

<?php } else { ?>

～～結果がない場合、ここに表示したい内容～～

<?php } ?>

<?php get_footer(); ?>