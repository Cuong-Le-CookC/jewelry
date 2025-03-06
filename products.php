<?php
include 'db_connect.php';

$category_id = isset($_GET['category_id']) ? intval($_GET['category_id']) : 0;

$sql = "SELECT * FROM products";
if ($category_id > 0) {
    $sql .= " WHERE category_id = $category_id";
}
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<section id="popular-jewelry" class="bookshelf py-5 my-5">';
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="col-md-12">';
    echo '<div class="section-header align-center">';
    echo '<div class="title"><span>Popular Items</span></div>';
    echo '<h2 class="section-title">Popular Jewelry</h2>';
    echo '</div>';
    echo '<ul class="tabs">';
    echo '<li data-tab-target="#all-genre" class="active tab">All Jewelry</li>';
    echo '<li data-tab-target="#rings" class="tab" data-category-id="1">Rings</li>';
    echo '<li data-tab-target="#necklaces" class="tab" data-category-id="2">Necklaces</li>';
    echo '<li data-tab-target="#bracelets" class="tab" data-category-id="3">Bracelets</li>';
    echo '<li data-tab-target="#earrings" class="tab" data-category-id="4">Earrings</li>';
    echo '</ul>';
    echo '<div class="tab-content">';
    echo '<div id="all-genre" data-tab-content class="active">';
    echo '<div class="row">';

    while ($row = $result->fetch_assoc()) {
        echo '<div class="col-md-3">';
        echo '<div class="product-item">';
        echo '<figure class="product-style">';
        echo '<img src="' . $row["image_url"] . '" alt="Jewelry" class="product-item">';
        echo '<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>';
        echo '</figure>';
        echo '<figcaption>';
        echo '<h3>' . $row["name"] . '</h3>';
        echo '<span>' . $row["description"] . '</span>';
        echo '<div class="item-price">' . number_format($row["price"], 0, ',', '.') . ' VND</div>';
        echo '</figcaption>';
        echo '</div>';
        echo '</div>';
    }

    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</section>';
} else {
    echo "Không có sản phẩm nào!";
}

$conn->close();
?>