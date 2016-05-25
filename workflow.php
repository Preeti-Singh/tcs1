<?php
//database settings
//mysql_connect('localhost','root','');
//mysql_select_db("tcs");
//$result = "select * from workflow";


$connect = mysqli_connect("localhost", "root", "", "tcs");

$result = mysqli_query($connect, "select * from workflow");

$data = array();

while ($row = mysqli_fetch_array($result)) {
  $data[] = $row;
}
    print json_encode($data);
?>