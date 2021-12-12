<?php 
  $title = "Контакты";
  $post_title = "CONTACT"; 
  $urlpos = '?pos=contact';
  $directoryURI = $_GET['pos'];
  $path = parse_url($directoryURI, PHP_URL_PATH);
  $components = explode('$urlpos', $path);
  $first_part = $components[0];
 ?>
<!DOCTYPE html>
<html lang="en">
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
        			<img src="img/websiti.jpg" style="width: 100%;">
        			<hr>
        			<div class="cite text-center"><h2 style="font-family: cursive;">Люди которые работают над сайтом</h2></div>
        			<hr>
	        			<div class="col-sm-3">
	        				<figure style="padding-bottom: 30px; display: block; text-align: center;"><img style="width: 80%; border: 5px solid #808080; border-radius: 10px;" src="https://pp.userapi.com/c845323/v845323743/1513ca/UFUtoKZwayk.jpg"><figcaption>По вопросам игры обращайтесь, всем отвечаю. Пока никого не кусал за вопросы }:)<br><a href="https://vk.com/id95515793" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption></figure>
	        			</div>
	        			<div class="col-sm-3">
	        				<figure style="padding-bottom: 30px; display: block; text-align: center;"><img  style="width: 80%; border: 5px solid #808080; border-radius: 10px;" src="https://pp.userapi.com/c854124/v854124367/124eb/OTj00obYIFA.jpg"><figcaption>Справедливая и честная вампирша, которая служит серверу!<br><a href="http://vk.com/id525081588" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption></figure>
	        			</div>
						<div class="col-sm-3">
							<figure style="padding-bottom: 30px; display: block; text-align: center;"><img  style="width: 80%; border: 5px solid #808080; border-radius: 10px;" src="https://pp.userapi.com/c850720/v850720694/12c3f2/QyAdlG8MpFE.jpg"><figcaption><br><a href="https://vk.com/id511722855" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption></figure>
						</div>
						<div class="col-sm-3">
							<figure style="padding-bottom: 30px; display: block; text-align: center;"><img  style="width: 80%; border: 5px solid #808080; border-radius: 10px;" src="https://pp.userapi.com/c852136/v852136235/947f3/tibvFhE0eUw.jpg"><figcaption> <br><a href="https://vk.com/danilzaisev" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption></figure>
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