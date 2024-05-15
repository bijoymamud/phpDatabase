<?php

include("connection.php");

$id = $_GET["id"];

$deletequery = "DELETE FROM `jobregistration` WHERE id=$id";
$query = mysqli_query($con, $deletequery);
header("location:displaytable.php");


?>