<?php
session_start();
if(!isset($_SESSION['user'])){
   header("location: login.php");
}else{
   $name = $_SESSION['user'][2];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Placement Dashboard | By VBLAZE</title>
  <link rel="stylesheet" href="dash.css" />
   <!-- Font Awesome Cdn Link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
   <!-- Link Swiper's CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>

</head>
<body>
  <!--div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="avatar.png">
          <p><span class="nav-item"><b></b></span></p>
          <br><span class="badge badge-lg badge-dot">
               <i class="bg-success"></i> 
               </span>
               <span class="badge badge-lg badge-dot">
                <i class="bg-success" style="color: white;">name</i>
                </span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-menorah"></i>
          <span class="nav-item">Dashboard</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-comment"></i>
          <span class="nav-item">Message</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-database"></i>
          <span class="nav-item">Report</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">Attendance</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-cog"></i>
          <span class="nav-item">Setting</span>
        </a></li>

        <li><a href="logout.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav-->


    <section class="main">
      <div class="main-top">
        <h1>Hey <?php echo $name ?> <img src="hi.png" height="25" width="25"> </h1>
        <i class="fas fa-bell"></i>
      </div>

<!-- Swiper -->    
      <div class="swiper mySwiper users">
      <div class="swiper-wrapper swiper-slide">    
        <div class="swiper-slide card">
          <img src="./pic/img1.jpg">
          <h4>Akshay Nambiyar</h4>
          <p>byjus</p>
          <div class="per">
            <table>
              <tr>
                <td><span>4.6</span></td>
                <!--td><span>87%</span></td-->
              </tr>
              <tr>
                <td>LPA</td>
                <!--td>Year</td-->
              </tr>
            </table>
          </div>
          <button>Profile</button>
        </div>

        <div class="swiper-slide card">
          <img src="./pic/img2.jpg">
          <h4>Balbina kherr</h4>
          <p>Progammer</p>
          <div class="per">
            <table>
              <tr>
                <td><span>82%</span></td>
                <td><span>85%</span></td>
              </tr>
              <tr>
                <td>Month</td>
                <td>Year</td>
              </tr>
            </table>
          </div>
          <button>Profile</button>
      </div>

        <div class="swiper-slide card">
          <img src="./pic/img3.jpg">
          <h4>Badan John</h4>
          <p>tester</p>
          <div class="per">
            <table>
              <tr>
                <td><span>94%</span></td>
                <td><span>92%</span></td>
              </tr>
              <tr>
                <td>Month</td>
                <td>Year</td>
              </tr>
            </table>
          </div>
          <button>Profile</button>
        </div>

        <div class="swiper-slide card">
          <img src="./pic/img3.jpg">
          <h4>Badan John</h4>
          <p>tester</p>
          <div class="per">
            <table>
              <tr>
                <td><span>94%</span></td>
                <td><span>92%</span></td>
              </tr>
              <tr>
                <td>Month</td>
                <td>Year</td>
              </tr>
            </table>
          </div>
          <button>Profile</button>
        </div>
                
        <div class="swiper-slide card">
          <img src="./pic/img3.jpg">
          <h4>Badan John</h4>
          <p>tester</p>
          <div class="per">
            <table>
              <tr>
                <td><span>94%</span></td>
                <td><span>92%</span></td>
              </tr>
              <tr>
                <td>Month</td>
                <td>Year</td>
              </tr>
            </table>
          </div>
          <button>Profile</button>
        </div> 

        <div class="swiper-slide card">
          <img src="./pic/img3.jpg">
          <h4>Badan John</h4>
          <p>tester</p>
          <div class="per">
            <table>
              <tr>
                <td><span>94%</span></td>
                <td><span>92%</span></td>
              </tr>
              <tr>
                <td>Month</td>
                <td>Year</td>
              </tr>
            </table>
          </div>
          <button>Profile</button>
        </div>
                
        <div class="swiper-slide card">
          <img src="./pic/img3.jpg">
          <h4>Badan John</h4>
          <p>tester</p>
          <div class="per">
            <table>
              <tr>
                <td><span>94%</span></td>
                <td><span>92%</span></td>
              </tr>
              <tr>
                <td>Month</td>
                <td>Year</td>
              </tr>
            </table>
          </div>
          <button>Profile</button>
        </div> 
        
        <div class="swiper-slide card">
          <img src="./pic/img3.jpg">
          <h4>Badan John</h4>
          <p>tester</p>
          <div class="per">
            <table>
              <tr>
                <td><span>94%</span></td>
                <td><span>92%</span></td>
              </tr>
              <tr>
                <td>Month</td>
                <td>Year</td>
              </tr>
            </table>
          </div>
          <button>Profile</button>
        </div>
                
        <div class="swiper-slide card">
          <img src="./pic/img3.jpg">
          <h4>Badan John</h4>
          <p>tester</p>
          <div class="per">
            <table>
              <tr>
                <td><span>94%</span></td>
                <td><span>92%</span></td>
              </tr>
              <tr>
                <td>Month</td>
                <td>Year</td>
              </tr>
            </table>
          </div>
          <button>Profile</button>
        </div>        

        <div class="swiper-slide card">
          <img src="./pic/img3.jpg">
          <h4>Badan John</h4>
          <p>tester</p>
          <div class="per">
            <table>
              <tr>
                <td><span>94%</span></td>
                <td><span>92%</span></td>
              </tr>
              <tr>
                <td>Month</td>
                <td>Year</td>
              </tr>
            </table>
          </div>
          <button>Profile</button>
        </div>
                
        <div class="swiper-slide card">
          <img src="./pic/img3.jpg">
          <h4>Badan John</h4>
          <p>tester</p>
          <div class="per">
            <table>
              <tr>
                <td><span>94%</span></td>
                <td><span>92%</span></td>
              </tr>
              <tr>
                <td>Month</td>
                <td>Year</td>
              </tr>
            </table>
          </div>
          <button>Profile</button>
        </div>        

        <div class="swiper-slide card">
          <img src="./pic/img4.jpg">
          <h4>Salina micheal</h4>
          <p>Ui designer</p>
          <div class="per">
            <table>
              <tr>
                <td><span>85%</span></td>
                <td><span>82%</span></td>
              </tr>
              <tr>
                <td>Month</td>
                <td>Year</td>
              </tr>
            </table>
          </div>
          <button>Profile</button>
        </div>
      </div>

    <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>

      <section class="attendance">
        <div class="attendance-list">
          <h1>Attendance List</h1>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Depart</th>
                <th>Date</th>
                <th>Join Time</th>
                <th>Logout Time</th>
                <th>Details</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>01</td>
                <td>Sam David</td>
                <td>Design</td>
                <td>03-24-22</td>
                <td>8:00AM</td>
                <td>3:00PM</td>
                <td><button>View</button></td>
              </tr>
              <tr class="active">
                <td>02</td>
                <td>Balbina Kherr</td>
                <td>Coding</td>
                <td>03-24-22</td>
                <td>9:00AM</td>
                <td>4:00PM</td>
                <td><button>View</button></td>
              </tr>
              <tr>
                <td>03</td>
                <td>Badan John</td>
                <td>testing</td>
                <td>03-24-22</td>
                <td>8:00AM</td>
                <td>3:00PM</td>
                <td><button>View</button></td>
              </tr>
              <tr>
                <td>04</td>
                <td>Sara David</td>
                <td>Design</td>
                <td>03-24-22</td>
                <td>8:00AM</td>
                <td>3:00PM</td>
                <td><button>View</button></td>
              </tr>
              <!-- <tr >
                <td>05</td>
                <td>Salina</td>
                <td>Coding</td>
                <td>03-24-22</td>
                <td>9:00AM</td>
                <td>4:00PM</td>
                <td><button>View</button></td>
              </tr>
              <tr >
                <td>06</td>
                <td>Tara Smith</td>
                <td>Testing</td>
                <td>03-24-22</td>
                <td>9:00AM</td>
                <td>4:00PM</td>
                <td><button>View</button></td>
              </tr> -->
            </tbody>
          </table>
        </div>
      </section>
    </section>
  </div>
   
   <!--Form-->
     <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRar5hSPtj7GXT75b-GcZQ7z-S48Rx3PCMuDCx0yBSb9DAachiqeNo2eCapPXgMBmnVJQkj1CFHfsiU/pubhtml?widget=true&amp;headers=false" style="border:none;" height="1000pc" width="100%"></iframe>

<!--footer-->   
   <style>
  footer {
  text-align: center;
  color: white;
  padding: 3px;
  background-color: black;
  
}
</style>
    <footer>
  <p style="font-family: ;tajawal">Developed By : VBLAZE<br>
 <center> <a href="stmvblaze@gmail.com">stmvblaze@gmail.com</a></p><center>
</footer>

      <!-- Swiper JS -->
      <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 5,
    spaceBetween: 30,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>



<!--test>
   <div class="dashboardContainer">
      <div class="avatar">
         <img src="avatar.png">
      </div>
      <div class="welcomeMessage">
         <i>Hey</i> <b><?php echo $name ?></b>, welcome to my website
      </div>
      <div class="notes">
         You can modify this page by editing the file 'dashboard.php'
         <iframe src="/default.html" width="100%" height="300" style="border:1px solid black;">
         </iframe>
      </div>
      <a href="logout.php">Logout</a>
<test-->      
</body>
</html>
