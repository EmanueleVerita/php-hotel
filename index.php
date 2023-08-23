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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="d-flex flex-wrap justify-content-center">
            <h3>
                Lista Hotel disponibili
            </h3>

            <table class="table text-capitalize">
                <thead>
                    <tr>
                        <th class="col">
                            Name
                        </th>

                        <th class="col">
                            Description
                        </th>

                        <th class="col">
                            Parking
                        </th>

                        <th class="col">
                            Vote
                        </th>

                        <th class="col">
                            Distance of center
                        </th>
                    </tr>
                </thead>

                <?php 
                
                    foreach( $hotels as $hotel) {
                        $park = $hotel['parking']? 'si' : 'no';
                    
                
                ?>

                <tr>
                    <td><?php echo $hotel['name']; ?></td>
                    <td><?php echo $hotel['description']; ?></td>
                    <td><?php echo $park; ?></td>
                    <td><?php echo $hotel['vote']; ?></td>
                    <td><?php echo $hotel['distance_to_center']; ?></td>
                </tr>

                <?php

                    }

                ?>    

            </table>
        </div>
    </div>
</body>
</html>