


<?php
include '../actions/getpageurl.php';
include '../../../sqlcon_sesSt/sessionSt.php';
include '../../../sqlcon_sesSt/sqlconn.php';
$email = $_SESSION['email'];
$studentname = $_SESSION['username'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta name='description' >
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script  defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
<link rel='stylesheet' href='programme.css'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>video</title>
</head>
<body class='container-fluid text-center'>
    

<h1>Adding three digit numbers </h1>
<div class='myexercise message' call_type='video'></div>

<video id='currentvid' class=' img-fluid col' height='250' onload='myvid(this)' controls autoplay>
<source type='video/mp4' src='../class5-items/class5-v1-Adding three digit numbers with regrouping _ Addition and subtraction _ Arithmetic.mp4'>
</video>

<script src='../jquery.js'></script>
<script>
    let ex 
   let pageurl = '<?php echo  $app_url ?>/'
   let email = '<?php echo  $email ?>';
   let studentname = '<?php echo  $studentname ?>';
   let classname = 'class5'
   let coursename = 'class5'
   let videoname = 'video1'
let getajaxfrom = '../actions/getprogress.php'

var calltype = $(".myexercise").attr('call_type') 

console.log(videoname)

//checking user selected video is already answered by user
let result 

$.getJSON(pageurl+getajaxfrom , { calltype:calltype,
     studentmail:email ,
      studentname:studentname,
      classname:classname ,
      exercise:ex,
      videoname:videoname
    },
 
  function(data,textstatus,xhr){
    let newarray = data.progress
    console.log(newarray)
    if(result = newarray.includes(videoname)){  
      result = 1 
      console.log(result)
    }else{//if not inserting video to database

        $.getJSON(pageurl+getajaxfrom , { 
      exercise:ex ,  //insert points
      cardname:videoname ,
       studentname:studentname,
       classname:classname
     },
  
   function(data,textstatus,xhr){
   console.log(data.progress)
   console.log(data.url)

       }); 






    };
      });
























    function myvid(e) {
let vid = document.querySelector('#currentvid')
let currenttime = vid.currentTime
let endtime=vid.duration
if(currenttime>=endtime){
     loadnextcontent(vid)
}

    }
 let check =   setInterval(() => {
       myvid()
    }, 
    10);

    function loadnextcontent(vid){
        $.getJSON(pageurl+getajaxfrom , { calltype:"insert",
      exercise:ex ,  //insert points
      cardname:videoname
      ,
       studentname:studentname,
       classname:classname
     },
  
   function(data,textstatus,xhr){
   console.log(data.progress)
   console.log(data.url)

       }); 
        window.location.replace(pageurl + 'programme2.php')

clearInterval(check)
    }

</script>
<script src='../actions/changemyurl.js'></script>
</body>
</html>