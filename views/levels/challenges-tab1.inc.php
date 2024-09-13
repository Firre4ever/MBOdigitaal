<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excel Data Display</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f9;
        }
        .level {
            margin-bottom: 20px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .level h2 {
            cursor: pointer;
            font-size: 18px;
            padding: 12px 15px;
            margin: 0;
            background-color: #f8f8f8;
            border-bottom: 1px solid #ddd;
        }
        .level-content {
            display: none;
            padding: 15px;
        }
        .level-content.active {
            display: block;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        table th, table td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: left;
        }
        table th {
            background-color: #f8f8f8;
            font-weight: bold;
        }
        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <h1>Excel Data Display</h1>

    <div class="level" id="level1">
        <h2 onclick="toggleLevel('level1')">Level 1: Realiseert Software</h2>
        <div class="level-content">
            <table>
                <thead>
                    <tr>
                        <th>Nog geen level</th>
                        <th>Level 1</th>
                        <th>Level 2</th>
                        <th>Level 3</th>
                        <th>Level 4</th>
                        <th>Level 5</th>
                        <th>Level 6</th>
                        <th>Level 7</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1: Realiseert Software</td>
                        <td>"Student heeft XAMMP/alternatief werkend geïnstalleerd. Code gepresenteerd met VS Code."</td>
                        <td>"Kan 5 HTML tags uitleggen. 5 CSS onderwerpen behandeld."</td>
                        <td>"Student kan een database maken en nette code schrijven in JavaScript, HTML, CSS & PHP."</td>
                        <td>"Kan ERD, Functioneel/Technisch ontwerp en de basisprincipes van OOP uitleggen."</td>
                        <td>"Presenteert software in een tweede programmeertaal en legt een debugstrategie uit."</td>
                        <td>"Verdiepende challenge in tweede programmeertaal."</td>
                        <td>"Laat afgeronde challenges zien met opdrachtdefinitie, ontwerpdocument, testplan en verbeter voorstellen."</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="level" id="level2">
        <h2 onclick="toggleLevel('level2')">Level 2: Werken in een ontwikkelteam</h2>
        <div class="level-content">
            <table>
                <thead>
                    <tr>
                        <th>Nog geen level</th>
                        <th>Level 1</th>
                        <th>Level 2</th>
                        <th>Level 3</th>
                        <th>Level 4</th>
                        <th>Level 5</th>
                        <th>Level 6</th>
                        <th>Level 7</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2: Werken in een ontwikkelteam</td>
                        <td>"Student voert een project uit in een groep en lost conflicten op."</td>
                        <td>"Samenwerken in een groepje en weet wat hun rol is."</td>
                        <td>"Reflecteert op eigen rol binnen het team via Belbin test."</td>
                        <td>"Toont aan dat ze feedback kunnen geven en plant werkzaamheden."</td>
                        <td>"Reflecteert volgens STARR-methode op rol binnen het team."</td>
                        <td>"360-graden feedback en presenteert de challenge op een professionele manier."</td>
                        <td>"Actieve deelname aan team, professionele presentatie, reflectie op rol en gedrag."</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Additional Levels -->

    <div class="level" id="level3">
        <h2 onclick="toggleLevel('level3')">Level 3: Generieke onderdelen RE</h2>
        <div class="level-content">
            <table>
                <thead>
                    <tr>
                        <th>Nog geen level</th>
                        <th>Level 1</th>
                        <th>Level 2</th>
                        <th>Level 3</th>
                        <th>Level 4</th>
                        <th>Level 5</th>
                        <th>Level 6</th>
                        <th>Level 7</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>3: Generieke onderdelen RE</td>
                        <td colspan="7">Rekenlicentie aangeschaft & H1-6, H7-13, H14-18</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="level" id="level4">
        <h2 onclick="toggleLevel('level4')">Level 4: Generieke onderdelen BS</h2>
        <div class="level-content">
            <table>
                <thead>
                    <tr>
                        <th>Nog geen level</th>
                        <th>Level 1</th>
                        <th>Level 2</th>
                        <th>Level 3</th>
                        <th>Level 4</th>
                        <th>Level 5</th>
                        <th>Level 6</th>
                        <th>Level 7</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>4: Generieke onderdelen BS</td>
                        <td>"Heeft zich verdiept in de dimensie Sociaal Maatschappelijk."</td>
                        <td>"Verdiept in de dimensie gezondheid en beroepsziekten."</td>
                        <td>"Verdiept in de dimensie politiek en het Nederlandse kiessysteem."</td>
                        <td>"Verdiept in economie en de kosten van studenten in Nederland."</td>
                        <td>"Interview met stagebegeleider over hoe de vier dimensies een plek krijgen in de organisatie."</td>
                        <td>"Neemt burgerschapsdimensies op in challenges."</td>
                        <td>"Burgerschap"</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="level" id="level5">
        <h2 onclick="toggleLevel('level5')">Level 5: Generieke onderdelen Nederlands</h2>
        <div class="level-content">
            <table>
                <thead>
                    <tr>
                        <th>Nog geen level</th>
                        <th>Level 1</th>
                        <th>Level 2</th>
                        <th>Level 3</th>
                        <th>Level 4</th>
                        <th>Level 5</th>
                        <th>Level 6</th>
                        <th>Level 7</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>5:Generieke onderdelen Nederlands</td>
                        <td>"Student heeft drie verschillende "Nederlands-Bricks" succesvol voltooid." </td>
                        <td>"Student heeft een presentatie-opdracht op 3F-niveau voltooid."</td>
                        <td>"Student heeft een schrijfopdracht op 3F-niveau voltooid."</td>
                        <td>Student heeft een presentatie-opdracht op 3F-niveau voltooid.</td>
                        <td>"Student heeft een schrijfopdracht op 3F-niveau voltooid."</td>
                        <td>"Student heeft een oefenexamen Lezen/Luisteren op 3F-niveau voltooid."</td>
                        <td>"Student heeft alle examens voor Nederlands behaald."</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Add more levels as needed -->

    <script>
        function toggleLevel(levelId) {
            var content = document.getElementById(levelId).getElementsByClassName('level-content')[0];
            content.classList.toggle('active');
        }
    </script>

</body>
</html>
