document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("registroForm");

  form.addEventListener("submit", function (event) {
    event.preventDefault();

    const identificacion = document.getElementById("identificacion").value.trim();
    const nombres = document.getElementById("nombres").value.trim();
    const fechaNacimiento = document.getElementById("fechaNacimiento").value.trim();
    const genero = document.getElementById("genero").value;
    const telefono = document.getElementById("telefono").value.trim();
    const correo = document.getElementById("correo").value.trim();
    const redes = document.getElementById("redesSociales").value.trim();

    if (!identificacion || !nombres || !fechaNacimiento || !genero || !telefono || !correo || !redes) {
      mostrarMensaje("Código HTTP 400 Error: Por favor completa todos los campos.", false);
      return;
    }

    mostrarMensaje("Datos enviados correctamente al servidor. Código HTTP 200", true);
    console.log({
      identificacion,
      nombres,
      fechaNacimiento,
      genero,
      telefono,
      correo,
      redesSociales
    });
  });

  function mostrarMensaje(mensaje, exito) {
    const resultado = document.getElementById("mensaje");
    resultado.textContent = mensaje;
    resultado.style.color = exito ? "green" : "red";
  }
});