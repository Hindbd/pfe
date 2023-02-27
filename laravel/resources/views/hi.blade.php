<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LabSIV Website</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <nav class="btn_nav">
        <ul class="navvv">
            <li class="navbar_btn">
                <a href="/" class="button"> Sign up </a>
            </li>
            <li class="navbar_btn">
                <a href="/" class="button"> Login </a>
            </li>
        </ul>
    </nav>
    <nav class="navbar">
        <div class="navbar_container">
            <a href="/" id="navbar-logo"><abbr title="Laboratoire des Systémes Informatiques et Vision">LabSIV</abbr></a>
           <!--<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-apple" viewBox="0 0 16 16">
  <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z"/>
  <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z"/>
</svg>-->
            <div class="navbar_toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <div>
                <ul class="navbar_menu">
                    <li class="navbar_item">
                        <a href="/" class="navbar_links"> Home </a>
                    </li>
                    <li class="navbar_item">
                        <a href="/" class="navbar_links"> Recherche </a>
                        <ul class="dropdown">
                            <li class="menu-item"><a href="/" class="menu-links">Intelligence Artificielle</a></li>
                            <li class="menu-item"><a href="/" class="menu-links">Sécurité Informatique</a></li>
                            <li class="menu-item"><a href="/" class="menu-links">Traitement d`images</a></li>
                            <li class="menu-item"><a href="/" class="menu-links">Systemes Embarqués</a></li>
                            <li class="menu-item"><a href="/" class="menu-links">Analyse De Données</a></li>
                        </ul>
                    </li>
                    <li class="navbar_item">
                        <a href="/" class="navbar_links"> Equipes </a>
                        <ul class="dropdown">
                            <li class="menu-item"><a href="/" class="menu-links">ER en Intelligence Artificielle</a></li>
                            <li class="menu-item"><a href="/" class="menu-links">ER en Sécurité Informatique</a></li>
                            <li class="menu-item"><a href="/" class="menu-links">ER en Traitement d`images</a></li>
                            <li class="menu-item"><a href="/" class="menu-links">ER en Systemes Embarqués</a></li>
                        </ul>
                    </li>
                    <li class="navbar_item">
                        <a href="/" class="navbar_links"> Collaborations </a>                        <ul class="dropdown">
                            <li class="menu-item"><a href="/" class="menu-links">Collaborations Avec Des Universités</a></li>
                            <li class="menu-item"><a href="/" class="menu-links">Collaborations Avec Des Centres De Recherche</a></li>
                            <li class="menu-item"><a href="/" class="menu-links">Collaborations Avec Des Entreprises</a></li>
                        </ul>
                    </li>
                    <li class="navbar_item">
                        <a href="/" class="navbar_links"> Publications </a>
                        <ul class="dropdown">
                            <li class="menu-item"><a href="/" class="menu-links">Articles Scientifiques</a></li>
                            <li class="menu-item"><a href="/" class="menu-links">Actes De Conferences</a></li>
                            <li class="menu-item"><a href="/" class="menu-links">Brevets Et Logiciels</a></li>
                            <li class="menu-item"><a href="/" class="menu-links">Prototypes De Systemes</a></li>
                        </ul>
                    </li>
                    <li class="navbar_item">
                        <a href="/" class="navbar_links"> Perspectives  </a>
                        <ul class="dropdown">
                            <li class="menu-item"><a href="/" class="menu-links">Apprentissage En Profondeur</a></li>
                            <li class="menu-item"><a href="/" class="menu-links">Analyse d`images Medicales</a></li>
                            <li class="menu-item"><a href="/" class="menu-links">Collaboration Avec L`industrie</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="'app.js"></script>
</body>
</html>