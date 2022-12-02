<?php get_header(); ?>
<h2>検索ページ</h2>

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