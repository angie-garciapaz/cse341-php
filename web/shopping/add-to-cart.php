<?php

session_start();

if (empty($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

array_push($_SESSION['cart'], $_GET['id']);

?>

<p>
    product was added

    <a href="shopping-cart.php">view your cart</a>
</p>
