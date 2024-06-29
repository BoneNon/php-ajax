<?php
include_once 'include/dbh.inc.php';

	$sql = "SELECT * FROM sell INNER JOIN book ON book.book_code=sell.book_code ";
    $result = mysqli_query($conn,$sql);

    echo "hello";

    if(mysqli_num_rows($result)>0){
?>
        <table>
        <tr>
          <th>รหัส</th>
          <th>ชื่อ</th>
          <th>จำนวน</th>
          <th>ราคา</th>
          <th>รวม</th>
          <th>วันที่</th>
          <th>เวลา</th>
        </tr>
<?php
        while($row = mysqli_fetch_array($result)){
?>
 
  <tr>
    <td><?php echo $row["book_code"]; ?></td>
    <td><?php echo $row["book_name"]; ?></td>
    <td><?php echo $row["sell_quantity"]; ?></td>
    <td><?php echo $row["book_price"]; ?></td>
    <td><?php $y=$row["sell_quantity"]; $x=$row["book_price"]; echo $y*$x; ?></td>
    <td><?php echo $row["sell_date"]; ?></td>
    <td><?php echo $row["sell_time"]; ?></td>
  </tr>
  

<?php
       }
?>            
      
  </table> 

<?php
        
    }else{
        echo"000";
    }

?>