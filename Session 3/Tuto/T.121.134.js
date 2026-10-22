// 2-1
let mots = ["chat", "ordinateur", "table", "programmation", "js"];
let motsLongs = 0;
for ( let i = 0 ; i< mots.length ; i++){
    console.log(mots[i],"=>",mots[i].length);
    if(mots[i].length > 5){
    motsLongs++
    }
}
console.log("Nombres de mots long est :"+ motsLongs);

// 2-2
let nombres = [4, 7, 2, 9, 5, 8];
let sommePairs = 0;

for (let i = 0; i < nombres.length; i++) {
  if (nombres[i] % 2 === 0) {
    sommePairs += nombres[i];
  }
}

console.log("Somme des nombres pairs :", sommePairs);

// 2-3

let panier = [15, 42, 5, 89, 12, 50, 8];

let sommeTotale = 0;
let nbChers = 0;
let sommeChers = 0;

for (let i = 0; i < panier.length; i++) {
  sommeTotale += panier[i];

  if (panier[i] >= 20) {
    nbChers++;
    sommeChers += panier[i];
  }
}

console.log("Somme totale :", sommeTotale);
console.log("Nombre d'articles chers :", nbChers);
console.log("Somme des articles chers :", sommeChers);