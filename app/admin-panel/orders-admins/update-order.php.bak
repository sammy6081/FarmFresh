<?php require '../layout/header.php'; ?>
<?php require '../../config/config.php'; ?>

<?php 
  if(!isset($_SESSION['admin_name'])) {
    echo "<script> window.location.href='".ADMINURL."admins/login-admins.php'; </script>";
  }


  if(isset($_GET['id'])) {

    $id = $_GET['id'];

    $select = $conn->query("SELECT * FROM orders WHERE id='$id'");
    $select->execute();

    $order = $select->fetch(PDO::FETCH_OBJ);
  } 

// update orders
  if(isset($_POST["submit"])){
      if(empty($_POST['status'])) {
          echo "one or more inputs are empty";
      }else{

          $status = $_POST['status'];

          $insert = $conn->prepare("UPDATE orders SET status = :status WHERE id = '$id'");


          $insert -> execute([
              ":status" => $status
          ]);
          echo "<script> window.location.href='".ADMINURL."orders-admins/show-orders.php'; </script>";
      }
  }
?>



       <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-5 d-inline">Update Orders</h5>
              <form method="POST" action="update-order.php?id=<?php echo $id; ?>">
                <div class="form-group">
                  <select name="status" class="form-control mt-3" id="exampleFormControlSelect1">
                    <option>--select order status--</option>
                    <option value="Processing">Processing</option>
                    <option value="Completed">Completed</option>

                  </select>
              </div>

      
                <!-- Submit button -->
                <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">update</button>

          
              </form>

            </div>
          </div>
        </div>
      </div>
<?php require '../layout/footer.php'; ?>