<?php
class Database {
    public $host = "localhost";
    public $username = "root";
    public $password = ""; 
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
    public function addBook($title, $author, $tahun) {
        $sql = "INSERT INTO books (judul, author, tahun_terbit) VALUES ('$title', '$author', '$tahun')";
        return $this->conn->query($sql);
    }
    public function getBookById($id) {
        $sql = "SELECT * FROM books WHERE id='$id'";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc();
    }

    public function updateBook($id, $title, $author, $tahun) {
        $sql = "UPDATE books SET judul='$title', author='$author', tahun_terbit='$tahun' WHERE id='$id'";
        return $this->conn->query($sql);
    }
    public function deleteBook($id) {
        $sql = "DELETE FROM books WHERE id='$id'";
        return $this->conn->query($sql);
    }

    public function __destruct() {
        if ($this->conn) {
            $this->conn->close();
        }
    }
}
?>
