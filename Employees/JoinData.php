<?php
include '../Shared/Header.php';
include '../Shared/Nav.php';
include '../Genral/ConfigDataBase.php';



$select= "SELECT employees.Name emp ,department.Name dep FROM `employees` JOIN department on employees.depID = department.Id
";
$s = mysqli_query($conect, $select);




?>

<h1 class="text-center text-info display-4"> Join Employees With Department </h1>


<div class="container col-6">
    <table class="table table-hover">
     <tr>

      <th>Employee</th>
      <th>Department</th>

     </tr>
   
     <?php foreach ($s as $data) { ?>
        <tr>
     <td><?php echo $data['emp'] ?></td>
     <td><?php echo $data['dep'] ?></td>
     </tr>

     <?php  }?>
    </table>
</div>

<?php
include '../Shared/Script.php';
?>