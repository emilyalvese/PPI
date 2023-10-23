console.log(window.location);

let n1 = Number(document.getElementById("n1"))
let contagem = document.getElementById("contagem")

function contar(){
    for (let i = 1; i <= n1; i++) {
        contagem.innerHTML = i++
    }
}