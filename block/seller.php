<?php 
  $title = "Продавцы и покупатели";
  $post_title = "BUYERS AND SELLERS"; 
  $urlpos = '?pos=seller';
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
              			<figcaption><span style="font-family: cursive; color: red;">_Fibbs_</span><br><blockquote>Owner. По вопросам доната и игры. Если у вас есть деньги, то Миша вас найдёт :)</blockquote><a href="https://vk.com/id304825541" class="button9 btn btn-default" aria-label="Left Align">
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
              			<figcaption><span style="font-family: cursive; color: #000000;">xSoociaL</span><blockquote>ST.ADMIN. Может продать всё, что угодно на дуэлях, вопрос лишь в ваших деньгах ;).</blockquote><a href="https://vk.com/xsocial" class="button9 btn btn-default" aria-label="Left Align">
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
              
              <?php
              
              $mysqli = new mysqli ('localhost', 'cg47894_mainbd', '12345', 'cg47894_mainbd');
              $mysqli->query ("SET NAMES 'utf8'");
				
      			function printBuyersDesppy ($result_desppy) {
                  echo '<div class="panel panel-default" style="box-shadow: 0 0 10px #ffc0cb;">
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
              			<figcaption><span style="font-family: cursive; color: #FF00FF;">Desppy8</span>
                          <blockquote>Покупай Сдон у деспи) Скидка и подарок само собой.</blockquote><a href="https://vk.com/desppy8" class="button9 btn btn-default" aria-label="Left Align">
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
      <div class="prokrutka"><ol>';
                	while (($row = $result_desppy->fetch_assoc()) !=false ) {
                    	echo '<li><a href="'.$row['vk_link'].'">'.$row['vk_name'].'</a> - '.$row['nickname'].'<b><span style="color: red;">『</span></b><i><span style="color: #3333CC;">'.$row['donate'].'</span></i><b><span style="color: red;">』</span></b></li>';
                    }
                  echo '</ol></div>
    </div>
  </div>     
  </div>
      </div>
      </div>
    </div>
    <div>';
                }
      			$result_desppy=$mysqli->query ("SELECT * FROM `buyers` WHERE `seller` = 'Desppy8'");
      		    printBuyersDesppy ($result_desppy);
              $mysqli->close ();
              
              ?>
              
  
		<?php/* include 'block/Desppy8.php'*/?>

      
    </div>
          <div>
            <div>
          <!-- <div class="panel panel-default"style="box-shadow: 0 0 10px red;">
              <div class="panel-heading" role="tab" id="headingseven">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
          Даниил Кружалкин
                  </a>
                </h4>
              </div>
              <div id="collapseseven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingseven">
                <div class="panel-body">
                  <div class="admins"><a href="https://vk.com/sfsfsfsfn"><img class="img-responsive img-thumbnail" src="img/rem_inn.png"></a></div>
                  <p>Ник: <b><i><span style="color: red;">rem_inn</span></i></b></p>
            <p>Купи у меня Сдонат, получи огромную скидку до 50% и щедрый <span style="color: red;"><b>подарок!</b></span> Ах да, еще я дарю <span style="color: Orange;"><i>мегакоины</i></span> ;) Даю рекомендацию старшим администраторам, чтобы повысить Ваши шансы попасть в Стафф!</p>
                  <a href="https://vk.com/sfsfsfsfn"><button type="button" class="btn btn-default" aria-label="Left Align">
                      ВК
                    </button></a>
                    <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingsevenseven">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesevenseven" aria-expanded="false" aria-controls="collapsesevenseven">
          <b><span style="color:#41A9CC;">Покупатели</span></b>   
                  </a>
                </h4>
              </div>
              <div id="collapsesevenseven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsevenseven">
                <div class="panel-body">
                  <div>
                </div>
                <div class="prokrutka">
                <ol>
                  <small>
          </small></ol></div>
              </div>
            </div>     
            </div>
                </div>
                </div>
              </div>
              <div>
            
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
      <ol>
        <small>
          <li><a href='https://vk.com/id506653446'>Саша Мелихов</a> - fiasko0 <b><span style="color: red;">『</span></b><i><span style="color: #3333CC">Администратор</span></i><b><span style="color: red;">』</span></b></li>
          <li><a href='https://vk.com/v999000999v'>Владислав Журбенко</a> - VLaDoS_1<b><span style="color: red;">『</span></b><i><span style="color: #3333CC">OP</span></i><b><span style="color: red;">』</span></b></li></small></ol>--></div>
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
            	<!--<div class="panel panel-default" style="box-shadow: 0 0 10px green;">
    <div class="panel-heading" role="tab" id="headingNikeron">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNikeron" aria-expanded="false" aria-controls="collapseNikeron">
          Дмитрий Волков
  <!--<p><img src="bear.gif" width="100" height="111" alt="Nikeron"></p>-->
        <!--</a>
      </h4>
    </div>
    <div id="collapseNikeron" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNikeron">
      <div class="panel-body">
      	<figure style="display: block; text-align: center;">
              			<p><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;"src="https://sun9-36.userapi.com/c844320/v844320215/171bb4/IT4oeJyvd4A.jpg"></p>
              			<figcaption><span style="font-family: cursive; color: #000000;">Nikeron</span><blockquote>СДонат по скидкам + много крутых подарков. Писать мне в ВК!.</blockquote><a href="https://vk.com/nikeronvk" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption>
              		</figure>
       <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingNikeronLone">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNikeronLone" aria-expanded="false" aria-controls="collapseNikeronLone">
          <b><span style="color: #41A9CC;">Покупатели</span></b>
          </a>
        </h4>
    <div id="collapseNikeronLone" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNikeronLone">
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
        </div> -->
            	</div>
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