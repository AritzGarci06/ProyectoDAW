// Redirigir a la misma página después de enviar el formulario
document.getElementById('review-form').addEventListener('submit', function(event) {
    // Evitar que se envíe el formulario normalmente
    event.preventDefault();
    // Enviar el formulario de forma asíncrona
    var form = event.target;
    var formData = new FormData(form);
    var xhr = new XMLHttpRequest();
    xhr.open('POST', form.getAttribute('action'), true);
    xhr.onload = function () {
        // Redirigir a la misma página
        window.location.reload();
        // window.location.href = window.location.href;
    };
    xhr.send(formData);
});