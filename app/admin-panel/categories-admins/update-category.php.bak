<?php require '../layout/header.php'; ?>
<?php require '../../config/config.php'; ?>

<?php 
  if(!isset($_SESSION['admin_name'])) {
    echo "<script> window.location.href='".ADMINURL."admins/login-admins.php'; </script>";
  }


  if(isset($_GET['id'])) {

    $id = $_GET['id'];

    $select = $conn->query("SELECT * FROM categories WHERE id='$id'");
    $select->execute();

    $category = $select->fetch(PDO::FETCH_OBJ);
  } 

// update Category
  if(isset($_POST["submit"])){
      if(empty($_POST['name']) OR empty($_POST['icon']) OR empty($_POST['description'])) {
          echo "one or more inputs are empty";
      }else{

          $name = $_POST['name'];
          $icon = $_POST['icon'];
          $description = $_POST['description'];

          $insert = $conn->prepare("UPDATE categories SET name = :name, icon = :icon, description = :description WHERE id = '$id'");
          

          $insert -> execute([
              ":name" => $name,
              ":icon" => $icon,
              ":description" => $description,
          ]);
          echo "<script> window.location.href='".ADMINURL."categories-admins/show-categories.php'; </script>";
      }
  }
?>

       <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-5 d-inline">Update Categories</h5>
              <form method="POST" action="update-category.php?id=<?php echo $id; ?>">
                <div class="form-outline mb-4 mt-4">
                  <input type="text" name="name" id="form2Example1" value="<?php echo $category->name; ?>" class="form-control" placeholder="name" />
                </div>
                <div class="form-outline mb-4 mt-4">
                  <input type="text" name="icon" id="form2Example1" class="form-control" value="<?php echo $category->icon; ?>" placeholder="icon" />      
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Description</label>
                  <textarea type="text" name="description" placeholder="description" class="form-control"  id="exampleFormControlTextarea1" rows="3"><?php echo $category->description; ?></textarea>
                </div>

      
                <!-- Submit button -->
                <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">update</button>

          
              </form>

            </div>
          </div>
        </div>
      </div>
<?php require '../layout/footer.php'; ?>