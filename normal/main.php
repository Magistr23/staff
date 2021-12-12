<?php 
  $title = "Главная";
  $post_title = "Ознакомление"; 
  $urlpos = '?pos=main';
  $directoryURI = $_GET['pos'];
  $path = parse_url($directoryURI, PHP_URL_PATH);
  $components = explode('$urlpos', $path);
  $first_part = $components[0];
 ?>
<!DOCTYPE html>
<html lang="ru">
 <?php include 'block/head.php';?>
<body>


  <style>
    .nav>li>a {
    	padding: 10px 13px;
    }
    .fas {
    	margin-top: 190%;
    }
  </style>
	<div class="container_fluid">
		<div class="row">
			<?php include 'block/nav.php'?>
        </div>
    </div>
    <div class="wrapper">

      <div class="container">
        <div class="block1">
        <div class="row">
          <div class="col-sm-3">
              <div class="panel panel-info">
                <div class="panel-heading"><div class="sidebar-header text-center">Builders: MegaCraft</div></div>
                <div class="panel-body">
                   	<ul>
                   	<li>Степан Хомяков</li>
                	<li>Катюшка Ковалёва</li>
                	<li>Александр Глухенький</li>
                	<li>Данил' Мерченко</li>
                	</ul>
                </div>
              </div>
              <!--<div class="panel panel-info">
                <div class="panel-heading"><div class="sidebar-header text-center">Builders: MegaCraft | MCPE</div></div>
                <div class="panel-body">
                    <ul>
                    <li>Вова Фомин</li>
                    <li>Alexandr Barna</li>
                    <li>Иван Иванов</li>
                	</ul>
                </div>
              </div>-->
              <!--<div class="panel panel-info">
                <div class="panel-heading"><div class="sidebar-header text-center"> MegaCraft | MCPE</div></div>
                 <div class="layer" style="height: 1000px;">
                   <?php
                   	
  					$mysqli = new mysqli ('localhost', 'cg47894_mainbd', '12345', 'cg47894_mainbd');
					$mysqli->query ("SET NAMES 'utf8'");
          				
          			function printMCPE ($result_set) {
     	 				while (($row = $result_set->fetch_assoc()) !=false) {
                          if ($row['pos'] == '2') {
                          	$row['pos'] = "Helper";
                          } else if ($row['pos'] == '4') {
                          	$row['pos'] = "Moderator";
                          } else if ($row['pos'] == '6') {
                          	$row['pos'] = "Admin";
                          } else if ($row['pos'] == '8') {
                          	$row['pos'] = "St.Admin";
                          } else if ($row['pos'] == '9') {
                          	$row['pos'] = "Owner";
                          } else {}
                          if ($row['pos'] == "Helper") {
                          	$color_pos = "#008000";
                          } else if ($row['pos'] == "Moderator") {
                          	$color_pos = "#0080FF";
                          } else if ($row['pos'] == "Admin") {
                          	$color_pos = "#DC143C";
                          } else if ($row['pos'] == "St.Admin") {
                          	$color_pos = "#DC143C";
                          } else if ($row['pos'] == "Owner") {
                          	$color_pos = "#e55039";
                          } else {}
                          echo '<div class="panel panel-info">
                          <div class="panel-heading"><div class="sidebar-header text-center">'.$row['vk_name'].'</div></div>
                          <div class="panel-body">
                            <figure style="display: block; text-align: center;">
                    <p><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;"  src="'.$row['img_link'].'"></p>
                            <figcaption><span style="color: '.$color_pos.';"> <font size="5">'.$row['pos'].'</font></span><br><blockquote><span style="font-family: cursive;">'.$row['nickname'].'</span></blockquote>
                            <a href="'.$row['vk_link'].'" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption>
                            </figure>
                          </div>
                        </div>
                        <br>';
                        }
                    }
          			$result_set =  $mysqli->query ("SELECT* FROM `MCPEStaff` ORDER BY `pos` DESC");
          			printMCPE($result_set);
          			$mysqli->close ();
  
                   ?>
                 </div>
              </div>-->
          </div>
             <div class="col-sm-9">
             	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
    <li data-target="#carousel-example-generic" data-slide-to="6"></li>
    <li data-target="#carousel-example-generic" data-slide-to="7"></li>
    <li data-target="#carousel-example-generic" data-slide-to="8"></li>
    <li data-target="#carousel-example-generic" data-slide-to="9"></li>
    <li data-target="#carousel-example-generic" data-slide-to="10"></li>
	<li data-target="#carousel-example-generic" data-slide-to="11"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img style="width: 100%;" src="https://i.ibb.co/fQyG2gt/738own9-Zr-Kw.jpg" alt="...">
      <div class="carousel-caption">
        <!-- Альфа -->
      </div>
    </div>
    <div class="item">
      <img style="width: 100%; " src="https://i.ibb.co/fks7VSY/TKmj-Y7e-TXiw.jpg" alt="...">
      <div class="carousel-caption">
      	<!-- Бета -->
      </div>
    </div>
    <div class="item">
      <img style="width: 100%; " src="https://i.ibb.co/Z68pkPf/Vm-BTn-I06-P8-I.jpg" alt="...">
      <div class="carousel-caption">
      	<!-- Дельта  -->
      </div>
    </div>
    <div class="item">
      <img src="https://i.ibb.co/Lt8nxQG/wy-Ptxv1xss.jpg" alt="...">
      <div class="carousel-caption">
        <!-- Arcade -->
      </div>
    </div>
    <div class="item">
      <img style="width: 100%; " src="https://i.ibb.co/XZZwQV7/Iw-Kvpu-Zo-Nj-Y.jpg" alt="...">
      <div class="carousel-caption">
      	<!-- Creative  -->
      </div>
    </div>
    <div class="item">
      <img src="https://i.postimg.cc/nrcnTSxH/bw.jpg" alt="...">
      <div class="carousel-caption">
        <!-- BW -->
      </div>
    </div>
    <div class="item">
      <img src="https://i.ibb.co/5vSgpdK/c-Mgyyx8-O-OE.jpg" alt="...">
      <div class="carousel-caption">
        <!-- SB -->
      </div>
    </div>
    <div class="item">
      <img src="https://i.imgur.com/JbmRH5P.jpg" alt="...">
      <div class="carousel-caption">
        <!-- EW -->
      </div>
    </div>
    <div class="item">
      <img src="https://i.ibb.co/dQ1f8rr/P1-P9-YD-VQs-U.jpg" alt="...">
      <div class="carousel-caption">
        <!-- HG -->
      </div>
    </div>
    <div class="item">
      <img src="https://i.imgur.com/Q2zwFrS.jpg" alt="...">
      <div class="carousel-caption">
        <!-- Anni -->
      </div>
    </div>
    <div class="item">
      <img src="https://i.imgur.com/q8TxaV1.jpg" alt="...">
      <div class="carousel-caption">
        <!-- Grav -->
      </div>
    </div>
    <div class="item">
      <img src="https://i.ibb.co/9YFBzPz/AZ4xpj-Yi-RIQ.jpg" alt="...">
      <div class="carousel-caption">
        <!-- Duels -->
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="fas fa-chevron-left"></span>
    <span class="sr-only"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="fas fa-chevron-right"></span>
    <span class="sr-only"></span>
  </a>
