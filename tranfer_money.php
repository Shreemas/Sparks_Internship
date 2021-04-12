<!DOCTYPE html>
<html>
<head>
	<title>Transfer</title>
</head>
<body>
   <?php
      $conn=mysqli_connect('localhost','root','','SparksDB');
      if(!($conn))
      	die("Unable to establish connection".mysqli_connect_error());
      $name=$_GET['name'];
      print "<div style='border:1px solid black;'>";
      print "Sender:Tanvi";
      print "E-mail:tanviii@gmail.com";
      print "Receiver:".$name;
      print "</div>";
      //print "<form>"

   ?>
</body>
</html>