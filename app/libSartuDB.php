<?php

    require 'dbkon.php'; //DBarekin konexioa egitea beharrezkoa baita

    Session_start();

    $libIzena = $_POST['libIzena'];
    $idazleIzena = $_POST['author'];
    $idazleAbizena = $_POST['authorSur'];
    $publUrte = $_POST['publikUrte'];
    $orri = $_POST['orrikop'];

    if(isset($_POST['sartuBotoia'])) // Liburu bat sartzen saiatzen badira..
    {
        // Ikusiko dugu lehenik ea liburu hori datubasean badagoen ala ez.

        $sql = "SELECT * FROM `liburu` WHERE `libIz` = '$libIzena'";
        $query = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($query);

        if($row == NULL) // Hau betetzen bada esan nahi du liburua datu basean ez dagoela eta sartu ahal dugula
        {
            $sql = "INSERT INTO liburu (libIz, egileIz, egileAb, publikazioUrte, orriak) VALUES ('$libIzena', '$idazleIzena', '$idazleAbizena','$publUrte','$orri')";
            if (mysqli_query($con,$sql))
            {
                echo "Liburua sartu egin da.";
            }
            else{
                echo "Liburua sartzean errore bat egon da.";
            }

        }else
        {
            echo "Liburua ezin da sartu datu basean dagoelako!";
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
    <title>LIBURU BAT SARTU</title>
    <link rel="stylesheet" href="styles.css"?v=<?php echo time(); ?>">
</head>

<script type=“text/javascript” src="script2.js" ></script>


<!--<div class="irudia">
    <img src="https://media.istockphoto.com/photos/blue-book-picture-id1281955543?b=1&k=20&m=1281955543&s=170667a&w=0&h=ZmwacrjQewEU3RqJLYufA-Bi7JVOI2JgcB8X0o7vPeI=" alt="" width="300" height="200">
</div>

<div class="content">-->



    <!-- Web Orriaren gorputza-->
<body background="Liburuak.webp">
    <div class="content">  
        <div class="hasiera">
            <table>
                <tr>
                    <td>&nbsp;</td>
                    <td><p style="background-color: lightblue"><strong> LIBURUTEGIA </strong></p></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><p style="background-color: lightblue"><strong> <Label>LIBURU BAT SARTU</Label> </strong></p></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><p style="background-color: lightblue"><strong> Liburuaren datuak sartu ezazu. </strong></p></td>
                    <td>&nbsp;</td>
                </tr>
            </table>
        </div>
        <div class="inputak">
            <form action="libSartuDB.php" method="POST">
            <table>
                <tr>
                    <td>&nbsp;</td>
                    <td><input name="libIzena" id="libIzena" type="text"  placeholder="Liburuaren Izena" title="Liburuaren Izena, ADB: Metamorfosia"required/></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input id="author" type="text" name="author" placeholder="Idazlea"  title="Liburuaren Idazlea, ADB: Franz" required/></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input id="authorSur" type="text" name="authorSur" placeholder="Idazlearen Abizena" title="Idazlearen Abizena, ADB: Kafka" required/></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input id="publikUrte" type="text" name="publikUrte" placeholder="Publikazio Urtea" title="Publikazio Urtea, ADB: 1916"required/></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input id="orrikop" type="number" name="orrikop" value="Orri kopurua" title="Liburuaren orri kopurua."required/></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input id="sartuBotoia" type="submit" name="sartuBotoia" value="Datu Basean Sartu"></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input id="bueltatuBot" type="button" name="bueltatuBot" value="Bueltatu" onclick="location.href='libDatuakAldatu.php'"/></td>
                    <td>&nbsp;</td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</body>
<!-- Html dokumentuaren amaiera -->
</html>