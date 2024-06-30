<?php
class AnnonceDAO {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllAnnonces() {
        $sql = "SELECT data FROM annonces";
        $result = $this->conn->query($sql);

        $annonces = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $annonces[] = json_decode($row['data'], true);
            }
        }
        return $annonces;
    }
}
?>