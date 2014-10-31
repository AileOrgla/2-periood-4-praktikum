<?php if(isset($_POST["submit"])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $message = "Vormis esines vigu!";
  } 
  else {$message = "Palun logi sisse!";
  }
?>

<!DOCTYPE HTML>
<html>
   <head>
     <title>Harjutus4-Periood-2</title>
	 <meta charset="UTF-8">
	 <link rel="stylesheet" type="text/css" href="style.css">
	 </head>
   <body>
    <h2><?php echo $message ;?></h2>
      <form method="post">
         <span>Username</span><input type="text" name="username" value="<?php if (isset($_POST["submit"])){
      $username = $_POST['username'];echo $username;}?>"><br>
         <span>Password</span><input type="password" name="password"><br>
         <input type="submit" value="Saada" name="submit">
      </form>
   </body>

</html>