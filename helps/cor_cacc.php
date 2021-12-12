<?php 
  $title = "Редакт";
  $post_title = "Управление редакторами"; 
  $urlpos = '?pos=1&dir=cacc';
  $directoryURI = $_GET['dir'];
  $path = parse_url($directoryURI, PHP_URL_PATH);
  $components = explode('$urlpos', $path);
  $first_part = $components[0];
 ?>
<!DOCTYPE html>
<html lang="ru">
 <?php include 'block/h/head.php';?>
<body>
  <style>
    .fas {
    	margin-top: 190%;
    }
    .tabs_container {
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        width: 100%;
        flex-wrap: wrap;
    }
    .hide, .tab_content {
        display:none;
    }
    .hide + label {
        border: 1px solid grey;
        border-radius:5px 5px 0 0;
        padding:0.25em 1em;
        display:inline-block;
        background-color:grey; 
        color :#fff;
        order:0;
        margin:0 5px -1px 0;
    }
    .hide:checked + label {
        background-color :#fff;
        color:#000;
        border-bottom-color:#fff;
        z-index:1;
    }
    .tab_content {
        border: 1px solid grey;
        width:100%;
        padding:5px;
    }
    .hide:checked + label + .tab_content {
        display:block;
        order:1;
    }
  </style>
	<div class="container_fluid">
		<div class="row">
			<?php include 'block/h/nav.php'?>
        </div>
    </div>
    <div class="wrapper">
      <div class="container">
          <div class="tabs_container">
            <form action="" method="post">
  <div  class="qwe">
    <b><i style="color: green; margin-left: 5px;">Добавление</i></b><br>
    <span>Права: red, sel, cacc</span><br>
    <input id="line_block" type="text" name="login" placeholder="Введите логин" class="form-control" style="width: 235px;">
    <input id="line_block" type="text" name="pass" placeholder="Введите пароль" class="form-control" style="width: 235px;">
    <input id="line_block" type="text" name="name" placeholder="Введите имя" class="form-control" style="width: 235px;">
    <input id="line_block" type="text" name="perms" placeholder="Введите права" class="form-control" style="width: 235px;">
    <input id="line_block" type="submit" name="createAcc" value="Добавить" style="margin-left: 5px;" class="btn btn-success"><br><br> 
    </div>
    <style>
    	#line_block {
    		margin-bottom: 10px;
    	}
    </style>
  </form>
  <form action="" method="post">
    <div class="qwe">
    <b><i style="color: #2980b9"><span style="margin-left: 5px;">Редактирование/изменение</span></i></b><br>
    <b><i style="color: red; margin-left: 5px;">Изменяйте всё по очереди, всё сразу нельзя!<br> <span style="margin-left: 5px;">P.S Если нужны какие-то значения, то  возьмите</span> <br><span style="margin-left: 5px;"> их из базы данных ниже или из других источников</span></i></b><br>
       <p><select name="select_nncor" style="height: 30px; margin-left: 4px; margin-top: 6px; margin-bottom: 0px;">
    <option selected disabled>Выберите, у кого будем менять</option>
         <?php
     
     $mysqli = new mysqli ('localhost', 'cg47894_mainbd', '12345', 'cg47894_mainbd');
	$mysqli->query ("SET NAMES 'utf8'");
      
      function printNickCor($result_set) {
     	 while (($row = $result_set->fetch_assoc()) !=false) {
    echo '<option value="'.$row['username'].'">'.$row['username'].'</option>';
		  }
	}   
      
      $result_set =  $mysqli->query ("SELECT * FROM `users` WHERE `username`!= 'Vampic' AND `username` != 'illuminatus' ORDER BY `username` ASC");
  	printNickCor($result_set);
 	$mysqli->close ();
    ?>
   </select></p>
   
      <input id="line_block" type="text" name="login_cor" placeholder="Введите логин для замены" class="form-control" style="width: 260px;"> 
   	  <input id="line_block" type="text" name="pass_cor" placeholder="Введите пароль для замены" class="form-control" style="width: 260px;">
      <input id="line_block" type="text" name="perms_cor" placeholder="Введите права для замены" class="form-control" style="width: 260px;"> 
      <p style="color: red;">* Если меняете теги, то сначала пишите те,<br> которые уже есть(если они есть),<br> а потом только добавляйте свои!!</p>
      <p><select name="select_ch" style="height: 30px; margin-left: 4px; margin-top: 3px;">
    <option selected>Выберите, что менять</option>
    <option value="Логин">Логин</option>
    <option value="Пароль">Пароль</option>
    <option  value="Права">Права</option>
   </select></p>
      <input id="line_block" type="submit" name="editAcc" value="Изменить" style="margin-left: 3px; margin-top: 2px;" class="btn btn-success">
      <br><br>
   </div>
 </form>
        
        <form action="" method="post">
    <div class="qwe">
    <b><i style="color: #c0392b; margin-left: 5px;">Удаление</i></b><br>
    <p><select name="sel_del_nn" style="height: 30px; margin-left: 4px; margin-top: 6px; margin-bottom: 0px;">
    <option selected disabled>Выберите, кого будем удалять</option>
         <?php
     
     $mysqli = new mysqli ('localhost', 'cg47894_mainbd', '12345', 'cg47894_mainbd');
	$mysqli->query ("SET NAMES 'utf8'");
    
      function printNickDel($result_set) {
     	 while (($row = $result_set->fetch_assoc()) !=false) {
    echo '<option value="'.$row['username'].'">'.$row['username'].' : '.$row['name'].'</option>';
		  }
	}   
      
    $result_set =  $mysqli->query ("SELECT * FROM `users` WHERE `username`!= 'Vampic' AND `username` != 'illuminatus' ORDER BY `username` ASC");
  	printNickDel($result_set);
 	$mysqli->close ();
    ?>
   </select></p>
    <input type="submit" name="deleteAcc" value="Удалить его" style="margin-left: 5px;" class="btn btn-success"><br><br>
  </div></form>
            </div>
    </div>
