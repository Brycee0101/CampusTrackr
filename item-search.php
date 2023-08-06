<?php
include('config/constants.php');
include('logcheck.php');
?>
<style>
.food-search input[type="search"] {
    width: 90%;
    padding: 2%;
    margin-bottom: 3%;
}
.food-search {
    padding: 10% 0;
  }
  
.food-search {
  background-image: url(background.png);
  background-size:cover;
  background-repeat: no-repeat;
  background-position: center;
  padding: 7% 0;
}

.food-search input[type="search"] {
  width: 50%;
  padding: 1%;
  font-size: 1rem;
  border: none;
  border-radius: 5px;
}

.food-search2 {
  background-image: url(background.png);
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  padding: 7% 0;
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
.food-menu {
    background-image: url(background.png);
  background-size: cover;
  padding: 4% 0;
}
.food-menu-box {
  width: 43%;
  margin: 1%;
  padding: 2%;
  float: left;
  background-color: crimson;
  border-radius: 15px;
}

.food-menu-img {
  width: 20%;
  float: left;
}

.food-menu-desc {
  width: 70%;
  float: left;
  margin-left: 8%;
}

.food-price {
  font-size: 1.2rem;
  margin: 2% 0;
}
.food-detail {
  font-size: 1rem;
  color: #747d8c;
}
.text-white {
  color: crimson;
}
.text-center {
  text-align: center;
}
.img-responsive {
  width: 100%;
}
.img-curve {
  border-radius: 15px;
}
.btn {
  padding: 1%;
  border: none;
  font-size: 1rem;
  border-radius: 5px;
}
.btn-primary {
  background-color: red;
  color: white;
  cursor: pointer;
}
.btn-primary:hover {
  color: white;
  background-color: #5d9e5f;
}
</style>
<?php


if (isset($_POST['search'])) {
  $search = $_POST['search'];

  // SQL Query to Get items based on search keyword
  $query = "SELECT * FROM track_found WHERE found_item LIKE '%$search%'";
  $result = mysqli_query($db, $query);
  $count = mysqli_num_rows($result);

  if ($count > 0) {
    // Items Available
    ?>
    <section class="food-search text-center">
      <div class="container">
        <h2><a href="#" class="text-white">Items on Your Search "<?php echo $search; ?>"</a></h2>
      </div>
    </section>

    <section class="food-menu">
      <div class="container">
        <h2 class="text-center">Items</h2>

        <div class="row">

        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            $item = $row['found_item'];
            $desc = $row['found_desc'];
            $loc = $row['found_loc'];
            $date = $row['found_date'];
            $time = $row['found_time'];
            $msg = $row['found_msg'];
            $img = $row['found_img'];
            $img = str_replace('../', '', $img);
            $id = $row['found_id'];
        ?>

        <div class="col-md-4">
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="<?php echo $img; ?>" alt="<?php echo $item; ?>" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4><?php echo $item; ?></h4>
                    <p class="food-price"><?php echo $desc; ?></p>
                    <p class="food-detail"><?php echo $desc; ?></p>
                    <br>
                    <a href="<?php echo SITEURL; ?>lost.php?found_id=<?php echo $id; ?>" class="btn btn-primary">Claim</a>
                </div>
            </div>
        </div>

        <?php
        }
        mysqli_free_result($result);
        ?>


        </div> <!-- End row -->
      </div> <!-- End container -->
    </section>

  <?php
  } else {
    // Items Not Available
    ?>
    <section class="food-search text-center">
      <div class="container">
        <h2><a href="#" class="text-white">No Items Found on Your Search "<?php echo $search; ?>"</a></h2>
      </div>
    </section>
  <?php
  }
}
?>


