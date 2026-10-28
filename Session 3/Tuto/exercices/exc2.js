let produits = ["Clavier", "Souris", "Écran", "Casque"];
let prix = [150, 80, 1200, 250];
let stocks = [10, 0, 5, 3];
let nomNul;
let VT=0;
let Maximum=prix[0];
let NM;
let list=[];
let total = 0;

for(let i =0;i<produits.length;i++){
    console.log(produits[i],"=>",prix[i],"=>",stocks[i]);
    if(stocks[i]===0){
        nomNul=produits[i];

    }
    VT=prix[i]*stocks[i];
    console.log("la valeur totale du stock de ",produits[i],"est",VT);
    if(prix[i]>Maximum){
        Maximum=prix[i];
        NM=produits[i];
    }
    if(stocks[i]<5){
        list[i]=produits[i];
    }
    total+=VT;


}
console.log("les noms des produits dont le stock est nul.",nomNul);
console.log("le nom du produit le plus cher:",NM,"=>",Maximum);
console.log("les produits dont le stock est inférieur à 5.",list);
console.log("total est :",total);