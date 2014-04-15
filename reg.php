
<?php

$username = $_POST["name"];
$password = $_POST["password"];

$con = mysql_connect("localhost","root","123456");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("dbnew", $con);



$sql="INSERT INTO test (name, password) 
VALUES
 ('$username', '$password')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";


mysql_close($con);

?>

<html>
<head>
 <meta charset="UTF-8">
   <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
</head>
<body>
</br><a href="index.php">进入登陆界面</a>
</body>
</html>