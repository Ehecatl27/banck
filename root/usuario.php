<?php
// Verifica si se enviaron datos 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe los datos 
    $usuario = htmlspecialchars($_POST['usuario']);
    
       
        exit();
    
}

?>