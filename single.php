<?php get_header(); ?>

<main>
    <div class="news_detail_wrap">
        <!-- キービジュアル -->
        <div class="key_bg_under">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/key_visual_img4.png" alt="マイページキービジュアル" class="key_bg_under_img">
        </div>

        <!-- パンくずリスト -->
        <!-- <div class="bradcrumbs"> -->
        <!-- ここに＞パンくずリストが＞入ります -->
        <?php /**echo do_shortcode('[flexy_breadcrumb]');*/ ?>
        <!-- </div> -->
        <div class="news_detail">
            <div class="news_detail_container flex">
                <div class="article_wrap">
                    <article class="news_detail_article">
                        <h2 class="article_title"><?php the_title(); ?></h2>

                        <div class="article_meta flex">
                            <!-- 項目なし -->
                            <!-- 日付 -->
                            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                            <!-- カテゴリ -->
                            <div class="post-categories">
                                <a href="#"><?php the_category(); ?></a>
                            </div>
                        </div>

                        <div class="article_body">
                            <div class="news_detail_content">

                                <!-- 内容 -->
                                <?php the_content(); ?>
                            </div>
                        </div>

                    </article>
                    <!-- 前後記事のリンク -->
                    <div class="post_links flex pc_only">
                        <div class="post_link post_link_prev"><span><?php previous_post_link(); ?></span></div>
                        <div class="post_link post_link_next"><span><?php next_post_link(); ?></span></div>
                    </div>
                    <div class="post_links flex not_pc">
                        <div class="post_link post_link_prev"><span><?php previous_post_link('<<%link', '前の記事'); ?></span></div>
                        <div class="post_link post_link_next"><span><?php next_post_link('%link>>', '次の記事'); ?></span></div>
                    </div>
                </div>
                <!-- サイドバー -->
                <aside class="news_detail_archive_wrap">
                    <div>
                        <?php get_sidebar('categories'); ?>


                    </div>
                </aside>
            </div>
        </div>
        <img class="news_bottom_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/news_img.png" alt="ニュース下部装飾">
    </div>
</main>

<?php get_footer(); ?>