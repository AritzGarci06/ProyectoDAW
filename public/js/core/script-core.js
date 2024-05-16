const logoutLink = document.getElementById("logout-link")

if (logoutLink !== null) {
    logoutLink.addEventListener('click', async function (event) {
        event.preventDefault()
        const answer = await fetch(logoutLink.href)
        if (!answer.ok) {
            throw new Error('Hubo un problema al realizar la solicitud.');
        }
        location.reload();
    })
}
const loginLink = document.getElementById("login-link")

if (loginLink !== null) {
    loginLink.addEventListener('click', async function (event) {
        event.preventDefault()
        const answer = await fetch(loginLink.href.concat('savepreviousurl/'))
        if(!answer.ok){
            throw new Error('Hubo un problema al realizar la solicitud.');
        }
        location.href = loginLink.href
    })
}
