<?php get_header(); ?>

<main>
    <!-- キービジュアル -->
    <div class="key_bg_under">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/key_visual_lightblue.png" alt="マイページキービジュアル" class="key_bg_under_img">
    </div>

    <!-- パンくずリスト -->
    <div class="bradcrumbs">
        <!-- パンくず -->
        <?php echo do_shortcode('[flexy_breadcrumb]'); ?>
    </div>
    <div class="howto">
        <h2 class="huwto_headline headline"><ruby>HOWTO<rt>鳴門でサイクリング</rt></ruby></h2>
        <div class="howto_container">
            <img class="howto_img not_sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/howto_about_img1.png" alt="阿波踊り装飾">
            <div class="howto_naruto">
                <h3 class="howto_list_headline">鳴門市について</h3>
                <p class="howto_naruto_text">&emsp;徳島県鳴門市は関西の玄関の窓口であり、うずしおや大塚国際美術館などの観光スポットがたくさんあるので、サイクリストの聖地として十分なポテンシャルを有しています。自転車で散策して、コース周辺のおすすめグルメスポットで美味しい食事を楽しんでもらい、鳴門の魅力ある四季折々の美しい自然・街並みを五感で感じ、その土地の暮らしや文化に触れてもらいたいと考えています。<br>
                    &emsp;海と愛車の自転車を見ながら地元の食材に舌鼓を打ってみませんか？</p>
            </div>
            <div class="list_container">
                <h3 class="howto_list_headline">服装</h3>
                <p class="howto_text">走行中の安全確保、疲労や日焼け軽減などのため、以下の服装が望ましいです。<br>
                    2022年より、自転車利用者に対してヘルメットの着用が努力義務化されました。<br>
                    安全運転を心がけるのはもちろん、もしもの備えとしてヘルメットを正しく着用し、自分の命を守りましょう。</p>
                <ul class="cycle_item_list">
                    <li class="wear_item">
                        <img class="list_img wear" src="<?php echo get_template_directory_uri(); ?>/assets/img/howto_fashion_img1.png" alt="ヘルメット">
                        <p>自転車用<br class="not_pc">ヘルメット</p>
                    </li>
                    <li class="item"><img class="list_img wear" src="<?php echo get_template_directory_uri(); ?>/assets/img/howto_fashion_img2.png" alt="サングラス">
                        <p>サングラス</p>
                    </li>
                    <li class="wear_item"><img class="list_img wear" src="<?php echo get_template_directory_uri(); ?>/assets/img/howto_fashion_img3.png" alt="通気性のいいウェア上下">
                        <p>通気性のいい<br class="not_pc">ウェア上下</p>
                    </li>
                    <li class="wear_item"><img class="list_img wear" src="<?php echo get_template_directory_uri(); ?>/assets/img/howto_fashion_img4.png" alt="グローブ">
                        <p>グローブ</p>
                    </li>
                </ul>
            </div>
            <div class="list_container">
                <h3 class="howto_list_headline">携行品</h3>
                <p></p>
                <ul class="cycle_item_list">
                    <li class="carry_item">
                        <img class="list_img carry" src="<?php echo get_template_directory_uri(); ?>/assets/img/howto_item_img1.png" alt="バッグ">
                        <p>バッグ</p>
                    </li>
                    <li class="carry_item">
                        <img class="list_img carry" src="<?php echo get_template_directory_uri(); ?>/assets/img/howto_item_img2.png" alt="ライト">
                        <p>ライト</p>
                    </li>
                    <li class="carry_item">
                        <img class="list_img carry" src="<?php echo get_template_directory_uri(); ?>/assets/img/howto_item_img3.png" alt="ロック">
                        <p>ロック</p>
                    </li>
                    <li class="carry_item">
                        <img class="list_img carry" src="<?php echo get_template_directory_uri(); ?>/assets/img/howto_item_img4.png" alt="地図">
                        <p>地図</p>
                    </li>
                </ul>
                <ul class="cycle_item_list">
                    <li class="carry_item">
                        <img class="list_img carry" src="<?php echo get_template_directory_uri(); ?>/assets/img/howto_item_img5.png" alt="救急用品">
                        <p>救急用品</p>
                    </li>
                    <li class="carry_item">
                        <img class="list_img carry" src="<?php echo get_template_directory_uri(); ?>/assets/img/howto_item_img6.png" alt="コンパクトツール修理キット">
                        <p>コンパクトツール<br>修理キット</p>
                    </li>
                    <li class="carry_item">
                        <img class="list_img carry" src="<?php echo get_template_directory_uri(); ?>/assets/img/howto_item_img7.png" alt="水分">
                        <p>水分</p>
                    </li>
                    <li class="carry_item">
                        <img class="list_img carry" src="<?php echo get_template_directory_uri(); ?>/assets/img/howto_item_img8.png" alt="携行食">
                        <p>携行食</p>
                    </li>
                </ul>
            </div>
            <div class="cycle_attention list_container">
                <h3 class="howto_list_headline">走行の注意</h3>
                <p class="">サイクリングにあたり、交通ルールを守って安全運転を心掛けましょう。</p>
                <p class="attention_text">・自転車は必ず車道の左側を通行しましょう。<br>
                    ・グループで走行する場合は、十分な車間距離をとりながら、周囲に注意して走行してください。信号無視や並走、話しながらの走行、競争など、危険な走行はしないでください。もちろん飲酒運転や二人乗りなどの危険運転は禁止です。<br>
                    ・市街地を走行する場合は、特に車両への注意と、歩行者の妨げにならない走行をお願いします。<br>
                    ・山あいのコースでは、アップダウンが大きい箇所もありますので、スピードの出し過ぎには十分注意してください。また、猪などの野生動物に出会う場合もあります。<br>
                    ・夜間は視界が悪く、事故や道に迷う等のトラブルが起きやすくなりますので、できるだけ日中のサイクリングを計画しましょう。</p>

            </div>
        </div>
        <div class="more_naruto list_container">
            <h3 class="howto_list_headline">もっと鳴門について知るには</h3>
            <ul class="more_naruto_card_list">
                <li class="more_naruto_card_item">
                    <!-- 番号は仮。コラムができ次第番号差し替え -->
                    <a href="<?php the_permalink(156); ?>">

                        <?php echo get_the_post_thumbnail(156, 'thumbnail'); ?>

                        <p class="more_naruto_num">01</p>
                        <div class="more_naruto_caption">
                            <h3 class="more_naruto_title">01|インタビュー</h3>
                            <?php echo get_the_excerpt(156); ?>
                        </div>
                    </a>
                </li>
                <li class="more_naruto_card_item">
                    <a href="<?php the_permalink(149); ?>">

                        <?php echo get_the_post_thumbnail(149, 'thumbnail'); ?>

                        <p class="more_naruto_num">02</p>
                        <div class="more_naruto_caption">
                            <h3 class="more_naruto_title">02|ポタリングコラム</h3>
                            <?php echo get_the_excerpt(149); ?>
                        </div>
                    </a>
                </li>
                <li class="more_naruto_card_item">
                    <a href=" <?php echo get_term_link('eat', 'shop_type'); ?>">
                        <img class="" src="https://placehold.jp/500x480.png" alt="">
                        <p class="more_naruto_num">03</p>
                        <div class="more_naruto_caption">
                            <h3 class="more_naruto_title">03|食べる</h3>
                            カードの説明が入ります。テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        </div>
                    </a>
                </li>
                <li class="more_naruto_card_item">
                    <a href="<?php echo get_term_link('buy', 'shop_type'); ?>">
                        <img class="" src="https://placehold.jp/500x480.png" alt="">
                        <p class="more_naruto_num">04</p>
                        <div class="more_naruto_caption">
                            <h3 class="more_naruto_title">04|買う</h3>
                            カードの説明が入ります。テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        </div>
                    </a>
                </li>
                <li class="more_naruto_card_item">
                    <a href="<?php echo get_term_link('enjoy', 'spot_type'); ?>">
                        <img class="" src="https://placehold.jp/500x480.png" alt="">
                        <p class="more_naruto_num">05</p>
                        <div class="more_naruto_caption">
                            <h3 class="more_naruto_title">05|楽しむ</h3>
                            カードの説明が入ります。テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        </div>
                    </a>
                </li>
                <li class="more_naruto_card_item">
                    <a href="<?php echo get_term_link('cycle-spot', 'shop_type'); ?>">
                        <img class="" src="https://placehold.jp/500x480.png" alt="">
                        <p class="more_naruto_num">06</p>
                        <div class="more_naruto_caption">
                            <h3 class="more_naruto_title">06|サイクルスポット</h3>
                            カードの説明が入ります。テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        </div>
                    </a>
                </li>
                <li class="more_naruto_card_item">
                    <a href="<?php echo home_url('/question/'); ?>">
                        <img class="" src="https://placehold.jp/500x480.png" alt="">
                        <p class="more_naruto_num">07</p>
                        <div class="more_naruto_caption">
                            <h3 class="more_naruto_title">07|よくある質問</h3>
                            カードの説明が入ります。テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        </div>
                    </a>
                </li>
                <li class="more_naruto_card_item">
                    <a href="<?php echo home_url('/aboutsite/'); ?>">
                        <img class="" src="https://placehold.jp/500x480.png" alt="">
                        <p class="more_naruto_num">08</p>
                        <div class="more_naruto_caption">
                            <h3 class="more_naruto_title">08|サイト制作にあたって</h3>
                            カードの説明が入ります。テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</main>

<?php get_footer(); ?>