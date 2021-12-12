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
        			<img src="https://i.imgur.com/ZXRPmSn.jpg" style="width: 100%;">
        			<hr>
        			<div class="cite text-center"><h2 style="font-family: cursive;">Работники сайта.</h2></div>
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
							<figure style="padding-bottom: 30px; display: block; text-align: center;"><img  style="width: 80%; border: 5px solid #808080; border-radius: 10px;" src="https://sun9-11.userapi.com/impg/rYiTK3BL3abA4TrqODpPyhHt80lMmdx3It3bDg/neHyoW_E7-0.jpg?size=1080x1080&quality=95&sign=5e41c868c27f3f9ad00e53c0dc7adecf&type=album"><figcaption>Добрая и всех люблю, можно обращаться как по сайту так и по серверу) &#128151<br><a href="https://vk.com/x3eem" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption></figure>
						</div>
						<div class="col-sm-3">
							<figure style="padding-bottom: 30px; display: block; text-align: center;"><img  style="width: 80%; border: 5px solid #808080; border-radius: 10px;" src="https://sun9-37.userapi.com/impg/xXbDwjJKksbFVNEoPtCm3Zht1wpc31w5A6cpdQ/IPB4_mclyjg.jpg?size=720x720&quality=96&sign=3459af663042a0f56815b38ff4eb952c&c_uniq_tag=GHNbFNV7GN2brZGH_jsJ_GvZ-RLlUucyuoqbNLqkhuw&type=album"><figcaption>Eternal Apathy  <br><a href="https://vk.com/delight00" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption></figure>
						</div>
						</div>
						<br>
						<hr>
						<div class="cite text-center"><h2 style="font-family: cursive;">Спонсор сайта.</h2></div>
						<hr>
						<div class="col-sm-6">
							<figure style="padding-bottom: 30px; display: block; text-align: center;"><img  style="width: 60%; border: 5px solid #808080; border-radius: 10px;" src="https://sun9-10.userapi.com/impg/6knVK8gVcugjc5LWQ-0iEK8uZRtJf1dzees1pw/8kYYQtNzYnA.jpg?size=1760x1545&quality=96&sign=d174e8b89cf68c404ef683116458226e&type=album"><figcaption>Владимир Рычалкин <br><a href="https://vk.com/wow_an20" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption></figure>
						</div>
        		</div>
        	</div>
        </div>
    </div>
    <script>
function myWindowOpen() {
  var myWindow = window.open("https://helperstaff.ru/normal/testin.php", "Тесты", "width=1000,height=500");
}
</script>

<button onclick="myWindowOpen()">Открыть окно</button>
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