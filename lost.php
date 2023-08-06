<?php
include('config/constants.php');
include('logcheck.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Tangerine"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lemon&family=Monoton&family=Montserrat:ital,wght@0,200;0,400;0,500;1,300&display=swap"
      rel="stylesheet"
    />

    <!-- mdbootstrap -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    />
    <link
      rel="stylesheet"
      href="node_modules/mdbootstrap/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/mdb.min.css" />
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/style.css" />
    <title>Home</title>
    
      <!--font Awesome ... for button icon-->
      <script src="https://kit.fontawesome.com/9973cec642.js" crossorigin="anonymous"></script>

  </head>

  <body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark">
      <a class="navbar-brand grow" href="home.php">CampusTrackr</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item grow">
            <a class="nav-link" href="home.php">Home</a>
          </li>
          <li class="nav-item grow">
            <a class="nav-link" href="lost.php">Lost</a>
          </li>
          <li class="nav-item grow">
            <a class="nav-link" href="forms/foundForm.php">Found</a>
          </li>
          <li class="nav-item grow">
                    <a class="nav-link" href="posts.php">Reports</a>
                </li>
          <li class="nav-item grow">
            <a class="nav-link" href="msgs.php">📧</a>
          </li>

          <li class="nav-item grow">
            <a class="nav-link" href="forms/contactus.php">Contact Us</a>
          </li>
        </ul>
        <div class="dropdown">
          <a href="#" class="dropdown-toggle" role="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user signin grow"></i>
          </a>
          <div class="dropdown-menu" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="../logout.php">Logout</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- <h1>Hello, world!</h1> -->
    <main>
      <section class="discovery container section-1">
        <div
          class="
            text
            col-lg-6 col-md-6 col-12
            w-50
            d-flex
            flex-column
            align-items-center
            justify-content-center
          "
        >
        <section class="food-search text-center">
          <div class="container">
               <form action="search.php" method="POST">
                  <input type="search" name="search" placeholder="Search Item" required>
                  <input type="submit" name="submit" value="Search" class="btn learn-more">
              </form>
          </div>
      </section>
          <!-- <h1 class="got-lost-heading mb-3">GOT LOST</h1> -->

          <p><br><br>Lost Something? Search the item and</p>
          <p class="mb-5">
            see reported items found within the campus!
          </p>
          <div class="shrink">
          </div>
        </div>

        <div class="img col-lg-6 col-md-6 col-12">
          <img
            src="images/cardinal.png"
            alt="image"
            class="img-fluid lost-found"
          />
        </div>
      </section>
      <section class="service section-3">
        <div class="col mx-auto align-items-center pt-5">
          <div class="heading text-center mb-5 pt-3">
            <br><br><br>
            <h2 class="heading">
              How this works?
              <div class="d-flex justify-content-center">
                <hr />
              </div>
            </h2>
          </div>
          <div
            class="d-flex flex-row-reverse justify-content-between container"
          >
            <div class="card-image w-50 col-lg-6 col-md-3 col-12 text-right">
              <img class="img-fluid w-100" src="images/lost-card.png" alt="" />
            </div>
            <div
              class="
                one
                col-lg-6 col-md-3 col-12
                w-50
                m-2
                align-items-center
                lost-found-card
              "
            >
              <h5 class="card-title">Lost</h5>
              <ul class="my-3">
                <li class="text-left mb-3">
                  Search the item you lost
                </li>
                <li class="text-left mb-3">
                  Browse for found items within the campus
                </li>
                <li class="text-left mb-3">
                  See if your item has been found by someone
                </li>
                <li class="text-left mb-5">
                  Claim your item
                </li>
              </ul>

              <div class="shrink">
                <a class="learn-more px-5" href="#">Search</a>
              </div>
            </div>
          </div>
          <div
            class="d-flex flex-row justify-content-between container mt-5 pb-5"
          >
            </div>
          </div>
        </div>
      </section>

    </main>
    
    <footer id="page-footer" class="py-2 bg-dark">
      <div class="brand">
        <a class="navbar-brand" href="#">CampusTrackr</a>
      </div>
      <div class="copyright">
        <small>
          <span>IT120P &copy;</span> <span>Application</span>
          <span>Development</span> and <span>Emerging Technologies</span></small
        >
      </div>
<br>
<hr>
      <div class="favicon">
        <i class="social-media fab fa-facebook-f fa-2x"></i>
        <i class="social-media fab fa-twitter fa-2x"></i>
        <i class="social-media fab fa-instagram fa-2x"></i>
        <i class="social-media fas fa-envelope fa-2x"></i>
      </div>

      <div class="BackToTop">
        <a id="back-to-top" href="#"  role="button"><i class="back fas fa-chevron-up fa-2x"></i></a>
        <h4>Back To Top</h4>
        </div>
        
    </footer>


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>

    <!-- mdbootstrap -->
    <script
      type="text/javascript"
      src="node_modules/mdbootstrap/js/jquery.min.js"
    ></script>
    <script
      type="text/javascript"
      src="node_modules/mdbootstrap/js/popper.min.js"
    ></script>
    <script
      type="text/javascript"
      src="node_modules/mdbootstrap/js/bootstrap.min.js"
    ></script>
    <script
      type="text/javascript"
      src="node_modules/mdbootstrap/js/mdb.min.js"
    ></script>
  </body>
</html>
