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
</aside>