<form method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <input type="hidden" name="s" value="">
    <!-- 検索ボックス -->
    <div class="search_container">
        <!-- 自転車のあしらい -->
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index_insta_img.png" alt="装飾" class="index_insta_img img_pc_only">
        <!-- ｈ３検索カテゴリ -->
        <div class="search_cate_box">
            <h3 class="search_cate">コース</h3>
            <!-- チェックボックス -->
            <div class="radio-box">
                <!-- 初心者コース -->
                <ul class="item_box">
                    <li class="choice_item">

                        <label class="s-search-btn"><input type="radio" class="checkbox_list" name="course_type" value="142" checked>初心者</label>
                    </li>
                </ul>

                <!-- 短距離コース -->
                <ul class="item_box">
                    <li class="choice_item">
                        <label class="s-search-btn"><input type="radio" class="checkbox_list" name="course_type" value="183">短距離</label>
                    </li>
                </ul>
                <!-- 中距離 -->
                <ul class="item_box">
                    <li class="choice_item">
                        <label class="s-search-btn"><input type="radio" class="checkbox_list" name="course_type" value="184">中距離</label>
                    </li>
                </ul>
                <!-- 長距離 -->
                <ul class="item_box">
                    <li class="choice_item">
                        <label class="s-search-btn"><input type="radio" name="course_type" value="185" class="checkbox_list">長距離</label>
                    </li>
                </ul>
            </div>

            <!-- 検索タイトル -->
            <div class="search_cate_box">
                <h3 class="search_cate">食べる</h3>
                <ul class="radio-box">
                    <li>
                        <!-- カフェ・レストラン -->
                        <ul class="item_box">
                            <li class="choice_item">

                                <label class="s-search-btn"><input type="checkbox" class="checkbox_list" name="eat[]" value="restaurante">カフェ・レストラン</label>
                            </li>
                        </ul>
                    </li>
                    <!-- 海鮮 -->
                    <li>
                        <ul class="item_box">
                            <li class="choice_item">

                                <label class="s-search-btn"><input type="checkbox" class="checkbox_list" name="eat[]" value="seafood">海鮮</label>
                            </li>
                        </ul>
                    </li>
                    <!-- 麺類 -->
                    <li>
                        <ul class="item_box">
                            <li class="choice_item">

                                <label class="s-search-btn"><input type="checkbox" class="checkbox_list" name="eat[]" value="noodle">麺類</label>
                            </li>
                        </ul>
                    </li>
                    <!-- テイクアウト -->
                    <li>
                        <ul class="item_box">
                            <li class="choice_item">

                                <label class="s-search-btn"><input type="checkbox" class="checkbox_list" name="eat[]" value="takeout">テイクアウト</label>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!-- 検索タイトル -->
            <div class="search_cate_box">
                <h3 class="search_cate">買う</h3>
                <ul class="radio-box">
                    <li>
                        <!-- お土産 -->
                        <ul class="item_box">
                            <li class="choice_item">

                                <label class="s-search-btn"><input type="checkbox" class="checkbox_list" name="buy[]" value="souvenir">お土産</label>
                            </li>
                        </ul>
                    </li>

                    <!-- 道の駅 -->
                    <li>
                        <ul class="item_box">
                            <li class="choice_item">

                                <label class="s-search-btn"><input type="checkbox" class="checkbox_list" name="buy[]" value="roadstation">道の駅</label>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!-- 検索タイトル -->
            <div class="search_cate_box">
                <h3 class="search_cate">楽しむ</h3>
                <ul class="radio-box">
                    <li>
                        <!-- 美術館・その他 -->
                        <ul class="item_box">
                            <li class="choice_item">

                                <label class="s-search-btn"><input type="checkbox" class="checkbox_list" name="enjoy[]" value="museum">美術館・その他</label>
                            </li>
                        </ul>
                    </li>
                    <!-- ホテル・温泉 -->
                    <li>
                        <ul class="item_box">
                            <li class="choice_item">

                                <label class="s-search-btn"><input type="checkbox" class="checkbox_list" name="enjoy[]" value="hotel">ホテル・温泉</label>
                            </li>
                        </ul>
                    </li>
                    <!-- 公園 -->
                    <li>
                        <ul class="item_box">
                            <li class="choice_item">

                                <label class="s-search-btn"><input type="checkbox" class="checkbox_list" name="enjoy[]" value="park">公園</label>
                            </li>
                        </ul>
                    </li>
                    <!-- ビュースポット -->
                    <li>
                        <ul class="item_box">
                            <li class="choice_item">

                                <label class="s-search-btn"><input type="checkbox" class="checkbox_list" name="enjoy[]" value="viewspot">ビュースポット</label>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!-- 検索タイトル -->
            <div class="search_cate_box">
                <h3 class="search_cate">サイクルスポット</h3>
                <ul class="radio-box">
                    <li>
                        <!-- レンタサイクル -->
                        <ul class="item_box">
                            <li class="choice_item">

                                <label class="s-search-btn"><input type="checkbox" class="checkbox_list" name="cyclespot[]" value="rental">レンタサイクル</label>
                            </li>
                        </ul>
                    </li>
                    <!-- サイクルショップ -->
                    <li>
                        <ul class="item_box">
                            <li class="choice_item">

                                <label class="s-search-btn"><input type="checkbox" class="checkbox_list" name="cyclespot[]" value="cycle">サイクルショップ</label>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>


            <!-- 検索ボタン -->
            <div class="btn-inner-box radio-box">
                <a href="search_result.html">
                    <ul class="btn-inner">
                        <li>
                            <input type="submit" class="search-btn" value="検索">
                        </li>
                    </ul>
                </a>
                <ul class="btn-inner">
                    <li>
                        <input type="reset" class="search-btn" value="リセット">
                    </li>
                </ul>
            </div>
</form>