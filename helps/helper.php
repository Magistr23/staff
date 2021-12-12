<?php 
  $title = "Хелперы";
  $post_title = "HELPER"; 
  $urlpos = '?pos=1&dir=helper';
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
      
      function printHelper($result_set) {
      $i = 0;
     	 while (($row = $result_set->fetch_assoc()) !=false) {
    echo '<div class="panel panel-info">
                          <div class="panel-heading"><div class="sidebar-header text-center ellieaa">'.$row['vk_name'].'</div></div>
                          <div class="panel-body">
                           <figure style="display: block; text-align: center;">
                            <figcaption><span class="ellieaaHelp">HELPER</span><br><span style="font-family: cursive;">
                              <p><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;" class="hidden-sm" src="'.$row['img_link'].'"></p><span class="ellieaa2">'.$row['nickname'].'</span></span><br>
                            <a href="'.$row['vk_link'].'" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption>
                            </figure>
                          </div>
                        </div>';
        $i++;
		  }
        if ($i <= 0) {
           echo '<div class="panel panel-info">
                          <div class="panel-heading"><div class="sidebar-header text-center">Вакансия</div></div>
                          <div class="panel-body">
                           <div style="display: block; text-align: center;">
                            <figcaption><span class="ellieaaHelp">HELPER</span><br><span style="font-family: cursive;">
                              <p><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;" class="hidden-sm" src="https://www.mmom.ru/upload/iblock/5b3/5b3adb77ec42346041b4b04de57c3ac4.jpg"></p></span><br>
                            </figcaption>
                            </div>
                          </div>
                        </div>';
        }
	}   
      
      $result_set =  $mysqli->query ("SELECT* FROM `members` WHERE `pos1` LIKE 'helper'");
  	printHelper($result_set);
 	$mysqli->close ();
    ?>		
                          
                        
              <!--  <div class="panel panel-info">
                          <div class="panel-heading"><div class="sidebar-header text-center">Алексей Кузьмин</div></div>
                          <div class="panel-body">
                            <figure style="display: block; text-align: center;">
                            <figcaption>HELPER <br><span style="font-family: cursive;">
                              <p><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;" class="hidden-sm" src="https://pp.userapi.com/c850532/v850532206/146d05/RyMjtqsHhAI.jpg"></p>NicknameMaster</span><br>
                            <a href="https://vk.com/id314419221" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption>
                            </figure>
                          </div>
                        </div><div class="panel panel-info">
                          <div class="panel-heading"><div class="sidebar-header text-center">Савелий Добромиров</div></div>
                          <div class="panel-body">
                            <figure style="display: block; text-align: center;">
                            <figcaption>HELPER <br><span style="font-family: cursive;">
                              <p><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;" class="hidden-sm" src="https://pp.userapi.com/c831409/v831409001/1d3c24/7WwT7LBw55E.jpg"></p>zloi_dimgan</span><br>
                            <a href="https://vk.com/ph76123" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption>
                            </figure>
                          </div>
                        </div><div class="panel panel-info">
                          <div class="panel-heading"><div class="sidebar-header text-center">Тимофей Григорович</div></div>
                          <div class="panel-body">
                            <figure style="display: block; text-align: center;">
                            <figcaption>HELPER <br><span style="font-family: cursive;">
                              <p><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;" class="hidden-sm" src="https://pp.userapi.com/c854128/v854128181/7d686/Y6pW55UXXdI.jpg"></p>Timofeyv</span><br>
                            <a href="https://vk.com/timrovich" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption>
                            </figure>
                          </div>
                        </div><div class="panel panel-info">
                          <div class="panel-heading"><div class="sidebar-header text-center">Аля ✔ Бессмертная</div></div>
                          <div class="panel-body">
                            <figure style="display: block; text-align: center;">
                            <figcaption>HELPER <br><span style="font-family: cursive;">
                              <p><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;" class="hidden-sm" src="https://pp.userapi.com/c854124/v854124367/124eb/OTj00obYIFA.jpg"></p>Vampic</span><blockquote>Правая рука создателя сайта. Справедливая и честная вампирша, которая служит серверу!</blockquote><br>
                            <a href="https://vk.com/id525081588" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption>
                            </figure>
                          </div>
                        </div>
                        <div class="panel panel-info">
                          <div class="panel-heading"><div class="sidebar-header text-center">Константин Кобзев</div></div>
                          <div class="panel-body">
                          	<figure style="display: block; text-align: center;">
                            <figcaption>HELPER<br><span style="font-family: cursive;">kostya23475</span><br>
                            <a href="https://vk.com/id287276370" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption>
                            </figure>
                          </div>
                        </div>
                        <div class="panel panel-info">
                          <div class="panel-heading"><div class="sidebar-header text-center">Екатерина Смольная</div></div>
                          <div class="panel-body">
                            <figure style="display: block; text-align: center;">
              			<p><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;" class="hidden-sm" src="https://pp.userapi.com/c855216/v855216053/5ed58/T-nu5LaqTg8.jpg"></p>
                            <figcaption>HELPER<br><span style="font-family: cursive;">Valushka</span><br>
                            <a href="https://vk.com/id544410768" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption>
                            </figure>
                          </div> -->
                        </div>
                        
          </div>
          	<div class="col-sm-9">

          		
			 <div class="img"><img class="img-responsive img-thumbnail" src="http://file.vforum.vn/hinh/2018/03/hinh-anh-hinh-nen-minecraft-3d-dep-nhat-25.jpg"></div>
            <hr>
          <h1>Что должен знать Хелпер?</h1>
          <p><div class="alert alert-warning" role="alert">Когда вас поставят на должность Хелпер, Вам выдадут не только префикс и таб префикс, но и команды, которые вы должны использовать в работе.
            <p>Вступая на должность, вы соглашаетесь, что соответствуете следующим пунктам: </div>
            <p><ul style = "list-style-type:circle"><div class="alert alert-success" role="alert">
  <li>1) Полностью лояльны администрации в любых решениях </li>
  <li>2) Будете исполнять ряд обязанностей, которые вам раскроют позже. Какими бы они ни были ;) </li>
