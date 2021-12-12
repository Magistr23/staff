<?php 
  $title = "Гл.Модер";
  $post_title = "GL.MODER"; 
  $urlpos = '?pos=1&dir=glm';
  $directoryURI = $_GET['dir'];
  $path = parse_url($directoryURI, PHP_URL_PATH);
  $components = explode('$urlpos', $path);
  $first_part = $components[0];
 ?>
<!DOCTYPE html>
<html lang="ru">
<?php include 'block/h/head.php';?>
<body>
  <div class="container_fluid">
    <div class="row">
      <?php include 'block/h/nav.php'?>
        </div>
    </div>
    <div class="wrapper">

      <div class="container">
        <div class="block1">
        <div class="row">
          <div class="col-lg-12">
            <div class="img"><img class="img-responsive img-thumbnail" src="https://i.ytimg.com/vi/zIRq1L6lfLA/maxresdefault.jpg"></div>
                  <h1>Что должен знать Гл.Модер?</h1>
                  <hr>
                  <div class="alert alert-warning" role="alert"><p> Приветствую, видимо вы уже Гл.Модер, что ж, редко такое встретишь, видимо до Админа захотелось добраться, да?)</p>
            <p>Обязанностей чуть больше, чем прежде, только чутка c изменениями.</p>
            <p>Вы должны распределять весь наш коллектив по серверам, к Ст.Модерам это тоже относится. Следить за работоспособностью проекта, говорить обо всех важных и трудно-устраняемых ошибках, багах.
Ну и как же без правил, вы должны знать их на зубок или же большую их часть. Все правила написаны на странице "<a href="http://staff.helperstaff.ru">Главная</a>"</div>
            <a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  Обязанности Гл.Модератора!
</a>

<div class="collapse" id="collapseExample">
  <div class="well">
    <ul style = "list-style-type:circle">
                            <li> Распределение Стафф'а ниже</li>
              <li> Отслеживание консолей, логов </li>
              <li> По возможности чекать репы и аски</li>
              <li> Если нету Хелперов, Модеров - работаем сами, не будем тратить время зря :)</li></ul>
  </div>
</div>


          </div>
        </div>
          <?php
          	$mysqli = new mysqli ('localhost', 'cg47894_mainbd', '12345', 'cg47894_mainbd');
	$mysqli->query ("SET NAMES 'utf8'");
      
      function printHelper($result_set) {
      $i = 0;
     	 while (($row = $result_set->fetch_assoc()) !=false) {
    echo '<div class="col-sm-3"></div>
        <div class="col-sm-6"><div class="panel panel-info"><div class="panel-heading"><div class="sidebar-header text-center">'.$row['vk_name'].'
</div></div>
                          <div class="panel-body">
                            <div style="display: block; text-align: center;">
              			<p><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;" class="hidden-sm" src="'.$row['img_link'].'"></p>
                            <figcaption>'.$row['pos1'].' <br><span style="font-family: cursive;">'.$row['nickname'].'</span><blockquote>'.$row['comment'].'</blockquote>
                            <a href="'.$row['vk_link'].'" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption>
                            </div>
                          </div>';
        $i++;
		  }
        if ($i <= 0) {
           echo '<p>Гл.Модератора нету </p><div class="col-sm-3"></div>
        <div class="col-sm-6"><div class="panel panel-info">
                <div class="panel-heading">
                <div class="sidebar-header text-center">Вакансия свободна</div>
                </div>
                <div class="panel-body">
                  <div style="display: block; text-align: center;">
                    <p><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;"src="https://www.mmom.ru/upload/iblock/5b3/5b3adb77ec42346041b4b04de57c3ac4.jpg"></p>
                  </div>
          </div>
              </div>';
        }
	}   
      
      $result_set =  $mysqli->query ("SELECT* FROM `members` WHERE `pos1` LIKE 'gl.moder'");
  	printHelper($result_set);
 	$mysqli->close ();
          ?>
              </div>
         <div class="col-sm-3"></div>
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