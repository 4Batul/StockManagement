<?php
include 'db.php';

if(isset($_POST['save'])){
    $name = $_POST['product_name'];
    $cat  = $_POST['category_id'];
    $sup  = $_POST['supplier_id'];
    $cost = $_POST['cost_price'];
    $sell = $_POST['selling_price'];
    $qty  = $_POST['quantity'];
    $re   = $_POST['reorder_level'];

    mysqli_query($conn,
        "INSERT INTO products
        (product_name, category_id, supplier_id, cost_price, selling_price, quantity, reorder_level)
        VALUES
        ('$name','$cat','$sup','$cost','$sell','$qty','$re')"
    );

    header("Location: products.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Add Product</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    a{
    font: bold;
    color: black;
    text-decoration-line: none;
    }
    </style>
<body>

<div class="container mt-5 col-md-6">
<h3>Add New Product</h3>

<form method="POST">

<input class="form-control mb-2" name="product_name" placeholder="Product Name" required>

<select class="form-control mb-2" name="category_id" required>
<option value="">Select Category</option>
<?php
$res = mysqli_query($conn,"SELECT * FROM categories");
while($c = mysqli_fetch_assoc($res)){
    echo "<option value='{$c['category_id']}'>{$c['category_name']}</option>";
}
?>
</select>

<select class="form-control mb-2" name="supplier_id" required>
<option value="">Select Supplier</option>
<?php
$res = mysqli_query($conn,"SELECT * FROM suppliers");
while($s = mysqli_fetch_assoc($res)){
    echo "<option value='{$s['supplier_id']}'>{$s['supplier_name']}</option>";
}
?>
</select>

<input class="form-control mb-2" name="cost_price" placeholder="Cost Price" required>
<input class="form-control mb-2" name="selling_price" placeholder="Selling Price" required>
<input class="form-control mb-2" name="quantity" placeholder="Initial Quantity" required>
<input class="form-control mb-2" name="reorder_level" placeholder="Reorder Level" required>

<button class="btn btn-primary w-100" name="save">Add Product</button>
</form>

<a href="dashboard.php">⬅ Back</a>
</div>

</body>
</html>
