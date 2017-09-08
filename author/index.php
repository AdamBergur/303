<?php 

include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/adambergur/jokes/author/worker.php';
?>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/adambergur/jokes/workers/htmlSpecialChars.php';

 ?>

<!DOCTYPE html>
<html lang-'en'>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="filter.js">
 
		</script>
		<meta charset='utf-8'>
		<title>Author</title>
		<style>
			h1 {
				text-align:center;
				padding-left:200px;
				text-decoration:underline;
			}
			a {
				text-align:center;
			}
			p {
				text-align:center;
			}
			body {
				background-color:#C0C0C0;
			}
			div {
				text-align:center;
			}
		</style>
	</head>
	<body>
	<div class="container">
    <div class="form-group pull-right">
        <input type="text" class="search form-control" placeholder="What joke are you looking for?">
    </div>
		<h1>Author</h1>
		<p><a href='worker.php?add'>Add new author</a></p>
		<ul id="filter">
			<?php 
			foreach ($authors as $author): ?>
			<li>
				<form action='' method='post'>
				<div>

					<?php echo html($author['name']); ?>
					<input type='hidden' name='id' value='<?php echo $author['id']; ?>'>
					<input type='submit' name='action' value='Edit'>
					<input type='submit' name='action' value='Delete'>
				</div>
				</form>
			</li>
			<?php endforeach; ?>
		</ul>
		<p><a href='..'>Return to JMS home</a></p>
	</div>
	</body>
</html>