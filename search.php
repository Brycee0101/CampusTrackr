<?php
include('logcheck.php'); 
include('config/constants.php');
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
      <a class="navbar-brand grow" href="#">CampusTrackr</a>
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
            <a class="dropdown-item" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- <h1>Hello, world!</h1> -->
    <main>
<?php


if (isset($_POST['search'])) {
  $search = $_POST['search'];

  // SQL Query to Get items based on search keyword
  $sessionEmail = $_SESSION['email'];
  $query = "SELECT * FROM track_found WHERE found_item LIKE '%$search%' AND found_email NOT LIKE '%$sessionEmail%'";
  $result = mysqli_query($db, $query);
  $count = mysqli_num_rows($result);

  if ($count == 0) {
    ?>
    <h2 class="heading pt-5">
          NO ITEMS FOUND
    </h2><?php
  }
}
?>
    <section class="section-4">
        <div class="heading text-center mb-4 pt-5">
          <h2 class="heading pt-5">
          <?php echo $search; ?>
            <div class="d-flex justify-content-center">
              <hr />
            </div>
          </h2>
        </div>
        <div class="container">
  <div class="card-group">
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
      $name = $row['found_fname'] . ' ' . $row['found_lname'];
      $fname = $row['found_fname'];
      $lname = $row['found_lname'];
      $item = $row['found_item'];
      $desc = $row['found_desc'];
      $loc = $row['found_loc'];
      $date = $row['found_date'];
      $time = $row['found_time'];
      $msg = $row['found_msg'];
      $img = $row['found_img'];
      $img = str_replace('../', '', $img);
      $id = $row['found_id'];
      $search = $_POST['search'];
    ?>
    <div class="col-md-4">
      <div class="card">
        <img src="<?php echo $img; ?>" alt="<?php echo $item; ?>" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title"><?php echo ucwords($item); ?></h5>
          <p class="card-text">Report By: <strong><?php echo ucwords($name); ?></strong></p>
          <p class="card-text">Description: <strong><?php echo $desc; ?></strong></p>
          <p class="card-text">Location: <strong><?php echo ucwords($loc); ?></strong></p>
          <p class="card-text">Message: <strong><?php echo $msg ?></strong></p>
          <form action="search.php" method="post">
                <input type="hidden" name="search" value="<?php echo $search; ?>">
                <input type="hidden" name="claim" value="1"> <!-- Adding a hidden input to identify claim form -->
                <input type="hidden" name="fname" value="<?php echo $fname; ?>"> <!-- Hidden input for recipient's first name -->
                <input type="hidden" name="lname" value="<?php echo $lname; ?>"> <!-- Hidden input for recipient's last name -->
                <input type="submit" name="claimBtn" value="Claim" class="btn learn-more">
            </form>
        </div>
        <div class="card-footer">
          <small class="text-muted">Found <?php echo $date; ?> [<?php echo $time; ?>]</small>
        </div>
      </div>
    </div>
    <?php
    }
    ?>
  </div>
</div>
<?php
if (isset($_POST['claimBtn'])) {
    // This part will be triggered when the claim form is submitted
    $sessionFname = $_SESSION['fname'];
    $sessionLname = $_SESSION['lname'];
    $fname = $_POST['fname']; // Use $_POST to get the recipient's first name
    $lname = $_POST['lname']; // Use $_POST to get the recipient's last name
    $subject = "Claiming Lost Item";
    $message = "I believe you have found my lost item.";
    $dateToday = date("Y-m-d");

    // Prepare the SQL INSERT query
    $query2 = "INSERT INTO track_msg (msg_senderFname, msg_senderLname, msg_recFname, msg_recLname, msg_date, msg_subj, msg_content)
                VALUES ('$sessionFname', '$sessionLname', '$fname', '$lname', '$dateToday', '$subject', '$message')";

    // Execute the query
    if (mysqli_query($db, $query2)) {
        // If the query is successful, display a success message or redirect to another page
        echo '<script>
              alert("Message Sent!");
              window.location.href="msgs.php";
          </script>';
    } else {
        // If there is an error with the query, display an error message or handle it as needed
        echo "Error sending message: " . mysqli_error($db);
    }
}
?>
        </div>
        <div class="bottom text-center mt-5 pb-5">
        </div>
      </section>

      

    
    </main>
    
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
