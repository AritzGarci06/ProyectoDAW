function redirect(s) {
    location.href = '/proyectodaw/movie/findone/'.concat(s)
}

let form = document.getElementById('edit-form')
let message = document.getElementById('message')
if (form !== null) {
    form.addEventListener('submit', function (event) {
        event.preventDefault()
        const formData = new FormData(this)
        const url = this.getAttribute('action')
        fetch(
            url,
            {
                method: 'POST',
                body: formData
            }
        ).then(response => {
                if (!response.ok) {
                    throw new Error('Hubo un problema al enviar el formulario.');
                }
                console.log(response)
                return response.json()
            }
        ).then(data => {
            message.innerText = data.message

            if (data.status === 'error') {
                message.classList.add('alert-danger')
            } else {
                message.classList.add('alert-success')
                setTimeout(function () {
                    window.location.href = data.redirect
                }, 1000)
            }
            message.classList.remove('d-none')
        })
    })
}
