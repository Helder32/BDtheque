<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
        <title>Document</title>
    </head>

    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <p><h4 id='titleNavbar'>MA BD-THEQUE...</h4></p>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/accueil">Accueil<span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="/mesBD">Mes BD<span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="/mesCollections">Mes collections<span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="/mesEnvies">Mes envies<span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="/mesAvisEtNotes">Mes avis/notes<span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="/gererBD">Gérer mes BD<span class="sr-only">(current)</span></a>
                    </li>

                </ul>
                
                <form class="form-inline my-2 my-lg-0">
                    <!-- <li class="nav-item active">
                        <a class="nav-link" href="#">Se connecter<span class="sr-only">(current)</span></a>
                    </li> -->
                    <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Chercher</button>
                </form>
            </div>
        </nav>

        <div class="container" id='titrePage'>
            <div class="row justify-content-center">

                <p><h2>@yield('titlePage')</h2></p>
                
            </div>
        </div>
        <div class="container-fluid">
			<div class="container">
				<div class="row">
                    @yield('content')
                </div>
            </div>
        </div>


        <script src="node_modules/jquery/dist/jquery.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>