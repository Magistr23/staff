<?php 
  $title = "Гл. Админ";
  $post_title = "Gl.Admin"; 
  $urlpos = '?pos=1&dir=gla';
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
            <div class="img"><img class="img-responsive img-thumbnail" src="https://pp.userapi.com/c849424/v849424872/1b6e92/PHQy20fiPxU.jpg"></div>
                  <h1>Гл.Админ</h1>
                  <hr>
                  <div class="alert alert-warning" role="alert"> Если Вы добились должности Gl.Admin, значит вы отлично поработали на <a href="https://vk.com/themegacraft">  MegaCraft'е</a>
            <p>Не забывайте и про правила сервера, которы были написаны на странице "<a href="http://helperstaff.ru">Главная</a>"</p></div> <h1><p>Так же на странице "<a href="http://helperstaff.ru/?pos=memorial">Ушедшие Админы</a>" можно ознакомиться с Админами, которые раньше присматривали за проектами (Summer, Mega, Sweet)</h1>
            
            
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <div class="panel panel-info">
      <?php
      
      $mysqli = new mysqli ('localhost', 'cg47894_mainbd', '12345', 'cg47894_mainbd');
	$mysqli->query ("SET NAMES 'utf8'");
      
      function printgla($result_set) {
      
      while (($row = $result_set->fetch_assoc()) !=false) {
        
    echo '<div class="panel-heading"><div class="sidebar-header text-center">'.$row['vk_name'].'
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
        
 }
}
      
      $result_set =  $mysqli->query ("SELECT* FROM `members` WHERE `pos1` LIKE 'Gl.Admin'");
  	printgla($result_set);
 	$mysqli->close ();
    ?>
      
      <!--
                          <div class="panel-heading"><div class="sidebar-header text-center">Кирилл Миронов
</div></div>
                          <div class="panel-body">
                            <div style="display: block; text-align: center;">
              			<p><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;" class="hidden-sm" src="https://pp.userapi.com/c855036/v855036521/49311/jYeYoaBIxi4.jpg"></p>
                            <figcaption>St.Admin <br><span style="font-family: cursive;">xSoociaL</span><blockquote>Если не хотите страдать, не пишите ему.</blockquote>
                            <a href="https://vk.com/xsocial" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption>
                            </div>
                          </div> -->
    
                        </div>
            </div>
  <div class="col-md-2">
</div>
</div>
          </div>
          
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