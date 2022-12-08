<li class="card_container">
    <!-- カード -->
    <div class="spot_card relative">

        <!-- カード１枚にかかるスポット一覧へのリンク -->
        <a href="<?php the_permalink(); ?>">
            <!-- カード全体の入れ物 -->
            <ul class="spot_list">
                <!-- カード１枚の入れ物-->
                <li class="spot_item relative">
                    <!-- お気に入りボタン -->
                    <div class="spot_like_icon">
                        <?php echo get_favorites_button(get_the_ID()); ?>
                        <!-- <i class="far fa-heart LikesIcon-fa-heart"><?php get_favorites_button(get_the_ID()) ?></i> -->
                    </div>
                    <!-- カテゴリーのラベル -->
                    <?php $pic = get_field('label');
                    $pic_url = $pic['url'];
                    ?>
                    <img src="<?php echo $pic_url; ?>" alt="カテゴリーのラベル" class="spot_item_cate">

                    <!-- スポット写真 -->
                    <?php
                    $pic = get_field('eyecatch');
                    $pic_url = $pic['sizes']['thumbnail'];
                    $width = $pic['sizes']['thumbnail-width'];
                    $height = $pic['sizes']['thumbnail-height'];


                    ?>
                    <img class="spot_item_img" src="<?php echo $pic_url; ?>" alt="スポットの写真">
                    <!-- スポット名 -->
                    <h3 class="spot_item_name"><?php the_title(); ?></h3>
                    <!-- スポット情報の表 -->
                    <dl class="spot_item_info flex">
                        <p><?php the_field('catchphrase'); ?></p>
                    </dl>
                </li>
            </ul>
        </a>
    </div>
</li>