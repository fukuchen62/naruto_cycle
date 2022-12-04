<span>検索</span>



<!-- 検索フォーム1 -->
<form method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <input type="hidden" name="s" value="">
    <!-- <input type="text" name="s" id=""> -->
    <ul>

        <th class="nav-title">コース別</th>

        <tr class="search-nav">

            <td class="">
                <div class="">
                    <label class=""><input type="radio" class="" name="course_type" value="142" checked>初心者</label>
                </div>
            </td>
            <td class="">
                <div class="">
                    <label class=""><input type="radio" class="" name="course_type" value="183">短距離</label>
                </div>
            </td>


            <td class="">
                <div class="">
                    <label class=""><input type="radio" class="" name="course_type" value="184">中距離</label>
                </div>
            </td>
            <td class="">
                <div class="">
                    <label class=""><input type="radio" class="" name="course_type" value="185">長距離</label>
                </div>
            </td>

            <table class="">
                <th class="">食べる</th>

                <tr class="">

                    <td class="">
                        <label class=""><input type="checkbox" name="eat[]" value="restaurante">カフェ・レストラン</label>
                    </td>
                    <td class="">
                        <label class=""><input type="checkbox" name="eat[]" value="seafood">海鮮</label>
                    </td>

                    <td class="">
                        <label class=""><input type="checkbox" name="eat[]" value="noodle">麺類</label>
                    </td>
                    <td class="nav-item">
                        <label class="label-box"><input type="checkbox" name="eat[]" value="takeout">テイクアウト</label>
                    </td>

                </tr>
            </table>


            <table class="">
                <th class="">買う</th>

                <tr class="">

                    <td class="">
                        <label class=""><input type="checkbox" name="buy[]" value="souvenir">お土産</label>
                    </td>
                    <td class="">
                        <label class=""><input type="checkbox" name="buy[]" value="roadstation">道の駅</label>
                    </td>
                </tr>
            </table>

            <table class="">
                <th class="">楽しむ</th>

                <tr class="">

                    <td class="">
                        <label class=""><input type="checkbox" name="enjoy[]" value="museum">美術館・その他</label>
                    </td>
                    <td class="">
                        <label class=""><input type="checkbox" name="enjoy[]" value="hotel">ホテル・温泉</label>
                    </td>
                    <td class="">
                        <label class=""><input type="checkbox" name="enjoy[]" value="park">公園</label>
                    </td>
                    <td class="">
                        <label class=""><input type="checkbox" name="enjoy[]" value="viewspot">ビュースポット</label>
                    </td>
                </tr>
            </table>

            <table class="">
                <th class="">サイクルスポット</th>

                <tr class="">

                    <td class="">
                        <label class=""><input type="checkbox" name="cyclespot[]" value="rental">レンタサイクル</label>
                    </td>
                    <td class="">
                        <label class=""><input type="checkbox" name="cyclespot[]" value="cycle">サイクルショップ</label>
                    </td>
                </tr>
            </table>



    </ul>

    <input type="submit" value="検索する">
</form>