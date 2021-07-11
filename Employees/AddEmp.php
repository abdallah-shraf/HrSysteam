<?php
include '../Shared/Header.php';

include '../Shared/Nav.php';
include '../Genral/ConfigDataBase.php';
include '../Genral/Functionality.php';


if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $salary = $_POST['salary'];
    $depID = $_POST['depId'];
    $insert = "INSERT INTO `employees` VALUES (NULL ,'$name' , $salary ,  $depID )";
    $i = mysqli_query($conect, $insert);
  
}
// List aLL department

$select= "SELECT * FROM `department`";
$s = mysqli_query($conect, $select);
?>
<h1 class="text-center text-primary display-3"> Add Employee Page </h1>

<div class="container col-6">
    <div class="card">
        <div class="card-body">
            <form method="POST">
                <div class="form-group">
                    <label> Employee Name </label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label> Employee Salary </label>
                    <input type="number" name="salary" class="form-control">
                </div>
                <div class="form-group">
                    <label> Employee Department </label>
                    
                  
                    <select name="depId" class="form-control">
                    <?php foreach($s as $data){ ?>
                        <option value=" <?php echo $data['Id'] ?> "> <?php echo $data['Name'] ?> </option>
                        <?php }?>
                    </select>
                </div>
                <div class="form-group">
                    <button name="send" class="btn btn-primary btn-block"> Send Data </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include '../Shared/Script.php';
?>