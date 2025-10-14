document.addEventListener('DOMContentLoaded', () => {
document.getElementById("form").addEventListener('submit', async (e) => {
e.preventDefault();

 const nombre = document.getElementById("nombre").value.trim();
 const social = document.getElementById("social").value.trim();
 const email = document.getElementById("correo").value.trim();
 const num = document.getElementById("numero").value.trim();
 const producto = document.getElementById("TipoProducto").value.trim();
 const mensaje = document.getElementById("Mensaje");

 if (!nombre || !email || !social || !num || !producto ) {
    mensaje.textContent = "⚠️ Todos los campos son obligatorios.";
    mensaje.style.color = "red";
    return;
  }
  if (!email.includes("@") || !email.includes(".")) {
    mensaje.textContent = "⚠️ Ingresa un correo válido.";
    mensaje.style.color = "red";
    return;
  }

  if (num < 9) {
    mensaje.textContent = "⚠️ ingrese un numero valido"
    return;
  }
  try {
    // Envía los datos al servidor usando fetch con método POST y formato JSON
    const respuesta = await fetch("http://localhost/ProgramacionWeb2025/ComunicacionPostServidor/api/Registrar.php", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ nombre, email, password })
    });

    // Espera la respuesta del servidor en formato JSON
    const data = await respuesta.json();

    // Si el registro fue exitoso, muestra mensaje de éxito
    if (data.estado === "ok") {
      mensaje.textContent = "✅ " + data.mensaje;
      mensaje.style.color = "green";
    } else {
      // Si hubo un error, muestra mensaje de advertencia
      mensaje.textContent = "⚠️ " + data.mensaje;
      mensaje.style.color = "red";
    }

  } catch (error) {
    // Si ocurre un error en la conexión, muestra mensaje de error
    mensaje.textContent = " Error de conexión con el servidor.";
    mensaje.style.color = "red";
  }

}) })