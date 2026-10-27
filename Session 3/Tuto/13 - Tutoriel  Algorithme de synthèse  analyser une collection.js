let ventes = [110, 75, 150, 180, 90, 130, 100, 160];
 

let nbVentes = 0;              
let chiffreAffaires = 0;     
let maximum = ventes[0];       
let minimum = ventes[0];       
let nbExceptionnelles = 0;     
let sommeExceptionnelles = 0;     
 

for (let i = 0; i < ventes.length; i++) {
 

  nbVentes++;
 
  
  chiffreAffaires += ventes[i];

  if (ventes[i] > maximum) {
    maximum = ventes[i];
  }
 
 
  if (ventes[i] < minimum) {
    minimum = ventes[i];
  }
 
  if (ventes[i] >= 130) {
    nbExceptionnelles++;
    sommeExceptionnelles += ventes[i];
  }
}
 

console.log("Nombre total de ventes :", nbVentes);
console.log("Chiffre d'affaires total :", chiffreAffaires);
console.log("Vente maximum :", maximum);
console.log("Vente minimum :", minimum);
console.log("Nombre de ventes exceptionnelles :", nbExceptionnelles);
console.log("CA des ventes exceptionnelles :", sommeExceptionnelles);