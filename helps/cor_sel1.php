<?php 
  $title = "Редакт";
  $post_title = "Редактирование Sellers Donate"; 
  $urlpos = '?pos=2&dir=cor';
  $directoryURI = $_GET['dir'];
  $path = parse_url($directoryURI, PHP_URL_PATH);
  $components = explode('$urlpos', $path);
  $first_part = $components[0];
  $seller = $_GET['go_sel'];
 ?>
<!DOCTYPE html>
<html lang="ru">
 <?php include 'block/h/head.php';?>
<body>
  <style>
    .fas {
    	margin-top: 190%;
    }
  </style>
	<div class="container_fluid">
		<div class="row">
			<?php include 'block/h/nav_sel.php'?>
        </div>
    </div>
    <div class="wrapper">

      <div class="container">
        <h3 style="color: gray;"><b>Редакторами являются:</b></h3>
              <div class="panel panel-info">
                <div class="panel-heading"><div class="sidebar-header">Иван Сорокин</div></div>
                <div class="panel-body">
                    <p><span>Главный создатель сайта: mr_Magistr</span></p>
                    <br>
                    <li>Всё создал и благодоря ему, сейчас есть данный сайт</li>
                    <br>
                     <a href="hhttps://vk.com/id95515793"class="button9 btn btn-default" aria-label="Left Align">
                      ВК
                    </a>
                </div>
              </div>
              
          
<form action="" method="post">
  <h3 style="text-align: center;">Редактирование БД</h3>
  <div  class="qwe">
  
    <b><i style="color: green; margin-left: 5px;">Добавление</i></b><br>
    
    <p><select name="sel_add__donate" style="height: 30px; margin-left: 4px; margin-top: 3px;">
    <option selected disabled>Выберите, кого будем добавлять</option>
    <option value="СМодер">СМодера</option>
    <option value="Администратор">Администратора</option>
    <option value="Ст.Администратор">Ст.Администратора</option>
    <option value="Гл.Администратор">Гл.Администратора</option>
    <option value="Основатель">Основателя</option>
    <option value="СоВладелец">СоВладельца</option>
    <option value="Владелец">Владельца</option>
    <option value="Президент">Президента</option>
    <option value="Глава сервера">Главу</option>
    <option value="Спонсор">Спонсора</option>
    <option value="OP">OP</option>
   </select></p>
    
    <input id="line_block" type="text" name="nick" placeholder="Введите ник" class="form-control" style="width: 235px;">
    
    <input id="line_block" type="text" name="vk_link" placeholder="Введите ссылку на ВК" class="form-control" style="width: 235px;">
    <input id="line_block" type="text" name="vk_name" placeholder="Введите имя ВК" class="form-control" style="width: 235px;">
    <input id="line_block" type="submit" name="addnew" value="Добавить" style="margin-left: 5px;" class="btn btn-success"><br><br> 
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
    echo '<option value="'.$row['nickname'].'">'.$row['nickname'].'</option>';
		  }
	}   
      
      $result_set =  $mysqli->query ("SELECT * FROM `buyers` WHERE `seller` = '$seller'");
  	printNickCor($result_set);
 	$mysqli->close (); 
    ?>
   </select></p>
      
      <p><select name="sel_red__donate" style="height: 30px; margin-left: 4px; margin-top: 3px;">
    <option selected disabled>Выберите, на кого будем менять</option>
    <option value="СМодер">СМодера</option>
    <option value="Администратор">Администратора</option>
    <option value="Ст.Администратор">Ст.Администратора</option>
    <option value="Гл.Администратор">Гл.Администратора</option>
    <option value="Основатель">Основателя</option>
    <option value="СоВладелец">СоВладельца</option>
    <option value="Владелец">Владельца</option>
    <option value="Президент">Президента</option>
    <option value="Глава сервера">Главу</option>
    <option value="Спонсор">Спонсора</option>
    <option value="OP">OP</option>
   </select></p>
   
    <input id="line_block" type="text" name="vk_link_cor" placeholder="Введите ссылку ВК для замены" style="width: 240px; ;" class="form-control">
      
    <input id="line_block" type="text" name="vk_name_cor" placeholder="Введите имя ВК для замены" style="width: 220px;" class="form-control">
      <p><select name="select_ch" style="height: 30px; margin-left: 4px; margin-top: 3px;">
    <option selected>Выберите, что менять</option>
    <option value="Донат">Донат</option>
    <option value="Имя ВК">Имя ВК</option>
    <option value="Ссылка ВК">Ссылку ВК</option>
   </select></p>
      <input id="line_block" type="submit" name="cor_sel" value="Изменить" style="margin-left: 3px; margin-top: 2px;" class="btn btn-success">
      <br><br>
   </div>
 </form>
        
 <form action="" method="post">
    <div class="qwe">
    <b><i style="color: #c0392b; margin-left: 5px;">Удаление</i></b><br>
    <p><select name="sel_del_nn" style="height: 30px; margin-left: 4px; margin-top: 6px; margin-bottom: 0px;">
    <option selected disabled>Выберите, кого будем удалять</option> -->
    
         <?php
     
     $mysqli = new mysqli ('localhost', 'cg47894_mainbd', '12345', 'cg47894_mainbd');
	$mysqli->query ("SET NAMES 'utf8'");
    
      function printNickDel($result_set) {
     	 while (($row = $result_set->fetch_assoc()) !=false) {
    echo '<option value="'.$row['nickname'].'">'.$row['nickname'].' : '.$row['donate'].'</option>';
		  }
	}   
      
    $result_set =  $mysqli->query ("SELECT * FROM `buyers` WHERE `seller` = '$seller'");
  	printNickDel($result_set);
 	$mysqli->close ();
    ?>
   </select></p>
    <input type="submit" name="delete" value="Удалить его" style="margin-left: 5px;" class="btn btn-success"><br><br>
  </div>

