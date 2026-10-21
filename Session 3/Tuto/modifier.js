// 2-1

let nombres = [10 , 20 , 30 , 40];
let somme = nombres [0] + nombres [nombres.length-1];
console.log(somme);

// 2-2

let temperature = [18, 20, 23, 19];
console.log("Avant ",temperature);
temperature[1] = 21;
temperature [temperature.length-1] = 25;
console.log("Aprés ",temperature);

// 2-3

let notes = [12, 8, 15, 9, 17];
notes[1] = 10;
notes[notes.length-2] = 11;
console.log(notes[0]);
console.log(notes[notes.length-1]);
console.log (notes);
console.log(notes.length);
