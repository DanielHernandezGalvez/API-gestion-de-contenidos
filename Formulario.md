<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
        }
        .container {
            display: flex;
            flex-direction: column;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }
        #progress-bar {
            width: 100%;
            background-color: lightgray;
        }
        #progress {
            width: 0%;
            height: 20px;
            background-color: green;
        }
        .hidden {
            display: none;
        }
    </style>
</head>
<body>

<div class="container">
    <div id="progress-bar">
        <div id="progress"></div>
    </div>
    <form id="form">
        <div id="step1">
            <input type="text" name="input1" placeholder="Input 1" required>
            <input type="text" name="input2" placeholder="Input 2" required>
            <button type="button" onclick="nextStep()">Siguiente</button>
        </div>
        <div id="step2" class="hidden">
            <input type="text" name="input3" placeholder="Input 3" required>
            <input type="text" name="input4" placeholder="Input 4" required>
            <button type="button" onclick="nextStep()">Siguiente</button>
        </div>
        <!-- Repite esto para los siguientes pasos -->
        <div id="step8" class="hidden">
            <input type="text" name="input15" placeholder="Input 15" required>
            <input type="text" name="input16" placeholder="Input 16" required>
            <button type="submit">Enviar</button>
        </div>
    </form>
</div>

<script>
    let currentStep = 1;
    const totalSteps = 8;

    function nextStep() {
        document.getElementById(`step${currentStep}`).classList.add('hidden');
        currentStep++;
        const progress = (currentStep - 1) / totalSteps * 100;
        document.getElementById('progress').style.width = `${progress}%`;
        document.getElementById(`step${currentStep}`).classList.remove('hidden');
    }
</script>

</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Procesa los datos del formulario
    $inputs = $_POST;
    $to = "tucorreo@example.com";
    $subject = "Datos del formulario";
    $message = "";
    
    foreach ($inputs as $key => $value) {
        $message .= "$key: $value\n";
    }
    
    // Envia el correo
    mail($to, $subject, $message);
    
    // Redirecciona o muestra un mensaje de éxito
    // header("Location: formulario_enviado.php");
    echo "¡Formulario enviado con éxito!";
    exit();
}
?>