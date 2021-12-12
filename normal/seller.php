<?php 
  $title = "Продавцы";
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
              <p>Писать префикс "<span style="color: #6600FF">[Сайт]</span>", так они вам ответят быстрее.</p>
            </div>   
            <div class="panel panel-info">
                <div class="panel-heading">
                	<div class="sidebar-heading">Даниела и Настя</div>
                </div>
                <div class="panel-body">
                  <p>По вопросам и добавлению в список людей обращаться сюда</p>
        			<a href="https://vk.com/id616237526" class="button9 btn btn-default" aria-label="Left Align">Даниела</a>
        			<a href="https://vk.com/id634476883" class="button9 btn btn-default" aria-label="right Align">Настя</a>
                </div>
            </div>                   
           </div>
          	<div class="col-sm-9">
            	<div class="img"><img class="img-responsive img-thumbnail" src="https://sun9-62.userapi.com/impg/IFOhKTK_XrLvv4He7Vf7fB3HMEIHU19ogFgZUQ/jfTX6mpbgK0.jpg?size=1920x1080&quality=96&sign=9c5f0e321006b7a94a4f1aff275c66cc&type=album"></div>
                  <hr>
                  <h1 style="text-align: center;">Продавцы</h1>
                  <hr>
					<div class="col-sm-4">
							<figure style="padding-bottom: 30px; display: block; text-align: center;"><img  style="width: 80%; border: 5px solid #808080; border-radius: 10px; box-shadow: 0 0 10px red;" src="https://i.ibb.co/yR1D1xv/Lir-RXURyn-m-OYpcy-h-Pd5-2-B9-WTQfy-YU7-LGqk-SEUift-E6-Bf6u8umt-TEs-Fe4-J8fhj-Bn-JPwl-T.jpg"><figcaption>Миша Степанов<br> _Fibbs_ <br>OWNER. По вопросам доната и игры. Если у вас есть деньги, то Миша вас найдёт :)<br><a href="https://vk.com/id304825541" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption></figure>
					</div>
					<div class="col-sm-4">
							<figure style="padding-bottom: 30px; display: block; text-align: center;"><img  style="width: 80%; border: 5px solid #808080; border-radius: 10px; box-shadow: 0 0 10px #000000;" src="https://sun9-43.userapi.com/impg/aqjxgEBPy9v8wpbZiwstVYAnh90tkePiVVNRyA/PFWkbpkBSw8.jpg?size=1148x1236&quality=96&sign=34ddb2f15bb8bc4dfbab126f17f6871f&type=album"><figcaption>Кирилл Миронов<br>xSoociaL<br>OWNER. Может продать все, что угодно на дуэлях и анархии, а так же и Сдонат, вопрос лишь в ваших деньгах :).<br><a href="https://vk.com/xsocial" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption></figure>
					</div>
					<div class="col-sm-4">
							<figure style="padding-bottom: 30px; display: block; text-align: center;"><img  style="width: 80%; border: 5px solid #808080; border-radius: 10px; box-shadow: 0 0 20px #ffc0cb;" src="https://sun9-74.userapi.com/impg/FBh5MfJa87kbePO3DuSbvPK6oKGHcd3K-dti5w/U_EinwMRO94.jpg?size=2159x2160&quality=96&sign=c09fdc3ac62bf4adbbc4d197a2a11e27&type=album"><figcaption>Анатолий Алифанов<br>Desppy8<br>Покупай Сдон у Деспи. Подарки и скидки ждут тебя!<br><a href="https://vk.com/desppy8" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption></figure>
					</div>
			</div>
		</div>
    	<div class="clear"></div>
    </div>
    </div>
    <?php include ("block/footer.php");?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="boot/bootstrap.min.js"></script>
  </body>
</html>