</div>
	<h1 style="text-align: center;"><font face="algerian">Сервер MegaCraft</font></h1>
            <p><ul style = "list-style-type:circle">Общее 
              <li> Быть часто онлайн </li>
              <li>Грамотность, адекватность, знание правил </li>
              <li> Отвечать на вопросы игроков </li>
              <li> Рассматривать жалобы в игре </li>
              <li>Банить/Мутить/Кикать нарушителей, с доказательствами. </li>
              <li>Проводить конкурсы/Ивенты </li>
              <li>Рекламировать донат (сайт) в тот же /bc</li>
            </ul> </p>
            <hr>
            <div>
            	На сервере присутствуют правила, которые вы должны соблюдать. Ознакомиться с ними можно в группе <a href="https://vk.com/themegacraft">Мега крафт</a>
            <br>
            <div class="img"><a href="https://vk.com/topic-129271400_39524056"><img class="img-responsive img-thumbnail" src="https://sun9-9.userapi.com/impf/c851036/v851036315/1c2f2d/y0_LEsKPSVA.jpg?size=549x227&quality=96&proxy=1&sign=e5c48120ba2cc354efffcc23e6920f8a&type=album"></a></div>
<p><h1>По всем вопросам о правилах, обращайтесь к <a href="https://vk.com/kkaysfsf">Шэдоу Келлеру</a></h1></p>

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Тест
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <br>В этих тестах вы можете проверить своё знание правил и правомерность действий в тех или иных ситуациях. 
        <br>Этот тест полезен для тех кто хочет стать хелпером проекта потому что на собеседовании могут быть похожие вопросы и вы будите готовы!
		<br>Удачного тестирования!
        <br>Если хотите дополнить тест просто напишите <a href="https://vk.com/id95515793">Мне в вк</a>
        <!--<br><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" name="starter" value="Старт/Стоп" onclick="findTIME()">
  Начать тест.
