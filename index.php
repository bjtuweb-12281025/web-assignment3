<html>
<head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
</head>
<body>
  <?php
    if (!$_COOKIE["mycookie_name"]) {
      ?>
  <form action="login.php" method="post">
    Name : <input type="text" name="name"/>
    Password : <input type="password" name="password"/>
    <input type="submit" value="确定"/>	
  </form>
  </br><a href="register.php">注册</a>
<?php } else { ?>
  You already logged in. <a href="logout.php">logout</a>
<?php } ?>
</body>
</html>
