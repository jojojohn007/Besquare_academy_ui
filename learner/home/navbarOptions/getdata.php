<?php

include '../../../sqlcon_sesSt/sessionSt.php';
include '../../../sqlcon_sesSt/sqlconn.php';
include '../actions/getpageurl.php' ;
$studentname= $_SESSION['username'] ;



if (isset($_GET['classname'])){


$classname = $_GET['classname'] ;

    $data = 'SELECT * FROM '.$studentname.' WHERE selected_courses ="'.$classname.'"  ';
    $query = $conn->query($data);
    $row = mysqli_fetch_assoc($query);


   $cardcount =  $row["totalcards"];
  echo json_encode(array( 
    'status'=>'yess' ,
    'answeredcardcount'=>$row['answered_cards'] ,
 'cardcount'=> $cardcount 
));
}

?>