<?php require '../layout/header.php'; ?>
<?php require '../../config/config.php'; ?>

<?php 
  if(!isset($_SESSION['admin_name'])) {
    echo "<script> window.location.href='".ADMINURL."admins/login-admins.php'; </script>";
  }

  $products = $conn->query("SELECT * FROM products");
  $products->execute();
  $allProducts = $products->fetchAll(PDO::FETCH_OBJ);
?>


      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Products</h5>
              <a  href="<?php echo ADMINURL; ?>products-admins/create-products.php" class="btn btn-primary mb-4 text-center float-right">Create Products</a>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">product</th>
                    <th scope="col">price in USD</th>
                    <th scope="col">expiration date</th>
                    <th scope="col">status</th>
                    <th scope="col">delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($allProducts as $product) : ?>
                    <tr>
                      <th scope="row"><?php echo $product->id; ?></th>
                      <td><?php echo $product->title; ?></td>
                      <td><?php echo $product->price; ?></td>
                      <td><?php echo $product->exp_date; ?></td>
                      <!-- verify if product is available or not. 1=available, 0!=available -->
                      <?php if($product->status == 0) : ?>
                        <td><a href="<?php echo ADMINURL; ?>products-admins/status.php?id=<?php echo $product->id; ?>&status=<?php echo $product->status; ?>" class="btn btn-warning  text-center ">unavailable</a></td>
                      <?php endif; ?>
                      <?php if($product->status == 1) : ?>
                        <td><a href="<?php echo ADMINURL; ?>products-admins/status.php?id=<?php echo $product->id; ?>&status=<?php echo $product->status; ?>" class="btn btn-success  text-center ">available</a></td>
                        <td><a href="<?php echo ADMINURL; ?>products-admins/delete-product.php?id=<?php echo $product->id; ?>" class="btn btn-danger  text-center ">delete</a></td>
                      <?php endif; ?>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>
<?php require '../layout/footer.php'; ?>