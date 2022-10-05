<?php include('datos.php'); ?>
<!DOCTYPE html>
	<head>
        <link rel="stylesheet" type="text/css" href="sesioaHasi.css">

		<title>
			Polideportiboaren saio hasiera
		</title>
    </head>
    	
	<body>
<form action="sesioHasi.html">
    <p><label for="nombre">Erabiltzailea:</label></p>
    <input type="text" name="erabiltzailea"><br>
    <p><label for="nombre">Pasahitza:</label></p>
    <input type="password" name="pasahitza"><br><br>

    <button type="submit" name="bidali">Bidali</button>
	<input type="reset" value="Ezabatu">
	<input type="button" value="Pasahitza berreskuratu"><br>


    <a href="sesioaHasi.html"></a>
    <p> 
        Oraindik ez daukazu kontu bat? <input type="button" name="Click" value="Hemen sartu"><br>
    </p>
    </form>
        <?=taulakargatu($konexioa); ?>
    </body>
</html>