</button>-->
<script>
function myWindowOpen() {
  var myWindow = window.open("https://helperstaff.ru/normal/testin.php", "Тесты", "width=1000,height=500");
}
</script>

<br><button onclick="myWindowOpen()">Начать тестирование.</button>
    </div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Тест на знание правил сервера</h4>
        <form name="clockform">
 <p>Время: 
 <input name="clock" id="clock1" size="12" maxlength="12" value="00:00:00.00" type="hidden"><span id="flowtime"></span>
 <!--<input name="starter" type="button" value="Старт/Стоп" onclick="findTIME()">--> 
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <!--<input name="clearer" type="button" value="Сбросить всё" onclick="clearALL()">-->
 </p> Метка:<p id="marker">
 </p>
 <input name="label" size="12" maxlength="40" value="" style="border: none;"></form>
        <script type="text/javascript"> 
 function trim(string) { return string.replace (/\s+/g, " ").replace(/(^\s*)|(\s*)$/g, ''); }
 var init=0;
 var startDate;
 var clocktimer;

 function clearFields() {
  init = 0;
  clearTimeout(clocktimer);
  document.clockform.clock.value='00:00:00.00';
  document.clockform.label.value='';
 }

 function clearALL() {
  clearFields();
  document.getElementById('marker').innerHTML = '';
 }

 function startTIME() { 
  var thisDate = new Date();
  var t = thisDate.getTime() - startDate.getTime();
  var ms = t%1000; t-=ms; ms=Math.floor(ms/10);
  t = Math.floor (t/1000);
  var s = t%60; t-=s;
  t = Math.floor (t/60);
  var m = t%60; t-=m;
  t = Math.floor (t/60);
  var h = t%60;
  if (h<10) h='0'+h;
  if (m<10) m='0'+m;
  if (s<10) s='0'+s;
  if (ms<10) ms='0'+ms;
  if (init==1) document.clockform.clock.value = h + ':' + m + ':' + s + '.' + ms;
  clocktimer = setTimeout("startTIME()",10);
  document.getElementById('flowtime').innerHTML = document.getElementById('clock1').value;
 }

 function findTIME() {
  if (init==0) {
   startDate = new Date();
   startTIME();
   init=1;
  } 
  else {
   var str = trim(document.clockform.label.value);
   document.getElementById('marker').innerHTML = (str==''?'':str+': ') + 
    document.clockform.clock.value + '<br>' + document.getElementById('marker').innerHTML;
   clearFields();
  }
 }
          
</script>
<noscript><p>Извините, для работы приложения нужен включённый JavaScript</p></noscript>

