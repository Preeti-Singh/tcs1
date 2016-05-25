<?php
mysql_connect('localhost','root','');
mysql_select_db("tcs");

$query = "SELECT * FROM register WHERE user = $_GET["U"]";
    $result = mysql_query($query);
    if ($result) {
        while($row = mysql_fetch_array($result)) {
                $name = $row["register"];
                echo "Hello: $name<br>";
            }
    }
    else {
        echo "User dosen't exit!";
    }
    mysql_close();
?>