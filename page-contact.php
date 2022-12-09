<?php get_header(); ?>
<main>
    <!-- キービジュアル -->
    <div class="key_bg_under">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/key_visual_img1.png" alt="マイページキービジュアル" class="key_bg_under_img">
    </div>

    <!-- パンくずリスト -->
    <!-- <div class="bradcrumbs">
        ここに＞パンくずリストが＞入ります
    </div> -->

    <!-- ページ見出し -->
    <section class="mypage">
        <h2 class="course_top headline"><ruby>CONTACT<rt>お問い合わせ</rt></ruby></h2>
    </section>

    <!-- 問い合わせフォーム -->
    <div class="contact_wrap">
        <!-- <form action="confirm.php" method="post" name="form" onsubmit="return validate()"> -->




        <!-- 本サーバ用 -->
        <?php echo do_shortcode('[contact-form-7 id="164" title="お問い合わせフォーム"]'); ?>
    </div>



</main>
<?php get_footer(); ?>