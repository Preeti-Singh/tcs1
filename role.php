<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$role = implode(',',$_REQUEST['role']);
mysql_connect('localhost','root','');
mysql_select_db("tcs");
$sql = "INSERT INTO workflow(workflow) VALUES ('$role') ";
mysql_query($sql);
}   




/*if ($_POST["submit"]="save")
{
$tr=$_POST['tr'];
$mr=$_POST['mr'];
$hr=$_POST['hr'];



mysql_connect('localhost','root','');
mysql_select_db("tcs");

mysql_query("INSERT INTO details(tr,mr,hr) VALUES('$tr','$mr','$hr')");}*/
?>