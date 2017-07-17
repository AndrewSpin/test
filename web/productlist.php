<?php include_once "../data/data.php" ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Spalah HomeWork Product List</title>
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
	<?php require_once 'header.php';?>
	<main class="main">
		<table class="table-product">
			<tr>
				<th>Images</th>
				<th>Название</th>
				<th>Краткое описание</th>
				<th>Цена</th>
				<th>Ссылка</th>
			</tr>
			<tr>

					<?php
                        $arr_sl = array_slice($prod_arr, $_GET['key']); //переписывает массив $prod_arr в массив $arr_sl начиная с заданного элемента
                        $i = 0;
                            foreach ($arr_sl as $key => $val) {

                                echo '<tr>'.'<th> <img src="'.$arr_sl[$key][4].'"alt="">';
                                echo "<th>".$arr_sl[$key][1].'</th>';
                                echo "<th>".$arr_sl[$key][5].'</th>';
                                echo "<th>".$arr_sl[$key][2].'</th>';
                                echo "<th>".'<a href="product.php?id='.--$arr_sl[$key][0].'">Подробнее...</a>'.'</td>'.'</tr>'; //$arr_sl[$key][0] это product.id декримент по тому что, начинается с нуля;

                                $i++;

                                    if($i == 10) {
                                        break;
                                    }
                            }
                    ?>

			</tr>

		</table><br>
	</main>
</div>
<div align="center"><h1>

    <?php

        $prod_count = count($prod_arr);     //определяет колличество эллементов
        $i = 0;                             //переменная для сортировки элементов массива по 10 штук
        $a = 1;                             //переменная для создания ссылок(страниц)
            while($i < $prod_count){
                echo '<a href="productlist.php?key='.$i.'">'.$a++.'</a> ';
                $i = $i + 10;
            }
    ?>

    </h1>
<br><br>
</div>
</body>
</html>
