<?php


require 'dbkon.php';
session_start();

if(isset($_POST['aukerak']))
{
    $auk = $_POST['aukerak'];
    $_SESSION['azken_kon'] = time();
    foreach ($auk as $value)
    {
        if($value == "altzer")
        {
            header("Location: http://localhost:81/altzerrikusi.php");

        }elseif($value == "datAld")
        {
            header("Location: http://localhost:81/datuakEditatu.php");
        }elseif($value == "altDatAld")
        {
            header("Location: http://localhost:81/altDatuakAldatu.php");
        }else
        {
            echo "Ezer";
        }
        exit;
    }
}elseif(isset($_POST['bueltatuBot']))
{
    // SAIOA ITXI NAHI BADU
    session_start();
    session_destroy();
    header("Location: http://localhost:81/index.php");
    exit;

}else
{
    //EZER
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
    <title>ALTZARIAK - Erabiltzaile</title>
    <link rel="stylesheet" href="styleerab.css?v=<?php echo time(); ?>">
</head>

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
            <tr>
                <td>&nbsp;</td>
                <td><p style="background-color: lightblue"><strong> Erabiltzaile-Eremua </strong></p></td>
                <td>&nbsp;</td>
            </tr>
        </table>
<!-- ***********************************************************************************************************-->
        <div class="inputak">
            <table>
                <tr>
                    <td>&nbsp;</td>
                    <td><p style="background-color: lightblue"><strong> DATUEN ALDAKETA </strong></p></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td> Hautatu bat eta botoia klikatu </td>
                    <td>&nbsp;</td>
                </tr>
                <form name="erabAukerak" class="inputak" action="erabileremu.php" method="POST">
                    <tr>
                        <td>&nbsp;</td>
                        <td><select id="aukeratu"name="aukerak[]" required> 
                            <option value="">Ikusi zure aukerak hemen.</option>
                            <option value="altzer">Altzarien zerrenda ikusi.</option> 
                            <option value="datAld">Nire datuak aldatu.</option> 
                            <option value="altDatAld">Altzarien kudeaketa.</option>
                        </select></td>
                        <td><input id="aukeratuBotoia" type="submit" name="Aukeratu" value="Aukeratu" title="Desplegablearen aukera bat sartu eta sakatu." /></td>
                    </tr>
                </form>

                <tr>
            </tr>
            </table>
        </div>
        <div class="botoiak">
            <form name = "saioitxi" class = "inputak" action = "erabileremu.php" method = "POST">
                <table>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input id="bueltatuBot" type="submit" name="bueltatuBot" value="Saioa Itxi"/></td>
                        <td>&nbsp;</td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
<!-- ***********************************************************************************************************-->
</body>
    
</div>

<!-- Html dokumentuaren amaiera -->
</html>
