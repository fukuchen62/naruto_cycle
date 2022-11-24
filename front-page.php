    <?php get_header(); ?>

    <?php if (is_home()) : ?>
    <!-- トップページのみ表示するものを記入 -->
    <?php endif; ?>


    <h1>なるとサイくるっと！</h1>
    <h2><a href=""> ニュース</a> </h2>

    <!-- ワードプレスループ始まり -->
    <?php if (have_posts()) : ?>
    <ul>
        <?php while (have_posts()) : the_post(); ?>

        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php the_category(); ?>
        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d') ?></time>
        <?php endwhile; ?>
    </ul>
    <?php endif; ?>
    <!-- ワードプレスループ終わり -->


    <h2><a href=""> サイクリングについて</a> </h2>
    <h2><a href=""> サイクリングコース</a></h2>
    <h2><a href=""> スポット 検索</a></h2>
    <h2><a href=""> Ｑ＆Ａ</a></h2>
    <h2><a href=""> マイページ</a></h2>

    <!-- <footer>
    <nav>フッターとサイトマップ
        <ul>
            <li>about</li>
            <li>course</li>
            <li>search</li>
            <li>Q&A</li>
            <li>my page</li>
            <li>contact</li>
            <li>サイト制作に当たって</li>
            <li>おといあわせ</li>
            <li>プライバシーポリシ</li>
        </ul>
    </nav>
</footer>


</body>

</html> -->

    <?php get_footer(); ?>