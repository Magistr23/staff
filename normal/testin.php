<?php
/*ini_set("display_errors", 1);
error_reporting(-1);*/
require_once 'config.php';
require_once 'functions.php';
if(isset($_POST['test'])){
	$test = (int)$_POST['test'];
	unset($_POST['test']);
	$result = get_correct_answers($test);
	if(!is_array($result))exit('Ошибка');
	$test_all_data = get_test_data($test);
	$test_all_data_result = get_test_data_result($test_all_data, $result, $_POST);
	/*print_r($_POST);
	print_r($result);
	print_r ($test_all_data_result);*/
	echo print_result($test_all_data_result);
	die;
}
$tests = get_tests();
if(isset($_GET['test'])){
	$test_id = (int)$_GET['test'];
	$test_data = get_test_data($test_id);

	if(is_array($test_data)){
		$count_questions = count($test_data);
		$pagination = pagination($count_questions, $test_data);
	}
}

?>

<!doctype html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <title>Руководство</title>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<body>
	<style>
		* {
			margin: 0;
			padding: 0;
		}
		.wrap{
			width: 800px;
			margin: auto;
		}
		.test-data{
			border: 10px solid #f3f3f3;
			padding: 10px;
			margin: 0 0 20px 0;
		}
		.q{
			border-bottom: 1px solid #000;
			font-weight: bold;
		}
		.a{
			padding: 5px 0;
		}
		.question{
			display: none;
		}
		.pagination{
			margin: 10px;
			text-align: center;
		}
		.pagination a{
			border: 1px solid #ddd;
			border-radius: 50%;
			padding: 3px 5px;
			text-decoration: none;
			background: #fff;
			color: #42Bbca;
			margin: 0 2px 0 0;
		}
		.pagination a:hover{
			background: #eee;
		}
		.pagination > a.nav-active{
			background: #42Bbca;
			color: #fff;
			border-color: #42Bbca;
			cursor: default;
		}
		.center {
			display: block;
			margin: auto;
			text-align: center;
		}
		button.btn{
			border: 1px solod #ccc;
			border-radius: 5px;
			padding: 6px 12px;
			text-decoration: none;
			background: #dcdcdc linear-gradient(#fff, #dcdcdc);
			color: #000;
			cursor: pointer;
			transition: all .3s;
		}
		button.btn:hover{
			background: #dcdcdc linear-gradient(#dcdcdc, #fff);
			box-shadow: 0 0 2px #aaa;
		}
		.none {
			display: none;
		}
		button.testin{
			margin: 10px;
			padding: 6px 12px;
			color: #000;
			border-radius: 5px;
			display: block;
		}
		button.testin:hover{
			box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
		}
	</style>
	<div class="wrap"> 
	<?php  if($tests):	?>
		<h3>Варианты тестов</h3>
		<?php	foreach($tests as $test):	 ?>
			<p><a href="?test=<?=$test['id']?>"><button class = "testin"><?=$test['name']?></button></a></p>
			<?php	endforeach;	?>
			<br><hr><br>
			<div class="content">
				<?php	if(isset($test_data)):	?>
					<p>Всего вопросов: <?=$count_questions?></p>
						<?=$pagination?>
						<span class="none" id = "test-id"><?=$test_id?></span>
						<div class = "test-data">
							<?php	foreach($test_data as $id_question => $item):	?>
								<div class = "question" data-id="<?=$id_question?>" id="question-<?=$id_question?>">
									<?php	foreach($item as $id_answer => $answer):	?>
										<?php	if(!$id_answer):	?>
											<p class="q"><?=$answer?></p>
										<?php	else:	?>
											<p class="a">
												<input type="radio" id="answer-<?=$id_answer?>" name="question-<?=$id_question?>" value="<?=$id_answer?>">
												<label for="answer-<?=$id_answer?>"><?=$answer?></label>
											</p>
										<?php	endif;	?>
									<?php	endforeach;	?>
								</div>
							<?php	endforeach; //$testin_data	?>
						</div>
						<div class="buttons">
							<button class="center btn" id="btn">Закончить тест.</buttom>
						</div>
				<?php	else: //isset($testin_data)	?>
					Выберите тест.
				<?php	endif; //isset($testin_data)	?>
			</div>
	<?php  else: //$tests	?>
		<h3>Нет тестов</h3>
	<?php  endif; //$tests	?>
	</div>
	<script type="text/javascript" src="script.js"></script>

</body>
</html>