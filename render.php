<a href="<?php $_SERVER['PHP_SELF']; ?>?sort=price&order=0">Від дешевших до дорожчих</a>
    <br>
<a href="<?php $_SERVER['PHP_SELF']; ?>?sort=price&order=1">Від дорожчих до дешевших</a>


<?php
if (isset($_GET['sort'])) {
            $sort = $_GET['sort'];
        } else 
        { 
            $sort = "name";
        }
if (isset($_GET['order'])) {
            $order = $_GET['order'];
        } else {
            $order = 0;
        }
// Сортування

function desc($a, $b) {
    return (($b['price'] - round($b['price'] * ($b['discount'] / 100))) - ($a['price'] - round($a['price'] * ($a['discount'] / 100))));
}
function asc($a, $b) {
    return (($a['price'] - round($a['price'] * ($a['discount'] / 100))) - ($b['price'] - round($b['price'] * ($b['discount'] / 100))));
}
if($order == 1) {
    usort($products, "desc");
} else {
    usort($products, "asc");
}
   
foreach($products as $product)  :
?>
    <div class="product">
        <p class="sku">Код: <?php echo $product['sku']?></p>
        <h4><?php echo $product['name']?><h4>
        <p> Ціна: <span class="price"><?php echo $product['price'] - round($product['price'] * ($product['discount'] / 100))?></span> грн</p>
        <p><?php if(!$product['qty'] > 0) { echo 'Нема в наявності'; } ?></p>
    </div>
<?php endforeach; ?>

