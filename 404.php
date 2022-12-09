<?php get_header(); ?>

<main class="main">
    <!-- キービジュアル -->
    <div class="key_bg_under">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/key_visual_lightblue.png" alt="マイページキービジュアル" class="key_bg_under_img">
    </div>

    <section class="error">
        <h2 class="error_headline">404 NOT FOUND</h2>
        <p class="error_headline_caption">ご指定のページが見つかりませんでした。</p>

        <div class="error_text_box">
            <p class="error_text">アクセスしようとしたページは削除、変更されたか、現在利用できない可能性があります。
                お手数ですが、なるとサイくるっと！トップまたは下記リンクよりお探しください。</p>
        </div>
        <a href="#">
            <p class="common_btn">トップページへ</p>
        </a>

    </section>
</main>

<?php get_footer(); ?>