<?php
    require 'dbkon.php'; //DBarekin konexioa egitea beharrezkoa baita

    session_start(); // Session global variable erabili ahal izateko


    //Aldez aurretik index-etik lortutako aldagaik baditugu, orain erabiltzaile izena eta pasahitza lortuko ditugu
    
    /*$izena = $_SESSION['izena'];
    $pasahitza = $_SESSION['Pasahitza'];
    $nan = $_SESSION['nan'];
    $jdat =  $_SESSION['jaiodata'];
    $nan = $_SESSION['nan'];
    $tel = $_SESSION['telf'];*/

    $izena = $_SESSION['izena'];
    $nan = $_SESSION['nan'];
    $jaioData = $_SESSION['jaiodata'];
    $telefonoa = $_SESSION['telefonoa'];
    $email = $_SESSION['email'];

    if(isset($_POST['sesioahasi']))
    {
        $_SESSION['erabIzena'] = $_POST['erabIzena'];
        $_SESSION['pasahitza'] = $_POST['pasahitza'];
        $erabIz= $_POST['erabIzena'];
        $pasahitza= $_POST['pasahitza'];
        $pasahitzaBer= $_POST['pasahitzaBer'];

        if($pasahitza == $pasahitzaBer){
            // Komandoa prestatu

            /* 
            $db = new mysqli("db", "admin", "test", "database");
            $sql = "SELECT * FROM liburu;";
            $stmt = $db->prepare($sql);
            $stmt->execute();
            //grab a result set
            $resultSet = $stmt->get_result();
            //pull all results as an associative array
            $liburuak = $resultSet->fetch_all();
            foreach($liburuak as $libro) { */

            //echo("1");
            $db = new mysqli("db", "admin", "test", "database");
            $statement = $db->prepare("select * from erabiltzaile where erabIz = ?");
            $statement->bind_param("s", $erabIz);
            $emaitza = $statement->execute();
            //echo("2");
            /*



            $sql ="SELECT * FROM `erabiltzaile` WHERE `erabIz` = '$erabIzena'"; // Hau da konprobatzeko ea erabiltzaile izen hori hartuta dagoen edo ez.
            $query = mysqli_query($con,$sql);
            $nr = mysqli_num_rows($query); // nr (number rows) aldagaia 1 izango da erabiltzailea aurkitu badu eta 0 ez badu aurkitu.
            $row = mysqli_fetch_array($query); // Ez badago, row NULL balioa izango du. Eta sartu ahal dugu. Bestela, erabiltzaileizena emango digu.

             */
    
          
    
        }
    } 

?>


<!DOCTYPE html>
<!-- Goikoaren bidez artxiboaren extensioa espezifikatzen dugu (Badaezpada) -->

<!-- HTMLren hasiera -->
<html lang="en">
<!-- Honen bidez hmtl-k erabiliko duen hizkuntza esaten diogu ingelesa-->

<!-- Web Orriarren aurrekaria-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALTZARIAK - Login</title>
    <link rel="stylesheet" href="styles.css">
    <script type="text/javascript" src="script2.js" defer></script> 
</head>

<div class="content">

    <!-- Web Orriaren gorputza-->
<body background="banner.jp">
    <div class="hasiera">
        <table>
            <tr>
                <td>&nbsp;</td>
                <td><p style="background-color: blue"><strong> ALTZARIAK </strong></p></td>
                <td>&nbsp;</td>
            </tr>
        </table>
    </div>

    <form id="loginak" name="loginak" class="inputak" action="login.php" method="POST">
        <table>
            <tr>
                <td>&nbsp;</td>
                <td><input name="erabIzena" id="erabIzena" type="text"  placeholder="Erabiltzaile Izena" title="Erabiltzaile izena sartu. ADB: eneko05"required/></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input id="pasahitza" type="password" name="pasahitza" placeholder="Pasahitza Sartu"  title="Zure pasahitza sartu." ></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input id="pasahitzaBer" type="password" name="pasahitzaBer" placeholder="Pasahitza Berretsi" title="Pasahitza berriz ere idatzi." ></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input id="sesioahasi" type="button" name="sesioahasi" value="Sesioa hasi" title="Eremu guztiak betetakoan sakatu" onclick="pswSecure()" /></td>
                <td>&nbsp;</td>
            </tr>
        </table>
    </form>
</body>
    
</div>

<!-- Html dokumentuaren amaiera -->
</html>