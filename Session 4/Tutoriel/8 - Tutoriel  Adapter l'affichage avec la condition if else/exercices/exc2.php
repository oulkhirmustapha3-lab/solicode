<?php
$montant = 1800;
if ( $montant < 500 ){
    $remise = 0;
}
elseif ( $montant < 1000){
    $remise = 0.05;
}
elseif ( $montant <= 1999){
    $remise = 0.10;
}
else{
    $remise = 0.15;
}


$montantRemise = $montant * $remise;
$montantTotal = $montant - $montantRemise;


echo "le montant de remise est: ". $montantRemise. "\n";
echo "le montant total est: ". $montantTotal;