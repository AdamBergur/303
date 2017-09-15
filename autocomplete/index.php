<?php 

include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/adambergur/autocomplete/worker.php';
?>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/adambergur/jokes/workers/htmlSpecialChars.php';

 ?>

<!DOCTYPE html>
<html lang-'en'>
	<head>
		<meta charset='utf-8'>
		<title>Autocomplete</title>
	</head>
	<body>
		<h1>Autocomplete</h1>
		<p><a href='worker.php?add'>Add new</a></p>
		<ul>
			<?php 
			foreach ($autocompleted as $autocomplete): ?>
			<li>
				<form action='' method='post'>
				<div>
					<?php echo html($autocomplete['text']); ?>
					<input type='hidden' name='id' value='<?php echo $autocomplete['id']; ?>'>
					<input type='submit' name='action' value='Edit'>
					<input type='submit' name='action' value='Delete'>
				</div>
				</form>
			</li>
			<?php endforeach; ?>
		</ul>
		<p><a href='..'>Return to JMS home</a></p>
	</body>
</html>