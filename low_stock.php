<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Low Stock</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<style>
    a{
    font: bold;
    color: black;
    text-decoration-line: none;
    }</style>
<body>
<div class="container mt-5">
<h3 class="text-danger">Low Stock Alert</h3>
<table class="table table-bordered">
<tr><th>Product</th><th>Quantity</th></tr>
<?php
$q=mysqli_query($conn,"SELECT product_name,quantity FROM products WHERE quantity<=reorder_level");
while($r=mysqli_fetch_assoc($q)){
echo "<tr class='table-danger'><td>{$r['product_name']}</td><td>{$r['quantity']}</td></tr>";
}
?>
</table>
<a href="dashboard.php">⬅ Back</a>
</div></body></html>
