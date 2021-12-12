<?php 
  $title = "Ст. и Гл.Админы";
  $post_title = "Adv.Admins"; 
  $urlpos = '?pos=aa';
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
          <div class="col-lg-12">
            <div class="img"><img class="img-responsive img-thumbnail" src="https://sun9-46.userapi.com/impg/0RCKz-qp17IPi63c4zSd61X7PapHStqPSn45hA/PppN48bMJLs.jpg?size=1920x840&quality=96&sign=afd25ec283b01c1827acbb845dd9684f&type=album"></div>
                  <h1>Ст. и Гл.Админы</h1>
                  <hr>
                  <div class="alert alert-warning" role="alert"> Если Вы добились должности Gl.Admin, значит вы отлично поработали на <a href="https://vk.com/themegacraft">  MegaCraft'е</a>
            <p>Не забывайте и про правила сервера, которы были написаны на странице "<a href="http://helperstaff.ru">Главная</a>"</p></div> <h1><p>Так же на странице "<a href="https://helperstaff.ru/?pos=honours">Почётные Админы</a>" можно ознакомиться с Админами, которые раньше присматривали за проектами (Summer, Mega, Sweet)</h1>
            
            
<div class="row">
  <div class="col-md-6">
  
    <?php
    
  	$mysqli = new mysqli ('localhost', 'cg47894_mainbd', '12345', 'cg47894_mainbd');
	$mysqli->query ("SET NAMES 'utf8'");
      
      
      function printgla($result_set) {
      
      while (($row = $result_set->fetch_assoc()) !=false) {
        
    echo '<div class="panel panel-info">
    		<div class="panel-heading">
    			<div class="sidebar-header text-center">'.$row['vk_name'].'
		</div></div>
                          <div class="panel-body">
                            <figure style="display: block; text-align: center;">
              			<p><img style="width: 200px; height: 200px; border-radius: 10px; border: 3px solid #808080;" class="hidden-sm" src="'.$row['img_link'].'"></p>
                            <figcaption>'.$row['pos1'].' <br><span style="font-family: cursive;">'.$row['nickname'].'</span><blockquote>'.$row['comment'].'</blockquote>
                            <a href="'.$row['vk_link'].'" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption>
                            </figure>
                          </div>
                         </div>';
        
 }
}
  
    	$result_sta =  $mysqli->query ("SELECT* FROM `members` WHERE `pos1` LIKE 'St.Admin'");
    printgla($result_sta);
 	$mysqli->close ();
    
    ?>
  
  </div>
  <div class="col-md-6">
                           <?php
      
      $mysqli = new mysqli ('localhost', 'cg47894_mainbd', '12345', 'cg47894_mainbd');
	$mysqli->query ("SET NAMES 'utf8'");
      
      
      
      $result_set =  $mysqli->query ("SELECT* FROM `members` WHERE `pos1` LIKE 'Gl.Admin'");
    $result_sta =  $mysqli->query ("SELECT* FROM `members` WHERE `pos1` LIKE 'St.Admin'");
  	printgla($result_set);
 	$mysqli->close ();
    ?>
                        </div>
            </div>
  <div class="col-md-2">
</div>
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