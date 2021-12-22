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
	<title>Document</title>
</head>

<body>


	<?php foreach ($movies as $movie) : ?>
		<h3><?php echo $movie->title ?></h3>
		<div class="details">
			<span><?php echo $movie->year ?></span>
			<span><?php echo $movie->directedBy ?></span>
			<span><?php echo $movie->category ?></span>
		</div>
		<div class="cast">
			<?php foreach ($movie->cast as $actor) : ?>
				<?php echo $actor ?>
			<?php endforeach; ?>
		</div>
		<div class="available">
			<?php echo $movie->stringAvailable() ?>
		</div>
	<?php endforeach; ?>


</body>

</html>