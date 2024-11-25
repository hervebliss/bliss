
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet"  type="text/css" href="css/styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book_Store</title>
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
     <a href="#">  <ul>Illest work</ul> </a>
        
    </li>
</center>
</div>
<div class="container">

<form action="process.php" method="POST">
<fieldset>
<legend>Add your books here</legend>

<label for="title"> Book Title:</label><br>
<input type="text" name="title" id="title"  placeholder="Title..." required><br><br>
<label for="author">Author:</label><br>
<input type="text" name="author" id="author" placeholder="author..." required><BR><br>
<button type="submit">Add Book</button>


</form> 
</div>

</body>
</html>