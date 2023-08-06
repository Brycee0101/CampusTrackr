<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lemon&family=Monoton&family=Montserrat:ital,wght@0,200;0,400;0,500;1,300&display=swap"
        rel="stylesheet">
    <title>Contact Us</title>
</head>

<body>
    <header>

        <nav class="navbar sticky-top navbar-expand-lg navbar-dark">
            <a class="navbar-brand grow" href="../home.php">CampusTrackr</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link grow" href="../home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link grow" href="../lost.php">Lost</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link grow" href="foundForm.php">Found</a>
                    </li>
                    <li class="nav-item grow">
                    <a class="nav-link" href="../posts.php">Reports</a>
                </li>
                    <li class="nav-item grow">
                        <a class="nav-link" href="../msgs.php">📧</a>
                    </li>
    
                    <li class="nav-item">
                        <a class="nav-link grow" href="#">Contact Us</a>
                    </li>
                </ul>   
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" role="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user signin grow"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                    </div>
            </div>
        </nav>
        <div class="heading text-center" style="margin-top: 2rem;">
            <h1 class="font-weight-bold text-dark">CONTACT US</h1>
        </div>
        <section class="discovery py-5">
            <div class="row align-items-center container  mx-auto">
                <div class="img col-lg-6 col-md-6 col-12 w-50 ">
                    <img src="../images/contactus.png" alt="image" class="img-fluid">

                </div>

                <div class="text col-lg-6 col-md-6 col-12 w-50 ">

                    <div class="container mt-4" id="form-container">

                    <h2 class="text-center">Reach the devs!</i></h2>
                        <form action="contactus.php" class="text-center">
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default" style="background-color: crimson; color: white;">Name</span>
                                </div>
                                <input type="text" name="name" placeholder="Name" class="form-control" id="name"
                                    aria-describedby="emailHelp">
                                
                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default" style="background-color: crimson; color: white;">Email</span>
                                </div>
                                <input type="email" name="email" placeholder="jsmith@gmail.com" class="form-control" id="email"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default" style="background-color: crimson; color: white;">Phone No.</span>
                                </div>
                                <input type="text" name="phone[1][number]" class="form-control" placeholder="09123456789" />
                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text   " id="inputGroup-sizing-default" style="background-color: crimson; color: white;">Message</span>
                                </div>
                                <textarea name="desc" class="form-control" id="desc" placeholder="Write Here..." cols="30" rows="2"></textarea>
                            </div>
                            
                            <button type="submit" class="btn" style="color: crimson; border-color: crimson;">Submit</button>
                        </form>
                    </div>

                </div>


            </div>
        </section>
    </header>
    <footer id="sticky-footer" class="py-2 bg-dark">
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





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>

</body>

</html>