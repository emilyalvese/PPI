console.log(window.location);

let input1 = document.getElementById("inp1")
let toDoList = [];

function add(){
    let a = String(input1.value)
    toDoList.push(a)
    console.log(toDoList)
}

function remove(){
    let b = String(input1.value)
    for (let i = 0; i < toDoList.length; i++) {
        if(b == toDoList[i]) {
            toDoList.pop(toDoList[i])
        }
        console.log(toDoList)
    }
}