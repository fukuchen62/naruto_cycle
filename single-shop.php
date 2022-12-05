<?php get_header(); ?>

<!-- ヘッダー切り取りここまで -->
<main>
    <!-- キービジュアル -->
    <div class="key_bg_under">
        <img src="https://placehold.jp/1440x400.png" alt="マイページキービジュアル" class="key_bg_under_img">
    </div>

    <!-- パンくずリスト -->
    <div class="bradcrumbs">
        <!-- パンくず -->
        <?php echo do_shortcode('[flexy_breadcrumb]'); ?>
    </div>
    <!-- <section class="search"> -->
    <!-- 検索ボックス -->
    <div class="wrap_search_container">
        <!-- ページタイトル -->

        <h2 class="search_title_jp">周辺スポット</h2>
        <div class="search_title">SPOT</div>
        <!-- 詳細の囲い -->
        <div class="box_spot_info">


            <div class="container">
                <!-- メイン画像 -->
                <div class="main-img js-main-img img_sp">
                    <?php
                    $pic = get_field('eyecatch');
                    $pic_url = $pic['sizes']['medium'];
                    ?>
                    <?php print_r($pic); ?>
                    <img src="<?php echo $pic_url; ?>" alt="サムネイル画像" />
                </div>
                <!-- サムネイル画像 -->
                <ul class="sub-img js-sub-img img_sp">
                    <!-- 選択されている画像の枠線を変更 -->
                    <li class="current img_sp">
                        <img src="<?php echo $pic_url; ?>" alt="サムネイル画像" />
                    </li>
                    <li class="img_sp">
                        <?php
                        $pic1 = get_field('pic1');
                        $pic1_url = $pic1['url'];
                        ?>
                        <img src="<?php echo $pic1_url; ?>" alt="サムネイル画像" />
                    </li>
                    <li class="img_sp">
                        <?php
                        $pic2 = get_field('pic2');
                        $pic2_url = $pic2['url'];
                        ?>
                        <img src="<?php echo $pic2_url; ?>" alt="サムネイル画像" />
                    </li>
                </ul>
            </div>
            <div class="container_pc">
                <!-- メイン画像 -->
                <div class="main-img js-main-img img_pc">
                    <img src="<?php echo $pic_url; ?>" alt="サムネイル画像" />
                </div>
                <!-- サムネイル画像 -->
                <ul class="sub-img js-sub-img img_pc">
                    <!-- 選択されている画像の枠線を変更 -->
                    <li class="current img_pc">
                        <img src="<?php echo $pic_url; ?>" alt="サムネイル画像" />
                    </li>
                    <li class="img_pc">
                        <img src="<?php echo $pic1_url; ?>" alt="サムネイル画像" />
                    </li>
                    <li class="img_pc">
                        <img src="<?php echo $pic2_url; ?>" alt="サムネイル画像" />
                    </li>
                </ul>
            </div>
            <div class="spot_date">
                <!-- スポット名 -->
                <h2 class="spot_name"><?php the_field('shop_name'); ?></h2>
                <!-- スポット紹介文 -->
                <p class="spot_text"><?php the_field('catchphrase'); ?></p>
                <table class="info_item">
                    <tbody>
                        <tr>
                            <th>営業時間　　</th>
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
                    </tbody>
                </table>
                <!-- グーグルマップ埋め込み -->
                <?php the_field('acsess'); ?>

                <!-- WEBサイトのURL -->
                <table class="info_item">
                    <tbody>
                        <tr>
                            <th>webサイト　</th>
                            <td><?php the_field('home_url'); ?>

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
                        <?php the_field('memo'); ?>
                        <p>・駐車場は有料ですなどなど・・・</p>
                        <p>・</p>
                        <p>・</p>
                    </li>
                </ul>
                <!-- サービスアイコン -->
                <ul class="spot_date_icon">
                    <?php the_field('icon'); ?>
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
        <!-- 更新日 -->
        <p class="update">最終更新日：<?php the_field('update'); ?></p>
    </div>
    <!-- </section> -->

    <!-- <section class="memo"> -->
    <!-- 装飾 -->
    <div class="info_wrap info_bg_deco"></div>
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
    <!-- </section> -->
    <!-- <section class="info"> -->
    <h2 class="info_headline headline"><ruby>RECCOMEND<rt>こちらもいかがですか？</rt></ruby></h2>
    <div class="course_spot_cate_list">
        <ul class="spot_list">
            <li class="card_container">
                <!-- カード -->
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
                                <img class="spot_item_img" src="https://placehold.jp/280x240.png" alt="スポットの写真">
                                <!-- スポット名 -->
                                <h3 class="spot_item_name">味処 あらし</h3>
                                <!-- スポット情報の表 -->
                                <dl class="spot_item_info flex">
                                    <dt>営業時間</dt>
                                    <dd>11:00～21:00</dd>
                                    <dt>住所</dt>
                                    <dd>徳島県鳴門市撫養町大桑島字北ノ浜51-1</dd>
                                    <dt>電話番号</dt>
                                    <dd>088-686-0005</dd>
                                </dl>
                            </li>
                        </ul>
                    </a>
                </div>
            </li>
            <li class="card_container">
                <!-- カード -->
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
                                <img class="spot_item_img" src="https://placehold.jp/280x240.png" alt="スポットの写真">
                                <!-- スポット名 -->
                                <h3 class="spot_item_name">味処 あらし</h3>
                                <!-- スポット情報の表 -->
                                <dl class="spot_item_info flex">
                                    <dt>営業時間</dt>
                                    <dd>11:00～21:00</dd>
                                    <dt>住所</dt>
                                    <dd>徳島県鳴門市撫養町大桑島字北ノ浜51-1</dd>
                                    <dt>電話番号</dt>
                                    <dd>088-686-0005</dd>
                                </dl>
                            </li>
                        </ul>
                    </a>
                </div>
            </li>
            <li class="card_container">
                <!-- カード -->
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
                                <img class="spot_item_img" src="https://placehold.jp/280x240.png" alt="スポットの写真">
                                <!-- スポット名 -->
                                <h3 class="spot_item_name">味処 あらし</h3>
                                <!-- スポット情報の表 -->
                                <dl class="spot_item_info flex">
                                    <dt>営業時間</dt>
                                    <dd>11:00～21:00</dd>
                                    <dt>住所</dt>
                                    <dd>徳島県鳴門市撫養町大桑島字北ノ浜51-1</dd>
                                    <dt>電話番号</dt>
                                    <dd>088-686-0005</dd>
                                </dl>
                            </li>
                        </ul>
                    </a>
                </div>
            </li>
            <li class="card_container">
                <!-- カード -->
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
                                <img class="spot_item_img" src="https://placehold.jp/280x240.png" alt="スポットの写真">
                                <!-- スポット名 -->
                                <h3 class="spot_item_name">味処 あらし</h3>
                                <!-- スポット情報の表 -->
                                <dl class="spot_item_info flex">
                                    <dt>営業時間</dt>
                                    <dd>11:00～21:00</dd>
                                    <dt>住所</dt>
                                    <dd>徳島県鳴門市撫養町大桑島字北ノ浜51-1</dd>
                                    <dt>電話番号</dt>
                                    <dd>088-686-0005</dd>
                                </dl>
                            </li>
                        </ul>
                    </a>
                </div>
            </li>
            <li class="card_container">
                <!-- カード -->
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
                                <img class="spot_item_img" src="https://placehold.jp/280x240.png" alt="スポットの写真">
                                <!-- スポット名 -->
                                <h3 class="spot_item_name">味処 あらし</h3>
                                <!-- スポット情報の表 -->
                                <dl class="spot_item_info flex">
                                    <dt>営業時間</dt>
                                    <dd>11:00～21:00</dd>
                                    <dt>住所</dt>
                                    <dd>徳島県鳴門市撫養町大桑島字北ノ浜51-1</dd>
                                    <dt>電話番号</dt>
                                    <dd>088-686-0005</dd>
                                </dl>
                            </li>
                        </ul>
                    </a>
                </div>
            </li>
            <li class="card_container">
                <!-- カード -->
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
                                <img class="spot_item_img" src="https://placehold.jp/280x240.png" alt="スポットの写真">
                                <!-- スポット名 -->
                                <h3 class="spot_item_name">味処 あらし</h3>
                                <!-- スポット情報の表 -->
                                <dl class="spot_item_info flex">
                                    <dt>営業時間</dt>
                                    <dd>11:00～21:00</dd>
                                    <dt>住所</dt>
                                    <dd>徳島県鳴門市撫養町大桑島字北ノ浜51-1</dd>
                                    <dt>電話番号</dt>
                                    <dd>088-686-0005</dd>
                                </dl>
                            </li>
                        </ul>
                    </a>
                </div>
            </li>
        </ul>
    </div>
    <!-- </ul> -->
    <div class="common_btn">スポット一覧</div>
    <!-- </section> -->
</main>
<!-- <script src="js/spot.js"></script> -->
<!-- フッター切り取りここから -->

<footer class="footer">
    <ul class="banner_list">
        <!-- asaなどのバナーがliで入ります -->
        <li class="banner_item"><a href=""><img src="https://placehold.jp/234x60.png" alt="○○のバナー"></a></li>
        <li class="banner_item"><a href=""><img src="https://placehold.jp/234x60.png" alt="○○のバナー"></a></li>
        <li class="banner_item"><a href=""><img src="https://placehold.jp/234x60.png" alt="○○のバナー"></a></li>
    </ul>
    <nav class="fnav_container">
        <ul class="fnav">
            <li class="fnav_menu">
                <ul class="fnav_list">
                    <!-- リストの数はそれぞれ -->
                    <li class="fnav_item">
                        <a href=""></a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <div class="sns">
        <!-- twitter -->
        <a href=""></a>
        <!-- facebook -->
        <a href=""></a>
    </div>
    <p class="copyright"></p>
</footer>

<script src="assets/js/common.js"></script>
<script src="asets/js/course.js"></script>
<script src="assets/js/spot.js"></script>

</body>

</html>