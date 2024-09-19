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




$success = false; // Variabele om te controleren of de update succesvol was




if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_POST['id'];

    $title = $_POST['title'];

    $description = $_POST['description'];




    // Update query

    $query = "UPDATE levels SET title = ?, description = ? WHERE id = ?";

    $stmt = $db->prepare($query);

    $stmt->execute([$title, $description, $id]);




    // Zet de succesvariabele op true als de query succesvol is

    if ($stmt->rowCount()) {

        $success = true;

    }

}




$id = $_GET['id'];

$query = "SELECT * FROM levels WHERE id = ?";

$stmt = $db->prepare($query);

$stmt->execute([$id]);

$level = $stmt->fetch(PDO::FETCH_ASSOC);

?>






<!DOCTYPE html>

<html lang="nl">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php require $_SERVER['DOCUMENT_ROOT'] . '/views/templates/head.php' ?>

    <title>Level Bewerken</title>

    <style>

        /* Algemene stijl vergelijkbaar met overview.php */

        .form-container {

            background-color: #2d2d2d; /* Donkergrijs */

            padding: 20px;

            border-radius: 8px;

            width: 400%;

            max-width: 600px;

            color: #e5e7eb; /* Lichte kleur, vergelijkbaar met zilver */

            margin-top: 50px;




        }




        .form-container h1 {

            font-size: 1.5rem;

            margin-bottom: 1.5rem;

            font-weight: bold;

            text-align: center;

        }




        .form-container label {

            font-size: 1rem;

            margin-bottom: 0.5rem;

            display: block;

            font-weight: 600;

        }




        .form-container input[type="text"],

        .form-container textarea {

            width: 100%;

            padding: 10px;

            border-radius: 4px;

            background-color: #1a1a1a; /* Zeer donkergrijs, bijna zwart */

            border: 1px solid #4b4b4b; /* Iets lichtere rand */

            color: #f9fafb; /* Witte tekst */

            margin-bottom: 1rem;

        }




        .form-container input[type="text"]:hover,

        .form-container textarea:hover {

            background-color: #333333; /* Iets lichtere hover */

            border-color: #e5e7eb; /* Zilver-witte border bij hover */

        }




        .form-container button {

            display: block;

            width: 100%;

            padding: 10px;

            background-color: #1a1a1a; /* Zwarte knop */

            color: #e5e7eb; /* Zilverkleurige tekst */

            font-weight: bold;

            border: 1px solid #4b4b4b; /* Lichte rand */

            border-radius: 4px;

            cursor: pointer;

            transition: background-color 0.3s, color 0.3s;

        }




        .form-container button:hover {

            background-color: #333333; /* Lichtere zwarte kleur bij hover */

            color: #ffffff; /* Witte tekst bij hover */

        }




        .form-container .back-btn {

            display: block;

            margin-top: 1rem;

            text-align: center;

            text-decoration: none;

            color: #e5e7eb; /* Zilverkleurige tekst */

            font-weight: bold;

        }




        .form-container .back-btn:hover {

            text-decoration: underline;

            color: #ffffff; /* Witte tekst bij hover */

        }




        /* Algemene stijl voor achtergrond en container */

        body {

            background-color: #1a1a1a;

        }

    </style>

</head>




<body class="bg-stone-950">

    <?php require $_SERVER['DOCUMENT_ROOT'] . '/views/admin/templates/topbar.php' ?>




    <div class="mt-6 mx-auto px-4 bg-stone-950">

        <?php require $_SERVER['DOCUMENT_ROOT'] . '/views/admin/templates/menu.php' ?>




        <div class="p-6 text-medium text-stone-50 rounded w-full min-h-screen">

            <h3 class="text-lg font-bold text-stone-100 text-white mb-2">Level Bewerken</h3>




            <div class="form-container">

                <h1>Data Aanpassen</h1>




                <!-- Toon succesbericht indien de variabele $success true is -->

                <?php if ($success): ?>

                    <p style="color: #4CAF50; text-align: center; font-weight: bold;">Succesvol aangepast!</p>

                <?php endif; ?>




                <form method="POST" action="">

                    <input type="hidden" name="id" value="<?= htmlspecialchars($level['id']); ?>">




                    <label for="title">Titel:</label>

                    <input type="text" id="title" name="title" value="<?= htmlspecialchars($level['title']); ?>" required>




                    <label for="description">Beschrijving:</label>

                    <textarea id="description" name="description" rows="5" required><?= htmlspecialchars($level['description']); ?></textarea>




                    <button type="submit">Opslaan</button>

                </form>




                <a href="/admin/levels/overview" class="back-btn">Terug naar overzicht</a>

            </div>

        </div>




    </div>

</body>

</html>
