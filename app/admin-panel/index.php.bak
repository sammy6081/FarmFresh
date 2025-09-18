<?php require 'layout/header.php'; ?>
<?php require '../config/config.php'; ?>

<?php 
  if(!isset($_SESSION['admin_name'])) {
    echo "<script> window.location.href='".ADMINURL."admins/login-admins.php'; </script>";
  }

// prepare and execute queries to get product counts
  $products = $conn->query("SELECT COUNT(*) as product_num FROM products");
  $products->execute();
  $productsNum = $products->fetch(PDO::FETCH_OBJ);

  // prepare and execute queries to get order counts
  $orders = $conn->query("SELECT COUNT(*) as order_num FROM orders");
  $orders->execute();
  $ordersNum = $orders->fetch(PDO::FETCH_OBJ);

  // prepare and execute queries to get category counts
  $categories = $conn->query("SELECT COUNT(*) as category_num FROM categories");
  $categories->execute();
  $categoriesNum = $categories->fetch(PDO::FETCH_OBJ);

  // prepare and execute queries to get admin counts 
  $admins = $conn->query("SELECT COUNT(*) as admin_num FROM admins");
  $admins->execute();
  $adminsNum = $admins->fetch(PDO::FETCH_OBJ);
?>

  <div class="row">
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Products</h5>
              <!-- <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6> -->
              <p class="card-text">number of products: <?php echo $productsNum->product_num; ?></p>

            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Orders</h5>
              <!-- <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6> -->
              <p class="card-text">number of orders: <?php echo $ordersNum->order_num; ?></p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Categories</h5>
              <p class="card-text">number of categories: <?php echo $categoriesNum->category_num; ?></p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Admins</h5>

              <p class="card-text">number of admins: <?php echo $adminsNum->admin_num; ?></p>

            </div>
          </div>
        </div>
      </div>
  
          
    </div>
<?php require 'layout/footer.php'; ?>