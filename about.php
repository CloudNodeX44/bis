<?php include 'conn/conn.php'?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="configs/onlineLib.js"></script>
    <link rel="stylesheet" href="configs/carousel.css">
    <link rel="stylesheet" href="configs/index.css">
    
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img id="navIcon" width="48" height="48"
                        src="https://img.icons8.com/color/48/sailor-moon.png" alt="sailor-moon" /><b>&nbsp;Sailor
                        Moon</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin/registration/registration.php">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Sign In</a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dropdown link
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section>
            <div class="welcome">
                <h1>"Welcome to <a class="link"
                        href="https://www.youtube.com/watch?v=SCK1zTjgKsk&list=RDSCK1zTjgKsk&start_radio=1">Archie's
                        Station</a>"</h1>
            </div>
        </section>
        <section>
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><img title="img"
                                src="https://w.wallhaven.cc/full/d6/wallhaven-d6dvdl.png" width="100%" height="100%"
                                fill="#777" /></svg>

                        <div class="container">
                            <div class="carousel-caption text-start">
                                <h1>Example headline.</h1>
                                <p>Some representative placeholder content for the first slide of the carousel.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><img title="img"
                                src="https://w.wallhaven.cc/full/gp/wallhaven-gpd6v7.jpg" width="100%" height="100%"
                                fill="#777" /></svg>

                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Another example headline.</h1>
                                <p>Some representative placeholder content for the second slide of the carousel.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><img title="img"
                                src="https://w.wallhaven.cc/full/1p/wallhaven-1p2m2w.jpg" width="100%" height="100%"
                                fill="#777" /></svg>

                        <div class="container">
                            <div class="carousel-caption text-end">
                                <h1>One more for good measure.</h1>
                                <p>Some representative placeholder content for the third slide of this carousel.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <aside>
            <h3>Related Links</h3>
            <ul>
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <!-- Additional content goes here -->
            </ul>
        </aside>


        <article>
            <h1>Article Title</h1>
            <p>Article content goes here...Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Feugiat pretium nibh ipsum consequat nisl vel
                pretium. Est lorem ipsum dolor sit amet consectetur adipiscing elit. Magna fringilla urna porttitor
                rhoncus dolor purus non. Tincidunt id aliquet risus feugiat in. Habitasse platea dictumst quisque
                sagittis purus sit. Posuere morbi leo urna molestie at elementum eu facilisis. Nisl condimentum id
                venenatis a condimentum vitae sapien pellentesque. Eu mi bibendum neque egestas. Egestas maecenas
                pharetra convallis posuere morbi leo urna. Nunc congue nisi vitae suscipit tellus mauris a diam.
                Facilisis volutpat est velit egestas dui id. Morbi non arcu risus quis varius quam quisque. Tempus
                iaculis urna id volutpat lacus laoreet non. Imperdiet massa tincidunt nunc pulvinar sapien.</p>
        </article>
        <section>
            <h2>Benefits</h2>
            <p>Section content goes here...</p>
        </section>
        <section>
            <h2>How it works</h2>
            <p>Section content goes here...</p>
        </section>

    </main>

    <footer>
        <p class="h1"> &copy; Cyberpunk 2077, All rights reserved.</p>
    </footer>
</body>

</html>