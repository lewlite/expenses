// Deleting an item
<?php
  session_start();
  include_once 'dbconnect.php';

  if($_POST['table']=="outcome") {
    extract($_POST);
    $id=mysqli_real_escape_string($con,$id);
    $sql5 = $con->query("DELETE FROM outcome WHERE id='$id'");
  }

  if($_POST['table']=="income") {
    extract($_POST);
    $id=mysqli_real_escape_string($con,$id);
    $sql6 = $con->query("DELETE FROM income WHERE id='$id'");
  }

  if($_POST['clear']=="in") {
    extract($_POST);
    $id=mysqli_real_escape_string($con,$id);
    $sql7 = $con->query("DELETE FROM income");
  }

  if($_POST['clear']=="out") {
    extract($_POST);
    $id=mysqli_real_escape_string($con,$id);
    $sql8 = $con->query("DELETE FROM outcome");
  }
?>
