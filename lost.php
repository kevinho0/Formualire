<html>
<head>
	<meta charset="utf-8"/>
	<title>Objet-Perdu</title>
</head>
<body>
<form method="POST" action ="fond.php">
	<h1>Tu as perdu quelques chose ?</h1>
	<select name = "gare">
		<option value =selected> </option>
	<?php
		$file = "objets-trouves-restitution.csv";
		$f = fopen("$file", "r");
		$entete = fgetcsv($f,0,";");
		$gare = array();
		sort($gare);
		while ($line = fgetcsv($f,0,";")) {
			$gare[$line[3]] = $line[4];
		}
		foreach ($gare as $nom => $uic) {
			echo"<option value =$uic>$nom</option>\n";
		}
	?>
	</select>
	<br/>
	<br/>
	<br/>

	<p>Descriptin de l'objet</p>
	<input type ="text" name ="descr"/>
	<input type ="submit" name ="Go" value="Trouve"/>
 </form>
 
</body>
</html>