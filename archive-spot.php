<?php get_header(); ?>

<!-- ヘッダー切り取りここまで -->
<main>
    <!-- キービジュアル -->
    <div class="key_bg_under">
        <img src="https://placehold.jp/1440x400.png" alt="マイページキービジュアル" class="key_bg_under_img">
    </div>

    <!-- パンくずリスト -->
    <div class="bradcrumbs">
        ここに＞パンくずリストが＞入ります
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

    </div>
    <!-- スマホ表示の人のあしらい -->
    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/search_form_img1.png" alt="装飾" class="search_img1_sp">

    <div class="reccomend_wrap">
        <div class="pickup">＼ PICK UP! ／ </div>
        <!-- ピックアップタイトル -->

        <h2 class="reccomend_title_jp">こちらもいかがですか？</h2>
        <h2 class="reccomend_title">RECCOMEND</h2>
    </div>

    <div class="spot_list_wrap">
        <!-- カード全体の入れ物 -->
        <ul class="spot_list">

            <!-- ショップ記事ランダムで1件表示 -->
            <?php
      $args = array(
        'post_type' => 'shop', //カスタム投稿タイプを指定
        // 'taxonomy' => 'news_category', //カスタムタクソノミーを指定
        'orderby' => 'rand', // ランダムで表示
        'posts_per_page' => 1, //表示する記事数
      );
      $spot_query = new WP_Query($args); //サブループを変数に格納
      if ($spot_query->have_posts()) :
        while ($spot_query->have_posts()) :
          $spot_query->the_post();
      ?>

            <li class="card_container">
                <!-- カード -->
                <?php get_template_part('template-parts/loop', 'spot') ?>
            </li>

            <?php endwhile;
      endif;
      wp_reset_postdata(); //サブループを抜ける
      ?>


            <!-- スポット記事ランダムで1件表示 -->
            <?php
      $args = array(
        'post_type' => 'spot', //カスタム投稿タイプを指定
        // 'taxonomy' => 'news_category', //カスタムタクソノミーを指定
        'orderby' => 'rand', // ランダムで表示
        'posts_per_page' => 1, //表示する記事数
      );
      $spot_query = new WP_Query($args); //サブループを変数に格納
      if ($spot_query->have_posts()) :
        while ($spot_query->have_posts()) :
          $spot_query->the_post();
      ?>
            <li class="card_container">
                <!-- カード -->

                <?php get_template_part('template-parts/loop', 'spot') ?>

            </li>
            <?php endwhile;
      endif;
      wp_reset_postdata(); //サブループを抜ける
      ?>

            <!-- サイクル記事ランダムで1件表示 -->
            <?php
      $args = array(
        'post_type' => 'cycle', //カスタム投稿タイプを指定
        // 'taxonomy' => 'news_category', //カスタムタクソノミーを指定
        'orderby' => 'rand', // ランダムで表示
        'posts_per_page' => 1, //表示する記事数
      );
      $spot_query = new WP_Query($args); //サブループを変数に格納
      if ($spot_query->have_posts()) :
        while ($spot_query->have_posts()) :
          $spot_query->the_post();
      ?>
            <li class="card_container">
                <!-- カード -->


                <?php get_template_part('template-parts/loop', 'spot') ?>

            </li>
            <?php endwhile;
      endif;
      wp_reset_postdata(); //サブループを抜ける
      ?>

        </ul>
    </div>
    </div>

</main>
<!-- フッター切り取りここから -->
<?php get_footer(); ?>