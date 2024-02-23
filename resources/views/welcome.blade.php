<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>BTS SIO Website</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../public/assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../public/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Acceuil</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="..\public\home">Home</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase text-white font-weight-bold">Bienvenue chez les SIO du lycée Bouchardon, Chaumont(52)</h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5">Découvrez cette magnifique formation qu'est le BTS SIO</p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Plus d'information</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Le BTS SIO c'est</h2>
                        <hr class="divider light my-4" />
                        <p class="text-white-50 mb-4">Le BTS SIO forme des experts informatiques polyvalents, 
                            spécialisés soit dans l'infrastructure, les systèmes, et réseaux, soit dans le développement logiciel et les application métiers. 
                            Un cursus conçu pour répondre aux besoins variés de l'informatique</p>
                        <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Commençons !</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <h2 class="text-center mt-0">Options proposés</h2>
                <hr class="divider my-4" />
                <div class="row">
                <div class="col-lg-3 col-md-6 text-center"></div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
                            <h3 class="h4 mb-2">SLAM</h3>
                            <p class="text-muted mb-0">Oriente vers le développement d'application métiers, la conception de solutions logicielles et la gestion de projets informatique.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-server text-primary mb-4"></i>
                            <h3 class="h4 mb-2">SISR</h3>
                            <p class="text-muted mb-0">Spécialisés en gestion, maintenace et sécurisation des systèmes informatique et réseaux au sein des organisation</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Horaires -->
        </section>
        <section class="page-section" id="horaires">
            <div class="container">
                <h2 class="text-center mt-0">Horaires</h2>
                <hr class="divider my-4" />
                <img src="../public/assets/img/horaires_btssio.png" width=100% height=100% alt="Image introuvable">
            </div>
        </section>
        <!-- Portfolio-->
        
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                @foreach($actualites as $actualite)
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="../public/assets/img/portfolio/fullsize/1.jpg">
                        <img class="img-fluid" src="../public/assets/img/portfolio/thumbnails/1.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name"><h3 class="h4 mb-2">{{ $actualite->titre }}</h3></div>
                            </div>
                        </a>
                    </div>
                @endforeach 
                </div>
            </div>
        </div>
        <!-- Call to action-->
        <section class="page-section bg-dark text-white">
            <div class="container text-center">
                <h2 class="mb-4">Alors convaincue ?</h2>
                <a class="btn btn-light btn-xl" href="https://startbootstrap.com/themes/creative/">s'inscrire maintenant</a>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0">Besoin d'information supplémentaire</h2>
                        <hr class="divider my-4" />
                        <p class="text-muted mb-5">Appeler nous où envoyer nous un email à nos coordonnées ci dessous et on vous répondra le plus vite possible</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                        <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                        <div>+1 (555) 123-4567</div>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                        <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                        <a class="d-block" href="mailto:ce.0520795g@ac-reims.fr">Par mail</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container"><div class="small text-center text-muted"></div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="../public/js/scripts.js"></script>
    </body>
</html>
