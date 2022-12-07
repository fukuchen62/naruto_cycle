<form method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <input type="hidden" name="s" value="">



    <!-- チェックしたものを保持 -->

    <?php

    // 「コースタイプ」のチェックを保持
    $select_course = filter_input(INPUT_GET, "course_type");
    $checked["course_type"] = ["142" => "", "183" => "", "184" => "", "185" => ""];
    $checked["course_type"][$select_course] = " checked";
    ?>

    <!-- 「食べるタイプ」のチェックを保持 -->
    <?php $select_eat = filter_input(INPUT_GET, "eat", FILTER_DEFAULT, FILTER_REQUIRE_ARRAY) ?: [];
    $checked["eat"] = ["cafe-restaurante" => "", "seafood" => "", "noodle" => "", "takeout" => ""];
    foreach ($select_eat as $val) {
        $checked["eat"][$val] = " checked";
    }
    ?>


    <!-- 「買うタイプ」のチェックを保持 -->
    <?php $select_buy = filter_input(INPUT_GET, "buy", FILTER_DEFAULT, FILTER_REQUIRE_ARRAY) ?: [];
    $checked["buy"] = ["souvenir" => "", "roadstation" => ""];
    foreach ($select_buy as $val) {
        $checked["buy"][$val] = " checked";
    }
    ?>


    <!-- 「楽しむタイプ」のチェックを保持 -->
    <?php $select_enjoy = filter_input(INPUT_GET, "enjoy", FILTER_DEFAULT, FILTER_REQUIRE_ARRAY) ?: [];
    $checked["enjoy"] = ["museum-others" => "", "hotel-onsen" => "", "park" => "", "viewspot" => ""];
    foreach ($select_enjoy as $val) {
        $checked["enjoy"][$val] = " checked";
    }
    ?>

    <!-- 「サイクルスポットタイプ」のチェックを保持 -->
    <?php $select_cycle = filter_input(INPUT_GET, "cyclespot", FILTER_DEFAULT, FILTER_REQUIRE_ARRAY) ?: [];
    $checked["cyclespot"] = ["rental-cycle" => "", "cycle-shop" => ""];
    foreach ($select_cycle as $val) {
        $checked["cyclespot"][$val] = " checked";
    }
    print_r($checked["cyclespot"]["rental-cycle"]);
    ?>




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

                        <label class="s-search-btn"><input type="radio" class="checkbox_list" name="course_type" value="142" <?= $checked["course_type"]["142"]; ?> <?php
                                                                                                                                                                    if (!$select_course) {
                                                                                                                                                                        echo 'checked';
                                                                                                                                                                    } ?> />初心者</label>
                    </li>
                </ul>

                <!-- 短距離コース -->
                <ul class="item_box">
                    <li class="choice_item">
                        <label class="s-search-btn"><input type="radio" class="checkbox_list" name="course_type" value="183" <?= $checked["course_type"]["183"]; ?>>短距離</label>
                    </li>
                </ul>
                <!-- 中距離 -->
                <ul class="item_box">
                    <li class="choice_item">
                        <label class="s-search-btn"><input type="radio" class="checkbox_list" name="course_type" value="184" <?= $checked["course_type"]["184"]; ?>>中距離</label>
                    </li>
                </ul>
                <!-- 長距離 -->
                <ul class="item_box">
                    <li class="choice_item">
                        <label class="s-search-btn"><input type="radio" name="course_type" value="185" class="checkbox_list" <?= $checked["course_type"]["185"]; ?>>長距離</label>
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

                                <label class="s-search-btn"><input type="checkbox" class="checkbox_list" name="eat[]" value="cafe-restaurante" <?= $checked["eat"]["cafe-restaurante"] ?>>カフェ・レストラン</label>
                            </li>
                        </ul>
                    </li>
                    <!-- 海鮮 -->
                    <li>
                        <ul class="item_box">
                            <li class="choice_item">

                                <label class="s-search-btn"><input type="checkbox" class="checkbox_list" name="eat[]" value="seafood" <?= $checked["eat"]["seafood"] ?>>海鮮</label>
                            </li>
                        </ul>
                    </li>
                    <!-- 麺類 -->
                    <li>
                        <ul class="item_box">
                            <li class="choice_item">

                                <label class="s-search-btn"><input type="checkbox" class="checkbox_list" name="eat[]" value="noodle" <?= $checked["eat"]["noodle"]  ?>>麺類</label>
                            </li>
                        </ul>
                    </li>
                    <!-- テイクアウト -->
                    <li>
                        <ul class="item_box">
                            <li class="choice_item">

                                <label class="s-search-btn"><input type="checkbox" class="checkbox_list" name="eat[]" value="takeout" <?= $checked["eat"]["takeout"] ?>>テイクアウト</label>
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

                                <label class="s-search-btn"><input type="checkbox" class="checkbox_list" name="buy[]" value="souvenir" <?= $checked["buy"]["souvenir"] ?>>お土産</label>
                            </li>
                        </ul>
                    </li>

                    <!-- 道の駅 -->
                    <li>
                        <ul class="item_box">
                            <li class="choice_item">

                                <label class="s-search-btn"><input type="checkbox" class="checkbox_list" name="buy[]" value="roadstation" <?= $checked["buy"]["roadstation"] ?>>道の駅</label>
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

                                <label class="s-search-btn"><input type="checkbox" class="checkbox_list" name="enjoy[]" value="museum-others" <?= $checked["enjoy"]["museum-others"] ?>>美術館・その他</label>
                            </li>
                        </ul>
                    </li>
                    <!-- ホテル・温泉 -->
                    <li>
                        <ul class="item_box">
                            <li class="choice_item">

                                <label class="s-search-btn"><input type="checkbox" class="checkbox_list" name="enjoy[]" value="hotel-onsen" <?= $checked["enjoy"]["hotel-onsen"] ?>>ホテル・温泉</label>
                            </li>
                        </ul>
                    </li>
                    <!-- 公園 -->
                    <li>
                        <ul class="item_box">
                            <li class="choice_item">

                                <label class="s-search-btn"><input type="checkbox" class="checkbox_list" name="enjoy[]" value="park" <?= $checked["enjoy"]["park"] ?>>公園</label>
                            </li>
                        </ul>
                    </li>
                    <!-- ビュースポット -->
                    <li>
                        <ul class="item_box">
                            <li class="choice_item">

                                <label class="s-search-btn"><input type="checkbox" class="checkbox_list" name="enjoy[]" value="viewspot" <?= $checked["enjoy"]["viewspot"] ?>>ビュースポット</label>
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

                                <label class="s-search-btn"><input type="checkbox" class="checkbox_list" name="cyclespot[]" value="rental-cycle" <?= $checked["cyclespot"]["rental-cycle"] ?>>レンタサイクル</label>
                            </li>
                        </ul>
                    </li>
                    <!-- サイクルショップ -->
                    <li>
                        <ul class="item_box">
                            <li class="choice_item">

                                <label class="s-search-btn"><input type="checkbox" class="checkbox_list" name="cyclespot[]" value="cycle-shop" <?= $checked["cyclespot"]["cycle-shop"] ?>>サイクルショップ</label>
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