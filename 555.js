'use strict';

let second = 12564;
const pi = 3.14;
console.log(second);
let answer = + prompt("Ведите число: ", "");
console.log("a" + "Boob");
console.log(answer+25);
console.log(answer+43);
console.log("555");

let arr = [1, 12, 31, 4, 5, 2];

arr.sort(compareNum);
function compareNum (a, b){
    return a-b;
}

console.log(arr);