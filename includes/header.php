<?php
include 'includes/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $sitename ?><?= $divider ?><?= $pagetitle ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header id="main-header">
        <div class="container">
            <a href="/index.php">
                <h1>Bucketlist</h1>
            </a>
            <nav>
                <ul>
                    <li><a href="index.php">Hem</a></li>
                    <li><a href="ai.php">AI</a></li>
                    <li><a href="bucketlist.php">Bucketlist</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">