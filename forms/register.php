<style>
.food-search2 {
  background-color: crimson;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  padding: 1% 0;
}

.food-search2 input[type="search"] {
  width: 50%;
  padding: 1%;
  font-size: 1rem;
  border: none;
  border-radius: 5px;
}
.container {
  width: 80%;
  margin: 0 auto;
  padding: 1%;
}
.text-center {
  text-align: center;
}
.order {
  width: 50%;
  margin: 0 auto;
}
.order legend{
  color: white  ;
}
.order .food-menu-desc{
  color: white;
}
.input-responsive {
  width: 96%;
  padding: 1%;
  margin-bottom: 3%;
  border: none;
  border-radius: 5px;
  font-size: 1rem;
}
.order-label {
  margin-bottom: 1%;
  font-weight: bold;
  color: white;
}
.btnn {
  padding: 1%;
  border: none;
  font-size: 1rem;
  border-radius: 5px;
}
.btnn-primary {
  background-color: white;
  color: crimson;
  cursor: pointer;
}
.btnn-primary:hover {
  color: white;
  background-color: pink;
}

</style>
<?php include('../config/constants.php'); ?>
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
    <link rel="stylesheet" href="foundForm.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lemon&family=Monoton&family=Montserrat:ital,wght@0,200;0,400;0,500;1,300&display=swap"
        rel="stylesheet">
    <title>Register</title>
</head>

<body>

    <main>
        <section>
            <div class="register">
                <section class="food-search2">
                    <div class="container">
        
                        <h2 class="text-center" style="color: white;">Register</h2>
        
                        <form action="register.php" method="POST" class="order">
        
                            <fieldset>
                                <legend>Personal Information</legend>
                                <div class="order-label">First Name</div>
                                <input type="text" name="fname" placeholder="" class="input-responsive" required>
        
                                <div class="order-label">Last Name</div>
                                <input type="text" name="lname" placeholder="" class="input-responsive" required>
        
                                <div class="order-label">Email</div>
                                <input type="text" name="email" placeholder="" class="input-responsive" required>
        
                                <div class="order-label">Username</div>
                                <input type="text" name="username" placeholder="" class="input-responsive" required>
        
                                <div class="order-label">Password</div>
                                <input type="password" name="password" placeholder="" class="input-responsive" required>
        
                                <div class="order-label">Contact No.</div>
                                <input type="tel" name="contact" placeholder="" class="input-responsive" required>
        
                                <div class="order-label">Sex</div>
                                    <select name="sex" class="input-responsive" required>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                
                                <div class="order-label">Year</div>
                                    <select name="year" class="input-responsive" required>
                                        <option value="Freshmen">Freshmen</option>
                                        <option value="Sophomore">Sophomore</option>
                                        <option value="Junior">Junior</option>
                                        <option value="Senior">Senior</option>
                                    </select>
                                
                                <div class="order-label">Program</div>
                                    <select name="prog" class="input-responsive" required>
                                        <option value="BSCS">BS Computer Science</option>
                                        <option value="BSIS ">BS Information Systems</option>
                                        <option value="BSIT">BS Information Technology</option>
                                        <option value="BSEMC">BS Entertainment and Multimedia Computing</option>
                                        <option value="MSIT">MS Information Technology</option>
                                        <option value="BSA">BS Accountancy</option>
                                        <option value="BSBA ">BS Business Administration</option>
                                        <option value="BSE">BS Entrepreneurship</option>
                                        <option value="BSHRM">BS Hotel and Restaurant Management</option>
                                    </select>
                                
                                <input type="submit" name="submit" value="submit" class="btnn btnn-primary">
        
                                <p class="text-center text-white">Already a member? <a href="login.php" style="color: yellow;">Login</a></p>
                            </fieldset>
        
                        </form>
        
                    </div>
        </section>
    </main>
    <footer id="sticky-footer" class=" py-2 bg-dark">
        <div class="brand">
            <a class="navbar-brand" href="../index.php">CampusTrackr</a>
        </div>
        <div class="copyright">
            <small> <span>IT120P &copy;</span> <span>Application Development</span> <span>& Emerging Technologies</span> 4thQ_2022-2023
                <span>Halnin - Caraan</span></small>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>
<?php
require('../config/constants.php');

if(isset($_POST['submit'])){
  $fname = mysqli_real_escape_string($db,$_POST['fname']);
  $lname = mysqli_real_escape_string($db,$_POST['lname']);
  $email = mysqli_real_escape_string($db,$_POST['email']);
  $username = mysqli_real_escape_string($db,$_POST['username']);
  $password = mysqli_real_escape_string($db,$_POST['password']);
  $phone = mysqli_real_escape_string($db,$_POST['contact']);
  $sex = mysqli_real_escape_string($db,$_POST['sex']);
  $year = mysqli_real_escape_string($db,$_POST['year']);
  $prog = mysqli_real_escape_string($db,$_POST['prog']);

  // Check if the customer already exists in the database
  $check_query = "SELECT * FROM track_user WHERE user_fname='$fname' AND user_lname='$lname'";
  $check_result = mysqli_query($db, $check_query);
  if (mysqli_num_rows($check_result) > 0) {
      // Display an error message if the customer already exists
  echo "<script>alert('Error: This account already exists.')</script>";
  } else {
      // Insert the new customer data into the database
      $query = "INSERT INTO track_user values('','$fname','$lname','$email','$username','$password','$phone','$sex','$year','$prog')";
      $exec = $db->query($query);
      if($exec){
          ?>
          <script>
            echo "<script>alert('Success! You have been Registered!')</script>";
                  window.location="login.php";
          </script>
          <?php
      }
  }
}
?>