<html>
<head>
	<title>Objet-Perdu</title>
</head>
<body>
	<h1>Voilà ce qu'on a trouvé</h1>
	<?php
	if($_POST['gare']){
		$uic = $_POST['gare'];
	}
	if($_POST['descr']){
		$descr = $_POST['descr'];
	}

	$file = "objets-trouves-restitution.csv";
	$f = fopen("$file", "r");
	$entete = fgetcsv($f,0,";");
	$gare = array();
		while ($line = fgetcsv($f,0,";")) {
			if($uic and $line[4] != $uic ){
				continue;
			}
			if(stripos($line[5], $descr) == false and stripos($line[6], $descr)== false){
				continue;
			}
			echo"<li>",$line[1]," ", $line[3];
			echo " ",$line[5]," ", $line[6],"</li>";
		}
	?>
</body>
</html>