<!DOCTYPE html>
<html lang="fr-FR">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Restaurant Le Gaillard - Bienvenue</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
            .nav-1 {
                background-color: #292929;
            }
            .header-left, .header-right {
                color: #FFFFFFA8;
            }
            
            .nav-2 {
                background-color: #426B56;
            }
            .nav-logo {
                color: #AF9756;
            }
            .nav-link {
                color: #AF9756;
                font-size: 1.2rem;
            }
            .nav-link:hover {
                text-decoration: underline;
                color: white;
            }
            .logo-img {
                max-width: 100%;
                height: auto;
                max-height: 200px; /* Adjust this value as needed */
            }
        </style>
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
            <nav class="nav-2 py-5">
                <div class="container d-flex justify-content-between align-items-center">

                    <!-- Left side of the nav -->
                    <ul class="nav">
                        <li class="nav-item"><a href="#" class="nav-link">Accueil</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Le Restaurant</a></li>
                    </ul>

                    <!-- Center -->
                    <a href="#" class="nav-logo d-flex align-items-center text-decoration-none">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo du restaurant" class="me-3 logo-img">
                    </a>

                    <!-- Right side of the nav -->
                    <ul class="nav">
                        <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                    </ul>

                </div>
            </nav>

        <!-- Bootstrap JS and Popper.js (for interactivity) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </body>
</html>
