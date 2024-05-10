const cssClass = 'list-active'
const displayNone = 'd-none'

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
    let s = ''
    if (id.includes('genre')) {
        s = 'genre'
    } else if (id.includes('year')) {
        s = 'year'
    }
    updateCounter(s)
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
    const noMovies = document.querySelector('div.no-movies')
    if (movies.length === filterList.length) {
        noMovies.style.display = 'block'
    } else {
        noMovies.style.display = 'none'
    }
}

function updateCounter(s) {

    let list = document.getElementsByClassName('list-'.concat(s))
    let count = 0;
    for (const item of list) {
        if (item.classList.contains(cssClass)) {
            count++
        }
    }
    const item = document.getElementById('counter-'.concat(s))

    if (count > 0) {
        item.classList.remove(displayNone)
        item.innerText = count
        let filter = document.getElementsByClassName('fa-filter')[0]
        filter.classList.remove(displayNone)
    } else {
        item.classList.add(displayNone)
        item.innerText = ''
        let filter = document.getElementsByClassName('fa-filter')[0]
        filter.classList.add(displayNone)
    }
}

function cleanList() {
    let list = document.querySelectorAll('.list-active')
    list.forEach(item => item.classList.remove(cssClass))
    updateCounter('year')
    updateCounter('genre')
    filterMovies()
}

let input = document.getElementById('input-search')
input.addEventListener('input', function () {
    let filter = input.value.toLowerCase()

    const moviesFiltered = movies.filter(div => {
        let title = div.querySelector('h4.title-movie').textContent.trim().toLowerCase()
        return !title.includes(filter)
    })

    movies.map(function (item){
        if(!filterList.includes(item) && !moviesFiltered.includes(item)){
            item.classList.remove(displayNone)
        }
    })


    moviesFiltered.map((div) => div.classList.add(displayNone))
})