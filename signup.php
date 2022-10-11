 <!-- ***** Header Area Start ***** -->
  <?php 

require 'slicing/head.php';

include 'slicing/navbar.php';
  ?>
  <!-- ***** Header Area End ***** -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <form method="POST" class="form">
          <h2 class="text-center">Register</h2>
          <input type="text" placeholder="Enter your username" name="username">
          <input type="email" placeholder="Enter your Email" name="email">
          <input type="password" placeholder="Enter your Password" name="password">
          <button name="signup-btn">Signup</button>
        </form>
      </div>
    </div>
  </div>
  
  <?php 
  include_once 'slicing/footer.php';
  
 if(isset($_POST['signup-btn'])){
  extract($_POST);
  $pass=md5($password);

  $q="insert into users values(null,'$username','$email','$pass','user',0)";
  if(mysqli_query($con,$q)){
    echo "<script>alert('Account Created Successfully!');location.href='index.php';</script>";
    // header("location:index.php");
  }
 }
 else{
  if(isset($_SESSION['logined']) && $_SESSION['logined']==true){
    echo "<script>location.href='index.php';</script>";
   }
 }

  
  
  
  ?>
