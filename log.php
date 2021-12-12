<?php 
  $title = "Авторизация";
  $post_title = "Log-in"; 
  $urlpos = '?pos=logining';
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
    <div class="wrapper" style='background-image: url("https://psv4.userapi.com/c856320/u525081588/docs/d7/289cd1c7fd08/fon.jpg?extra=Vdjxe8fv6Mkgou1GpzKRiDz0jbDBHLQ5j66lqR_E_s9IGXpoQga0f94B14mVu0P6UVBZE6dKs5WJ7s4kYyWCoTEfAg4mnhL00MOMQ7ZTOqkZX5-CDbRD2xMPIFcw4CKvvLeH_Os_lasx8yny8yKI-l-h"); zoom: 1; background-size: 100%;'>
    	<div class="container">
        	<div class="block1">
        		<div class="row">
        			<div class='col-md-6 text-center' style='margin-left: 25%; margin-top: 25%;'>
                      <h2 style='margin-bottom: 5%;'>Вход </h2>
                  		<form action='#' method='post'>
                      		<input class="form-control" type='text' name='login' placeholder='Введите ваш логин' style='margin: 5px; width: 200px; margin-left: 175px;'>
                          <input class="form-control" type='password' name='pass' placeholder='Введите ваш пароль' style='margin: 5px; width: 200px; margin-left: 175px;'>
                          <input class="btn btn-success" type='submit' name='do-log' value='Войти' style='margin: 5px;'>
                      </form>
                      <div id = 'gg'></div>
                      <script type="text/javascript">
                        // Check if the page has loaded completely                                         
                        $(document).ready( function() { 
                            $('#gg').load('php-file.php'); 
                        }); 
                    </script> 
                      <?php
                      session_start ();
                      $mysqli = new mysqli ('localhost', 'cg47894_mainbd', '12345', 'cg47894_mainbd');
                      $mysqli->query ("SET NAMES 'utf8'");
                        function console_log( $data ){
                          echo '<script>';
                          echo 'console.log('. json_encode( $data ) .')';
                          echo '</script>';
                        }
                          if (isset($_POST['do-log'])) {
                          	if (!empty($_POST['login']) && !empty($_POST['pass'])) {
                            	$username = $_POST['login'];
                              	$password = $_POST['pass'];
                              	$pass = md5($password);
                              $result = $mysqli->query ("SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$pass'");
                              $count = mysqli_num_rows ($result);
							  if ($count == 1) {
                              	$_SESSION['username_helperstaff'] = $username;
                              } else {
                              	echo "Неверный логин или пароль.";
                              }
                            }
                      	  }
                      function printTypeRed ($redresult1) {
                        while (($row = $redresult1->fetch_assoc()) != false) {
                            echo $row['type'];
                        }
                      }
                      function checkTypeRed ($redresult2) {
                        while (($row = $redresult2->fetch_assoc()) != false) {
                            if ($row['type'] == 'sel') {
                                $typeNum = '2';
                                echo $typeNum;
                            } else if ($row['type'] == 'red') {
                                $typeNum = '1';
                                echo $typeNum;
                            } else if ($row['type'] == 'seld') {
                                $typeNum = 'd';
                                echo $typeNum;
                            } else if ($row['type'] == 'redexcl') {
                                $typeNum = 'exclusive';
                                echo $typeNum;
                            } else if ($row['type'] == 'cacc') {
                                $typeNum = 'createacc';
                                echo $typeNum;
                            }
                        }
                      }
                      function printTypeCor ($redresult3) {
                        while (($row = $redresult3->fetch_assoc()) != false) {
                          if ($row['type'] == 'sel' || $row['type'] == 'seld') {
                            echo 'cor';
                          } else if ($row['type'] == 'red') {
                            echo 'correct';
                          } else if ($row['type'] == 'redexcl') {
                            echo 'corex';
                          } else if ($row['type'] == 'cacc') {
                          	echo 'createacc';
                          }
                        }
                      }
          			  if (!empty($_SESSION['username_helperstaff'])) {
                      	$usernames = $_SESSION['username_helperstaff'];
                        $redresult = $mysqli->query ("SELECT * FROM `users` WHERE `username` = '$usernames'");
                        $redresult1 = $mysqli->query ("SELECT * FROM `users` WHERE `username` = '$usernames'");
                        $redresult2 = $mysqli->query ("SELECT * FROM `users` WHERE `username` = '$usernames'");
                        $redresult3 = $mysqli->query ("SELECT * FROM `users` WHERE `username` = '$usernames'");
                        function printLinkExcl ($redresult) {
                        	while (($row = $redresult->fetch_assoc()) != false) {
                            	if ($row['type'] == 'redexcl' || $row['type'] == 'cacc') {
                                  $usernames = $_SESSION['username'];
                                	echo "<a href='https://helperstaff.ru/?pos=1&dir=correct&go_red=".$usernames."'><button class='btn btn-login'>Перейти на редактирование стаффа</button></a><br>";
                                }
                            }
                        }
                        printLinkExcl ($redresult);
                        echo "<a href='https://helperstaff.ru/?pos="; checkTypeRed ($redresult2); echo "&dir="; printTypeCor ($redresult3); echo "&go_"; printTypeRed ($redresult1); echo "=".$usernames."'><button class='btn btn-login' style='margin-top: 5px;'>Перейти на странницу с вашими правами</button></a>";
                      }
          console_log($_SESSION['username_helperstaff']);
                      $mysqli->close ();
                      ?>
                  </div>
        		</div>
        	</div>
        </div>
		
      </div>
    <div class="clear"></div>
    <?php include ("block/footer.php");?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="boot/bootstrap.min.js"></script>
</body>
</html>