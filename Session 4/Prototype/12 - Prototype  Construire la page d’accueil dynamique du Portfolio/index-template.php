<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Protfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">
</head>
<body>
    <header>
        <div class="logo">
            <i class="fa-solid fa-code"></i>
            <h2>Mon <span>Protfolio</span></h2>
        </div>
        <nav class="navigation">
            <ul>
                <li><a href="#home">Accueil</a></li>
                <li><a href="#my-projects">Projets</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
    <section class="hero" id="home">
        <h1><span>Bonjour!</span> <br> je suis Développeur Web</h1>
        <p>Découvrez mes projets et mes réalisations.</p>
        <a href="#">voir mes projets</a> 
    </section>
    <section class="check" >
        <main>
            <div>
            <i class="blue fa-solid fa-folder-open"></i>
            </div>
            <div>
                <span class="blue">8</span>
                <p>Total des projets</p>
            </div>
        </main>
        <main>
            <div>
            <i class=" green fa-solid fa-circle-check"></i>
            </div>
            <div>
                <span class="green">5</span>
                <p>Projets terminés</p>
            </div>
        </main>
        <main>
            <div>
            <i class="red fa-solid fa-circle-xmark"></i>
            </div>
            <div>
                <span class="red">3</span>
                <p>projets non terminés</p>
            </div>
        </main>
    </section>
    <section id="my-project">
        <h2 class="projets">Mes Projets</h2>
        <main class="cards">
            <?php foreach ($projects as $project) : ?>

            <article class="card">
               <img class="image" src="<?= $project["image"] ?>" alt=""> 
               <p class="category"><?= $project["category"] ?></p>
               <h3 class="title"><?= $project["title"] ?></h3>
               <p class="description"><?= $project["description"] ?></p>
               <div class="technologie">
                    <?php foreach($project["technologies"] as $technologie) : ?>
                        <p> <?= $technologie ?> </p>
                    <?php endforeach ; ?>   

               </div>
               <p class="statu <?php 
               if ($project['status'] == "Terminé" ){
                echo "status-termine";
               }
               ?>">
               <?= $project["status"] ?></p>

            </article>
            <?php endforeach ; ?>
        </main>
    </section>
    <footer>
       <div class="logo">
            <i class="fa-solid fa-code"></i>
            <h2>Mon <span>Protfolio</span></h2>
        </div>
        <div>
            <p>© Tous droits réservés.</p>
        </div> 
        <div class= "social">
            <div><i class="fa-brands fa-facebook"></i></div>
            <div><i class="fa-brands fa-linkedin"></i></div>
            <div><i class="fa-brands fa-square-instagram"></i></div>
        </div>
    </footer>
</body>
</html>