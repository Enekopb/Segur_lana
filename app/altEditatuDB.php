<?php

    require 'dbkon.php'; //DBarekin konexioa egitea beharrezkoa baita


    Session_start();

    if(isset($_POST['aldatu']))
    {
        $altIz = $_POST['altId'];

        $sql = "SELECT * FROM `Altzariak` WHERE `IdProduktu` = '$altIz'"; // Bilatzen dugu erabiltzailea DB-an.
        $query = mysqli_query($con,$sql);
        $nr = mysqli_num_rows($query);
        $row = mysqli_fetch_array($query); // Ez badago, $row null, bestela array bat izango da datuekin.

        if($nr == 0) 
        {
            echo "Altzari hori ez dago datu basean, txarto sartu duzu.";
        }
        else{   
                $iz = $_POST['izena'];
                $kol = $_POST['kolorea'];
                $pre = $_POST['prezioa'];
                $tam =$_POST['tamaina'];
                $sql = "UPDATE `Altzariak` SET Izena='$iz', Kolorea='$kol', Prezioa='$pre', Tamaina='$tam' WHERE `IdProduktu` = '$altIz'";
            if(mysqli_query($con,$sql)) // Ondo exekutatu bada hemen sartuko da.
            {
                echo "ZURE DATUAK ONDO ALDATU DIRA!!";
            }else
            {
                echo "ERROREA";
            }
        }
    }
        $query = "SELECT * FROM Altzariak where IdProduktu ='$altIz'";
        $result = mysqli_query($con, $query);
                    
        //Datuak gorde
        $row = mysqli_fetch_array($result);
        $altIz= $row['altId'];
        $izena = $row["Izena"];
        $mota = $row["Mota"];
        $kolorea= $row["Kolorea"];
        $prezioa = $row["Prezioa"];
        $tamaina = $row["Tamaina"];

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
    <link rel="stylesheet" href="styles.css"?v=<?php echo time(); ?>">
</head>

<script type=“text/javascript” src="script2.js" ></script>

    <!-- Web Orriaren gorputza-->
<body background="banner.jpg">
    <div class="content">
        <div class="inputak">
            <table>
                <tr>
                    <td>&nbsp;</td>
                    <td><p style="background-color: lightblue"><strong> ALTZARI DENDA </strong></p></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><p style="background-color: lightblue"><strong> <Label>ALTZARIEN ALDAKETAK</Label> </strong></p></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><p style="background-color: lightblue"><strong> Zein altzari editatu nahi duzu? </strong></p></td>
                    <td>&nbsp;</td>
                </tr>
            </table>
        </div>
    </div>
    <table>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>
    <div class="content">
        <div class="inputak">
            <form action="altEditatuDB.php" method="POST">
                <table>    
                    <tr>
                        <td>&nbsp;</td>
                        <td><input name="altId" id="altId" type="text"  placeholder="Altzari id-a" title="Altzari baten id-a sartu, adibidez 1" required/></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input name="izena" id="izena" type="text"  placeholder="Altzari izena berria" title="Altzari baten izena sartu, adibidez Cervi" required/></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input name="kolorea" id="kolorea" type="text"  placeholder="Altzari kolore berria" title="Altzariaren kolorea sartu, adibidez Horia" required/></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input name="prezioa" id="prezioa" type="text"  placeholder="Altzari prezio berria" title="Altzariaren prezioa sartu, adibidez 50€" required/></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input name="tamaina" id="tamaina" type="text"  placeholder="Altzari tamaina berria" title="Altzariaren tamaina sartu, 80cm x 80cm 100cm" required/></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input id="aldatu" type="submit" name="aldatu" value="Aldatu altzaria datubasean" title="Klikatu baino lehen denak bete."/></td>
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