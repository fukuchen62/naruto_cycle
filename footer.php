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
        <a href=""><img class="sns_icon" src="<?php echo get_template_directory_uri(); ?>//assets/img/index_footer_sharetwitter.png" alt=" Twitterへのシェアボタン"></a>
        <!-- facebook -->
        <a href=""><img class="sns_icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/index_footer_sharefb.png" alt="Facebookへのシェアボタン"></a>
    </div>
    <p class="copyright txt_c">AllCopyRight©なるとサイくるっと！</p>
</footer>

<!--＝＝＝＝＝＝＝＝＝＝＝＝＝ footerここまで ＝＝＝＝＝＝＝＝＝＝＝＝＝-->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/index.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/header.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js"></script>
</div>
<?php wp_footer(); ?>
</body>

</html>
<!-- フッター切り取りここまで -->