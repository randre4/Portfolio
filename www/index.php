<?php include 'C:\UwAmp\www\sendmail.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body> <!--alert messages start-->
        <?php echo $alert; ?>
        <!--alert messages end-->
    <header class="container header active" id="home">
        <div class="header-content">
            <div class="left-header">
                <div class="h-shape"></div>
                <div class="image">
                    <img src="img/Raph_costard.jpg" alt="">
                </div>
            </div>
            <div class="right-header">
                <h1 class="name">
                    Bonjour, je suis <span>Raphaël André</span>
                    Étudiant en 3ème année au Gaming Campus
                </h1>
                <p>
                    Je suis étudiant en Gaming Business School à Lyon. 
                    J'ai pour objectif de travailler dans le monde du jeu-vidéo et de la blockchain. 
                </p>
                <div class="btn-con">
                <a download="CV André Raphaël" href="img/CV André Raphaël 2022.pdf" class="main-btn" type="application/octet-stream">
                        <span class="btn-text">Télécharger mon CV</span>
                        <span class="btn-icon"><i class="fas fa-download"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="container about" id="about">
            <div class="main-title">
                <h2>À propos <span> de moi</span><span class="bg-text">mes statistiques</span></h2>
            </div>
            <div class="about-container">
                <div class="left-about">
                    <h4>quelques informations</h4>
                    <p>
                        Au sein de ma formation j'ai pu effectuer de nombreux projets en équipe, ce qui m'a permit d'amélioré mes compétences de travail en groupe. 
                        J'ai également eus la chance d'avoir des expériences profesionnels qui renforcent mes connaissances du marketing dans le monde du jeu-vidéo.<br /> <br /> 
                        Mon envie d'apprendre et de découvrir de nouvelles choses booste ma curiosité et me permets de m'intéresser à de nouvelles technologies, domaines...
                    </p>
                    <div class="btn-con">
                    <a download="CV André Raphaël" href="img/CV André Raphaël 2022.pdf" class="main-btn" type="application/octet-stream">
                        <span class="btn-text">Télécharger mon CV</span>
                        <span class="btn-icon"><i class="fas fa-download"></i></span>
                        </a>
                    </div>
                </div>
                <div class="right-about">
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">40+</p>
                            <p class="small-text">Projets <br /> Accomplis</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">3+</p>
                            <p class="small-text">Années <br /> d'expérience</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">6+</p>
                            <p class="small-text">Mois d'expérience <br /> profesionnels Marketing</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">15+</p>
                            <p class="small-text">Années de jeu-vidéo <br /> et connaissances du marché</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-stats">
                <h4 class="stat-title">Mes compétences</h4>
                <div class="progress-bars">
                    <div class="progress-bar">
                        <p class="prog-title">Gestion de projet</p>
                        <div class="progress-con">
                            <p class="prog-text">100%</p>
                            <div class="progress">
                                <span class="html"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Stratégie de communication</p>
                        <div class="progress-con">
                            <p class="prog-text">95%</p>
                            <div class="progress">
                                <span class="css"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">HTML & CSS</p>
                        <div class="progress-con">
                            <p class="prog-text">75%</p>
                            <div class="progress">
                                <span class="js"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Suite Adobe</p>
                        <div class="progress-con">
                            <p class="prog-text">80%</p>
                            <div class="progress">
                                <span class="react"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Blockchain</p>
                        <div class="progress-con">
                            <p class="prog-text">90%</p>
                            <div class="progress">
                                <span class="node"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Stratégie Marketing</p>
                        <div class="progress-con">
                            <p class="prog-text">78%</p>
                            <div class="progress">
                                <span class="python"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="stat-title">Mon Parrcours</h4>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2020</p>
                    <h5>Baccalauréat STMG<span> - Spécialité Marketing</span></h5>
                    <p>
                        J'ai pu effectuer mon Baccalauréat au Lycée Climatique D'altitude de Briançon. J'ai choisis de me spécialisé en Marketing.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2020 - 2025</p>
                    <h5>Gaming Campus<span>- Gaming Business School </span></h5>
                    <p>
                        J'effectue actuellement mes études au sein du Gaming Campus, en spécialité Businnes. Dans le but d'opérer dans le Marketing dans le monde du jeu-vidéo 
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">Avril - Septembre 2022</p>
                    <h5>Marketing Project Manager<span> - SKULT</span></h5>
                    <p>
                        J'ai pu effectuer mon stage de 2ème année au sein de SKULT, pour ce stage j'ai eus la chance de pouvoir m'occuper de toute la partie Marketing de la Startup dans sa globalité. 
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">Juillet - Août 2021</p>
                    <h5>Agent d'accueil<span> - Resalp</span></h5>
                    <p>
                        Durant l'été 2021 j'ai pu travailler en tant qu'agent d'accueil et vente de tickets de bus.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">Octobre 2017 </p>
                    <h5>Stage Webmaster <span> - Office du tourisme de Montgenèvre</span></h5>
                    <p>
                        Comme premier stage en entreprise j'ai choisi de le réaliser avec un profesionnel afin d'élargir ma vision des métiers du web.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">Juin - Août 2020</p>
                    <h5>Employé polyvalent<span> - Blanchisserie des Alpes</span></h5>
                    <p>
                        A la fin de mon année scolaire j'ai pu travailler en tant qu'employé polyvalent dans une blanchisserie.
                    </p>
                </div>
            </div>
        </section>
        <section class="container" id="portfolio">
            <div class="main-title">
                <h2>Mes <span>Réalisations</span><span class="bg-text">réalisations</span></h2>
            </div>
            <p class="port-text">
                Voici différents projets que j'ai pu effectuer 
            </p>
            <div class="portfolios">
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/SKULT.png" alt="SKULT">
                    </div>
                    <div class="hover-items">
                        <h3>Mon expérience chez SKULT</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/Fortnite.png" alt="Fortnite">
                    </div>
                    <div class="hover-items">
                        <h3>Mon expérience semi-professionnelle sur Fortnite</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/Sonix.PNG" alt="Son1x">
                    </div>
                    <div class="hover-items">
                        <h3>Étude de marché SON1X</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/Laylow.png" alt="Laylow">
                    </div>
                    <div class="hover-items">
                        <h3>Motion Design Laylow</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/Nicolas.PNG" alt="Nicolas">
                    </div>
                    <div class="hover-items">
                        <h3>Amélioration UX/UI Nicolas</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/Jeu.PNG" alt="Jeu indé">
                    </div>
                    <div class="hover-items">
                        <h3>Création d'un jeu-vidéo </h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container" id="blogs">
            <div class="blogs-content">
                <div class="main-title">
                    <h2>Mes <span>passions</span><span class="bg-text">Mes passions</span></h2>
                </div>
                <div class="blogs">
                    <div class="blog">
                        <img src="img/valorant.png" alt="Valorant">
                        <div class="blog-text">
                            <h4>
                                Valorant/compétitif
                            </h4>
                            <p>
                                Après avoir eus une carrière semi-profesionnelle sur Fortnite, il y a peu de temps j'ai décidé de me lancer sur Valorant. Avec pour objectif d'atteindre
                                l'un des plus haut rang sur le jeu.
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/ski.png" alt="SKI">
                        <div class="blog-text">
                            <h4>
                                Ski
                            </h4>
                            <p>
                              J'ai grandi à la montagne pendant toute mon enfance avant de venir à Lyon pour mes études, je suis donc passionner de cette discipline.
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/la feve.jpg" alt="La fève">
                        <div class="blog-text">
                            <h4>
                                Rap
                            </h4>
                            <p>
                                Je suis passionné de musique et plus principalement de rap, depuis une dizaine d'années je suit activement ce millieu et ce qui m'intéresse particulièrement, 
                                c'est la technique utilisé dans les phrases, les rimes...
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/bmw.png" alt="">
                        <div class="blog-text">
                            <h4>
                                Automobile
                            </h4>
                            <p>
                               L'automobile et le sport auto font également parti d'un de mes centres d'intérêts principaux.
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/sneakers.png" alt="">
                        <div class="blog-text">
                            <h4>
                                Sneakers
                            </h4>
                            <p>
                                Collectionner les "Sneakers" (des paires de baskets plutôt rares) est devenu une passion au fil du temps. J'ai toujours été intéréssé par 
                                la mode et les chaussures, c'était donc une évidence de collectionner les paires de chaussures.
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/one piece.png" alt="">
                        <div class="blog-text">
                            <h4>
                                Manga
                            </h4>
                            <p>
                                Depuis petit j'ai baigné dans la culture japonnaise et plus principalement dans l'univers des mangas. J'ai lu de nombreux mangas et 
                                je suis totalement fan de cet univers
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container contact" id="contact">
            <div class="contact-container">
                <div class="main-title">
                    <h2>Me <span>Contacter</span><span class="bg-text">Contacter</span></h2>
                </div>
                <div class="contact-content-con">
                    <div class="left-contact">
                        <h4>Contactez moi ici</h4>
                        <p>
                            Voici mes réseaux sociaux ainsi que mes informations de contact ci-dessous
                        </p>
                        <div class="contact-info">
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Domicile</span>
                                </div>
                                <p>
                                    : Lyon, France
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                    <span>Email</span>
                                </div>
                                <p>
                                    <span>: randre@gaming.bs</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                    <span>École</span>
                                </div>
                                <p>
                                    <span>: Gaming Business School, Lyon France</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                    <span>Numéro de téléphone</span>
                                </div>
                                <p>
                                    <span>: 0643730053</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-globe-africa"></i>
                                    <span>Langues</span>
                                </div>
                                <p>
                                    <span>: Français, Anglais, Espagnol</span>
                                </p>
                            </div>
                        </div>
                        <div class="contact-icons">
                            <div class="contact-icon">
                                <a href="https://www.instagram.com/raphael_andreee/" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="https://twitter.com/NeViuZ_" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/raphael-andre-aa26b022a/" target="_blank">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a href="https://github.com/randre4" target="_blank">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="right-contact">
                        <form method="POST" action="" class="contact-form">
                            <div class="input-control i-c-2">
                                <input type="text" name="name" required placeholder="Ton Nom">
                                <input type="email" name="email" required placeholder="Email">
                            </div>
                            <div class="input-control">
                                <input type="text" name="subject" required placeholder="Objet">
                            </div>
                            <div class="input-control">
                                <textarea name="message" id="" cols="15" rows="8" placeholder="Ton message..."></textarea>
                            </div>
                            <div class="submit-btn">
                                <input type="submit" name="submit" class="send-btn" value="Envoyer">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="controls">
        <div class="control active-btn" data-id="home" >
            <i class="fas fa-home"></i>
        </div>
        <div class="control" data-id="about">
            <i class="fas fa-user"></i>
        </div>
        <div class="control" data-id="portfolio">
            <i class="fas fa-briefcase"></i>
        </div>
        <div class="control" data-id="blogs">
            <i class="far fa-newspaper"></i>
        </div>
        <div class="control" data-id="contact">
            <i class="fas fa-envelope-open"></i>
        </div>
    </div>
    <div class="theme-btn">
        <i class="fas fa-adjust"></i>
    </div>
    <script src="app.js"></script>
</body>
</html>