<span>検索</span>



<!-- 検索フォーム1 -->
<form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <ul>
        <?php
        $terms = get_terms('shop_type');
        foreach ($terms as $term) :
        ?>
        <li>
            <label>
                <input type="checkbox" name="shop[]" value="<?php echo $term->slug; ?>"><?php echo $term->name; ?>
            </label>
        </li>
        <?php endforeach; ?>
    </ul>
    <input type="hidden" name="s" value="<?php the_search_query(); ?>">
    <input type="submit" value="検索する">
</form>