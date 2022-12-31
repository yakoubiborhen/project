<?php
if( isset($_GET["id"]) ) {
   $id = $_GET["id"];

   $servername = "projet-aws-mysql.cqx5ygecdhr0.us-east-1.rds.amazonaws.com";
   $username = "admin";
   $password = "borhenborhen";
   $database = "myshop";
 // Create connection
   $connection = new mysqli($servername, $username, $password, $database);

   $sql = "DELETE FROM clients WHERE id=$id";
   $connection->query($sql);
}

header("location: index.php");
exit;
?>