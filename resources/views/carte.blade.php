<!DOCTYPE html>
<html lang="fr">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Restaurant Le Gaillard - La Carte</title>

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('favicon/favicon.ico') }}" type="image/x-icon">
        <link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}" type="image/x-icon">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        
        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Rochester&display=swap" rel="stylesheet">

    </head>
    <body>
        <!-- Header -->
        <nav class="nav-1 py-3">
            <div class="container d-flex justify-content-between align-items-center">

                <!-- Left side of the header -->
                <div class="header-left">
                    <span class="header-item">Restaurant Lounge à Annemasse</span>
                </div>

                <!-- Right side of the header -->
                <div class="header-right">
                    <span class="header-item">Ouvert tous les jours de 8h à 22h | Informations et réservation au 0123456789</span>
                </div>

            </div>
        </nav>

        <!-- NavBar -->
        <nav class="nav-2 py-0.2">
            <!-- For screens larger than 1024px -->
            <div class="navbar-content-large-screen container d-flex justify-content-between align-items-center">

                <!-- Left side of the nav -->
                <ul class="nav">
                    <li class="nav-item"><a href="{{ route('welcome') }}" class="nav-link">Accueil</a></li> 
                    <li class="nav-item separator">|</li>
                    <li class="nav-item"><a href="{{ route('carte') }}" class="nav-link" id="focus-link">La Carte</a></li> <!-- Add the id="focus-link" to the link you want to focus on -->
                </ul>

                <!-- Center -->
                <a href="#" class="nav-logo d-flex align-items-center text-decoration-none">
                    <img src="{{ asset('images/logo.jpg') }}" alt="Logo du restaurant" class="me-3 logo-img">
                </a>

                <!-- Right side of the nav -->
                <ul class="nav">
                    <li class="nav-item"><a href="{{ route('restaurant') }}" class="nav-link">Le Restaurant</a></li>
                    <li class="nav-item separator">|</li>
                    <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                </ul>

            </div>

            <!-- For screens smaller than 1024px -->
            <div class="navbar-content-small-screen container d-flex justify-content-between align-items-center">

                <!-- Logo on the left -->
                <a href="#" class="nav-logo d-flex align-items-center text-decoration-none">
                    <img src="{{ asset('images/logo.jpg') }}" alt="Logo du restaurant" class="me-3 logo-img">
                </a>

                <!-- Dropdown with links -->
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                        </svg>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{ route('welcome') }}">Accueil</a></li>
                      <li><a class="dropdown-item active" href="{{ route('carte') }}">La Carte</a></li> <!-- Add the class="active" to the link you want to focus on -->
                      <li><a class="dropdown-item" href="{{ route('restaurant') }}">Le Restaurant</a></li>
                      <li><a class="dropdown-item" href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>

            </div>
        </nav>
        <div id="navbar-placeholder"></div>

        <!-- Hero Image (image put at the top of the page) -->
        <img class="hero-image-carte" src="{{ asset('images/photo-cocktails.jpeg') }}" alt="Photo de cocktails sur une table du restaurant">

        <!-- Elements separator -->
        <svg class="elements-separator elements-separator-top" id="visual" viewBox="0 0 1903 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
            <path d="M0 17L211 21L423 29L634 24L846 18L1057 16L1269 19L1480 18L1692 14L1903 13L1903 0L1692 0L1480 0L1269 0L1057 0L846 0L634 0L423 0L211 0L0 0Z" fill="#a8a89e"></path>
            <path d="M0 51L211 64L423 55L634 46L846 52L1057 44L1269 35L1480 56L1692 56L1903 37L1903 11L1692 12L1480 16L1269 17L1057 14L846 16L634 22L423 27L211 19L0 15Z" fill="#898981"></path>
            <path d="M0 66L211 74L423 61L634 54L846 58L1057 52L1269 43L1480 73L1692 67L1903 44L1903 35L1692 54L1480 54L1269 33L1057 42L846 50L634 44L423 53L211 62L0 49Z" fill="#6b6b66"></path>
            <path d="M0 75L211 81L423 70L634 66L846 71L1057 66L1269 62L1480 83L1692 75L1903 64L1903 42L1692 65L1480 71L1269 41L1057 50L846 56L634 52L423 59L211 72L0 64Z" fill="#4e4e4c"></path>
            <path d="M0 101L211 101L423 101L634 101L846 101L1057 101L1269 101L1480 101L1692 101L1903 101L1903 62L1692 73L1480 81L1269 60L1057 64L846 69L634 64L423 68L211 79L0 73Z" fill="#333333"></path>
        </svg>

        <!-- La Carte  -->
        <div class="block-carte">
            <img class="carte-page" src="{{ asset('images/menu-page-0.jpg') }}" alt="Page de présentation de la carte">
            <img class="carte-page" src="{{ asset('images/menu-page-1.jpg') }}" alt="Page de présentation de la carte">
            <img class="carte-page" src="{{ asset('images/menu-page-2.jpg') }}" alt="Page de présentation de la carte">
            <img class="carte-page" src="{{ asset('images/menu-page-3.jpg') }}" alt="Page de présentation de la carte">
            <img class="carte-page" src="{{ asset('images/menu-page-4.jpg') }}" alt="Page de présentation de la carte">
            <img class="carte-page" src="{{ asset('images/menu-page-5.jpg') }}" alt="Page de présentation de la carte">
            <img class="carte-page" src="{{ asset('images/menu-page-6.jpg') }}" alt="Page de présentation de la carte">
            <img class="carte-page" src="{{ asset('images/menu-page-7.jpg') }}" alt="Page de présentation de la carte">
        </div>

        <!-- Elements separator -->
        <svg class="elements-separator elements-separator-bottom" id="visual" viewBox="0 0 1903 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
            <path d="M0 17L211 21L423 29L634 24L846 18L1057 16L1269 19L1480 18L1692 14L1903 13L1903 0L1692 0L1480 0L1269 0L1057 0L846 0L634 0L423 0L211 0L0 0Z" fill="#333333"></path>
            <path d="M0 51L211 64L423 55L634 46L846 52L1057 44L1269 35L1480 56L1692 56L1903 37L1903 11L1692 12L1480 16L1269 17L1057 14L846 16L634 22L423 27L211 19L0 15Z" fill="#4e4e4c"></path>
            <path d="M0 66L211 74L423 61L634 54L846 58L1057 52L1269 43L1480 73L1692 67L1903 44L1903 35L1692 54L1480 54L1269 33L1057 42L846 50L634 44L423 53L211 62L0 49Z" fill="#6b6b66"></path>
            <path d="M0 75L211 81L423 70L634 66L846 71L1057 66L1269 62L1480 83L1692 75L1903 64L1903 42L1692 65L1480 71L1269 41L1057 50L846 56L634 52L423 59L211 72L0 64Z" fill="#a8a89e"></path>
            <path d="M0 101L211 101L423 101L634 101L846 101L1057 101L1269 101L1480 101L1692 101L1903 101L1903 62L1692 73L1480 81L1269 60L1057 64L846 69L634 64L423 68L211 79L0 73Z" fill="#eeeeee"></path>
        </svg>

        <!-- Google map element -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5524.436169125026!2d6.208467648043527!3d46.186218712147884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c71eb17e94219%3A0xbe59d74662cdee2c!2sLe%20Gaillard!5e0!3m2!1sfr!2sfr!4v1738688541263!5m2!1sfr!2sfr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        
        <!-- Custom JS -->
        <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>
