document.getElementById('login-form').addEventListener('submit', function (event) {
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
            return response.json()
        }
    ).then(data => {
        if (data.status === 'error') {
            let div = document.getElementById('message-error')
            div.classList.remove('d-none')
        } else if (data.status === 'success') {
            window.location.href = data.redirect
        }
    })
})