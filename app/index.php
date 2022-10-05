<?php
include('datos.php');
?>
<!DOCTYPE html>
<html lang "en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Sample text</h1>
	<table>
		<thead>
			<th>NAN</th>
			<th>Izena Abizena</th>
			<th>Telefonoa</th>
			<th>Jaio-data</th>
			<th>Email</th>
			<th>Pasahitza</th>
		</thead>
		<tbody>
			<?=taulaKargatu($konexioa); ?>
	<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
	<script>
		
	</script>
	<script src="./script.js"></script>
</body>
</html>
