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

            ?>


            <li class="card_container">

                <?php get_template_part('template-parts/loop', 'spot'); ?>

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
    const font_family = 'Noto Sans JP' //ラベルのフォント
    const font_size = "14px" //ラベルのサイズ
    // 徳島全域が入るように
    var latlng = new google.maps.LatLng(34.1724913, 134.5401272);
    var opts = {
        zoom: 12.2, // 地図のズームを指定
        center: latlng, // 地図の中心を指定
        mapTypeId: google.maps.MapTypeId.ROADMAP // マップタイプの設定 ROADMAPは道路や建物などが表示される地図
    };
    // マップ生成
    var map = new google.maps.Map(document.getElementById("map"), opts); // #mapに地図を埋め込む

    //console.log("この文章をコンソールに表示します");

    // マーカー生成
    // フォント変えられる

    let favorite_maps = [];
    <?php
        for ($i = 0; $i < $favorites_count; $i++) {
            echo "favorite_maps[${i}]={lat:";
            echo $favorite_maps['lat'][$i];
            echo ', lng:';
            echo $favorite_maps['lng'][$i];
            echo ', text:"';
            echo $favorite_maps['text'][$i];
            echo "\",
                color: \"#AD7000\",
                fontFamilt: 'Kosugi Maru',
                    fontSize: \"14px\",
                fontWeight: \"bold\",};";
            echo "\n";
        }
        ?>


    var marker = new google.maps.Marker();
    for (let i = 0; i < favorite_maps.length; i++) {
        marker = new google.maps.Marker({
            position: favorite_maps[i],
            label: favorite_maps[i],
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