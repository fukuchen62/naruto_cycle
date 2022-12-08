<?php get_header(); ?>
<main>
    <!-- キービジュアル -->
    <div class="key_bg_under">
        <img src="https://placehold.jp/1440x400.png" alt="マイページキービジュアル" class="key_bg_under_img">
    </div>

    <!-- パンくずリスト -->
    <div class="bradcrumbs">
        ここに＞パンくずリストが＞入ります
    </div>

    <!-- ページ見出し -->
    <section class="mypage">
        <h2 class="course_top headline"><ruby>CONTACT<rt>お問い合わせ</rt></ruby></h2>
    </section>

    <!-- 問い合わせフォーム -->
    <div class="contact_wrap">
        <!-- <form action="confirm.php" method="post" name="form" onsubmit="return validate()"> -->


        <?php echo do_shortcode('[contact-form-7 id="300" title="お問い合わせ"]'); ?>

        <!-- 本サーバ用 -->
        <?php echo do_shortcode('[contact-form-7 id="164" title="お問い合わせフォーム"]'); ?>
    </div>



</main>
<?php get_footer(); ?>