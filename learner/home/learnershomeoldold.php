
<?php
  include 'learnerheader/frameworks.php';
include '../../sqlcon_sesSt/sqlconn.php';
$studentname = $_SESSION['username'];
  
  if(! $_SESSION['username']){
    header("location:../../index.php") ;

  }

$username = $_SESSION['username'];
include 'actions/getpageurl.php';
$studentname = $username;

// $sql = 'SELECT * FROM '

?>

<?php


$tabledata = ' SELECT * FROM     '.$studentname  ;
$query = $conn->query($tabledata);


// $rowcount = mysqli_num_rows($query);
// $row = mysqli_fetch_assoc($query);


// var_dump($row);




 $row = mysqli_fetch_assoc($query) ;

  


  
//  echo($row['badges'] )  ;
$course = $row['selected_courses'] ;
$progress = $row['course_progress'] ;
$servertime = $row['total_server_time'] ;
$answered_cards = $row['answered_cards'] ;
$points = $row['points'] ;
$badges = $row['badges'] ;

?>

 <head>


<style>
  body {
    background-color:#ACAAAA !important;

  }
  p{
    margin-top:0px  !important;
    margin-bottom:0px  !important;

    padding:0 !important;
  }
  #hero {
    width:unset !important ;
    height: auto !important ;
  }
.navtext {
  cursor: pointer;
}

.newdiv {
  position:relative;
}
.onetimecontent {
  border-radius:3px;
  border:3px solid grey;
}

.navbar {
  flex:0 !important;
}
.block {

  margin:10px 20px 10px 20px;
}
.navtext {
  width: max-content;
}

.block {
  display:flex;
  justify-content:center;
}

.blockwrap {
  flex-wrap:wrap;

}

.onetimecontent p {
width:max-content;
margin:0px;
margin-left:10px ;
margin-right:20px;
}
.ml-4 {
  margin-left:auto;
}
.quickdetails{
  background-color:#F7F5F5;
}
.right p {
margin:auto;
  margin-left:10px;
  padding:0;
}
.right {
  height:max-content;
}


/* progressbar */
.sec2 .progress {
  width: 130px;
  height: 130px;
  background: none;
  position: relative;
}

.sec2 .progress::after {
  content: "";
  width: 100%;
  height: 100%;
  border-radius: 50%;
  border: 6px solid #eee;
  position: absolute;
  top: 0;
  left: 0;
}

.sec2 .progress>span {
  width: 50%;
  height: 100%;
  overflow: hidden;
  position: absolute;
  top: 0;
  z-index: 1;
}

.sec2 .progress .progress-left {
  left: 0;
}

.sec2 .progress .progress-bar {
  width: 100%;
  height: 100%;
  background: none;
  border-width: 6px;
  border-style: solid;
  position: absolute;
  top: 0;
}

.sec2 .progress .progress-left .progress-bar {
  left: 100%;
  border-top-right-radius: 80px;
  border-bottom-right-radius: 80px;
  border-left: 0;
  -webkit-transform-origin: center left;
  transform-origin: center left;
}

.sec2 .progress .progress-right {
  right: 0;
}

.sec2 .progress .progress-right .progress-bar {
  left: -101%;
  border-top-left-radius: 80px;
  border-bottom-left-radius: 80px;
  border-right: 0;
  -webkit-transform-origin: center right;
  transform-origin: center right;
}

.sec2 .progress .progress-value {
  position: absolute;
  top: 0;
  left: 0;
}

/*
*
* ==========================================
* FOR DEMO PURPOSE
* ==========================================
*
*/



.sec2 .rounded-lg {
  border-radius: 1rem;
}

.sec2 .text-gray {
  color: #aaa;
}

.sec2 div.h4 {
  line-height: 1rem;
}


.navbar {
    padding: 0;
    /* float: left; */
    flex: 1;
    flex: 2;
    display: flex;
    justify-content: flex-end;
  }
  header {
    background-color: #2D4593;
    
}

.sidebar {
  width:max-content !important;
  background-color:white;
}
.navbar       {
  background:unset !important;
}
.navtext {
  text-align:end;
}

.navtext p {
  margin: 20px 0px 20px 0px !important;
  font-size:16px !important;


}
h2 {
  margin: 20px 0px 20px 0px !important;

  font-size:18px !important;
  color:#5C616E !important;

}
  
.sidebarsets {
  display:flex;
  justify-content:space-around;
}
.sidebarsets img {
  margin:0px !important;
}

</style>



 <!-- Favicons -->
 <link href="../../assets/img/favicon.png" rel="icon">
 <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
 <!-- Google Fonts -->
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

 <!-- Vendor CSS Files -->
 <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">
 <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
 <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
 <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
 <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
 <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

 <!-- Template Main CSS File -->
 <link href="../../assets/css/style.css" rel="stylesheet">




    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
   
