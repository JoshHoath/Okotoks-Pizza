<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Okotoks Pizza & Pasta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/home.css">
  </head>
<body>
    <header>
        <div class="jumbotron">
        <img src="images/okotoks-pizza-logo.png" alt="pizza" class="img-fluid" role="img">
        <ul>
            <li>
                <h2>Okotoks Pizza & Pasta</h2>
            </li>
            <li>
                <h3 class="d-none d-md-inline">587-555-555</h3>
                <h3><a href="callto:587555555" class="d-inline d-md-none">587-555-555</a></h3>
            </li>
            <li>
                <h4><a href="#">54 Okotoks Rd</a></h4>
            </li>
        </ul>
        </div>
            <nav class="navbar navbar-expand-md navbar-light navbar-custom sticky-top">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expnaded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="locations.html">Location<span class=sr-only> (current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link"href="aboutus.html">About Us</a>
                        </li>

                        <li class="nav-item dropdown">

                            <button type="button" class="menu-button btn nav-item"><a href="menu.html">Menu</a></button>
                            <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="menu.html#pizza">Pizza</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="menu.html#pasta">Pasta</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="menu.html#deserts">Deserts</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="menu.html#drinks">Drinks</a>
                        </div>
                        </li>
                    </ul>
                </div>
            </nav>
      </header>

      <div class="content">
          <div class="flex-container">
              <div class="row no-gutter">
                  <div class="first-img col-md-4">
                      <img class="d-md-inline d-none"src="images/table.jpg" alt="pizza" role="img">
                  </div>
                  <div class="first-tile col-md-2">
                      <a href="menu.html#pizza"><h3>Pizza!<h3></a>
                  </div>
                  <div class="second-img col-md-4">
                      <img class="d-md-inline d-none" src="images/stove.jpg" alt="pizza" role="img">
                  </div>
                  <div class="extra-tile col-md-2 ">
                      <a href="aboutus.html"><h3>Our Story!<h3></a>
                  </div>
                </div>
            </div>
            <div class="flex-container">
                <div class="row no-gutter">
                    <div class="second-tile col-md-2">
                        <a href="menu.html#pasta"><h3>Pasta!<h3></a>
                    </div>
                    <div class="third-img col-md-4">
                        <img class="d-md-inline d-none" src="images/pizza.jpg" alt="pizza" role="img">
                    </div>
                    <div class="third-tile col-md-2">
                        <a href="menu.html#deserts"><h3>Deserts!<h3></a>
                    </div>
                    <div class="fourth-img col-md-4">
                        <img class="d-md-inline d-none" src="images/two-pizzas.jpg" alt="pizza" role="img">
                    </div>
                </div>
            </div>
            <div class="flex-container">
                <div class="row no-gutter">
                    <div class="fifth-img col-md-4">
                        <img class="d-md-inline d-none" src="images/counter.jpg" alt="pizza" role="img">
                    </div>
                    <div class="fourth-tile col-md-2">
                        <a href="locations.html"><h3>Come Find Us!<h3></a>
                    </div>
                    <div class="sixth-img col-md-4">
                        <img class="d-md-inline d-none" src="images/dinning-room.jpeg" alt="pizza" role="img">
                    </div>
                    <div class="fifth-tile col-md-2">
                        <a href="menu.html#drinks"><h3>Drinks<h3></a>
                    </div>
                </div>
            </div>
            <div class="above-vid">
                <p>Find out a little bit more <a href="aboutus.html">about us!</a><p>
            </div>
            <hr>
                <div class="youtube-vid">
                    <iframe src="https://www.youtube.com/embed/n2BgkHV373A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
      </div>

    <div class="footer">
       @copy; 2019
    </div>
       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </body>
</html>
