
<?php 
include '../../../sqlcon_sesSt/sessionSt.php';
include '../../../sqlcon_sesSt/sqlconn.php';
$studentname = $_SESSION['username'];

?>
<link rel="stylesheet" href="dynamichero/css/myprofil.css" >

<div class="maincontent m-4 col-xl-8 " data-aos="zoom-in" data-aos-delay="10">
<div class="top1-left col-xxl-6  col-sm-12 col-l-12  ">
   <p>Nice to have you back , what
an exiting day . Get ready and
continue your lesson today</p>
</div>
<div class="top1-right card col-6  rounded ml-4">
<div class="rectangle d-flex flex-column px-4 ">



<?php
$tabledata = ' SELECT * FROM     '.$studentname  ;
$query = $conn->query($tabledata);
?>
<?php 
 while($row = mysqli_fetch_assoc($query)) {
  ?>
  <?php
//  echo($row['badges'] )  ;
$course1 = $row['selected_courses'] ;
$points1 = $row['points'] ;
 
?>

<div class="d-flex align-items-center " data-aos="zoom-in" data-aos-delay="10">
  <div class="rounded-circle text-center p-2">
<img src="dynamichero/assets/medal.png" alt="" width="50%" class="img-fluid">
  </div>
  <div class="sec1">
    <h1>xp<?php echo $points1 * 7.43 ; ?></h1>
    <p><?php echo $course1 ; ?></p>
  </div>
</div>

<?php

}
  ?>

</div>
</div>
<?php
$tabledata = ' SELECT * FROM     '.$studentname  ;
$query = $conn->query($tabledata);
?>

<?php 
 while($row = mysqli_fetch_assoc($query)) {
  ?>


  <?php
$course = $row['selected_courses'] ;
$progress = $row['course_progress'] ;
$servertime = $row['total_server_time'] ;
$answered_cards = $row['answered_cards'] ;
$points = $row['points'] ;
$badges = $row['badges'] ;
?>

<div class="card middle1  mt-4 text-white d-flex align-items-center flex-m-column">
<div class="d-flex  align-items-center mx-xl-5  px-xl-1" >
<div class="rounded-circle text-center p-2 m-4">
<img src="dynamichero/assets/book.png" alt="" width="100%" class="img-fluid">
      </div>
      <div class="d-flex flex-column">
<h2 class="mr-4"><?php echo $course ;  ?></h2>
<button class="btn btn-info"> <a href="<?php echo $course ;  ?>.php" class="link text-light"> Continue lesson.. </a> </button>
</div>
</div>
<div class="text-secondary  align-items-center  mx-5">

<div class="top d-flex" >
<p>Points:<span><?php echo $points ;  ?></span></p>
<span> &nbsp;  &nbsp;</span>
<p>Badges:<span><?php echo $badges ;  ?></span></p>
</div>
<div>
<div class="m-1">Progress:&nbsp;&nbsp;<?php echo $progress ;  ?> %</div>
<div class="progress ">
<div class="progress-bar " role="progressbar" style="width: <?php echo $progress;?>%;color:black;" aria-valuenow="<?php echo $progress ;  ?>%" aria-valuemin="0" aria-valuemax="100"> </div>
</div>
</div>

</div>
<div class="ml-4 more">
<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
<path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
</svg>
</div>

</div>




<?php
}
  ?>



<button class="mini p-2 m-5 btn btn-default" id='mini' onclick='add()' >+ Add more Courses</button>
<hr class="bg-secondary">
  </div>

  <?php
$tabledata = ' SELECT * FROM     '.$studentname  ;
$query = $conn->query($tabledata);
?>

<?php 
 while($row = mysqli_fetch_assoc($query)) {
  ?>


  <?php
$course = $row['selected_courses'] ;
$progress = $row['course_progress'] ;
$servertime = $row['total_server_time'] ;
$answered_cards = $row['answered_cards'] ;
$points = $row['points'] ;
$badges = $row['badges'] ;
?>



<div class="d-flex flex-column">
<div class="maincontent-right card  col-3 d-flex flex-column align-items-center justify-content-center " >
    <h3 class="m-2" data-aos="zoom-in" data-aos-delay="10"><?php echo $course ;  ?></h3>
    <div class="m-4 d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="10">
      <div class="rounded-circle  align-items-center text-center p-2">
<img src="dynamichero/assets/medal.png" alt="" width="50%" class="img-fluid">
      </div>
      <div class="sec1">
        <p>Exercise completed :<span>4</span></p>
        <p>Badges earned :<span><?php echo $badges ;  ?></span></p>
      </div>
      <div class="sec2 text-center d-flex flex-column align-items-center">
        <h3>Scores claimed</h3>
                <!-- Progress bar 1 -->
        <div class="progress mx-auto" id='wheel1' data-value='80'>
          <span class="progress-left">
                        <span class="progress-bar border-primary"></span>
          </span>
          <span class="progress-right">
                        <span class="progress-bar border-primary"></span>
          </span>
          <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
            <div class="h2 font-weight-bold"><span class="tier1"> 0 </span> <span class="small">%</span></div>
          </div>
        </div>
     </div>  
 </div>
 </div>


<?php
}
  ?>
</div>