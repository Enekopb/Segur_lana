<?php

    require 'dbkon.php'; //DBarekin konexioa egitea beharrezkoa baita

    Session_start();


    // Hartzen dugu sartu duen liburuaren izena:
    
    


    if(isset($_POST['bilatuBotoia']))
    {
        $altIz = $_POST['altIzena'];
        $db = new mysqli("db", "admin", "test", "database");

        $stmt = $db->prepare("SELECT * FROM `Altzariak` WHERE `Mota` = ?;");
        $stmt->bind_param('s', $altMota);
        $stmt->execute();

        //grab a result set
        $resultSet = $sententzia->get_result();
        //pull all results as an associative array
        $altzariDatuak = $resultSet->fetch_all(); // Hau bilatu duen liburuaren datuak (existitzen bada)


        foreach($altzariDatuak as $array)
        {
            echo $array[0];
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
    <title>LIBURU DATUAK ALDATU</title>
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
                <td><p style="background-color: lightblue"><strong> Zein altzari editatu nahi duzu? </strong></p></td>
                <td>&nbsp;</td>
            </tr>
            </tr>
                <form name="bilatuAlt" class="inputak" action="altEditatuDB.php" method="POST">
                    <tr>
                        <td>&nbsp;</td>
                        <td><input name="altMota" id="altMota" type="text"  placeholder="Altzari mota" title="Altzari baten mota sartu, adibidez 'Ohea'" required/></td>
                        <td>&nbsp;</td>
                        <td><input id="bilatuBotoia" type="submit" name="bilatu" value="Bilatu datubasean" /></td>
                    </tr>
                </form>

                <tr>
            <tr>
                <td><input id="bueltatuBot" type="button" name="bueltatuBot" value="Bueltatu" onclick="location.href='erabileremu.php'"/></td>
                <td>&nbsp;</td>
            </tr>

        </table>
    </div>
</body>
<!-- Html dokumentuaren amaiera -->
</html>