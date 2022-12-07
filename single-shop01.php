<!-- ヘッダーを読み込む -->
<?php get_header(); ?>
<main>
    <!-- キービジュアル -->
    <div class="key_bg_under">
        <img src="https://placehold.jp/1440x400.png" alt="マイページキービジュアル" class="key_bg_under_img">
    </div>

    <!-- パンくずリスト -->
    <?php echo do_shortcode('[flexy_breadcrumb]'); ?>

    <!-- <section class="search"> -->
    <!-- 検索ボックス -->
    <div class="wrap_search_container">

        <!-- ページタイトル -->
        <?php the_title(); ?>
        <!-- <h2 class="search_title_jp">周辺スポット</h2>
        <div class="search_title">SPOT</div> -->

        <!-- ワードプレスループ始まり -->
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <!-- 詳細の囲い -->
        <div class="box_spot_info">
            <article id="post-<?php the_ID(); ?>" <?php post_class('name'); ?>>

                <?php the_content(); ?>

                <?php
                        $pic = get_field('eyecatch');
                        $pic_url = $pic['sizes']['medium'];
                        $width = $pic['sizes']['medium-width'];
                        $height = $pic['sizes']['medium-height'];
                        ?>
                <img src="<?php echo $pic_url; ?>" width=" <?php echo $width; ?>" height="<?php echo $height; ?>" alt="">

                <?php
                        $pic = get_field('pic1');
                        $pic_url = $pic['sizes']['thumbnail'];
                        $width = $pic['sizes']['thumbnail-width'];
                        $height = $pic['sizes']['thumbnail-height'];

                        ?>
                <img src=" <?php echo $pic_url; ?>" width=" <?php echo $width; ?>" height="<?php echo $height; ?>" alt="">

                <?php
                        $pic = get_field('pic2');
                        $pic_url = $pic['sizes']['thumbnail'];
                        $width = $pic['sizes']['thumbnail-width'];
                        $height = $pic['sizes']['thumbnail-height'];
                        ?>
                <img src="<?php echo $pic_url; ?>" width=" <?php echo $width; ?>" height="<?php echo $height; ?>" alt="">

                <ul>
                    <li><b>店名</b><span><?php the_field('shop_name'); ?></span></li>
                    <li><b>キャッチ</b><span><?php the_field('キャッチフレーズ'); ?></span></li>
                    <li><b>営業時間</b><span><?php the_field('open_time'); ?></span></li>
                    <li><b>定休日</b><span><?php the_field('closed'); ?></span></li>
                    <li><b>駐車場</b><span><?php the_field('parking'); ?></span></li>
                    <li><b>tel</b><span><?php the_field('telephone'); ?></span></li>
                    <li><b>住所</b><span><?php the_field('address'); ?></span></li>
                    <li><span><?php the_field('acsess'); ?></span></li>
                    <li><b>ホームページ</b><span><?php the_field('home_url'); ?></span></li>
                    <li><b>備考</b><span><?php the_field('memo'); ?></span></li>
                    <li><b>備考</b><span><?php the_field('icon'); ?></span></li>
                    <p>オススメポイント</p>
                    <p><?php the_field('recommend_point'); ?></p>
                    <p>オススメメニュー</p>
                    <p><?php the_field('recommend_menu'); ?></p>


                </ul>

                <?php print_r(get_field("icon")); ?>


                <?php endwhile; ?>
                <?php endif; ?>





                <div class="container">
                    <!-- メイン画像 -->
                    <div class="main-img js-main-img img_sp">
                        <img src="https://placehold.jp/280x199.png" alt="サムネイル画像" />
                    </div>
                    <!-- サムネイル画像 -->
                    <ul class="sub-img js-sub-img img_sp">
                        <!-- 選択されている画像の枠線を変更 -->
                        <li class="current img_sp">
                            <img src="https://placehold.jp/280x199.png" alt="サムネイル画像" />
                        </li>
                        <li class="img_sp">
                            <img src="https://placehold.jp/278x199.png" alt="サムネイル画像" />
                        </li>
                        <li class="img_sp">
                            <img src="https://placehold.jp/277x199.png" alt="サムネイル画像" />
                        </li>
                    </ul>
                </div>
                <div class="container_pc">
                    <!-- メイン画像 -->
                    <div class="main-img js-main-img img_pc">
                        <img src="https://placehold.jp/480x400.png" alt="サムネイル画像" />
                    </div>
                    <!-- サムネイル画像 -->
                    <ul class="sub-img js-sub-img img_pc">
                        <!-- 選択されている画像の枠線を変更 -->
                        <li class="current img_pc">
                            <img src="https://placehold.jp/480x400.png" alt="サムネイル画像" />
                        </li>
                        <li class="img_pc">
                            <img src="https://placehold.jp/479x400.png" alt="サムネイル画像" />
                        </li>
                        <li class="img_pc">
                            <img src="https://placehold.jp/481x400.png" alt="サムネイル画像" />
                        </li>
                    </ul>
                </div>
                <div class="spot_date">
                    <!-- スポット名 -->
                    <h2 class="spot_name">cafe AAA</h2>
                    <!-- スポット紹介文 -->
                    <p class="spot_text">
                        新鮮なフルーツでこだわりの〜〜〜</p>
                    <table class="info_item">
                        <tbody>
                            <tr>
                                <th>営業時間　　</th>
                                <td>10:00〜19：00</td>

                            </tr>
                            <tr>
                                <th>定休日</th>
                                <td>火曜日</td>

                            </tr>
                            <tr>
                                <th>駐車場</th>
                                <td>８台</td>

                            </tr>
                            <tr>
                                <th>電話</th>
                                <td>088-123-4567</td>

                            </tr>
                            <tr>
                                <th>所在地</th>
                                <td>鳴門市＊＊＊＊＊＊＊</td>

                            </tr>
                        </tbody>
                    </table>
                    <!-- グーグルマップ埋め込み -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3300.3277188231764!2d134.6014123152186!3d34.18910218056893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35536595bcb61b15%3A0x25636e350943bc9e!2z5ZGz5YemIOOBguOCieOBlw!5e0!3m2!1sja!2sjp!4v1669605025472!5m2!1sja!2sjp" title="google_map" width="280" height="200" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    <!-- WEBサイトのURL -->
                    <table class="info_item">
                        <tbody>
                            <tr>
                                <th>webサイト　</th>
                                <td>http://www.cafe-aaa/

                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- SNSアイコン -->
                    <ul class="spot_icon">
                        <li>
                            <img src="https://placehold.jp/50x50.png" alt="SNS">
                        </li>
                        <li>
                            <img src="https://placehold.jp/50x50.png" alt="SNS">
                        </li>
                    </ul>

                    <!-- 備考欄 -->
                    <ul class="info_item">
                        <li class="info_remark">備考
                            <p>・駐車場は有料ですなどなど・・・</p>
                            <p>・</p>
                            <p>・</p>
                        </li>
                    </ul>
                    <!-- サービスアイコン -->
                    <ul class="spot_date_icon">
                        <li class="spot_service_icon"><a href=""><img src="https://placehold.jp/50x50.png" alt="アイコン"></a></li>
                        <li class="spot_service_icon"><a href=""><img src="https://placehold.jp/50x50.png" alt="アイコン"></a></li>
                        <li class="spot_service_icon"><a href=""><img src="https://placehold.jp/50x50.png" alt="アイコン"></a></li>
                        <li class="spot_service_icon"><a href=""><img src="https://placehold.jp/50x50.png" alt="アイコン"></a></li>
                        <li class="spot_service_icon"><a href=""><img src="https://placehold.jp/50x50.png" alt="アイコン"></a></li>
                        <li class="spot_service_icon"><a href=""><img src="https://placehold.jp/50x50.png" alt="アイコン"></a></li>
                        <li class="spot_service_icon"><a href=""><img src="https://placehold.jp/50x50.png" alt="アイコン"></a></li>
                        <li class="spot_service_icon"><a href=""><img src="https://placehold.jp/50x50.png" alt="アイコン"></a></li>
                    </ul>
                    <!-- タグ -->
                    <ul class="spot_typetag_wrap">
                        <li class="spot_typetag"><span>#グルメ</span></li>
                        <li class="spot_typetag"><span>#グルメ</span></li>
                        <li class="spot_typetag"><span>#グルメ</span></li>
                    </ul>

                </div>
                <!-- コース案内 -->
                <div class="this_course">
                    <p class="spot_apply">
                        ここに行くならこのコース！</p>

                    <!-- <ul class="course_top_choice_list flex just_center f_wrap white">
                        <a href="">
                            <li class="course_top_choice_btn bg_lightgreen">
                                <p class="course_top_choice_cate">初心者コース</p>

                                <p class="course_top_choice_km">〇〇㎞</p>
                            </li>
                        </a>
                        <a href="">
                            <li class="course_top_choice_btn bg_orange">
                                <p class="course_top_choice_cate">短距離コース</p>

                                <p class="course_top_choice_km">〇〇㎞</p>
                            </li>
                        </a>
                    </ul> -->
                    <ul class="course_top_choice_list flex just_center f_wrap white">
                        <li>
                            <a href="" class="course_top_choice_btn bg_lightgreen">
                                <p class="course_top_choice_cate">初心者コース</p>
                                <!-- 距離のクラス名要再考 -->
                                <p class="course_top_choice_km">〇〇㎞</p>
                            </a>
                        </li>
                        <li>
                            <a href="" class="course_top_choice_btn bg_orange">
                                <p class="course_top_choice_cate">短距離コース</p>
                                <!-- 距離のクラス名要再考 -->
                                <p class="course_top_choice_km">〇〇㎞</p>
                            </a>
                        </li>
                    </ul>
                </div>
        </div>
        <!-- 最終更新日 -->
        <time class="lest_update" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
    </div>
    <!-- </section> -->

    <!-- <section class="memo"> -->
    <!-- 装飾 -->
    <div class="info_wrap info_bg_deco"></div>
    <div class="info_wrap info_main">
        <img src="https://placehold.jp/22x60.png" alt="クリップ" class="course_info_pic_clip" />
        <img src="assets/image/spotdetail_message_img.png" alt="装飾" class="course_info_pic_boy">
        <!-- メモ欄 -->
        <div class="info_content">
            <ul class="info_list">
                <li class="info_item font_bold">
                    おすすめメニュー
                </li>
                <li>
                    <p>いちごのショートケーキがおすすめです！</p><br>
                </li>
                <li class="info_item font_bold">
                    お店から一言
                </li>
                <li>
                    <p>いちごのショートケーキがおすすめです！</p>
                </li>

            </ul>
        </div>
    </div>
    <!-- </section> -->
    <!-- <section class="info"> -->
    <h2 class="info_headline headline"><ruby>RECOMMMEND<rt>こちらもいかがですか？</rt></ruby></h2>
    <div class="course_spot_cate_list">
        <?php
        $args = array(
            'post_type' => array('shop', 'spot', 'cycle'), //カスタム投稿タイプを指定
            // 'taxonomy' => 'restaurant', //カスタムタクソノミーを指定
            'orderby' => 'rand', // ランダムで表示
            'posts_per_page' => -1, //表示する記事数
            'post__not_in' => array($post->ID) // 現在表示している記事を除外
        );

        // カテゴリーで絞る場合
        // $taxquerysp = array('relation' => 'AND');
        // $taxquerysp[] = array(
        //     'taxonomy' => 'shop_type',
        //     'terms' => array('dining', 'cycle'),
        //     'field' => 'slug',
        // );
        // $args['tax_query'] = $taxquerysp;



        $spot_query = new WP_Query($args); //サブループを変数に格納
        if ($spot_query->have_posts()) :
            while ($spot_query->have_posts()) :
                $spot_query->the_post();
        ?>

        <!-- ここにhtml -->
        <div class="col-md-3">
            <?php get_template_part('template-parts/loop', 'spot') ?>
        </div>

        <?php endwhile;
        endif;
        wp_reset_postdata(); //サブループを抜ける
        ?>
        <div class="common_btn">スポット一覧</div>
        <!-- </section> -->
</main>

<?php get_footer(); ?>