</div>  
   
<div class="qwed">
<?php

$mysqli = new mysqli ('localhost', 'cg47894_mainbd', '12345', 'cg47894_mainbd');
$mysqli->query ("SET NAMES 'utf8'");
  
  if (!empty($_GET['go_red'])) {
  $un = $_GET['go_red'];
  $name_res = $mysqli->query ("SELECT * FROM `users` WHERE `username` = '$un'");
     getName ($name_res);
  }
  
  if (isset($_POST['editAcc'])) {
    	$sel_ch = $_POST['select_ch'];
    	$nick_ins = $_POST['select_nncor'];
   		$login_cor = $_POST['login_cor'];
        $pass_cor = $_POST['pass_cor'];
        $perms_cor = $_POST['perms_cor'];
    $login_cor = htmlspecialchars($login_cor);
        $login_cor = trim($login_cor);
    $pass_cor = htmlspecialchars($pass_cor);
        $pass_cor = trim($pass_cor);
    $pass_cor = md5($pass_cor);
    $perms_cor = htmlspecialchars($perms_cor);
        $perms_cor = trim($perms_cor); 
    
    if ($sel_ch == "Логин") {
    	$cor = $mysqli->query ("UPDATE `users` SET `username` = '$login_cor' WHERE `users`.`username` = '$nick_ins'");   
    }
    if ($sel_ch == "Пароль") {
    	$cor = $mysqli->query ("UPDATE `users` SET `password` = '$pass_cor' WHERE `users`.`username` = '$nick_ins'");
    }
    if ($sel_ch == "Права") {
    	$cor = $mysqli->query ("UPDATE `users` SET `type` = '$perms_cor' WHERE `users`.`username` = '$nick_ins'");
    }
     if ($cor != false) {
    	if ($sel_ch == "Логин") {
        	echo "<span style = 'color: lime; text-align: center;'><h4>Логин обновлён</h4></span>";
          header("Refresh:5");
        }
       else if ($sel_ch == "Пароль") {
        	echo "<span style = 'color: lime; text-align: center;'><h4>Пароль обновлён</h4></span>";
         header("Refresh:5");
        }
      else if ($sel_ch == "Права") {
        	echo "<span style = 'color: lime; text-align: center;'><h4>Права обновлены</h4></span>";
        header("Refresh:5");
        } else {
      	 echo "<span style = 'color: red; text-align: center;'><h4>Произошла ошибка, не обновлено.Напишите <a href = 'http://vk.com/vampical'>Але</a></h4></span>";
      }
    }
  }
  
  function getName ($name_res) {
        	while (($ggn = $name_res->fetch_assoc()) != false) {
            	echo "<br><br><br>Приветствую вас, ".$ggn['name'];
            }
        }
  
  if(isset($_POST['createAcc'])) {
        $perms = $_POST['perms'];
        $name = $_POST['name'];
        $login = $_POST['login'];
        $pass = $_POST['pass'];
        $perms = htmlspecialchars($perms);
        $perms = trim($perms); 
    	$name = htmlspecialchars($name);
        $name = trim($name); 
    	$login = htmlspecialchars($login);
        $login = trim($login); 
   		$pass = htmlspecialchars($pass);
        $pass = trim($pass); 
       	$pass = md5($pass);
           if (empty($login)) {
             echo "<span style = 'color: red; text-align: center;'><h4>Вы не ввели логин</h4></span>";
           } else if (empty($name)) {
             echo "<span style = 'color: red; text-align: center;'><h4>Вы не ввели имя</h4></span>";
           } else if (empty($pass)) {
             echo "<span style = 'color: red; text-align: center;'><h4>Вы не ввели пароль</h4></span>";
           } else {
          $added = $mysqli->query ("INSERT INTO `users` (`id`, `username`,`password`,`name`,`type`) VALUES (NULL, '$login','$pass','$name','$perms')");
           }
    if ($added != false) {
          echo "<span style = 'color: lime; text-align: center;'><h3>Редактор добавлен</h3></span>";
      header("Refresh:5");
        } else {
          echo "<span style = 'color: red; text-align: center;'><h4>Произошла ошибка, пользователь не добавлен.Напишите <a href = 'http://vk.com/vampical'>Але</a></h4></span>";	
        }  
    }
  
      if (isset($_POST['deleteAcc'])) {
        $delnick = $_POST['sel_del_nn'];
        $deleted = $mysqli->query ("DELETE FROM `users` WHERE `users`.`username` = '$delnick'");
       if ($deleted != false) {
         echo "<span style = 'color: lime; text-align: center;'><h4>Редактор удалён</h4></span>";
         header("Refresh:5");
       }
      }
 

$mysqli->close ();

?>
            
          </div>

      <div class="clear"></div>
    </div>
      <!-- Initialize the plugin: -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#example-getting-started').multiselect();
    });
</script>
    <?php include ("block/h/footer.php");?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="boot/bootstrap.min.js"></script>
      <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js"></script>
      <link src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js.map"></script> -->
      
      
  </body>
</html>
