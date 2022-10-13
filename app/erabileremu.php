<?php


require 'dbkon.php';
session_start();

if(isset($_POST['aukerak']))
{
    if((time() - $_SESSION['azken_kon']) > 60) {
        // SAIOA ITXI NAHI BADU
        session_start();
        session_destroy();
        header("Location: http://localhost:81/index.php");
        exit;
    }
    else{
        $auk = $_POST['aukerak'];
        $_SESSION['azken_kon'] = time();
        foreach ($auk as $value)
        {
            // AQUI TENEMOS QUE MIRAR A VER SI EL VALOR $VALUE ES:
            // DATALD LIBZER O LIBDATALD
            // Y DEPENDIENDO DE ESO REENVIARLO A EL PHP CORRESPONDIENTE
    
            if($value == "altzer")
            {
                header("Location: http://localhost:81/libzerrikusi.php");
    
            }elseif($value == "datAld")
            {
                header("Location: http://localhost:81/datuakEditatu.php");
            }elseif($value == "libDatAld")
            {
                header("Location: http://localhost:81/libDatuakAldatu.php");
            }else
            {
                echo "na de na";
            }
            exit;
        }
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








// ESTO DE ABAJO EN VD SUDA SI LO HACE O NO PERO VIENE BIEN TENERLO PA BASARNOS EN ELLO

/*$query = "SELECT * FROM erabiltzaile";
$result = mysqli_query($con, $query);


if($result-> num_rows > 0){ // Si el query da mas de 0 erabiltzailes... (como deberia)
    while($row = mysqli_fetch_array($result)){ // Pasa por todas las rows

        $erabIz= $row["erabIz"];
        $email = $row["emaila"];




        
        
        // **************************** FALTA METER EN EL ECHO EL NICKNAME Y EL MAIL BIEN *************************************************

        echo "<tr><td>" . $erabIz . "</td>  <td>" . $email . "</td></tr>";
    }


}
else{
    echo "0 emaitza";
}
*/



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
<body background="https://cdn.pixabay.com/photo/2016/02/16/21/07/books-1204029__340.jpg?__cf_chl_jschl_tk__=pmd_rg0UyIVTKotZFzKXG6L7RTRiwJwdw6vwz3E1204eRgg-1635866096-0-gqNtZGzNAjujcnBszQhR">
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
                            <option value="altDatAld">Altzari baten datuak aldatu.</option>
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
