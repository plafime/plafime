<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"];
  $correo = $_POST["correo"];
  $mensaje = $_POST["mensaje"];

  $destinatario = "platillosfime@example.com";
  $asunto = "Nuevo mensaje del cuestionario";
  $contenido = "Nombre: " . $nombre . "\n";
  $contenido .= "Correo electrónico: " . $correo . "\n";
  $contenido .= "Mensaje: " . $mensaje;

  $cabeceras = "From: $correo";

  // Envía el correo cambiar destinario por enviar.php en index
  mail($destinatario, $asunto, $contenido, $cabeceras);

  // Redirecciona a una página de confirmación
  header("Location: confirmacion.html");
}
?>
