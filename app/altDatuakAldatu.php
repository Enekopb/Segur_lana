<?php

    require 'dbkon.php'; //DBarekin konexioa egitea beharrezkoa baita

    Session_start();

    if (isset($_POST['Joan'])) // Aukera bat aukeratu bada...
    {
        $x = $_POST['auk'];
        foreach($x as $value)
        {
            if($value == 'sartu') // Altzari bat sartu datu basean.
            {
                header("Location: http://localhost:81/altSartuDB.php");
            }elseif($value == 'aldatu'){ // Altzari baten datuak aldatu.
                header("Location: http://localhost:81/altEditatuDB.php");
            }elseif($value == 'ezabatu'){ // Altzari baten datuak aldatu.
                header("Location: http://localhost:81/altEzabatuDB.php");
            }
            else{
                echo 'ERROREA';
            }
            exit;
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
    <title>ALTZARI DATUAK ALDATU</title>
    <link rel="stylesheet" href="styles.css">
</head>

<script type=“text/javascript” src="script2.js" ></script>


<!--<div class="irudia">
    <img src="https://media.istockphoto.com/photos/blue-book-picture-id1281955543?b=1&k=20&m=1281955543&s=170667a&w=0&h=ZmwacrjQewEU3RqJLYufA-Bi7JVOI2JgcB8X0o7vPeI=" alt="" width="300" height="200">
</div>

<div class="content">-->



    <!-- Web Orriaren gorputza-->
<body background="Liburuak.webp">
    <div class="inputak">
        <table>
            <tr>
                <td>&nbsp;</td>
                <td><p style="background-color: lightblue"><strong> ALTZARI DENDA </strong></p></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><p style="background-color: lightblue"><strong> <Label>ALTZARIEN EDIZIOA</Label> </strong></p></td>
                <td>&nbsp;</td>
            </tr>
<!-- ***********************************************************************************************************-->

            <tr>
                <td>&nbsp;</td>
                <td><p style="background-color: lightblue"><strong> Hemen altzari baten datuak editatu edo datu basera sartu dezakezu. </strong></p></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr> 
            <tr>
                <form name="editatuAukerak" class="inputak" action="altDatuakAldatu.php" method="POST">
                <table>
                    <tr>
                        <td>&nbsp;</td>
                        <select id="altEditAuk"name="auk[]" required> 
                            <option value="">Ikusi zure aukerak hemen.</option>
                            <option value="sartu">Altzari bat sartu datu basean.</option> 
                            <option value="aldatu">Altzari baten datuak aldatu.</option> 
                            <option value="ezabatu">Altzari baten datuak ezabatu.</option> 
                        </select>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><input id="Joan" type="submit" name="Joan" value="Joan" title="Desplegablearen aukera bat sartu eta sakatu." /></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr> 
                </table>
                </form>
            </tr>
            <tr>
                <td><input id="bueltatuBot" type="button" name="bueltatuBot" value="Bueltatu" onclick="location.href='erabileremu.php'"/></td>
                <td>&nbsp;</td>
            </tr>

        </table>
    </div>
</body>
<!-- Html dokumentuaren amaiera -->
</html>