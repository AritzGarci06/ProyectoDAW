// Redirigir a la misma página después de enviar el formulario
document.getElementById('review-form').addEventListener('submit', function(event) {
    // Evitar que se envíe el formulario normalmente
    event.preventDefault()
    // Enviar el formulario de forma asíncrona
    var form = event.target
    var formData = new FormData(form)
    var xhr = new XMLHttpRequest()
    xhr.open('POST', form.getAttribute('action'), true)
    xhr.onload = function () {
        window.location.reload()
        // window.location.href = window.location.href
    }
    xhr.send(formData)
})

let botones = document.querySelectorAll('.delete-btn')
botones.forEach(function(boton) {
    boton.addEventListener('click', function() {
        let info = this.getAttribute('data-info')
        miFuncion(info)
    })
})


function miFuncion(id) {
    let xhr = new XMLHttpRequest()
    xhr.open('POST','/proyectodaw/review/delete/'.concat(id),true)
    xhr.onload = function (){
        window.location.reload()
    }
    xhr.onerror = function (){
        alert('No se pudo borrar el registro')
    }
    xhr.send()
}