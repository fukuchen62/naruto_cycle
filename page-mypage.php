<?php get_header();



//マップ表示するための情報保存用
// lat:緯度, lng:経度, text:表示名

$events = [];
// イベント数カウント
$event_count = 0;

?>

<!-- main -->
<main id="main" class="main">
    <div class="main-wrapper container">
        <div class="mw-1200">
            <!-- パンくず -->
            <?php
            get_template_part('template-parts/breadcrumb');
            ?>

            <h2>マイページ</h2>
        </div>
    </div>
    <section class="text-mypage mw-1200">
        <h4><i class="fa-solid fa-heart">マイページについて</i></h4>
        <table class="text-area">
            <tr>
                <th>1:</th>
                <td>本マイページは体験施設の詳細ページでブックマークした情報が表示されます。</td>
            </tr>
            <tr>
                <th>2:</th>
                <td>
                    ブックマークした場所をgooleマップで参照できます。
                </td>
            </tr>
            <tr>
                <th>3:</th>
                <td>
                    ブックマークにはcookieを使用しています。
                </td>
            </tr>
            <tr>
                <th>4:</th>
                <td>
                    cookieの削除に伴いブックマークした情報も削除されます。
                </td>
            </tr>

        </table>
    </section>
    <section class="favorite-booth">
        <h2>お気に入り</h2>

        <!-- カード 始まり -->
        <div class="article-content main-article mw-1200">

            <!-- カード型記事範囲 -->
            <div class="card-container">
                <!-- 記事 -->


                <?php
                if (function_exists('get_user_favorites')) :
                    // code...
                    $favorites = get_user_favorites();
                    krsort($favorites);

                    // print_r($favorites);

                    if ($favorites) :
                        $the_query = new WP_Query([
                            'post_type' => 'event',
                            'posts_per_page' => -1,
                            'ignore_sticky_posts' => true,
                            'post__in' => $favorites,
                            'orderby' => 'post__in',
                        ]);
                        if ($the_query->have_posts()) :
                            while ($the_query->have_posts()) :
                                $the_query->the_post();

                                // マップ用
                                // $latitude = SCF::get('latitude'); // 緯度のフィールド名latitude
                                // $longitude = SCF::get('longitude'); // 経度のフィールド名longitude
                                // $text = esc_html(SCF::get('event_name')); // 体験の名前のフィールド名event_name

                                $latitude = get_field('latitude'); // 緯度のフィールド名latitude
                                $longitude = get_field('longitude'); // 経度のフィールド名longitude
                                $text = esc_html(get_field('event_name')); // 体験の名前のフィールド名event_name

                                $events['lat'][] = $latitude;
                                $events['lng'][] = $longitude;
                                $events['text'][] = $text;
                ?>


                <div class="card-wrap">
                    <a href="<?php the_permalink(); ?>">
                        <div class="article-news">
                            <i class="fa-solid fa-bookmark  fa-2x fa-pull-left"></i>
                            <?php
                                            $pic = get_field('eyecatch');
                                            $pic_url = $pic['sizes']['large'];
                                            ?>
                            <img src="<?php echo $pic_url; ?>" alt="記事画像">
                            <h3 class="article-news-caption"><?php the_field('event_name'); ?></h3>
                            <p class="article-news-txt"><?php the_field('institution'); ?></p>
                        </div>
                    </a>
                </div>

                <?php
                                $event_count++;
                            // end ループ while
                            endwhile;
                            wp_reset_postdata();
                            // else :
                            ?>
            </div>

            <?php
                        else :

                        endif;
                    endif;
                // end favorites
                endif;
                // print_r($events);
                // print_r($event_count);
