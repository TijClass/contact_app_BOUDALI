 
<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "hajar";
 $conn = new mysqli ($dbhost, $dbuser, $dbpass,$dbname) or die("Connect failed: %s\n". $conn -> error);
 return $conn;
 }
 $con = mysqli_connect('localhost','root','','hajar');
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>