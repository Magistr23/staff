<?php
	if (empty($_GET['pos'])) {header ("Location: ?pos=main");}
	if ($_GET['pos'] == 'contact') {include "contact.php";}
	if ($_GET['pos'] == 'main') {include "normal/main.php";}
	if ($_GET['pos'] == 'maintest') {include "test/normal/main.php";}
	if ($_GET['pos'] == 'seller') {include "normal/seller.php";}
    if ($_GET['pos'] == 'helper') {include "normal/helper.php";}
    if ($_GET['pos'] == 'moder') {include "normal/moder.php";}
    if ($_GET['pos'] == 'stm') {include "normal/stm.php";}
    if ($_GET['pos'] == 'glm') {include "normal/glm.php";}
	if ($_GET['pos'] == 'admin') {include "normal/admin.php";}
	if ($_GET['pos'] == 'aa') {include "normal/gla.php";}
	if ($_GET['pos'] == 'owner') {include "normal/owner.php";}
	if ($_GET['pos'] == 'honours') {include "normal/honours.php";}
	if ($_GET['pos'] == 'rp') {header('Location: https://www.helperstaff.ru/rpgame/');}
	
	if ($_GET['pos'] == '1' && empty($_GET['dir'])) {header ("Location: ?pos=main");}
	if ($_GET['pos'] == '1' && $_GET['dir'] == 'contact') {include "helps/contact.php";}
	if ($_GET['pos'] == '1'  && $_GET['dir'] == 'mained') {include "helps/main.php";}
	if ($_GET['pos'] == '1'  && $_GET['dir'] == 'sellers') {include "helps/seller.php";}
	if ($_GET['pos'] == '1'  && $_GET['dir'] == 'helpers') {include "helps/helper.php";}
	if ($_GET['pos'] == '1'  && $_GET['dir'] == 'moders') {include "helps/moder.php";}
	if ($_GET['pos'] == '1'  && $_GET['dir'] == 'stm') {include "helps/stm.php";}
	if ($_GET['pos'] == '1'  && $_GET['dir'] == 'glm') {include "helps/glm.php";}
	if ($_GET['pos'] == '1'  && $_GET['dir'] == 'admins') {include "helps/admins.php";}
	if ($_GET['pos'] == '1'  && $_GET['dir'] == 'gla') {include "helps/gla.php";}
	if ($_GET['pos'] == '1'  && $_GET['dir'] == 'owners') {include "helps/owner.php";}
	if ($_GET['pos'] == '1'  && $_GET['dir'] == 'correct') {include "helps/cor.php";}
	if ($_GET['pos'] == '2' && $_GET['dir'] = 'cor') {include "helps/cor_sel1.php";}
	if ($_GET['pos'] == 'd' && $_GET['dir'] = 'cor') {include "helps/cor_seld.php";}
	if ($_GET['pos'] == 'exclusive' && $_GET['dir'] = 'corex') {include "helps/cor_selex.php";}
	if ($_GET['pos'] == 'createacc' && $_GET['dir'] = 'cacc') {include "helps/cor_cacc.php";}
	if ($_GET['pos'] == '1' && $_GET['dir'] == 'honours') {include "helps/honours.php";}
?>
