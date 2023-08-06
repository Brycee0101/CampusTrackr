<?php
require('../config/constants.php');

if (isset($_POST['submit'])) {
  session_start();
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];
  $email = $_SESSION['email'];
  $item = mysqli_real_escape_string($db, $_POST['item']);
  $desc = mysqli_real_escape_string($db, $_POST['desc']);
  $loc = mysqli_real_escape_string($db, $_POST['loc']);
  $date = $_POST['date'];
  $time = $_POST['time'];
  $msg = mysqli_real_escape_string($db, $_POST['msg']);

  // Handle file upload
  $file = $_FILES['image'];
  $filename = $file['name'];
  $filetmp = $file['tmp_name'];
  $fileerror = $file['error'];

  if ($fileerror === 0) {
    $destination = '../uploads/' . $filename;
    move_uploaded_file($filetmp, $destination);
  } else {
    // Handle error during file upload
  }

  $query = "INSERT INTO track_found (found_fname, found_lname, found_email, found_item, found_desc, found_loc, found_date, found_time, found_msg, found_img, found_stat) 
    VALUES ('$fname', '$lname', '$email', '$item', '$desc', '$loc', '$date', '$time', '$msg', '$destination','Reported')";

  $result = mysqli_query($db, $query);

  if ($result) {
    echo '<script>alert("Item Reported! Your Fellow Mapuans Thank you for making the university a safer place!")</script>';
  } else {
    echo '<script>alert("Item not Reported")</script>';
  }
}
?>

<!Doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="foundForm.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lemon&family=Monoton&family=Montserrat:ital,wght@0,200;0,400;0,500;1,300&display=swap" rel="stylesheet">
    <title>Found Form</title>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark">
        <a class="navbar-brand grow" href="../home.php">CampusTrackr</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                    <a class="nav-link grow" href="contactus.php">Contact Us</a>
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
        <section>
            <div class="container" id="main-container">
                <div class="image">
                    <img src="../images/found.jpg" alt="">
                </div>

                <div class="container p-5 mt-5" id="form-container">

                    <h1 class="text-center">Thank you for your Initiative!</i></h1>
                    <form class="mt-4" action="foundform.php" method="POST" enctype="multipart/form-data">
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default" style="background-color: crimson;">Item*</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Item" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="item">
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="background-color: crimson;">Description</span>
                            </div>
                            <textarea class="form-control" placeholder="Item Description Here..." aria-label="With textarea" name="desc"></textarea>
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default" style="background-color: crimson;">Location</span>
                            </div>
                            <input type="text" placeholder="Lobby" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="loc">
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default" style="background-color: crimson;">Date*</span>
                            </div>
                            <input type="date" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="date">
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default" style="background-color: crimson;">Time*</span>
                            </div>
                            <input type="time" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="time">
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="background-color: crimson;">Message</span>
                            </div>
                            <textarea class="form-control" placeholder="Your Message Here..." aria-label="With textarea" name="msg"></textarea>
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="background-color: crimson;">Image</span>
                            </div>
                            <input type="file" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="image">
                        </div>
                        <div class="submit-button text-center">
                            <input type="submit" class="btn" style="color: crimson; border-color: crimson;" name="submit" value="Submit">
                        </div>  
                    </form>

                </div>
            </div>
            
        </section>
    </main>
    <footer id="sticky-footer" class=" py-2 bg-dark">
        <div class="brand">
            <a class="navbar-brand" href="#">CampusTrackr</a>
        </div>
        <div class="copyright" style="color: white;">
            <span>IT120P &copy;</span> <span>Application</span><span> Development</span> and <span>Emerging Technologies</span>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
