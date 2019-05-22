<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Tugas AHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<header>
	<h1>TUGAS AHP</h1>
</header>

<div class="">
	<nav id="" role="">
		<ul>
			<li><a class="" href="index.php">Home</a></li>
			<li>
				<a class="" href="kriteria.php">Kriteria
				</a>
			</li>
			<li>
				<a class="" href="alternatif.php">Alternatif
				</a>
			</li>
			<li><a class="" href="bobot_kriteria.php">Perbandingan Kriteria</a></li>
			<li><a class="" href="bobot.php?c=1">Perbandingan Alternatif</a></li>
				<ul>
					<?php

						if (getJumlahKriteria() > 0) {
							for ($i=0; $i <= (getJumlahKriteria()-1); $i++) { 
								echo "<li><a class='' href='bobot.php?c=".($i+1)."'>".getKriteriaNama($i)."</a></li>";
							}
						}

					?>
				</ul>
			<li><a class="" href="hasil.php">Hasil</a></li>
		</ul>
	</nav>