function validarFormulario()
{
    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById("apellido").value;
    var email = document.getElementById("email").value;
    var asunto = document.getElementById("asunto").value;
    var descripcion = document.getElementById("descripcion").value;

    if (nombre === "" || apellido === "" || email === "" || asunto === "" || descripcion === "") {
        alert("Todos los campos son obligatorios. Por favor, complete todos los campos.");
        return false;
    }
    return true;
}