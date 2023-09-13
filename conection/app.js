let botao = document.querySelector("#boxLogin button")
let input = document.querySelector("#boxLogin input")
botao.addEventListener("submit", (evt) => {
    /*evt.preventDefault()*/
    fetch("./php/login.php",{
        method: "POST",
        body: new URLSearchParams(`password=${input.value}`)
    })/*.then(date => date.json()).then(date => {
        alert(date.tipo)
    })*/
})

