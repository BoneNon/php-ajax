<?php

    include_once('include/function.inc.php');

    $updatedata = new DB_con();
    
    if (isset($_POST['update'])) {
        $book_code = $_POST['code'];
        $book_name = $_POST['name'];
        $book_category = $_POST['category'];
        $book_price = $_POST['price'];

        $sql = $updatedata->update($book_code, $book_name, $book_category, $book_price );

        if ($sql) {
            echo "<script>alert('Insert Successfully!');</script>";
            echo "<script>window.location.href='book2.php'</script>";
        } else {
            echo "<script>alert('Insert fall!');</script>";
            echo "<script>window.location.href='update.php'</script>";
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
        <a class="nav-link" href="page2.php">Sell</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="print.php">Print</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="book.php">Book</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    
      
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    
  </div>
</nav>

<div class="container">
    <div class="jumbotron">
    <h1>Update</h1>
    <p>Bootstrap is the most popular HTML, CSS...</p>
    </div>
            
    <a href="book2.php" class="btn btn-success">Go Back</a>
    <br><br>
    <?php
        $code = $_GET['id'];
        $updateuser = new DB_con();
        $sql = $updateuser->fetchonrecord($code);
        while($row = mysqli_fetch_array($sql)) {
    ?>  

    <form action="" method="post">
        <div class="form-group">
            <label for="code">Code</label>
            <input type="text" class="form-control" name="code" value="<?php echo $row["book_code"]; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $row["book_name"]; ?>" required>
        </div>
        <div class="form-group">
            <label for="category">category</label>
            <input type="text" class="form-control" name="category" value="<?php echo $row["book_category"]; ?>" required>
        </div>
        <div class="form-group">
            <label for="price">price</label>
            <input type="number" class="form-control" name="price" value="<?php echo $row["book_price"]; ?>" required>
        </div>
        <?php } ?>
        <button type="submit" name="update" class="btn btn-primary">Update</button>
    </form>


    
</body>
</html>