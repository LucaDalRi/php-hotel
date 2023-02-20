<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
</head>

<body>

    <form method="GET">
        <p>Vuole il parheggio?</p>
        <label for="parcheggio">Si</label>
        <input type="radio" id="parcheggioSi" name="parcheggio" value="yes"><br>
        <label for="parcheggio">No</label>
        <input type="radio" id="parcheggioNo" name="parcheggio" value="no"><br><br>
        <label for="points">Voto Hotel:</label><br>
        <input type="number" name="voto" id="votiHotel" min="1" max="5"><br><br>
        <button type="submit">Cerca</button>
        <button type="reset">Reset</button>
    </form>

    <h2>
        <?php
        if ($_GET == null) {
            foreach ($hotels as $index => $hotel) {
                echo "<table>";
                foreach ($hotel as $key => $singleHotel) {
                    echo "<tr>
                            <td>$key:</td>
                            <td>$singleHotel</td>
                        </tr>";
                };
                echo '</table> <br>';
            };
        };

        if ($_GET['parcheggio'] == 'yes') {
            foreach ($hotels as $index => $hotel) {
                echo "<table>";
                foreach ($hotel as $key => $singleHotel) {
                    if (array_search('parking', $hotel) == true) {
                        echo "<tr>
                            <td>$key:</td>
                            <td>$singleHotel</td>
                        </tr>";
                    };
                };
                echo '</table> <br>';
            };
        } else {
            foreach ($hotels as $index => $hotel) {
                echo "<table>";
                foreach ($hotel as $key => $singleHotel) {
                    if (array_search('parking', $hotel) == false) {
                        echo "<tr>
                            <td>$key:</td>
                            <td>$singleHotel</td>
                        </tr>";
                    };
                };
                echo '</table> <br>';
            };
        }
        ?>
    </h2>


</body>

</html>