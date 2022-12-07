<!--＝＝＝＝＝＝＝＝＝＝＝＝＝ footerここから ＝＝＝＝＝＝＝＝＝＝＝＝＝-->

<footer class="footer bg_blue white txt_c">
    <ul class="banner_list gap32_16 m_bottom40">
        <!-- asaなどのバナーがliで入ります -->
        <li class="banner_item"><a href="https://asa-cycling.com/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner_asa.png" alt="ASAのバナー"></a></li>
        <li class="banner_item"><a href="https://www.city.naruto.tokushima.jp/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner_naruto.png" alt="鳴門市のバナー"></a></li>
        <li class="banner_item"><a href="https://www.tokusupo.net/bicycle/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner_okoku.png" alt="自転車王国のバナー"></a></li>
    </ul>

    <nav class="fnav_container bg_blue">
        <!-- フッターナビ -->
        <!-- 近藤追加分 -->


        <ul class="fnav_w_list">
            <li class="footer_headline">
                <ul class="footer_list">
                    <li class="footer_nav_item bold"><a href="<?php echo home_url('/news/'); ?>">ニュース</a></li>
                    <li class="footer_nav_item bold"><a href="<?php echo home_url('/cycle/'); ?>">鳴門サイクリングについて</a></li>
                    <li class="footer_nav_item bold"><a href="<?php echo home_url('/mypage/'); ?>">マイページ</a></li>
                </ul>
            </li>
            <li class="footer_headline"><a href="<?php echo get_permalink(183); ?>">サイクリングコース</a>
                <ul class="footer_list">
                    <li class="footer_nav_item"><a href="<?php echo get_permalink(142); ?>">初心者モデルコース</a></li>
                    <li class="footer_nav_item"><a href="<?php echo get_permalink(183); ?>">短距離コース</a></li>
                    <li class="footer_nav_item"><a href="<?php echo get_permalink(184); ?>">中距離コース</a></li>
                    <li class="footer_nav_item"><a href="<?php echo get_permalink(185); ?>">長距離コース</a></li>
                </ul>
            </li>
            <li class="footer_headline"><a href="<?php echo home_url('/spot/'); ?>">周辺スポット検索</a>
                <ul class="footer_list">
                    <li class="footer_nav_item"><a href=" <?php echo get_term_link('eat', 'shop_type'); ?>">食べる</a></li>
                    <li class="footer_nav_item"><a href="<?php echo get_term_link('buy', 'shop_type'); ?>">買う</a></li>
                    <li class="footer_nav_item"><a href="<?php echo get_term_link('enjoy', 'spot_type'); ?>">楽しむ</a></li>
                    <li class="footer_nav_item"><a href="<?php echo get_term_link('cycle-spot', 'shop_type'); ?>">サイクルスポット</a></li>
                </ul>
            </li>
            <li class="footer_headline">Q＆A・その他
                <ul class="footer_list">
                    <li class="footer_nav_item"><a href="<?php echo home_url('/question/'); ?>">Q＆A</a></li>
                    <li class="footer_nav_item"><a href="<?php echo home_url('/contact/'); ?>">お問い合わせ</a></li>
                    <li class="footer_nav_item"><a href="<?php echo home_url('/privacy/'); ?>">プライバシーポリシー・免責事項</a></li>
                    <li class="footer_nav_item"><a href="<?php echo home_url('/aboutsite/'); ?>">サイト制作にあたって</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- 追加分ここまで -->

    <div class="sns_container flex gap32_16">
        <!-- twitter -->
        <a href=""><img class="sns_icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/index_footer_sharetwitter.png" alt=" Twitterへのシェアボタン"></a>
        <!-- facebook -->
        <a href=""><img class="sns_icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/index_footer_sharefb.png" alt="Facebookへのシェアボタン"></a>
    </div>
    <p class="copyright txt_c">AllCopyRight©なるとサイくるっと！</p>
</footer>

<!-- トップに戻るボタン -->
<div class="pagetop">
    <!-- 戻るボタン画像 -->
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index_pagetop_btn_img.png" alt="トップに戻るボタン">
</div>
<!-- footerここまで -->

<?php wp_footer(); ?>
</body>

</html>
<!-- フッター切り取りここまで -->