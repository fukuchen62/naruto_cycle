<span>検索</span>

<!-- <form method="POST" action="<?php echo esc_url(home_url() . $_SERVER['REQUEST_URI']); ?>">
    <h2 class="condition-title">カテゴリーで絞り込む</h2>
    <div class="condition">
        //カテゴリーチェックボックス
    </div>

    <h2 class="condition-title">タグで絞り込む</h2>
    <div class="condition">
        //タグのチェックボックス
    </div>
    <input type="submit" value="チェックされた記事を表示する" class="submit-button">
</form> -->





<form role="search" method="get" action="<?php bloginfo('url'); ?>">
    <div>
        <label>フリーワード検索：
            <input type="search" placeholder="<?php echo esc_attr_x('キーワードを入力', 'placeholder'); ?>" value="<?php echo esc_html(get_search_query()); ?>" name="s">
        </label>
    </div>
    <div>カテゴリーorタグorカスタムタクソノミー</div>

    <?php
    $categories = get_categories();
    foreach ($categories as $category) :
    ?>
    <label><input type="checkbox" name="catnum[]" value="<?php echo $category->term_id; ?>"><?php echo $category->name; ?></label><br>
    <?php endforeach; ?>
    <input type="submit" value="検索" />


    <div>チェックボックス:
        <?php
        $cat_terms = get_terms('shop_type', array(
            'hide_empty' => false,
            'orderby' => 'slug',
        ));


        if (!is_wp_error($terms)) :
            foreach ($terms as $term) :

                //チェックリスト値の受け渡し
                $t_check = filter_input(INPUT_GET, 'check01', FILTER_DEFAULT, ["options" => ["default" => []], "flags" => FILTER_REQUIRE_ARRAY]);
                $checked["check01"] = [$term->term_id => ""];
                foreach ((array)$t_check as $val) {
                    $checked["check01"][$val] = "checked";
                }
        ?>

        <label>
            <input type="checkbox" name="check01[]" value="<?php echo $term->term_id; ?>" <?php echo $checked["check01"][$term->term_id]; ?>><?php echo $term->name . '(' . $term->count . ')'; ?>
        </label>
        <?php endforeach;
        endif; ?>
    </div>

    <input type="submit" value="絞り込む" />
    <a href="/?s=">条件クリア</a>
</form>