<!DOCTYPE html>
<html lang="en">
<head>
<title>Creating Price Range Slider using jQuery in PHP with MySQL by CodexWorld</title>
<style>
.container{padding: 20px;}
.filter-panel{width:100%;}
.filter-panel p{margin-right: 30px;float: left;}
#productContainer{float: left;width: 100%;}
.list-item{
    float: left;
    width: 15%;
    height: 80px;
    padding: 10px;
    border: 2px solid #333;
    margin: 10px 10px 10px 0px;
}
.list-item h2{margin: 0;}
</style>
<link rel="stylesheet" href="range.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="range.js"></script>
<script>
function filterProducts() {
    var price_range = $('.price_range').val();
    $.ajax({
        type: 'POST',
        url: 'getProducts.php',
        data:'price_range='+price_range,
        beforeSend: function () {
            $('.container').css("opacity", ".5");
        },
        success: function (html) {
            $('#productContainer').html(html);
            $('.container').css("opacity", "");
        }
    });
}
</script>
</head>
<body>
<h1>Creating Price Range Slider using jQuery in PHP with MySQL</h1>
<div class="container">
    <div class="filter-panel">
        <p><input type="hidden" class="price_range" value="0,500" /></p>
        <input type="button" onclick="filterProducts()" value="FILTER" />
    </div>
    <div id="productContainer">
        <?php
       //Include php  file
       include('getProducts.php');
       
       ?>
    </div>
</div>
 
<script>
$('.price_range').jRange({
    from: 0,
    to: 500,
    step: 50,
    format: '%s USD',
    width: 300,
    showLabels: true,
    isRange : true
});
</script>
</body>
</html>