<!--<form name="clockform">
 <p>Время: 
 <input name="clock" size="12" maxlength="12" value="00:00:00.00">
 <input name="starter" type="button" value="Старт/Стоп" onclick="findTIME()"> 
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input name="clearer" type="button" value="Сбросить всё" onclick="clearALL()">
 </p> Метка:<p id="marker">
 </p>
 <input name="label" size="12" maxlength="40" value="" style="border: none;"></form>-->
      </div>
      <div class="modal-body">
	<div id="vopros1" style="display: block;">
		<p>
			Ситуация №1  
			<br>Администрация обязана ли осуществлять Вам помощь в виде ускорения постройки здания, выдачи предметов, ресурсов и др.
			<br>1 Да.
			<br>2 Нет.
			<br><input type="text" id="v1">
		</p>
	</div>
	<div id="vopros2" style="display: none;">
		<p>
			Ситуация №2
			<br>Несёт ли администрация ответственность за потерю имущества, если вещи игрока были оставлены за зоной привата?
			<br>1 Да
			<br>2 Нет
			<br><input type="text" id="v2">
		</p>
	</div>
	<div id="vopros3" style="display: none;">
		<p>
			Ситуация №3
			<br>Игрок оскорбил Ст.Модера. 
			<br>Вопрос. На сколько дней придётся сидеть игроку бане? 
		 <br><input type="text" id="v3">
		</p>
	</div>
	<div id="vopros4" style="display: none;">
		<p>
			Ситуация №4
			<br>На Annihilation, игроку выдали бан на 30 минут.
			<br>Вопрос. Сколько у него было киков?
			<br><input type="text" id="v4">
		</p>
	</div>
	<div id="vopros5" style="display: none;">
		<p>
			Ситуация №5
			<br>Игрок построил свою постройку. Этот игрок отошёл на пару минут от игры, когда возвращается, то видит, что вся его постройка находиться во владениях другого игрока.
			<br>Вопрос. Какое правило разрешило второму игроку так поступить?
			 <br><input type="text" id="v5">
		</p>
	</div>
	<div id="vopros6" style="display: none;">
		<p>
			Ситуация №6
			<br>В игре HungerGames была забанена вся команда, состоящая из 4 игроков, на 3 дня.
			<br>Вопрос. Какое правило они нарушили?
			<br><input type="text" id="v6">
		</p>
	</div>
	<div id="vopros7" style="display: none;">
		<p>
			Ситуация №7
			<br>Игрок попросил Админа помочь ему в постройке. Но тот ему отказал.
			<br>Вопрос. Каким правилом воспользовался Админ?
			 <br><input type="text" id="v7">
		</p>
	</div>
	<div id="vopros8" style="display: none;">
		<p>
			Ситуация №8
			<br>Игрока заметили на пвп арене в режиме fly. Получил бан на 5 дней.
			<br>Вопрос. На сколько нужно было забанить игрока?
			<br><input type="text" id="v8">
		</p>
	</div>
	<div id="vopros9" style="display: none;">
		<p>
			Ситуация №9
			<br>Игрок решил сам рассмотреть жалобу на игрока. За что получил бан аккаунта в группе.
			<br>Вопрос. Какое правило было нарушено?
			<br><input type="text" id="v9">
		</p>
	</div>
	<div id="vopros10" style="display: none;">
		<p>
			Ситуация №10
			<br>Администрация НЕ обязана возвращать вещи в следующих случаях: Выберите лишнее.
			<br>1 Различные баги игры, произошедшие не по вине администрации
			<br>2 Различные баги игры, произошедшие по вине администрации
			 <br><input type="text" id="v10">
		</p>
	</div>
	<div id="vopros11" style="display: none;">
		<p>
			Ситуация №11
			<br>Игрок начал распространение вредоносного контента
			<br>Вопрос. По какому правилу нужно его наказать?
			 <br><input type="text" id="v11">
		</p>
	</div>
	<div id="vopros12" style="display: none;">
		<p>
			Ситуация №12
			<br>Игрок стал убивать на пвп игроков с помощью guns. Его забанили на 5 дней
			<br>Вопрос. На сколько был увеличен бан?
			 <br><input type="text" id="v12">
		</p>
	</div>
	<div id="vopros13" style="display: none;">
		<p>
			Ситуация №13
			<br>Донатер стал угрожать игроку баном, если он не уйдёт с привата.
			<br>Вопрос. Какое правило было нарушено?
			 <br><input type="text" id="v13">
		</p>
	</div>
	<div id="vopros14" style="display: none;">
		<p>
			Ситуация №14
			<br>Игрок построил свастику, за что получил бан на 3 дня.
			<br>Вопрос. Какое правило было использовано?
			 <br><input type="text" id="v14">
		</p>
	</div>
	<div id="vopros15" style="display: none;">
		<p>
			Ситуация №15
			<br>Организатор ивента не выдал соответствующую награду победителю.
			<br>Вопрос. На сколько дней его надо забанить?
			 <br><input type="text" id="v15">
		</p>
	</div>
	<div id="vopros16" style="display: none;">
		<p>
			Ситуация №16
			<br> Если вы увидели угрозу баном от игрока. Что вы должны сделать? Выберите правильное.
			<br>1 Начать ему угрожать, что за его угрозы забаните его.
			<br>2 Забанить на 1 день.
			<br>3 Проигнорить его.
			 <br><input type="text" id="v16">
		</p>
	</div>
	<div id="vopros17" style="display: none;">
		<p>
			Ситуация №17
			<br>Произошёл разМбан игрока, в скоре узнается, что это было без причины. Какое наказание нужно применить?
			<br>1 Кик.
			<br>2 Бан.
			<br>3 МБан.
			<br>4 SБан.
			 <br><input type="text" id="v17">
		</p>
	</div>
	<div id="vopros18" style="display: none;">
		<p>
			Ситуация №18
			<br>Выберите правильный ответ. Где полностью разрешён гриф?
			<br>1 Выживания Альфа.
			<br>2 Выживания Бета.
			<br>3 Скайблок.
			<br>4 Бедварс.
			<br>5 Анни.
			 <br><input type="text" id="v18">
		</p>
	</div>
	<div id="vopros19" style="display: none;">
		<p>
			Ситуация №19
			<br>Вы заметили, что игрок на сплифе отгородил себя от других игроков
			<br>Вопрос. Какое наказание нужно преминить?
			<br>1 Бан до 12 часов.
			<br>2 Бан до 1 дня.
			<br>3 Кик.
			 <br><input type="text" id="v19">
		</p>
	</div>
	<div id="vopros20" style="display: none;">
		<p>
			Ситуация №20
			<br>Администрация несет ли ответственности за временную или постоянную невозможность игры на сервере конкретным лицом или группой лиц?
			<br>1 Да.
			<br>2 Нет.
			 <br><input type="text" id="v20">
		</p>
	</div>
	
	<button id="kn_pr" style="display: none;" onclick="proverka(), findTIME()" name="starter" value="Старт/Стоп" >Проверить</button>
	<button id="kn_sl" onclick="sled_vopr()">Следующий вопрос</button>
	<div id="rezyltat"></div>
	<script type="text/javascript">
		function proverka() {
			pr_otv_1 = 2;
			pr_otv_2 = 2;
			pr_otv_3 = 2;
			pr_otv_4 = 3;
			pr_otv_5 = 6.3;
			pr_otv_6 = 3.9;
			pr_otv_7 = 3.5;
			pr_otv_8 = 1;
			pr_otv_9 = 10.1;
			pr_otv_10 = 1;
			pr_otv_11 = 3.4;
			pr_otv_12 = 2;
			pr_otv_13 = 4.14;
			pr_otv_14 = 6.8;
			pr_otv_15 = 3;
			pr_otv_16 = 2;
			pr_otv_17 = 3;
			pr_otv_18 = 3;
			pr_otv_19 = 1;
			pr_otv_20 = 2;
			otv_cm_1 = document.getElementById('v1').value;
			otv_cm_2 = document.getElementById('v2').value;
			otv_cm_3 = document.getElementById('v3').value;
			otv_cm_4 = document.getElementById('v4').value;
			otv_cm_5 = document.getElementById('v5').value;
			otv_cm_6 = document.getElementById('v6').value;
			otv_cm_7 = document.getElementById('v7').value;
			otv_cm_8 = document.getElementById('v8').value;
			otv_cm_9 = document.getElementById('v9').value;
			otv_cm_10 = document.getElementById('v10').value;
			otv_cm_11 = document.getElementById('v11').value;
			otv_cm_12 = document.getElementById('v12').value;
			otv_cm_13 = document.getElementById('v13').value;
			otv_cm_14 = document.getElementById('v14').value;
			otv_cm_15 = document.getElementById('v15').value;
			otv_cm_16 = document.getElementById('v16').value;
			otv_cm_17 = document.getElementById('v17').value;
			otv_cm_18 = document.getElementById('v18').value;
			otv_cm_19 = document.getElementById('v19').value;
			otv_cm_20 = document.getElementById('v20').value;
			ball = 0;
			if(otv_cm_1 == pr_otv_1) {
				ball +=1;
			}
			if(otv_cm_2 == pr_otv_2) {
				ball +=1;
			}
			if(otv_cm_3 == pr_otv_3) {
				ball +=1;
			}
			if(otv_cm_4 == pr_otv_4) {
				ball +=1;
			}
			if(otv_cm_5 == pr_otv_5) {
				ball +=1;
			}
			if(otv_cm_6 == pr_otv_6) {
				ball +=1;
			}
			if(otv_cm_7 == pr_otv_7) {
				ball +=1;
			}
			if(otv_cm_8 == pr_otv_8) {
				ball +=1;
			}
			if(otv_cm_9 == pr_otv_9) {
				ball +=1;
			}
			if(otv_cm_10 == pr_otv_10) {
				ball +=1;
			}
			if(otv_cm_11 == pr_otv_11) {
				ball +=1;
			}
			if(otv_cm_12 == pr_otv_12) {
				ball +=1;
			}
			if(otv_cm_13 == pr_otv_13) {
				ball +=1;
			}
			if(otv_cm_14 == pr_otv_14) {
				ball +=1;
			}
			if(otv_cm_15 == pr_otv_15) {
				ball +=1;
			}
			if(otv_cm_16 == pr_otv_16) {
				ball +=1;
			}
			if(otv_cm_17 == pr_otv_17) {
				ball +=1;
			}
			if(otv_cm_18 == pr_otv_18) {
				ball +=1;
			}
			if(otv_cm_19 == pr_otv_19) {
				ball +=1;
			}
			if(otv_cm_20 == pr_otv_20) {
				ball +=1;
			}
			vsego_zadah = 20;
			procent = ball/vsego_zadah * 100;
			document.getElementById('rezyltat').innerHTML = "Вы правильно ответили на "+ball+" из 20 вопросов. Это составляет "+procent+"% из 100%";
		}	
    	function sled_vopr(){
    if(document.getElementById('vopros19').style.display == "block"){
        document.getElementById('vopros19').style.display = "none";
        document.getElementById('vopros20').style.display = "block";
       document.getElementById('kn_sl').style.display = "none";
        document.getElementById('kn_pr').style.display = "block";
    }    
    if(document.getElementById('vopros18').style.display == "block"){
        document.getElementById('vopros18').style.display = "none";
        document.getElementById('vopros19').style.display = "block";
       }    
    if(document.getElementById('vopros17').style.display == "block"){
        document.getElementById('vopros17').style.display = "none";
        document.getElementById('vopros18').style.display = "block";
       }    
    if(document.getElementById('vopros16').style.display == "block"){
        document.getElementById('vopros16').style.display = "none";
        document.getElementById('vopros17').style.display = "block";
       }    
    if(document.getElementById('vopros15').style.display == "block"){
        document.getElementById('vopros15').style.display = "none";
        document.getElementById('vopros16').style.display = "block";
      }    
    if(document.getElementById('vopros14').style.display == "block"){
        document.getElementById('vopros14').style.display = "none";
        document.getElementById('vopros15').style.display = "block";
       }    
    if(document.getElementById('vopros13').style.display == "block"){
        document.getElementById('vopros13').style.display = "none";
        document.getElementById('vopros14').style.display = "block";
    }    
    if(document.getElementById('vopros12').style.display == "block"){
        document.getElementById('vopros12').style.display = "none";
        document.getElementById('vopros13').style.display = "block";
    }    
    if(document.getElementById('vopros11').style.display == "block"){
        document.getElementById('vopros11').style.display = "none";
        document.getElementById('vopros12').style.display = "block";
    }    
    if(document.getElementById('vopros10').style.display == "block"){
        document.getElementById('vopros10').style.display = "none";
        document.getElementById('vopros11').style.display = "block";
    }
    if(document.getElementById('vopros9').style.display == "block"){
        document.getElementById('vopros9').style.display = "none";
        document.getElementById('vopros10').style.display = "block";
    }
    if(document.getElementById('vopros8').style.display == "block"){
        document.getElementById('vopros8').style.display = "none";
        document.getElementById('vopros9').style.display = "block";
    }
    if(document.getElementById('vopros7').style.display == "block"){
        document.getElementById('vopros7').style.display = "none";
        document.getElementById('vopros8').style.display = "block";
    }
    if(document.getElementById('vopros6').style.display == "block"){
        document.getElementById('vopros6').style.display = "none";
        document.getElementById('vopros7').style.display = "block";
    }
    if(document.getElementById('vopros5').style.display == "block"){
        document.getElementById('vopros5').style.display = "none";
        document.getElementById('vopros6').style.display = "block";
    }
    if(document.getElementById('vopros4').style.display == "block"){
        document.getElementById('vopros4').style.display = "none";
        document.getElementById('vopros5').style.display = "block";
    }
    if(document.getElementById('vopros3').style.display == "block"){
        document.getElementById('vopros3').style.display = "none";
        document.getElementById('vopros4').style.display = "block";
    }
    if(document.getElementById('vopros2').style.display == "block"){
        document.getElementById('vopros2').style.display = "none";
        document.getElementById('vopros3').style.display = "block";
    }
    if(document.getElementById('vopros1').style.display == "block"){
        document.getElementById('vopros1').style.display = "none";
        document.getElementById('vopros2').style.display = "block";
    }
}
	</script>
        </div>
    </div>
  </div>