?>
        </div>
    </section>
    <?php
    if ($event_count == 0) :
    ?>
    <!-- 登録物がないときは下記の文章を使用します -->
    <p>
            <center>ブックマークはありません。</center>
        </p>
    <?php
    endif;
    ?>

    <section class="map mw-1200" style="margin-bottom:200px">
        <h2>MAP</h2>
        <div id="map" style="width:100%; height:450px"></div>
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
    let events = [];
    <?php
        for ($i = 0; $i < $event_count; $i++) {
            echo "events[${i}]={lat:";
            echo $events['lat'][$i];
            echo ', lng:';
            echo $events['lng'][$i];
            echo ', text:"';
            echo $events['text'][$i];
            echo "\",
                color: \"#AD7000\",
                fontFamily: 'Kosugi Maru',
                fontSize: \"14px\",
                fontWeight: \"bold\",};";

            echo "\n";
        }
        ?>


    //コンソールテスト
    console.log('Hello World');

    var marker = new google.maps.Marker();
    for (let i = 0; i < events.length; i++) {
        marker = new google.maps.Marker({
            position: events[i], // マーカーを立てる位置を指定
            label: events[i],
            map: map, // マーカーを立てる地図を指定
        });
    }
    // マーカー表示
    marker.setMap(map);
}
</script>

<!-- callback=initMap=APIが読み込み後にinitMap()を実行 -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJpkrA0wadpGsq26hNJcnFOoZiKpeOTfM&callback=initMap">
</script>

<?php get_footer(); ?>



//マップ表示するための情報保存用
// lat:緯度, lng:経度, text:表示名

$favorite_maps = [];
$favorite_maps2 = [];
// お気に入り数カウント
$favorites_count = 0;
?>
<main>
    <!-- パンくず -->
    <?php echo do_shortcode('[flexy_breadcrumb]'); ?>

    <h2>マイページ</h2>


    <!-- お気に入り記事表示 -->

    <?php
    if (function_exists('get_user_favorites')) :
        $favorites = get_user_favorites();
        print_r($favorites);
        krsort($favorites);
        print_r($favorites);

        if ($favorites) : // This is important: if an empty array is passed into the WP_Query parameters, all posts will be returned
            // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // If you want to include pagination
            $favorites_query = new WP_Query(array(
                'post_type' => 'any', // If you have multiple post types, pass an array
                'posts_per_page' => -1,
                'ignore_sticky_posts' => true,
                'post__in' => $favorites,
                'orderby' => 'post__in',
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

                    $favorite_maps['lat'][] = $latitude;
                    $favorite_maps['lng'][] = $longitude;
                    $favorite_maps['text'][] = $text;

                    $favorite_maps2[] = [
                        'lat' => $latitude,
                        'lng' => $longitude,
                        'text' => $text,
                    ];
                    print_r($favorite_maps); //デバッグ
                    print_r($favorite_maps2); //デバッグ




    ?>
    <?php get_template_part('template-parts/loop', 'spot') ?>

    <?php echo '<div>' . get_favorites_button(get_the_ID()) . '</div>'; ?>
    <?php

                    $favorites_count++;
                endwhile;


                // next_posts_link('Older Favorites', $favorites_query->max_num_pages);
                // previous_posts_link('Newer Favorites');
                wp_reset_postdata();
            endif;

        else :
            // No Favorites
            echo '
    <p class="text-center">お気に入りがありません。</p>';
        endif;
    endif;
    ?>


    <!-- 地図表示 -->

    <section class="map mw-1200" style="margin-bottom:200px">
        <h2>MAP</h2>
        <div id="map1" style="width:100%; height:450px"></div>
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
    var map = new google.maps.Map(document.getElementById("map1"), opts); // #mapに地図を埋め込む

    //console.log("この文章をコンソールに表示します");

    // マーカー生成
    // フォント変えられる
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
    var marker = new google.maps.Marker();
    for (let i = 0; i < 3; i++) {
        marker = new google.maps.Marker({
            position: favorite_maps2[i],
            label: favorite_maps2[i],
            map: map,
        });
    }
    マーカー表示
    marker.setMap(map);
}
</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJpkrA0wadpGsq26hNJcnFOoZiKpeOTfM&callback=initMap">
</script>
</body>

</html>


<?php get_footer(); ?>