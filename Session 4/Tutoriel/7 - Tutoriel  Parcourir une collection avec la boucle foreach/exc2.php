<?php
$articles = [
    ["id" => 1 , "titre" => "premiére article" , "auteur" => "ali"],
    ["id" => 2 , "titre" => "deuxiéme article" , "auteur" => "ahmed"],
    ["id" => 3 , "titre" => "troisiémé article" , "auteur" => "yassin"],
    ["id" => 4 , "titre" => "quatriéme article" , "auteur" => "mohamed"],
    ["id" => 5 , "titre" => "sinqiéme article" , "auteur" => "youssef"],
    ["id" => 6 , "titre" => "siziéme article" , "auteur" => "ismail"],
];
?>
<ul>
    <?php foreach ($articles as $article){
    echo "<li>" . $article["id"] ." " . $article["titre"] ." " . $article["auteur"] . "</li>";}
    ?>
</ul>