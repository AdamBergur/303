<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/hopur6/workers/htmlSpecialChars.php';?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo html($pageTitle);?></title>
</head>
<body>

<h1><?php echo html($pageTitle);?></h1>
<form action="?<?php echo html($action);?>" method="post">
    <div>
        <label for="name">Name:
            <input type="text" name="name" id="name" value="<?php echo html($name);?>">
        </label>
    </div>
    <div>
        <label for="price">Price:
            <input type="text" name="price" id="price" value="<?php echo html($price);?>">
        </label>
    </div>
    <div>
        <label for="quantity">Quantity:
            <input type="text" name="quantity" id="quantity" value="<?php echo html($quantity);?>">
        </label>
    </div>
    <div>
        <input type="hidden" name="id" value="<?php echo html($id)?>">
        <input type="submit" value="<?php echo html($button);?>">
    </div>
</form>
</body>
</html>