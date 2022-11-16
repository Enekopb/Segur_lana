<?php

    require 'dbkon.php'; //DBarekin konexioa egitea beharrezkoa baita


    Session_start();

    if($_SESSION['sesioIzena']!="login2.php"){
        header("Location: http://localhost:81/index.php");
    }

    if(isset($_POST['aldatu']))
    {
        $erabIzena = $_POST['erab'];
        $pass = $_POST['pasahitz'];

        // Begiratzen dugu ea erabiltzailea eta pasahitza ondo sartu dituen...

        $sql = "SELECT * FROM `Erabiltzaileak` WHERE `ErabId` = '$erabIzena' AND `Pasahitza` = '$pass'"; // Bilatzen dugu erabiltzailea DB-an.
        $query = mysqli_query($con,$sql);
        $nr = mysqli_num_rows($query);
        $row = mysqli_fetch_array($query); // Ez badago, $row null, bestela array bat izango da datuekin.

        if($nr == 0) 
        {
            echo "Erabiltzaile hori ez dago datu basean, edo pasahitza txarto sartu duzu.";
        }
        else{   
                $iz = $_POST['izena'];
                $mail = $_POST['emaila'];
                $sql = "UPDATE `Erabiltzaileak` SET IzenAbizena='$iz', Email='$mail' WHERE `ErabId` = '$erabIzena'";
            if(mysqli_query($con,$sql)) // Ondo exekutatu bada hemen sartuko da.
            {
                echo "ZURE DATUAK ONDO ALDATU DIRA!!";
            }else
            {
                echo "ERROREA";
            }
        }
    }

        $query = "SELECT * FROM Erabiltzaileak where ErabId ='$erabIzena'";
        $result = mysqli_query($con, $query);
                
        //Datuak gorde
        $row = mysqli_fetch_array($result);
        $nan = $row["nan"];
        $pasahitza= $row["pasahitza"];
        $izena = $row["izena"];
        $tel = $row["telefonoa"];
        $jdat =  $row["jaioData"];
        $emaila = $row["emaila"];
        $erabIzena= $row['erabIz'];
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
    <title>ALTZARI BAT SARTU</title>
    <link rel="stylesheet" href="styles.css"?v=<?php echo time(); ?>">
</head>

<script type=“text/javascript” src="script2.js" ></script>

    <!-- Web Orriaren gorputza-->
<body background="banner.jpg">
    <div class="content">
        <div class="hasiera">
            <table>
                <tr>
                    <td>&nbsp;</td>
                    <td><p style="background-color: lightblue"><strong> ALTZARI DENDA </strong></p></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><p style="background-color: lightblue"><strong> Zure datuak: </strong></p></td>
                    <td>&nbsp;</td>
                    
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><p style="background-color: lightblue"> Hemen datuak aldatu dezakezu, horretarako sartu zure erabiltzailea eta pasahitza. Nahi dituzun izena eta emaila aldatzeko sartu ezazu berria. </p></td>
                    <td>&nbsp;</td>
                </tr>
            </table>
        </div>
    </div>    
    <div class="php">
        <table>
            <tr>
		        <th>ErabIz </th>
		        <th>Izena</th>
		        <th>Emaila</th>
	        </tr>
            <?php
                echo "<tr><td id ='erabiltzaile izena'>" . $erabIzena .  "</td><td id = 'izena'>" . $izena . "</td></td><td id = 'emaila'>" . $emaila . "</td></td><td id = 'jaiotze data'>";
            ?>
        </table>
    </div>
    <div class="content">
        <div class="inputak">
            <form action="datuakEditatu.php" method="POST">
            <table>
            <tr>
                <td>&nbsp;</td>
                <td><input id="erab" type="text" name="erab" placeholder="Erabiltzaile izena sartu."  title="Erabiltzaile izena sartu" required/></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input id="pasahitz" type="password" name="pasahitz" placeholder="Pasahitza Sartu"  title="Zure pasahitza sartu." required/></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input id="izena" type="text" name="izena" placeholder="Izena Sartu"  title="Zure izena sartu." required/></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input id="emaila" type="email" name="emaila" placeholder="Emaila Sartu" title="Zure emaila idatzi." required/></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input id="aldatu" type="submit" name="aldatu" value="Gorde"  /></td>
                <td>&nbsp;</td>
            </tr>
            </table>
            </form>
        </div>
        <table>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
        </table>
        <div class="botoiak">
            <table>
                <tr>
                    <td>&nbsp;</td>
                    <td><input id="bueltatuBot" type="button" name="bueltatuBot" value="Bueltatu" onclick="location.href='erabileremu.php'"/></td>
                    <td>&nbsp;</td>
                </tr>
            </table>
        </div>
    </div>

</body>
<!-- Html dokumentuaren amaiera -->
</html>