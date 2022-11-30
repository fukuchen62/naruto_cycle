<?php get_header();
//マップ表示するための情報保存用
// lat:緯度, lng:経度, text:表示名

$maps = [];

// お気に入り数カウント
$favorites_count = 0;
?>

<!-- パンくず -->
<?php echo do_shortcode('[flexy_breadcrumb]'); ?>

<h2>マイページ</h2>


<!-- お気に入り記事表示 -->

<?php
if (function_exists('get_user_favorites')) :
    $favorites = get_user_favorites();
    if ($favorites) : // This is important: if an empty array is passed into the WP_Query parameters, all posts will be returned
        // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // If you want to include pagination
        $favorites_query = new WP_Query(array(
            'post_type' => 'any', // If you have multiple post types, pass an array
            'posts_per_page' => -1,
            'ignore_sticky_posts' => true,
            'post__in' => $favorites,
            // 'paged' => $paged, // If you want to include pagination, and have a specific posts_per_page set
            // 'meta_query' => array(
            //     array(
            //         'key' => 'contracts',
            //         'value' => '空'
            //     )
            // ),
        ));

        // お気に入りのループの開始
        if ($favorites_query->have_posts()) : while ($favorites_query->have_posts()) : $favorites_query->the_post();

                $latitude = get_field('latitude'); // 緯度のフィールド名latitude
                $longitude = get_field('longitude'); // 経度のフィールド名longitude
                $text = esc_html(get_the_title()); // shopの名前(タイトル名)

                $maps['lat'][] = $latitude;
                $maps['lng'][] = $longitude;
                $maps['text'][] = $text;

                print_r($maps); //デバッグ




?>
<?php get_template_part('template-parts/loop', 'spot') ?>

<?php echo '<div>' . get_favorites_button(get_the_ID()) . '</div>'; ?>
<?php

                $favorites_count++;
            endwhile;


        // next_posts_link('Older Favorites', $favorites_query->max_num_pages);
        // previous_posts_link('Newer Favorites');
        endif;
        wp_reset_postdata();
    else :
        // No Favorites
        echo '
    <p class="text-center">お気に入りがありません。</p>';
    endif;
endif;
?>


<!-- 地図表示 -->

<?php print_r($maps); ?> //デバッグ

<!-- 下記よりマップ -->
<!-- グーグルマップAPI使用 -->
<section class="map-box content">

    <h2 class="ta-a h2 mb30 map-sub">ＭＡＰ表示</h2>

    <div id="map1" style="width:620px; height:400px"></div>
</section>
</div>

</main>


<script type="text/javascript">
// initMap() を使って地図を埋め込む記述
function initMap() {

    const color = "black"; // ラベルの色
    const font_family = 'Kosugi Maru' //ラベルのフォント
    const font_size = "14px" //ラベルのサイズ
    // 徳島全域が入るように
    var latlng = new google.maps.LatLng(33.9220334, 134.2203203);
    var opts = {
        zoom: 9.2, //地図のズーム指定
        center: latlng, //地図の中心を指定
        mapTypeId: google.maps.MapTypeId.ROADMAP //マップタイプの設定ROADMAPは道路や建物などが表示される地図
    };
    // マップ生成
    var map = new google.maps.Map(document.getElementById("map1"), opts); //#mapに地図を埋め込む

    // マーカー生成
    // フォント変えられる
    let maps = [];
    <?php
        for ($i = 0; $i < $favorites_count; $i++) {
            echo "maps[${i}]={lat:";
            echo $maps['lat'][$i];
            echo ', lng:';
            echo $maps['lng'][$i];
            echo ', text:"';
            echo $maps['text'][$i];
            echo "\",
                color: \"#AD7000\",
                fontFamilt: 'Kosugi Maru',
                    fontSize: \"14px\",
                fontWeight: \"bold\",};";
            echo "\n";
        }
        ?>

    <?php print_r($maps); ?>
    // 例
    // spots[0] = {
    //     lat: 34.06505,
    //     lng: 134.56786,
    //     text: "みなと公園",
    //     color: "black",
    //     fontFamilt: 'Kosugi Maru',
    //     fontSize: "14px",
    //     fontWeight: "bold",
    // };
    var marker = new google.maps.Marker();
    for (let i = 0; i < maps.length; i++) {
        marker = new google.maps.Marker({
            position: maps[i],
            label: maps[i],
            map: map,
        });
    }
    // マーカー表示
    marker.setMap(map);
}
</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJpkrA0wadpGsq26hNJcnFOoZiKpeOTfM&callback=initMap">
</script>

</body>

</html>














<?php get_footer(); ?>