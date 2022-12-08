<?php get_header(); ?>

<main>
    <!-- キービジュアル -->
    <div class="key_bg_under">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/key_visual_green.png" alt="マイページキービジュアル" class="key_bg_under_img">
    </div>

    <!-- パンくずリスト -->
    <div class="bradcrumbs">
        <!-- ここに＞パンくずリストが＞入ります -->



    </div>

    <section class="course">
        <h2 class="course_headline headline"><ruby><?php the_title(); ?><rt>コース詳細</rt></ruby></h2>

        <div class="course_container">
            <nav>
                <ul class="course_nav_list">
                    <li class="course_nav beginner">
                        <a href="<?php echo get_permalink(142); ?>"><span class="course_nav_text">初心者</span></a>
                    </li>
                    <li class="course_nav short">
                        <a href="<?php echo get_permalink(183); ?>"><span class="course_nav_text">短距離</span></a>
                    </li>
                    <li class="course_nav middle">
                        <a href="<?php echo get_permalink(184); ?>"><span class="course_nav_text">中距離</span></a>
                    </li>
                    <li class="course_nav long">
                        <a href="<?php echo get_permalink(185); ?>"><span class="course_nav_text">長距離</span></a>
                    </li>
                </ul>
            </nav>
            <div class="iframe_wrapper <?php the_field('class'); ?>">
                <?php the_field('map'); ?>

                <!-- <iframe class="course_iframe" src="</iframe> -->
                <!-- <iframe class=" course_iframe" src="https://www.google.com/maps/d/u/0/embed?mid=1U-au0BIPQuKPq7I5h3-k2B5TPSR7aLk&ehbc=2E312F"></iframe> -->
            </div>
            <div>
                <div class="icon_list_wrap">
                    <ul class="icon_list">
                        <li class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course_icon_gourmet_img.png" alt="グルメアイコン" class="icon_pic" />グルメ
                        </li>
                        <li class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course_icon_shop_img.png" alt="買い物アイコン" class="icon_pic" />買い物
                            <!-- <img src="https://placehold.jp/40x40.png" alt="買い物アイコン" class="icon_pic" />買い物 -->
                        </li>
                        <li class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course_icon_michinoeki_img .png" alt="道の駅アイコン" class="icon_pic" />道の駅
                        </li>
                        <li class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course_icon_exp_img.png" alt="体験アイコン" class="icon_pic" />体験
                        </li>
                        <li class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course_icon_hotel_img.png" alt="宿泊アイコン" class="icon_pic" />宿泊
                        </li>
                        <li class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course_icon_onsen_img.png" alt="入浴アイコン" class="icon_pic" />入浴
                        </li>
                        <li class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course_icon_toilet_img .png" alt="トイレアイコン" class="icon_pic" />トイレ
                        </li>
                        <li class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course_icon_parking_img.png" alt="駐車場アイコン" class="icon_pic" />駐車場
                        </li>
                        <li class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course_icon_view_img.png" alt="ビュースポットアイコン" class="icon_pic" />ビュースポット
                        </li>
                        <li class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course_icon_rent_img.png" alt="レンタサイクルアイコン" class="icon_pic" />レンタサイクル
                        </li>
                        <li class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course_icon_onsen_img.png" alt="サイクルショップアイコン" class="icon_pic" />サイクルショップ
                        </li>
                        <li class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course_icon_convini_img.png" alt="コンビニアイコン" class="icon_pic" />コンビニ
                        </li>
                        <li class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course_icon_others_img.png" alt="その他アイコン" class="icon_pic" />その他
                        </li>
                    </ul>
                </div>
            </div>
            <!-- <div class="common_btn dl-btn">地図をダウンロード</div>
        </div> -->
    </section>

    <section class="info">
        <h2 class="info_headline headline"><ruby>INFOMATION<rt>コース情報</rt></ruby></h2>
        <div class="circle">
            <div class="inner">
                <!-- 文字配置の基準となる親要素 -->
                <p class="text">NARUTO CYCLETTO! </p>
            </div>
        </div>
        <div class="info_wrap info_bg_deco"></div>
        <div class="info_wrap info_main">
            <img src="https://placehold.jp/22x60.png" alt="クリップ" class="course_info_pic_clip" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course_info_img1.png" alt="自転車に乗る女性" class="course_info_pic_woman animation move_rolling" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course_info_img2.png" alt="自転車に乗る男性" class="course_info_pic_man animation move_jump" />
            <div class="info_content">
                <ul class="info_list">
                    <li class="info_item">
                        コース
                    </li>
                    <li>
                        <?php the_title(); ?>
                    </li>
                    <li class="info_item">
                        距離
                    </li>
                    <li><?php the_field('distance'); ?> km</li>
                    <li class="info_item">
                        所要時間
                    </li>
                    <li><?php the_field('time'); ?></li>
                    <li class="info_item">
                        難易度
                    </li>
                    <li><?php the_field('level'); ?></li>
                    <li class="info_item">
                        消費カロリー
                    </li>
                    <li>
                        約<?php the_field('calorie'); ?> kcal(※)
                    </li>
                    <li class="info_item">
                        ビューポイント
                    </li>
                    <li>
                        <?php the_field('number_viewpoints'); ?> 箇所
                    </li>
                </ul>
                <span class="annotation">(※消費カロリーは距離からの概算です。)</span>
            </div>
            <div class="info_content">
                <span class="info_item">概要</span><br>
                <p class="comment_text"><?php the_field('comment'); ?></p>
            </div>

        </div>

    </section>

    <section class="course_spot">
        <h2 class="course_spot_headline headline"><ruby>SPOT<rt>周辺スポット</rt></ruby></h2>


        <div class="course_spot_cate_list">
            <div class="course_spot_cate_item">
                <h3 class="course_spot_cate_headline eat">食べる</h3>

                <!-- カード全体の入れ物 -->
                <ul class="spot_list flex">
                    <!-- カード -->

                    <!-- コースIDを取得 -->
                    <?php $cid = get_the_ID(); ?>
                    <?php
                    $args = array(
                        'post_type' => 'shop', //カスタム投稿タイプを指定
                        'posts_per_page' => -1, //表示する記事数
                    );
                    $taxquerysp = array('relation' => 'AND ');
                    $taxquerysp[] = array(
                        'taxonomy' => 'shop_type',
                        'terms' => array('eat'),
                        'field' => 'slug',
                    );

                    $metaquerysp = array('relation' => 'AND ');
                    $metaquerysp[] = array(
                        'key' => 'course_id',
                        'value' => $cid,
                        'compare' => 'LIKE',
                    );

                    $args['tax_query'] = $taxquerysp;
                    $args['meta_query'] = $metaquerysp;

                    $spot_query = new WP_Query($args); //サブループを変数に格納

                    if ($spot_query->have_posts()) :
                        while ($spot_query->have_posts()) :
                            $spot_query->the_post();
                    ?>

                    <li class="card_container">
                        <div class="spot_card relative">

                            <!-- カード１枚にかかるスポット一覧へのリンク -->
                            <a href="<?php the_permalink(); ?>">
                                <!-- カード全体の入れ物 -->
                                <ul class="spot_list">
                                    <!-- カード１枚の入れ物-->
                                    <li class="spot_item relative">
                                        <!-- お気に入りボタン -->
                                        <div class="spot_like_icon">
                                            <?php echo get_favorites_button(get_the_ID()); ?>
                                            <!-- <i class="far fa-heart LikesIcon-fa-heart"></i> -->
                                        </div>
                                        <!-- カテゴリーのラベル -->
                                        <?php $pic = get_field('label');
                                                $pic_url = $pic['url'];
                                                ?>
                                        <img src="<?php echo $pic_url; ?>" alt="カテゴリーのラベル" class="spot_item_cate">
                                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spot_cate_grume_img.png" alt="カテゴリーのラベル" class="spot_item_cate"> -->

                                        <!-- スポット写真 -->
                                        <?php
                                                $pic = get_field('eyecatch');
                                                //  サムネイルサイズ画像のURL
                                                $pic_url = $pic['sizes']['thumbnail'];
                                                ?>
                                        <img class="spot_item_img" src="<?php echo $pic_url; ?>" alt="スポットの写真">
                                        <!-- スポット名 -->
                                        <h3 class="spot_item_name"><?php the_title(); ?></h3>
                                        <!-- スポット情報の表 -->
                                        <dl class="spot_item_info flex">
                                            <?php $page_id = get_the_id();
                                                    ?>



                                            <dt></dt>
                                            <dd>
                                                <?php $terms_shop = get_the_terms($post->ID, 'shop_type'); ?>
                                                <?php echo get_the_term_list($post->ID, 'shop_type', '#', '<br>#', '') ?>
                                                <?php $terms_spot = get_the_terms($post->ID, 'spot_type'); ?>
                                                <?php echo get_the_term_list($post->ID, 'spot_type', '#', '<br>#', '') ?>
                                            </dd>

                                        </dl>
                                    </li>
                                </ul>
                            </a>
                        </div>
                    </li>
                    <?php endwhile;
                    endif;
                    // wp_reset_postdata(); //サブループを抜ける
                    ?>
                </ul>
                <div class="spot_more_btn common_btn eat_btn">もっと見る</div>
            </div>

            <div class="course_spot_cate_item">
                <h3 class="course_spot_cate_headline enjoy">楽しむ</h3>
                <ul class="spot_list flex">
                    <!-- カード -->

                    <!-- コースIDを取得 -->
                    <?php $cid = get_the_ID(); ?>
                    <?php
                    $args = array(
                        'post_type' => 'spot', //カスタム投稿タイプを指定
                        'posts_per_page' => -1, //表示する記事数
                    );
                    $taxquerysp = array('relation' => 'AND ');
                    $taxquerysp[] = array(
                        'taxonomy' => 'spot_type',
                        'terms' => array('enjoy'),
                        'field' => 'slug',
                    );

                    $metaquerysp = array('relation' => 'AND ');
                    $metaquerysp[] = array(
                        'key' => 'course_id',
                        'value' => $cid,
                        'compare' => 'LIKE',
                    );

                    $args['tax_query'] = $taxquerysp;
                    $args['meta_query'] = $metaquerysp;

                    $spot_query = new WP_Query($args); //サブループを変数に格納

                    if ($spot_query->have_posts()) :
                        while ($spot_query->have_posts()) :
                            $spot_query->the_post();
                    ?>

                    <li class="card_container">
                        <div class="spot_card relative">

                            <!-- カード１枚にかかるスポット一覧へのリンク -->
                            <a href="<?php the_permalink(); ?>">
                                <!-- カード全体の入れ物 -->
                                <ul class="spot_list">
                                    <!-- カード１枚の入れ物-->
                                    <li class="spot_item relative">
                                        <!-- お気に入りボタン -->
                                        <div class="spot_like_icon">
                                            <?php echo get_favorites_button(get_the_ID()); ?>
                                            <!-- <i class="far fa-heart LikesIcon-fa-heart"></i> -->
                                        </div>
                                        <!-- カテゴリーのラベル -->
                                        <?php $pic = get_field('label');
                                                $pic_url = $pic['url'];
                                                ?>
                                        <img src="<?php echo $pic_url; ?>" alt="カテゴリーのラベル" class="spot_item_cate">
                                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spot_cate_grume_img.png" alt="カテゴリーのラベル" class="spot_item_cate"> -->
                                        <!-- スポット写真 -->
                                        <?php
                                                $pic = get_field('eyecatch');
                                                //  サムネイルサイズ画像のURL
                                                $pic_url = $pic['sizes']['thumbnail'];
                                                ?>
                                        <img class="spot_item_img" src="<?php echo $pic_url; ?>" alt="スポットの写真">

                                        <!-- スポット名 -->
                                        <h3 class="spot_item_name"><?php the_title(); ?></h3>
                                        <!-- スポット情報の表 -->

                                        <dl class="spot_item_info flex">
                                            <?php $page_id = get_the_id();
                                                    ?>



                                            <dt></dt>
                                            <dd>
                                                <?php $terms_shop = get_the_terms($post->ID, 'shop_type'); ?>
                                                <?php echo get_the_term_list($post->ID, 'shop_type', '#', '<br>#', '') ?>
                                                <?php $terms_spot = get_the_terms($post->ID, 'spot_type'); ?>
                                                <?php echo get_the_term_list($post->ID, 'spot_type', '#', '<br>#', '') ?>
                                            </dd>

                                        </dl>
                                    </li>
                                </ul>
                            </a>
                        </div>
                    </li>
                    <?php endwhile;
                    endif;
                    wp_reset_postdata(); //サブループを抜ける
                    ?>

                </ul>
                <div class="spot_more_btn common_btn enjoy_btn">もっと見る</div>
            </div>

            <div class="course_spot_cate_item">
                <h3 class="course_spot_cate_headline shopping">買う</h3>
                <ul class="spot_list flex">
                    <!-- カード -->

                    <!-- コースIDを取得 -->
                    <?php $cid = get_the_ID(); ?>
                    <?php
                    $args = array(
                        'post_type' => 'shop', //カスタム投稿タイプを指定
                        'posts_per_page' => -1, //表示する記事数
                    );
                    $taxquerysp = array('relation' => 'AND ');
                    $taxquerysp[] = array(
                        'taxonomy' => 'shop_type',
                        'terms' => array('buy'),
                        'field' => 'slug',
                    );

                    $metaquerysp = array('relation' => 'AND ');
                    $metaquerysp[] = array(
                        'key' => 'course_id',
                        'value' => $cid,
                        'compare' => 'LIKE',
                    );

                    $args['tax_query'] = $taxquerysp;
                    $args['meta_query'] = $metaquerysp;

                    $spot_query = new WP_Query($args); //サブループを変数に格納

                    if ($spot_query->have_posts()) :
                        while ($spot_query->have_posts()) :
                            $spot_query->the_post();
                    ?>

                    <li class="card_container">
                        <div class="spot_card relative">

                            <!-- カード１枚にかかるスポット一覧へのリンク -->
                            <a href="<?php the_permalink(); ?>">
                                <!-- カード全体の入れ物 -->
                                <ul class="spot_list">
                                    <!-- カード１枚の入れ物-->
                                    <li class="spot_item relative">
                                        <!-- お気に入りボタン -->
                                        <div class="spot_like_icon">
                                            <?php echo get_favorites_button(get_the_ID()); ?>
                                            <!-- <i class="far fa-heart LikesIcon-fa-heart"></i> -->
                                        </div>
                                        <!-- カテゴリーのラベル -->
                                        <?php $pic = get_field('label');
                                                $pic_url = $pic['url'];
                                                ?>
                                        <img src="<?php echo $pic_url; ?>" alt="カテゴリーのラベル" class="spot_item_cate">
                                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spot_cate_grume_img.png" alt="カテゴリーのラベル" class="spot_item_cate"> -->

                                        <!-- スポット写真 -->
                                        <?php
                                                $pic = get_field('eyecatch');
                                                //  サムネイルサイズ画像のURL
                                                $pic_url = $pic['sizes']['thumbnail'];
                                                ?>
                                        <img class="spot_item_img" src="<?php echo $pic_url; ?>" alt="スポットの写真">

                                        <!-- スポット名 -->
                                        <h3 class="spot_item_name"><?php the_title(); ?></h3>
                                        <!-- スポット情報の表 -->

                                        <dl class="spot_item_info flex">
                                            <?php $page_id = get_the_id();
                                                    ?>



                                            <dt></dt>
                                            <dd>
                                                <?php $terms_shop = get_the_terms($post->ID, 'shop_type'); ?>
                                                <?php echo get_the_term_list($post->ID, 'shop_type', '#', '<br>#', '') ?>
                                                <?php $terms_spot = get_the_terms($post->ID, 'spot_type'); ?>
                                                <?php echo get_the_term_list($post->ID, 'spot_type', '#', '<br>#', '') ?>
                                            </dd>
                                        </dl>
                                    </li>
                                </ul>
                            </a>
                        </div>
                    </li>
                    <?php endwhile;
                    endif;
                    wp_reset_postdata(); //サブループを抜ける
                    ?>
                </ul>
                <div class="spot_more_btn common_btn shopping_btn">もっと見る</div>
            </div>


            <div class="course_spot_cate_item">
                <h3 class="course_spot_cate_headline cyclespot">サイクルスポット</h3>
                <ul class="spot_list flex">
                    <!-- カード -->

                    <!-- コースIDを取得 -->
                    <?php $cid = get_the_ID(); ?>
                    <?php
                    $args = array(
                        'post_type' => 'cycle', //カスタム投稿タイプを指定
                        'posts_per_page' => -1, //表示する記事数
                    );
                    $taxquerysp = array('relation' => 'AND ');
                    $taxquerysp[] = array(
                        'taxonomy' => 'shop_type',
                        'terms' => array('cycle'),
                        'field' => 'slug',
                    );

                    $metaquerysp = array('relation' => 'AND ');
                    $metaquerysp[] = array(
                        'key' => 'course_id',
                        'value' => $cid,
                        'compare' => 'LIKE',
                    );

                    $args['tax_query'] = $taxquerysp;
                    $args['meta_query'] = $metaquerysp;

                    $spot_query = new WP_Query($args); //サブループを変数に格納

                    if ($spot_query->have_posts()) :
                        while ($spot_query->have_posts()) :
                            $spot_query->the_post();
                    ?>


                    <li class="card_container">
                        <div class="spot_card relative">

                            <!-- カード１枚にかかるスポット一覧へのリンク -->
                            <a href="<?php the_permalink(); ?>">
                                <!-- カード全体の入れ物 -->
                                <ul class="spot_list">
                                    <!-- カード１枚の入れ物-->
                                    <li class="spot_item relative">
                                        <!-- お気に入りボタン -->
                                        <div class="spot_like_icon">
                                            <?php echo get_favorites_button(get_the_ID()); ?>
                                            <!-- <i class="far fa-heart LikesIcon-fa-heart"></i> -->
                                        </div>
                                        <!-- カテゴリーのラベル -->
                                        <?php $pic = get_field('label');
                                                $pic_url = $pic['url'];
                                                ?>
                                        <img src="<?php echo $pic_url; ?>" alt="カテゴリーのラベル" class="spot_item_cate">
                                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spot_cate_grume_img.png" alt="カテゴリーのラベル" class="spot_item_cate"> -->

                                        <!-- スポット写真 -->

                                        <?php
                                                $pic = get_field('eyecatch');
                                                //  サムネイルサイズ画像のURL
                                                $pic_url = $pic['sizes']['thumbnail'];
                                                ?>
                                        <img class="spot_item_img" src="<?php echo $pic_url; ?>" alt="スポットの写真">

                                        <!-- スポット名 -->
                                        <h3 class="spot_item_name"><?php the_title(); ?></h3>
                                        <!-- スポット情報の表 -->

                                        <dl class="spot_item_info flex">
                                            <?php $page_id = get_the_id();
                                                    ?>



                                            <dt></dt>
                                            <dd>
                                                <?php $terms_shop = get_the_terms($post->ID, 'shop_type'); ?>
                                                <?php echo get_the_term_list($post->ID, 'shop_type', '#', '<br>#', '') ?>
                                                <?php $terms_spot = get_the_terms($post->ID, 'spot_type'); ?>
                                                <?php echo get_the_term_list($post->ID, 'spot_type', '#', '<br>#', '') ?>
                                            </dd>

                                        </dl>
                                    </li>
                                </ul>
                            </a>
                        </div>
                    </li>

                    <?php endwhile;
                    endif;
                    wp_reset_postdata(); //サブループを抜ける
                    ?>
                </ul>
                <div class="spot_more_btn common_btn cycle_btn">もっと見る</div>
            </div>
        </div>
    </section>
</main>
<!-- フッター切り取りここから -->

<?php get_footer(); ?>