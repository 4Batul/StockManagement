<?php include 'db.php';
if(isset($_POST['sell'])){
$p=$_POST['product_id']; $q=$_POST['quantity'];
mysqli_query($conn,"INSERT INTO stock_out(product_id,quantity,sale_date) VALUES('$p','$q',CURDATE())");
mysqli_query($conn,"UPDATE products SET quantity=quantity-$q WHERE product_id='$p'");
}
?>
<!DOCTYPE html>
<html>
<head><title>Stock Out</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<style>
    a{
    font: bold;
    color: black;
    text-decoration-line: none;
    }</style>
<body>
<div class="container mt-5 col-md-4">
<h3>Stock Out</h3>
<form method="POST">
<select class="form-control mb-2" name="product_id" required>
    <option value="">Select Product</option>
    <?php
    $res = mysqli_query($conn,"SELECT product_id, product_name FROM products");
    while($row = mysqli_fetch_assoc($res)){
        echo "<option value='{$row['product_id']}'>{$row['product_name']}</option>";
    }
    ?>
</select>
<input class="form-control mb-2" name="quantity" placeholder="Quantity" required>
<button class="btn btn-danger w-100" name="sell">Sell Stock</button>
</form>
<a href="dashboard.php">⬅ Back</a>
</div></body></html>
