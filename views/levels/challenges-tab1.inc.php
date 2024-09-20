
<?php

require_once $_SERVER["DOCUMENT_ROOT"] . '/docroot.php';

require_once __DOCUMENTROOT__ . '/config/db.php';




if (!isset($db)) {

    try {

        $dsn = "mysql:host=$host;dbname=$dbName;charset=UTF8";

        $db = new PDO($dsn, $user, $password);

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {

        die("Databaseverbinding mislukt: " . $e->getMessage());

    }

}




// Query om alle levels op te halen

$query = "SELECT * FROM levels";

$stmt = $db->query($query);




// Sla de levels op in een array

$levels = $stmt->fetchAll(PDO::FETCH_ASSOC);




?>




<!DOCTYPE html>

<html lang="nl">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php require '../views/templates/head.php'; ?>

    <link rel="stylesheet" href="../../views/levels/challenges-tab1.inc.css">

    <title>Levels</title>

</head>

<body>

<style>

body {

font-family: 'Arial', sans-serif;

background-color: lightblue;

margin: 0;

padding: 20px;

color: #333;

}




h1 {

text-align: center;

margin-bottom: 30px;

color: black;

}




.view-all-container {

text-align: center;

margin-bottom: 30px;

}




.view-all-btn {

background-color: #2d89e5;

color: white;

border: none;

border-radius: 5px;

padding: 12px 24px;

cursor: pointer;

font-size: 16px;

display: flex;

align-items: center;

justify-content: center;

transition: background-color 0.3s ease;

}




.view-all-btn:hover {

background-color: #2166b3;

}




.view-all-btn img {

margin-right: 8px;

width: 20px;

height: 20px;

}




.tile-container {

display: flex;

flex-wrap: wrap;

justify-content: center;

gap: 20px;

}




.tile {

background-color: #fff;

border-radius: 10px;

box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);

padding: 20px;

width: 300px;

text-align: center;

cursor: pointer;

transition: transform 0.3s ease, box-shadow 0.3s ease;

overflow: hidden;

}




.tile:hover {

transform: translateY(-5px);

box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);

}




.tile img {

width: 80px;

height: 80px;

margin-bottom: 15px;

}




.tile h2 {

font-size: 22px;

margin: 0 0 10px;

color: black;

}




.tile .description {

font-size: 16px;

margin: 10px 0;

color: black;

}




.tile .more-info {

display: none;

padding-top: 15px;

font-size: 14px;

color: lightblue;

text-align: left;

border-top: 1px solid #ddd;

}




.tile.open .more-info {

display: block;

}




.more-info h3 {

margin: 10px 0 5px;

font-size: 16px;

color: black;

}




.more-info p {

margin: 0;

color: #666;

}




@media (max-width: 768px) {

.tile {

    width: 100%;

    max-width: 500px;

}

}



</style>





<br><br><br>

<div>

    <h1>LEVELS</h1>




    <div class="view-all-container">

        <button class="view-all-btn" onclick="toggleAllInfo()">

            <img src="https://img.icons8.com/ios-filled/50/ffffff/visible.png" alt="View All">

            Bekijk Alles

        </button>

    </div>




    <div class="tile-container">

        <?php if (!empty($levels)): ?>

            <?php foreach ($levels as $level): ?>

    <div class="tile" onclick="toggleInfo(this)">

        <img src="https://via.placeholder.com/100" alt="Icoon">

        <h2>

            <?= isset($level['title']) ? htmlspecialchars($level['title']) : 'Geen titel beschikbaar'; ?>

        </h2>

        <p class="description">

            <?= isset($level['description']) ? htmlspecialchars($level['description']) : 'Geen beschrijving beschikbaar'; ?>

        </p>




        <!-- Haal de details van dit level op -->

        <?php

        $stmt_details = $db->prepare("SELECT * FROM level_details WHERE level_id = ?");

        $stmt_details->execute([$level['id']]);

        $details = $stmt_details->fetchAll(PDO::FETCH_ASSOC);

        ?>

        

        <div class="more-info">

            <?php foreach ($details as $detail): ?>

                <h3><?= htmlspecialchars($detail['category']); ?></h3>

                <p><?= htmlspecialchars($detail['detail']); ?></p>

            <?php endforeach; ?>

        </div>

    </div>

<?php endforeach; ?>




        <?php else: ?>

            <p>Er zijn geen levels gevonden.</p>

        <?php endif; ?>

    </div>




    <br><br><br>




    <script>

        function toggleInfo(tile) {

            tile.classList.toggle("open");

        }




        function toggleAllInfo() {

            const tiles = document.querySelectorAll('.tile');

            const allOpen = [...tiles].every(tile => tile.classList.contains('open'));




            tiles.forEach(tile => {

                if (allOpen) {

                    tile.classList.remove('open');

                } else {

                    tile.classList.add('open');

                }

            });

        }

    </script>

</div>








</body>

</html>




