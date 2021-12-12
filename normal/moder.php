<?php 
  $title = "Модеры";
  $post_title = "MODER"; 
  $urlpos = '?pos=moder';
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
        		<div class="col-sm-3">
   					<div class="layer" >
                       <?php
  $mysqli = new mysqli ('localhost', 'cg47894_mainbd', '12345', 'cg47894_mainbd');
	$mysqli->query ("SET NAMES 'utf8'");
      
      function printModer($result_set) {
      
      	while (($row = $result_set->fetch_assoc()) !=false) {
        
    		echo '
              <div class="panel panel-info">
                  <div class="panel-heading">
                      <div class="sidebar-header text-center ellieaa">'.$row['vk_name'].'
                      </div>
                  </div>
                  <div class="panel-body">
                      <figure style="display: block; text-align: center;">
                          <figcaption>
                              <span class="ellieaaMod">MODER</span><br>
                              <span style="font-family: cursive;">
                                    <p>
                                      <img style="width: 150px; border-radius: 10px; border: 3px solid #808080;" class="hidden-sm" src="'.$row['img_link'].'">
                                    </p>
                                    <span class="ellieaa2">'.$row['nickname'].'
                                    </span>
                              </span><br>';
                                     if (!empty($row['comment'])) {
                                    echo '<blockquote><span style="font-family: cursive;">'.$row['comment'].'</span></blockquote>';
                   }
                                  echo '<a href="'.$row['vk_link'].'" class="button9 btn btn-default" aria-label="Left Align">
                                    ВК
                                              </a>
                                          </figcaption>
                                      </figure>
                                  </div>
                              </div>';
        
                       }
      }

    $result_set =  $mysqli->query ("SELECT* FROM `members` WHERE `pos1` LIKE 'Moder'");
  	printModer($result_set);
 	$mysqli->close ();
    ?>
                        
                        </div>

          	</div>
          	<div class="col-sm-9">

          		
			 <div class="img">
               <img class="img-responsive img-thumbnail" src="https://sun9-28.userapi.com/impg/LzVBsLzpUYWvOCIRG7nnteFh5weXGq9xibvTdA/bkSvM3noghU.jpg?size=1920x1080&quality=96&sign=f80b42a269225b1d798379f80c01aeac&type=album">
             </div>
              <hr>
            <h1>Что должен знать Модер?</h1>
            <div class="alert alert-warning" role="alert"><p> Если вы были повышены до должности Модератора — значит вы хорошо себя проявили в роли Хелпера.</p>

<p>Обязанности остаются те же, но на этот раз вы должны будете присматривать за Хелперами, делиться с ними опытом и помогать им.</p></div>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Так же выдадут новую команду</button>
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <ul style = "list-style-type:circle">
<li style="margin-top: 10px;">/socialspy - слежка за личными сообщениями. </li>
</ul>
    </div>
  </div>
</div>
				
            </div>
          	</div>
      	</div>
  </div>
</div>
    <?php include ("block/footer.php");?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="boot/bootstrap.min.js"></script>
</body>
</html>