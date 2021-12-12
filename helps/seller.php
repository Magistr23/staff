<?php 
  $title = "Продавцы и покупатели";
  $post_title = "BUYERS AND SELLERS"; 
  $urlpos = '?pos=1&dir=seller';
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
          <div class="col-sm-3">
            <div class="alert alert-warning" role="alert"><h1>Техническая поддержка</h1>
              <p>Писать префикс "<span style="color: #6600FF">[Сайт]</span>", так они вам ответят быстрее.</p></div>   
                        <div class="panel panel-info">
                <div class="panel-heading"><div class="sidebar-heading">Настя Януль</div></div>
                <div class="panel-body">
                  <p>По вопросам и добавлению в список людей обращаться сюда</p>
          <a href="https://vk.com/id511722855" class="button9 btn btn-default" aria-label="Left Align">ВК</a>
          
                </div>
              </div>                   
                </div>
          	<div class="col-sm-9">
            <div class="img"><img class="img-responsive img-thumbnail" src="http://i.imgur.com/ADySlme.png"></div>
                  <hr>
                  <h1>Продавцы</h1>
                  <div class="panel panel-default" style="box-shadow: 0 0 10px red;">
    <div class="panel-heading" role="tab" id="headingfive">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
          Миша Степанов
  <!--<p><a href="http://vk.com/summerfibbs"><img src="fibbs.gif" width="100" height="111" alt="Фиббс"></a></p>-->
        </a>
      </h4>
    </div>
    <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
      <div class="panel-body">
      	              		<figure style="display: block; text-align: center;">
              			<p><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;"src="img/fibbs.gif"></p>
              			<figcaption><span style="font-family: cursive; color: red;">_Fibbs_</span><br><blockquote>OWNER. По вопросам доната и игры. Если у вас есть деньги, то Миша вас найдёт :)</blockquote><a href="https://vk.com/id304825541" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption>
              		</figure>
                    <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingfivefive">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefivefive" aria-expanded="false" aria-controls="collapsefivefive">
          <b><span style="color: #41A9CC;">Покупатели</span></b>
        </a>
      </h4>
    </div>
    <div id="collapsefivefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfivefive">
      <div class="panel-body">
        <div>
      </div>
        <style>
.prokrutka {
height: 300px; /* высота блока */
width: auto; /* ширина блока */
background: #fff; /* цвет фона, белый */
border: 1px solid #C1C1C1; /* размер и цвет границы блока */
overflow-y: scroll; /* прокрутка по вертикали */
}
</style>
<div class="prokrutka">
	<?php include 'block/fibbs.php'?>
      </div>
      </div>
    </div>
      </div>
    </div>
  </div>
  </div>
  <div class="panel panel-default" style="box-shadow: 0 0 10px #000000;">
    <div class="panel-heading" role="tab" id="headingxSoociaL">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsexSoociaL" aria-expanded="false" aria-controls="collapsexSoociaL">
          Кирилл Миронов
  <!--<p><img src="bear.gif" width="100" height="111" alt="Nikeron"></p>-->
        </a>
      </h4>
    </div>
    <div id="collapsexSoociaL" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingxSoociaL">
      <div class="panel-body">
      	<figure style="display: block; text-align: center;">
              			<p><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;"src="https://pp.userapi.com/c855016/v855016217/85bff/rEYMPRNtYmA.jpg"></p>
              			<figcaption><span style="font-family: cursive; color: #000000;">xSoociaL</span><blockquote>OWNER. Может продать всё, что угодно на дуэлях, вопрос лишь в ваших деньгах ;).</blockquote><a href="https://vk.com/xsocial" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption>
              		</figure>
       <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingxSoociaLone">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsexSoociaLone" aria-expanded="false" aria-controls="collapsexSoociaLone">
          <b><span style="color: #41A9CC;">Покупатели</span></b>
          </a>
        </h4>
    <div id="collapsexSoociaLone" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingxSoociaLone">
      <div class="panel-body">
        <div>
        </div>
      <div class="prokrutka">
      <?php include 'block/xSoociaL.php'?>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
  <div class="panel panel-default" style="box-shadow: 0 0 10px #ffc0cb;">
    <div class="panel-heading" role="tab" id="headingsix">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
          Алифанов Анатолий
  <!--<p><a href="http://vk.com/mjena"><img src="cat2.gif" width="100" height="111" alt="Тина"></p>-->
        </a>
      </h4>
    </div>
    <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix">
      <div class="panel-body">
      	<figure style="display: block; text-align: center;">
              			<p><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;"src="https://pp.userapi.com/c840331/v840331396/61396/Er0hUfYlR5w.jpg"></p>
              			<figcaption><span style="font-family: cursive; color: #FF00FF;">Desppy8</span><br><a href="https://vk.com/desppy8" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption>
              		</figure>
                    <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingsixsix">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesixsix" aria-expanded="false" aria-controls="collapsesixsix">
          <b><span style="color:#41A9CC;">Покупатели</span></b>   
        </a>
      </h4>
    </div>
    <div id="collapsesixsix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsixsix">
      <div class="panel-body">
        <div>
      </div>
      <div class="prokrutka">
		<?php include 'block/Desppy8.php'?>
</div>
    </div>
  </div>     
  </div>
      </div>
      </div>
    </div>
    <div>
    </div>
          <div>
            <div>
            <div class="panel panel-default" style="box-shadow: 0 0 10px green;">
    <div class="panel-heading" role="tab" id="headingOneOne">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOneOne" aria-expanded="false" aria-controls="collapseOneOne">
          Дмитрий Волков
  <!--<p><img src="bear.gif" width="100" height="111" alt="Nikeron"></p>-->
        </a>
      </h4>
    </div>
    <div id="collapseOneOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOneOne">
      <div class="panel-body">
      	<figure style="display: block; text-align: center;">
              			<p><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;"src="img/bear.gif"></p>
              			<figcaption><span style="font-family: cursive; color: #FFCC00;">Nikeron</span><blockquote>СДонат по скидкам + много крутых подарков. Писать мне в ВК!</blockquote><a href="https://vk.com/id497886639" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption>
              		</figure>
       <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          <b><span style="color: #41A9CC;">Покупатели</span></b>
          </a>
        </h4>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <div>
        </div>
      <div class="prokrutka">
      <?php include 'block/Nikeron.php'?>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="panel panel-default"style="box-shadow: 0 0 10px #8b00ff;">
    <div class="panel-heading" role="tab" id="headingeight">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
          Емельян Романов
        </a>
      </h4>
    </div>
    <div id="collapseeight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingeight">
      <div class="panel-body">
      	<figure style="display: block; text-align: center;">
              			<p><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;"src="img/rem_inn.png"></p>
              			<figcaption><span style="font-family: cursive; color: red;">rem_inn</span><blockquote>Купи у меня Сдонат, получи огромную скидку до 50% и щедрый <span style="color: red;"><b>подарок!</b></span> Ах да, еще я дарю <span style="color: Orange;"><i>мегакоины</i></span> ;) Даю рекомендацию старшим администраторам, чтобы повысить Ваши шансы попасть в Стафф!</blockquote><a href="https://vk.com/id528162481" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption>
              		</figure>
                    <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingnine">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
          <b><span style="color:#41A9CC;">Покупатели</span></b>   
        </a>
      </h4>
    </div>
    <div id="collapsenine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingnine">
      <div class="panel-body">
        <div>
      </div>
      <div class="prokrutka">
      	<?php include 'block/rem_inn.php'?>
      </div>
    </div>
  </div>     
  </div>
      </div>
      </div>
    </div>
    <div>
    </div>
    </div>
          <div>
            <div>
            	</div>
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