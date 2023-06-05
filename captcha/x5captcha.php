<?php
include("../res/x5engine.php");
$nameList = array("jlm","gta","p8g","4ks","27g","zn8","sxy","dvp","fcd","mxn");
$charList = array("U","D","2","T","M","S","L","8","C","J");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
