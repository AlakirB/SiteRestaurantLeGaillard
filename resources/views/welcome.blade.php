<!DOCTYPE html>
<html lang="fr">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Restaurant Le Gaillard - Bienvenue</title>

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('favicon/favicon.ico') }}" type="image/x-icon">
        <link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}" type="image/x-icon">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        
        <style>
            /* Navbars CSS */
            .nav-1 {
                background-color: #292929;
                height: 50px;
            }
            .header-left, .header-right {
                color: #FFFFFFA8;
            }
            
            .nav-2 {
                background-color: #426B56;
                height: 132px;
            }

            .nav-2.fixed {
                position: fixed;
                top: 0;
                width: 100%;
                z-index: 1000; /* Ensure it is above other elements */
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Optional: add a shadow for better visibility */
            }
            
            .nav-logo {
                color: #AF9756;
            }
            .nav-link {
                color: #AF9756;
                font-size: 1.2rem;
            }
            .nav-link:hover, #focus-link {
                color: white;
                border-bottom: 0.2rem solid white;
            }
            .logo-img {
                max-width: 100%;
                height: auto;
                max-height: 120px; /* Adjust this value as needed */
            }

            .separator {
                padding: 0 10px; /* Adjust the spacing as needed */
                color: white; /* Adjust the color as needed */
                line-height: 2.5; /* Adjust the line-height to match the nav-link */
            }
            
            /* Carousel CSS */
            .carousel-item {
                height: 700px;
            }
            .carousel-item img {
                height: 100%;
                width: 100%;
                object-fit: cover;
                transition: transform 5s ease;
            }
            .carousel-item.active img {
                transform: scale(1.1);
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
            <nav class="nav-2 py-0.2">
                <div class="container d-flex justify-content-between align-items-center">

                    <!-- Left side of the nav -->
                    <ul class="nav">
                        <li class="nav-item"><a href="{{ route('welcome') }}" class="nav-link" id="focus-link">Accueil</a></li> <!-- Add the id="focus-link" to the link you want to focus on -->
                        <li class="nav-item separator">|</li>
                        <li class="nav-item"><a href="{{ route('welcome') }}" class="nav-link">La Carte</a></li>
                    </ul>

                    <!-- Center -->
                    <a href="#" class="nav-logo d-flex align-items-center text-decoration-none">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo du restaurant" class="me-3 logo-img">
                    </a>

                    <!-- Right side of the nav -->
                    <ul class="nav">
                        <li class="nav-item"><a href="{{ route('welcome') }}" class="nav-link">Le Restaurant</a></li>
                        <li class="nav-item separator">|</li>
                        <li class="nav-item"><a href="{{ route('welcome') }}" class="nav-link">Contact</a></li>
                    </ul>

                </div>
            </nav>

            <!-- Carousel 5s interval autoslide -->
            <div class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('images/slide1.jpg') }}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('images/slide2.jpg') }}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('images/slide3.jpg') }}" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('images/slide4.jpg') }}" alt="Fourth slide">
                    </div>
                </div>
            </div>
                
        <!-- Bootstrap JS and Popper.js (for interactivity) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        
        <script>
            // Fixed navbar on scroll
            window.addEventListener('scroll', function() {
                var nav1 = document.querySelector('.nav-1');
                var nav2 = document.querySelector('.nav-2');
                var nav1Height = nav1.offsetHeight;
                if (window.scrollY > nav1Height) {
                    nav2.classList.add('fixed');
                } else {
                    nav2.classList.remove('fixed');
                }
            });
        </script>
    </body>
</html>
