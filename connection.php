<?php


$username = "root";
$password = "";
$server = 'localhost';
$db = 'crudregisterfile';

$con = mysqli_connect($server, $username, $password, $db);

if($con){
  // echo 'Connected Successfully';
?>
<script>
  alert('Successfully Connected');
</script>

<?php

}else{
  ?>
<script>
  alert('Connection Problem');
</script>

<?php
}

