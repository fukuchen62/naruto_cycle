<span>検索</span>



<!-- 検索フォーム1 -->
<form method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <input type="hidden" name="s">
    <input type="text" name="s" id="">
    <ul>
        <?php
        $terms = get_terms('shop_type');

        foreach ($terms as $term) :
        ?>
        <li>


            <input type="checkbox" name="type[]" value="<?php echo $term->slug; ?>"><label><?php echo $term->name; ?>
            </label>
        </li>
        <?php endforeach; ?>
    </ul>

    <input type="submit" value="検索する">
</form>