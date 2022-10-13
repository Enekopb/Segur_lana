<?php
    require 'dbkon.php'; //DBarekin konexioa egitea beharrezkoa baita
    session_start();

    //POSTeko aldagaiak definitu
    if(isset($_POST['erregistratu'])) // 'Erregistratu' botoia zapaldu bada
    {
        $_SESSION['izena'] = $_POST['izena'];
        $_SESSION['nan'] = $_POST['nan'];
        $_SESSION['jaiodata'] = $_POST['jaiodata'];
        $_SESSION['telefonoa'] = $_POST['telefonoa'];
        $_SESSION['email'] = $_POST['email'];
        header("Location: http://localhost:81/login.php");
        exit;
    }
    

    // EN ESTE DE ABAJO NO SE GUARDAN LOS DATOS Y CREO QUE POR ESO NO VA

    //$izena= $_POST['izena'];
    //$abizena= $_POST['abizena'];
    //$emaila= $_POST['emaila'];
    //$jaiotzeData= $_POST['jaiotzeData'];
    //$nan= $_POST['nan'];
    //$telefonoZenbakia= $_POST['telefonoZenbakia'];

    
    //Hurrengo orrialdera (login.php) eraman
    

    
    
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
    <link rel="stylesheet" href="styles.css">
    <script type="text/javascript" src="script.js" defer></script> 
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

    <form name="loginak" id="loginak" class="inputak" action="login.php" method="POST" > <!-- Bere buruari parametroak pasa -->
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
                <td><input class="form-control" id="jaioData" type="text" name="jaioData" placeholder="Jaiodata" pattern="[0-9]{4}[/]{1}[0-9]{2}[/]{1}[0-9]{2}" title="UUUU/HH/EE   ADB: 2002/03/08" required/></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input class="form-control" id="nan" type="text" name="nan" placeholder="nan" pattern="[0-9]{8}[A-Za-z]{1}" maxlenght="9"title="8 zenbaki eta letra1. ADB: 55259874k" required/></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input class="form-control" id="telefonoa" type="text" name="telefonoa" placeholder="telefonoa" pattern="[0-9]{9}" maxlenght="9"title="9 zenbaki. ADB: 635897623" required/></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input id ="erregistratu" type="button" value="Erregistratu" title="Sakatu baino lehen eremu guztiak beterik egon behar dira" onclick="datuakKonprobatu()" ></td>
                <!--     onclick=datuakKonprobatu() kendu dut   -->
                
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