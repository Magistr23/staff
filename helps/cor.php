<?php 
  $title = "Редакт";
  $post_title = "Редактирование"; 
  $urlpos = '?pos=1&dir=correct';
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
          <div class="tabs_container">
    <input class="hide" type="radio" name="tabs" id="tab1" checked/>
    <label for="tab1">Java Edition(PC)</label>
    <div class="tab_content" id="tab_content_1">
            <form action="" method="post">
  <h3 style="text-align: center;">Редактирование БД</h3>
  <div  class="qwe">
    
    <b><i style="color: green; margin-left: 5px;">Добавление</i></b><br>
    <p><select name="sel_add__pos1" style="height: 30px; margin-left: 4px; margin-top: 3px;">
    <option selected disabled>Выберите, кого будем добавлять</option>
    <option value="Helper">Хелпера</option>
    <option value="Moder">Модера</option>
    <option value="St.Moder">Ст.Модера</option>
    <option value="Gl.Moder">Гл.Модера</option>
    <option value="Admin">Админа</option>
    <option value="St.Admin">Ст.Админа</option>
    <option value="Gl.Admin">Гл.Админа</option>
    <option value="Owner">Овнера</option>
    <option value="Honours">Почетного Админа</option>
   </select></p>
    
    <p><select name="sel_add__pos2" style="height: 30px; margin-left: 4px; margin-top: 3px;">
    <option selected disabled>Выберите, кого будем добавлять</option>
    <option value="Builder">Билдера</option>
    <option value="Builder:PE">Билдера на ПЕ</option>
    <option value="Gl.Builder">Гл.Билдера</option>
   </select></p>
    
    <p><select name="sel_add__pos3" style="height: 30px; margin-left: 4px; margin-top: 3px;">
    <option selected disabled>Выберите, кого будем добавлять</option>
    <option value="Seller">Продавца</option>
    <option value="Site">Редактора</option>
   </select></p>
    
    <p><select name="sel_add__pos4" style="height: 30px; margin-left: 4px; margin-top: 3px;">
    <option selected disabled>Выберите, кого будем добавлять</option>
    <option value="RP">RP</option>
   </select></p>
    
    <input id="line_block" type="text" name="nick" placeholder="Введите ник" class="form-control" style="width: 235px;">
    <input id="line_block" type="text" name="comm" placeholder="Введите комментарий" class="form-control" style="width: 235px;">
    <input id="line_block" type="text" name="tags" placeholder="Введите теги" class="form-control" style="width: 235px;">
    <input id="line_block" type="text" name="vk_link" placeholder="Введите ссылку на ВК" class="form-control" style="width: 235px;">
    <input id="line_block" type="text" name="vk_name" placeholder="Введите имя ВК" class="form-control" style="width: 235px;">
    <input id="line_block" type="text" name="img_adding" placeholder="Введите URL ссылку на картинку" class="form-control" style="width: 235px;">
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
      
      $result_set =  $mysqli->query ("SELECT * FROM `members` ORDER BY `nickname` ASC");
  	printNickCor($result_set);
 	$mysqli->close ();
    ?>
   </select></p>
      
      <p><select name="sel_red__pos1" style="height: 30px; margin-left: 4px; margin-top: 3px;">
    <option selected disabled>Выберите, на кого будем менять</option>
    <option value="Helper">Хелпера</option>
    <option value="Moder">Модера</option>
    <option value="St.Moder">Ст.Модера</option>
    <option value="Gl.Moder">Гл.Модера</option>
    <option value="Admin">Админа</option>
    <option value="St.Admin">Ст.Админа</option>
    <option value="Gl.Admin">Гл.Админа</option>
    <option value="Owner">Овнера</option>
    <option value="Honours">Почетного Админа</option>
   </select></p>
    
    <p><select name="sel_red__pos2" style="height: 30px; margin-left: 4px; margin-top: 3px;">
    <option selected disabled>Выберите, на кого будем менять</option>
    <option value="Builder">Билдера</option>
    <option value="Builder:PE">Билдера на ПЕ</option>
    <option value="Gl.Builder">Гл.Билдера</option>
   </select></p>
    
    <p><select name="sel_red__pos3" style="height: 30px; margin-left: 4px; margin-top: 3px;">
    <option selected disabled>Выберите, на кого будем менять</option>
    <option value="Seller">Продавца</option>
    <option value="Site">Редактора</option>
   </select></p>
    
    <p><select name="sel_red__pos4" style="height: 30px; margin-left: 4px; margin-top: 3px;">
    <option selected disabled>Выберите, на кого будем менять</option>
    <option value="RP">RP</option>
   </select></p>
      <input id="line_block" type="text" name="nickname_cor_rep" placeholder="Введите никнейм для замены" class="form-control" style="width: 260px;"> 
    <input id="line_block" type="text" name="comment_cor" placeholder="Введите комментарий для замены" class="form-control" style="width: 260px;"> 
      <input id="line_block" type="text" name="img" placeholder="Введите URL картинки для замены" class="form-control" style="width: 260px;">
    <input id="line_block" type="text" name="vk_link_cor" placeholder="Введите ссылку ВК для замены" style="width: 240px; ;" class="form-control">
      
    <input id="line_block" type="text" name="vk_name_cor" placeholder="Введите имя ВК для замены" style="width: 220px;" class="form-control">
      <input id="line_block" type="text" name="tag_cor" placeholder="Введите теги для замены" style="width: 210px;" class="form-control">
      <p style="color: red;">* Если меняете теги, то сначала пишите те,<br> которые уже есть(если они есть),<br> а потом только добавляйте свои!!</p>
      <p><select name="select_ch" style="height: 30px; margin-left: 4px; margin-top: 3px;">
    <option selected>Выберите, что менять</option>
    <option value="Ник">Ник</option>
    <option value="Имя ВК">Имя ВК</option>
    <option  value="Ссылка ВК">Ссылку ВК</option>
    <option value="Комментарий">Комментарий</option>
    <option value="Должность 1">Должность 1</option>
    <option value="Должность 2">Должность 2</option>
    <option value="Должность 3">Должность 3</option>
    <option value="Должность 4">Должность 4</option>
    <option value="Картинка">Картинку</option>
    <option value="Теги">Теги</option>
   </select></p>
      <input id="line_block" type="submit" name="cor_sel" value="Изменить" style="margin-left: 3px; margin-top: 2px;" class="btn btn-success">
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
    echo '<option value="'.$row['nickname'].'">'.$row['nickname'].' : '.$row['pos1'].''.$row['pos4'].'</option>';
		  }
	}   
      
    $result_set =  $mysqli->query ("SELECT * FROM `members` ORDER BY `nickname` ASC");
  	printNickDel($result_set);
 	$mysqli->close ();
    ?>
   </select></p>
    <input type="submit" name="delete" value="Удалить его" style="margin-left: 5px;" class="btn btn-success"><br><br>
  </div><div class="qwe">
    <form action="" method="post">
    <h3 style="margin-left: 5px; color: blue;">Поиск по базе данных</h3>
    <input id="line_block" type="text" name="search" placeholder="Введите данные для поиска" style="width: 203px" class="form-control">
    <input type="submit" name="sear" value="Поиск" class="btn btn-success" style="margin-left: 5px;"><br>
