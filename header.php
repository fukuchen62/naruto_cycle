<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <header>
        <nav>ヘッダーとナビゲーション
            <ul>
                <li>about</li>
                <li>course</li>
                <li>search</li>
                <li>Q&A</li>
                <li>my page</li>
                <li>contact</li>
            </ul>
        </nav>
        <?php wp_head(); ?>
    </header>