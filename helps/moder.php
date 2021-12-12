<?php 
  $title = "Модеры";
  $post_title = "MODER"; 
  $urlpos = '?pos=1&dir=moder';
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
        	<div class="col-sm-3">
   <div class="layer">
     <?php
  $mysqli = new mysqli ('localhost', 'cg47894_mainbd', '12345', 'cg47894_mainbd');
	$mysqli->query ("SET NAMES 'utf8'");
      
      function printModer($result_set) {
      
      while (($row = $result_set->fetch_assoc()) !=false) {
        
    echo '<div class="panel panel-info">
                          <div class="panel-heading">
                          <div class="sidebar-header text-center ellieaa">'.$row['vk_name'].'</div></div>
                          <div class="panel-body">
                           <div style="display: block; text-align: center;">
                            <figcaption><span class="ellieaaMod">MODER</span> <br><span style="font-family: cursive;">
                              <p><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;" class="hidden-sm" src="'.$row['img_link'].'"></p><span class="ellieaa2">'.$row['nickname'].'</span></span><br>
                            <a href="'.$row['vk_link'].'" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption>
                            </div>
                          </div>
                        </div>';
        
 }
}
      
      
      $result_set =  $mysqli->query ("SELECT* FROM `members` WHERE `pos1` LIKE 'Moder'");
  	printModer($result_set);
 	$mysqli->close ();
    ?>
          		<!-- <div class="panel panel-info">
                          <div class="panel-heading"><div class="sidebar-header text-center ellieaa">Тая Тарасенко</div></div>
                          <div class="panel-body">
                           <div style="display: block; text-align: center;">
                            <figcaption><span class="ellieaa1">MODER</span> <br><span style="font-family: cursive;">
                              <p><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;" class="hidden-sm" src="https://helperstaff.ru/img/luni444ko.jpg"></p><span class="ellieaa2">luni444ko</span></span><br>
                            <a href="https://vk.com/naaas_lnk" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption>
                            </div>
                          </div>
                        </div>
     
                        <div class="panel panel-info">
                          <div class="panel-heading"><div class="sidebar-header text-center">Владислав Журбенко</div></div>
                          <div class="panel-body">
                           <figure style="display: block; text-align: center;">
                            <figcaption>MODER <br><span style="font-family: cursive;">
                              <p><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;" class="hidden-sm" src="img/vlados.gif"></p>VLaDoS_1</span>
                            <a href="" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption>
                            </figure>
                          </div>
                        </div>
                        <div class="panel panel-info">
                          <div class="panel-heading"><div class="sidebar-header text-center">Георгий Цокиашвили</div></div>
                          <div class="panel-body">
                            <figure style="display: block; text-align: center;">
              			<p><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;" class="hidden-sm" src="https://pp.userapi.com/c850420/v850420233/11ba3f/3yhtAyG2vyY.jpg"></p>
                            <figcaption>MODER <br><span style="font-family: cursive;">SuperGruzin5555</span>
                            <a href="https://vk.com/id452888758" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption>
                            </figure>
                          </div>
                        </div>
                        <div class="panel panel-info">
                          <div class="panel-heading"><div class="sidebar-header text-center">Николай Бордюг</div></div>
                          <div class="panel-body">
                            <figure style="display: block; text-align: center;">
              			<p><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;" class="hidden-sm" src=""></p>
                            <figcaption>MODER<br><span style="font-family: cursive;">slava414</span><blockquote>He is easy to befriend, and even easier to lose</blockquote>
                            <a href="" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption>
                            </figure>
                          </div>
                        </div>
                        <!--<div class="panel panel-info">
                          <div class="panel-heading"><div class="sidebar-header text-center">Марина Юрьева (Соколова)</div></div>
                          <div class="panel-body">
                          	<figure style="display: block; text-align: center;">
                            <figcaption>MODER<br><span style="font-family: cursive;">_Limonka_</span><blockquote>Помощница с сайтом</blockquote>
                            <a href="" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption>
                            </figure>
                          </div>
                        </div>
                        <div class="panel panel-info">
                          <div class="panel-heading"><div class="sidebar-header text-center">Вадим Фокин</div></div>
                          <div class="panel-body">
                            <figure style="display: block; text-align: center;">
              			<p><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;" class="hidden-sm" src=""></p>
                            <figcaption>MODER<br><span style="font-family: cursive;">ZolotoiSosok</span><blockquote>Голдовый... </blockquote>
                            <a href="https://vk.com/id217050256" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption>
                            </figure>
                          </div>
                        </div>-->
                        </div>

          	</div>
          	<div class="col-sm-9">

          		
			 <div class="img"><img class="img-responsive img-thumbnail" src="https://i.pinimg.com/originals/43/4b/48/434b48ff6a5d019fb2c190fa9b17d7cf.jpg"></div>
              <hr>
            <h1>Что должен знать Модер?</h1>
            <div class="alert alert-warning" role="alert"><p> Если у вас должность Модератор, значит вы  хорошо себя показали в роли Хелпера :)</p>
            <p>Обязанности всё те же,но на этот раз вы должны будете присматривать и за Хелперами,</p>
            <p>делиться с ними опытом и помогать им</p></div>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Так же выдадут новую команду</button>
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <ul style = "list-style-type:circle">
<li style="margin-top: 10px;">/socialspy </li>
</ul>
    </div>
  </div>
</div>
				
            </div>
          	</div>
      	</div>
  </div>
</div>
    <?php include ("block/h/footer.php");?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="boot/bootstrap.min.js"></script>
</body>
</html>