



<?php
include '../../../sqlcon_sesSt/sessionSt.php';
include '../../../sqlcon_sesSt/sqlconn.php';


$studentname = $_SESSION['username'];
$createTable ='CREATE TABLE IF NOT EXISTS '.$studentname.' '.' (id int NOT NULL AUTO_INCREMENT ,selected_courses VARCHAR(255),course_progress VARCHAR(30), total_server_time VARCHAR(30) ,`answered_cards` VARCHAR(255),points VARCHAR(255),badges VARCHAR(255) ,scores VARCHAR(255),xp VARCHAR(255),PRIMARY KEY(id) ) ' ;
$shootTable =$conn->query($createTable);





if(isset($_GET['proceed'])){  //insert course details
       $coursename =  $_GET['coursename'];
       $table = "SELECT * FROM  $studentname  WHERE   selected_courses = '$coursename' ";

      $result =($conn->query($table));


        if($result->num_rows<1){
            // insert  whatever course he/she selects ....
    $insertData ="INSERT INTO ".$studentname." "." (`selected_courses`, `course_progress`, `total_server_time`, `answered_cards` ,  `points` , `badges`) VALUES ('$coursename','0','0','ex:0','0' , '0')" ;
    $shootTable =$conn->query($insertData);
    $email = $_SESSION['email'];
        }
 echo json_encode(array(
        'status' => 'succes',
        'title' => '',
        'description' => '',
        'checkifuserexists' =>"",
        'data' => 'loaded',
       'location'=>""
 ));
}
if(isset($_GET['calltype'])){
$calltype=$_GET['calltype'];
switch($calltype){
case 'programme1':
    echo json_encode(array(
        'status' => 'succes',
        'title' => 'video1',
        'description' => 'Adding three digit numbers with regrouping _ Addition and subtraction _ Arithmetic',
        'url' => 'c-5-sec1/'.$calltype.'.php',
        'data' => 'loaded',
       'location'=>'c-5-sec1/'.$calltype.'.php'
    
    ));
    break;
    case 'programme2':
        echo json_encode(array(
            'status' => 'succes',
            'title' => 'video1',
            'description' => 'Adding three digit numbers with regrouping _ Addition and subtraction _ Arithmetic',
            'url' => 'c-5-sec1/'.$calltype.'.php',
            'data' => 'loaded',
           'location'=>'c-5-sec1/'.$calltype.'.php' 
         
        ));
        break ;
        case 'programme3':
            echo json_encode(array(
                'status' => 'succes',
                'title' => 'video1',
                'description' => 'Adding three digit numbers with regrouping _ Addition and subtraction _ Arithmetic',
                'url' => 'c-5-sec1/'.$calltype.'.php',
                'data' => 'loaded',
               'location'=>'c-5-sec1/'.$calltype.'.php'
            
            ));
            break ;
            case 'programme4':
                echo json_encode(array(
                    'status' => 'succes',
                    'title' => 'video1',
                    'description' => 'Adding three digit numbers with regrouping _ Addition and subtraction _ Arithmetic',
                    'url' => 'c-5-sec1/'.$calltype.'.php',
                    'data' => 'loaded',
                   'location'=>'c-5-sec1/'.$calltype.'.php'
                
                ));
                break ;
                case 'programme5':
                    echo json_encode(array(
                        'status' => 'succes',
                        'title' => 'video1',
                        'description' => 'Adding three digit numbers with regrouping _ Addition and subtraction _ Arithmetic',
                        'url' => 'c-5-sec1/'.$calltype.'.php',
                        'data' => 'loaded',
                       'location'=>'c-5-sec1/'.$calltype.'.php'
                    
                    ));
                    break ;
                    case 'deleteaccount':
                        echo json_encode(array(
                            'status' => 'succes',
                            'title' => 'video1',
                            'description' => 'Adding three digit numbers with regrouping _ Addition and subtraction _ Arithmetic',
                            'url' => 'settingsOptions/'.$calltype.'.php',
                            'data' => 'loaded',
                           'location'=>'settingsOptions/'.$calltype.'.php'
                        
                        ));
                        break ;
                          case 'privacycontrols':
                            echo json_encode(array(
                                'status' => 'succes',
                                'title' => 'video1',
                                'description' => 'Adding three digit numbers with regrouping _ Addition and subtraction _ Arithmetic',
                                'url' => 'settingsOptions/'.$calltype.'.php',
                                'data' => 'loaded',
                               'location'=>'settingsOptions/'.$calltype.'.php'
                            
                            ));
                            break ;
                             case 'privacycontrols':
                            echo json_encode(array(
                                'status' => 'succes',
                                'title' => 'video1',
                                'description' => 'Adding three digit numbers with regrouping _ Addition and subtraction _ Arithmetic',
                                'url' => 'settingsOptions/'.$calltype.'.php',
                                'data' => 'loaded',
                               'location'=>'settingsOptions/'.$calltype.'.php'
                            
                            ));
                            break ;
} ;
}



// if ($result = $mysqli->query("SHOW TABLES LIKE '".$table."'")) {
//     if($result->num_rows == 1) {
//         echo "Table exists";
//     }
// }
// else {
//     echo "Table does not exist";
// }

if(isset($_GET['checkifuserexists'])){
$table = "SELECT * FROM $studentname  ";
   if($result =($conn->query($table))){
    if($result->num_rows>=1){

    echo json_encode(array(
         'checkifuserexists' =>true

));
}else{

    echo json_encode(array('checkifuserexists' =>false));

   }

   }
}



if(isset($_GET['getcarddata'])){
    
    $class = $_GET['coursename'];

if(isset($_GET['updateprogress'])){
    $progress =  $_GET['updateprogress'] ;
    $insertData ='UPDATE '.$studentname.' SET course_progress =  "'.$progress.'"  WHERE   selected_courses = "'.$class.'"   ' ;
    $shootTable =$conn->query($insertData);
}
    //insert selected course into table with user name
$sql = "SELECT * FROM  $studentname  WHERE   selected_courses = '$class' ";
$query = $conn->query($sql);
$row = mysqli_fetch_assoc($query);

$table = "SELECT * FROM  $studentname ";

   if($result =($conn->query($table))){
    if($result->num_rows>=1){

    echo json_encode(array( 'checkifuserexists' =>true, 
    'completedCards' => $row['answered_cards'],
    'studentname'=> $studentname 
  ));
}else{
    echo json_encode(array('checkifuserexists' =>false));
   }

   }
}


// if(isset($_GET['checkforexistinguser'])){



// }



?>