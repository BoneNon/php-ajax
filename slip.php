
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
      <li class="nav-item active">
        <a class="nav-link" href="slip.php">Slip</a>
      </li>
      <li class="nav-item ">
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
    <h1>Slip</h1>
    <p>Bootstrap is the most popular HTML, CSS...</p>
    </div>

    <br><br>
    <table class="table table-bordered">
        <thead>
          <th>รหัส</th>
          <th>จำนวน</th>
          <th>วันที่</th>
          <th>เวลา</th>
          <th>พิมพ์</th>
          <th>ดู</th>
          <th>ลบ</th>
        </thead>
        <tbody>
            <?php

                include_once('include/function.inc.php');
                $fetchdata = new DB_con();
                $sql = $fetchdata->fetchdata_slip();
                while($row = mysqli_fetch_array($sql)) {
            
            ?>
                <tr>
                    <td><?php echo $row["slip_id"]; ?></td>
                    <td><?php echo $row["slip_quantity"]; ?></td>
                    <td><?php echo $row["slip_date"]; ?></td>
                    <td><?php echo $row["slip_time"]; ?></td>
                    <td><a href="print.php?id=<?php echo $row["slip_id"]; ?>" class="btn btn-success">Print</a><a href="print2.php?id=<?php echo $row["slip_id"]; ?>" class="btn btn-success">Print2</a></td>
                    <td><a href="view.php?id=<?php echo $row["slip_id"]; ?>" class="btn btn-info">View</a><a href="view2.php?id=<?php echo $row["slip_id"]; ?>" class="btn btn-info">View2</a></td>
                    <td><a href="delete2.php?del=<?php echo $row["slip_id"]; ?>" class="btn btn-danger">Delete</a></td>
                </tr>

            <?php } ?>
        </tbody>
    </table>


    
</body>
</html>