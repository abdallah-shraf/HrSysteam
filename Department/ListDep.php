<?php
include '../Shared/Header.php';

include '../Shared/Nav.php';

include '../Genral/ConfigDataBase.php';

$select= "SELECT * FROM `department`";
$s = mysqli_query($conect, $select);

?>


<h1 class="text-center text-primary display-3"> List Department Page </h1>

<table class="table table-sm table-dark col-6 container text-center">

        

<tr>
<td> ID </td>
<td>  Name </td>

</tr>

<?php foreach($s as $data) { 
?>
<tr>

    <td>
        <?php echo$data['Id']  ?>
    </td>
    <td>
        <?php echo$data['Name']  ?>
    </td>
  
  
</tr>


<?php } ?>

</table>

<?php
include '../Shared/Script.php';
?>`