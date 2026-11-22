<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offres d'emplois</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>
<body>
    <header  class="header-navigation">
        <div class="header">
            <a href="#" class="logo"><span>J</span>obBoard <span>J</span>unior</a>

                    <ul class="menu-nav">
                        <li><a href="index.html" class="menu">Accueil</a></li>
                        <li><a href="#" class="menu menu-offre">Offres</a></li>
                        <li><a href="#" class="menu">Contact</a></li>
                    </ul>

                    <ul class="menu-nav">    
                        <li><a href="#" class="btn">Connexion</a></li>
                    </ul>
            
        </div>
    </header>
    <section class="hero-offre">
        <h1>Toutes les offres</h1>
        <p>Trouver l'offre qui correspond à vos compétences</p>
        <form class="search search-offre">
            <input type="text" placeholder="Rechercher un offre..">
            <button type="submit">chercher</button>
        </form>
    </section>
    <section class="main-offres">
        <aside class="filters">
            <h2><i class="fa-solid fa-sliders"></i>Filters</h2>
            <p>Type d'offre</p>
            <div class="check">
                <label>
                    <input type="checkbox" value="stage">
                    STAGE
                </label>
                <label>
                    <input type="checkbox" value="CDD">
                    CDD
                </label>
                <label>
                    <input type="checkbox" value="CDI">
                    CDI
                </label>
            </div>
            <div class="check">
                <p>ville</p>
                <select name="ville" >
                    <option value="">Tous les villes</option>
                    <option value="Tanger">Tanger</option>
                    <option value="Casa">Casablanca</option>
                    <option value="Rabat">Rabat</option>
                    <option value="Agadir">Agadir</option>
                    <option value="Titouan">Titouan</option>
                    <option value="Hosseima">Hosseima</option>
                </select>
            </div>
            
            <button class="btn filter-btn"><a href="#">Réinitialiser</a></button>
            
        </aside>
        <main class="cards-offre">
            <?php foreach ( $offres as $offre): ?>
            <article>
                <img src=" <?= $offre["image"] ?>" alt="">
                <div>
                    <div class="title-offre">
                        <h3><?= $offre["titre"]?></h3>
                        <p class="type-offre
                        <?php if ($offre["type"] == "Stage"){
                            echo "stage";
                        }elseif($offre["type"] == "CDD"){
                                echo "CDD";
                        }else{
                                    echo "CDI";
                                }
                            
                        ?>
                        "><?=$offre["type"] ?></p>
                    </div>
                    <div class="local">
                        <p><i class="fa-solid fa-building"></i><?= $offre["entreprise"] ?></p>
                        <p><i class="fa-solid fa-location-dot"></i><?=$offre["ville"] ?></p>
                        <p><i class="fa-solid fa-calendar-days"></i> <?= $offre["date"]?></p>
                    </div>
                    <div class="desc-offre">
                        <p>Rejoignez notre equipe pour devlopper des applications web innovantes. </p>
                        <a href="#">Voir l'offre</a>
                    </div>
                </div>
                
            </article>
            <?php endforeach; ?>
        </main>
        
    </section>
    <footer>
        <div>
             <a href="#" class="logo"><span>J</span>obBoard <span>J</span>unior</a>
        </div>
        <div>
              <p>&copy; <span id="annee"></span>Tous droits réservés.</p>
        </div>
        <div class = "social">
            <div><i class="fa-brands fa-facebook"></i></div>
            <div><i class="fa-brands fa-linkedin"></i></div>
            <div><i class="fa-brands fa-square-instagram"></i></div>
        </div>
    </footer>
</body>
</html>