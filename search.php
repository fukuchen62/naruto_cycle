<?php get_header(); ?>

<!-- ヘッダー切り取りここまで -->
<main>
    <!-- キービジュアル -->
    <div class="key_bg_under">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/key_visual_orange.png" alt="マイページキービジュアル" class="key_bg_under_img">
    </div>

    <!-- パンくずリスト -->
    <div class="bradcrumbs">
        <!-- パンくず -->
        <?php echo do_shortcode('[flexy_breadcrumb]'); ?>
    </div>
    <div class="wrap">

        <!-- ページタイトル -->
        <h2 class="search_title_jp">スポットを探す</h2>
        <h2 class="search_title">SEARCH</h2>
        <div class="wrap_search_container">

            <?php get_search_form(); ?>


        </div>



        <!-- PC表示の人のあしらい１ -->
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/search_form_img1.png" alt="装飾" class="search_img1_pc img_pc_only">
        <!-- PC表示の人のあしらい２ -->
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/search_form_img2.png" alt="装飾" class="search_img2_pc img_pc_only">
    </div>

    <!-- スマホ表示の人のあしらい -->
    <img src="assets/img/search_form_img1.png" alt="装飾" class="search_img1_sp">

    <div class="reccomend_wrap">

        <!-- <div class="pickup">＼ PICK UP! ／ </div> -->
        <!-- ピックアップタイトル -->

        <h2 class="reccomend_title_jp">検索結果</h2>
        <h2 class="reccomend_title">RESULT</h2>
    </div>
    <div class="course_spot_cate_list">
        <ul class="spot_list">


            <?php
      // searchform.phpから送られてきたパラメーターを取得
      $course_id = get_query_var('course_type');
      $eat_slug = get_query_var('eat');
      $buy_slug = get_query_var('buy');
      $enjoy_slug = get_query_var('enjoy');
      $cycle_slug = get_query_var('cyclespot');


      $eat_figure = 0;
      $buy_figure = 0;
      $enjoy_figure = 0;
      $cycle_figure = 0;

      ?>


            <!-- コースだけ選択されている場合 -->

            <?php if (!empty($course_id) && (empty($eat_slug)) && (empty($buy_slug)) && (empty($enjoy_slug)) && (empty($cycle_slug))) : ?>

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

            <?php get_template_part('template-parts/loop', 'search'); ?>

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
        ?>

            <?php

        $args['tax_query'] = $taxquerysp; // 絞り込んだ情報を $args に代入する。
        $args['meta_query'] = $metaquerysp;

        $the_query = new WP_Query($args);

        // 食べるの件数結果
        $eat_figure = $the_query->found_posts;
        // echo $eat_figure;

        if ($the_query->have_posts()) :
          while ($the_query->have_posts()) :
            $the_query->the_post();
        ?>

            <?php get_template_part('template-parts/loop', 'search'); ?>

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

        // 買うの件数結果
        $buy_figure = $the_query->found_posts;
        // echo $buy_figure;


      ?>

            <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : ?>
            <?php $the_query->the_post(); ?>

            <?php get_template_part('template-parts/loop', 'search'); ?>

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

        // 楽しむの件数結果
        $enjoy_figure = $the_query->found_posts;
        // echo $enjoy_figure;

      ?>

            <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : ?>
            <?php $the_query->the_post(); ?>

            <?php get_template_part('template-parts/loop', 'search'); ?>

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


        // サイクルのスラッグで絞り込み
        $taxquerysp[] = array(
          'taxonomy' => 'shop_type', //タクソノミー：『ショップ』
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

        // サイクルの件数結果
        $cycle_figure = $the_query->found_posts;
        // echo $cycle_figure;
      ?>

            <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : ?>
            <?php $the_query->the_post(); ?>

            <?php get_template_part('template-parts/loop', 'search'); ?>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <!-- <?php else : ?> -->
            <?php endif; ?>
            <?php endif; ?>

            <!-- 検索結果がないとき -->
            <?php if (!empty($course_id) && (!empty($eat_slug) || !empty($buy_slug) || !empty($enjoy_slug) || !empty($cycle_slug)) && ($eat_figure == 0 || $eat_figure == null) && $buy_figure == 0 && $enjoy_figure == 0 && $cycle_figure == 0)

        echo '<P>該当のスポットはありません</P>';
      ?>


        </ul>
        <div class="spot_more_btn common_btn">もっと見る</div>
    </div>

</main>
<!-- フッター切り取りここから -->

<?php get_footer(); ?>