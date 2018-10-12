<?php
// $con = mysql_connect("localhost","root","");

 $servername = "localhost";
 $username = "root";
 $password = "";
 $db = "login";
// var_dump("aaa");    
// Create connection
//  $conn = new mysql($servername, $username, $password, $db);
// mysql_connect("localhost","root","");
// mysql_select_db($db);
// mysql_query("SET NAMES utf8");


// var_dump("aa");
// Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } 
// var_dump("abc");
// echo "Connected successfully";

 $con =mysqli_connect("localhost", "root","","login") or die ("Error: " .mysqli_connect_error());
 mysqli_query($con , 'utf8');
 mysqli_set_charset($con, 'utf8');
?>