<?php

function get_conn()
{
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "pawtaie";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 
};

function close_conn($conn)
{
    $conn -> close();
};

?>
