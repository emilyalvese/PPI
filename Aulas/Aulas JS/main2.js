console.log(window.location);

let input1 = document.getElementById("input1")
let input2 = document.getElementById("input2")
let result = document.getElementById("result")

function fazerPares (){
    let a = Number(input1.value)
    let b = Number(input2.value)
    let fparesIntervalo = [];

    for (let i = a; i < b; i++) {
        if(i%2==0){
            fparesIntervalo.add(i)
        }
    }
    console.log(fparesIntervalo)
}