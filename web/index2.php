<?php include_once "../data/data.php"?>
<?php include "../obj/databasehandler.php";?>
<?php include "../obj/controller.php";?>
<?php include "../obj/view.php";?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Spalah HomeWork Main</title>
    <link rel="stylesheet" href="assets/css/main.css">

</head>
<body>
<?php
/**
 * @param Home Work
 *
 *
 * @author Alexsander Tkachenko
 */
?>
<div class="container">
    <?php require_once 'header.php'; ?>
    <main class="main">
        <ul class="product-list">
            <li>
                <div class="product-list-item">
                    <div class="product-img">
                        <img src="<?php echo $top_arr[0][2] ?>" alt="">
                    </div>
                    <div class="product-body">
                        <div class="product-name">
                            <?php echo $top_arr[0][0]; ?>
                        </div>
                        <div class="product-subtitle">
                            Lorem ipsum dolor.
                        </div>
                        <div class="product-price">
                            <?php echo $top_arr[0][1]; ?>$
                        </div>
                        <a href="product.php?id=<?php echo --$top_arr[0][3]?>" class="btn product-link">
                            Подробнее
                        </a>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-list-item">
                    <div class="product-img">
                        <img src="<?php echo $top_arr[1][2] ?>" alt="">
                    </div>
                    <div class="product-body">
                        <div class="product-name">
                            <?php echo $top_arr[1][0]; ?>
                        </div>
                        <div class="product-subtitle">
                            Lorem ipsum dolor.
                        </div>
                        <div class="product-price">
                            <?php echo $top_arr[1][1]; ?>$
                        </div>
                        <a href="product.php?id=<?php echo --$top_arr[1][3]?>" class="btn product-link">
                            Подробнее
                        </a>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-list-item">
                    <div class="product-img">
                        <img src="<?php echo $top_arr[2][2] ?>" alt="">
                    </div>
                    <div class="product-body">
                        <div class="product-name">
                            <?php echo $top_arr[2][0]; ?>
                        </div>
                        <div class="product-subtitle">
                            Lorem ipsum dolor.
                        </div>
                        <div class="product-price">
                            <?php echo $top_arr[2][1]; ?>$
                        </div>
                        <a href="product.php?id=<?php echo --$top_arr[2][3]?>" class="btn product-link">
                            Подробнее
                        </a>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-list-item">
                    <div class="product-img">
                        <img src="<?php echo $top_arr[3][2] ?>" alt="">
                    </div>
                    <div class="product-body">
                        <div class="product-name">
                            <?php echo $top_arr[3][0]; ?>
                        </div>
                        <div class="product-subtitle">
                            Lorem ipsum dolor.
                        </div>
                        <div class="product-price">
                            <?php echo $top_arr[3][1]; ?>$
                        </div>
                        <a href="product.php?id=<?php echo --$top_arr[3][3]?>" class="btn product-link">
                            Подробнее
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </main>
</div>
</body>
</html>
