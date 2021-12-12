<?php
define("HOST", "localhost");
define("USER", "cg47894_mainbd");
define("PASS", "12345");
define("DB", "cg47894_mainbd");
$db = @mysqli_connect(HOST, USER, PASS, DB) or die('Нет соединения');
mysqli_set_charset($db, 'utf8') or die('Нет кодировки');

?>