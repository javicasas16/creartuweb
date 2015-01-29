<?php
	$web = $_POST['web'];
	$suf = $_POST['suf'];
	$dir = $_POST['dir'];
	echo "Se ha creado la web $web.$suf</br>";
	print shell_exec("ls /var/www/");
	echo "</br>";
	print shell_exec("sudo sh /etc/creaweb/creaweb.sh $web $suf $dir");
?>
