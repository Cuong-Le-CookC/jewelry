<?php include('partials/header.php') ?>

<?php
include 'db_connect.php';
session_start();

$product_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($product_id > 0) {
    $sql = "SELECT * FROM products WHERE id = $product_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo '<div class="container">';
        echo '<div class="row">';
        echo '<div class="col-md-6">';
        echo '<img src="' . $row["image_url"] . '" alt="Jewelry" class="img-fluid">';
        echo '</div>';
        echo '<div class="col-md-6">';
        echo '<h3>' . $row["name"] . '</h3>';
        echo '<h4>' . "SKU: " . $row["sku"] . '</h4>';
        echo '<p>' . $row["description"] . '</p>';
        echo '<div class="item-price">' . number_format($row["price"], 0, ',', '.') . ' VND</div>';
        echo '<form id="add-to-cart-form" method="post" action="cart.php">';
        echo '<div class="quantity-selector">';
        echo '<button type="button" id="decrease-quantity" style="background-color: transparent;">-</button>';
        echo '<input type="number" id="quantity" name="quantity" value="1" min="1">';
        echo '<button type="button" id="increase-quantity" style="background-color: transparent;">+</button>';
        echo '</div>';
        echo '<input type="hidden" name="product_id" value="' . $row["id"] . '">';
        echo '<input type="hidden" name="product_name" value="' . $row["name"] . '">';
        echo '<input type="hidden" name="price" value="' . $row["price"] . '">';
        echo '<button type="submit" class="add-to-cart">Add to Cart</button>';
        echo '</form>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    } else {
        echo '<div class="container">';
        echo '<div class="row">';
        echo '<div class="col-md-12">';
        echo '<p>Product not found!</p>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="col-md-12">';
    echo '<p>Invalid product ID!</p>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}

$conn->close();
?>

<script>
    document.getElementById('decrease-quantity').addEventListener('click', function () {
        var quantityInput = document.getElementById('quantity');
        var currentValue = parseInt(quantityInput.value);
        if (currentValue > 1) {
            quantityInput.value = currentValue - 1;
        }
    });

    document.getElementById('increase-quantity').addEventListener('click', function () {
        var quantityInput = document.getElementById('quantity');
        quantityInput.value = parseInt(quantityInput.value) + 1;
    });
</script>

<?php include('partials/footer.php') ?>