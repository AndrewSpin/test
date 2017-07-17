<?php include_once "../data/data.php" ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Spalah HomeWork Product</title>
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
		<div class="product">
			<div class="product-image">
                <img src="<?php getProduct($_GET['id'], 4) ?>" alt="">
			</div>
			<div class="product-body">
				<h1 class="product-name">
                    <?php getProduct($_GET['id'], 1) ?>
                </h1>
				<div class="product-price">
                    <?php getProduct($_GET['id'], 2) ?>
                </div>
				<div class="product-description">
					<p>
                        <?php getProduct($_GET['id'], 5)  ?>
                    </p>
				</div>
			</div>
		</div>

	</main>
</div>
</body>
</html>