<header id="header" class="fixed-top ">
    <div class="container navwrap d-flex align-items-center ">
      <div class="d-flex">
		<img class=" text-white mx-3 " width="30px" height="30px" src="../../assets/squares.png" alt="logo">
		<p class="text-white logo"></p>
      <h4 class="logo  text-white ">Be-Square Academy</h4>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="dynamichero/assets/img/logo.png" alt="" class="img-fluid"></a>-->
    </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link  active" href="#hero">Home</a></li>
          <li class="dropdown"><a href="#"><span>Courses</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"> <a href="#"><span>Middle school </span><i class="bi bi-chevron-right"></i> </a>
                <ul>
                  <li><a href="#">class 1</a></li>
                  <li><a href="#">Class 2</a></li>
                  <li><a href="#">class 3</a></li>
                  <li><a href="#">Class 4</a></li>
                  <li><a href="class5.php">class 5</a></li>
                  <li><a href="#">Class 6</a></li>
                  <li><a href="#">class 8</a></li>
                  <li><a href="#">Class 8</a></li>
                  <li><a href="#">class 9</a></li>
                  <li><a href="#">Class 10</a></li>
                </ul>
              </li>

              <li class="dropdown"><a href="#"><span>Higher secondary</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Plus 1</a></li>
                  <li><a href="#">Plus 2</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a class="nav-link " href="navbarOptions/status.php">Status</a></li>
          <li><a class="nav-link" href="navbarOptions/settings.php">Settings
          </a></li>
          <li><a class="nav-link   "  href='../../sqlcon_sesSt/sessionDy.php'>Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>     
       </nav>
       <!-- .navbar -->
    </div>
  </header>

 

<!-- banner -->
  

<section id="hero">
<div class="sidebar mx-5  mt-5">
<div class="navtext container">
        <h2>My Course</h2>

        <div class="sidebarsets">
          <img src="dynamichero/assets/sidebaricons/progress.svg" alt="" srcset="">
          <p id='progress'>Progress</p>
        </div>

        <div class="sidebarsets">
        <img src="dynamichero/assets/sidebaricons/badges.svg" alt="" srcset="">
        <p id='badges'>Badges</p>
        </div>
        <h2 >My account</h2>
        <div class="sidebarsets">
        <img src="dynamichero/assets/sidebaricons/myprofile.svg" alt="" srcset="">
        <p id='myprofile' class='active'>My profile</p>
       </div>
       <div class="sidebarsets">
       <img src="dynamichero/assets/sidebaricons/teachers.svg" alt="" srcset="">
        <p id='teachers'>Teachers</p>
        </div>
      </div>
      <i class="bi bi-list mobile-nav-toggle"></i> 
    </div>
</div>  



</section>

<footer id="footer mb-2">
  <div class="footer-top ">
    <div class="container-fluid bg-secondary text-light py-4">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-contact">
          <h3>Be-square academy</h3>
          <p>Be square academy is a non profit organisation</p>
          <br>
          <p>Our mission is to provide free education all around the world</p>
          <br>
          <p>
            A108 Adam Street <br>
            New York, NY 535022<br>
            United States <br><br>
            <strong>Phone:</strong> +1 5589 55488 55<br>
            <strong>Email:</strong> be-square@gmail.com<br>
          </p>
        </div>

        <div class="col-lg-3 col-md-6 footer-links ">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Contact us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Courses for</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">middle school</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">class 1-10</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Higher secondary</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Our Social Networks</h4>
          <div class="social-links mt-3">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="container-fluid bg-light footer-bottom my-5 clearfix ">
    <div class="copyright">
      &copy; Copyright <strong><span>Besquare academy | Terms of use | Privacy policy | Cookies</span></strong>.
    </div>
  </div>
</footer>



<script src='../../frameworks/jquery.js'></script>
<script>


</script>
<?php

// if user acess this particular file without login user gets redirected to login page
// if(!isset($_SESSION['username'])){
//   header('../../sqlcon_sesSt/sessionSt.php'); 
// }
?>


   <!-- Vendor JS Files -->
   <script src="../../assets/vendor/aos/aos.js"></script>
     <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
     <script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>
     <script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
     <script src="../../assets/vendor/swiper/swiper-bundle.min.js"></script>
     <script src="../../assets/vendor/waypoints/noframework.waypoints.js"></script>
     <script src="../../assets/vendor/php-email-form/validate.js"></script> 
   
     <!-- Template Main JS File -->
     <script src="../../assets/js/main.js"></script>
<script>
  //  var coursename = document.myform.class.value
function course(){
 let coursename = document.myform.class.value
if(coursename){
  startcourse(coursename)
  $('.navcontentload').load('./dynamichero/progress.php')
}
}

function add(){
  $('.navcontentload').load('./dynamichero/startcourse.php')
}



var pageurl = '<?php echo $app_url; ?>/'; 
      console.log(pageurl)
      var getajaxfrom = 'actions/ajax.php'






$(document).ready(function(){

$.getJSON(pageurl + getajaxfrom , 
  {checkifuserexists:"yes" },function(data){
    console.log(data.checkifuserexists + 'huu')

    if(data.checkifuserexists){   


      console.log(data.currentclass)
      $(document).ready(function(){

  // dynamichero


  $('.navcontentload').load('./dynamichero/myprofile.php')
    $('#progress').click(function(){
      console.log('hii')
   $('.navcontentload').load('./dynamichero/progress.php')
    })
    $('#badges').click(function(){
        $('.navcontentload').load('./dynamichero/badges.php')
    })
    $('#myprofile').click(function(){
        $('.navcontentload').load('./dynamichero/myprofile.php')
    })
    $('#teachers').click(function(){
        $('.navcontentload').load('./dynamichero/teachers.php')
    })
    $('#mini').click(function(){
      console.log('hiiiee')
        $('.navcontentload').load('./dynamichero/startcourse.php')
    })
})
      //dont show box if user started this course

    }else{
      console.log('hi')
      let navcontent = document.querySelector('.navcontentload')
$('.navcontentload').load('./dynamichero/startcourse.php')
    }
      });
    });
    let completedpercentage = '<?php echo $progress;?>';
    
</script>
<script src='actions/change_url.js'>
</script>
<!-- progress bar  -->
<script src='actions/learnershomeprogressbar.js'></script>
</body>
</html>