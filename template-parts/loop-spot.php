<article id="post_<?php the_ID() ?>" <?php post_class(''); ?>>
    <!-- アイキャッチ画像 -->
    <div class="">

        <a href="<?php the_permalink(); ?>">


            <?php if (has_post_thumbnail()) : ?>

            <?php the_post_thumbnail('medium'); ?>

            <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimage_600x400.png" alt="">

            <?php endif; ?>

        </a>
    </div>

    <div class="">


        <!-- 投稿日時 -->

        <time class="news_time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
    </div>
    <!-- カテゴリ -->
    <?php the_category() ?>

    <!-- 記事のタイトル -->
    <h2 class="news_title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>
    <!-- 記事の概要 -->
    <div class="news_desc">
        <p><?php the_excerpt(); ?></p>
        <p><a href="<?php the_permalink(); ?>">[続きを読む]</a></p>
    </div>
</article>