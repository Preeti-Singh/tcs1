<?php
$data=json_decode(file_get_contents("php://input"));
$user= $data->user;
$pass= $data->pass;
mysql_connect('localhost','root','');
mysql_select_db("tcs");
$result=mysql_query("Select * from register where user='$user' and pass='$pass'");
$data=array();
if($row=mysql_fetch_array($result,MYSQL_BOTH)){
return response;
$data[]=$row;
//header('Location:./new.php');
}
else
{
echo 'error';
}
//$result=$result=>fetchAll();
echo json_encode($data);



?>