<?php

require 'dbkon.php'; //DBarekin konexioa egitea beharrezkoa baita
session_start();

//login2.php ez badator index.php-ra bidali.
if($_SESSION['sesioIzena']!="login2.php"){
    header("Location: http://localhost:81/index.php");
}
//session_start();

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
    <title>ALTZARIEN ZERRENDA</title>
    <link rel="stylesheet" href="styles.css">
</head>

<script type=“text/javascript” src="script2.js" ></script>


<div class="content">-->



    <!-- Web Orriaren gorputza-->
<body background="banner.jpg">
    <div class="inputak">
        <table>
            <tr>
                <td>&nbsp;</td>
                <td><p style="background-color: lightblue"><strong> ALTZARIEN ZERRENDA </strong></p></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <form name="erabAukerak" class="inputak" action="erabileremu.php" method="POST">
                    <tr>
                        <td>&nbsp;</td>
                        <td><input id="bueltatuButton" type="button" name="bueltatuButton" value="Bueltatu" title="Sakatu hemen erabiltzaile eremura bueltatzeko." onclick="location.href='erabileremu.php'"/></td>
                    </tr>
                </form>
                </tr>
        </table>
    </div>
    <?php

                $db = new mysqli("db", "admin", "test", "database");
                $sql = "SELECT * FROM Altzariak";
                $stmt = $db->prepare($sql);
                $stmt->execute();
                //grab a result set
                $resultSet = $stmt->get_result();
                //pull all results as an associative array
                $altzariak = $resultSet->fetch_all();
                foreach($altzariak as $altzari) {

    ?>

    <div class="php">
        <table id = "altzariTabala" class = "table-striped table-bordered" style = "width:100%">
            <thead class = "text-center">    
		        <th>Id produktu </th>
		        <th>Izena</th>
		        <th>Kolorea</th>
		        <th>Mota</th>
		        <th>Prezioa</th>
                <th>Tamaina</th>
	        </thead>

            <tbody>
                <tr>
                    <td><?php echo $altzari[0]?></td>
                    <td><?php echo $altzari[1]?></td>
                    <td><?php echo $altzari[2]?></td>
                    <td><?php echo $altzari[3]?></td>
                    <td><?php echo $altzari[4]?></td>
                    <td><?php echo $altzari[5]?></td>
                </tr>

                <?php } ?>

            </tbody>
        </table>
    </div>
</body>
<!-- Html dokumentuaren amaiera -->
</html>