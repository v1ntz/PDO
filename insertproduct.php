<?php

require_once "koneksi.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $productCode = $_POST["productCode"];
    $productName = $_POST["productName"];
    $productLine = $_POST["productLine"];
    $productScale = $_POST["productScale"];
    $productVendor = $_POST["productVendor"];
    $productDescription = $_POST["productDescription"];
    $quantityInStock = $_POST["quantityInStock"];
    $buyPrice = $_POST["buyPrice"];
    $MSRP = $_POST["MSRP"];

    $sql = "INSERT INTO products (productCode, productName, productLine, productScale, productVendor, productDescription, quantityInStock, buyPrice, MSRP) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$productCode, $productName, $productLine, $productScale, $productVendor, $productDescription, $quantityInStock, $buyPrice, $MSRP]);

    header("Location: index.php");
    exit;
}
?>
