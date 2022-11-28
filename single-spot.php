<?php get_header(); ?>
<h2>shopページ</h2>

<!-- パンくず -->
<?php echo do_shortcode('[flexy_breadcrumb]'); ?>

<!-- ワードプレスループ始まり -->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<?php the_title(); ?>
<?php the_content(); ?>

<?php
        $pic = get_field('eyecatch');
        $pic_url = $pic['sizes']['medium'];
        $width = $pic['sizes']['medium-width'];
        $height = $pic['sizes']['medium-height'];


        ?>
<img src="<?php echo $pic_url; ?>" width=" <?php echo $width; ?>" height="<?php echo $height; ?>" alt="">

<?php
        $pic = get_field('pic1');
        $pic_url = $pic['sizes']['thumbnail'];
        $width = $pic['sizes']['thumbnail-width'];
        $height = $pic['sizes']['thumbnail-height'];

        ?>
<img src=" <?php echo $pic_url; ?>" width=" <?php echo $width; ?>" height="<?php echo $height; ?>" alt="">

<?php
        $pic = get_field('pic2');
        $pic_url = $pic['sizes']['thumbnail'];
        $width = $pic['sizes']['thumbnail-width'];
        $height = $pic['sizes']['thumbnail-height'];
        ?>
<img src="<?php echo $pic_url; ?>" width=" <?php echo $width; ?>" height="<?php echo $height; ?>" alt="">

<ul>
    <li><b>店名</b><span><?php the_field('shop_name'); ?></span></li>
    <li><b>キャッチ</b><span><?php the_field('キャッチフレーズ'); ?></span></li>
    <li><b>住所</b><span><?php the_field('address'); ?></span></li>
    <li><b>tel</b><span><?php the_field('telephone'); ?></span></li>
    <li><b>営業時間</b><span><?php the_field('open_time'); ?></span></li>
    <li><b>定休日</b><span><?php the_field('closed'); ?></span></li>
    <li><b>駐車場</b><span><?php the_field('parking'); ?></span></li>
    <li><b>ホームページ</b><span><?php the_field('home_url'); ?></span></li>
    <li><b>備考</b><span><?php the_field('memo'); ?></span></li>
    <li><b>備考</b><span><?php the_field('icon'); ?></span></li>
    <p>オススメポイント</p>
    <p><?php the_field('recommend_point'); ?></p>
    <p>オススメメニュー</p>
    <p><?php the_field('recommend_menu'); ?></p>


</ul>

<?php print_r(get_field("icon")); ?>


<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>