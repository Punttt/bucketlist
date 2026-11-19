<?php

class Bucketlist {
    // Properties
    private $db;
    private $name;
    private $description;
    private $priority;
    
    // Constructor
    function __construct()
    {
        $this->db = new mysqli(DBHOST, DBUSER, DBPASS, DBDATABASE);
        
        // Felkontroll
        if ($this->db->connect_error) {
            die("Connection failed: " . $this->db->connect_error);
        }
    }

    // Returnerar bucketlist
    public function getBucketlist() : array {
        $sql = "SELECT * FROM items;";
        $result = mysqli_query($this->db, $sql);

        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
}