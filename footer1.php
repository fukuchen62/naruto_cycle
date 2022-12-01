<footer class="footer">
    <div class="container">
        <div class="footer_inner">

            <nav>フッターとサイトマップ
                <ul>
                    <?php
                    $args = array(
                        'menu' => 'footer-navigation', //作成したメニュー名
                        'menu_class' => '', //メニューに使うクラス名
                        'container' => false, //ulタグを囲んでいるdivを削除
                    );
                    wp_nav_menu($args);
                    ?>

                    <!-- <li>about</li>
            <li>course</li>
            <li>search</li>
            <li>Q&A</li>
            <li>my page</li>
            <li>contact</li>
            <li>サイト制作に当たって</li>
            <li>おといあわせ</li>
            <li>プライバシーポリシ</li> -->
                </ul>
            </nav>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>