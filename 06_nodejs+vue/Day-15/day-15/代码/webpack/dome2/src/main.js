var t1 = document.getElementById('t1');
var t2 = document.getElementById('t2');
var t3 = document.getElementById('t3');
var s1 = document.getElementById('s1');
var s2 = document.getElementById('s2');

s2.onclick = function(){
    var v1 = Number(t1.value);
    var v2 = Number(t2.value);
    var options = s1.value;
    var res = 0; 
    switch (options){
        case "+":
            res = v1+v2;
        break;
        case "-":
            res = v1-v2;
        break;
        case "x":
            res = v1*v2;
        break;
        case "÷":
            res = v1/v2;
        break;
    }

    t3.innerHTML = res;
}