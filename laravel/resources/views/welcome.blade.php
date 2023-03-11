<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LabSIV Demo</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/css2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <style type="text/css">
        @media only screen and (min-width: 760px){
            .nav-item:hover .dropdown-menu{
                display: block;
            }
        }
        * {
            margin: 0;
            padding: 0;
            font-family: candara;
        }
        .dropdown-menu{
            width: 20%;
            border-radius: 2%;
        }
        .modal-dialog {
            width: 380%;
            height: 480%;
            position: relative;
            margin: 6% auto;
            padding: 5px;
        }
        .btn-box {
            width: 220px;
            margin: 35px auto;
            position: relative;
            box-shadow: 0 0 10px 5px #43cff1;
            border-radius: 20px;
        }
        .tabbed{
            padding: 10px 30px;
            cursor: pointer;
            color: black;
            background: transparent;
            border: 0;
            outline: none;
            position: relative;
        }
        #butt {
            top: 0;
            left: 0;
            position: absolute;
            width: 110px;
            height: 100%;
            border-radius: 20px;
            background: linear-gradient(to right, #43cff1, #00a0d1);
            transition: .5s;
        }
        .input-group {
            top: 180px;
            position: absolute;
            width: 280px;
            transition: .5s;
        }

        .btns {
            width: 50%;
            padding: 10px 30px;
            cursor: pointer;
            display: block;
            margin: auto;
            background: linear-gradient(to right, #43cff1, #00a0d1);
            border: 0;
            outline: none;
            border-radius: 20px;
        }
        .check {
            margin: 30px 10px 30px 0;
        }
        .spaan{
            color: #777;
            font-size: 13px;
            bottom: 102px;
            position: absolute;
        }
        #login{left: 50px;}
        #apply{left: 450px;}

        .social{
            margin-left: 50px;
        }
        .arrow{
            padding-top: 22px;
        }
        .credits{
            margin-left: 550px;
        }
    </style>
</head>
<body>
    <header>
        <div class="top-nav d-none d-md-block bg-dark justify-content-center">
            <div class="text-end">
                <button class="btn btn-outline-none text-white text-decoration-none" type="button" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                <button class="btn btn-outline-none text-white text-decoration-none" type="button" data-bs-toggle="modal" data-bs-target="#loginModal">Apply</button>
            </div>
            <!-- tabbed modal -->
            <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <!-- Nav tabs -->
                            <div class="btn-box">
                                <div id="butt"></div>
                                <ul class="nav" id="loginTabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active tabbed" id="signInTab" data-bs-toggle="tab" data-bs-target="#signIn" role="tab" type="button" aria-controls="signIn" aria-selected="true" onclick="login()">Login</button>
                                    </li>
                                    <li class="nav-item mx-2" role="presentation">
                                        <button class="nav-link tabbed" id="signUpTab" data-bs-toggle="tab" data-bs-target="#signUp" role="tab" type="button" aria-controls="signUp" aria-selected="false" onclick="apply()">Apply</button>
                                    </li>
                                </ul>
                            </div>
                
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- login pane -->
                                <div class="tab-pane fade show active" id="signIn" role="tabpanel" aria-labelledby="signInTab">
                                    <form id="login">
                                        <div class="mb-3">
                                            <label for="signInEmail" class="form-label fw-semibold" required>Email address</label>
                                            <input type="email" class="form-control" id="signInEmail" placeholder="Enter email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="signInPassword" class="form-label fw-semibold" required>Password</label>
                                            <input type="password" class="form-control" id="signInPassword" placeholder="Enter password">
                                            <input type="checkbox" class="check"><span class="spaan">Remember me</span>
                                        </div>
                                        <button type="submit" class="btn btns">Login</button>
                                    </form>
                                </div>
                                <!-- apply pane -->
                                <div class="tab-pane fade" id="signUp" role="tabpanel" aria-labelledby="signUpTab">
                                    <form id="apply">
                                        <div class="mb-3">
                                            <label for="signUpName" class="form-label flex-semibold" required>Username</label>
                                            <input type="text" class="form-control" id="signUpName" placeholder="Enter name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="signUpEmail" class="form-label fw-semibold" required>Email address</label>
                                            <input type="email" class="form-control" id="signUpEmail" placeholder="Enter email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="signUpPassword" class="form-label fw-semibold" required>Password</label>
                                            <input type="password" class="form-control" id="signUpPassword" placeholder="Enter password">
                                        </div>
                                        <button type="submit" class="btn btns">Apply</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="navbar navbar-expand-md bg-light navbar-light text-dark">
            <div class="container">
                <img src="/img/lab4.png" alt="logoLab" style ="background: transparent; width: 90px; height: 90px;">
                <a href="" class="navbar-brand fw-bold fs-1">LabSIV</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu">
                    <i class="bi bi-list"></i>
                    <!-- <span class="navbar-toggler-icon"></span> -->
                </button>
                <div class="collapse navbar-collapse" id="mainmenu">
                    <ul class="navbar-nav ms-auto fw-bold">
                        <li class="nav-item"><a href="#" class="nav-link ">Home</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#menu1" aria-expanded="false" aria-controls="menu1">Recherche</a>
                            <ul class="dropdown-menu" id="menu1">
                                <li><a href="#" class="dropdown-item">Intelligence Artificielle</a></li>
                                <li><a href="#" class="dropdown-item">Sécurité Informatique</a></li>
                                <li><a href="#" class="dropdown-item">Traitement d'images</a></li>
                                <li><a href="#" class="dropdown-item">Systemes Embarqués</a></li>
                                <li><a href="#" class="dropdown-item">Analyse De Données</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#menu2" aria-expanded="false" aria-controls="menu2">Equipes</a>
                            <ul class="dropdown-menu" id="menu2">
                                <li><a href="/" class="dropdown-item">Intelligence Artificielle</a></li>
                                <li><a href="/" class="dropdown-item">Sécurité Informatique</a></li>
                                <li><a href="/" class="dropdown-item">Traitement d'images</a></li>
                                <li><a href="/" class="dropdown-item">Systemes Embarqués</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#menu5" aria-expanded="false" aria-controls="menu5">Projets</a>
                            <ul class="dropdown-menu" id="menu5">
                                <li><a href="/" class="dropdown-item">Apprentissage En Profondeur</a></li>
                                <li><a href="/" class="dropdown-item">Analyse d'images Medicales</a></li>
                                <li><a href="/" class="dropdown-item">Collaboration Avec L'industrie</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#menu4" aria-expanded="false" aria-controls="menu4">Publications</a>
                            <ul class="dropdown-menu" id="menu4">
                                <li><a href="/" class="dropdown-item">Articles Scientifiques</a></li>
                                <li><a href="/" class="dropdown-item">Actes De Conferences</a></li>
                                <li><a href="/" class="dropdown-item">Brevets Et Logiciels</a></li>
                                <li><a href="/" class="dropdown-item">Prototypes De Systemes</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#menu3" aria-expanded="false" aria-controls="menu3">Collaborations</a>
                            <ul class="dropdown-menu" id="menu3">
                                <li><a href="/" class="dropdown-item">Universités</a></li>
                                <li><a href="/" class="dropdown-item">Centres De Recherche</a></li>
                                <li><a href="/" class="dropdown-item">Entreprises</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="#bottom" class="nav-link ">About Us</a></li>
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
                <img src="/img/firmware.svg" class="img-fluid w-50" alt="" >
            </div>
        </div>
    </section>
    <section id="les articles" class="">
        <div class="container-lg bg-white "  style="height: 700px;">
        </div>
    </section>
    <footer id="about us" class="bg-dark text-light text-center text-sm-start py-1">
        <a id="bottom"></a>
             <!-- <div class="footer align-items-center"> -->
                <nav class="navbar">
                <!-- <span class=" mx-4 mb-1"><p>About us :</p></span> -->
                    <div class="container mx-auto text-center">
                        <div style="font-size:xx-large;">
                            <a href="#top" class="nav-link arrow"><i class="bi bi-arrow-up-circle"></i></a>
                        </div>
                        <div class="container text-center col-lg-6 ">
                            <span class="nav-item mb-6" ><h4>Contact Us</h4></span>
                            <div class="row social">
                                <div class="col-sm-4">
                                    <ul class=" nav list-unstyled ms-auto ">
                                        <li class="nav-item mx-4 mb-2"><a class="bi bi-facebook text-decoration-none" href="#"><span class=" text-white"> Facebook</span></a> </li>
                                        <li class=" nav-item mx-4 mb-2"><a class="bi bi-instagram text-decoration-none" href="#"><span class=" text-white"> Instagram</span></a> </li>                                
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <ul class=" nav list-unstyled mx-auto"  >
                                        <li class=" nav-item mx-4 mb-2"><a class="bi bi-geo-alt text-decoration-none" href="https://www.google.com/maps/place/Faculty+of+Science,+Ibn+Zohr/@30.4060235,-9.5543585,15z/data=!4m10!1m2!2m1!1sfaculte+de+sciences!3m6!1s0xdb3c82aa3d6fe31:0x8ef661d2ccb5a617!8m2!3d30.4060231!4d-9.5444022!15sChNmYWN1bHRlIGRlIHNjaWVuY2VzkgERcHVibGljX3VuaXZlcnNpdHngAQA!16s%2Fg%2F12156n8y" target="_blank"><span class=" text-white"> Map</span></a> </li>
                                        <li class=" nav-item mx-4 mb-2"><a class="bi bi-envelope text-decoration-none" href="#"><span class=" text-white"> Email</span></a> </li>                            
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <ul class="nav list-unstyled mx-auto">
                                        <li class=" nav-item mx-4 mb-2"><a class="bi bi-twitter text-decoration-none" href="#"><span class=" text-white"> Twitter</span></a> </li>
                                        <li class=" nav-item mx-4 mb-2"><a class="bi bi-linkedin text-decoration-none" href="#"><span class=" text-white"> LinkedIn</span></a> </li>                                
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-brand">
                            <a href="http://www.fsa.ac.ma/" target="_blank"><img src="/img/logo11.png" alt="logo" style="background: transparent;  width: 300px; height: 160px;"></a>
                            <img src="/img/lab4.png" alt="logoLab " style ="background: transparent; width: 150px; height: 150px;">
                        </div>
                    </div>
                </nav>
            <!-- </div> -->
            <span class="credits">Created by F&H. &copy; 2023</span>
        </footer>
    <script src="/js/bootstrap.js"></script>
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("apply");
        var z = document.getElementById("butt");

        function apply(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }
    </script>

</body>
</html>
