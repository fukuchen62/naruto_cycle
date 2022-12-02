<div class="news_detail_archive">
    <h2 class="news_detail_archive_title">月別アーカイブ</h2>
    <ul class="news_detail_archive_list">
        <?php
        $args = array(
            'type' => 'monthly', //月別を指定
        );
        wp_get_archives($args);
        ?>
        <!-- <li><a href="#">2022年11月</a></li>
        <li><a href="#">2022年12月</a></li> -->

    </ul>
</div>
<!--
<aside>
    <h2>月別アーカイブ</h2>
    <ul>
        <?php
        $args = array(
            'type' => 'monthly', //月別を指定
        );
        wp_get_archives($args);
        ?>
    </ul>
</aside> -->