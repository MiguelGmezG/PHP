<?php
class ConexionBD
{
    private $server = 'mysql:host=localhost;dbname=hoteles;charset=utf8';
    private $user = 'root';
    private $password = '';
    private $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO($this->server, $this->user, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die(json_encode(['error' => 'Error de conexión a la base de datos: ' . $e->getMessage()]));
        }
    }

    public function borraHotel($id)
    {
        try {
            $stmt = $this->pdo->prepare("DELETE FROM hoteles WHERE ID = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        } catch (PDOException $e) {
            die(json_encode(['error' => 'Error al borrar el hotel: ' . $e->getMessage()]));
        }
    }

    public function getHoteles()
    {
        try {
            $query = "SELECT * FROM hoteles";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            $hoteles = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $hoteles;
        } catch (PDOException $e) {
            die(json_encode(['error' => 'Error al obtener datos de la base de datos: ' . $e->getMessage()]));
        }
    }
    public function getHotelById($id)
    {
        try {
            $query = "SELECT * FROM hoteles WHERE id = :id";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $hotel = $stmt->fetch(PDO::FETCH_ASSOC);
            $stmt->closeCursor();
            return $hotel;
        } catch (PDOException $e) {
            throw new Exception('Error al obtener los datos de la base de datos: ' . $e->getMessage());
        }
    }
    public function modificaHotel($id, $nombre, $categoria, $habitacion, $poblacion, $direccion)
    {
        try {
            $query = "UPDATE hoteles SET 
                      nombre = :nombre, 
                      categoria = :categoria, 
                      habitacion = :habitacion, 
                      poblacion = :poblacion, 
                      direccion = :direccion 
                      WHERE ID = :id";

            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':categoria', $categoria);
            $stmt->bindParam(':habitacion', $habitacion);
            $stmt->bindParam(':poblacion', $poblacion);
            $stmt->bindParam(':direccion', $direccion);
            $stmt->execute();
        } catch (PDOException $e) {
            die(json_encode(['error' => 'Error al modificar el hotel: ' . $e->getMessage()]));
        }
    }

    public function añadeHotel($nombre, $categoria, $habitacion, $poblacion, $direccion)
    {
        try {
            $stmt = $this->pdo->prepare("INSERT INTO hoteles (nombre, categoria, habitacion, poblacion, direccion) VALUES (:nombre, :categoria, :habitacion, :poblacion, :direccion)");
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':categoria', $categoria);
            $stmt->bindParam(':habitacion', $habitacion);
            $stmt->bindParam(':poblacion', $poblacion);
            $stmt->bindParam(':direccion', $direccion);
            $stmt->execute();
        } catch (PDOException $e) {
            die(json_encode(['error' => 'Error al añadir el hotel: ' . $e->getMessage()]));
        }
    }
}
