<?php get_header(); ?>

<main>
    <!-- キービジュアル -->
    <div class="key_bg_under">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/key_visual_img3.png" alt="マイページキービジュアル" class="key_bg_under_img">
    </div>

    <!-- パンくずリスト -->
    <!-- <div class="bradcrumbs"> -->
    <!-- パンくず -->
    <?php /**echo do_shortcode('[flexy_breadcrumb]');*/ ?>
    <!-- </div> -->

    <!-- Q&A -->
    <section class="qaa">

        <!-- 見出し -->
        <h2 class="qaa_top headline">
            <ruby>Q&A<rt>よくある質問</rt></ruby>
        </h2>

        <!-- アコーディオンコンテナ -->
        <div class="accordion-container">

            <!-- 質問1つ分 -->
            <dl class="accordion-list">
                <!-- 質問 -->
                <dt class="accordion-title js-accordion-title"> <img class="question_q_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/question_q_img.svg" alt="質問アイコン画像">
                    <p class="question_txt"> Q1. 自転車のレンタルはできますか？</p>
                </dt>
                <!-- 回答 -->
                <dd class="accordion-text">
                    <img class="question_a_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/question_a_img.svg" alt="質問アイコン画像">
                    <p class="question_txt">はい、できます。<br>ASAサイクリングレンタサイクルにて
                        現在（2022.12.12）貸出場所は７ヵ所あります。<br>
                        詳しくは、下記をご覧ください。
                        <br>
                        <a href="http://www.bestbike.jp/?contents=shop&dir=1002" target=" _blank" rel="noopener noreferrer">SR鳴門市レンタサイクル</a>
                    </p>
                </dd>
            </dl>

            <!-- 質問1つ分 -->
            <dl class="accordion-list">
                <!-- 質問 -->
                <dt class="accordion-title js-accordion-title"> <img class="question_q_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/question_q_img.svg" alt="質問アイコン画像">
                    <p class="question_txt"> Q2. 初心者ですが、完走できますか？</p>
                </dt>
                <!-- 回答 -->
                <dd class="accordion-text">
                    <img class="question_a_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/question_a_img.svg" alt="質問アイコン画像">
                    <p class="question_txt">はい、できます。<br>
                        短距離コースの他に、約10kmの初心者コースも作成しました。<br>
                        自転車で散歩する感覚で完走できると思います。<br>
                        <a href="<?php echo get_permalink(142); ?>" "target=" _blank" rel="noopener noreferrer">初心者モデルコース</a>
                    </p>
                </dd>
            </dl>

            <!-- 質問1つ分 -->
            <dl class="accordion-list">
                <!-- 質問 -->
                <dt class="accordion-title js-accordion-title"> <img class="question_q_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/question_q_img.svg" alt="質問アイコン画像">
                    <p class="question_txt"> Q3. 自転車輸送サービスなどはありますか？</p>
                </dt>
                <!-- 回答 -->
                <dd class="accordion-text">
                    <img class="question_a_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/question_a_img.svg" alt="質問アイコン画像">
                    <p class="question_txt">鳴門海峡「南あわじ～鳴門」間の自転車輸送サービス『ハコバス』があります。<br>
                        詳しくは、下記をご覧ください。<br>
                        <a href="https://asa-cycling.com/" target=" _blank" rel="noopener noreferrer">ASAサイクリングコース</a>
                    </p>
                </dd>
            </dl>

            <!-- 質問1つ分 -->
            <dl class="accordion-list">
                <!-- 質問 -->
                <dt class="accordion-title js-accordion-title"> <img class="question_q_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/question_q_img.svg" alt="質問アイコン画像">
                    <p class="question_txt"> Q4. 子供でも参加できますか？</p>
                </dt>
                <!-- 回答 -->
                <dd class="accordion-text">
                    <img class="question_a_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/question_a_img.svg" alt="質問アイコン画像">
                    <p class="question_txt">はい、できます。<br>
                        実際に親子で楽しんでいる方もいらっしゃいます。
                    </p>
                </dd>
            </dl>

            <!-- 質問1つ分 -->
            <dl class="accordion-list">
                <!-- 質問 -->
                <dt class="accordion-title js-accordion-title"> <img class="question_q_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/question_q_img.svg" alt="質問アイコン画像">
                    <p class="question_txt"> Q5. どんな服装で参加すればいいですか？</p>
                </dt>
                <!-- 回答 -->
                <dd class="accordion-text">
                    <img class="question_a_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/question_a_img.svg" alt="質問アイコン画像">
                    <p class="question_txt">初心者コースは、普段着でも参加できます。<br>
                        秋・冬でもサイクリング中に汗をかくこともあるので、
                        発汗性のあるインナーを着用することをおすすめします。
                    </p>
                </dd>
            </dl>

            <!-- 質問1つ分 -->
            <dl class="accordion-list">
                <!-- 質問 -->
                <dt class="accordion-title js-accordion-title"> <img class="question_q_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/question_q_img.svg" alt="質問アイコン画像">
                    <p class="question_txt"> Q6. サイクリング中の荷物はどうすればいいですか？</p>
                </dt>
                <!-- 回答 -->
                <dd class="accordion-text">
                    <img class="question_a_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/question_a_img.svg" alt="質問アイコン画像">
                    <p class="question_txt">
                        電動自転車（かご付き）以外は荷物を置く場所がないので、
                        リュックやショルダーバッグが良いかと思います。
                        <br>
                        バイクにドリンクを取り付けることも出来るので、
                        手持ちのバイクがありましたらカスタムするのも良いかと思います。
                    </p>
                </dd>
            </dl>

            <!-- 質問1つ分 -->
            <dl class="accordion-list">
                <!-- 質問 -->
                <dt class="accordion-title js-accordion-title"> <img class="question_q_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/question_q_img.svg" alt="質問アイコン画像">
                    <p class="question_txt"> Q7. 参加にどれくらいの費用がかかりますか？</p>
                </dt>
                <!-- 回答 -->
                <dd class="accordion-text">
                    <img class="question_a_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/question_a_img.svg" alt="質問アイコン画像">
                    <p class="question_txt">
                        費用はかかりません。
                        <br>
                        別途、イベントに参加する場合は費用がかかる場合もあるので、
                        イベント情報のサイトでご確認ください。
                    </p>
                </dd>
            </dl>

            <!-- 質問1つ分 -->
            <dl class="accordion-list">
                <!-- 質問 -->
                <dt class="accordion-title js-accordion-title"> <img class="question_q_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/question_q_img.svg" alt="質問アイコン画像">
                    <p class="question_txt"> Q8. 車で鳴門を訪れます。駐車場はありますか？</p>
                </dt>
                <!-- 回答 -->
                <dd class="accordion-text">
                    <img class="question_a_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/question_a_img.svg" alt="質問アイコン画像">
                    <p class="question_txt">
                        はい、あります。
                        <br>
                        現在（2022.12.12）確認出来ているところは以下の３ヶ所です。
                        <br>
                        <a href="https://www.uchinoumipark.jp/" target=" _blank" rel="noopener noreferrer">ウチノ海総合公園</a><br>徳島県鳴門市鳴門町高島字北679番地<br>
                        <a href="https://www.city.naruto.tokushima.jp/kurashi/machizukuri/koen/park.html" target=" _blank" rel="noopener noreferrer">うずしおふれあい公園</a><br>鳴門市撫養町斉田字北浜<br>
                        <a href="https://uzupark.com/" target=" _blank" rel="noopener noreferrer">UZUPARK</a><br>徳島県鳴門市撫養町大桑島字濘岩浜48-1
                        <br>
                    </p>
                </dd>
            </dl>

            <!-- 質問1つ分 -->
            <dl class="accordion-list">
                <!-- 質問 -->
                <dt class="accordion-title js-accordion-title"> <img class="question_q_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/question_q_img.svg" alt="質問アイコン画像">
                    <p class="question_txt"> Q9. 他にもコースはありますか？</p>
                </dt>
                <!-- 回答 -->
                <dd class="accordion-text">
                    <img class="question_a_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/question_a_img.svg" alt="質問アイコン画像">
                    <p class="question_txt">
                        当サイトには現在、全部で４コースあります。
                        <br>
                        ASAが提供している短距離・中距離・長距離コースと、
                        オリジナルの初心者コースがあります。
                    </p>
                </dd>
            </dl>

            <!-- 質問1つ分 -->
            <dl class="accordion-list">
                <!-- 質問 -->
                <dt class="accordion-title js-accordion-title"> <img class="question_q_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/question_q_img.svg" alt="質問アイコン画像">
                    <p class="question_txt"> Q10. 飲食店はありますか？</p>
                </dt>
                <!-- 回答 -->
                <dd class="accordion-text">
                    <img class="question_a_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/question_a_img.svg" alt="質問アイコン画像">
                    <p class="question_txt">
                        はい、あります。<br>
                        鳴門市は漁業が盛んなので魚介類が豊富です。カフェ・レストランやサイクリング中にテイクアウト出来る軽食などもあるので、是非スポット検索してみてください。<br>
                        他にも、ASAサイクリングのおもてなしスポットもあります。<br>
                        詳しくは、下記をご覧ください。<br>
                        <a href="https://asa-cycling.com/course/naruto/" target=" _blank" rel="noopener noreferrer">鳴門市のおもてなしスポット</a>
                    </p>
                </dd>
            </dl>

            <!-- 質問1つ分 -->
            <dl class="accordion-list">
                <!-- 質問 -->
                <dt class="accordion-title js-accordion-title"> <img class="question_q_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/question_q_img.svg" alt="質問アイコン画像">
                    <p class="question_txt"> Q11. 絶景スポットはありますか？</p>
                </dt>
                <!-- 回答 -->
                <dd class="accordion-text">
                    <img class="question_a_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/question_a_img.svg" alt="質問アイコン画像">
                    <p class="question_txt">
                        はい、あります。<br>
                        鳴門市は海に多く面しているので、サイクリング中も絶景スポットがたくさんあります。<br>
                        サイトでも「ビュースポット」として紹介しているので、是非検索してみてください。<br>
                        詳しくは、下記をご覧ください。<br>
                        <a href="<?php echo get_term_link('viewspot', 'spot_type'); ?>" target=" _blank" rel="noopener noreferrer">ビュースポット</a>
                    </p>
                </dd>
            </dl>

            <!-- 質問1つ分 -->
            <dl class="accordion-list">
                <!-- 質問 -->
                <dt class="accordion-title js-accordion-title"> <img class="question_q_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/question_q_img.svg" alt="質問アイコン画像">
                    <p class="question_txt"> Q12.鳴門へのアクセス方法を教えてください。</p>
                </dt>
                <!-- 回答 -->
                <dd class="accordion-text">
                    <img class="question_a_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/question_a_img.svg" alt="質問アイコン画像">
                    <p class="question_txt">
                        【鉄道】徳島駅から鳴門駅まで約40分。<br>
                        【バス】徳島駅から鳴門駅前まで約45分。<br>
                        【車】徳島駅から鳴門駅まで約40分。<br>
                        詳しくは、下記をご覧ください。<br>
                        <a href="https://www.awanavi.jp/site/access/" target=" _blank" rel="noopener noreferrer">阿波ナビ</a>
                    </p>
                </dd>
            </dl>
        </div>
    </section>

    <?php get_footer(); ?>