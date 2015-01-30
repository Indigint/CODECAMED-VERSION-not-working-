<!-- this is all inside of a container div, located in the header.php file -->

<?php 
  include_once('includes/header.php');

  if (isset($_COOKIE['email'])){
    header ('Location:welcome.php');
  } 
  elseif (isset($_POST['email'])){
    // echo '<br /><br /><br /><br />This is fun';
    // print_r($_POST);

    $email = $_POST['email'];
    $password = $_POST['password'];
    // echo '<br /><br />Username: '. $username;
    // echo '<br />Password: '. $password;

    //sql statement
    $sql = "SELECT userID, email, password FROM user where email='$email';";
    // echo '<br /><br />SQL: ' . $sql;
    $res = mysqli_query($conn, $sql) or die("<br /><br />mySQL error: " . mysqli_error($conn). "<br />Failed to get stuff from the users database.");
    
    //make sure there's only one row returned
    $num_rows = mysqli_num_rows($res);
    // echo $num_rows;
    if ($num_rows == 1) {
      $res = mysqli_query($conn, $sql) or die("<br /><br />mySQL error: " . mysqli_error($conn). "<br />Failed to get stuff from the users database.");
      $row = mysqli_fetch_array($res, MYSQLI_ASSOC);
      // echo "<br /><br />";
      // print_r($row);
      // Check the password
      if ($row['password'] == $password) {
        $userID = $row['userID'];
        $email = $row['email'];
        // echo 'logged in';
        //set session variables
        // echo '<br /><br />';
        // print_r($_SESSION);
        setcookie("email", "$email", time()+36000);
        setcookie("userID","$userID", time()+36000);

        // print_r($_COOKIE);

        header('Location: welcome.php');

        
      } else {
        $invalid_password = 1;
        //echo '<br />Invalid Password!';
      }

    } else {
      $invalid_user = 1;
      //echo '<br />Invalid User!';
    }
  } 
 ?>

<div class="container mainBody">
  <!--level 1 -->

  <div class="carousel slide" id="myCarousel">

  </div> <!-- end of myCarousel -->
  <div class="row">
    <div class="mainImg"><img src="../images/stockPhotos/cute_family_shopping.jpg" height="100%" width="100%">
    
      <!--<div class="row"> <!--level 2 -->

        <!--<div class="col-xs-3 col-md-6"></div> -->
        <div class="row">
        <div class="col-xs-5 col-xs-offset-7 col-md-4 col-md-offset-8 jumbotron">
          
          <p>Manage your time and money, while balancing the rest of your life. Sounds a little far fetched? Well, let us indulge.</p>
          <p><a class="btn btn-primary btn-lg" href="register.php" role="button">Sign Up</a></p>

        </div> <!-- end of jumbotron -->
      </div> <!-- end of inner row div -->
    </div> <!-- end of col 12 div-->
  
</div>

</div> <!- end of container div -->
	
<?php 
	include_once('includes/footer.php');
 ?>