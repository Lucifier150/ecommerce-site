 <!-- ***** Header Area Start ***** -->
  <?php 
require 'slicing/head.php';

include 'slicing/navbar.php';
  ?>
  <!-- ***** Header Area End ***** -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <form class="form" method="POST">
          <h2 class="text-center">Login</h2>
          <input type="text" placeholder="Enter your username/email" name="loginemail">
          <input type="password" placeholder="Enter your password" name="loginpassword">
          <button name="login-btn">Login</button>
        </form>
      </div>
    </div>
  </div>
  
  <?php 
  include_once 'slicing/footer.php';

if(isset($_POST['login-btn'])){
  extract($_POST);
  $pass=md5($loginpassword);
  $q="select * from users where (username='$loginemail' or email='$loginemail') and password='$pass'";
  $res=mysqli_query($con,$q);
  if(mysqli_num_rows($res)>0){
    $row=mysqli_fetch_assoc($res);
    if($row['status']==0){
    $_SESSION['logined']=true;
    $_SESSION['username']=$row['username'];
    $_SESSION['userid']=$row['id'];
    $_SESSION['userrole']=$row['role'];
    echo "<script>alert('Login successfully!');location.href='index.php';</script>";
    }
    else{
      
    echo "<script>alert('Your account is deactivated!');</script>";
    }
  }
  else{
    $_SESSION['logined']=false;
    echo "<script>alert('Invalid Login!')</script>";
  }
}else{
  if(isset($_SESSION['logined']) && $_SESSION['logined']==true){
    echo "<script>location.href='index.php';</script>";
   }
}



  ?>
