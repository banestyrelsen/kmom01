<?php
/**
 * An empty page to show off how it looks.
 */
include("config.php");

// Create the data array which is to be used in the template file.
$data['title'] = "Redovisning phpmvc";
$data['meta_description'] = "Redovisning phpmvc";
$data['main'] = <<<EOD
<h1>Redovisning</h1>

<h2>Kmom01: En boilerplate</h2>

<p>Fungerar i Chrome men inte i Firefox.
Såg hela Paul Irish-videon. Hajar konceptet men detaljerna flög mest över mitt huvud.
Fattar inte hur headern inkluderas i index.php.</p>

EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 
