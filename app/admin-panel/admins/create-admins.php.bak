<?php require '../layout/header.php'; ?>
<?php require '../../config/config.php'; ?>

<?php 
  if(!isset($_SESSION['admin_name'])) {
    echo "<script> window.location.href='".ADMINURL."admins/login-admins.php'; </script>";
  }
?>
<?php 
  if(isset($_POST["submit"])){
      if(empty($_POST['email']) OR empty($_POST['admin_name']) OR empty($_POST['password'])) {
          echo "one or more inputs are empty";
      }else{

          $email = $_POST['email'];
          $admin_name = $_POST['admin_name'];
          $password = $_POST['password'];

          $insert = $conn->prepare("INSERT INTO admins(email, admin_name, mypassword)
          VALUES(:email, :admin_name, :mypassword)");

          $insert -> execute([
              ":email" => $email,
              ":admin_name" => $admin_name,
              ":mypassword" => password_hash($password, PASSWORD_DEFAULT)
          ]);

          echo "<script> window.location.href='".ADMINURL."admins/admins.php'; </script>";

      }
  }
?>

       <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-5 d-inline">Create Admins</h5>
          <form method="POST" action="" enctype="multipart/form-data">
                <!-- Email input -->
                <div class="form-outline mb-4 mt-4">
                  <input type="email" name="email" id="form2Example1" class="form-control" placeholder="Email" />

                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="admin_name" id="form2Example1" class="form-control" placeholder="Admin name" />
                </div>
                <div class="form-outline mb-4">
                  <input type="password" name="password" id="form2Example1" class="form-control" placeholder="Password" />
                </div>

               
                <!-- Submit button -->
                <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">create</button>

          
              </form>

            </div>
          </div>
        </div>
      </div>
<?php require '../layout/footer.php'; ?>