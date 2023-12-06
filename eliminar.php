<?php
include("../db.php");

if(isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
    
    // Consulta SQL para eliminar la cita
    $sql = "DELETE FROM citas WHERE nombre=:nombre";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(":nombre", $nombre);
    
    if ($stmt->execute()) {
        // Redirigir a la página de citas
        header("Location: index.php");
        exit();
    } else {
        echo "Error al eliminar la cita: " . $stmt->errorInfo()[2];
    }
}
?>
