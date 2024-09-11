<h2 class="text-lg font-bold text-gray-800">Case</h2>
<p class="mt-2 text-gray-700">Studenten krijgen veel informatie van de school en de docenten. Deze
    informatie wordt op veel verschillende manieren aangeboden en is niet altijd even overzichtelijk.
    Denk hierbij aan <b>examenplanningen</b>, <b>assessmentroosters</b>, <b>keuzedelen</b>, <b>beoordelingssystemen met
        levels</b>
    en het <b>aanbieden van Challenges</b>. Tijdens het MBO Go Digital project gaan studenten deze informatie
    in kaart brengen en digitaliseren. Met als doel een beter overzicht voor de studenten en docenten.
</p>
<p class="mt-2 text-gray-700">Tijdens de eerste fase van dit project heeft een werknemer, Niels
    Cortjens, al een admin-panel ontwikkelt waarin gebruikers kunnen worden aangemaakt. Deze gebruikers
    kunnen ook al inloggen op het admin-panel (als ze genoeg rechten hebben). Daarnaast kunnen er al
    verschillende opleidingen worden toegevoegd, bewerkt of verwijderd. Maar Niels heeft ontslag genomen
    en werkt reeds op een andere plek. Het management heeft wel besloten dat de ontwikkeling verder gaat
    en dat de reeds gemaakte code wordt gebruikt. Ze zijn tevreden over het werk van Niels.</p>
<p class="mt-2 text-gray-700">Jij krijgt nu de opdracht om het systeem uit te breiden met nieuwe
    functionaliteiten. Hoog op het verlanglijstje staan de automatisering van de levels. Een kort
    overzicht van de belangrijkste wensen:
<ul class="my-2 list-disc pl-5">
    <li class="ml-4">Studenten moeten overzichten kunnen zien van de levels per onderdeel (vak).</li>
    <li class="ml-4">Studenten moeten zelf kunnen aangeven op welk level ze zitten, inclusief toelichting.</li>
    <li class="ml-4">Docenten moeten kunnen aangeven op welk level een student zit. Per onderdeel.</li>
    <li class="ml-4">Docenten moeten nieuwe onderdelen (vakken) kunnen aanmaken.</li>
    <li class="ml-4">Docenten moeten de informatie van de levelsystemen kunnen beheren.</li>
    <li class="ml-4">Docenten moeten makkelijk inzicht krijgen in de vorderingen van de studenten.</li>
