<?php

require 'dbkon.php'; //DBarekin konexioa egitea beharrezkoa baita

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
    <title>LIBURUEN ZERRENDA</title>
    <link rel="stylesheet" href="styles.css">
</head>

<script type=“text/javascript” src="script2.js" ></script>


<!--<div class="irudia">
    <img src="https://media.istockphoto.com/photos/blue-book-picture-id1281955543?b=1&k=20&m=1281955543&s=170667a&w=0&h=ZmwacrjQewEU3RqJLYufA-Bi7JVOI2JgcB8X0o7vPeI=" alt="" width="300" height="200">
</div>

<div class="content">-->



    <!-- Web Orriaren gorputza-->
<body background="banner.jpg">
    <div class="inputak">
        <table>
            <tr>
                <td>&nbsp;</td>
                <td><p style="background-color: lightblue"><strong> LIBURUEN ZERRENDA </strong></p></td>
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
                $sql = "SELECT * FROM Altzariak;";
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
		        <th>Altzari Izena </th>
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
                </tr>

                <?php } ?>

            </tbody>
        </table>
    </div>
</body>
<!-- Html dokumentuaren amaiera -->
</html>