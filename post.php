<?php
include_once 'include/dbh.inc.php';

$input = file_get_contents('php://input');
$obj = json_decode($input);
$arrlength = count($obj->icode);
$data_name = $obj->{'iname'};
$data_code = $obj->{'icode'};
$data_qtyp = $obj->{'iqtyp'};

echo "count".$arrlength."\n";
echo $sellID;
for ($row = 0; $row < $arrlength; $row++)
{
  echo "\n ".$data_code[$row]." ".$data_qtyp[$row]."/" ;
  

  $sql = "INSERT INTO sell(sell_id ,book_code ,sell_quantity ,sell_date ,sell_time)	VALUES ('". $sellID ."','". $data_code[$row] ."','". $data_qtyp[$row] ."','". $todayD ."','". $todayT ."')";
  if ($conn->query($sql) === TRUE) {
 echo "New record created successfully\n";
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}

}
echo "--------------------------------------------------\n";
$sql = "INSERT INTO slip(slip_id ,slip_quantity ,slip_date ,slip_time)	VALUES ('". $sellID ."','". $arrlength ."','". $todayD ."','". $todayT ."')";
  if ($conn->query($sql) === TRUE) {
 echo "New record created successfully\n";
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}

/*
foreach ($obj as $x => $x_value)
{
  echo "\nKey=" . $x . "\n Value=" . $x_value[0];
   
     
   $sql = "INSERT INTO sell(book_code ,sell_quantity ,sell_date ,sell_time)	VALUES ('". $data ."','". $todayD ."','". $todayT ."')";
   if ($conn->query($sql) === TRUE) {
  echo "New record created successfully\n";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
   
}
*/
?>