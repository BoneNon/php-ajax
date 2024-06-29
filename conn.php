<?php
include_once 'include/dbh.inc.php';

	$sql = "SELECT * FROM book";
	$result = mysqli_query($conn,$sql);
   
    

    if(isset($_POST['suggestion'])) {
		$name = $_POST['suggestion'];

		if (!empty($name)) {
			foreach ($result as $row) {
				if ($row['book_code']==$name) {
					//print "<tr>";
    				//print "<td>".$row['name'] . "</td>";
        			//print "<td>".$row['category'] . "</td>";
        			//print "<td>".$row['price'] . "</td>";
        			//print "</tr>";
?>
					
<div class="card">
  <h5 class="card-header">Book</h5>
  <div class="card-body">
    <ul class="list-group list-group-flush">
	<li class="list-group-item ">Code : <input class="form-control" id="pcode" type="text" value="<?php echo $row['book_code']; ?>" readonly></li>
    <li class="list-group-item ">Name : <input class="form-control" id="pname" type="text" value="<?php echo $row['book_name']; ?>" readonly></li>
    <li class="list-group-item">Category : <input class="form-control" id="pname" type="text" value="<?php echo $row['book_category']; ?>" readonly></li>
    <li class="list-group-item">Price : <input class="form-control" id="price" type="text" value="<?php echo $row['book_price']; ?>" readonly></li>
    <li class="list-group-item">Quantion : <input id="pqty" type="number" value="1"></li>
  	</ul>
  </div>
</div>
<!--
					<label>Product Name</label>
					<input id="pname" type="text" value="<?php echo $row['book_name']; ?>"><br>
					<label>Category</label>
					<input id="pname" type="text" value="<?php echo $row['book_category']; ?>"><br>
					<label>Quantion</label>
					<input id="pqty" type="number" value="1"><br>
					<label>Price</label>
					<input id="price" type="number" value="<?php echo $row['book_price']; ?>"><br>
-->					

<?php
				}
			}
		}
		
	}

?>