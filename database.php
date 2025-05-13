<?php
class Database {
    public $host = "localhost";
    public $username = "root";
    public $password = ""; // Change this to your DB password
    public $db_name = "perpus";
    public $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        $this->conn->set_charset("utf8mb4");
    }

    public function getBooks() {
        $sql = "SELECT * FROM books";
        $result = $this->conn->query($sql);
        $books = [];
        if ($result && $result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                $books[] = $row;
            }
        }
        return $books;
    }

    public function __destruct() {
        if ($this->conn) {
            $this->conn->close();
        }
    }
}
?>
