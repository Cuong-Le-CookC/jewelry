<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update']) && isset($_POST['quantity'])) {
    $update_id = intval($_POST['update']);
    $quantity = intval($_POST['quantity']);

    foreach ($_SESSION['cart'] as &$product) {
        if ($product['id'] == $update_id) {
            $product['quantity'] = $quantity;
            break;
        }
    }
}
?>