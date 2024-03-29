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

            <!-- <div class="key_img_box"> -->
            <!-- キービジュアル画像 -->
            <!-- <img src="https://placehold.jp/1440x1024.png" alt="キービジュアル画像" class="key_img"> -->

            <!-- 動画 -->
            <div class="index_video_wrapper">
                <video autoplay muted playsinline loop>
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/img/index_keymovie_mp4.mp4" type="video/mp4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index_key_img1.png" alt="キービジュアル画像・大鳴門橋">
                </video>
            </div>

            <!-- </div> -->

            <!-- 装飾＞文字 -->
            <h2 class="key_msg">
                RIDE ON <br>
                THE UZU <br>
                WAVES!!
            </h2>

            <!-- 装飾＞画像 -->
            <img class="key_man" src="<?php echo get_template_directory_uri(); ?>/assets/img/index_top_img.png" alt="サイクリングマン">
        </section>

        <!--＝＝＝＝＝＝＝＝＝＝＝＝＝ section：ニュース ＝＝＝＝＝＝＝＝＝＝＝＝＝-->

        <section class="index_news flex">

            <div class="index_news_content flex">
                <!-- 見出し -->
                <h2 class="index_news_top headline">NEWS</h2>

                <!-- 記事ボックス -->
                <div class="index_news_article_box">

                    <!-- 記事① -->
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>

                    <article class="index_news_article">
                        <div class="index_news_meta flex">
                            <ul class="index_news_categories">
                                <li><?php the_category(); ?></li>
                            </ul>
                            <time class="index_news_time" datetime="<?php the_time('Y-m-d'); ?>">
                                <?php the_time('Y.m.d') ?>
                            </time>
                        </div>
                        <h3 class="index_news_headline">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                    </article>

                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>

            </div>

            <!-- 記事一覧ボタン -->
            <div class="index_news_btn flex">
                <a href="<?php echo home_url('/news/'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index_news_img.png" alt="ニュース一覧への矢印" class="news_btn_img">
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
                <p class="index_howto_txt ">鳴門市では大鳴門橋への自転車道設置の実現に向けて、観光地や県民のおもてなし等を堪能いただけるサイクリング環境の整備に取り組んでいます。「なるとサイくるっと！」では国内外のサイクリストを魅了する短距離・中距離・長距離のサイクリングコースを紹介する他、初心者の方でも楽しめるように無料の渡し船を利用して対岸のウチノ海総合公園に行く約10kmのポタリングコースも設置しました。<br>
                    &emsp;コース周辺の飲食店や観光・写真スポットを中心にたくさん紹介しているので、鳴門の景色を楽しんだり、寄り道をいっぱいしたり、おいしいものを食べたり、スポーツとして技術や能力を向上させたり、サイクリングを通じて鳴門の魅力を思う存分楽しんでみてください。</p>

                <!-- もっと読むボタン -->
                <div class="common_btn index_howto_btn">
                    <a href="<?php echo get_permalink(2); ?>">もっと読む→</a>
                </div>
            </div>
            <!-- 写真 -->
            <div class="index_howto_imgbox">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index_howto_img.png" alt="浜辺に自転車を置いて海に向かう男性" class="index_howto_img">
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

            <!-- サイクリングコース選択エリアのコンテナ -->
            <div class="course_top_choice_container">

                <!-- コース選択見出し -->
                <h3 class="index_course_selecttop">コースを選ぶ</h3>

                <!-- コース選択ボタンボックス -->
                <div class="index_course_btnbox flex">

                    <!-- 初心者コース -->
                    <div class="index_course_selectbtn beginner">
                        <a href="<?php echo get_permalink(142); ?>">
                            <div class="index_course_btntxt">
                                <p>初心者コース</p>
                                <p>約10km</p>
                            </div>
                        </a>
                    </div>

                    <!-- 短距離コース -->
                    <div class="index_course_selectbtn short">
                        <a href="<?php echo get_permalink(183); ?>">
                            <div class="index_course_btntxt">
                                <p>短距離コース</p>
                                <p>約28km</p>
                            </div>
                        </a>
                    </div>

                    <!-- 中距離コース -->
                    <div class="index_course_selectbtn middle">
                        <a href="<?php echo get_permalink(184); ?>">
                            <div class="index_course_btntxt">
                                <p>中距離コース</p>
                                <p>約43km</p>
                            </div>
                        </a>
                    </div>

                    <!-- 長距離コース -->
                    <div class="index_course_selectbtn long">
                        <a href="<?php echo get_permalink(185); ?>">
                            <div class="index_course_btntxt">
                                <p>長距離コース</p>
                                <p>約69km</p>
                            </div>
                        </a>
                    </div>

                </div>
            </div>

            <!-- マップ -->
            <div class="index_map_imgbox">
                <img class="index_map_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/index_course_img.png" alt="サイクリングコースマップ">
            </div>


        </div>
    </section>


    <!--＝＝＝＝＝＝＝＝＝＝＝＝＝ section：スポット ＝＝＝＝＝＝＝＝＝＝＝＝＝-->

    <section class="index_spot">

        <!-- 波アニメーション（上）ここから -->
        <div class="wave">
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
                <?php
                $args = array(
                    'post_type' => array('shop', 'spot', 'cycle'), //カスタム投稿タイプを指定
                    // 'taxonomy' => 'restaurant', //カスタムタクソノミーを指定
                    'orderby' => 'rand', // ランダムで表示
                    'posts_per_page' => 6, //表示する記事数
                    // 'post__not_in' => array($post->ID) // 現在表示している記事を除外
                );



                $spot_query = new WP_Query($args); //サブループを変数に格納
                if ($spot_query->have_posts()) :
                    while ($spot_query->have_posts()) :
                        $spot_query->the_post();
                ?>



                <li class="card_container">
                    <div class="spot_card relative">
                        <!-- お気に入りボタン -->
                        <div class="spot_like_icon">
                            <?php echo get_favorites_button(get_the_ID()); ?>
                        </div>
                        <!-- カード１枚にかかるスポット一覧へのリンク -->
                        <a href="<?php the_permalink(); ?>">
                            <!-- カード全体の入れ物 -->
                            <ul class="spot_list">
                                <!-- カード１枚の入れ物-->
                                <li class="spot_item">
                                    <!-- カテゴリーのラベル -->
                                    <?php $pic = get_field('label');
                                            $pic_url = $pic['url'];
                                            ?>
                                    <img src="<?php echo $pic_url; ?>" alt="カテゴリーのラベル" class="spot_item_cate">

                                    <!-- スポット写真 -->
                                    <?php
                                            $pic = get_field('eyecatch');
                                            $pic_url = $pic['sizes']['thumbnail'];
                                            $width = $pic['sizes']['thumbnail-width'];
                                            $height = $pic['sizes']['thumbnail-height'];


                                            ?>
                                    <img class="spot_item_img" src="<?php echo $pic_url; ?>" alt="スポットの写真">
                                    <!-- スポット名 -->
                                    <h3 class="spot_item_name"><?php the_title(); ?></h3>
                                    <!-- スポット情報の表 -->
                                    <dl class="spot_item_info flex">
                                        <p><?php the_field('catchphrase'); ?></p>
                                    </dl>
                                </li>
                            </ul>
                        </a>
                    </div>
                </li>

                <?php endwhile;
                    wp_reset_postdata(); //サブループを抜ける
                endif;

                ?>




            </ul>
        </div>
        <!-- スポットもっと見るボタン -->
        <div class="common_btn">
            <a class="spot_top_btn" href="<?php echo home_url('/spot/'); ?>
