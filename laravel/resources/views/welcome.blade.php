<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LabSIV Demo</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <style type="text/css">
        @media only screen and (min-width: 760px){
            .nav-item:hover .dropdown-menu{
                display: block;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="top-nav d-none d-md-block bg-dark text-end">
            <a href="#" class="login-link text-white text-decoration-none">Login</a>
            <a href="#" class="login-link text-white text-decoration-none p-4">Register</a>
        </div>
        <div class="navbar navbar-expand-md bg-light navbar-light text-dark">
            <div class="container">
                <a href="" class="navbar-brand fw-bold fs-1">LabSIV</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu">
                    <i class="bi bi-list"></i>
                    <!-- <span class="navbar-toggler-icon"></span> -->
                </button>
                <div class="collapse navbar-collapse" id="mainmenu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a href="#" class="nav-link ">Home</a></li>
                        <li class="nav-item">
                            <button class="btn btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#menu1" aria-expanded="false" aria-controls="menu1">Recherche</button>
                            <ul class="dropdown-menu" id="menu1">
                                <li><a href="#" class="dropdown-item">Intelligence Artificielle</a></li>
                                <li><a href="#" class="dropdown-item">Sécurité Informatique</a></li>
                                <li><a href="#" class="dropdown-item">Traitement d'images</a></li>
                                <li><a href="#" class="dropdown-item">Systemes Embarqués</a></li>
                                <li><a href="#" class="dropdown-item">Analyse De Données</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#menu2" aria-expanded="false" aria-controls="menu2">Equipes</button>
                            <ul class="dropdown-menu" id="menu2">
                                <li><a href="/" class="dropdown-item">Intelligence Artificielle</a></li>
                                <li><a href="/" class="dropdown-item">Sécurité Informatique</a></li>
                                <li><a href="/" class="dropdown-item">Traitement d'images</a></li>
                                <li><a href="/" class="dropdown-item">Systemes Embarqués</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#menu3" aria-expanded="false" aria-controls="menu3">Collaborations</button>
                            <ul class="dropdown-menu" id="menu3">
                                <li><a href="/" class="dropdown-item">Avec Des Universités</a></li>
                                <li><a href="/" class="dropdown-item">Avec Des Centres De Recherche</a></li>
                                <li><a href="/" class="dropdown-item">Avec Des Entreprises</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#menu5" aria-expanded="false" aria-controls="menu5">Projets</button>
                            <ul class="dropdown-menu" id="menu5">
                                <li><a href="/" class="dropdown-item">Apprentissage En Profondeur</a></li>
                                <li><a href="/" class="dropdown-item">Analyse d'images Medicales</a></li>
                                <li><a href="/" class="dropdown-item">Collaboration Avec L'industrie</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#menu4" aria-expanded="false" aria-controls="menu4">Publications</button>
                            <ul class="dropdown-menu" id="menu4">
                                <li><a href="/" class="dropdown-item">Articles Scientifiques</a></li>
                                <li><a href="/" class="dropdown-item">Actes De Conferences</a></li>
                                <li><a href="/" class="dropdown-item">Brevets Et Logiciels</a></li>
                                <li><a href="/" class="dropdown-item">Prototypes De Systemes</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link ">About Us</a></li>
                    </ul>
                </div> 
            </div>
        </div>
    </header>

    <!-- WHAT IS LabSIV -->
    
    <section id="lab" class="bg-dark text-light text-center text-sm-start py-5">
        <div class="container">
            <div class="d-sm-flex align-items-center">
                <div class="py-3">
                    <h1>What is <span class="text-info">LabSIV</span> ?</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum est nesciunt 
                        nisi deserunt maiores qui ex, at libero et eos sed dolor voluptatem porro 
                        dolorum eligendi officia nihil quasi alias culpa quo soluta possimus ipsa error 
                        praesentium. Facere, eveniet repellendus?
                    </p>
                </div>
                <img src="/img/lab.svg" class="img-fluid w-50" alt="" >
            </div>
        </div>
    </section>
    <section id="les articles" class="">
        <div class="container-lg bg-white "  style="height: 700px;">
        </div>
    </section>
    <footer id="about us" class="bg-dark text-light text-center text-sm-start py-5">
        <div class="footer"  style="align-items: center;">
        
        <div class="container">
        <ul class="list-unstyled ms-auto">
            <li class=" mx-4 mb-4"><a class="bi bi-facebook"></a> Facebook</li>
            <li class=" mx-4 mb-4"><a class="bi bi-twitter"></a> Twitter</li>
            <li class=" mx-4 mb-4"><a class="bi bi-instagram"></a> Instagram</li>
        </ul>
        <ul class="list-unstyled center mx-auto">
            <li class=" mx-4 mb-4"><a class="bi bi-linkedin"></a> Linkedn</li>
            <li class=" mx-4 mb-4"><a class="bi bi-envelope"></a> Email</li>
            <li class=" mx-4 mb-4"><a class="bi bi-geo-alt"></a> Map</li>
    
        </ul>
        </div>
        </div>
    </footer> 
    <script src="js/bootstrap.js"></script>
</body>
</html>