<?php get_header(); ?>

<?php if (is_home()) : ?>
<!-- トップページのみ表示するものを記入 -->
<?php endif; ?>



<!--＝＝＝＝＝＝＝＝＝＝＝＝＝ headerここまで ＝＝＝＝＝＝＝＝＝＝＝＝＝-->

<main class="main">

    <!-- キービジュアル＋ニュースのボックス -->
    <div class="key_news_wrap">

        <!--＝＝＝＝＝＝＝＝＝＝＝＝＝ section：キービジュアル ＝＝＝＝＝＝＝＝＝＝＝＝＝-->

        <section class="index_key_visual">

            <div class="key_img_box">
                <!-- キービジュアル画像 -->
                <!-- <img src="https://placehold.jp/1440x1024.png" alt="キービジュアル画像" class="key_img"> -->

                <!-- 動画 -->
                <div class="index_video_wrapper">
                    <video autoplay muted playsinline loop>
                        <source src="<?php echo get_template_directory_uri(); ?>/assets/image/index_keymovie.mp4" type="video/mp4">
                        <img src="https://placehold.jp/1440x1024.png" alt="キービジュアル画像">
                    </video>
                </div>

            </div>

            <!-- 装飾＞文字 -->
            <h2 class="key_msg">
                RIDE ON <br>
                THE UZU <br>
                WAVES!!
            </h2>

            <!-- 装飾＞画像 -->
            <img class="key_man" src="<?php echo get_template_directory_uri(); ?>/assets/image/index_top_img.png" alt="サイクリングマン">
        </section>

        <!--＝＝＝＝＝＝＝＝＝＝＝＝＝ section：ニュース ＝＝＝＝＝＝＝＝＝＝＝＝＝-->

        <section class="index_news flex">

            <div class="index_news_content flex">
                <!-- 見出し -->
                <h2 class="index_news_top headline">NEWS</h2>

                <!-- 記事ボックス -->
                <div class="index_news_article_box">

                    <!-- 記事① -->
                    <article class="index_news_article">
                        <div class="index_news_meta flex">
                            <ul class="index_news_categories">
                                <li><a href="#">お知らせ</a></li>
                            </ul>
                            <time class="index_news_time" datetime="2022-11-30">
                                2022.11.30
                            </time>
                        </div>
                        <h3 class="index_news_headline">
                            <a href="#">ここにタイトルが入りますここにタイトルが入ります</a>
                        </h3>
                    </article>

                    <!-- 記事② -->
                    <article class="index_news_article">
                        <div class="index_news_meta flex">
                            <ul class="index_news_categories">
                                <li><a href="#">お知らせ</a></li>
                            </ul>
                            <time class="index_news_time" datetime="2022-11-30">
                                2022.11.30
                            </time>
                        </div>
                        <h3 class="index_news_title">
                            <a href="#">ここにタイトルが入ります</a>
                        </h3>
                    </article>

                </div>

            </div>

            <!-- 記事一覧ボタン -->
            <div class="index_news_btn flex">
                <a href="news.html">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/index_news_img.png" alt="ニュース一覧への矢印" class="news_btn_img">
                    <div class="news_to_detail">一覧へ</div>
                </a>
            </div>

        </section>
    </div>

    <!--＝＝＝＝＝＝＝＝＝＝＝＝＝ section：ハウツー ＝＝＝＝＝＝＝＝＝＝＝＝＝-->

    <section class="index_howto">

        <!-- コンテンツボックス -->
        <div class="index_howto_content flex_pc">
            <!-- テキスト用ボックス -->
            <div class="index_howto_txtbox">
                <!-- 見出し -->
                <h2 class="index_howto_top headline">
                    <ruby>HOW TO<rt>鳴門のサイクリングについて</rt></ruby>
                </h2>

                <!-- キャプション -->
                <p class="index_howto_txt ">ここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入ります</p>

                <!-- もっと読むボタン -->
                <div class="common_btn index_howto_btn">
                    <a href="cycling.html">もっと読む→</a>
                </div>
            </div>
            <!-- 写真 -->
            <div class="index_howto_imgbox">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/index_howto_img.png" alt="浜辺に自転車を置いて海に向かう男性" class="index_howto_img">
            </div>
        </div>


    </section>

    <!--＝＝＝＝＝＝＝＝＝＝＝＝＝ section：コースマップ ＝＝＝＝＝＝＝＝＝＝＝＝＝-->
    <section class="index_course">

        <!-- 見出し -->
        <h2 class="index_course_top headline">
            <ruby>COURSE<rt>サイクリングコース</rt></ruby>
        </h2>

        <!-- コンテンツボックス -->
        <div class="index_course_content">

            <!-- マップ -->
            <div class="index_map_imgbox">
                <img class="index_map_img" src="<?php echo get_template_directory_uri(); ?>/assets/image/index_course_img.png" alt="サイクリングコースマップ">
            </div>

            <!-- サイクリングコース選択エリアのコンテナ -->
            <div class="course_top_choice_container">

                <!-- コース選択見出し -->
                <h3 class="index_couse_selecttop">コースを選ぶ</h3>

                <!-- コース選択ボタンボックス -->
                <div class="index_course_btnbox flex">

                    <!-- 初心者コース -->
                    <div class="index_course_selectbtn beginner">
                        <div class="index_course_btntxt">
                            <p>初心者コース</p>
                            <p>00km</p>
                        </div>
                    </div>

                    <!-- 短距離コース -->
                    <div class="index_course_selectbtn short">
                        <div class="index_course_btntxt">
                            <p>短距離コース</p>
                            <p>00km</p>
                        </div>
                    </div>

                    <!-- 中距離コース -->
                    <div class="index_course_selectbtn middle">
                        <div class="index_course_btntxt">
                            <p>中距離コース</p>
                            <p>00km</p>
                        </div>
                    </div>

                    <!-- 長距離コース -->
                    <div class="index_course_selectbtn long">
                        <div class="index_course_btntxt">
                            <p>長距離コース</p>
                            <p>00km</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!--＝＝＝＝＝＝＝＝＝＝＝＝＝ section：スポット ＝＝＝＝＝＝＝＝＝＝＝＝＝-->

    <section class="index_spot">

        <!-- 波アニメーション（上）ここから -->
        <div class="index_wave">
            <canvas id="waveCanvas"></canvas>
        </div>
        <!-- 波アニメーション（上）ここまで -->

        <div class="index_spot_headlinebox">
            <!-- 吹き出しPICKUP！文字 -->
            <div class="index_spot_deco">＼PICK UP!／</div>
            <!-- SPOT見出し -->
            <h2 class="index_spot_top headline">
                <ruby>SPOT<rt>周辺スポット</rt></ruby>
            </h2>
        </div>

        <!-- 全てのカード入りの箱 -->
        <div class="spot_card_box">
            <!-- カード一覧 -->
            <ul class="spot_list flex">

                <!-- カード -->
                <li class="card_container">
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
                                <li class="spot_item">
                                    <!-- カテゴリーのラベル -->
                                    <img src="./assets/image/spot_cate_grume_img.png" alt="カテゴリーのラベル" class="spot_item_cate">

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

                <!-- カード -->
                <li class="card_container">
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
                                <li class="spot_item">
                                    <!-- カテゴリーのラベル -->
                                    <img src="./assets/image/spot_cate_grume_img.png" alt="カテゴリーのラベル" class="spot_item_cate">

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

                <!-- カード -->
                <li class="card_container">
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
                                <li class="spot_item">
                                    <!-- カテゴリーのラベル -->
                                    <img src="./assets/image/spot_cate_grume_img.png" alt="カテゴリーのラベル" class="spot_item_cate">

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

                <!-- カード -->
                <li class="card_container">
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
                                <li class="spot_item">
                                    <!-- カテゴリーのラベル -->
                                    <img src="./assets/image/spot_cate_grume_img.png" alt="カテゴリーのラベル" class="spot_item_cate">

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

                <!-- カード -->
                <li class="card_container">
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
                                <li class="spot_item">
                                    <!-- カテゴリーのラベル -->
                                    <img src="./assets/image/spot_cate_grume_img.png" alt="カテゴリーのラベル" class="spot_item_cate">

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


                <!-- カード -->
                <li class="card_container">
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
                                <li class="spot_item">
                                    <!-- カテゴリーのラベル -->
                                    <img src="./assets/image/spot_cate_grume_img.png" alt="カテゴリーのラベル" class="spot_item_cate">

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
        <!-- スポットもっと見るボタン -->
        <div class="common_btn">
            <a class="spot_top_btn" href="search.html">スポット検索へ⇒</a>
        </div>
    </section>

    <!-- グラデーションの箱 -->
    <div class="bg_gradient"></div>


    <!--＝＝＝＝＝＝＝＝＝＝＝＝＝ section：インスタ ＝＝＝＝＝＝＝＝＝＝＝＝＝-->

    <section class="index_insta">

        <div class="index_insta_content flex">
            <div class="index_insta_txtbox">
                <!-- 見出しボックス -->
                <div class="index_insta_headline tb_pc_flex">
                    <!-- インスタロゴ -->
                    <img class="insta_logo_img" src="./assets/image/index_insta_logo_img.png" alt="インスタグラムのロゴ">
                    <!-- 見出し -->
                    <h2 class="index_insta_top headline">
                        <ruby>INSTAGRAM<rt>なるとサイくるっと！公式インスタグラム</rt></ruby>
                    </h2>
                </div>

                <!-- キャプション -->
                <div class="index_insta_caption">
                    <p>＃なるとサイくるっと！をチェックしてね！</p>
                    <p>鳴門サイクリングの思い出をシェアしよう！</p>
                </div>
            </div>

            <!-- 自転車のあしらい＋回転アニメーション（SP非表示） -->
            <div class="index_insta_decobox">

                <!-- 回転アニメーション -->
                <div class="circle">
                    <div class="inner">
                        <!-- 文字配置の基準となる親要素 -->
                        <p class="text index_insta_decotxt">HAVE A NICE BIKE TRIP! </p>
                    </div>
                </div>

                <!-- 自転車のあしらい -->
                <img src="./assets/image/index_insta_img.png" alt="自転車の装飾" class="index_insta_img">
            </div>
        </div>
        <div class="index_insta_SWbox">
            <!-- SnapWidget -->
            <iframe src="https://snapwidget.com/embed/1017659" class="snapwidget-widget index_insta_SW insta_PC" style="border:none; overflow:hidden; width:1250px; height:250px"></iframe>
        </div>
    </section>
