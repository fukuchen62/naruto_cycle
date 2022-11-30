<article id="post_<?php the_ID() ?>" <?php post_class(''); ?>>
    <!-- アイキャッチ画像 -->
    <div class="">

        <a href="<?php the_permalink(); ?>">

            <!-- フィールドのアイキャッチ画像使用 -->
            <?php
            $pic = get_field('eyecatch');
            $pic_url = $pic['sizes']['thumbnail'];
            $width = $pic['sizes']['thumbnail-width'];
            $height = $pic['sizes']['thumbnail-height'];


            ?>
            <img src="<?php echo $pic_url; ?>" width=" <?php echo $width; ?>" height="<?php echo $height; ?>" alt="">


            <!-- デフォルトのアイキャッチ画像使用の場合 -->
            <!--
            <?php if (has_post_thumbnail()) : ?>

                <?php the_post_thumbnail('medium'); ?>

            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimage_600x400.png" alt="">

            <?php endif; ?> -->

        </a>
    </div>

    <div class="">

        <!-- 店名 -->
        <!-- <li><b>店名</b><span><?php the_field('shop_name'); ?></span></li> -->
        <!-- 投稿日時 -->

        <!-- <time class="news_time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
    </div> -->
        <!-- カテゴリ -->
        <!-- <?php the_category() ?> -->

        <!-- 記事のタイトル （店名）-->
        <h2 class="news_title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <!-- 営業時間 -->
        <li><b>営業時間</b><span><?php the_field('open_time'); ?></span></li>

        <!-- 住所 -->
        <li><b>住所</b><span><?php the_field('address'); ?></span></li>

        <!-- 電話番号 -->
        <li><b>tel</b><span><?php the_field('telephone'); ?></span></li>

        <!-- 記事の概要 -->

        <!-- <div class="news_desc">
        <p><?php the_excerpt(); ?></p>
        <p><a href="<?php the_permalink(); ?>">[続きを読む]</a></p>
    </div> -->
</article>