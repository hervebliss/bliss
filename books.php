<?php
require 'connection.php';
$sql="SELECT *FROM books";
$res=mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet"  type="text/css" href="css/styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Books</title>
</head>
<body>
<div class="header">
    <h1>Welcome to my Book Store</h1>
</div>
<div class="nav-bar">
<center>   
<li class="nav-bar-links">

     <a href="index.php">   <ul>Home</ul> </a>
     <a href="books.php">  <ul>View Books</ul> </a>
     <a href="add_book.php">  <ul>Add Books</ul> </a>
     <a href="#">  <ul>illest work</ul> </a>
        
    </li>
</center>
</div>
<div class="container">

<form action="#" method="POST">
<fieldset>
<legend>Books Available</legend>
<table border='1' cellpadding='10' cellspacing='0' style='margin: 0 auto;'>
<tr>
    <th>ID</th>
    <th>Title</th>
    <th>Author</th>
    <th>PUB  DATE</th>
</tr>
<?php
while ($row=mysqli_fetch_assoc($res)){
?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['title']; ?></td>
    <td><?php echo $row['author']; ?></td>
    <td><?php echo $row['published_date']; ?></td>
</tr>
<?php } ?>
</table>



</form> 
</div>

</body>
</html>