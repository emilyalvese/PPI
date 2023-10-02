console.log(window.location);

let contador = document.getElementById("contador");
let inp1 = document.getElementById("inp1")
let inp2 = document.getElementById("inp2")
let soma = document.getElementById("soma");
let r = document.getElementById("r");
let g = document.getElementById("g");
let b = document.getElementById("b");

let i = 0;

function nome(){
    let name = prompt("Digite seu nome: ");
    console.log(name);
    p1.innerHTML = name;
}

function contar(){
    contador.innerHTML = i++;
}

function somar(){
    soma.innerHTML = Number(inp1.value) + Number(inp2.value);
}

function colorir(){
    let cor = `rgb(${r.value}, ${g.value}, ${b.value})`;
    document.body.style.backgroundColor = cor;
}