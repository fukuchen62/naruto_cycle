<span>検索</span>


<form method="get" id="" action="<?php bloginfo('url'); ?>">
    <!-- <label for="s" class="">検索</label>
    <input type="text" name="s" id="s" placeholder="検索" /> -->

    <div>カテゴリ</div>.3
    <?php


    // shopのカテゴリ
    $categories1 = get_terms('shop_type', array(
        'hide_empty' => false,
        'orderby' => 'slug',
    ));
    foreach ($categories1 as $category) :
    ?>
    <label><input type="checkbox" name="catnum[]" value="<?php echo $category->term_id; ?>"><?php echo $category->name; ?></label><br>
    <?php endforeach; ?>


    <?php
    // spotのカテゴリ
    $categories2 = get_terms('sopt_type
    cycle', array(
        'hide_empty' => false,
        'orderby' => 'slug',
    ));
    foreach ($categories2 as $cat) :
    ?>
    <label><input type="checkbox" name="catnum[]" value="<?php echo $cat->term_id; ?>"><?php echo $cat->name; ?></label><br>
    <?php endforeach; ?>


    <?php
    // コースのカテゴリ
    $categories3 = get_terms('course_type', array(
        'hide_empty' => false,
        'orderby' => 'slug',
    ));
    foreach ($categories3 as $category) :
    ?>
    <label><input type="checkbox" name="catnum[]" value="<?php echo $category->term_id; ?>"><?php echo $category->name; ?></label><br>
    <?php endforeach; ?>

    <?php
    // サイクルのカテゴリ
    $categories4 = get_terms('cycle', array(
        'hide_empty' => false,
        'orderby' => 'slug',
    ));
    foreach ($categories4 as $category) :
    ?>
    <label><input type="checkbox" name="catnum[]" value="<?php echo $category->term_id; ?>"><?php echo $category->name; ?></label><br>
    <?php endforeach; ?>


    <input type="submit" value="検索" />
</form>