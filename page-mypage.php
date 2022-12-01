<?php get_header();
//マップ表示するための情報保存用
// lat:緯度, lng:経度, text:表示名

$favorite_maps = [];
$favorite_maps2 = [];
// お気に入り数カウント
$favorites_count = 0;
?>

<main>
    <!-- キービジュアル -->
    <div class="key_bg_under">
        <img src="https://placehold.jp/1440x400.png" alt="マイページキービジュアル" class="key_bg_under_img">
    </div>

    <!-- パンくずリスト -->
    <div class="bradcrumbs">
        <?php echo do_shortcode('[flexy_breadcrumb]'); ?>
    </div>

    <!-- ページ見出し -->
    <section class="mypage">
        <h2 class="course_top headline"><ruby>MY PAGE<rt>マイページ</rt></ruby></h2>
    </section>

    <!-- マイページについて -->
    <section class="mypage_about">
        <h3 class="mypage_h3">マイページについて</h3>
        <ul class="mypage_about_list">
            <li>・本マイページは周辺スポット検索またはスポット詳細ページでブックマークした情報が表示されます。</li>
            <li>・ブックマークした場所をgoogleマップで参照できます。</li>
            <li>・ブックマークにはcookieを使用しています。</li>
            <li>・cookieの削除に伴いブックマークした情報も削除されます。</li>
        </ul>
    </section>

    <!-- お気に入り一覧 -->
    <section class="mypage_spot">
        <h3 class="mypage_h3">お気に入り一覧</h3>
        <ul class="spot_list flex">

            <!-- カード -->
            <?php
            if (function_exists('get_user_favorites')) :
                $favorites = get_user_favorites();
                // print_r($favorites);
                // krsort($favorites);
                // print_r($favorites);

                if ($favorites) : // This is important: if an empty array is passed into the WP_Query parameters, all posts will be returned
                    $favorites_query = new WP_Query(array(
                        'post_type' => 'any', // If you have multiple post types, pass an array
                        'posts_per_page' => -1,
                        'ignore_sticky_posts' => true,
                        'post__in' => $favorites,
                        'orderby' => 'post__in',
                    ));

                    // お気に入りのループの開始
                    if ($favorites_query->have_posts()) : while ($favorites_query->have_posts()) : $favorites_query->the_post();

                            $latitude = get_field('latitude'); // 緯度のフィールド名latitude
                            $longitude = get_field('longitude'); // 経度のフィールド名longitude
                            $text = esc_html(get_the_title()); // shopの名前(タイトル名)

                            $favorite_maps['lat'][] = $latitude;
                            $favorite_maps['lng'][] = $longitude;
                            $favorite_maps['text'][] = $text;

                            $favorite_maps2[] = [
                                'lat' => $latitude,
                                'lng' => $longitude,
                                'text' => $text,
                            ];
                            // print_r($favorite_maps); //デバッグ
                            // print_r($favorite_maps2); //デバッグ
            ?>


            <li class="card_container">
                <div class="spot_card relative">
                    <!-- お気に入りボタン -->
                    <div class="spot_like_icon">

                        <i class="far fa-heart LikesIcon-fa-heart"></i>
                    </div>
                    <!-- カード１枚にかかるスポット一覧へのリンク -->
                    <a href="<?php the_permalink(); ?>">
                        <!-- カード全体の入れ物 -->
                        <ul class="spot_list">
                            <!-- カード１枚の入れ物-->
                            <li class="spot_item">
                                <!-- カテゴリーのラベル -->
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spot_cate_grume_img.png" alt="カテゴリーのラベル" class="spot_item_cate">

                                <!-- スポット写真 -->
                                <?php
                                                $pic = get_field('eyecatch');
                                                $pic_url = $pic['sizes']['thumbnail'];
                                                $width = $pic['sizes']['thumbnail-width'];
                                                $height = $pic['sizes']['thumbnail-height'];


                                                ?>
                                <img class="spot_item_img" src="<?php echo $pic_url; ?>" alt="スポットの写真">
                                <!-- スポット名 -->
                                <h3 class="spot_item_name"><?php the_field('shop_name'); ?></h3>
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


            <?php
                            $favorites_count++;
                        endwhile;
                        wp_reset_postdata();
                    endif;
                else :
                    // No Favorites
                    echo '
    <p class="text-center">お気に入りがありません。</p>';
                endif;
            endif;
            ?>




        </ul>

        <!-- スポットもっと見るボタン -->
        <div class="spot_more_btn common_btn">もっと見る</div>

    </section>

    <!-- マップ -->
    <section class="mypage_map">
        <h3 class="mypage_h3">マップ</h3>
        <div id="map" class="iframe_wrapper">
            <!-- <iframe class="mypage_iframe" src="https://www.google.com/maps/d/u/0/embed?mid=1U-au0BIPQuKPq7I5h3-k2B5TPSR7aLk&ehbc=2E312F"></iframe> -->
        </div>
    </section>

