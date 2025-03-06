<?php
include 'db_connect.php';

$category_id = isset($_GET['category_id']) ? intval($_GET['category_id']) : 0;

$sql = "SELECT * FROM products";
if ($category_id > 0) {
    $sql .= " WHERE category_id = $category_id";
    if ($category_id == 1) {
        $sql .= " AND id = 1";
    }
}
$sql .= " ORDER BY RAND()"; // Add this line to randomize the order
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<section id="popular" class="bookshelf py-5 my-5">';
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="col-md-12">';
    echo '<div class="section-header align-center">';
    echo '<h2 class="section-title">Popular Jewelry</h2>';
    echo '</div>';
    echo '<ul class="tabs">';
    echo '<li data-tab-target="#all-genre" class="active tab">All Jewelry</li>';
    echo '<li data-tab-target="#nhan" class="tab" data-category-id="1">Nhẫn</li>';
    echo '<li data-tab-target="#daychuyen" class="tab" data-category-id="2">Dây chuyền</li>';
    echo '<li data-tab-target="#bongtai" class="tab" data-category-id="3">Bông tai</li>';
    echo '<li data-tab-target="#lactay" class="tab" data-category-id="4">Lắc tay</li>';
    echo '<li data-tab-target="#vongco" class="tab" data-category-id="4">Vòng cổ đá</li>';
    echo '<li data-tab-target="#trangsuccuoi" class="tab" data-category-id="4">Trang sức cưới</li>';
    echo '<li data-tab-target="#matdaychuyen" class="tab" data-category-id="4">Mặt dây chuyền</li>';
    echo '<li data-tab-target="#nhancap" class="tab" data-category-id="4">Couple</li>';
    echo '</ul>';
    echo '<div class="tab-content">';
    echo '<div id="all-genre" data-tab-content class="active">';
    echo '<div class="row">';

    while ($row = $result->fetch_assoc()) {
        echo '<div class="col-md-3">';
        echo '<div class="product-item">';
        echo '<figure class="product-style">';
        echo '<a href="detail.php?id=' . $row["id"] . '">';
        echo '<img src="' . $row["image_url"] . '" alt="Jewelry" class="product-item">';
        echo '</a>';
        echo '<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>';
        echo '</figure>';
        echo '<figcaption>';
        echo '<h3><a href="detail.php?id=' . $row["id"] . '">' . $row["name"] . '</a></h3>';
        echo '<span>' . $row["description"] . '</span>';
        echo '<div class="item-price">' . number_format($row["price"], 0, ',', '.') . ' VND</div>';
        echo '</figcaption>';
        echo '</div>';
        echo '</div>';
    }

    echo '</div>'; // Close row
    echo '</div>'; // Close all-genre tab-content

    // Add other category tab contents
    echo '<div id="nhan" data-tab-content>';
    echo '<div class="row">';
    $result->data_seek(0); // Reset result pointer
    while ($row = $result->fetch_assoc()) {
        if ($row["category_id"] == 1) {
            echo '<div class="col-md-3">';
            echo '<div class="product-item">';
            echo '<figure class="product-style">';
            echo '<a href="detail.php?id=' . $row["id"] . '">';
            echo '<img src="' . $row["image_url"] . '" alt="Jewelry" class="product-item">';
            echo '</a>';
            echo '<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>';
            echo '</figure>';
            echo '<figcaption>';
            echo '<h3><a href="detail.php?id=' . $row["id"] . '">' . $row["name"] . '</a></h3>';
            echo '<span>' . $row["description"] . '</span>';
            echo '<div class="item-price">' . number_format($row["price"], 0, ',', '.') . ' VND</div>';
            echo '</figcaption>';
            echo '</div>';
            echo '</div>';
        }
    }
    echo '</div>'; // Close row
    echo '</div>'; // Close rings tab-content

    echo '<div id="daychuyen" data-tab-content>';
    echo '<div class="row">';
    $result->data_seek(0); // Reset result pointer
    while ($row = $result->fetch_assoc()) {
        if ($row["category_id"] == 2) {
            echo '<div class="col-md-3">';
            echo '<div class="product-item">';
            echo '<figure class="product-style">';
            echo '<a href="detail.php?id=' . $row["id"] . '">';
            echo '<img src="' . $row["image_url"] . '" alt="Jewelry" class="product-item">';
            echo '</a>';
            echo '<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>';
            echo '</figure>';
            echo '<figcaption>';
            echo '<h3><a href="detail.php?id=' . $row["id"] . '">' . $row["name"] . '</a></h3>';
            echo '<span>' . $row["description"] . '</span>';
            echo '<div class="item-price">' . number_format($row["price"], 0, ',', '.') . ' VND</div>';
            echo '</figcaption>';
            echo '</div>';
            echo '</div>';
        }
    }
    echo '</div>'; // Close row
    echo '</div>'; // Close necklaces tab-content

    echo '<div id="bongtai" data-tab-content>';
    echo '<div class="row">';
    $result->data_seek(0); // Reset result pointer
    while ($row = $result->fetch_assoc()) {
        if ($row["category_id"] == 3) {
            echo '<div class="col-md-3">';
            echo '<div class="product-item">';
            echo '<figure class="product-style">';
            echo '<a href="detail.php?id=' . $row["id"] . '">';
            echo '<img src="' . $row["image_url"] . '" alt="Jewelry" class="product-item">';
            echo '</a>';
            echo '<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>';
            echo '</figure>';
            echo '<figcaption>';
            echo '<h3><a href="detail.php?id=' . $row["id"] . '">' . $row["name"] . '</a></h3>';
            echo '<span>' . $row["description"] . '</span>';
            echo '<div class="item-price">' . number_format($row["price"], 0, ',', '.') . ' VND</div>';
            echo '</figcaption>';
            echo '</div>';
            echo '</div>';
        }
    }
    echo '</div>'; // Close row
    echo '</div>'; // Close bracelets tab-content

    echo '<div id="lactay" data-tab-content>';
    echo '<div class="row">';
    $result->data_seek(0); // Reset result pointer
    while ($row = $result->fetch_assoc()) {
        if ($row["category_id"] == 4) {
            echo '<div class="col-md-3">';
            echo '<div class="product-item">';
            echo '<figure class="product-style">';
            echo '<a href="detail.php?id=' . $row["id"] . '">';
            echo '<img src="' . $row["image_url"] . '" alt="Jewelry" class="product-item">';
            echo '</a>';
            echo '<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>';
            echo '</figure>';
            echo '<figcaption>';
            echo '<h3><a href="detail.php?id=' . $row["id"] . '">' . $row["name"] . '</a></h3>';
            echo '<span>' . $row["description"] . '</span>';
            echo '<div class="item-price">' . number_format($row["price"], 0, ',', '.') . ' VND</div>';
            echo '</figcaption>';
            echo '</div>';
            echo '</div>';
        }
    }
    echo '</div>'; // Close row
    echo '</div>'; // Close earrings tab-content
    echo '<div id="vongco" data-tab-content>';
    echo '<div class="row">';
    $result->data_seek(0); // Reset result pointer
    while ($row = $result->fetch_assoc()) {
        if ($row["category_id"] == 5) {
            echo '<div class="col-md-3">';
            echo '<div class="product-item">';
            echo '<figure class="product-style">';
            echo '<a href="detail.php?id=' . $row["id"] . '">';
            echo '<img src="' . $row["image_url"] . '" alt="Jewelry" class="product-item">';
            echo '</a>';
            echo '<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>';
            echo '</figure>';
            echo '<figcaption>';
            echo '<h3><a href="detail.php?id=' . $row["id"] . '">' . $row["name"] . '</a></h3>';
            echo '<span>' . $row["description"] . '</span>';
            echo '<div class="item-price">' . number_format($row["price"], 0, ',', '.') . ' VND</div>';
            echo '</figcaption>';
            echo '</div>';
            echo '</div>';
        }
    }
    echo '</div>'; // Close row
    echo '</div>'; // Close earrings tab-content

    echo '<div id="trangsuccuoi" data-tab-content>';
    echo '<div class="row">';
    $result->data_seek(0); // Reset result pointer
    while ($row = $result->fetch_assoc()) {
        if ($row["category_id"] == 7) {
            echo '<div class="col-md-3">';
            echo '<div class="product-item">';
            echo '<figure class="product-style">';
            echo '<a href="detail.php?id=' . $row["id"] . '">';
            echo '<img src="' . $row["image_url"] . '" alt="Jewelry" class="product-item">';
            echo '</a>';
            echo '<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>';
            echo '</figure>';
            echo '<figcaption>';
            echo '<h3><a href="detail.php?id=' . $row["id"] . '">' . $row["name"] . '</a></h3>';
            echo '<span>' . $row["description"] . '</span>';
            echo '<div class="item-price">' . number_format($row["price"], 0, ',', '.') . ' VND</div>';
            echo '</figcaption>';
            echo '</div>';
            echo '</div>';
        }
    }
    echo '</div>'; // Close row
    echo '</div>'; // Close earrings tab-content

    echo '<div id="matdaychuyen" data-tab-content>';
    echo '<div class="row">';
    $result->data_seek(0); // Reset result pointer
    while ($row = $result->fetch_assoc()) {
        if ($row["category_id"] == 9) {
            echo '<div class="col-md-3">';
            echo '<div class="product-item">';
            echo '<figure class="product-style">';
            echo '<a href="detail.php?id=' . $row["id"] . '">';
            echo '<img src="' . $row["image_url"] . '" alt="Jewelry" class="product-item">';
            echo '</a>';
            echo '<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>';
            echo '</figure>';
            echo '<figcaption>';
            echo '<h3><a href="detail.php?id=' . $row["id"] . '">' . $row["name"] . '</a></h3>';
            echo '<span>' . $row["description"] . '</span>';
            echo '<div class="item-price">' . number_format($row["price"], 0, ',', '.') . ' VND</div>';
            echo '</figcaption>';
            echo '</div>';
            echo '</div>';
        }
    }
    echo '</div>'; // Close row
    echo '</div>'; // Close earrings tab-content

    echo '<div id="nhancap" data-tab-content>';
    echo '<div class="row">';
    $result->data_seek(0); // Reset result pointer
    while ($row = $result->fetch_assoc()) {
        if ($row["category_id"] == 11) {
            echo '<div class="col-md-3">';
            echo '<div class="product-item">';
            echo '<figure class="product-style">';
            echo '<a href="detail.php?id=' . $row["id"] . '">';
            echo '<img src="' . $row["image_url"] . '" alt="Jewelry" class="product-item">';
            echo '</a>';
            echo '<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>';
            echo '</figure>';
            echo '<figcaption>';
            echo '<h3><a href="detail.php?id=' . $row["id"] . '">' . $row["name"] . '</a></h3>';
            echo '<span>' . $row["description"] . '</span>';
            echo '<div class="item-price">' . number_format($row["price"], 0, ',', '.') . ' VND</div>';
            echo '</figcaption>';
            echo '</div>';
            echo '</div>';
        }
    }
    echo '</div>'; // Close row
    echo '</div>'; // Close earrings tab-content

    echo '</div>'; // Close tab-content
    echo '</div>'; // Close col-md-12
    echo '</div>'; // Close row
    echo '</div>'; // Close container
    echo '</section>';
} else {
    echo "Không có sản phẩm nào!";
}

$conn->close();
?>