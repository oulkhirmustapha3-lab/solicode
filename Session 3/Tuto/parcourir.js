const prompt = require("prompt-sync")();
// 2-1

let jours = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi"];
for ( i = 0 ; i< jours.length ; i++){
    console.log("Jour de la semaine : ", jours[i]);
}
// 2-2

let couleurs = ["Rouge", "Vert", "Bleu", "Jaune", "Orange", "Violet"];
for ( i= couleurs.length-1 ; i>=0 ; i--){
    console.log(couleurs[i]);
}
let couleurs2 = ["Rouge", "Vert", "Bleu", "Jaune", "Orange", "Violet"];
for ( i= 0 ; i<couleurs2.length ; i= i+2){
    console.log(couleurs2[i]);
}
// 2-3
let sequence = ["Ignition", 1, 2, 3, 4, 5, "Préparation"];
for (i= sequence.length-1 ; i>=0 ; i--){
    console.log(sequence[i]);
}
    console.log("Décollage !");

// excercice


let notes = [];
let taille = Number(prompt("Entrer le nombre des notes :"));
let somme = 0;
let compteur = 0;

for (let j = 0 ; j < taille ; j++){
    notes[j]= Number(prompt("donner la note "+ (j+1) +":"));
    somme=somme+notes[j];
    if (notes[j] >= 14 ){
        compteur+=1;
    }
}
console.log("list des tables :"+ notes);
console.log("la moyenne est :"+ (somme/taille));
console.log("les notes superieur 14 est :" + compteur);
