
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
  <a class="navbar-brand" href="index.php">Navbar</a>
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
    <h1>Book</h1>
    </div>
            
    <a href="insert.php" class="btn btn-success">Add</a>
    <br><br>
    <table class="table table-bordered">
        <thead>
          <th>รหัส</th>
          <th>ชื่อ</th>
          <th>ประเภท</th>
          <th>ราคา</th>
          <th>แก้ไข</th>
          <th>ลบ</th>
        </thead>
        <tbody>
            <?php

                include_once('include/function.inc.php');
                $fetchdata = new DB_con();
                $sql = $fetchdata->fetchdata_book();
                while($row = mysqli_fetch_array($sql)) {
            
            ?>
                <tr>
                    <td><?php echo $row["book_code"]; ?></td>
                    <td><?php echo $row["book_name"]; ?></td>
                    <td><?php echo $row["book_category"]; ?></td>
                    <td><?php echo $row["book_price"]; ?></td>
                    <td><a href="update.php?id=<?php echo $row["book_code"]; ?>" class="btn btn-warning">Edit</a></td>
                    <td><a href="delete.php?del=<?php echo $row["book_code"]; ?>" class="btn btn-danger">Delete</a></td>
                </tr>

            <?php } ?>
        </tbody>
    </table>


    
</body>
</html>