</main>

<script type="text/javascript">
// initMap() を使って地図を埋め込む記述
function initMap() {
    //alert("lkjfks");
    const color = "black"; // ラベルの色
    const font_family = 'Kosugi Maru' //ラベルのフォント
    const font_size = "14px" //ラベルのサイズ
    // 徳島全域が入るように
    var latlng = new google.maps.LatLng(33.9220334, 134.2203203);
    var opts = {
        zoom: 9.2, // 地図のズームを指定
        center: latlng, // 地図の中心を指定
        mapTypeId: google.maps.MapTypeId.ROADMAP // マップタイプの設定 ROADMAPは道路や建物などが表示される地図
    };
    // マップ生成
    var map = new google.maps.Map(document.getElementById("map"), opts); // #mapに地図を埋め込む

    //console.log("この文章をコンソールに表示します");

    // マーカー生成
    // フォント変えられる
    <?php
        $course_count = 5;
        $courses[] = [
            'lat' => '34.07484208495771',
            'lng' => '134.56078008740766',
            'text' => '徳島文化公園',
        ];
        $courses[] = [
            'lat' => '34.0205918980636',
            'lng' => '134.52181634872622',
            'text' => '徳島動物園',
        ];
        $courses[] = [
            'lat' => '34.067091257403455',
            'lng' => '134.51441197688902',
            'text' => '眉山',
        ];
        $courses[] = [
            'lat' => '34.04130682492074',
            'lng' => '134.5265599154574',
            'text' => '近代美術館',
        ];
        $courses[] = [
            'lat' => '34.01502020583308',
            'lng' => '134.5831266452008',
            'text' => '日赤病院',
        ];
        ?>




    let maps = [];
    <?php
        for ($i = 0; $i < $favorites_count; $i++) {
            echo "maps[${i}]={lat:";
            echo $favorite_maps2[$i]['lat'];
            echo ', lng:';
            echo $favorite_maps2[$i]['lng'];
            echo ', text:"';
            echo $favorite_maps2[$i]['text'];
            echo "\",
                color: \"#AD7000\",
                fontFamilt: 'Kosugi Maru',
                    fontSize: \"14px\",
                fontWeight: \"bold\",};";
            echo "\n";
        }
        ?>

    let courses = [];

    <?php
        for ($i = 0; $i < $course_count; $i++) {
            echo "courses[${i}]={lat:";
            echo $courses[$i]['lat'];
            echo ', lng:';
            echo $courses[$i]['lng'];
            echo ', text:"';
            echo $courses[$i]['text'];
            echo "\",
                color: \"#AD7000\",
                fontFamilt: 'Kosugi Maru',
                    fontSize: \"14px\",
                fontWeight: \"bold\",};";
            echo "\n";
        }
        ?>





    var marker = new google.maps.Marker();
    for (let i = 0; i < courses.length; i++) {
        marker = new google.maps.Marker({
            position: $courses[i],
            label: $courses[i],
            map: map,
        });
    }
    マーカー表示
    marker.setMap(map);
}
</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJpkrA0wadpGsq26hNJcnFOoZiKpeOTfM&callback=initMap">
</script>



<!-- フッター切り取りここから -->
<?php get_footer(); ?>
<!-- フッター切り取りここまで -->