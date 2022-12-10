<?php  include '../../frameworks/bootstrap.php'; 
include 'actions/getpageurl.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='description' >
    <title>class5</title>
    <script src='jquery.js'></script>
 <style>
  .dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.startcourse {
  display:none;
 
}
.showup {
  position:relative;
  animation-name:showup;
  animation-duration:2s;
}
@keyframes showup {
  0% {top:-100px;opacity:.0;};
  100% {top:100px;opacity:.9;};

}
 </style>

</head>
<body class='container-fluid'>
  <header class='header'><nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">logo </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../home/learnershome.php">Home </a>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link " href="#">Select course </a>
      <ul class='dropdown-content'>
        <li>  <a class="nav-link" href="#">class 1 </a></li>
        <li>  <a class="nav-link" href="#">class 2 </a></li>
        <li>  <a class="nav-link" href="#">class 3 </a></li>
        <li>  <a class="nav-link" href="#">class 4 </a></li>
        <li>  <a class="nav-link" href="#">class 5 </a></li>
      </ul>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#">status</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">settings</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href='../../sqlcon_sesSt/sessionDy.php'>logout</a>
      </li>
    </ul>
  </div>
</nav>
 </header>
 <div class="border border-primary rounded p-3 w-15  " > 
  <span class=" rounded bg-secondary text-white mx-2" >progress:0%</span><span class=" rounded bg-secondary text-white mx-2">points:0/100</span></div>

 <div class='col-12 bg-info text-center startcourse'>
  <p class=' mx-2 d-inline-block text-white' >start your course..</p> 
 <button onclick='startcourse(this)' class='py-auto btn btn-danger mx-2 my-0' >start now</button>
 <button onclick='skip()' class='py-auto my-0 mx-2 btn btn-danger'>skip</button></div>
 <section class='row'>
    <h2>Multi-digit addition</h2>
<div class='col-sm-3  prg' call_type='programme1'  >
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="class5-items/cardprofiles/numbers.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
<div class='col-sm-3 prg' call_type='programme2' >
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="class5-items/cardprofiles/exercise.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
<div class='col-sm-3 prg' call_type='programme3' >
<div class="card" style="width: 18rem;">
  <img class="card-img-top " src="class5-items/cardprofiles/exercise.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>

<div class='col-sm-3  prg' call_type='programme4' >
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="class5-items/cardprofiles/exercise.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>

<div class='col-sm-3 mt-5 prg ' call_type='programme5' >
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="class5-items/cardprofiles/exercise.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>

</section>
  <hr>
  <section class='row'>
    <h2>Multi-digit addition</h2>
<div class='col-sm-3  prg' call_type='programme6'  >
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="class5-items/cardprofiles/numbers.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
<div class='col-sm-3 prg' call_type='programme7' >
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="class5-items/cardprofiles/exercise.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
<div class='col-sm-3 prg' call_type='programme8' >
<div class="card" style="width: 18rem;">
  <img class="card-img-top " src="class5-items/cardprofiles/exercise.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>

<div class='col-sm-3  prg' call_type='programme9' >
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="class5-items/cardprofiles/exercise.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>

<div class='col-sm-3 mt-5 prg ' call_type='programme10' >
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="class5-items/cardprofiles/exercise.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>

</section>
</body>
<script defer>  

  var pageurl = '<?php echo $app_url; ?>/'; 
  console.log(pageurl)
  var getajaxfrom = 'actions/ajax.php'
  var coursename = 'class5'
</script>
<script src='actions/changeurl.js'>
</script>
</html>