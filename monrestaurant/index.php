<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Web Restaurant</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a980e88be8.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="header-home">
        <!--menu-->
        <header>
            <div class="logo_link">
                <a href="#" class="logo">Restaurant la VDN</a>
                <div class="menu_link">
                    <a href="#">Acceuil</a>
                    <a href="#service">Service</a>
                </div>
            </div>

            <!--responsive menu-->
                  <div class="sidebar" id="mySidebar">
                    <div class="closebtn" onclick="closeNav()">
                        <img src="images/close.png">
                    </div>
                        <a href="#">Acceuil</a>
                        <a href="#">Service</a>
                    </div>
                    <div id="main">
                        <button class="openbtn" onclick="openNav()">
                            <img src="images/menu.png" alt="">
                            Menu
                        </button>
                    </div>



            <!--responsive menu-->
            <class class="link_buttons">
                <a href="panier/index.php" class="orange_link">Commender votre plat</a>
            </class>
        </header>
        <!--menu-->

        <!--home-->
        <section class="home">
            <div class="left">
                <h1>Meilleur restaurant pour la dégustation</h1>
                <p>Existant depuis 2010, lnotre restaurant veut vous offrir une meilleure expérience au sein de notre salle en pouvant visualiser
                    nos plats et d'effectuer une commande en ligne ou de faire estimation du budget dont vous aurez besoin avant de venir dans notre
                    restaurant. 
                    
                </p>
                <a href="#" class="orange_link">Bienvenue</a>
            </div>
            <div class="right">
                <img src="ima/about.jpg">
            </div>
            <div class="statistiques">
                <span>
                    <h2>70</h2>
                    <p>Plat disponible</p>
                </span>
                <span>
                    <h2>25</h2>
                    <p>Effectif</p>
                </span>
                <span>
                    <h2>7</h2>
                    <p>Plats en cours de création</p>
                </span>
            </div>
        </section>


        <!--end home-->
    </section>

        <section id="service">
        <!--About-->
            <section class="about">
                <div class="image">
                    <img src="ima/deco2.jpg" >
                </div>
                <div class="content">
                    <h1>Design Interieur</h1>
                    <h2>Visualiser notre nouveau sallon </h2>
                    <p>On a modifié notre salle pour la rendre plus attractive.Cela a été fait en prenant en compte les besoins des clients 
                        dans la mesure où il y aura plus d'espace pour permettre aux clients d'etre plus à l'aise .</p>
                </div>
            </section>
    
        
        <!--about-->

        <!--choice-->
        <section class="why_us">
            <h1>Pourquoi venir dans notre restaurant</h1>
            <div class="list_box">
                <div class="box" style="">
                    <img src="ima/customer-service.png">
                    <h2>support</h2>
                    <p>Une clientèle qualifiée. En effet nous choisissons nos employé</p>
                </div>
                <div class="box">
                    <img src="ima/experience.png">
                    <h2>experience</h2>
                    <p>Nous sommes un restaurant est considéré comme étant un des meilleurs en qualité à cause des nos chefs qui sont dans 
                        ce domaine depuis plusieurs années.
                    </p>
                </div>
                <div class="box">
                    <img src="ima/creative-brain.png">
                    <h2>creative</h2>
                    <p>Nous avons des employés issus des meilleurs écoles qui ont un certain esprit créatif nous permettant d'inouver nos plats dans leurs 
                        aspects esthétiques pour les rendre plus attractifs .</p>
                </div>
            </div>
        </section>
        </section>
        <!--choice-->
        <!--decoration-->
        <section class="decoration">
            <h1>quelques uns de nos plats</h1>
            <div class="deco-list">
                <div class="deco">
                    <img src="panier/images/img1.png" alt="">
                </div>
                <div class="deco">
                    <img src="panier/images/img2.png" alt="">
                </div>
                <div class="deco">
                    <img src="panier/images/img3.png" alt="">
                 </div>
                <div class="deco">
                    <img src="panier/images/img4.png" style="margin-top: 45px" alt="">
                </div>
                <div class="deco">
                    <img src="panier/images/plate1.png" alt="">
                </div>
                <div class="deco">
                    <img src="panier/images/plate2.png" alt="">
                </div>
            </div>
        </section>



        <!--footer-->
        <footer>
            <div class="footer-content">
                <h1>Restaurant la VDN</h1>
            </div>
            
        </footer>
        <script src="script.js"></script>
</body>
</html>