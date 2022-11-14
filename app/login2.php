<?php
    require 'dbkon.php'; //DBarekin konexioa egitea beharrezkoa baita

    session_start();
    
    $erabIz= $_POST['erabIzena'];
    $pasahitza= $_POST['pasahitza'];

    $sql ="SELECT * FROM `Erabiltzaileak` WHERE `erabId` = '$erabIz' AND `Pasahitza` = '$pasahitza'";
    $query = mysqli_query($con,$sql);
    $nr = mysqli_num_rows($query); // nr aldagaian 1 erabiltzailea aurkitu bada 0 erabiltzailea ez bada aurkitu
    $row = mysqli_fetch_array($query);

    if(isset($_POST['sesioahasi'])) // Sesioa hasi botoia ematen denean
    {
        if(($nr == 1)){  // nr 1 bada (hau da, erabiltzailea existitzen bada) eta pasahitza ondo badago
            $_SESSION['erabIz'] = $erabIz;  // Session aldagaian gordetzen dugu erabiltzailearen nickname-a
            header("Location: http://localhost:81/erabileremu.php"); // erabiltzaile eremura goaz
            exit;      
        }else{
            require 'dbkon.php';
            $stmt = $con->prepare("INSERT INTO login (ErabId, Pasahitza, saiaKop) VALUES (?, ?, ?)");
            $stmt->bind_param("ssi", $erabIz2, $pasahitza2, $saiaKop);

            $erabIz2 = $_POST['erabIzena'];
            $pasahitza2 = $_POST['pasahitza'];
            $saiaKop = 0;
            $stmt->execute();
            $stmt->close();
            $bool = $con->close();
            echo "ERROREA: Erabiltzaile hori ez da existitzen edo pasahitza txarto!!"; 
            if($bool){
                require 'dbkon.php';
                $stmt2 = $con->prepare("UPDATE login SET saiaKop = saiaKop+1 WHERE ErabId=?");
                $stmt2->bind_param('s', $erabIz3);
                $erabIz3 = $erabIz2;
                $stmt2->execute();
                $stmt2->close();
                $bool = $con->close();
            }
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
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<script type=“text/javascript” src="script2.js" ></script>

<div class="content">

    <!-- Web Orriaren gorputza-->
<body background="banner.jpg">
    <div class="hasiera">
        <table>
            <tr>
                <td>&nbsp;</td>
                <td><p style="background-color: lightblue"><strong> ALTZARIAK </strong></p></td>
                <td>&nbsp;</td>
            </tr>
        </table>
    </div>

    <form name="loginak" class="inputak" method="POST" action="login2.php"> <!-- Se envia al ".php" la info -->
        <table>
            <tr>
                <td>&nbsp;</td>
                <td><input id="erabIzena" type="text" name="erabIzena" placeholder="Erabiltzailea Ad: eneko5" required></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input id="pasahitza" type="password" name="pasahitza" placeholder="Pasahitza Ad: JDkF7SH9" required></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input id="sesioahasi" type="submit" name="sesioahasi" value="Saioa hasi" /></td>
                <td>&nbsp;</td>
            </tr>
        </table>
    </form>

    <table>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>

    <table class="inputak">
        <tr>
            <td>&nbsp;</td>
            <td>Ez zara erregistratu?</td>
            <td>&nbsp;</td>
            <tr>
                <td>&nbsp;</td>
                <td><input id="erregistroBuelta" type="button" name="erregistroBuelta" value="Erregistratu" onclick="location.href='index.php'" /></td>
                <td>&nbsp;</td>
            </tr>
        </tr>
    </table>
</body>
    
</div>

<!-- Html dokumentuaren amaiera -->
</html>