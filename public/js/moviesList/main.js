const cssClass = 'list-active'
const displayNone = 'd-none'
const noMovies = document.querySelector('div.no-movies')

function displayList(id) {
    const cssClass = 'list-not-active'
    const item = document.getElementById(id).classList
    if (item.contains(cssClass)) {
        item.remove(cssClass)
    } else {
        item.add(cssClass)
    }
}

function activeList(id) {
    const item = document.getElementById(id).classList
    if (item.contains(cssClass)) {
        item.remove(cssClass)
    } else {
        item.add(cssClass)
    }

    updateCounter()
    filterMovies()
}

const movies = Array.from(document.querySelectorAll('.movie'))
let filterList = []

function filterMovies() {
    const year = Array.from(document.querySelectorAll('li.list-year.list-active')).map((item) => item.textContent.trim())
    const genres = Array.from(document.querySelectorAll('li.list-genre.list-active')).map((item) => item.textContent.trim())
    movies.map((div) => div.classList.remove(displayNone))

    if (year.length === 0 && genres.length === 0) {
        return
    }
    filterList = movies.filter(div => {
        let date = div.querySelector('p.release-date').textContent.trim()
        let genre = div.querySelector('p.genres').textContent.trim().split(', ')

        if (year.length > 0 && genres.length === 0) {
            return !year.includes(date)
        }

        if (genres.length > 0 && year.length === 0) {
            return !genres.every((value) => genre.includes(value))
        }

        return !(year.includes(date) && genres.every((value) => genre.includes(value)))
    })
    filterList.map((div) => div.classList.add(displayNone))

    if (movies.length === filterList.length) {
        noMovies.style.display = 'block'
    } else {
        noMovies.style.display = 'none'
    }
}


function updateCounter() {
    const arr = ['year', 'genre']
    let totalCounter = 0
    let filter = document.getElementsByClassName('fa-filter')[0]
    for (let s of arr) {
        let list = document.getElementsByClassName('list-'.concat(s))
        let count = 0;
        for (const item of list) {
            if (item.classList.contains(cssClass)) {
                count++
            }
        }
        totalCounter += count
        const item = document.getElementById('counter-'.concat(s))

        if (count > 0) {
            item.classList.remove(displayNone)
            item.innerText = count
        } else {
            item.classList.add(displayNone)
            item.innerText = ''
        }
    }

    if (totalCounter > 0) {
        filter.classList.remove(displayNone)
    } else {
        filter.classList.add(displayNone)
    }
}

function cleanList() {
    let list = document.querySelectorAll('.list-active')
    list.forEach(item => item.classList.remove(cssClass))
    updateCounter()
    filterMovies()
    noMovies.style.display = 'none'
}

let input = document.getElementById('input-search')
input.addEventListener('input', function () {
    let filter = input.value.toLowerCase()

    const moviesFiltered = movies.filter(div => {
        let title = div.querySelector('h4.title-movie').textContent.trim().toLowerCase()
        return !title.includes(filter)
    })

    movies.map(function (item) {
        if (!filterList.includes(item) && !moviesFiltered.includes(item)) {
            item.classList.remove(displayNone)
        }
    })


    moviesFiltered.map((div) => div.classList.add(displayNone))
    if (movies.length === filterList.length) {
        noMovies.style.display = 'block'
    } else {
        noMovies.style.display = 'none'
    }
})

const colorRedBtn = 'btn-danger'
const colorGrayBtn = 'btn-outline-secondary'

async function likeButton(btn, id) {
    if (btn.classList.contains(colorRedBtn)) {
        btn.classList.remove(colorRedBtn)
        btn.classList.add(colorGrayBtn)
    } else {
        btn.classList.remove(colorGrayBtn)
        btn.classList.add(colorRedBtn)
    }

    await fetch('/proyectodaw/movie/savefavoritemovie/'.concat(id))
        .then(response => {
            if (!response.ok) {
                throw new Error('Hubo un problema al guardar el registro');
            }
            return response.json()
        }).then(json => {
            console.log(json)
        })
}