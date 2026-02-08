<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Products</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<style>
    a{
    font: bold;
    color: black;
    text-decoration-line: none;
    }
</style>
<body>
<div class="container mt-5">
<a href="dashboard.php">⬅ Back</a>
<h3>Suppliers Details + Products</h3>
<table class="table table-bordered table-striped">
<tr>
  <th>Product Name</th>
  <th>Quantity</th>
  <th>Category Name</th>
  <th>Supplier Name</th>
  <th>Supplier ID</th>
  <th>Phone No.</th>
  <th>Email</th>
  <th>Address</th>
</tr>
<?php
$q = mysqli_query($conn, "
SELECT p.product_name, p.quantity, c.category_name, s.supplier_name, s.supplier_id, s.phone, s.email, s.address
FROM products p
JOIN categories c ON p.category_id = c.category_id
JOIN suppliers s ON p.supplier_id = s.supplier_id
ORDER BY p.product_id
");

while($r = mysqli_fetch_assoc($q)){
    echo "<tr>
        <td>{$r['product_name']}</td>
        <td>{$r['quantity']}</td>
        <td>{$r['category_name']}</td>
        <td>{$r['supplier_name']}</td>
        <td>{$r['supplier_id']}</td>
        <td>{$r['phone']}</td>
        <td>{$r['email']}</td>
        <td>{$r['address']}</td>
    </tr>";
}
?>
</table>

</div></body></html>
