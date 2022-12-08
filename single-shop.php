<?php get_header(); ?>
<!--＝＝＝＝＝＝＝＝＝＝＝＝＝ headerここまで ＝＝＝＝＝＝＝＝＝＝＝＝＝-->
<main>
    <!-- キービジュアル -->
    <div class="key_bg_under">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/key_visual_green.png" alt="マイページキービジュアル" class="key_bg_under_img">
    </div>

    <section class="search">
        <!-- 検索ボックス -->
        <div class="wrap_search_container">
            <!-- ページタイトル -->
            <h2 class="course_headline headline"><ruby>SPOT<rt>周辺スポット</rt></ruby></h2>

            <!-- 詳細ボックス -->
            <div class="spot_detail_box">

                <!-- 写真とメインデータのボックス -->
                <div class="spot_date_img_box">

                    <!-- 画像ボックス -->
                    <div class="spot_img_box">

                        <div class="slider-container">
                            <div id="slider" class="slider_img_box">
                                <?php
                                $pic = get_field('eyecatch');
                                $pic_url = $pic['sizes']['medium'];
                                ?>
                                <!-- <?php print_r($pic); ?> -->
                                <div><img src="<?php echo $pic_url; ?>" alt="アイキャッチ画像" class="slider_img"></div>

                                <?php
                                $pic1 = get_field('pic1');
                                $pic1_url = $pic1['url'];
                                ?>
                                <div><img src="<?php echo $pic1_url; ?>" alt="アイキャッチ画像" class="slider_img"></div>

                                <?php
                                $pic2 = get_field('pic2');
                                $pic2_url = $pic2['url'];
                                ?>
                                <div><img src="<?php echo $pic2_url; ?>" alt="アイキャッチ画像" class="slider_img"></div>

                                <div><img src="<?php echo $pic_url; ?>" alt="アイキャッチ画像" class="slider_img"></div>
                            </div>
                        </div>

                    </div>

                    <!-- スポットメインデータボックス -->
                    <div class="spot_maindate_box">
                        <!-- スポット名 -->
                        <h2 class="spot_item_name"><?php the_field('shop_name'); ?></h2>
                        <!-- スポット紹介文 -->
                        <p class="spot_text">
                            <?php the_field('catchphrase'); ?></p>


                        <table class="spot_main_item">
                            <tbody>
                                <tr>
                                    <th>営業時間</th>
                                    <td><?php the_field('open_time'); ?></td>
                                </tr>
                                <tr>
                                    <th>定休日</th>
                                    <td><?php the_field('closed'); ?></td>
                                </tr>
                                <tr>
                                    <th>駐車場</th>
                                    <td><?php the_field('parking'); ?></td>
                                </tr>
                                <tr>
                                    <th>電話</th>
                                    <td><?php the_field('telephone'); ?></td>
                                </tr>
                                <tr>
                                    <th>所在地</th>
                                    <td><?php the_field('address'); ?></td>
                                </tr>
                                <tr>
                                    <th>webサイト</th>
                                    <td><?php if (get_field('home_url')) : ?><a href="<?php the_field('home_url'); ?>"><?php the_field('shop_name'); ?></a>
                                        <?php endif; ?></td>
                                </tr>

                                <tr>
                                    <th>SNS</th>
                                    <?php
                                    $sns_address_array = get_field('sns');
                                    $sns_address = explode(",", $sns_address_array);
                                    ?>


                                    <td>
                                        <div class="spot_mainInfo_sns">

                                            <?php foreach ($sns_address as $sns) : ?>
                                            <!-- 'twitter'が含まれている場合 -->
                                            <?php
                                                if (strpos($sns, 'twitter') !== false) : ?>
                                            <a href="<?php echo $sns; ?>"><img class="sns_icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/index_footer_sharetwitter.png" alt=" Twitterへのシェアボタン"></a>

                                            <!-- facebook -->
                                            <?php elseif (strpos($sns, 'facebook') !== false) : ?>
                                            <a href="<?php echo $sns; ?>"><img class="sns_icon " src="<?php echo get_template_directory_uri(); ?>/assets/img/index_footer_sharefb.png" alt="Facebookへのシェアボタン"></a>

                                            <!-- insta -->
                                            <?php elseif (strpos($sns, 'instagram') !== false) : ?>
                                            <a href="<?php echo $sns; ?>"><img class="sns_icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/index_footer_shareig.png" alt="instagramへのシェアボタン">

                                                <?php endif; ?>
                                                <?php endforeach; ?>

                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <th>備考</th>
                                    <td><?php the_field('memo'); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>



                <div class="spot_subdate_box">
                    <!-- マップのボックス -->
                    <div class="spot_map_box">
                        <p class="box_heading">マップ</p>
                        <!-- グーグルマップ埋め込み -->
                        <?php the_field('acsess'); ?>

                        <!-- サービスアイコンボックス -->
                        <div class="spot_icon_box">
                            <p class="box_heading">設備</p>
                            <ul class="spot_date_icon">

                                <?php $icons = get_field('icon'); ?>
                                <?php
                                foreach ($icons as $icon) : ?>
                                <li class="spot_service_icon">

                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spot_icon_<?php echo $icon; ?>_img.png" alt="アイコン">
                                    <?php endforeach; ?>
                                </li>


                            </ul>
                        </div>

                        <!-- このスポット用コース選択見出し -->
                        <div class="spot_choice_course_box">
                            <p class="spot_choice_text">ここに行くならこのコース！</p>

                            <!-- コース選択ボタンボックス -->
                            <div class="spot_course_btnbox flex">

                                <!-- コースidを取得して配列にする -->
                                <?php
                                $course_id = get_field('course_id');
                                $cid = explode(",", $course_id);
                                // print_r($cid);

                                ?>

                                <!-- コースボタン表示 -->

                                <?php
                                foreach ($cid as $id) : ?>

                                <a href="<?php echo get_permalink($id); ?>">
                                    <div class="index_course_selectbtn  <?php the_field('class', $id); ?>">
                                        <div class="index_course_btntxt">
                                            <p><?php echo get_the_title($id); ?></p>
                                            <p>約<?php the_field('distance', $id); ?>km</p>
                                        </div>
                                    </div>
                                </a>
                                <?php endforeach;
                                ?>

                            </div>
                        </div>
                    </div>

                    <!-- タグ -->
                    <?php $page_id = get_the_id();
                    ?>
                    <?php $terms = get_the_terms($post->ID, 'shop_type');
                    // print_r($terms);
                    ?>

                    <div class="spot_tag_box">
                        <?php echo get_the_term_list($post->ID, 'shop_type', '<div class="spot_tag">#', '</div>


                            <div class="spot_tag">#', '</div>') ?>



                        <!-- <div class="spot_tag">#グルメ</div>


                            <div class="spot_tag">#海鮮</div>
                        </a>
                        <a href="#">
                            <div class="spot_tag">#グルメ</div>
                        </a> -->
                    </div>

                </div>
                <!-- 更新日 -->
                <p class="last_update">最終更新日：<?php the_field('update'); ?></p>

                <!-- お気に入りボタン -->
                <div class=" ">
                    <?php echo get_favorites_button(get_the_ID()); ?>
                </div>

            </div>


        </div>

        <!-- 装飾 -->
        <div class="info_wrap info_main">
            <img src="https://placehold.jp/22x60.png" alt="クリップ" class="course_info_pic_clip" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spotdetail_message_img.png" alt="装飾" class="course_info_pic_boy">

            <!-- メモ欄 -->
            <div class="info_content">
                <ul class="info_list">
                    <li class="info_item font_bold">
                        おすすめメニュー
                    </li>
                    <li>
                        <?php the_field('recommend_menu'); ?><br>
                    </li>
                    <li class="info_item font_bold">
                        お店から一言
                    </li>
                    <li>
                        <?php the_field('recommend_point'); ?>
                    </li>

                </ul>
            </div>
        </div>

    </section>
    <!-- おすすめスポット -->
    <section>
        <h2 class="info_headline headline"><ruby>RECCOMEND<rt>こちらもいかがですか？</rt></ruby></h2>

        <!-- 全てのカード入りの箱 -->
        <div class="spot_card_box">
            <!-- カード一覧 -->
            <ul class="spot_list flex">

                <!-- カード -->
                <?php
                $args = array(
                    'post_type' => array('spot', 'shop', 'cycle'), //カスタム投稿タイプを指定
                    'orderby' => 'rand', // ランダムで表示
                    'posts_per_page' => 6, //表示する記事数
                );
                $taxquerysp = array('relation' => 'AND ');
                $metaquerysp = array('relation' => 'AND ');
                $metaquerysp[] = array(
                    'key' => 'course_id',
                    'value' => $cid[array_rand($cid, 1)],
                    'compare' => 'LIKE',
                );
                $args['tax_query'] = $taxquerysp;
                $args['meta_query'] = $metaquerysp;
                // print_r($metaquerysp);
                $spot_query = new WP_Query($args); //サブループを変数に格納
                ?>
                <?php
                if ($spot_query->have_posts()) :
                    while ($spot_query->have_posts()) :
                        $spot_query->the_post();
                ?>


                <li class="card_container">
                    <?php get_template_part('template-parts/loop', 'spot'); ?>
                </li>

                <?php endwhile;
                endif;
                wp_reset_postdata(); //サブループを抜ける
                ?>





            </ul>
        </div>


        <a href="<?php echo home_url('/spot/'); ?>">
            <div class="common_btn">スポットを探す
            </div>
        </a>
    </section>

</main>
<!--＝＝＝＝＝＝＝＝＝＝＝＝＝ footerここから ＝＝＝＝＝＝＝＝＝＝＝＝＝-->
<?php get_footer(); ?>