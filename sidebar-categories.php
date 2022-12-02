<div class="news_detail_archive no1">
    <h2 class="news_detail_archive_title">カテゴリ一覧</h2>
    <ul class="news_detail_archive_list">
        <?php
        $args = array(
            'title_li' => '', //見出し削除

        );
        wp_list_categories($args);
        ?>
        <!-- <li><a href="#">お知らせ</a></li>
        <li><a href="#">イベント</a></li>
        <li><a href="#">コラム</a></li> -->
    </ul>
</div>


<!--
<aside>
    <h2>カテゴリ　一覧</h2>
    <ul>
        <?php
        $args = array(
            'title_li' => '', //見出し削除

        );
        wp_list_categories($args);
        ?>
    </ul>
</aside> -->