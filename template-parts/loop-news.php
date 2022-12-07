<div class="news_card_item">
    <!-- 記事の写真 -->
    <!-- <div class="news_news_article_img_container flex"> -->
    <!-- ニュース記事の写真 -->
    <a href="<?php the_permalink(); ?>">


        <?php if (has_post_thumbnail()) : ?>

        <?php the_post_thumbnail('thumbnail'); ?>

        <?php else : ?>
        <img src="<?php echo $pic_url; ?>" alt="ニュース写真" class="news_card_item_img">
        <?php endif; ?>

    </a>
    <!-- </div> -->
    <div class="news_article_info_container">
        <!-- ニュース記事テキストの入れ物 -->
        <div class="news_article_info_box flex column">
            <!-- 日付とカテゴリ名 -->
            <div class="article_meta flex">
                <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                <div class="post-categories">
                    <?php the_category() ?>
                </div>
            </div>
            <!-- 記事タイトル -->
            <h2 class="news_card_item_name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <!-- 記事見出しの入れ物 -->
            <div class="news_card_txt_container">
                <div class="news_card_txt">
                    <?php the_excerpt(); ?>

                </div>
            </div>
        </div>
        <!-- スポットもっと見るボタン -->
        <div class="news_card_item_btn"><a href="<?php the_permalink(); ?>">[続きを読む]</a></div>
    </div>
</div>