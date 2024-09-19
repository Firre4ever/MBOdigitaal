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

    <link rel="stylesheet" href="../../views/levels/overview.css">

    <title>Levels Overzicht</title>

</head>

<head>

    <?php require $_SERVER['DOCUMENT_ROOT'] . '/views/templates/head.php' ?>

</head>




<body class="bg-stone-950">




<style>/* Algemeen achtergrond en layout instellingen */




/* Container voor de kaarten */

.tile-container {

    display: grid;

    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));

    gap: 16px;

    padding: 20px;

}




/* Stijl voor elke tegel (kaart) */

.tile {

    background-color: #2c2c2c; /* Donkere tegelachtergrond */

    border-radius: 8px;

    overflow: hidden;

    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);

    transition: transform 0.3s, box-shadow 0.3s;

    cursor: pointer;

    padding: 16px;

    position: relative;

}




.tile:hover {

    transform: scale(1.02);

    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5);

}




/* Stijl voor afbeeldingen in de tegel */

.tile img {

    width: 100%;

    height: auto;

    border-radius: 4px;

}




/* Titelstijl */

.tile h2 {

    margin: 0;

    font-size: 1.25rem;

    color: #ffffff;

    font-weight: bold;

}




/* Beschrijvingstijl */

.tile .description {

    margin: 10px 0;

    font-size: 0.875rem;

    color: #c0c0c0;

}




/* Container voor de kaarten */

.tile-container {

    display: grid;

    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));

    gap: 16px;

    padding: 20px;

}




/* Stijl voor elke tegel (kaart) */

.tile {

    background-color: #2c2c2c; /* Donkere tegelachtergrond */

    border-radius: 8px;

    overflow: hidden;

    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);

    transition: transform 0.3s, box-shadow 0.3s;

    padding: 16px;

    position: relative;

    display: flex;

    flex-direction: column;

    justify-content: space-between;

}




.tile:hover {

    transform: scale(1.02);

    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5);

}




/* Titelstijl */

.tile h2 {

    margin: 0;

    font-size: 1.25rem;

    color: #ffffff;

    font-weight: bold;

}




/* Beschrijvingstijl */

.tile .description {

    margin: 10px 0;

    font-size: 0.875rem;

    color: #c0c0c0;

    flex-grow: 1; /* Laat de beschrijving zoveel ruimte nemen als mogelijk */

}




/* Verbeterde stijl voor de bewerkknop */

.edit-btn {

    margin-top: 10px;

    background-color: #090909; 

    color: #ffffff;

    padding: 8px 16px;

    border-radius: 4px;

    text-decoration: none;

    font-size: 0.875rem;

    font-weight: bold;

    transition: background-color 0.3s;

    align-self: flex-end; /* Plaatst de knop netjes aan de onderkant */

}




.edit-btn:hover {

    background-color: #c0c0c0; /* Donkerder groen bij hover */

}




/* Knop om alles te bekijken */

.view-all-container {

    margin: 20px 0;

}




.view-all-btn {

    background-color: rgb(68 64 60 / var(--tw-bg-opacity));

    color: #ffffff;

    border: none;

    padding: 8px 16px; /* Verkleind de knop */

    font-size: 0.875rem; /* Maak de tekst wat kleiner */

    border-radius: 4px;

    cursor: pointer;

    transition: background-color 0.3s;

    display: inline-flex; /* Zorg ervoor dat het icoon naast de tekst komt */

    align-items: center; /* Horizontaal centreren van tekst en icoon */

    font-weight: 700;

}




.view-all-btn img {

    vertical-align: middle;

    margin-right: 8px;

    width: 20px; /* Verklein de afbeelding */

    height: 20px; /* Zorg dat de afbeelding niet te groot is */

}




.view-all-btn:hover {

    background-color: #c0c0c0; /* Donkerder blauw bij hover */

}






/* Algemene opmaak voor het hoofdgedeelte */

.mt-6 {

    margin-top: 24px;

}




.mx-auto {

    margin-left: auto;

    margin-right: auto;

}




.px-4 {

    padding-left: 16px;

    padding-right: 16px;

}




.bg-stone-950 {

    background-color: #1a1a1a;

}




.text-medium {

    font-size: 1rem;

}




.text-stone-50 {

    color: #f5f5f5;

}




.rounded {

    border-radius: 8px;

}




.w-full {

    width: 100%;

}




.min-h-screen {

    min-height: 100vh;

}




.text-lg {

    font-size: 1.25rem;

}




.font-bold {

    font-weight: bold;

}




.mb-2 {

    margin-bottom: 8px;

}

</style>






    <?php require $_SERVER['DOCUMENT_ROOT'] . '/views/admin/templates/topbar.php' ?>




    <div class="mt-6 mx-auto px-4 bg-stone-950">

        <?php require $_SERVER['DOCUMENT_ROOT'] . '/views/admin/templates/menu.php' ?>

        <div class="p-6 text-medium text-stone-50 rounded w-full min-h-screen">

            <h3 class="text-lg font-bold text-stone-100 text-white mb-2">Levels beheren</h3>










<div class="view-all-container">

    <button class="view-all-btn" onclick="toggleAllInfo()">

        <img src="https://img.icons8.com/ios-filled/50/ffffff/visible.png" alt="View All">

        Bekijk Alles

    </button>

</div>




<div class="tile-container">

    <?php if (!empty($levels)): ?>

        <?php foreach ($levels as $level): ?>

    <div class="tile">

        <img src="https://via.placeholder.com/100" alt="Icoon">

        <h2>

            <?= htmlspecialchars($level['title']); ?>

        </h2>

        <p class="description">

            <?= htmlspecialchars($level['description']); ?>

        </p>

        <a href="edit.php?id=<?= htmlspecialchars($level['id']); ?>" class="edit-btn">Bewerken</a>

    </div>

<?php endforeach; ?>




    <?php else: ?>

        <p>Er zijn geen levels gevonden.</p>

    <?php endif; ?>

</div>




<script>

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






</body>

</html>
