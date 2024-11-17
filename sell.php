

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
      <li class="nav-item active">
        <a class="nav-link" href="sell.php">Sell</a>
      </li>
      <li class="nav-item ">
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
    <h1>Sell</h1>
    </div>
            
<?php
include_once 'include/dbh.inc.php';

	$sql = "SELECT * FROM sell INNER JOIN book ON book.book_code=sell.book_code ";
    $result = mysqli_query($conn,$sql); 
?>
        <table class="table table-bordered">
        <thead>
        <tr>
          <th>Sell ID</th>
          <th>รหัส</th>
          <th>ชื่อ</th>
          <th>จำนวน</th>
          <th>ราคา</th>
          <th>รวม</th>
          <th>วันที่</th>
          <th>เวลา</th>
        </tr>
        </thead>
<?php
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_array($result)){
?>
 <tbody>
  <tr>
    <td><?php echo $row["sell_id"]; ?></td>    
    <td><?php echo $row["book_code"]; ?></td>
    <td><?php echo $row["book_name"]; ?></td>
    <td><?php echo $row["sell_quantity"]; ?></td>
    <td><?php echo $row["book_price"]; ?></td>
    <td><?php $y=$row["sell_quantity"]; $x=$row["book_price"]; echo $y*$x; ?></td>
    <td><?php echo $row["sell_date"]; ?></td>
    <td><?php echo $row["sell_time"]; ?></td>
  </tr>
  </tbody>

<?php
       }}
?>            
      
  </table> 

    


</body>
</html>