<!DOCTYPE html>
<html>
<head>
	<title>Transfer</title>
      <script>
            function showAlert()
            {
                  alert("Money transferred succcessfully!!"); 
            }
      </script>
</head>
<body style="display: flex;flex-direction:column;justify-content: center;align-items: center;background-color: #a67687;color:#c6d7eb;">
      <button style="float:center;border:1px solid #c6d7eb;;padding:15px;border-radius: 20px;font-size: 30px;margin-bottom: 20px;margin-top:20px;background-color: #a67687;color:#c6d7eb;" onclick="window.location.href='home.html'">Go to home</button>
   <?php
      $conn=mysqli_connect('localhost','root','','SparksDB');
      if(!($conn))
      	die("Unable to establish connection".mysqli_connect_error());
      $name=$_GET['name'];
      print "<div style='border:1px solid #c6d7eb;text-align:center;margin-top:30px;padding:20px;margin-left:30px;margin-botton:30px;font-size:30px;'>";
      print "<br>";
      print "Sender:Tanvi";
      print "<br>";
      print "E-mail:tanviii@gmail.com";
      print "<br>";
      print "Receiver:".$name;
      print "</div>";

      print "<form action='transactions.php'  method=get style='border:1px solid #c6d7eb;;display:flex;justify-content:center;margin:40px;padding:40px;'>";
       print "<label for=receiver name>Receiver name : ";
      print "<input type=text id=receiver name=receiver value=$name readonly >";
      print "<br>";
      print "<label for=amount>Amount : ";
      print "<input type=number id=amount name=amount >";
      print "<br>";
      print "<input style='border-radius:10px;padding:10px;border:1px solid #c6d7eb;;font-size:30px;margin:20px;color:#c6d7eb;background-color:#a67687' type=submit value=Submit>";
      print "</form>";
 
   ?>

</body>
</html>