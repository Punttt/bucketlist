<?php
$sitename = "Bucketlist";
$divider = " - ";


$devMode = true; // Sätt false vid publicering

if($devMode){
    // Aktivera felrapportering
    error_reporting(-1);
    ini_set("display_errors", 1);      
}

// Aktiverar stöd för att inkludera klassfiler automatiskt
spl_autoload_register(function($class_name){
    include 'classes/' . $class_name . '.class.php';
});

if($devMode){
    // Lokala databasinställningar
    define("DBHOST",    "");
    define("DBUSER",    "");
    define("DBPASS",    "");
    define("DBDATABASE",    "");
} else {
    // Publicerad databasinställningar
    define("DBHOST",    "");
    define("DBUSER",    "");
    define("DBPASS",    "");
    define("DBDATABASE",    "");
}