">スポット検索へ⇒</a>
        </div>
    </section>


    <!--＝＝＝＝＝＝＝＝＝＝＝＝＝ section：インスタ ＝＝＝＝＝＝＝＝＝＝＝＝＝-->

    <section class="index_insta">

        <div class="index_insta_content flex">
            <div class="index_insta_txtbox">
                <!-- 見出しボックス -->
                <!-- <div class="index_insta_headline tb_pc_flex"> -->
                <!-- 見出し -->
                <h2 class="index_insta_top headline">
                    <ruby>INSTAGRAM<rt>なるとサイくるっと！公式インスタグラム</rt></ruby>
                </h2>
                <!-- </div> -->

                <!-- キャプション -->
                <div class="index_insta_caption">
                    <p>＃なるとサイくるっと！をチェックしてね！</p>
                    <!-- <p>鳴門サイクリングの思い出をシェアしよう！</p> -->
                </div>

                <!-- 公式アカウントへのリンク -->
                <div class="index_insta_linkbox">
                    <!-- インスタロゴ -->
                    <img class="insta_logo_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/index_footer_shareig.png" alt="インスタグラムのロゴ">
                    <a href="https://www.instagram.com/naruto_cycle/" target="_blank" rel="noopener noreferrer">
                        <div class="index_insta_link">naruto_cycle</div>
                    </a>
                </div>
            </div>

            <!-- 自転車のあしらい＋回転アニメーション（SP非表示） -->
            <!-- <div class="index_insta_decobox"> -->

            <!-- 回転アニメーション -->
            <!-- <div class="index_circle">
                    <div class="index_inner">
                        <p class="text index_insta_decotxt">HAVE A NICE BIKE TRIP! </p>
                    </div>
                </div> -->

            <!-- 自転車のあしらい -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index_insta_img.png" alt="自転車の装飾" class="index_insta_img">
            <!-- </div> -->
        </div>
        <!-- <div class="index_insta_SWbox"> -->
        <!-- SnapWidget -->
        <!-- <iframe src="https://snapwidget.com/embed/1017659" class="snapwidget-widget" style="border:none; overflow:hidden; width:1250px; height:250px"></iframe> -->
        <!-- SnapWidget -->
        <!-- <iframe src="https://snapwidget.com/embed/1017659" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:2000px; height:250px"></iframe> -->



        <!-- </div> -->
        <div class="insta_feed_box">
            <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
        </div>

    </section>
</main>

<!-- フッター切り取りここまで -->
<?php get_footer(); ?>