<?php

include 'db.php';

$id = $_GET['id'];

$q = " DELETE FROM `employee_data` WHERE id = $id ";

mysqli_query($con, $q);

header('location:display.php');

?>