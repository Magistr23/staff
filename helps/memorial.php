<?php 
  $title = "Ушедшие админы";
  $post_title = "MEMORIAL"; 
  $urlpos = '?pos=1&dir=memorials';
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
        <div class="row">
          <div class="col-lg-12">
            <div style="float: center;" class="img"><img class="img-responsive img-thumbnail" style="width: auto; height: auto; float: center;" src="http://img00.deviantart.net/4ffd/i/2014/294/7/b/falling_frecklebrine_by_owlmaddie-d83q075.png"></div>
<h1>Тут представлены Админы, которые покинули свой пост</h1>
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
        <div class="admins"><img class="img-responsive img-thumbnail" src="img/simorg.gif"></div>
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
      <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingjena12">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsejena12" aria-expanded="false" aria-controls="collapsejena12">
          Tina Rutherford
        </a>
      </h4>
    </div>
  
    <div id="collapsejena12" class="panel-collapse collapse" role="rabpanel" aria-labelledby="headingjena12">
      <div class="panel-body">
        <div class="admins"><img class="img-responsive img-thumbnail" src="img/TinaRutherford.jpg"></div>
        <p>Ник: jena12</p>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingrem">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapserem" aria-expanded="false" aria-controls="collapserem">
          Емельян Романов
        </a>
      </h4>
    </div>
    <div id="collapserem" class="panel-collapse collapse" role="rabpanel" aria-labelledby="headingrem">
      <div class="panel-body">
        <div class="admins"><img class="img-responsive img-thumbnail" src="https://pp.userapi.com/c845122/v845122371/18c0f8/iZe2tkZh_dE.jpg"></div>
        <p>Ник: rem_inn</p>
      </div>
    </div>
  </div>
    </div></div>
  <h1>Хотите оставить комментарий? Пишите мне в <a href="https://vk.com/id95515793">ВК</a>. Либо помощникам.</h1>
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