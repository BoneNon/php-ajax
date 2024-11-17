<?php

    include_once('include/function.inc.php');

    $insertdata = new DB_con();
    
    if (isset($_POST['insert'])) {
        $book_code = $_POST['code'];
        $book_name = $_POST['name'];
        $book_category = $_POST['category'];
        $book_price = $_POST['price'];

        $sql = $insertdata->insert($book_code, $book_name, $book_category, $book_price );

        if ($sql) {
            echo "<script>alert('Insert Successfully!');</script>";
            echo "<script>window.location.href='book.php'</script>";
        } else {
            echo "<script>alert('Insert fall!');</script>";
            echo "<script>window.location.href='insert.php'</script>";
        }
    }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
	<script src="js/app.js"></script>
	<script src="jquery/jquery-3.5.1.min.js"></script>
	<script src="bootstrap-4.5.3-dist/js/bootstrap.js"></script>
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav nav-pills mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="sell.php">Sell</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="slip.php">Slip</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="book.php">Book</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
    <div class="jumbotron">
    <h1>Insert</h1>
    </div>
            
    <a href="book.php" class="btn btn-success">Go Back</a>
    <br><br>
    
    <form action="" method="post">
        <div class="form-group">
            <label for="code">Code</label>
            <input type="text" class="form-control" name="code" required>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="form-group">
            <label for="category">category</label>
            <input type="text" class="form-control" name="category" required>
        </div>
        <div class="form-group">
            <label for="price">price</label>
            <input type="number" class="form-control" name="price" required>
        </div>
        <button type="submit" name="insert" class="btn btn-primary">Submit</button>
    </form>


    
</body>
</html>