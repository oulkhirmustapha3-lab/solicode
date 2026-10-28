const prompt = require("prompt-sync")();
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