<?php
include 'db.php';

$total_products = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM products"))['total'];


$low_stock_count = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM products WHERE quantity <= reorder_level"))['total'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<style>
    body {
        background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        font-family: 'Segoe UI', sans-serif;
    }
    .navbar {
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .dashboard-title {
        text-align: center;
        margin-top: 30px;
        margin-bottom: 20px;
    }
    .dashboard-title h1 {
        font-weight: 700;
        font-size: 2.5rem;
    }
    .dashboard-title .tagline {
        color: #6c757d;
        font-size: 1.2rem;
    }
    .dashboard-cards .card {
        border-radius: 15px;
        box-shadow: 0 6px 12px rgba(0,0,0,0.1);
        transition: transform 0.3s, box-shadow 0.3s;
    }
    .dashboard-cards .card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 24px rgba(0,0,0,0.2);
    }
    .dashboard-cards .card-body {
        text-align: center;
    }
    .dashboard-cards .card-body i {
        font-size: 2.5rem;
        margin-bottom: 10px;
        color: #fff;
    }
    .btn-dashboard {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        font-weight: 600;
        border-radius: 12px;
        transition: transform 0.2s, box-shadow 0.2s;
    }
    .btn-dashboard:hover {
        transform: scale(1.05);
        box-shadow: 0 6px 12px rgba(0,0,0,0.15);
    }
    @media(max-width:768px){
        .dashboard-buttons .col-md-3 {
            flex: 0 0 45%;
            margin-bottom: 15px;
        }
        .dashboard-cards .col-md-3 {
            flex: 0 0 80%;
            margin-bottom: 20px;
        }
    }
</style>
</head>
<body>

<nav class="navbar bg-dark">
    <div class="container-fluid justify-content-center">
        <span class="navbar-brand mb-0 h1 text-white">
            Manage Smart. Stock Smart.
        </span>
    </div>
</nav>

<div class="dashboard-title">
    <h1>Stock Management System</h1>
    <p class="tagline">Manage Your Inventory Efficiently & Smoothly</p>
</div>

<div class="container dashboard-cards mb-5">
    <div class="row g-4 justify-content-center">

        <div class="col-md-3">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <i class="bi bi-box-seam"></i>
                    <h5 class="card-title mt-2">Total Products</h5>
                    <p class="card-text fs-4 fw-bold"><?php echo $total_products; ?></p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card bg-danger text-white">
                <div class="card-body">
                    <i class="bi bi-exclamation-triangle"></i>
                    <h5 class="card-title mt-2">Low Stock</h5>
                    <p class="card-text fs-4 fw-bold"><?php echo $low_stock_count; ?></p>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="container dashboard-buttons">
    <div class="row g-4 justify-content-center">

        <div class="col-md-3">
            <a href="products.php" class="btn btn-primary w-100 py-3 btn-dashboard">
                <i class="bi bi-card-list"></i> Product List
            </a>
        </div>

        <div class="col-md-3">
            <a href="add_product.php" class="btn btn-success w-100 py-3 btn-dashboard">
                <i class="bi bi-plus-circle"></i> Add Product
            </a>
        </div>

        <div class="col-md-3">
            <a href="stock_in.php" class="btn btn-info w-100 py-3 text-white btn-dashboard">
                <i class="bi bi-box-arrow-in-down"></i> Stock In
            </a>
        </div>

        <div class="col-md-3">
            <a href="stock_out.php" class="btn btn-danger w-100 py-3 btn-dashboard">
                <i class="bi bi-box-arrow-in-down"></i> Stock Out
            </a>
        </div>

        <div class="col-md-3">
            <a href="low_stock.php" class="btn btn-danger w-100 py-3 btn-dashboard">
                <i class="bi bi-exclamation-circle"></i> Low Stock Alert
            </a>
        </div>

        <div class="col-md-3">
            <a href="suppliers.php" class="btn btn-info w-100 py-3 text-white btn-dashboard">
                <i class="bi bi-box-arrow-in-down"></i> suppliers
            </a>
        </div>


    </div>
</div>

</body>
</html>
