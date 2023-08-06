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
  $username = $_SESSION['username'];
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];

  // SQL Query to Get items based on search keyword
  $query = "SELECT * FROM track_msg WHERE msg_recFname = '$fname' AND msg_recLname = '$lname' ";
  $result = mysqli_query($db, $query);
  $count = mysqli_num_rows($result);

?>
    <div class="bottom text-center mt-5 pb-5">
        </div>
      </section>
      <section class="section-4">
        <div class="heading text-center mb-4 pt-5">
          <h2 class="heading pt-5">
           Create New 📩
            <div class="d-flex justify-content-center">
              <hr />
            </div>
          </h2>
        </div>
        <div class="container">
  <div class="card-group">
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
        <form action="msgs.php" method="post">
          <h5 class="card-title">Send to: </h5>
          <input type="text" id="fname" name="fname" placeholder="First Name"class="form-control"><br>
          <input type="text" id="lname" name="lname" placeholder="Last Name"class="form-control"><br>
          <p class="card-text"><strong>Subject: </strong></p>
          <input type="text" id="subject" name="subject" placeholder="Subject"class="form-control"><br>
          <p class="card-text"><strong>Message: </strong></p>
          <textarea name="message" class="form-control"></textarea><br><br>
          <input type="submit" name="submit" value="Send" class="btn learn-more">
        </div>
      </form>
        <div class="card-footer">
          <small class="text-muted">Sent by: <?php echo $fname; ?></small>
        </div>
      </div>
    </div>
  </div>
</div>

        </div>
        <div class="bottom text-center mt-5 pb-5">
        </div>
      </section>
<?php
if (isset($_POST['submit'])) {
  $sessionFname = $_SESSION['fname'];
  $sessionLname = $_SESSION['lname'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $dateToday = date("Y-m-d");

  // Prepare the SQL INSERT query
  $query = "INSERT INTO track_msg (msg_senderFname, msg_senderLname, msg_recFname, msg_recLname, msg_date, msg_subj, msg_content)
            VALUES ('$sessionFname', '$sessionLname', '$fname', '$lname', '$dateToday', '$subject', '$message')";

  // Execute the query
  if (mysqli_query($db, $query)) {
    ?><script>
      echo <script>alert('Message Sent!');
      window.location="msgs.php";</script>
  </script><?php
  } else {
      // If there is an error with the query, display an error message or handle it as needed
      echo "Error sending message: " . mysqli_error($db);
  }
}
?>
<?php
$username = $_SESSION['username'];
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];

  // SQL Query to Get items based on search keyword
  $query = "SELECT * FROM track_msg WHERE msg_recFname = '$fname' AND msg_recLname = '$lname' ";
  $result = mysqli_query($db, $query);
  $count = mysqli_num_rows($result);
  if ($count == 0) {
    ?>
    <h2 class="heading pt-5">
          NO MESSAGES YET
    </h2><?php
  }
?>
    <section class="section-4">
        <div class="heading text-center mb-4 pt-5">
          <h2 class="heading pt-5">
          <?php echo $username; ?> Inbox
            <div class="d-flex justify-content-center">
              <hr />
            </div>
          </h2>
        </div>
        <div class="container">
  <div class="card-group">
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
      $sender = $row['msg_senderFname'] . ' ' . $row['msg_senderLname'];
      $senderFname = $row['msg_senderFname'];
      $senderLname = $row['msg_senderLname'];
      $rec = $row['msg_recFname'] . ' ' . $row['msg_recLname'];
      $subject = $row['msg_subj'];
      $msg = $row['msg_content'];
      $date = $row['msg_date'];
      $msg_id = $row['msg_id'];

    ?>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><?php echo ucwords($sender); ?></h5>
          <p class="card-text">Subject: <strong><?php echo ucwords($subject); ?></strong></p>
          <p class="card-text">Recepient: <strong><?php echo ucwords ($rec); ?></strong></p>
          <p class="card-text">Message: <strong><?php echo ucwords($msg); ?></strong></p>
          <form action="msgs.php" method="post">  
            <input type="hidden" name="recFname" value="<?php echo $senderFname; ?>">
            <input type="hidden" name="recLname" value="<?php echo $senderLname; ?>">
            <input type="hidden" name="subject" value="<?php echo $subject; ?>">
            <textarea name="message" class="form-control"></textarea><br><br>
            <input type="hidden" name="msg_id" value="<?php echo $msg; ?>">
            <input type="submit" name="submitInbox" value="Reply" class="btn learn-more">
          </form>
        </div>
        <div class="card-footer">
          <small class="text-muted">Sent <?php echo $date; ?></small>
        </div>
      </div>
    </div>
    <?php
    if (isset($_POST['submitInbox'])) {
      $sessionFname = $_SESSION['fname'];
      $sessionLname = $_SESSION['lname'];
      $fname = $_POST['recFname'];
      $lname = $_POST['recLname'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];
      $dateToday = date("Y-m-d");
    
      // Prepare the SQL INSERT query
      $query = "INSERT INTO track_msg (msg_senderFname, msg_senderLname, msg_recFname, msg_recLname, msg_date, msg_subj, msg_content)
                VALUES ('$sessionFname', '$sessionLname', '$fname', '$lname', '$dateToday', '$subject', '$message')";
    
      // Execute the query
      if (mysqli_query($db, $query)) {
          // If the query is successful, display a success message or redirect to another page
          ?><script>
              echo <script>alert('Message Sent!');
              window.location.href="msgs.php";
          </script><?php
      } else {
          // If there is an error with the query, display an error message or handle it as needed
          echo "Error sending message: " . mysqli_error($db);
      }
    }
  }
    ?>
  </div>
