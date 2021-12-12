<?php 
	$title = 'Регистрация';
?>
<!DOCTYPE html>
<html lang="ru">
 <?php include 'block/head.php';?>
<body>

  <div class="container">
  	<div class="row">
      <div class="reg-bg" style="display: center; text-align: center;">
      	<form action="" method="post">
          	<label style="display: center;">Логин</label><br>
        	<input type="text" name="username-red"><br>
            <label style="display: center;">Пароль</label><br>
        	<input type="text" name="password-red"><br>
            <label style="display: center;">Имя</label><br>
        	<input type="text" name="name-red"><br>
          	<input type="submit" value="Зарегистрировать" name='reg-req'>
        </form>
        
      </div>
    </div>
  </div>
  <?php
     $mysqli = new mysqli ('localhost', 'cg47894_mainbd', '12345', 'cg47894_mainbd');
	$mysqli->query ("SET NAMES 'utf8'"); /*
  var_dump($mysqli);
  if ($mysqli != false) {
     echo "<br>Success connect";
    } else {
     echo '<br>Failure connect';
    }
    */
  if (isset($_POST['reg-req'])) {
   $username = $_POST['username-red'];
    $password = $_POST['password-red'];
    $name = $_POST['name-red'];
    $username = htmlspecialchars($username);
    $password = htmlspecialchars($password);
    $name = htmlspecialchars($name);
    $username = trim($username);
    $password = trim($password);
    $name = trim($name);
    $pass = md5($password);
    if (!empty($username) && !empty($password) && !empty($name)) {
      $reg_req = $mysqli->query ("INSERT INTO `users` (`id`, `username`, `password`, `name`) VALUES (NULL, '$username', '$pass', '$name')");
      if ($reg_req != false) {
     /* echo '<a href="https://adminstaff.ru/testsBD/log.php"><button class="btn btn-login" style="margin: 5px;">Вход</button></a>'; */
        echo "Благодарим за регистрацию, ожидайте дальнейших просьб, всего доброго)";
      } else {
      	echo "<h1>Ошибка</h1>";
      }
     } else {
    	echo "<h1>Ошибка</h1>";
     }
    }
     
 	$mysqli->close ();
    ?>	
<div class="clear"></div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="boot/bootstrap.min.js"></script>
  </body>
</html>