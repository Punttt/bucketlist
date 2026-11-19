<?php
include 'includes/config.php';

$db = new mysqli(DBHOST, DBUSER, DBPASS, DBDATABASE);

if($db->connect_error) {
    die("Connection failed: " . $db->connect_error );
}

$sql = "
DROP TABLE IF EXISTS items;
CREATE TABLE items (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    priority TINYINT UNSIGNED NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
";

// Lägger till testdata
$sql .= "
INSERT INTO items (name, description, priority) VALUES
('Se norrsken', 'Åka till Abisko och se norrskenet på riktigt', 2),
('Spela Pebble Beach', 'Spela en runda på en av världens mest kända banor', 3);
";

// Skicka sql fråga till server
if ($db->multi_query($sql)) {
    echo "Tabell skapad OK!";
} else {
    echo "Fel vid skapande av tabell!";
}