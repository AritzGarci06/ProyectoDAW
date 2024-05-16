document.getElementById('register-form').addEventListener('submit', function (event) {
    event.preventDefault()
    const formData = new FormData(this)
    const div = document.getElementById('message')
    if (formData.get('user_password') !== formData.get('re_user_password')) {
        div.innerText = 'Las contraseñas no son iguales'
        div.classList.remove('d-none')
        return
    }
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
            return response.json()
        }
    ).then(data => {
            div.innerText = data.message
            div.classList.remove('d-none')
        if (data.status === 'error') {
            div.classList.add('alert-danger')
        } else if (data.status === 'success') {
            div.classList.add('alert-success')
            setTimeout(function () {
                window.location.href = data.redirect
            }, 1000)
        }
    })
})