<?php

$connect = mysqli_connect("localhost", "root", "", "tcs");

$result = mysqli_query($connect, "select * from info where empid=100");

$data = array();

while ($row = mysqli_fetch_array($result)) {
  $data[] = $row;
}
    print json_encode($data);
	
	
?>