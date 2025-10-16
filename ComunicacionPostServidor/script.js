document.addEventListener('DOMContentLoaded', () => {
document.getElementById("form").addEventListener('submit', async (e) => {
e.preventDefault();

 const nombre = document.getElementById("nombre").value.trim();
 const social = document.getElementById("social").value.trim();
 const email = document.getElementById("correo").value.trim();
 const telefono = document.getElementById("telefono").value.trim();
 const TipoProducto = document.getElementById("TipoProducto").value.trim();
 const mensaje = document.getElementById("Mensaje");
 

 if (!nombre || !email || !social || !telefono || !TipoProducto ) {
    alert ("⚠️ Todos los campos son obligatorios.");
    console.log("ERROR: ningun campo debe estar vacio");
    return;
  }
  if (!email.includes("@") || !email.includes(".")) {
    alert ( "⚠️ Ingresa un correo válido.");
    console.log("ERROR: correo no valido");
    return;
  }

  if (telefono.length < 9) {
    alert ("⚠️ ingrese un numero valido");
    console.log("ERROR: numero no valido");
    return;
  }
  if (social.length < 9  || social.length > 9) {
    alert ( "⚠️ ingrese un numero valido de social");
    console.log("ERROR: numero social no valido");
    return;
  }
  if (nombre.length < 3 || nombre.length > 39) {
    alert  ("⚠️ El nombre no es valido.");
    console.log("ERROR: nombre no valido");
    return;
  }
    if (!telefono.startsWith("0")) {
    alert  ("⚠️ El número de teléfono debe comenzar con 0.");
    console.log("ERROR: telefono no valido");
    return;
  }

  try {
    // Envía los datos al servidor usando fetch con método POST y formato JSON
    const respuesta = await fetch("http://localhost/ProgramacionWeb2025/ComunicacionPostServidor/api/registrar.php", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ nombre, social, email, telefono, TipoProducto })
    });

    // Espera la respuesta del servidor en formato JSON
    const data = await respuesta.json();

    // Si el registro fue exitoso, muestra mensaje de éxito
    if (data.estado === "ok") {
      alert ("✅ " + data.mensaje);
      console.log("Registro exitoso");
    } else {
      // Si hubo un error, muestra mensaje de advertencia
      alert  ("⚠️ " + data.mensaje);
      console.log("ERROR: registro no exitoso");
    }

  } catch (error) {
    // Si ocurre un error en la conexión, muestra mensaje de error
    alert (" Error de conexión con el servidor." + error);
    console.log("ERROR: error de conexion con el servidor");
  }

}) })