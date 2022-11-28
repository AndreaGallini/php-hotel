<?php

$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => 'Yes',
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => 'Yes',
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => 'No',
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => 'No',
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => 'Yes',
        'vote' => 2,
        'distance_to_center' => 50
    ],

];
if (isset($_GET['park']) && !empty($_GET['park'])) {
    $scelta = $_GET['park'];
    $tempArray = [];
    foreach ($hotels as $hotel) {
        if ($hotel['parking'] === $scelta) {
            $tempArray[] = $hotel;
        }
    }
    $hotels = $tempArray;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="index.php" method="get">
            <p>Scegli con o senza parcheggio</p>
            <select name="park" id="">
                <option value="">Scegli</option>
                <option value="Yes">Con parcheggio</option>
                <option value="No">Senza parcheggio</option>


            </select>
            <button type="submit">Cerca</button>
        </form>
        <div class="row">
            <?php
            foreach ($hotels as $hotel) {

            ?>
            <div class="col-4 my-card">
                <h2>
                    <?php echo $hotel['name'] ?>

                </h2>
                <p>
                    <?php echo $hotel['description'] ?>
                </p>
                <p>
                    Parcheggio
                    <?php echo $hotel['parking'] ?>
                </p>
                <p>
                    Voto =
                    <?php echo $hotel['vote'] ?>
                </p>
                <p>
                    Distanza dal centro =
                    <?php echo $hotel['distance_to_center'] ?> Km
                </p>
            </div>
            <?php

            } ?>



        </div>



    </div>
</body>

</html>