<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de Validación</title>
    <link rel="stylesheet" href="../css/formulario.css">
    <style>
        body { font-family: sans-serif; line-height: 1.6; margin: 20px; }
        .result-container { max-width: 600px; margin: 20px auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9; }
        .result-container h2 { text-align: center; color: #333; }
        .apt-message { color: green; font-weight: bold; text-align: center; font-size: 1.2em; margin-top: 20px; }
        .not-apt-message { color: red; font-weight: bold; text-align: center; font-size: 1.2em; margin-top: 20px; }
        .answers-summary { margin-top: 30px; border-top: 1px solid #eee; padding-top: 20px; }
        .answers-summary h3 { color: #555; }
        .answers-summary p { margin-bottom: 10px; }
        .answers-summary strong { display: inline-block; width: 200px; }
    </style>
</head>
<body>
    <div class="result-container">
        <h2>Resultado de la Validación</h2>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $experiencia = $_POST['experiencia'] ?? '';
            $accidente = $_POST['accidente'] ?? '';
            $licencia = $_POST['licencia'] ?? '';
            $normas = $_POST['normas'] ?? '';
            $formacion = $_POST['formacion'] ?? '';
            $detalle_accidente = $_POST['detalle_accidente'] ?? 'No proporcionado';
            $sanciones = $_POST['sanciones'] ?? '';
            $estres = $_POST['estres'] ?? 'No proporcionado';
            $paciente = $_POST['paciente'] ?? '';
            $ira = $_POST['ira'] ?? 'No proporcionado';
            $sustancias = $_POST['sustancias'] ?? '';
            $descanso = $_POST['descanso'] ?? '';
            $emergencia = $_POST['emergencia'] ?? 'No proporcionado';

            $es_apto = true;

            if ($experiencia == 'No' || $licencia == 'No' || $normas == 'No' || $formacion == 'No' || $sanciones == 'No' || $sustancias == 'No' || $descanso == 'No') {
                $es_apto = false;
            }

            if ($accidente == 'Sí') {
                 // $es_apto = false;
            }


            if ($es_apto) {
                echo '<p class="apt-message">La persona parece ser Apta para adquirir un vehículo según este formulario.</p>';
            } else {
                echo '<p class="not-apt-message">La persona NO parece ser Apta para adquirir un vehículo según este formulario.</p>';
            }

            echo '<div class="answers-summary">';
            echo '<h3>Resumen de Respuestas:</h3>';
            echo '<p><strong>Experiencia previa:</strong> ' . htmlspecialchars($experiencia) . '</p>';
            echo '<p><strong>Tuvo accidente:</strong> ' . htmlspecialchars($accidente) . '</p>';
            echo '<p><strong>Licencia vigente:</strong> ' . htmlspecialchars($licencia) . '</p>';
            echo '<p><strong>Conoce normas:</strong> ' . htmlspecialchars($normas) . '</p>';
            echo '<p><strong>Formación seguridad vial:</strong> ' . htmlspecialchars($formacion) . '</p>';
            echo '<p><strong>Detalle accidente:</strong> ' . nl2br(htmlspecialchars($detalle_accidente)) . '</p>';
            echo '<p><strong>A tenido sanciones de tansito o judiciales:</strong> ' . htmlspecialchars($sanciones) . '</p>';
            echo '<p><strong>Manejo estrés:</strong> ' . nl2br(htmlspecialchars($estres)) . '</p>';
            echo '<p><strong>Paciente/Tolerante:</strong> ' . htmlspecialchars($paciente) . '</p>';
            echo '<p><strong>Episodios de ira:</strong> ' . nl2br(htmlspecialchars($ira)) . '</p>';
            echo '<p><strong>Consume sustancias:</strong> ' . htmlspecialchars($sustancias) . '</p>';
            echo '<p><strong>Descanso suficiente:</strong> ' . htmlspecialchars($descanso) . '</p>';
            echo '<p><strong>Reacción emergencia:</strong> ' . nl2br(htmlspecialchars($emergencia)) . '</p>';
            echo '</div>';

        } else {
            echo '<p style="text-align: center; color: blue;">Este archivo procesa un formulario. Por favor, regresa al formulario para completarlo.</p>';
        }
        ?>
         <p style="text-align: center; margin-top: 20px;"><a href="contacto.php">Contacta a un asesor</a></p>

    </div>
</body>
</html>