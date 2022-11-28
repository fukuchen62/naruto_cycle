<?php get_header(); ?>

<!-- パンくず -->
<?php echo do_shortcode('[flexy_breadcrumb]'); ?>


<main class="main">
    <?php
    //開いているページの情報を取得
    $kind_slug = get_query_var('kind');
    //タクソノミの値にてそのタクソノミをしゅとくする
    $kind = get_term_by('slug', $kind_slug, 'kind');
    ?>
    <section class="sec">
        <div class="container">
            <div class="sec_header">
                <h2 class="title title-jp"><?php echo $kind->name; ?></h2>
                <span class="title title-en"><?php echo strtoupper($kind->slug); ?></span>
            </div>

            <div class="row justify-content-center">
                <!-- ループの開始 -->
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                <!-- 記事を取得して$POSTに代入 -->
                <?php the_post(); ?>

                <div class="col-md-3">
                    <?php get_template_part('template-parts/loop', 'menu') ?>
                </div>


                <?php endwhile; ?>
                <!-- ループの終了 -->
                <?php endif; ?>

            </div>
        </div>
    </section>
</main>
<h2>spot一覧表示</h2>


<p>食べる</p>
<p>見る</p>
<p>買う</p>
<p>楽しむ</p>
<p>サイクルスポット</p>

<?php get_footer(); ?>