</ul>
</p>
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
                <td>TOTAAL</td>
                <td colspan="7"></td>
            </tr>
            <tr>
                <td>1: Realiseert Software</td>
                <td>"Student heeft XAMMP/alternatief werkend geïnstaleerd. Op dit platform wordt een werkend product is gepresenteerd. Code wordt gepresenteerd met VS Code. Kan 3 HTML tags & 2 CSS opdrachten uitleggen."</td>
                <td>"Student kan 5 HTML tags. 5 CSS onderwerpen: benoem 3 tags, leg uit hoe nesting werkt. Leg een zelfgemaakte Javascript functie uit die gebruik maakt van parameters."</td>
                <td>"Student kan een database maken met gebruikersrechten. Is in staat om nette code te schrijven met een combinatie van JavaScript, HTML, CSS & PHP zoals behandeld in workshops. // comments en structuur"</td>
                <td>"Student kan een ERD, Functioneel/Technisch ontwerp, MOSCOW en Usecases maken. Kan de 4 basisprincipes van OOP uitleggen inclusief een eenvoudige toepassing."</td>
                <td>"Student presenteert zelfgemaakte software in een tweede programmeertaal en kan dit uitleggen. Kan een gebruikte debugstrategie uitleggen."</td>
                <td>"Student heeft tweede programmeertaal gekozen. Legt de geleerde code uit van een verdiepende challenge."</td>
                <td>"Student laat in minimaal 2 afgeronde challenges waarvan 1 met een bedrijf het volgende zien: - Opdrachtdefinitie, planning en bewaking - Ontwerpdocument volledig uit padlet ingevuld - Kan software uitleggen - Testplan, Testlog en Testverslag volledig ingevuld - Verbetervoorstellen geven adhv begindefinitie"</td>
            </tr>
            <tr>
                <td>2: Werken in een ontwikkelteam</td>
                <td>"Student voert een project uit in een groep en lost eventuele conflicten aantoonbaar op."</td>
                <td>"Student kan samenwerken in een groepje en weet wat hun rol hierin is. Laat zien dat hij een presentatie kan geven."</td>
                <td>"Student reflecteert op eigen rol binnen het team via Belbin test. Laat zien dat hij een presentatie kan geven rekening houdend met zijn/haar doelgroep."</td>
                <td>"Student reflecteert op eigen rol binnen het team en toont aan dat ze feedback kunnen geven aan teamleden. Student plant werkzaamheden en deze zijn aantoonbaar adhv een stand-up meetingsverslag en een planning."</td>
                <td>"Student reflecteert volgens de STARR-methode op eigen rol binnen het team. Student toont aan dat hij/zij feedback kan geven aan teamleden."</td>
                <td>"Student heeft een 360-graden feedback uitgevoerd en reflecteert hierop. Student presenteert zijn challenge op een professionele manier."</td>
                <td>"Student heeft actief deelgenomen aan een team met een duidelijke rol en vastgelegde afspraken. Presenteert op een professionele manier een product. Student reflecteert op eigen productdeel, eigen rol, teamverband en gedrag. Bv. STARR"</td>
            </tr>
            <tr>
                <td>3: Generieke onderdelen RE</td>
                <td colspan="7">Rekenlicentie aangeschaft & H1-6, H7-13, H14-18</td>
            </tr>
            <tr>
                <td>4: Generieke onderdelen BS</td>
                <td>"Heeft zich verdiept in de dimensie Sociaal Maatschappelijk, heeft een mening over normen en waarden en verschillen tussen individuen en heeft dit aangetoond in een infographic."</td>
                <td>"Heeft zich verdiept in de dimensie gezondheid, heeft een mening over beroepsziekten en het belang van gezondheid in het algemeen en heeft dit aangetoond in een infographic."</td>
                <td>"Heeft zich verdiept in de dimensie politiek, heeft een mening over diverse politieke stromingen, heeft kennis van het Nederlandse kiessysteem, 1e en 2e kamer en trias politica en heeft dit aangetoond in een infographic."</td>
                <td>"Heeft zich verdiept in de dimensie economie, heeft zich verdiept in de kosten die een student in Nederland heeft, welke verzekeringen verplicht zijn na de leeftijd van 18 jaar en heeft kennis van belastingen in Nederland en heeft dit aangetoond in een infographic."</td>
                <td>"Interview bij de stagebegeleider van het BPV bedrijf over hoe de vier dimensies een plek krijgen in de organisatie en geeft een advies voor verbetering op basis van het interview."</td>
                <td>"Neemt de burgerschapsdimensies op in uitwerking van de challenges. Doet voorstel voor acties challenge owner"</td>
                <td>"Burgerschap"</td>
            </tr>
            <tr>
                <td>5: Generieke onderdelen NE</td>
                <td>"Student heeft drie verschillende 'Nederlands-Bricks' succesvol voltooid."</td>
                <td>"Student heeft een presentatie-opdracht op 3F-niveau voltooid."</td>
                <td>"Student heeft een schrijfopdracht op 3F-niveau voltooid."</td>
                <td>"Student heeft een oefenexamen Lezen/Luisteren op 3F-niveau voltooid."</td>
                <td>"Student heeft alle examens voor Nederlands behaald."</td>
                <td colspan="2">⬅ Work in progress...</td>
            </tr>
            <tr>
                <td>6: Generieke onderdelen EN</td>
                <td>"Opdrachten voor A2 lezen en luisteren: ERK niveau lezen: Ik kan zeer korte eenvoudige teksten lezen. Ik kan specifieke voorspelbare informatie vinden in eenvoudige, alledaagse teksten zoals advertenties, folders, menu's en dienstregelingen en ik kan korte, eenvoudige, persoonlijke brieven begrijpen. ERK niveau luisteren: Ik kan zinnen en de meest frequente woorden begrijpen die betrekking hebben op gebieden die van direct persoonlijk belang zijn (bijvoorbeeld basisinformatie over mezelf en mijn familie, winkelen, plaatselijke omgeving, werk). Ik kan de belangrijkste punten in korte, duidelijke eenvoudige boodschappen en aankondigingen volgen."</td>
                <td>"Opdrachten voor A2 schrijven en gesprekken voeren: ERK niveau schrijven: Ik kan korte, eenvoudige notities en boodschappen opschrijven. Ik kan een zeer eenvoudige persoonlijke brief schrijven, bijvoorbeeld om iemand voor iets te bedanken. ERK niveau gesprekken voeren: Ik kan communiceren over eenvoudige en alledaagse taken die een eenvoudige en directe uitwisseling van informatie over vertrouwde onderwerpen en activiteiten betreffen. Ik kan zeer korte sociale gesprekken aan, alhoewel ik gewoonlijk niet voldoende begrijp om het gesprek zelfstandig gaande te houden."</td>
                <td>"Opdrachten voor A2 vocabulaire en spreken: ERK niveau spreken: Ik kan een reeks uitdrukkingen en zinnen gebruiken om in eenvoudige bewoordingen mijn familie en andere mensen, leefomstandigheden, mijn opleiding en mijn huidige of meest recente baan te beschrijven."</td>
                <td>"Opdrachten voor B1 lezen en luisteren: ERK niveau lezen: Ik kan teksten begrijpen die hoofdzakelijk bestaan uit hoogfrequente, alledaagse of aan mijn werk gerelateerde taal. Ik kan de beschrijving van gebeurtenissen, gevoelens en wensen in persoonlijke brieven begrijpen. ERK niveau luisteren: Ik kan de hoofdpunten begrijpen wanneer in duidelijk uitgesproken standaarddialect wordt gesproken over vertrouwde zaken die ik regelmatig tegenkom op mijn werk, school, vrije tijd enz. Ik kan de hoofdpunten van veel radio- of tv-programma’s over actuele zaken of over onderwerpen van persoonlijk of beroepsmatig belang begrijpen, wanneer er betrekkelijk langzaam en duidelijk gesproken wordt."</td>
                <td>"Opdrachten voor B1 vocabulaire en spreken: ERK niveau spreken: Ik kan uitdrukkingen op een simpele manier aan elkaar verbinden, zodat ik ervaringen en gebeurtenissen, mijn dromen, verwachtingen en ambities kan beschrijven. Ik kan in het kort redenen en verklaringen geven voor mijn meningen en plannen. Ik kan een verhaal vertellen, of de plot van een boek of film weergeven en mijn reacties beschrijven."</td>
                <td colspan="2">Examen spreken, gesprek voeren, schrijven</td>
            </tr>
            <tr>
                <td>7: Generieke onderdelen LB</td>
                <td>"Maak een profiel aan bij Leo Loopbaan. Doe de test 'jouw plek in de wereld van werk'. Reflecteer hierop. Maak de loopbaanopdracht belemmering of kans in Leo Loopbaan. En reflecteer."</td>
                <td>"Maak in Leo Loopbaan de tests 'Persoonlijkheidstype', 'Kwaliteitentest' en 'Beroepenzelfonderzoek'. Schrijf een reflectie over de uitkomsten, je kunt uitleg geven over de uitkomsten wat je over jezelf leerde."</td>
                <td>"Maak in Leo Loopbaan de tests 'Waardentest', 'Competentiescan' en 'Employability'. Schrijf een reflectie over de uitkomsten, je kunt uitleg geven over de uitkomsten wat je over jezelf leerde."</td>
                <td>"Maak een LinkedIn profiel aan, je kunt hierover uitleggen wat belangrijk is. Maak een CV."</td>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td>8: Keuzedeel 1</td>
                <td colspan="7">Examen gedaan</td>
            </tr>
            <tr>
                <td>9: Keuzedeel 2</td>
                <td colspan="7">Examen gedaan</td>
            </tr>
            <tr>
                <td>10: Keuzedeel 3</td>
                <td colspan="7">Examen gedaan</td>
            </tr>
            <tr>
                <td>Gedrag, Professionaliteit, Persoonlijke ontwikkeling</td>
                <td>"Ik weet wat er van me verwacht wordt bij het op tijd komen. Ik heb alle licenties in orde en weet wat ik moet doen voor de AVO-vakken."</td>
                <td>"Ik weet wat ik van de opleiding vind en wat mijn volgende stappen gaan zijn in deze opleiding. Ik benoem 1 sterk punt en 1 ontwikkelpunt van mijzelf."</td>
                <td>"Ik ben helemaal bekend met hoe ik een challenge moet uitvoeren, hoe ik informatie krijg, workshops aanvraag, alles voor het behalen van een go voor een challenge."</td>
                <td>"Doe de loopbaanopdracht Energiegevers en energievreters in Leo Loopbaan en reflecteer."</td>
                <td>"Doe de loopbaanopdracht Je ideale werkomgeving in Leo Loopbaan en reflecteer."</td>
                <td>"Je laat zien dat je met een bedrijf een challenge hebt uitgevoerd. Van deze ervaring schrijf je een STARR reflectie."</td>
                <td>"Je komt je afspraken na, bent actief in je team en lost voorkomende problemen op, bent proactief, neemt verantwoordelijkheid voor het proces en neemt actief deel aan stand-up meetings en reflecteert hierop en geeft feedback op je collega's."</td>
            </tr>
        </tbody>
    </table>

</body>
</html>
