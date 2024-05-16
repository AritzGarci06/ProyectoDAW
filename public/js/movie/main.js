document.getElementById('review-form').addEventListener('submit', function (event) {
    event.preventDefault()
    var form = event.target
    var formData = new FormData(form)
    var xhr = new XMLHttpRequest()
    xhr.open('POST', form.getAttribute('action'), true)
    xhr.onload = function () {
        window.location.reload()
    }
    xhr.send(formData)
})

let botonesDelete = document.querySelectorAll('.delete-btn')
botonesDelete.forEach(function (boton) {
    boton.addEventListener('click', function () {
        let id = this.getAttribute('data-info')
        let movieID = this.getAttribute('data-movie')
        miFuncion(id, movieID)
    })
})


function miFuncion(id, movieID) {
    let xhr = new XMLHttpRequest()
    let endpoint = `/proyectodaw/review/delete/${id}/${movieID}`
    xhr.open('POST', endpoint, true)
    xhr.onload = function () {
        window.location.reload()
    }
    xhr.onerror = function () {
        alert('No se pudo borrar el registro')
    }
    xhr.send()
}

let modalForm = document.getElementById('review-modal')
let background = document.getElementById('blur-background')
let modalSubject = document.getElementById('input-subject')
let modalRating = document.getElementById('input-rating')
let modalReview = document.getElementById('input-review')
let modalId = document.getElementById('input-id')

//MODAL FORM SCRIPT
let btnEdit = document.querySelectorAll('.edit-btn')
btnEdit.forEach(function (btn) {
    btn.addEventListener('click', function () {
        let id = this.getAttribute('data-info')
        modalId.value = id
        modalSubject.value = document.getElementById('title-'.concat(id)).innerText
        modalRating.value = document.getElementById('rating-'.concat(id)).innerText
        modalReview.value = document.getElementById('review-'.concat(id)).innerText

        modalForm.style.display = 'block'
        background.style.display = 'block'
    })
})

let cancelBtn = document.getElementById('cancel-form')
cancelBtn.addEventListener('click', function () {
    modalSubject.value = ''
    modalRating.value = ''
    modalReview.value = ''
    modalForm.style.display = 'none'
    background.style.display = 'none'
})

document.getElementById('review-form-modal').addEventListener('submit', function (event) {
    event.preventDefault()
    var form = event.target
    var formData = new FormData(form)
    var xhr = new XMLHttpRequest()
    xhr.open('POST', form.getAttribute('action'), true)
    xhr.onload = function () {
        window.location.reload()
    }
    xhr.send(formData)
})

