<?php
include("db.php");  
$sentenciaSQL=$conexion->prepare("SELECT * FROM citas");
$sentenciaSQL->execute();
$citas=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>
<?php
ob_start();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Justificante Médico</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 800px; /* Adjust as needed */
            margin: 0 auto;
            padding: 20px;
        }
        .justification {
            border: 1px solid #ccc;
            padding: 20px;
        }
        .logo-right {
            display: flex;
            justify-content: space-between;
            float: right;
        }
        .logo-left {
            display: flex;
            float: left;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo-right">
                <img src="https://i.postimg.cc/fL1VJ1G3/55306527-removebg.png" width="130" height="80">
    </div> <div class="logo-left">
                <img src="https://seeklogo.com/images/U/universidad-tecnologica-del-valle-de-toluca-logo-82F16BF313-seeklogo.com.png" alt="Foto logo es" width="100" height="50">
            </div><br>
            <h1>Justificante Psicopedagogía</h1>
        </div>
        <?php
        $sql = "SELECT * FROM citas";
        $stmt = $conexion->prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $nombre = $row['nombre'];
            $dia = $row['dia'];
            $hora = $row['hora'];}
        ?>
        <div class="info">
            <p><strong>Nombre del Paciente:</strong> <?php echo $nombre ?> </p>
            <p><strong>Fecha:</strong> <?php echo $dia ?> </p>
        </div>
        <div class="justification">
            <h2>Justificación Médica</h2>
            <p>Por medio de la presente, el paciente <strong> <?php echo $nombre ?></strong> queda justificado de sus actividades laborales o académicas por el día <strong><?php echo $dia ?></strong> ya que ha asistido a su sesión de terapia psicologica que se programo para el dia </strong><?php echo $dia ?> a las </strong><?php echo $hora ?> </p>
            <p>Mediante el documento,confirmo y corroboro su asistencia</p>
            <p>Atentamente,</p>
            <p>Dr.Ana Dolores López Hernández</p>
            <p>Psicóloga de la Universidad Tecnológica del Valle de Toluca</p>
            <br><br><br><br>
            <center>------------------------------<br>Nombre y firma del Psicólogo</center>
        </div></div>
</body>
</html>
<?php
$html=ob_get_clean();
//echo $html;

require_once "../libreria/dompdf/autoload.inc.php";
use Dompdf\Dompdf;
$dompdf = new Dompdf();

$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true));
$dompdf->setOptions($options);

$dompdf->loadHtml($html);

$dompdf->setPaper('letter');

$dompdf->render();

$dompdf->stream("Justificante_.pdf",array("Attachment" => false));

?>
