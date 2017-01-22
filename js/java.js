
a();
function a(){
setTimeout("firstColor()", 2000)
}
function b(){
setTimeout("thirdColor()", 2000)
}
function c(){
setTimeout("fourth()", 4000)
}
function d(){
setTimeout("fivth()", 2000)
}
function e(){
setTimeout("sixth()", 2000)
}
function f(){
setTimeout("secondColor()", 2000)
}


function firstColor(){
document.getElementById('change').style.color="orange";
f();
}

function secondColor(){
document.getElementById('change').style.color="green";
b();
}
function thirdColor(){
document.getElementById('change').style.color="black";
c();
}
function fourth(){
document.getElementById('change').style.color="blue";
d();
}
function fivth(){
document.getElementById('change').style.color="red";
e();
}
function g(){
setTimeout("firstColor()", 3000)
}


function sixth(){
document.getElementById('change').style.color="#93dc63";
g();
}

