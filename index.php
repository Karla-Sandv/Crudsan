
<?php
include("cabecera.php");
include("../db.php");
?>


<img src="https://i.postimg.cc/tgCLyVjq/kisspng-computer-icons-user-clip-art-user-5abf13db5624e4-1771742215224718993529.png"
            width="200" height="200" align="right">
            <div class="">
                <h1>Citas agendadas/Crear cita</h1>
                <BR>
               <H4> Historial</H4>
                <div class="card">
                <div class="card-headers">
                    <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar Cita</a>
                </div>
                <div class="card-body">
                <div class="table-responsive-sm">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Tipo de usuario</th>
                <th scope="col">Tipo de cita</th>
                <th scope="col">Día</th>
                <th scope="col">Hora</th>
                <th scope="col">Estatus</th>
                <th scope="col">Consultas</th>
            </tr>
        </thead>
        <tbody>
        <?php
        
            $sql = "SELECT * FROM citas";
            $stmt = $conexion->prepare($sql);
            $stmt->execute();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $row['nombre'] . "</td>";
                echo "<td>" . $row['correo'] . "</td>";
                echo "<td>" . $row['tipoo'] . "</td>";
                echo "<td>" . $row['citaa'] . "</td>";
                echo "<td>" . $row['dia'] . "</td>";
                echo "<td>" . $row['hora'] . "</td>";
                echo "<td>" . $row['estatus'] . "</td>";
                echo "<td><a class='btn btn-info' href='editar.php?nombre=" . $row['nombre'] . "' role='button'>Editar</a>|
                <a class='btn btn-danger' href='eliminar.php?nombre=" . $row['nombre'] . "' role='button'>Eliminar</a>|
                <a class='btn btn-primary' href='justificante.php?nombre=" . $row['nombre'] . "' role='button'>Justificante</a>";
            }
            
            ?>
             </table>
                 </tbody>   
            </form>
<?php
include("footer.php");
?>
<?php
ob_end_flush();
?> 