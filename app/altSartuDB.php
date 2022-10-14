<?php

    require 'dbkon.php'; //DBarekin konexioa egitea beharrezkoa baita

    Session_start();

    $altID = $_POST['altID'];
    $altIzena = $_POST['altIzena'];
    $altKolorea = $_POST['altKolorea'];
    $altMota = $_POST['altMota'];
    $altPrezioa = $_POST['altPrezioa'];
    $altTamaina = $_POST['altTamaina'];

    if(isset($_POST['sartuBotoia'])) // Liburu bat sartzen saiatzen badira..
    {
        // Ikusiko dugu lehenik ea liburu hori datubasean badagoen ala ez.

        $sql = "SELECT * FROM `Altzariak` WHERE `Mota` = '$altMota'";
        $query = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($query);

        if($row == NULL) // Hau betetzen bada esan nahi du liburua datu basean ez dagoela eta sartu ahal dugula
        {
            $sql = "INSERT INTO Altzariak (IdProduktu, Izena, Kolorea, Mota, Prezioa, Tamaina) VALUES ('$altID', '$altIzena', '$altKolorea', '$altMota','$altPrezioa','$altTamaina')";
            if (mysqli_query($con,$sql))
            {
                echo "Altzaira sartu egin da.";
            }
            else{
                echo "Altzaria sartzean errore bat egon da.";
            }

        }else
        {
            echo "Altzaria ezin da sartu datu basean dagoelako!";
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
    <title>ALTZARI BAT SARTU</title>
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
                    <td><p style="background-color: lightblue"><strong> ALTZARI DENDA </strong></p></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><p style="background-color: lightblue"><strong> <Label>ALTZARI BAT SARTU</Label> </strong></p></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><p style="background-color: lightblue"><strong> Altzarieren datuak sartu ezazu. </strong></p></td>
                    <td>&nbsp;</td>
                </tr>
            </table>
        </div>
        <div class="inputak">
            <form action="altSartuDB.php" method="POST">
            <table>
            <tr>
                    <td>&nbsp;</td>
                    <td><input name="altID" id="altID" type="text"  placeholder="Altzariaren ID-a" title="Altzariaren ID-a, ADB: 011"required/></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input name="altIzena" id="altIzena" type="text"  placeholder="Altzariaren Izena" title="Altzariaren Izena, ADB: Sklum"required/></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input id="altKolorea" type="text" name="altKolorea" placeholder="Kolorea"  title="Altzariaren Kolorea, ADB: Zuria" required/></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input id="altMota" type="text" name="altMota" placeholder="Altzari mota" title="Altzariaren mota, ADB: Ohea" required/></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input id="altPrezioa" type="text" name="altPrezioa" placeholder="Altzariaren prezioa" title="Altzariaren prezioa, ADB: 300$"required/></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input id="altTamaina" type="text" name="altTamaina" value="Altzariaren dimentsioa" title="Altzariaren dimentsioak, ADB: 50 x 50 x 80"required/></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input id="sartuBotoia" type="submit" name="sartuBotoia" value="Datu Basean Sartu"></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input id="bueltatuBot" type="button" name="bueltatuBot" value="Bueltatu" onclick="location.href='altDatuakAldatu.php'"/></td>
                    <td>&nbsp;</td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</body>
<!-- Html dokumentuaren amaiera -->
</html>