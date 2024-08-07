<?php

// url: /admin/educations/new
// Dit is de controller-pagina voor het formulier toevoegen van 
// een nieuwe opleiding.

// Globale variablen en functies die op bijna alle pagina's
// gebruikt worden.
require $_SERVER['DOCUMENT_ROOT'] . '/config/globalvars.php';

// 1. INLOGGEN CONTROLEREN
// Hier wordt gecontroleerd of de gebruiker is ingelogd en de juiste rechten
// heeft. De rollen "applicatiebeheerder" en "administrator" hebben toegang. 

// 2. INPUT CONTROLEREN
// Controleren of de pagina is aangeroepen met behulp van een link (GET).
// Op dit moment hier niet van toepassing.

// 3. CONTROLLER FUNCTIES
// Hier vinden alle acties plaats die moeten gebeuren om de juiste
// informatie te bewerken.

// 4. VIEWS OPHALEN
// De HTML-pagina (view) wordt hier opgehaald.
// $title is de titel van de html pagina.
$title = "Opleiding toevoegen";
$editmode = false;
$actionUrl = "/admin/educations/add";
require $_SERVER['DOCUMENT_ROOT'] . '/views/admin/educations/form.php';