</ul>
<ul style="list-style-type: none;"><div class="alert alert-success" role="alert">
  <li>1) Вы должны как минимум 2-3 раза в месяц проводить веселые ивенты и конкурсы,т.е. развлекать игроков</li>
  <li>2) Проверять репорты (команда /reports), которые будут вам приходить, и знать все правила /rules по пунктам! </li>
  <li>3) Необходимо 1-2 раза в час предлагать игрокам как через /bc | /abc | /msg и т.д. в свободной, ненавязчивой форме купить/доплатить донат на сайте megacraft.so . </li>
  <li>4) Соблюдать лояльность к игрокам и пресекать любые конфликты, сводя все к миру. У нас мирный сервер! </li>
  <li>5) Запрещены провокации в любом виде </li>
  <li>6) Осправить любые действия администрации ведет к исключению и наложению санкций </li>
  <li>7) Самовольный выход просто так (без особых причин) ведет к наложению санкций </li>
  <li>8) Вы должны помогать игрокам в чате и знать каждый режим на зубок! Если хелпер в сети и не помогает, это может привести к снятию должности или беседе с вами </li>
  <li>9) Обязательно голосуем за сервер каждый день везде <a href="http://megacraft.so/?go=vote">Хочу голосовать!!</a></li></ul></p>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Права!!</button>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <ul style = "list-style-type:circle">
<li>/reports</li>
<li>/ans</li>
<li>/con < server > (Тп на сервер)</li> 
<li>/whereis < Ник > (Посмотреть на каком сервере игрок)</li> 
<li>/sc сообщение (Стафф Чат)</li>
<li>/sctoggle (Авто СтаффЧат)</li>
</ul>
    </div>
  </div>
</div>

<p>Вы в Администрации, информирование обо всех новых планах раньше других. </p>
=== 
<p>При хорошем активе возможны повышения!</p>
				
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