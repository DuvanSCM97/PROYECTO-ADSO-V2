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
            $sanciones = $_POST['sanciones'] ?? ''; // El valor será "Sí" o "No" del radio button
            $estres = $_POST['estres'] ?? 'No proporcionado';
            $paciente = $_POST['paciente'] ?? '';
            $ira = $_POST['ira'] ?? 'No proporcionado';
            $sustancias = $_POST['sustancias'] ?? ''; // El valor será "Sí" o "No" del radio button
            $descanso = $_POST['descanso'] ?? '';
            $emergencia = $_POST['emergencia'] ?? 'No proporcionado';

            $es_apto = true; // Asumimos que es apto inicialmente

            // Lógica para determinar si NO es apto
            // Si ALGUNA de estas condiciones es VERDADERA, entonces NO es apto.
            if (
                $experiencia == 'No' ||   // No tiene experiencia
                $licencia == 'No' ||      // No tiene licencia vigente
                $normas == 'No' ||        // No conoce las normas
                $formacion == 'No' ||     // No ha recibido formación
                $sanciones == 'No' ||     // No está familiarizado con sanciones (si la pregunta era si CONOCE las sanciones) - SI la pregunta era "¿Ha tenido sanciones?", la lógica debería ser $sanciones == 'Sí'
                $sustancias == 'Sí' ||    // Consume sustancias (respuesta "Sí" a la pregunta de si consume)
                $descanso == 'No' ||      // No descansa suficiente
                $accidente == 'Sí'        // Tuvo un accidente (si tener *cualquier* accidente previo descalifica)
            ) {
                $es_apto = false; // Si alguna de las condiciones anteriores se cumple, NO es apto.
            }

            // Puedes refinar la lógica si "accidente == 'Sí'" no siempre descalifica,
            // o si quieres evaluar otros factores como "paciente == 'No'".
            // Por ejemplo:
            // if ($paciente == 'No') {
            //     $es_apto = false;
            // }


            // --- Mostrar Resultado ---
            if ($es_apto) {
                echo '<p class="apt-message">La persona parece ser Apta para adquirir un vehículo según este formulario.</p>';
            } else {
                echo '<p class="not-apt-message">La persona NO parece ser Apta para adquirir un vehículo según este formulario.</p>';
            }

            // --- Mostrar un resumen de las respuestas ---
            echo '<div class="answers-summary">';
            echo '<h3>Resumen de Respuestas:</h3>';
            echo '<p><strong>Experiencia previa:</strong> ' . htmlspecialchars($experiencia) . '</p>';
            echo '<p><strong>Tuvo accidente:</strong> ' . htmlspecialchars($accidente) . '</p>';
            echo '<p><strong>Licencia vigente:</strong> ' . htmlspecialchars($licencia) . '</p>';
            echo '<p><strong>Conoce normas:</strong> ' . htmlspecialchars($normas) . '</p>';
            echo '<p><strong>Formación seguridad vial:</strong> ' . htmlspecialchars($formacion) . '</p>';
            echo '<p><strong>Detalle accidente:</strong> ' . nl2br(htmlspecialchars($detalle_accidente)) . '</p>';
            // Ajusta el texto de la pregunta según lo que envías en el formulario
            echo '<p><strong>Familiarizado/Ha tenido sanciones de transito o judiciales:</strong> ' . htmlspecialchars($sanciones) . '</p>';
            echo '<p><strong>Manejo estrés:</strong> ' . nl2br(htmlspecialchars($estres)) . '</p>';
            echo '<p><strong>Paciente/Tolerante:</strong> ' . htmlspecialchars($paciente) . '</p>';
            echo '<p><strong>Episodios de ira:</strong> ' . nl2br(htmlspecialchars($ira)) . '</p>';
            echo '<p><strong>Consume sustancias:</strong> ' . htmlspecialchars($sustancias) . '</p>';
            echo '<p><strong>Descanso suficiente:</strong> ' . htmlspecialchars($descanso) . '</p>';
            echo '<p><strong>Reacción emergencia:</strong> ' . nl2br(htmlspecialchars($emergencia)) . '</p>';
            echo '</div>';

        } else {
            // Mensaje si alguien intenta acceder directamente a procesarFormulario.php sin enviar el formulario por POST
            echo '<p style="text-align: center; color: blue;">Este archivo procesa un formulario. Por favor, regresa al formulario para completarlo.</p>';
        }
        ?>
        <p style="text-align: center; margin-top: 20px;"><a href="../html/contacto.php">Contacta a un asesor</a></p>

    </div>
</body>
</html>
