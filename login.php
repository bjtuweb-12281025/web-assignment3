<?php
$username = $_POST["name"];
$password = $_POST["password"];
$count = $_COOKIE["count"] ? $_COOKIE["count"] : 0;

// do authentication here

setcookie("mycookie_name", $username);
setcookie("count", ++$count);

?>
<html>
<head>
 <meta charset="UTF-8">
</head>
<body>
<?php
	$con = mysql_connect("localhost","root","123456");
	if (!$con)
	{
	die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("dbnew", $con);


	$result = mysql_query("SELECT * FROM test
	WHERE name='$username'");
    $row = mysql_fetch_array($result);
	if(!$row)
	{
		echo "用户不存在";
	}
	while($row)
	{
		
		if($row['password'] =='$password')
		{
			echo "Welcome " .$row['name'] ."!";
			echo "<br />";
			echo "You have visited the site " .$count ." times";
			echo "<br />";
		}
		else
		{
			echo "密码不正确";
		}
		$row = mysql_fetch_array($result);
    }
?>

<a href="index.php">return</a>
</body>
</html>
