// exc 1
function moyenne(a,b,c){
    let m = (a+b+c)/3;
    console.log("le moyenne est :" + m);
}
moyenne(5,10,20);
moyenne(10,20,30);

// exc 2

function max(x,y){
    let maximum = x;
    if (y > x){
        maximum = y;
        
    }
    console.log ("le maximum est :"+maximum)
}
max(5,8);