<div class="qwed">
<?php

$mysqli = new mysqli ('localhost', 'cg47894_mainbd', '12345', 'cg47894_mainbd');
$mysqli->query ("SET NAMES 'utf8'");
  
  if (!empty($_GET['go_sel'])) {
  $un = $_GET['go_sel'];
  $name_res = $mysqli->query ("SELECT * FROM `users` WHERE `username` = '$un'");
     getName ($name_res);
  }
  if (isset($_POST['cor_sel'])) {
    	$sel_ch = $_POST['select_ch'];
   		$nick_ins = $_POST['select_nncor'];
        $vk_link_co = $_POST['vk_link_cor'];
        $vk_name_co = $_POST['vk_name_cor'];
    	$donate_co = $_POST['sel_red__donate'];
    $nick_ins = htmlspecialchars($nick_ins);
        $nick_ins = trim($nick_ins); 
    $vk_link_co = htmlspecialchars($vk_link_co);
        $vk_link_co = trim($vk_link_co); 
    $vk_name_co = htmlspecialchars($vk_name_co);
        $vk_name_co = trim($vk_name_co);
    
    
    if ($sel_ch == "Ссылка ВК") {
    	$cor = $mysqli->query ("UPDATE `buyers` SET `vk_link` = '$vk_link_co' WHERE `buyers`.`nickname` = '$nick_ins'");
    }
    if ($sel_ch == "Имя ВК") {
    	$cor = $mysqli->query ("UPDATE `buyers` SET `vk_name` = '$vk_name_co' WHERE `buyers`.`nickname` = '$nick_ins'");
    }
    if ($sel_ch == "Донат") {
    	$cor = $mysqli->query ("UPDATE `buyers` SET `donate` = '$donate_co' WHERE `buyers`.`nickname` = '$nick_ins'");
    }
    
     if ($cor != false) {
      if ($sel_ch == "Имя ВК") {
        	echo "<span style = 'color: lime; text-align: center;'><h4>Имя в ВК обновлено</h4></span>";
        }
     else if ($sel_ch == "Ссылка ВК") {
        	echo "<span style = 'color: lime; text-align: center;'><h4>Ссылка в ВК обновлена</h4></span>";
        } else if ($sel_ch == "Донат") {
        	echo "<span style = 'color: lime; text-align: center;'><h4>Донат обновлён</h4></span>";
        }
    }
  }
  
  function getName ($name_res) {
        	while (($ggn = $name_res->fetch_assoc()) != false) {
            	echo "<br><br><br><span style='float: right; margin-right: 50px;'>Приветствую вас, ".$ggn['name']."</span>";
            }
        }
  
  if(isset($_POST['addnew']))
{
        $nick = $_POST['nick'];
        $vk_name = $_POST['vk_name'];
        $vk_link = $_POST['vk_link'];
    	$donate = $_POST['sel_add__donate'];
        $nick = htmlspecialchars($nick);
        $nick = trim($nick); 
        $vk_name = htmlspecialchars($vk_name);
        $vk_name = trim($vk_name);
			
          $added = $mysqli->query ("INSERT INTO `buyers` (`id`,`nickname`,`vk_name`, `vk_link`,`donate`,`seller`,`statue`,`maps`,`kits`) VALUES (NULL,'$nick','$vk_name','$vk_link', '$donate', '$seller','0','0','0')");
    
        if ($added != false) {
          echo "<span style = 'color: lime; text-align: center;'><h3>Пользователь добавлен</h3></span>";
        } else {
          echo "<span style = 'color: red; text-align: center;'><h4>Произошла ошибка, пользователь не добавлен.Напишите <a href = 'http://vk.com/vampical'>Але</a></h4></span>";
        }
      }

      if (isset($_POST['delete'])) {
        $delnick = $_POST['sel_del_nn'];
        $deleted = $mysqli->query ("DELETE FROM `buyers` WHERE `buyers`.`nickname` = '$delnick'");
       if ($deleted != false) {
         echo "<span style = 'color: lime; text-align: center;'><h4>Пользователь удалён</h4></span>";
       }
      }

echo "<br><br><span style='float: right;'>Сервисы для помощи: <br><a href='https://vk.com/app604480_525081588'>Перевод кастомных ссылок в вк на id</a></span>";
echo "<br><br><br><br><br><br><br><hr><br></div>";

	echo "<h2 class='text-center'>Ваши покупатели</h2>";
  
  function printYourBuyers ($get_buyers) {
  	while (($row = $get_buyers->fetch_assoc()) !=false ) {
    	echo "<li><a href='".$row['vk_link']."'>".$row['vk_name']."</a> - ".$row['nickname']."<b><span style='color: red;'>『</span></b><i><span style='color: #3333CC'>".$row['donate']."</span></i><b><span style='color: red;'>』</span></b></li>";
    }
  }
  $get_buyers = $mysqli->query ("SELECT * FROM `buyers` WHERE `seller` = '$seller'");
  echo "<div class='prokrutka'><ol>";
  printYourBuyers ($get_buyers);
  echo "</ol></div>";
$mysqli->close ();

?>
            
          </div>
    </div>
      <div class="clear"></div>
    </div>
    <?php include ("block/h/footer.php");?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="boot/bootstrap.min.js"></script>
  </body>
</html>