 <!-- ***** Header Area Start ***** -->
 <?php
  require 'slicing/head.php';

  include 'slicing/navbar.php';

  if (isset($_SESSION['logined']) && $_SESSION['logined'] == true) {
    $id = $_SESSION['userid'];
  } else {
    header("location:login.php");
  }

  ?>
 <!-- ***** Header Area End ***** -->

 <div class="container">
   <div class="row">
     <div class="col-lg-12">
       <div class="page-content">
         <?php
          $q = "select * from profile where userid=$id";

          $res = mysqli_query($con, $q);

          $row = mysqli_fetch_assoc($res);

          // print_r($row);

          ?>
          <div class="row">
            <div class="col-md-2">
            <img src="assets/images/profileimages/<?php echo $row['image'] ?>" class="rounded-circle" style="width: 100px !important;height: 100px !important;" alt="">

            </div>
            <div class="col-md-6 my-auto">
            <h2><?php echo $row['name'] ?></h2>
            </div>
          </div>
         <form method="POST"> 
        <table class="table table-dark mt-5">
          
          <tr>            
            <td>Age</td>  
            <td><input type="text" name="age" value="<?php echo $row['age'] ?>"></td>
          </tr>
          <tr>            
          <td>Education</td>  
          <td><input type="text" name="education" value="<?php echo $row['education'] ?>"></td></tr>
          <tr>
          <td>CNIC</td>
          <td><input type="text" name="cnic" value="<?php echo $row['cnic'] ?>"></td></tr>
          <tr>
          <td>Phone</td>
          <td><input type="text" name="phone" value="<?php echo $row['phone'] ?>"></td></tr>
          <tr>
          <td>Address</td>
          <td><input type="text" name="address" value="<?php echo $row['address'] ?>"></td></tr>
          <tr>
          <td>City</td>
          <td>
            <input type="text" name="city" value="<?php echo $row['city'] ?>">
            </td></tr>
          <tr>
          <td>Country</td>
          <td>
          <input type="text" name="country" value="<?php echo $row['country'] ?>">  
          </td></tr>
        </table>
        <button class="btn btn-danger" name="update-btn">Update Profile</button>
        </form>

         <!-- ***** Banner Start ***** -->
         <!-- <div class="row">
            <div class="col-lg-12">
              <div class="main-profile ">
                <div class="row">
                  <div class="col-lg-4">
                    <img src="assets/images/profile.jpg" alt="" style="border-radius: 23px;">
                  </div>
                  <div class="col-lg-4 align-self-center">
                    <div class="main-info header-text">
                      <span>Offline</span>
                      <h4>Alan Smithee</h4>
                      <p>You Haven't Gone Live yet. Go Live By Touching The Button Below.</p>
                      <div class="main-border-button">
                        <a href="#">Start Live Stream</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 align-self-center">
                    <ul>
                      <li>Games Downloaded <span>3</span></li>
                      <li>Friends Online <span>16</span></li>
                      <li>Live Streams <span>None</span></li>
                      <li>Clips <span>29</span></li>
                    </ul>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="clips">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="heading-section">
                            <h4><em>Your Most Popular</em> Clips</h4>
                          </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                          <div class="item">
                            <div class="thumb">
                              <img src="assets/images/clip-01.jpg" alt="" style="border-radius: 23px;">
                              <a href="https://www.youtube.com/watch?v=r1b03uKWk_M" target="_blank"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="down-content">
                              <h4>First Clip</h4>
                              <span><i class="fa fa-eye"></i> 250</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                          <div class="item">
                            <div class="thumb">
                              <img src="assets/images/clip-02.jpg" alt="" style="border-radius: 23px;">
                              <a href="https://www.youtube.com/watch?v=r1b03uKWk_M" target="_blank"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="down-content">
                              <h4>Second Clip</h4>
                              <span><i class="fa fa-eye"></i> 183</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                          <div class="item">
                            <div class="thumb">
                              <img src="assets/images/clip-03.jpg" alt="" style="border-radius: 23px;">
                              <a href="https://www.youtube.com/watch?v=r1b03uKWk_M" target="_blank"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="down-content">
                              <h4>Third Clip</h4>
                              <span><i class="fa fa-eye"></i> 141</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                          <div class="item">
                            <div class="thumb">
                              <img src="assets/images/clip-04.jpg" alt="" style="border-radius: 23px;">
                              <a href="https://www.youtube.com/watch?v=r1b03uKWk_M" target="_blank"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="down-content">
                              <h4>Fourth Clip</h4>
                              <span><i class="fa fa-eye"></i> 91</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="main-button">
                            <a href="#">Load More Clips</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
         <!-- ***** Banner End ***** -->

         <!-- ***** Gaming Library Start ***** -->
         <!-- <div class="gaming-library profile-library">
            <div class="col-lg-12">
              <div class="heading-section">
                <h4><em>Your Gaming</em> Library</h4>
              </div>
              <div class="item">
                <ul>
                  <li><img src="assets/images/game-01.jpg" alt="" class="templatemo-item"></li>
                  <li><h4>Dota 2</h4><span>Sandbox</span></li>
                  <li><h4>Date Added</h4><span>24/08/2036</span></li>
                  <li><h4>Hours Played</h4><span>634 H 22 Mins</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class="main-border-button border-no-active"><a href="#">Donwloaded</a></div></li>
                </ul>
              </div>
              <div class="item">
                <ul>
                  <li><img src="assets/images/game-02.jpg" alt="" class="templatemo-item"></li>
                  <li><h4>Fortnite</h4><span>Sandbox</span></li>
                  <li><h4>Date Added</h4><span>22/06/2036</span></li>
                  <li><h4>Hours Played</h4><span>745 H 22 Mins</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class="main-border-button border-no-active"><a href="#">Donwloaded</a></div></li>
                </ul>
              </div>
              <div class="item last-item">
                <ul>
                  <li><img src="assets/images/game-03.jpg" alt="" class="templatemo-item"></li>
                  <li><h4>CS-GO</h4><span>Sandbox</span></li>
                  <li><h4>Date Added</h4><span>21/04/2022</span></li>
                  <li><h4>Hours Played</h4><span>632 H 46 Mins</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class="main-border-button border-no-active"><a href="#">Donwloaded</a></div></li>
                </ul>
              </div>
            </div>
          </div> -->
         <!-- ***** Gaming Library End ***** -->
       </div>
     </div>
   </div>
 </div>

 <?php
  include_once 'slicing/footer.php';

  
if(isset($_POST['update-btn'])){
extract($_POST);

$u="update profile set age=$age,education='$education',cnic='$cnic',phone='$phone', address='$address', city='$city',country='$country' where userid={$_SESSION['userid']}";
if(mysqli_query($con,$u)){

  echo "<script>alert('Profile has been updated!');location.href='profiledetail.php';</script>";

}
else{
  echo "<script>alert('invalid request!')</script>";
}


}



  ?>