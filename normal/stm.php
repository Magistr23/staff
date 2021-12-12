<?php 
  $title = "Ст.Модеры";
  $post_title = "ST.MODER"; 
  $urlpos = '?pos=StM';
  $directoryURI = $_GET['pos'];
  $path = parse_url($directoryURI, PHP_URL_PATH);
  $components = explode('$urlpos', $path);
  $first_part = $components[0];
 ?>
<!DOCTYPE html>
<html lang="ru">
<?php include 'block/head.php';?>
<body>

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
            <div class="layer">
            
		    <?php
            
  				$mysqli = new mysqli ('localhost', 'cg47894_mainbd', '12345', 'cg47894_mainbd');
	$mysqli->query ("SET NAMES 'utf8'");
      
      function printStm($result_set) {
      $i = 0;
     	 while (($row = $result_set->fetch_assoc()) !=false) {
    echo '<div class="panel panel-info">
              <div class="panel-heading"><div class="sidebar-heading text-center ellieaa">'.$row['vk_name'].'</div></div>
              <div class="panel-body">
                <div style="display: block; text-align: center;">
                  <p><a href="'.$row['vk_link'].'"><img style="width: 150px; border-radius: 10px; border: 2px solid #5dc8e5;" src="'.$row['img_link'].'"></a></p>
                  <figcaption>
                    <span class="ellieaaStM">ST.MODER<br></span>
                    <span style="font-family: cursive;" class="ellieaa2">'.$row['nickname'].'<br></span>';
                    if (!empty($row['comment'])) {
                              echo '<blockquote><span style="font-family: cursive;">'.$row['comment'].'</span></blockquote>';
             }
                    echo '<a href="'.$row['vk_link'].'" class="button9 btn btn-default" aria-label="Left Align">ВК<br></a>
                  </figcaption>
                </div>
              </div>
            </div>'; 
        $i++;
		  }
        if ($i <= 0) {
           echo '<div class="panel panel-info">
                          <div class="panel-heading"><div class="sidebar-header text-center">Вакансия</div></div>
                          <div class="panel-body">
                           <figure style="display: block; text-align: center;">
                            <figcaption>ST.MODER<br><span style="font-family: cursive;">
                              <p><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;" class="hidden-sm" src="https://www.mmom.ru/upload/iblock/5b3/5b3adb77ec42346041b4b04de57c3ac4.jpg"></p></span><br>
                            </figcaption>
                            </figure>
                          </div>
                        </div>';
        }
	}   
      
      $result_set =  $mysqli->query ("SELECT* FROM `members` WHERE `pos1` LIKE 'St.Moder'");
  	printStm($result_set);
 	$mysqli->close ();
  
            ?>
           </div>  
          </div>
          <div class="col-sm-9">
          	
          <div class="img"><img class="img-responsive img-thumbnail" src="https://sun9-17.userapi.com/impg/9wyQ-cJeYtRykwRS7KU6jYAkfjkPMiOXb8YXbA/eKqiGHXmmpQ.jpg?size=1920x840&quality=96&sign=6280945a66d3c1ba8aeec978c35341dc&type=album"></div>
                  <h1>Что должен знать Ст.Модер?</h1>
                  <hr>
                  <div class="margin-8"></div>
                  <div class="alert alert-warning" role="alert"> Это начало вашей новой жизни в Старшем составе Стафф'а.</p>
           <p>Вы получаете несколько преимуществ, прав и обязанностей, помогающих в работе вам и другим. К примеру - право распределять младший состав по серверам, то, чего хотелось бы многим. Не так-ли?)</p>
            <p>Так же вы должны помнить и про правила сервера, которые были написаны на странице <a href="http://helperstaff.ru">"Главная"</a></div>
            <a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  Обязанности Ст.Модератора:
</a>

<div class="collapse" id="collapseExample">
  <div class="well">
    <ul style = "list-style-type:circle">
              <li> Распределение Младшего Staff’a.</li>
              <li> Слежка за логами, по возможности - консолей. </li>
              <li> Проверка /reports и /ans.</li>
              <li> Работать за хелперов, если их нет.</li>
              <li> Отвечать игрокам в группе ВКонтакте.</li></ul>
  </div>
</div>
<!--<p><a href="https://helperstaff.ru#curator">123</a></p>-->
<div style="margin-bottom: 20%;"></div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <?php include ("block/footer.php");?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="boot/bootstrap.min.js"></script>
  </body>
</html>