</main>

<!--＝＝＝＝＝＝＝＝＝＝＝＝＝ footerここから ＝＝＝＝＝＝＝＝＝＝＝＝＝-->

<footer class="footer bg_blue white txt_c">
    <ul class="banner_list gap32_16 m_bottom40">
        <!-- asaなどのバナーがliで入ります -->
        <li class="banner_item"><a href=""><img src="https://placehold.jp/234x60.png" alt="○○のバナー"></a></li>
        <li class="banner_item"><a href=""><img src="https://placehold.jp/234x60.png" alt="○○のバナー"></a></li>
        <li class="banner_item"><a href=""><img src="https://placehold.jp/234x60.png" alt="○○のバナー"></a></li>
    </ul>

    <nav class="fnav_container bg_blue">
        <!-- フッターナビ -->
        <!-- 近藤追加分 -->
        <ul class="fnav_w_list">
            <li class="footer_headline">
                <ul class="footer_list">
                    <li class="footer_nav_item bold"><a href="news.html">ニュース</a></li>
                    <li class="footer_nav_item bold"><a href="howto.html">鳴門サイクリングについて</a></li>
                    <li class="footer_nav_item bold"><a href="mypage.html">マイページ</a></li>
                </ul>
            </li>
            <li class="footer_headline"><a href="course.html">サイクリングコース</a>
                <ul class="footer_list">
                    <li class="footer_nav_item"><a href=".html"></a>初心者モデルコース</li>
                    <li class="footer_nav_item"><a href=".html">短距離コース</a></li>
                    <li class="footer_nav_item"><a href=".html">中距離コース</a></li>
                    <li class="footer_nav_item"><a href=".html">長距離コース</a></li>
                </ul>
            </li>
            <li class="footer_headline"><a href=".html">周辺スポット検索</a>
                <ul class="footer_list">
                    <li class="footer_nav_item"><a href=".html">食べる</a></li>
                    <li class="footer_nav_item"><a href=".html">見る</a></li>
                    <li class="footer_nav_item"><a href=".html">買う</a></li>
                    <li class="footer_nav_item"><a href=".html">楽しむ</a></li>
                    <li class="footer_nav_item"><a href=".html">サイクルスポット</a></li>
                </ul>
            </li>
            <li class="footer_headline">Q＆A・その他
                <ul class="footer_list">
                    <li class="footer_nav_item"><a href="question.html">Q＆A</a></li>
                    <li class="footer_nav_item"><a href="contact.html">お問い合わせ</a></li>
                    <li class="footer_nav_item"><a href="privacy.html">プライバシーポリシー・免責事項</a></li>
                    <li class="footer_nav_item"><a href="aboutsite.html">サイト制作にあたって</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- 追加分ここまで -->

    <div class="sns_container flex gap32_16">
        <!-- twitter -->
        <a href=""><img class="sns_icon" src="<?php echo get_template_directory_uri(); ?>/assets/image/index_footer_sharetwitter.png" alt=" Twitterへのシェアボタン"></a>
        <!-- facebook -->
        <a href=""><img class="sns_icon" src="<?php echo get_template_directory_uri(); ?>/assets/image/index_footer_sharefb.png" alt="Facebookへのシェアボタン"></a>
    </div>
    <p class="copyright txt_c">AllCopyRight©なるとサイくるっと！</p>
</footer>

<!--＝＝＝＝＝＝＝＝＝＝＝＝＝ footerここまで ＝＝＝＝＝＝＝＝＝＝＝＝＝-->
<script src="./assets/js/index.js"></script>
<script src="./assets/js/header.js"></script>
<script src="./assets/js/common.js"></script>
</div>
</body>

</html>
<!-- フッター切り取りここまで -->