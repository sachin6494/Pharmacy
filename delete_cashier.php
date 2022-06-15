<?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['username'])){
$id=$_SESSION['admin_id'];
$user=$_SESSION['username'];
}else{
    header("location:http://localhost/Pharmacy/index.php");
exit();
}
$id=$_GET['cashier_id'];
$sql="delete from cashier where cashier_id='$id'";
// mysql_query($sql);
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }
//$rows=mysql_fetch_assoc($result);
header("location:admin_cashier.php");
?>


