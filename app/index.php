<?php
    require 'dbkon.php'; //DBarekin konexioa egitea beharrezkoa baita
    session_start();

    //POSTeko aldagaiak definitu
    $izena = $_POST['izena'];
    $nan = $_POST['nan'];
    $jaiodata = $_POST['jaiodata'];
    $telefonoa = $_POST['telefonoa'];
    $email = $_POST['email'];
    $erabIzena = $_POST['erabIzena'];
    $pasahitza = $_POST['pasahitza'];
    $pasahitzaBer = $_POST['pasahitzaBer'];
    
    if(isset($_POST['erregistratu'])) // 'Erregistratu' botoia zapaldu bada
    {

        if($pasahitza == $pasahitzaBer)
        {       
            $sql = "INSERT INTO `Erabiltzaileak`(`NAN`, `Pasahitza`, `IzenAbizena`, `TelefonoZenbakia`, `JaiotzeData`, `Email`, `ErabId`) VALUES ('$nan', '$pasahitza', '$izena', '$telefonoa', '$jaiodata', '$email', '$erabIzena')";
            if (mysqli_query($con, $sql))
            { // arrakasta badu sententzia, hemen sartuko da
                // hemen sartu behar ditugu datuak log taulan (arrakastatsua bai)
                header("Location: http://localhost:81/login2.php");
                exit;
            }else{
                echo '<script language="javascript">alert("ERROREA: Sartutako erabiltzailea existitzen da, saiatu beste batekin!!");</script>'; 
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
    <title>Altzariak - Sarrera</title>
    <link rel="stylesheet" href="styles.css"?v=<?php echo time(); ?>>
    <script type="text/javascript" src="script.js"></script> 
</head>

    <!-- Page content -->

    <!-- Web Orriaren gorputza-->
<body background="banner.jpg">

<div class="content">
    <div class="hasiera">
        <table>
            <tr>
                <td>&nbsp;</td>
                <td><p style="background-color: lightblue"><strong> ALTZARIAK </strong></p></td>
                <td>&nbsp;</td>
            </tr>
        </table>
        
    </div>

    <form name="loginak" id="loginak" class="inputak" action="index.php" method="POST" > <!-- Bere buruari parametroak pasa -->
        <table>
            <tr>
                <td>&nbsp;</td>
                <td><input class="form-control" id="izena" type="text" name="izena" placeholder="Izena" title="Letrak soilik. ADB: Eneko" required/></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input class="form-control" id="email" type="text" name="email" placeholder="email" title="ADB: eperez89@gmail.com" required/></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input class="form-control" id="jaiodata" type="text" name="jaiodata" placeholder="Jaio data" pattern="[0-9]{4}[/]{1}[0-9]{2}[/]{1}[0-9]{2}" title="UUUU/HH/EE   ADB: 2002/03/08" required/></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input class="form-control" id="nan" type="text" name="nan" placeholder="nan" pattern="[0-9]{8}[A-Za-z]{1}" maxlenght="9"title="8 zenbaki eta letra larri 1. ADB: 55259874K" required/></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input class="form-control" id="telefonoa" type="text" name="telefonoa" placeholder="telefonoa" pattern="[0-9]{9}" maxlenght="9"title="9 zenbaki. ADB: 635897623" required/></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input name="erabIzena" id="erabIzena" type="text"  placeholder="Erabiltzaile Izena" title="Erabiltzaile izena sartu. ADB: eneko05"required/></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input id="pasahitza" type="password" name="pasahitza" placeholder="Pasahitza Sartu"  title="Zure pasahitza sartu." required></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input id="pasahitzaBer" type="password" name="pasahitzaBer" placeholder="Pasahitza Berretsi" title="Pasahitza berriz ere idatzi." required></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input id ="erregistratu" type="submit" name="erregistratu" value="erregistratu" title="Sakatu baino lehen eremu guztiak beterik egon behar dira" onclick=datuakKonprobatu()></td>                
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
    <!--        
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" value="Erregistratu" /></td>
                    <td>&nbsp;</td>
                </tr> -->

    <div class="botoiak">
        <table>
            <tr>
                <td>&nbsp;</td>
                <td>Dagoeneko kontua badaukazu?</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input id="sesioahasi" type="button" name="sesioahasi" value="Saioa hasi" onclick="location.href='login2.php' " /></td>
                <td>&nbsp;</td>
            </tr>
        </table> 
    </div>

    
</div>
</body>
<!-- Html dokumentuaren amaiera -->
</html>