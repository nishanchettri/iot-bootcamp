<?php
include("connection.php");
$state=$_GET['state'];
$id=$_GET['id'];
if($state!="")
{
  $query="UPDATE led SET state='$state' WHERE id=$id";

  $data=mysqli_query($conn,$query);
  // connection variable, query variable
  if($data)
  {
    echo "data updated";
  }
}
else {
  echo "Parameters empty";
}

 ?>
