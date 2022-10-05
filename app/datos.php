<?php
	$hostname = "db";
	$username = "admin";
	$password = "test";
	$db = "database";

	$konexioa = mysqli_connect($hostname,$username,$password,$db);
	if ($konexioa->connect_error) {
	   die("Database connection failed: " . $konexioa->connect_error);
  }
	
	botoiaukera($konexioa);

#botoiaukera es necesaria para diferenciar dos botones
	function botoiaukera($konexioa){
		if(isset($_POST['bidali'])){
			sartu($konexioa);
		}
		if(isset($_POST['@referencia del boton eliminar'])){
			ezabatu($konexioa);
		}
	}

#El contenido de los POST es la referencia del input en 
#el archivo index.html o .php
	function sartu($konexioa){
		$izena = $_POST['Izen Abizena'];
		$pasahitza = $_POST['Pasahitza'];
		$nan = $_POST['NAN'];
		$tlf = $_POST['Telefono zenbakia'];
		$jaio_data = $_POST['Jaiotze Data'];
		$email = $_POST['Email'];

		$kontsulta = "INSERT INTO Erabiltzaileak(NAN, Izen Abizena, Telefono zenbakia, Jaiotze Data, Email, Pasahitza)' VALUES ('$izena', '$pasahitza', '$nan',
		'$tlf', '$jaio_data', '$email')";
		mysqli_query($konexioa, $kontsulta);
		mysqli_close($konexioa);
		header("Location:index.php");
	}

	function ezabatu($konexioa){
		$pasahitza = $_POST['Pasahitza'];
		$email = $_POST['Email'];

		$kontsulta = "DELETE FROM Erabiltzaileak WHERE Email='$email' AND Pasahitza='$pasahitza'";
		mysqli_query($konexioa, $kontsulta);
		mysqli_close($konexioa);
		header("Location:index.php");
	}
	
	function taulaKargatu($konexioa){
		$kontsulta = "SELECT * FROM Erabiltzaileak";
		$erantzuna = mysqli_query($konexioa, $kontsulta);

		while($fila = mysqli_fetch_array($erantzuna)){
			echo "<tr>";
			echo "<td>".$fila['NAN'];
			echo "<td>".$fila['Izen Abizena'];
			echo "<td>".$fila['Telefono zenbakia'];
			echo "<td>".$fila['Jaiotze Data'];
			echo "<td>".$fila['Email'];
			echo "<td>".$fila['Pasahitza'];
			echo "<tr>";
		}
	}
	
?>
