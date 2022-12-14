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

// cicliamo all'interno del nostro array attraverso il foreach 
// foreach ($hotels as $hotel) {
//     echo $hotel['name'];
//     echo '<br>';
//     echo $hotel['description'];
//     echo '<br>';
//     echo $hotel['vote'];
//     echo '<br>';
//     echo $hotel['distance_to_center'];
//     echo '<br>';
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>PHP Hotel</title>
</head>

<body>
    <div class="container mt-5">
        <!-- form -->
        <form action="index.php" method="get">
            <div class="mb-3">
                <label for="parking">Search Parking</label>
                <input name="parking" id="parking" type="text">
            </div>
            <div class="mb-3">
                <label for="parking">Search Vote</label>
                <input name="vote" id="vote" type="text">
            </div>
            <button type="">Submit</button>
        </form>
        <!-- /.form -->


        <!-- Table -->
        <table class="table mt-4">
            <thead class="bg-info">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Parking</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Distance_to_center</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th><?php foreach ($hotels as $hotel) {
                            echo $hotel['name'];
                            echo '<br>';
                        } ?></th>
                    <td><?php foreach ($hotels as $hotel) {
                            echo $hotel['description'];
                            echo '<br>';
                        } ?></td>
                    <td><?php foreach ($hotels as $hotel) {
                            echo $hotel['parking'];
                            echo '<br>';
                        } ?></td>
                    <td><?php foreach ($hotels as $hotel) {
                            echo $hotel['vote'];
                            echo '<br>';
                        } ?></td>
                    <td><?php foreach ($hotels as $hotel) {
                            echo $hotel['distance_to_center'];
                            echo '<br>';
                        } ?></td>
                </tr>
            </tbody>
        </table>
        <!-- /.Table -->
    </div>
</body>

</html>