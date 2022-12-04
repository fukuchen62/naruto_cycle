<?php get_header(); ?>
<!-- パンくず -->
<?php echo do_shortcode('[flexy_breadcrumb]'); ?>

<h2>検索ページ</h2>

<?php get_search_form(); ?>

<!--
<form method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <input type="hidden" name="s">
    <input type="text" name="s" id="">
    <ul>
        <?php
        $terms = get_terms('shop_type');

        foreach ($terms as $term) :
        ?>
        <li>


            <input type="checkbox" name="shop_type[]" value="<?php echo $term->slug; ?>"><label><?php echo $term->name; ?>
            </label>
        </li>
        <?php endforeach; ?>
    </ul>

    <input type="submit" value="検索する">
</form> -->

<!-- 結果1 -->
<?php

$course_id = get_query_var('course_type');
$eat_slug = get_query_var('eat');
$buy_slug = get_query_var('buy');
$enjoy_slug = get_query_var('enjoy');
$cycle_slug = get_query_var('cyclespot');
// searchform.phpから送られてきたパラメーターを取得
// $selected_terms = get_query_var('shop_type[]'); //searchform.phpの<input>のname属性の値と合わせる


// デバッグ
// echo 'name:' . $course_id;

// foreach ($eat_slug as $eat) {
//     echo 'name:' . $eat;
//     echo "\n";
// }

// foreach ($buy_slug as $buy) {
//     echo 'name:' . $buy;
//     echo "\n";
// }

// foreach ($enjoy_slug as $enjoy) {
//     echo 'name:' . $enjoy;
//     echo "\n";
// }

// foreach ($cycle_slug as $cycle) {
//     echo 'name:' . $cycle;
//     echo "\n";
// }

// searchform.phpで絞り込み条件がある場合
?>





<!-- コースだけ選択されている場合 -->

<?php if (!empty($course_id)) : ?>

<?php
    $args = array(
        'post_type' => array('shop', 'spot', 'cycle'), //カスタム投稿タイプを指定
        'posts_per_page' => -1, //表示する記事数
    );
    $taxquerysp = array('relation' => 'AND ');


    // コースを絞り込み
    $metaquerysp = array('relation' => 'AND ');
    $metaquerysp[] = array(
        'key' => 'course_id',
        'value' => $course_id,
        'compare' => 'LIKE',
    );
    ?>

<?php

    $args['tax_query'] = $taxquerysp; // 絞り込んだ情報を $args に代入する。
    $args['meta_query'] = $metaquerysp;

    $the_query = new WP_Query($args);


    if ($the_query->have_posts()) :
        while ($the_query->have_posts()) :
            $the_query->the_post();
    ?>

<?php the_title(); ?>

<?php
        endwhile;
        wp_reset_postdata();


    endif;
endif;
?>




<!-- 食べるカテゴリが選択されているとき -->
<?php if (!empty($eat_slug)) : ?>

<?php
    $args = array(
        'post_type' => array('shop', 'spot', 'cycle'), //カスタム投稿タイプを指定
        'posts_per_page' => -1, //表示する記事数
    );
    $taxquerysp = array('relation' => 'AND ');


    // コースを絞り込み
    $metaquerysp = array('relation' => 'AND ');
    $metaquerysp[] = array(
        'key' => 'course_id',
        'value' => $course_id,
        'compare' => 'LIKE',
    );


    // 食べるのスラッグで絞り込み
    $taxquerysp[] = [
        'taxonomy' => 'shop_type',           //タクソノミー：『ショップ』
        'terms' => $eat_slug,          //スラッグ名
        'field' => 'slug',              //スラッグ指定
    ];

    // if (!empty($buy_slug)) {
    // $taxquerysp[] = [
    // 'taxonomy' => 'shop_type', //タクソノミー：『ショップ』
    // 'terms' => $buy_slug, //スラッグ名
    // 'field' => 'slug', //スラッグ指定
    // ];
    // }

    // if (!empty($enjoy_slug)) {
    // $taxquerysp[] = [
    // 'taxonomy' => 'spot_type', //タクソノミー：『ショップ』
    // 'terms' => $enjoy_slug, //スラッグ名
    // 'field' => 'slug', //スラッグ指定
    // ];
    // }

    // if (!empty($cycle_slug)) {
    // $taxquerysp[] = [
    // 'taxonomy' => 'shop_type', //タクソノミー：『ショップ』
    // 'terms' => $cycle_slug, //スラッグ名
    // 'field' => 'slug', //スラッグ指定
    // ];
    // }


    // コースの絞り込み
    // $metaquerysp = array('relation' => 'AND ');
    // $metaquerysp[] = array(
    // 'key' => 'course_id',
    // 'value' => $course_id,
    // 'compare' => 'LIKE',
    // );

    ?>
