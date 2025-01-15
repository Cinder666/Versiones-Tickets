<?php
class DBConnection {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "tickets_db";  // Cambia esto si tu base de datos se llama 'tickets_db' u otro nombre


    public $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->conn->connect_error) {
            die("❌ Error de conexión a la base de datos: " . $this->conn->connect_error);
        }
    }

    public function __destruct() {
        if ($this->conn) {
            $this->conn->close();
        }
    }
}
?>