</div>


<!--<div class="curator hidden-xs" id="curator"><span>Кураторы и подчинённые</span>-->
<!--<img src=img/curator.jpg style="margin-bottom: 10px;"></div>-->

<!--<table border="1" width="70%"  id="curator" class="hidden-xs" style="margin: auto;">
            <caption>Кураторы и подчинённые</caption>
			<tr align="center"><td bgcolor="#FFDEAD">Desppy8</td><td bgcolor="#FFDEAD">teanok</td><td bgcolor="#FFDEAD">OcHoBa</td><td bgcolor="#FFDEAD">KKayKiller</td><td colspan="5" bgcolor="#D2691E">Администрация</td></tr>
            <tr align="center"><td bgcolor="#FFFACD">       </td><td bgcolor="#FFFACD">luni444ko</td><td bgcolor="#FFFACD">VLaDoS_1</td><td bgcolor="#FFFACD">kostya23475</td><td colspan="4"bgcolor="#FFD700">Ст. и Гл.Модераторы</td></tr>
            <tr align="center"><td bgcolor="#ADD8E6">Mannik13</td><td bgcolor="#ADD8E6">_Armina_</td><td bgcolor="#ADD8E6">HappyCatGx9</td><td bgcolor="#ADD8E6">SROL</td><td bgcolor="#00BFFF">Модераторы</td></tr>
            <tr align="center"><td bgcolor="#90EE90">AssasinCreed</td><td bgcolor="#90EE90">Сhrome_my</td><td bgcolor="#90EE90">_Aks_</td><td bgcolor="#90EE90">     </td><td  rowspan="3" bgcolor="#00FF7F" width="200">Хелперы</td></tr>
            <tr align="center"><td bgcolor="#90EE90">CraftTheBest</td><td bgcolor="#90EE90">         </td><td bgcolor="#90EE90">Mr_Fin_Human</td><td bgcolor="#90EE90">jace</td></tr>
            <tr align="center"><td bgcolor="#90EE90">The_ViPVaLeR</td><td bgcolor="#90EE90">         </td><td bgcolor="#90EE90">Wibbl</td><td bgcolor="#90EE90">slava414</td></tr>
           </table>-->
           
          </div>
          
          </div>
        </div>
      </div>
    </div>
<!--    <a href="normal/testin.php">123</a>-->
    <div class="margin-8 hidden-xs"></div>
      <div class="clear"></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    <?php include ("block/footer.php");?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="boot/bootstrap.min.js"></script>
  </body>
</html>