<?php

    $args['tax_query'] = $taxquerysp; // 絞り込んだ情報を $args に代入する。
    $args['meta_query'] = $metaquerysp;

    $the_query = new WP_Query($args);


    if ($the_query->have_posts()) :
        while ($the_query->have_posts()) :
            $the_query->the_post();
    ?>

<?php the_title(); ?>

<?php
        endwhile;
        wp_reset_postdata();


    endif;
endif;
?>


<!-- 買うカテゴリが選択されているとき -->
<?php if (!empty($buy_slug)) :

    $args = array(
        'post_type' => array('shop', 'spot', 'cycle'), //カスタム投稿タイプを指定
        'posts_per_page' => -1, //表示する記事数
    );
    $taxquerysp = array('relation' => 'AND ');


    // 買うのスラッグで絞り込み
    $taxquerysp[] = array(
        'taxonomy' => 'shop_type', //タクソノミー：『ショップ』
        'terms' => $buy_slug, //スラッグ名
        'field' => 'slug', //スラッグ指定
    );

    // コースの絞り込み
    $metaquerysp = array('relation' => 'AND ');
    $metaquerysp[] = array(
        'key' => 'course_id',
        'value' => $course_id,
        'compare' => 'LIKE',
    );


    $args['tax_query'] = $taxquerysp;       // 絞り込んだ情報を $args に代入する。
    $args['meta_query'] = $metaquerysp;

    $the_query = new WP_Query($args);

?>

<?php if ($the_query->have_posts()) : ?>
<?php while ($the_query->have_posts()) : ?>
<?php $the_query->the_post(); ?>

<?php the_title(); ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<!-- <?php else : ?> -->
<?php endif; ?>
<?php endif; ?>


<!-- 楽しむカテゴリが選択されているとき -->
<?php if (!empty($enjoy_slug)) :

    $args = array(
        'post_type' => array('shop', 'spot', 'cycle'), //カスタム投稿タイプを指定
        'posts_per_page' => -1, //表示する記事数
    );
    $taxquerysp = array('relation' => 'AND ');


    // 楽しむのスラッグで絞り込み
    $taxquerysp[] = array(
        'taxonomy' => 'spot_type', //タクソノミー：『ショップ』
        'terms' => $enjoy_slug, //スラッグ名
        'field' => 'slug', //スラッグ指定
    );

    // コースの絞り込み
    $metaquerysp = array('relation' => 'AND ');
    $metaquerysp[] = array(
        'key' => 'course_id',
        'value' => $course_id,
        'compare' => 'LIKE',
    );


    $args['tax_query'] = $taxquerysp;       // 絞り込んだ情報を $args に代入する。
    $args['meta_query'] = $metaquerysp;

    $the_query = new WP_Query($args);

?>

<?php if ($the_query->have_posts()) : ?>
<?php while ($the_query->have_posts()) : ?>
<?php $the_query->the_post(); ?>

<?php the_title(); ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<!-- <?php else : ?> -->
<?php endif; ?>
<?php endif; ?>

<!-- サイクルカテゴリが選択されているとき -->
<?php if (!empty($cycle_slug)) :

    $args = array(
        'post_type' => array('shop', 'spot', 'cycle'), //カスタム投稿タイプを指定
        'posts_per_page' => -1, //表示する記事数
    );
    $taxquerysp = array('relation' => 'AND ');


    // 楽しむのスラッグで絞り込み
    $taxquerysp[] = array(
        'taxonomy' => 'spot_type', //タクソノミー：『ショップ』
        'terms' => $cycle_slug, //スラッグ名
        'field' => 'slug', //スラッグ指定
    );

    // コースの絞り込み
    $metaquerysp = array('relation' => 'AND ');
    $metaquerysp[] = array(
        'key' => 'course_id',
        'value' => $course_id,
        'compare' => 'LIKE',
    );


    $args['tax_query'] = $taxquerysp;       // 絞り込んだ情報を $args に代入する。
    $args['meta_query'] = $metaquerysp;

    $the_query = new WP_Query($args);

?>

<?php if ($the_query->have_posts()) : ?>
<?php while ($the_query->have_posts()) : ?>
<?php $the_query->the_post(); ?>

<?php the_title(); ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<!-- <?php else : ?> -->
<?php endif; ?>
<?php endif; ?>


<!-- <h4 class="no_search_results">
    条件に合うスポットはありませんでした。
</h4> -->


<?php get_footer(); ?>