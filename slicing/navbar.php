<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <h2>APNISHOP</h2>
                        <!-- <img src="assets/images/logo.png" alt=""> -->
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Search End ***** -->
                    <div class="search-input">
                      <form id="search" action="#">
                        <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                        <i class="fa fa-search"></i>
                      </form>
                    </div>
                    <!-- ***** Search End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="index.html" class="active">Home</a></li>
                        <li><a href="browse.html">Browse</a></li>
                        <li><a href="details.html">Details</a></li>
                        <li><a href="streams.html">Streams</a></li>
                        <!-- <li><a href="profile.html">Profile <img src="assets/images/profile-header.jpg" alt=""></a></li> -->
                       <?php
                       if(isset($_SESSION['logined']) && $_SESSION['logined']==true && $_SESSION['userrole']=='user'){
                        $query="select * from profile where userid={$_SESSION['userid']}";
                        $resq=mysqli_query($con,$query);
                        if(mysqli_num_rows($resq)){
                            echo "<li><a href='profiledetail.php'>Hello {$_SESSION['username']}</a></li>";
                        }else{
                            echo "<li><a href='profile.php'>Hello {$_SESSION['username']}</a></li>";
                        }
                        echo "<li><a href='logout.php'>Logout</a></li>";
                       }
                       elseif(isset($_SESSION['logined']) && $_SESSION['logined']==true && $_SESSION['userrole']=='admin'){
                        echo "<li><a href='admin/index.php'>Hello {$_SESSION['username']}</a></li>";
                        
                        echo "<li><a href='logout.php'>Logout</a></li>";
                       }
                       else{
                        echo "<li><a href='login.php'>Login</a></li>";
                        echo "<li><a href='signup.php'>Signup</a></li>";
                       }
                       
                       ?>
                       
                        
                        
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>