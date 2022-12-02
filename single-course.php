<!-- ヘッダー切り取りここから -->
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="鳴門を自転車でぐるっと巡るサイクリングコースを紹介。定番の観光地から穴場スポットまで網羅したおススメコースをマップで確認！知っておきたい注意点や駐輪場の事まで詳しく掲載。鳴門の自転車旅には欠かせないサイクリング情報サイトです。" />
    <meta name="keywords" content="サイクリングマップ,四国,サイクルショップ,ASA,淡路島,大鳴門橋,おすすめ,徳島,鳴門,観光,サイクリング,自転車、絶景,サイクリングコース" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <title>なるとサイくるっと！</title>
    <!-- 外部css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/header.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/footer.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/course.css" />

    <!-- googlefont本体ここから2行 -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Arvo&family=Noto+Sans+JP:wght@400;900&display=swap" rel="stylesheet">
    <!-- 全体用font↓ -->

    <!-- h1のfont↓ -->

    <!-- FontAwesome↓ -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet" />
    <!-- jQuery本体↓ -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- ファビコン↓() -->
</head>

<body>
    <header class="header flex">
        <h1 class="header_logo"><a href="#"><img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/header_logo_img.png" alt="なるとサイくるっと！のロゴ"></a></h1>
        <nav>
            <ul class="menu">
                <li class="menu-list font_edge_white">
                    <a href="news.html">NEWS</a>
                </li>
                <li class="menu-list font_edge_white">
                    <a href="howto.html">HOWTO</a>
                </li>
                <li class="menu-list font_edge_white">
                    <a href="course.html">COURSE</a>
                </li>
                <li class="menu-list font_edge_white">
                    <a href="spot.html">SPOT</a>
                </li>
                <li class="menu-list font_edge_white">
                    <a href="mypage.html">MYPAGE</a>
                </li>
                <li class="menu-list font_edge_white">
                    <a href="question.html">Q&A</a>
                </li>
            </ul>
            <button type="button" class="btn js-btn">
                <span class="btn-line"></span>
            </button>
        </nav>
    </header>
    <!-- ヘッダー切り取りここまで -->
    <main>
        <!-- キービジュアル -->
        <div class="key_bg_under">
            <img src="https://placehold.jp/1440x400.png" alt="マイページキービジュアル" class="key_bg_under_img">
        </div>

        <!-- パンくずリスト -->
        <div class="bradcrumbs">
            <!-- ここに＞パンくずリストが＞入ります -->
            <?php echo do_shortcode('[flexy_breadcrumb]'); ?>
        </div>
        <section class="course">
            <h2 class="course_headline headline"><ruby><?php the_title(); ?><rt>コース詳細</rt></ruby></h2>
            <div class="course_container">
                <nav>
                    <ul class="course_nav_list">
                        <li class="course_nav beginner">
                            <span class="course_nav_text">初心者</span>
                            <a href="<?php echo get_permalink(142); ?>"></a>
                        </li>
                        <li class="course_nav short">
                            <span class="course_nav_text">短距離</span>
                            <a href="<?php echo get_permalink(183); ?>"></a>
                        </li>
                        <li class="course_nav middle">
                            <span class="course_nav_text">中距離</span>
                            <a href="<?php echo get_permalink(184); ?>"></a>
                        </li>
                        <li class="course_nav long">
                            <span class="course_nav_text">長距離</span>
                            <a href="<?php echo get_permalink(185); ?>"></a>
                        </li>
                    </ul>
                </nav>
                <div class="iframe_wrapper beginner">
                    <iframe class="course_iframe" src="https://www.google.com/maps/d/u/0/embed?mid=1U-au0BIPQuKPq7I5h3-k2B5TPSR7aLk&ehbc=2E312F"></iframe>
                </div>
                <div>
                    <div class="icon_list_wrap">
                        <ul class="icon_list">
                            <li class="icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spot_cate_grume_img.png" alt="グルメアイコン" class="icon_pic" />グルメ
                            </li>
                            <li class="icon">
                                <img src="https://placehold.jp/40x40.png" alt="買い物アイコン" class="icon_pic" />買い物
                            </li>
                            <li class="icon">
                                <img src="https://placehold.jp/40x40.png" alt="道の駅アイコン" class="icon_pic" />道の駅
                            </li>
                            <li class="icon">
                                <img src="https://placehold.jp/40x40.png" alt="体験アイコン" class="icon_pic" />体験
                            </li>
                            <li class="icon">
                                <img src="https://placehold.jp/40x40.png" alt="宿泊アイコン" class="icon_pic" />宿泊
                            </li>
                            <li class="icon">
                                <img src="https://placehold.jp/40x40.png" alt="入浴アイコン" class="icon_pic" />入浴
                            </li>
                            <li class="icon">
                                <img src="https://placehold.jp/40x40.png" alt="トイレアイコン" class="icon_pic" />トイレ
                            </li>
                            <li class="icon">
                                <img src="https://placehold.jp/40x40.png" alt="駐車場アイコン" class="icon_pic" />駐車場
                            </li>
                            <li class="icon">
                                <img src="https://placehold.jp/40x40.png" alt="ビュースポットアイコン" class="icon_pic" />ビュースポット
                            </li>
                            <li class="icon">
                                <img src="https://placehold.jp/40x40.png" alt="レンタサイクルアイコン" class="icon_pic" />レンタサイクル
                            </li>
                            <li class="icon">
                                <img src="https://placehold.jp/40x40.png" alt="サイクルショップアイコン" class="icon_pic" />サイクルショップ
                            </li>
                            <li class="icon">
                                <img src="https://placehold.jp/40x40.png" alt="コンビニアイコン" class="icon_pic" />コンビニ
                            </li>
                            <li class="icon">
                                <img src="https://placehold.jp/40x40.png" alt="その他アイコン" class="icon_pic" />その他
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="common_btn dl-btn">地図をダウンロード</div>
            </div>
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course_info_img1.png" alt="自転車に乗る女性" class="course_info_pic_woman" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course_info_img2.png" alt="自転車に乗る男性" class="course_info_pic_man" />
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
                </div>
                <div class="info_content">
                    <span class="info_item">コメント</span><br>
                    <p class="comment_text"><?php the_field('comment'); ?></p>
                </div>
                <span class="annotation">(※消費カロリーは距離からの概算です。)</span>
            </div>

        </section>

        <section class="course_spot">
            <h2 class="course_spot_headline headline"><ruby>SPOT<rt>周辺スポット</rt></ruby></h2>


            <div class="course_spot_cate_list">
                <div class="course_spot_cate_item">
                    <h3 class="course_spot_cate_headline eat">食べる</h3>

                    <!-- カード全体の入れ物 -->
                    <ul class="spot_list flex">
                        <li class="card_container">
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

                            <div class="spot_card relative">
                                <!-- お気に入りボタン -->
                                <div class="spot_like_icon">
                                    <i class="far fa-heart LikesIcon-fa-heart"></i>
                                </div>
                                <!-- カード１枚にかかるスポット一覧へのリンク -->
                                <a href="spot.html">
                                    <!-- カード全体の入れ物 -->
                                    <ul class="spot_list">
                                        <!-- カード１枚の入れ物-->
                                        <li class="spot_item relative">
                                            <!-- カテゴリーのラベル -->
                                            <img src="https://placehold.jp/48x64.png" alt="カテゴリーのラベル" class="spot_item_cate">

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
                                                <dt>営業時間</dt>
                                                <dd><?php the_field('open_time'); ?></dd>
                                                <dt>住所</dt>
                                                <dd><?php the_field('address'); ?></dd>
                                                <dt>電話番号</dt>
                                                <dd><?php the_field('telephone'); ?></dd>
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
                    <div class="spot_more_btn common_btn">もっと見る</div>
                </div>

                <div class="course_spot_cate_item">
                    <h3 class="course_spot_cate_headline enjoy">楽しむ</h3>
                    <ul class="spot_list flex">
                        <li class="card_container">
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

                            <div class="spot_card relative">
                                <!-- お気に入りボタン -->
                                <div class="spot_like_icon">
                                    <i class="far fa-heart LikesIcon-fa-heart"></i>
                                </div>
                                <!-- カード１枚にかかるスポット一覧へのリンク -->
                                <a href="spot.html">
                                    <!-- カード全体の入れ物 -->
                                    <ul class="spot_list">
                                        <!-- カード１枚の入れ物-->
                                        <li class="spot_item relative">
                                            <!-- カテゴリーのラベル -->
                                            <img src="https://placehold.jp/48x64.png" alt="カテゴリーのラベル" class="spot_item_cate">

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
                                                <dt>営業時間</dt>
                                                <dd><?php the_field('open_time'); ?></dd>
                                                <dt>住所</dt>
                                                <dd><?php the_field('address'); ?></dd>
                                                <dt>電話番号</dt>
                                                <dd><?php the_field('telephone'); ?></dd>
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
                    <div class="spot_more_btn common_btn">もっと見る</div>
                </div>

                <div class="course_spot_cate_item">
                    <h3 class="course_spot_cate_headline shopping">買う</h3>
                    <ul class="spot_list flex">
                        <li class="card_container">
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

                            <div class="spot_card relative">
                                <!-- お気に入りボタン -->
                                <div class="spot_like_icon">
                                    <i class="far fa-heart LikesIcon-fa-heart"></i>
                                </div>
                                <!-- カード１枚にかかるスポット一覧へのリンク -->
                                <a href="spot.html">
                                    <!-- カード全体の入れ物 -->
                                    <ul class="spot_list">
                                        <!-- カード１枚の入れ物-->
                                        <li class="spot_item relative">
                                            <!-- カテゴリーのラベル -->
                                            <img src="https://placehold.jp/48x64.png" alt="カテゴリーのラベル" class="spot_item_cate">

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
                                                <dt>営業時間</dt>
                                                <dd><?php the_field('open_time'); ?></dd>
                                                <dt>住所</dt>
                                                <dd><?php the_field('address'); ?></dd>
                                                <dt>電話番号</dt>
                                                <dd><?php the_field('telephone'); ?></dd>
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
                    <div class="spot_more_btn common_btn">もっと見る</div>
                </div>


                <div class="course_spot_cate_item">
                    <h3 class="course_spot_cate_headline cyclespot">サイクルスポット</h3>
                    <ul class="spot_list flex">
                        <li class="card_container">
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


                            <div class="spot_card relative">
                                <!-- お気に入りボタン -->
                                <div class="spot_like_icon">
                                    <i class="far fa-heart LikesIcon-fa-heart"></i>
                                </div>
                                <!-- カード１枚にかかるスポット一覧へのリンク -->
                                <a href="spot.html">
                                    <!-- カード全体の入れ物 -->
                                    <ul class="spot_list">
                                        <!-- カード１枚の入れ物-->
                                        <li class="spot_item relative">
                                            <!-- カテゴリーのラベル -->
                                            <img src="https://placehold.jp/48x64.png" alt="カテゴリーのラベル" class="spot_item_cate">

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
                                                <dt>営業時間</dt>
                                                <dd><?php the_field('open_time'); ?></dd>
                                                <dt>住所</dt>
                                                <dd><?php the_field('address'); ?></dd>
                                                <dt>電話番号</dt>
                                                <dd><?php the_field('telephone'); ?></dd>
                                            </dl>
                                            <!-- <img class="spot_item_img" src="https://placehold.jp/280x240.png" alt="スポットの写真"> -->
                                            <!-- スポット名 -->
                                            <!-- <h3 class="spot_item_name">味処 あらし</h3> -->
                                            <!-- スポット情報の表 -->
                                            <!-- <dl class="spot_item_info flex">
                                                <dt>営業時間</dt>
                                                <dd>11:00～21:00</dd>
                                                <dt>住所</dt>
                                                <dd>徳島県鳴門市撫養町大桑島字北ノ浜51-1</dd>
                                                <dt>電話番号</dt>
                                                <dd>088-686-0005</dd>
                                            </dl> -->
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
                    <div class="spot_more_btn common_btn">もっと見る</div>
                </div>
            </div>
        </section>
    </main>
    <!-- フッター切り取りここから -->

    <?php get_footer(); ?>