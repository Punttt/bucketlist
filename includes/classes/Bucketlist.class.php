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
    public function getItems() : array {
        $sql = "SELECT * FROM items;";
        $result = mysqli_query($this->db, $sql);

        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    // Lägga till ny bucket!
    public function addItems(string $name, string $description, string $priority) : bool {
        if(!$this->setName($name)) return false;
        if(!$this->setDescription($description)) return false;
        if(!$this->setPriority($priority)) return false;

        $sql = "INSERT INTO items(name, description, priority)VALUES('$this->name', '$this->description', '$this->priority');";

        $result = mysqli_query($this->db, $sql);

        return $result;
    }

    // GET och SET metoder
    public function setName(string $name) : bool {
        // Kontrollera längd
        if($name != "") {
            $this->name = $this->db->real_escape_string($name);
            return true;
        } else {
            return false;
        }
    }
    public function setDescription(string $description) : bool {
        // Kontrollera längd
        if($description != "") {
            $this->description = $this->db->real_escape_string($description);
            return true;
        } else {
            return false;
        }
    }
    public function setPriority(string $priority) : bool {
        // Kontrollera längd
        if($priority != "") {
            $this->priority = $this->db->real_escape_string($priority);
            return true;
        } else {
            return false;
        }
    }

    public function getName() : string {
        return $this->name;
    }
    public function getDescription() : string {
        return $this->description;
    }
    public function getPriority() : string {
        return $this->priority;
    }
}