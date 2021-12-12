<?php 
  $title = "Админы";
  $post_title = "ADMIN"; 
  $urlpos = '?pos=admin';
  $directoryURI = $_GET['pos'];
  $path = parse_url($directoryURI, PHP_URL_PATH);
  $components = explode('$urlpos', $path);
  $first_part = $components[0];
 ?>
<!DOCTYPE html>
<html lang="ru">
	<meta property="og:title" content="<?=$title?>">
	<meta property="og:site_name" content="STAFF Ознакомление">
	<meta property="og:url" content="https://helperstaff.ru">
	<meta property="og:description" content="Сайт для ознакомления с работниками STAFFa и краткое ознакомление каджой должности">
	<meta property="og:image" content="https://i.imgur.com/ZXRPmSn.jpg">
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
          <div class="col-lg-12">
            <div class="img"><img class="img-responsive img-thumbnail" src="https://sun9-73.userapi.com/impg/Zv2YBX-FQqwat5d3EpwTsYSmXKbcBsSPbmAaEw/Y1kmEX3fk6A.jpg?size=1920x1080&quality=96&sign=475b3e2c26189f8428ed236d0a74b831&type=album"></div>
                  <h1>Админы</h1>
                  <hr>
                  <div class="alert alert-warning" role="alert"> Если Вы добились должности Admin, значит вы отлично поработали на <a href="https://vk.com/themegacraft">  MegaCraft'е</a>
            <p>С должностью  Admin, Вы должны следить абсолютно за всем, что есть на проекте, так как эта должность очень важна. На сервере, к ней прислушивается весь STAFF, а за ним игроки.</p>
            <p>Так же вы должны помнить про правила сервера, которы были написаны на странице "<a href="http://helperstaff.ru">Главная</a>"</p></div> <h1><p>Так же на странице "<a href="https://helperstaff.ru/?pos=honours">Почётные Админы</a>" можно ознакомиться с Админами, которые раньше присматривали за проектами (Summer, Mega, Sweet)</h1>
            
            
<div class="row">
  <div class="col-md-3">            
  <a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  Обязанности Админа!
</a>
<div class="collapse" id="collapseExample">
  <div class="well" >Обязанность Администратора:<br>

◦ Распределять staff ниже.<br>
◦ Следить за работой Ст.М.<br>
◦ Отслеживать консоли и логи.<br>
◦ Следить за группой.<br>
◦ Отчёты о всём staff’e ниже раз-два в месяц, характеристика каждого работника.<br>
  </div>
</div></div>
  <div class="col-md-7"><div id="accordeon">
              <?php
  	$mysqli = new mysqli ('localhost', 'cg47894_mainbd', '12345', 'cg47894_mainbd');
	$mysqli->query ("SET NAMES 'utf8'");
      
    function printAdmins($result_set)
{
  while (($row = $result_set->fetch_assoc()) !=false) {
    //print_r($row);
   echo '<div class="acc-head text-center">
                '.$row['nickname'].': '.$row['vk_name'].'
              </div>
              <div class="acc-body">
                <table class="hidden-xs" cellspacing="5" cellpadding="10" width="100%">
                  <tr><th>'.$row['vk_name'].'</th><th><a href="'.$row['vk_link'].'"><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;"  src="'.$row['img_link'].'"></a></th><th>'.$row['comment'].'</th></tr>
                </table>
                <figure class="visible-xs" style="padding-bottom: 120px; display: block; text-align: center;">
                    <div class="col-md-4" style="padding-top: 6%;">'.$row['vk_name'].'</div><div class="col-md-4"><p><a href="'.$row['vk_link'].'"><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;" src="'.$row['img_link'].'"></a></p></div><div class="col-md-4"></div>
                    <figcaption><br>'.$row['comment'].'</figcaption>
                  </figure>
                </div>';
 }
}
      $result_set = $mysqli->query("SELECT * FROM  `members` WHERE `pos1` LIKE 'Admin'");
  printAdmins($result_set);
    $mysqli->close ();
    ?>
            
        </div>
            </div>
  <div class="col-md-2"><p><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Так же выдадут новые команды</button></p>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <ul style = "list-style-type:circle">
        <p></p>
            <li> /server</li>
            <li> /find</li>
            <li> /glist</li>
            <li> /msgtoggle</li>
            <li> /alert</li>

</ul>
    </div>
  </div>
</div></div>
</div>
            </div>
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