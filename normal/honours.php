<?php 
  $title = "Почетные админы";
  $post_title = "HONOURS"; 
  $urlpos = '?pos=honours';
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
        <div class="row">
          <div class="col-lg-12">
            <div style="float: center;" class="img"><img class="img-responsive img-thumbnail" style="width: auto; height: auto; float: center;" src="http://img00.deviantart.net/4ffd/i/2014/294/7/b/falling_frecklebrine_by_owlmaddie-d83q075.png"></div>
<h1>Тут представлены Админы, которые отслужили свой пост</h1>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Шахтёр
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <div class="admins"><img class="img-responsive img-thumbnail" src="https://www.c4dfree.com/wp-content/uploads/2013/12/l3203-minecraft-steve-rig-83523.jpg"></div>
        <p>Ник: LLIAXTEP </p>
            <p>Ник: mr_Magistr -> Я мало, что слышал о тебе, но думаю, что ты был достойным админом. </p>
            <p>Ник: rem_inn -> Шахтёр - взрослый мужчина. Насколько известно, в жизни действительно работал шахтером, потому в игру заходил строго по графику, который я уже и не вспомню. Любил играть в майнкрафт, несмотря на возраст. Наказания выдавал, следуя правилам, я никогда не видел произвола с его стороны. Считаю, что он был очень справедливым админом.</p>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSim">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSim" aria-expanded="false" aria-controls="collapseSim">
          Макар Чиж
        </a>
      </h4>
    </div>
    <div id="collapseSim" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSim">
      <div class="panel-body">
        <div class="admins"><img class="img-responsive img-thumbnail" src="https://psv4.userapi.com/c856320/u525081588/docs/d11/64d5d6991c61/OcHoBa.gif?extra=1MJAQHSQ-Z8dcMVL6VwGsit5Cu3_2I2mw44Jx3mKAbqOSMLmst3Qy_sfbqTjVR6vLqXi4q1aaF-G9lbQ0ffzzk6xIQP0_awgvA0KzQcIBK-Pinvt4sMVXU7h_jfrcfpU-X_9_wJf5079MW0v7qsAU-kL"></div>
        <p>Ник: Simorg </p>
            <p>Ник: Ellieaa -> Неподкупный и строгий. Не жалеет нарушителей, но лоялен к игрокам. Буду ждать твоего возвращения. </p>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingfour">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
          Нази
        </a>
      </h4>
    </div>
    <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
      <div class="panel-body">
        <div class="admins"><img class="img-responsive img-thumbnail" src="https://www.c4dfree.com/wp-content/uploads/2013/12/l3203-minecraft-steve-rig-83523.jpg"></div>
        <p>Ник: Nazi </p>
             <p>Ник:mr_Magistr -> Я не много знаю о тебе, но думаю, что ты был неплохим админом. </p>
      </div>
      </div>
      </div>
      
  <?php
  	$mysqli = new mysqli ('localhost', 'cg47894_mainbd', '12345', 'cg47894_mainbd');
	$mysqli->query ("SET NAMES 'utf8'");
      
      function printMemorial ($result_set) {
     	 while (($row = $result_set->fetch_assoc()) !=false) {
         	echo '<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading'.$row['nickname'].'">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse'.$row['nickname'].'" aria-expanded="false" aria-controls="collapse'.$row['nickname'].'">
          '.$row['vk_name'].'
        </a>
      </h4>
    </div>
    <div id="collapse'.$row['nickname'].'" class="panel-collapse collapse" role="rabpanel" aria-labelledby="heading'.$row['nickname'].'">
      <div class="panel-body">
        <div class="admins"><img class="img-responsive img-thumbnail" src="'.$row['img_link'].'"></div>
        <p>Ник: '.$row['nickname'].'</p>
        <p>'; if (empty($row['comment'])) {} else {echo "Комментарий: "; echo $row['comment'];} echo '</p>
      </div>
    </div>
  </div>';
         }
      }
    $result_set =  $mysqli->query ("SELECT* FROM `members` WHERE `pos1` = 'Honours'");
    printMemorial($result_set);
    $mysqli->close ();
  ?>
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