<?php get_header(); ?>
<h2>マイページ</h2>

<?php
​
// マップ表示するための情報保存用
// lat:緯度, lng:経度, text:表示名
// $courses = [];
// カウント
$course_count = 5;
​
$courses[] = [
    'lat' => '34.07484208495771',
    'lng' => '134.56078008740766',
    'text' => '徳島文化公園',
];
​
$courses[] = [
    'lat' => '34.0205918980636',
    'lng' => '134.52181634872622',
    'text' => '徳島動物園',
];
​
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
​
// print_r($courses);
?>
​
​
<!DOCTYPE html>
<html lang="ja">
​
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
​
<body>
    <main>
        <!-- 下記よりマップ -->
        <!-- グーグルマップAPI使用 -->
        <section class="map-box content">
            ​
            <h2 class="ta-a h2 mb30 map-sub">ＭＡＰ表示</h2>
            ​
            <div id="map" style="width:620px; height:400px"></div>
        </section>
        </div>
        ​
    </main>
    ​
    ​
    <script type="text/javascript">
    function initMap() {
        ​
        const color = "black"; // ラベルの色
        const font_family = 'Kosugi Maru' //ラベルのフォント
        const font_size = "14px" //ラベルのサイズ
        // 徳島全域が入るように
        var latlng = new google.maps.LatLng(33.9220334, 134.2203203);
        var opts = {
            zoom: 9.2,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        // マップ生成
        var map = new google.maps.Map(document.getElementById("map"), opts);​
        // マーカー生成
        // フォント変えられる
        let courses = [];​
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
            ?>​
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
        for (let i = 0; i < courses.length; i++) {
            marker = new google.maps.Marker({
                position: courses[i],
                label: courses[i],
                map: map
            });
        }​
        // マーカー表示
        marker.setMap(map);
    }
    </script>
    ​
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJpkrA0wadpGsq26hNJcnFOoZiKpeOTfM&callback=initMap">
    </script>
    ​
</body>
​
</html>
折りたたむ



チェックマーク_緑
両目
バンザイ














<?php get_footer(); ?>