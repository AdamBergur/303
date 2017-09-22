<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/hopur6/shop/work.php';
?>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/hopur6/shop/workers/htmlSpecialChars.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Shop</title>
        <link rel="stylesheet" href="style.css">
        <script src="java.js"></script>
    </head>
    <body>
    <div class="flex-container">
        <header>
            <h1>Products!</h1>
        </header>
    </div>
            <ul>
                <?php
                foreach ($product as $products): ?>
                    <li>
                        <form action='' method='post'>
                            <div id="stuff" onmouseover="OnMouseIn (this)" onmouseout="OnMouseOut (this)">
                                <?php echo html($products['name']); ?>:
                                <input type='hidden' name='id' value='<?php echo $products['id']; ?>'>
                                <?php echo $products['price']; ?>$
                                quantity:<?php echo $products['quantity']; ?>
                                <input type="button" name='action' value='Add to cart'>
                            </div>
                        </form>
                    </li>
                <?php endforeach; ?>
            </ul>
    <center><p><a href='cart.php?add'><img src="cart.png" width="80" height="80" ></a></p></center>
    </body>
</html>
