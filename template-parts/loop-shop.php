<div class="spot_card relative">
    <!-- お気に入りボタン -->

    <div class="spot_like_icon ">
        <!--お気に入りボタン-->
        <?php echo get_favorites_button(get_the_ID()); ?>
        <!-- <i class="far fa-heart LikesIcon-fa-heart"></i> -->
    </div>
    <!-- カード１枚にかかるスポット一覧へのリンク -->
    <a href="<?php the_permalink(); ?>">
        <!-- カード全体の入れ物 -->
        <ul class="spot_list">
            <!-- カード１枚の入れ物-->
            <li class="spot_item relative">
                <!-- カテゴリーのラベル -->
                <?php $pic = get_field('label');
                $pic_url = $pic['url'];
                ?>
                <img src="<?php echo $pic_url; ?>" alt="カテゴリーのラベル" class="spot_item_cate">
                <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spot_cate_grume_img.png" alt="カテゴリーのラベル" class="spot_item_cate"> -->

                <!-- スポット写真 -->
                <?php
                $pic = get_field('eyecatch');
                $pic_url = $pic['sizes']['thumbnail'];
                $width = $pic['sizes']['thumbnail-width'];
                $height = $pic['sizes']['thumbnail-height'];


                ?>
                <img class="spot_item_img" src="<?php echo $pic_url; ?>" alt="スポットの写真">
                <!-- スポット名 -->
                <h3 class="spot_item_name"><?php the_field('shop_name'); ?><?php the_field('spot_name'); ?></h3>
                <!-- スポット情報の表 -->
                <dl class="spot_item_info flex">
                    <?php $page_id = get_the_id();
                    ?>
                    <?php $terms_shop = get_the_terms($post->ID, 'shop_type');
                    $terms_spot = get_the_terms($post->ID, 'spot_type');

                    ?>
                    <dt></dt>
                    <dd>
                        <?php $terms_shop = get_the_terms($post->ID, 'shop_type'); ?>
                        <?php echo get_the_term_list($post->ID, 'shop_type', '#', '<br>#', '') ?><?php echo get_the_term_list($post->ID, 'spot_type', '#', '<br>#', '') ?>
                        <?php $terms_spot = get_the_terms($post->ID, 'spot_type'); ?>
                        <?php echo get_the_term_list($post->ID, 'spot_type', '#', '<br>#', '') ?><?php echo get_the_term_list($post->ID, 'spot_type', '#', '<br>#', '') ?>
                    </dd>


                </dl>
            </li>
        </ul>
    </a>
</div>