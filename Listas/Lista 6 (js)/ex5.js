console.log(window.location);

let inp1 = document.getElementById("inp1")
let inp2 = document.getElementById("inp2")
let result = document.getElementById("result");

function somar(){
    let soma = Number(inp1.value) + Number(inp2.value);
    resultado.innerHTML = soma;
}