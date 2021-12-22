<?php
include __DIR__ . '/classes/classes.php';
include __DIR__ . '/objects/objects.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./styles/style.css">
	<title>Document</title>
</head>

<body>

	<header>
		<h1>Your Favorite Movies</h1>
	</header>
	<?php foreach ($movies as $movie) : ?>
		<div class="movie">
			<h3><?php echo $movie->title ?></h3>
			<div class="details">
				<span class="bold"><?php echo $movie->year ?></span>
				<span class="bold"><?php echo $movie->directedBy ?></span>
				<span class="bold"><?php echo $movie->category ?></span>
			</div>
			<div class="cast">
				<span>Cast:</span>
				<?php foreach ($movie->cast as $actor) : ?>
					<span><?php echo $actor ?></span>
				<?php endforeach; ?>
			</div>
			<div class="available">
				Available in database: <?php echo $movie->stringAvailable() ?>
			</div>
		</div>
	<?php endforeach; ?>


</body>

</html>