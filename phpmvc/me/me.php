<?php
/**
 * My own me-page to start with.
 */
include("config.php");

// Get small bits and pieces from various views.
$vjByline  = file_get_contents(__DIR__."/incl/vjByline.php");

// Create the data array which is to be used in the template file.
$data['title'] = "Min me-sida med HTML5Boilerplate";
$data['meta_description'] = "Min egna me-sida, skapad för kursen phpmvc med HTML5Boilerplate.";
$data['main'] = <<<EOD
<h1>Om mig själv</h1>

<p>Mitt namn är Valdemar och jag läser DSV på BTH.</p>
  
{$vjByline}

EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 
