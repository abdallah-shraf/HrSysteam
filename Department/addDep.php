<?php
include '../Shared/Header.php';
include '../Shared/Nav.php';
include '../Genral/ConfigDataBase.php';
include '../Genral/Functionality.php';

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $insert = "INSERT INTO `department` VALUES (NULL ,'$name' )";
    $i = mysqli_query($conect, $insert);
    testMessage($i, "insert To DataBase");
}
?>

<h1 class="text-center text-primary display-3"> Add Departments Page </h1>

<div class="container col-6">
    <div class="card">
        <div class="card-body">
            <form method="POST">
                <div class="form-group">
                    <label> Department Name </label>
                    <input type="text" name="name" class="form-control">
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