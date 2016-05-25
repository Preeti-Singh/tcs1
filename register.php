<?php
$data=json_decode(file_get_contents("php://input"));
$fname=$data->fname;
$lname=$data->lname;
$user= $data->user;
$pass= $data->pass;
mysql_connect('localhost','root','');
mysql_select_db("tcs");
mysql_query("INSERT INTO register(fname,lname,user,pass) VALUES('$fname','$lname','$user','$pass')");


?>