<?php
require 'connection.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $title=$_POST['title'];
    $author=$_POST['author'];
 $sql="INSERT INTO books (title,author)values('$title','$author')";

$res=mysqli_query($conn,$sql) or die ("INSERT FAILED: " .mysqli_connect_error($conn));
header('location:books.php');
}

?>