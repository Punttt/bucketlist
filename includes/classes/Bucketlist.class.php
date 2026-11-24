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

        // Teckenkodning för å, ä och ö
        $this->db->set_charset("utf8mb4");
    }

    // Returnerar hela bucketlist
    public function getItems() : array {
        $sql = "SELECT * FROM items ORDER BY priority ASC;";
        $result = mysqli_query($this->db, $sql);

        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    // Lägga till nytt item i bucketlist!
    public function addItems(string $name, string $description, int $priority) : bool {
        if(!$this->setName($name)) return false;
        if(!$this->setDescription($description)) return false;
        if(!$this->setPriority($priority)) return false;

        $sql = "INSERT INTO items(name, description, priority)VALUES('$this->name', '$this->description', '$this->priority');";

        $result = mysqli_query($this->db, $sql);

        return $result;
    }

    // Radera ett item från bucketlist
    public function deleteItem(int $id) : bool {
        if($id < 1) return false;

        $sql = "DELETE FROM items WHERE id = $id;";

        return mysqli_query($this->db, $sql);
        
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
    public function setPriority(int $priority) : bool {
        // Kontrollera längd
        if($priority < 1 || $priority > 5) {
            return false;
        } else {
            $this->priority = $this->db->real_escape_string($priority);
            return true;
        }
    }

    public function getName() : string {
        return $this->name;
    }
    public function getDescription() : string {
        return $this->description;
    }
    public function getPriority() : int {
        return $this->priority;
    }
}