</div>

<?php

  // SQL Query to Get items based on search keyword
  $query = "SELECT * FROM track_msg WHERE msg_senderFname = '$fname' AND msg_senderLname = '$lname'";
  $result = mysqli_query($db, $query);
  $count = mysqli_num_rows($result);
  if ($count == 0) {
    ?>
    <h2 class="heading pt-5">
          NO MESSAGES YET
    </h2><?php
  }
?>
        <div class="bottom text-center mt-5 pb-5">
        </div>
      </section>
      <section class="section-4">
        <div class="heading text-center mb-4 pt-5">
          <h2 class="heading pt-5">
          <?php echo $username; ?> Sent
            <div class="d-flex justify-content-center">
              <hr />
            </div>
          </h2>
        </div>
        <div class="container">
  <div class="card-group">
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
      $sender = $row['msg_senderFname'] . ' ' . $row['msg_senderLname'];
      $senderFname = $row['msg_senderFname'];
      $senderLname = $row['msg_senderLname'];
      $rec = $row['msg_recFname'] . ' ' . $row['msg_recLname'];
      $subject = $row['msg_subj'];
      $msg = $row['msg_content'];
      $date = $row['msg_date'];

    ?>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><?php echo ucwords($sender); ?></h5>
          <p class="card-text">Subject: <strong><?php echo ucwords($subject); ?></strong></p>
          <p class="card-text">Recepient: <strong><?php echo ucwords ($rec); ?></strong></p>
          <p class="card-text">Message: <strong><?php echo ucwords($msg); ?></strong></p>
          <form action="msgs.php" method="post">  
            <input type="hidden" name="recFname" value="<?php echo $senderFname; ?>">
            <input type="hidden" name="recLname" value="<?php echo $senderLname; ?>">
            <input type="hidden" name="subject" value="<?php echo $subject; ?>">
            <textarea name="message" class="form-control"></textarea><br><br>
            <input type="hidden" name="msg_id" value="<?php echo $msg; ?>">
            <input type="submit" name="submitSent" value="Reply" class="btn learn-more">
        </form>
        </div>
        <div class="card-footer">
          <small class="text-muted">Sent <?php echo $date; ?></small>
        </div>
      </div>
    </div>
    <?php
    }
    ?>
  </div>
</div>
<?php
    if (isset($_POST['submitSent'])) {
      $sessionFname = $_SESSION['fname'];
      $sessionLname = $_SESSION['lname'];
      $fname = $_POST['recFname'];
      $lname = $_POST['recLname'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];
      $dateToday = date("Y-m-d");
    
      // Prepare the SQL INSERT query
      $query = "INSERT INTO track_msg (msg_senderFname, msg_senderLname, msg_recFname, msg_recLname, msg_date, msg_subj, msg_content)
                VALUES ('$sessionFname', '$sessionLname', '$fname', '$lname', '$dateToday', '$subject', '$message')";
    
      // Execute the query
      if (mysqli_query($db, $query)) {
          // If the query is successful, display a success message or redirect to another page
          ?><script>
              echo <script>alert('Message Sent!');
              window.location.href="msgs.php";
          </script><?php
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
    <?php
      if(isset($_GET['sent'])){
        ?><script>
        echo "<script>alert('Message Sent!')</script>";
              window.location="login.php";
        </script><?php
      }
    ?>
      

    
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
