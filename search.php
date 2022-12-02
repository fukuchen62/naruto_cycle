<?php get_header(); ?>
<!-- パンくず -->
<?php echo do_shortcode('[flexy_breadcrumb]'); ?>

<h2>検索ページ</h2>

<form method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <input type="hidden" name="s">
    <input type="text" name="s" id="">
    <ul>
        <?php
        $terms = get_terms('shop_type');

        foreach ($terms as $term) :
        ?>
        <li>


            <input type="checkbox" name="shop[]" value="<?php echo $term->slug; ?>"><label><?php echo $term->name; ?>
            </label>
        </li>
        <?php endforeach; ?>
    </ul>

    <input type="submit" value="検索する">
</form>

<!-- 結果1 -->
<?php
$name = get_query_var('s');
// searchform.phpから送られてきたパラメーターを取得
$selected_terms = get_query_var('shop'); //searchform.phpの<input>のname属性の値と合わせる
print_r($selected_terms);
echo 'name:' . $name;
// searchform.phpで絞り込み条件がある場合
?>
<p>search</p>
<?php get_footer(); ?>