</form>  
</div></form>
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
  
  if (isset($_POST['cor_sel'])) {
    	$nickname_co_rep = $_POST['nickname_cor_rep'];
    	$sel_ch = $_POST['select_ch'];
   		$nick_ins = $_POST['select_nncor'];
        $pos1_co = $_POST['sel_red__pos1'];
        $pos2_co = $_POST['sel_red__pos2'];
        $pos3_co = $_POST['sel_red__pos3'];
        $pos4_co = $_POST['sel_red__pos4'];
        $comment_co = $_POST['comment_cor'];
        $vk_link_co = $_POST['vk_link_cor'];
        $vk_name_co = $_POST['vk_name_cor'];
  	 	$img_link_co = $_POST['img'];
    	$tag_co = $_POST['tag_cor'];
    $nick_ins = htmlspecialchars($nick_ins);
        $nick_ins = trim($nick_ins);
    $nickname_co_rep = htmlspecialchars($nickname_co_rep);
        $nickname_co_rep = trim($nickname_co_rep);
    $pos1_co = htmlspecialchars($pos1_co);
        $pos1_co = trim($pos1_co); 
    $pos2_co = htmlspecialchars($pos2_co);
        $pos2_co = trim($pos2_co); 
    $pos3_co = htmlspecialchars($pos3_co);
        $pos3_co = trim($pos3_co); 
    $pos4_co = htmlspecialchars($pos4_co);
        $pos4_co = trim($pos4_co); 
    $comment_co = htmlspecialchars($comment_co);
        $comment_co = trim($comment_co); 
    $vk_link_co = htmlspecialchars($vk_link_co);
        $vk_link_co = trim($vk_link_co); 
    $vk_name_co = htmlspecialchars($vk_name_co);
        $vk_name_co = trim($vk_name_co); 
    $vk_link_co = htmlspecialchars($vk_link_co);
        $vk_link_co = trim($vk_link_co); 
    $tag_co = htmlspecialchars($tag_co);
        $tag_co = trim($tag_co); 
    
    if ($sel_ch == "Ник") {
    	$cor = $mysqli->query ("UPDATE `members` SET `nickname` = '$nickname_co_rep' WHERE `members`.`nickname` = '$nick_ins'");   
    }
    if ($sel_ch == "Комментарий") {
    	$cor = $mysqli->query ("UPDATE `members` SET `comment` = '$comment_co' WHERE `members`.`nickname` = '$nick_ins'");
    }
    if ($sel_ch == "Должность 1") {
    	$cor = $mysqli->query ("UPDATE `members` SET `pos1` = '$pos1_co' WHERE `members`.`nickname` = '$nick_ins'");
    }
    if ($sel_ch == "Должность 2") {
    	$cor = $mysqli->query ("UPDATE `members` SET `pos2` = '$pos2_co' WHERE `members`.`nickname` = '$nick_ins'");
    }
    if ($sel_ch == "Должность 3") {
    	$cor = $mysqli->query ("UPDATE `members` SET `pos3` = '$pos3_co' WHERE `members`.`nickname` = '$nick_ins'");
    }
    if ($sel_ch == "Должность 4") {
    	$cor = $mysqli->query ("UPDATE `members` SET `pos4` = '$pos4_co' WHERE `members`.`nickname` = '$nick_ins'");
    }
    if ($sel_ch == "Ссылка ВК") {
    	$cor = $mysqli->query ("UPDATE `members` SET `vk_link` = '$vk_link_co' WHERE `members`.`nickname` = '$nick_ins'");
    }
    if ($sel_ch == "Имя ВК") {
    	$cor = $mysqli->query ("UPDATE `members` SET `vk_name` = '$vk_name_co' WHERE `members`.`nickname` = '$nick_ins'");
    }
    if ($sel_ch == "Картинка") {
    	$cor = $mysqli->query ("UPDATE `members` SET `img_link` = '$img_link_co' WHERE `members`.`nickname` = '$nick_ins'");
    }
    if ($sel_ch == "Теги") {
    	$cor = $mysqli->query ("UPDATE `members` SET `tag` = '$tag_co' WHERE `members`.`nickname` = '$nick_ins'");
    }
     if ($cor != false) {
    	if ($sel_ch == "Теги") {
        	echo "<span style = 'color: lime; text-align: center;'><h4>Теги обновлены</h4></span>";
        }
       else if ($sel_ch == "Ник") {
        	echo "<span style = 'color: lime; text-align: center;'><h4>Ник обновлён</h4></span>";
        }
      else if ($sel_ch == "Комментарий") {
        	echo "<span style = 'color: lime; text-align: center;'><h4>Комментарий обновлён</h4></span>";
        }
      else if ($sel_ch == "Имя ВК") {
        	echo "<span style = 'color: lime; text-align: center;'><h4>Имя в ВК обновлено</h4></span>";
        }
     else if ($sel_ch == "Ссылка ВК") {
        	echo "<span style = 'color: lime; text-align: center;'><h4>Ссылка в ВК обновлена</h4></span>";
        }
      else if ($sel_ch == "Должность 4") {
        	echo "<span style = 'color: lime; text-align: center;'><h4>Должность 4 обновлена</h4></span>";
        }
      else if ($sel_ch == "Должность 3") {
        	echo "<span style = 'color: lime; text-align: center;'><h4>Должность 3 обновлена</h4></span>";
        }
      else if ($sel_ch == "Должность 2") {
        	echo "<span style = 'color: lime; text-align: center;'><h4>Должность 2 обновлена</h4></span>";
        }
      else if ($sel_ch == "Должность 1") {
        	echo "<span style = 'color: lime; text-align: center;'><h4>Должность 1 обновлена</h4></span>";
        }
      else if ($sel_ch == "Картинка") {
        	echo "<span style = 'color: lime; text-align: center;'><h4>Картинка обновлена</h4></span>";
        } else {
      	 echo "<span style = 'color: red; text-align: center;'><h4>Произошла ошибка, картинка не обновлена.Напишите <a href = 'http://vk.com/vampical'>Але</a></h4></span>";
      }
    }
  }
  
  function getName ($name_res) {
        	while (($ggn = $name_res->fetch_assoc()) != false) {
            	echo "<br><br><br>Приветствую вас, ".$ggn['name'];
            }
        }
  
  if(isset($_POST['addnew']))
{
        $pos1 = $_POST['sel_add__pos1'];
        $pos2 = $_POST['sel_add__pos2'];
        $pos3 = $_POST['sel_add__pos3'];
        $pos4 = $_POST['sel_add__pos4'];
        $nick = $_POST['nick'];
        $comm = $_POST['comm'];
        $tag = $_POST['tags'];
        $vk_name = $_POST['vk_name'];
        $vk_link = $_POST['vk_link'];
        $img_adding = $_POST['img_adding'];
        $pos1 = htmlspecialchars($pos1);
        $pos1 = trim($pos1); 
    	$pos2 = htmlspecialchars($pos2);
        $pos2 = trim($pos2); 
    	$pos3 = htmlspecialchars($pos3);
        $pos3 = trim($pos3); 
   		$pos4 = htmlspecialchars($pos4);
        $pos4 = trim($pos4); 
        $nick = htmlspecialchars($nick);
        $nick = trim($nick); 
        $comm = htmlspecialchars($comm);
        $comm = trim($comm);
        $tag = htmlspecialchars($tag);
        $tag = trim($tag); 
        $vk_name = htmlspecialchars($vk_name);
        $vk_name = trim($vk_name);
        $img_adding = trim($img_adding);

    
    if (empty($img_adding)) {
          $img_adding = "https://pp.userapi.com/c853428/v853428441/57004/_-mCAWbrapY.jpg";
        }
           if (empty($nick)) {
           } else {
          $added = $mysqli->query ("INSERT INTO `members` (`id`, `pos1`,`pos2`,`pos3`,`pos4`, `nickname`,`vk_name`, `vk_link`, `comment`, `tag`, `img_link`) VALUES (NULL, '$pos1','$pos2','$pos3','$pos4', '$nick','$vk_name', '$vk_link', '$comm', '$tag', '$img_adding')");
           }
    if ($added != false) {
          echo "<span style = 'color: lime; text-align: center;'><h3>Пользователь добавлен</h3></span>";
        } else {
          echo "<span style = 'color: red; text-align: center;'><h4>Произошла ошибка, пользователь не добавлен.Напишите <a href = 'http://vk.com/vampical'>Але</a></h4></span>";	
        }
           
    }
      

      if (isset($_POST['delete'])) {
        $delnick = $_POST['sel_del_nn'];
        $deleted = $mysqli->query ("DELETE FROM `members` WHERE `members`.`nickname` = '$delnick'");
       if ($deleted != false) {
         echo "<span style = 'color: lime; text-align: center;'><h4>Пользователь удалён</h4></span>";
       }
      }

  function echoresearch($searched) {
        while (($coll = $searched->fetch_assoc()) != false) {
          if (empty($coll['comment'])) {
    		$coll['comment'] = 'Комментария нет';
    }
          echo "<figure><img src = '".$coll['img_link']."' width='100%' height='71%'>".$coll['pos1']." ".$coll['pos2']." ".$coll['pos3']." ".$coll['pos4']." - ".$coll['nickname']."<br> <span style = 'color: purple'>".$coll['comment']."</span><br> ВК: <a href = '".$coll['vk_link']."'><span style = 'color: orange'>".$coll['vk_name']."</span></a></figure>";
        }
      }
  //----------------------------------------PE----------------------------------Bedrock--------------------------------Edition-----------------------------------//
     
  
  if (isset($_POST['cor_sel_pe'])) {
    	$nickname_co_rep_pe = $_POST['nickname_cor_rep_pe'];
    	$sel_ch_pe = $_POST['select_ch_pe'];
   		$nick_ins_pe = $_POST['select_nncor_pe'];
        $pos_co_pe = $_POST['sel_red__pos_pe'];
        $vk_link_co_pe = $_POST['vk_link_cor_pe'];
        $vk_name_co_pe = $_POST['vk_name_cor_pe'];
  	 	$img_link_co_pe = $_POST['img_pe'];
    	$nick_ins_pe = htmlspecialchars($nick_ins_pe);
        $nick_ins_pe = trim($nick_ins_pe);
    	$nickname_co_rep_pe = htmlspecialchars($nickname_co_rep_pe);
        $nickname_co_rep_pe = trim($nickname_co_rep_pe);
    	$pos_co_pe = htmlspecialchars($pos_co_pe);
        $pos_co_pe = trim($pos_co_pe);
    	$vk_link_co_pe = htmlspecialchars($vk_link_co_pe);
        $vk_link_co_pe = trim($vk_link_co_pe); 
    	$vk_name_co_pe = htmlspecialchars($vk_name_co_pe);
        $vk_name_co_pe = trim($vk_name_co_pe); 
    	$vk_link_co_pe = htmlspecialchars($vk_link_co_pe);
        $vk_link_co_pe = trim($vk_link_co_pe); 
    
    if ($sel_ch_pe == "Ник") {
    	$cor_pe = $mysqli->query ("UPDATE `MCPEStaff` SET `nickname` = '$nickname_co_rep_pe' WHERE `MCPEStaff`.`nickname` = '$nick_ins_pe'");   
    }
    if ($sel_ch_pe == "Должность") {
    	$cor_pe = $mysqli->query ("UPDATE `MCPEStaff` SET `pos` = '$pos_co_pe' WHERE `MCPEStaff`.`nickname` = '$nick_ins_pe'");
    }
    if ($sel_ch_pe == "Ссылка ВК") {
    	$cor_pe = $mysqli->query ("UPDATE `MCPEStaff` SET `vk_link` = '$vk_link_co_pe' WHERE `MCPEStaff`.`nickname` = '$nick_ins_pe'");
    }
    if ($sel_ch_pe == "Имя ВК") {
    	$cor_pe = $mysqli->query ("UPDATE `MCPEStaff` SET `vk_name` = '$vk_name_co_pe' WHERE `MCPEStaff`.`nickname` = '$nick_ins_pe'");
    }
    if ($sel_ch_pe == "Картинка") {
    	$cor_pe = $mysqli->query ("UPDATE `MCPEStaff` SET `img_link` = '$img_link_co_pe' WHERE `MCPEStaff`.`nickname` = '$nick_ins_pe'");
    }
     if ($cor_pe != false) {
		if ($sel_ch_pe == "Ник") {
        	echo "<span style = 'color: lime; text-align: center;'><h4>Ник обновлён</h4></span>";
        }
      else if ($sel_ch_pe == "Имя ВК") {
        	echo "<span style = 'color: lime; text-align: center;'><h4>Имя в ВК обновлено</h4></span>";
        }
     else if ($sel_ch_pe == "Ссылка ВК") {
        	echo "<span style = 'color: lime; text-align: center;'><h4>Ссылка в ВК обновлена</h4></span>";
        }
      else if ($sel_ch_pe == "Должность") {
        	echo "<span style = 'color: lime; text-align: center;'><h4>Должность обновлена</h4></span>";
        } 
      else if ($sel_ch_pe == "Картинка") {
        	echo "<span style = 'color: lime; text-align: center;'><h4>Картинка обновлена</h4></span>";
        }
    } else {
     echo "<span style = 'color: red; text-align: center;'><h4>Произошла ошибка, информация PE не добавлен.Напишите <a href = 'http://vk.com/vampical'>Але</a></h4></span>";
     }
  }
  

  
  if(isset($_POST['addnew_pe']))
{
        $pos_pe = $_POST['sel_add__pos1_pe'];
        $nick_pe = $_POST['nick_pe'];
        $vk_name_pe = $_POST['vk_name_pe'];
        $vk_link_pe = $_POST['vk_link_pe'];
        $img_adding_pe = $_POST['img_adding_pe'];
        $pos_pe = htmlspecialchars($pos_pe);
        $pos_pe = trim($pos_pe); 
        $nick_pe = htmlspecialchars($nick_pe);
        $nick_pe = trim($nick_pe); 
        $vk_name_pe = htmlspecialchars($vk_name_pe);
        $vk_name_pe = trim($vk_name_pe);
    	$vk_link_pe = htmlspecialchars($vk_link_pe);
        $vk_link_pe = trim($vk_link_pe);
        $img_adding_pe = trim($img_adding_pe);
       
    if (empty($img_adding_pe)) {
          $img_adding_pe = "https://pp.userapi.com/c853428/v853428441/57004/_-mCAWbrapY.jpg";
        }
          $added_pe = $mysqli->query ("INSERT INTO `MCPEStaff` (`id`, `pos`, `nickname`,`vk_name`, `vk_link`, `img_link`) VALUES (NULL, '$pos_pe', '$nick_pe','$vk_name_pe', '$vk_link_pe', '$img_adding_pe')");
        if ($added_pe != false) {
          echo "<span style = 'color: lime; text-align: center;'><h3>Пользователь PE добавлен</h3></span>";
        } else {
          echo "<span style = 'color: red; text-align: center;'><h4>Произошла ошибка, пользователь PE не обновлена.Напишите <a href = 'http://vk.com/vampical'>Але</a></h4></span>";	
        }
    }  
  
        
      

      if (isset($_POST['delete_pe'])) {
        $delnick_pe = $_POST['sel_del_nn_pe'];
        $deleted_pe = $mysqli->query ("DELETE FROM `MCPEStaff` WHERE `MCPEStaff`.`nickname` = '$delnick_pe'");
       if ($deleted_pe != false) {
         echo "<span style = 'color: lime; text-align: center;'><h4>Пользователь PE удалён</h4></span>";
       } else {
     	 echo "<span style = 'color: red; text-align: center;'><h4>Пользователь PE не удалён</h4></span>";
       }
      }


