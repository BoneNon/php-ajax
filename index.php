<?php
include_once 'include/dbh.inc.php';
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
echo date("H:i:s");
echo date("Y-m-d");
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
	<script>
	$(document).ready(function(){

	  $("#name").keyup(function(){
	  	var name = $("#name").val();
	  	$.post("conn.php",{
	  		suggestion:name
	  	},function(data,status){
	  		$("#test").html(data);
	  	  		
	   	});
	   	if (name.length>3) {addItem();}
	  });

	  $("#btnSend").click(function() {
		var jsonString = iname ;
		$.ajax({
			type: "POST",
			url: "post.php",
			contentType: 'application/json',
			data: JSON.stringify({icode,iname,iqtyp}),
		    success: function(result) {
			alert(result);
			}
			});
		});

	});

</script>

</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav nav-pills mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sell.php">Sell</a>
      </li>
	  <li class="nav-item ">
        <a class="nav-link" href="slip.php">Slip</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="book.php">Book</a>
      </li>
    </ul>
    
      
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    
  </div>
</nav>

	<div class="container">
		<div class="py-5 text-center ">
			<h2>Hello</h2>
			<hr class="mb-4">
		</div>

	<div class="row" id="main">
		<div class="col-md-6 order-md-2 mb-4">
			<h4 class="d-flex justify-content-between align-items-center mb-3">
			<span class="text-muted">Your cart</span>
			<span class="badge badge-secondary bsdge-pill" id="length"></span>
			</h4>
		<div id="cart"></div>
		
	</div>

	<div class="col-md-6 order-md-1">
		<h4 class="mb-3 text-center">INPUT</h4>
		<div class="input-group mb-3">
  			<input id="name" type="text" class="form-control" placeholder="Barcode" aria-label="Recipient's username" aria-describedby="button-addon2" name="name">
  			<div class="input-group-append">
    			<button class="btn btn-outline-success" type="button" id="button-addon2" onclick="addItem()">Add item</button>
  			</div>
  			
		</div>
		
		<br>
		<p id="test"></p>
		<br>
		<hr class="mb-4">
		<button class="btn btn-outline-warning btn-lg btn-block" id="btnSend">Save</button>
	</div>
	</div>
	</div>


</body>
</html>

