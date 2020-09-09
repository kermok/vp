<?php
	$username = "Kermo Kulp";
	$fulltimenow = date("d.m.Y H:i:s");
	$hournow = date("H");
	$partofday = "lihtsalt aeg";
	if($hournow < 7){
		$partofday = "uneaeg";
	}
	if($hournow >= 8 and $hournow < 18){
		$partofday = "akadeemilise aktiivsuse aeg";
	}
	
	//vaatame semestri kulgu
	$semesterstart = new DateTime("2020-8-31");
	$semesterend = new DateTime("2020-12-13");
	// selgitame välja nende vahe eh erinevuse
	$semesterduration = $semesterstart->diff($semesterend);
	//leiame selle päevade arvuna
	$semesterdurationdays = $semesterduration->format("%r%a");
	
	//tänane päevade
	$today = new DateTime("now");
	//if($fromsemesterstartdays < 0){semester pole peale hakanud}
		
	
	
?>
<!DOCTYPE html>
<html lang="et">
<head>
  <meta charset="utf-8">
  <title><?php echo $username; ?> programmeerib veebi</title>

</head>
<body>
  <h1><?php echo $username; ?></h1>
  <p>See veebileht on loodud õppetöö käigus ning ei sisalda mingit tõsiseltvõetavat sisu!</p>
  <p>Leht on loodud veebiprogrammeerimise kursuse raames <a href="https://www.tlu.ee/">Tallinna Ülikooli</a> Digitehnoloogiate instituudis.</p>
  <p>Lehe avamise hetkel oli <?php echo $fulltimenow; ?>.</p>
  <p><?php echo "Parajasti on " .$partofday ."."; ?></p>

</body>
</html>