echo "<br><br>Сервисы для помощи: <br><a href='https://vk.com/app604480_525081588'>Перевод кастомных ссылок в вк на id</a>";
echo "<br><br><br><br><br><br><br><hr><br></div>";

 if (isset($_POST['sear'])) {
    $search = $_POST['search'];
    $search = htmlspecialchars($search);
    echo "<br><br><br><br><br><h3 class='text-center'>Результат поиска: </h3>";
   echo "<div' class='row'> <div class='container'><div class='col-md-12'>";

    $searched = $mysqli->query ("SELECT * FROM `members` WHERE `pos1` LIKE '%$search%' OR `pos2` LIKE '%$search%' OR `pos3` LIKE '%$search%'  OR  `pos4` LIKE '%$search%' OR `nickname` LIKE '%$search%' OR `comment` LIKE '%$search%' OR `tag` LIKE '%$search%' OR `vk_name` LIKE '%$search%'");
     echoresearch($searched);
   echo "</div></div>";
  }

  
  

  
  
  
echo "<br><br><br><br><br><br>";
echo "<hr><h3 class='text-center'>Сама БД!</h3>";
  echo "<div class='bd_cor'>";


function printResult($result_set)
{
  while (($row = $result_set->fetch_assoc()) !=false) {
 
    echo "<figure><img src = '".$row['img_link']."' style= 'width: 100%; height: 77%;'><h5>".$row['pos1']." ".$row['pos2']." ".$row['pos3'].' '.$row['pos4']." - ".$row['nickname']."";
    if (empty($row['pos1'])) {
    	$row['pos1'] = Нет;
    }
    if (empty($row['pos2'])) {
    	$row['pos2'] = Нет;
    }
    if (empty($row['pos3'])) {
    	$row['pos3'] = Нет;
    }
    if (empty($row['pos4'])) {
    	$row['pos4'] = Нет;
    }
    if (empty($row['comment'])) {
    	$row['comment'] = Нет;
    }
    echo "<br> Должность 1 - ".$row['pos1']."<br> Должность 2 - ".$row['pos2']."<br> Должность 3 - ".$row['pos3']."<br> Должность 4 - ".$row['pos4']." <br> <span style = 'color: purple'>".$row['comment']."</span><br> ВК: <a href = '".$row['vk_link']."'><span style = 'color: orange'>".$row['vk_name']."</span></a><br>".$row['vk_link']."<br>Теги: ".$row['tag']."</h5></figure>";
 }
}
$result_set = $mysqli->query("SELECT * FROM  `members`");


printResult($result_set);
 

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
