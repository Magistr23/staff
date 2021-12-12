<?php 
  $title = "Владельцы";
  $post_title = "OWNER"; 
  $urlpos = '?pos=1&dir=owner';
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
            <div class="img"><img class="img-responsive img-thumbnail" src="https://pp.userapi.com/c856036/v856036415/76d2d/beedbTKsNCk.jpg" style="width: 100%;"></div>
                  <h1>Владельцы</h1>
                  <hr>
                  <div class="alert alert-warning" role="alert">Должность "Владелец проекта" самая важная на <a href="https://vk.com/themegacraft">  MegaCraft'е</a>
            <p>С должностью  Owner, Вы следите абсолютно за всем, что есть на проекте, так как эта должность очень важна.</p>
            <p>Так же вы должны помнить про правила сервера, которы были написаны на странице "<a href="http://helperstaff.ru">Главная</a>"</p></div> <h1><p>Так же на странице "<a href="http://helperstaff.ru/?pos=memorial">Ушедшие Админы</a>" можно ознакомиться с Админами, которые раньше присматривали за проектами (Summer, Mega, Sweet)</h1>
            
            
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8"><div id="accordeon">
    <?php
    $mysqli = new mysqli ('localhost', 'cg47894_mainbd', '12345', 'cg47894_mainbd');
	$mysqli->query ("SET NAMES 'utf8'");
      
      function printOwner($result_set) {
      
      while (($row = $result_set->fetch_assoc()) !=false) {
        
    echo '<div class="acc-head text-center">
                '.$row['nickname'].': '.$row['vk_name'].'
              </div>
              <div class="acc-body">
                <table class="hidden-xs" cellspacing="5" cellpadding="10" width="100%">
                  <tr><th>'.$row['vk_name'].'';
        if ($row['pos1'] == 'Gl.Owner') {
        echo '<br>Создатель сервера';
        }
        echo '</th><th><a href="'.$row['vk_link'].'"><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;" src="'.$row['img_link'].'"></a></th><th>'.$row['comment'].'</th></tr>
                </table>
                <figure class="visible-xs" style="padding-bottom: 30px; display: block; text-align: center;">
                    <div class="col-md-4" style="padding-top: 6%;">'.$row['vk_name'].'';
        if ($row['pos1'] == 'Gl.Owner') {
        echo '<br>Создатель сервера';
        }
        echo '</div><div class="col-md-4"><p><a href="'.$row['vk_link'].'"><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;" src="'.$row['img_link'].'"></a></p></div><div class="col-md-4"></div>
                    <figcaption><br>'.$row['comment'].'</figcaption>
                  </figure>
                </div>';
        
 }
}
      
      $result_set =  $mysqli->query ("SELECT* FROM `members` WHERE `pos1` LIKE '%owner%'");
  	printOwner($result_set);
 	$mysqli->close ();
    ?>
        </div>
            </div>
  <div class="col-md-2"><div class="col-md-2">
</div>
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