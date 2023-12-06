
<?php
include("cabecera.php");
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $tipoo = $_POST["tipoo"];
    $citaa = $_POST["citaa"];
    $dia = $_POST["dia"];
    $hora = $_POST["hora"];
    $estatus = $_POST["estatus"];

    $sql = "INSERT INTO citas (nombre, correo, tipoo, citaa, dia, hora, estatus) VALUES (:nombre, :correo, :tipoo, :citaa, :dia, :hora, :estatus)";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':correo', $correo);
    $stmt->bindParam(':tipoo', $tipoo);
    $stmt->bindParam(':citaa', $citaa);
    $stmt->bindParam(':dia', $dia);
    $stmt->bindParam(':hora', $hora);
    $stmt->bindParam(':estatus', $estatus);
// Ejecutar la consulta y verificar si se realizó correctamente
if ($stmt->execute()) {
  echo "Cita registrada exitosamente.";
} else {
  echo "Error al registrar la cita: " . $stmt->errorInfo()[2];
}
}
?>
<p style="color:#E88113;">Citas</p> </h1>
            <p style="color:#05ac1b;">Agendar</p>
            <div class="card">
<div class="card-header">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div class="mb-3">
                  <label for="nombre" class="form-label">Nombre</label>
                  <input type="text"
                    class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre completo">
                </div>
<div class="mb-3">
  <label for="correo" class="form-label">Correo</label>
  <input type="text"
    class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder="Correo Institucional">
</div>
<div class="mb-3">
                  <label for="tipoo" class="form-label">Tipos de usuario</label>
                  <input type="text"
                    class="form-control" name="tipoo" id="tipoo" aria-describedby="helpId" placeholder="Estudiante  Docente  Administrativo">
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
  <label for="estatus" class="form-label">Estatus</label>
  <input type="text" class="form-control" name="estatus" id="estatus" aria-describedby="helpId" placeholder="Confirme la cita">
</div>
    <button type="submit" class="btn btn-success">Registrar cita</button>
    <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar/Regresar</a>
    
            </form>
</div>
            <?php
include("footer.php");
?> 
 
