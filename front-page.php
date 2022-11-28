    <?php get_header(); ?>

    <?php if (is_home()) : ?>
    <!-- トップページのみ表示するものを記入 -->
    <?php endif; ?>


    <h1>なるとサイくるっと！</h1>
    <h2> NEWS </h2>

    <!-- ワードプレスループ始まり -->
    <?php if (have_posts()) : ?>
    <ul>
        <?php while (have_posts()) : the_post(); ?>

        <div>
            <article id='post-<?php the_ID(); ?>' <?php post_class(''); ?>>
                <!-- <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('medium'); ?>
        </a> -->
                <?php the_category(); ?>
                <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d') ?></time>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php the_excerpt(); ?>


            </article>
        </div>

        <?php endwhile; ?>
    </ul>
    <?php endif; ?>
    <!-- ワードプレスループ終わり -->

    <p><a href="<?php echo get_permalink(201) ?>">一覧へ</a></p>


    =======

    <!-- サイクリングについて -->
    <?php
    $args = array(
        'page_id'      => '2',
    );
    $top_about = new WP_Query($args);
    if ($top_about->have_posts()) : while ($top_about->have_posts()) : $top_about->the_post();
    ?>
    <!-- 繰り返し処理する内容 -->
    <h2><span><?php the_title(); ?></span> ABOUT</h2>
    <p><?php the_excerpt(); ?></p>
    <?php
        endwhile;
    endif;
    wp_reset_postdata();
    ?>

    <p><a href="<?php echo get_permalink(2); ?>">もっと読む</a></p>

    <!-- 全体コースマップ -->
    <img src="./assets/img/noimage_600x400.png" alt="">
    <h2> コースを選ぶ</h2>
    <ul>
        <li><a href="<?php echo get_permalink(142); ?>">初心者コース</a></li>
        <li><a href="<?php echo  get_permalink(183); ?>">短距離コース</a></li>
        <li><a href="<?php echo get_permalink(184); ?>">中距離コース</a></li>
        <li><a href="<?php echo  get_permalink(185); ?>">長距離コース</a></li>
    </ul>


    <h2><span>pickup</span><span>周辺スポット</span> SPOT</h2>
    <!-- リコメンド記事ランダムで表示 -->


    <p><a href="">スポット一覧</a></p>


    <!-- インスタ表示 -->


    <?php get_footer(); ?>