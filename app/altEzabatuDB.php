<?php

    require 'dbkon.php'; //DBarekin konexioa egitea beharrezkoa baita

    Session_start();

    $altID = $_POST['altID'];

    if(isset($_POST['ezabatuBotoia'])) // Altzari bat ezabatzen saiatzen badira..
    {
        // Ikusiko dugu lehenik ea altzari hori datubasean badagoen ala ez.

        $sql = "SELECT * FROM `Altzariak` WHERE `IdProduktu` = '$altID'";
        $query = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($query);

        if($row != NULL) // Hau betetzen bada esan nahi du altzaria datu basean dagoela eta ezabatu ahal dugula
        {
            $sql = "DELETE FROM `Altzariak` WHERE `IdProduktu` = '$altID'";
            if (mysqli_query($con,$sql))
            {
                echo "Altzaria ezabatu egin da.";
            }
            else{
                echo "Altzaria ezabatzean errore bat egon da.";
            }

        }else
        {
            echo "Altzaria ezin da ezabatu, datu basean existitzen ez dagoelako!";
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
    <title>ALTZARI BAT EZABATU</title>
    <link rel="stylesheet" href="styles.css"?v=<?php echo time(); ?>>
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
                    <td><p style="background-color: lightblue"><strong> <Label>ALTZARI BAT EZABATU</Label> </strong></p></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><p style="background-color: lightblue"><strong> Nahi duzun altzariaren Id-a sartu. </strong></p></td>
                    <td>&nbsp;</td>
                </tr>
            </table>
        </div>
        <div class="inputak">
            <form action="altEzabatuDB.php" method="POST">
            <table>
            <tr>
                    <td>&nbsp;</td>
                    <td><input name="altID" id="altID" type="text"  placeholder="Altzariaren ID-a" title="Altzariaren ID-a, ADB: 011"required/></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input id="ezabatuBotoia" type="submit" name="ezabatuBotoia" value="Datu Basetik ezabatu"></td>
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