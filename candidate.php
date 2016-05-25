<?php
$data=json_decode(file_get_contents("php://input"));
$empid= $data->id;
$connect = mysqli_connect("localhost", "root", "", "tcs");

$result = mysqli_query($connect, "select * from info where empid=100");

$data = array();

if($row = mysqli_fetch_array($result)) {
return response;
  $data[] = $row;
  
}
    print json_encode($data);
	
	
?>