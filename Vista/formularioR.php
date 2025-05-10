<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Validación de Conductor</title>
    <link rel="stylesheet" href="../css/formulario.css">
</head>
<body>
    <div class="form-container">
        <h2>Formulario de Validación</h2>
        <form action="procesarFormulario.php" method="POST">
            
            <label>¿Ha manejado un vehículo automotor antes?</label>
            <input type="radio" name="experiencia" value="Sí" required> Sí
            <input type="radio" name="experiencia" value="No"> No

            <label>¿Ha tenido algún accidente en un vehículo (carro o moto)?</label>
            <input type="radio" name="accidente" value="Sí" required> Sí
            <input type="radio" name="accidente" value="No"> No

            <label>¿Cuenta con una licencia de conducción vigente y del tipo adecuado?</label>
            <input type="radio" name="licencia" value="Sí" required> Sí
            <input type="radio" name="licencia" value="No"> No

            <label>¿Conoce las normas básicas de tránsito?</label>
            <input type="radio" name="normas" value="Sí" required> Sí
            <input type="radio" name="normas" value="No"> No

            <label>¿Ha recibido formación en seguridad vial?</label>
            <input type="radio" name="formacion" value="Sí" required> Sí
            <input type="radio" name="formacion" value="No"> No

            <label>¿Ha estado involucrado en accidentes en los últimos años? ¿Qué ocurrió y cómo lo gestionó?</label>
            <textarea name="detalle_accidente" rows="4" placeholder="Describe brevemente..."></textarea>

            <label>¿Está familiarizado con sanciones por infracciones de tránsito?</label>
            <input type="radio" name="sanciones" value="Sí" required> Sí
            <input type="radio" name="sanciones" value="No"> No

            <label>¿Cómo maneja el estrés y la presión al conducir en tráfico pesado?</label>
            <textarea name="estres" rows="3" placeholder="Escribe tu respuesta..."></textarea>

            <label>¿Se considera una persona paciente y tolerante al volante?</label>
            <input type="radio" name="paciente" value="Sí" required> Sí
            <input type="radio" name="paciente" value="No"> No

            <label>¿Ha tenido episodios de ira al conducir? ¿Cómo los manejó?</label>
            <textarea name="ira" rows="3" placeholder="Describe tu experiencia..."></textarea>

            <label>¿Consume alguna sustancia que afecte su capacidad de reacción?</label>
            <input type="radio" name="sustancias" value="Sí" required> Sí
            <input type="radio" name="sustancias" value="No"> No

            <label>¿Descansa lo suficiente antes de conducir largas distancias?</label>
            <input type="radio" name="descanso" value="Sí" required> Sí
            <input type="radio" name="descanso" value="No"> No

            <label>¿Cómo reaccionaría ante una emergencia (ej: falla de frenos)?</label>
            <textarea name="emergencia" rows="3" placeholder="Explica tu reacción..."></textarea>

           
            
            <div class="buttons">
                <button type="submit" class="btn-ingresar">Enviar formulario</button>
            </div>
        </form>
    </div>
</body>
</html>
