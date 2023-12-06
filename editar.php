<?php
ob_start();
?>
<?php
include("db.php");
include("cabecera.php");
if(isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
    $sentencia = $conexion->prepare("SELECT * FROM citas WHERE nombre=:nombre");
    $sentencia->bindParam(":nombre", $nombre);
    $sentencia->execute();
    $registro = $sentencia->fetch(PDO::FETCH_ASSOC);
    $correo = $registro["correo"];
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $tipoo = $_POST["tipoo"];
    $citaa = $_POST["citaa"];
    $dia = $_POST["dia"];
    $hora = $_POST["hora"];
    // Actualizar datos en la base de datos
    $sql = "UPDATE citas SET correo=:correo, tipoo=:tipoo, citaa=:citaa, dia=:dia, hora=:hora WHERE nombre=:nombre";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(":correo", $correo);
    $stmt->bindParam(":tipoo", $tipoo);
    $stmt->bindParam(":citaa", $citaa);
    $stmt->bindParam(":dia", $dia);
    $stmt->bindParam(":hora", $hora);
    $stmt->bindParam(":nombre", $nombre);
    
    if ($stmt->execute()) {
        // Redirigir a la página de citas
        header("Location:index.php");
        exit();
    } else {
        echo "Error al actualizar la cita: " . $stmt->errorInfo()[2];
    }
}
?>
<div class="card-header">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
<div class="mb-3">
  <label for="nombre" class="form-label">Nombre: </label>
  <input type="texto"
  value="<?php echo $nombre;?>"
    class="form-control" readonly name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre">
  <small id="helpId"  class="form-text text-muted"></small>
</div>
<div class="mb-3">
  <label for="correo" class="form-label">Correo</label>
  <input type="text"
  value="<?php echo $correo;?>"
    class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder="Correo Institucional">
</div>
<div class="mb-3">
                  <label for="tipoo" class="form-label">Tipos de usuario</label>
                  <input type="text"
                    class="form-control"  name="tipoo" id="tipoo" aria-describedby="helpId" placeholder="Estudiante  Docente  Administrativo">
                </div>
                <div class="mb-3">
                  <label for="citaa" class="form-label">Tipos de cita</label>
                  <input type="text"
                    class="form-control" name="citaa" id="citaa" aria-describedby="helpId" placeholder="Individual  Grupal  Equipo">
                </div>
<div class="mb-3">
  <label for="dia" class="form-label">Día</label>
  <input type="date" class="form-control" name="dia" id="dia" aria-describedby="emailHelpId" placeholder="abc@mail.com">
</div> 
<div class="mb-3">
    <label for="hora" class="form-label">Hora</label>
    <select class="form-select form-select-sm" name="hora" id="hora">
        <option selected></option>
        <option value="10:00 AM">10:00 AM</option>
                    <option value="11:00 AM">11:00 AM</option>
                    <option value="12:00 PM">12:00 PM</option>
                    <option value="13:00 PM">1:00 PM</option>
                    <option value="14:00 PM">2:00 PM</option>
                    <option value="15:00 PM">3:00 PM</option>
                    <option value="16:00 PM">4:00 PM</option>
    </select></div>
    <div class="mb-3">
                  <label for="justificante" class="form-label">Estatus</label>
                  <input type="text"
                    class="form-control" name="justificante" id="justificante" aria-describedby="helpId" placeholder="Escriba CONFIRMADA">
                </div>
    <center><p style="color: red;"><u>**RECUERDE QUE DEBE DE COMPLETAR TODOS LOS CAMPOS PARA REGISTRAR CON EXITO SU CITA**</u></p></center>
    <button type="submit" class="btn btn-success">Registrar de nuevo la cita</button>
    <a name="" id="" class="btn btn-primary" href="/CRUD/index.php" role="button">Cancelar</a>
</form>
    <?php
include("footer.php");
?> 
<?php
ob_end_flush();
?> 
