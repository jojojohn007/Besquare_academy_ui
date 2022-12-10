<?php
include '../sqlcon_sesSt/sqlConn.php';


if(isset($_POST['student'])){
  
$username = $_POST['firstname'];

$email = $_POST['email'] ;
$number = $_POST['mNumber'];
$password = password_hash($_POST['password'],PASSWORD_DEFAULT);

echo $username;

// $dataselect = 'SELECT * FROM students WHERE student_name="'.$username.'"   ' ;
// $check=$conn->query($dataselect);
// $row = mysqli_fetch_assoc($check);







 if( $username) {
    
    $insertData ="INSERT INTO `students`( `student_name`, `student_Mnumber`, `email`, `password` , `progress`) VALUES ('$username','$number','$email','$password' , 
   'null'  )" ;
    echo $insertData;
$sql = $conn->query($insertData);
    header("location:../login.html");
}



}

//teacher

if(isset($_POST['teacher'])){
    echo 'hiii' ;
    $username = $_POST['firstname'];
    $email = $_POST['email'] ;
    $number = $_POST['mNumber'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    
    
    
    // $dataselect = 'SELECT * FROM teachers WHERE teacher_name="'.$username.'"   ' ;
    // $check=$conn->query($dataselect);
    // $row = mysqli_fetch_assoc($check);
    
  
    
 if( !$username== NULL) {
        $insertData ="INSERT INTO `teachers`( `teacher_name`, `teacher_Mnumber`, `email`, `password`) VALUES ('$username','$number','$email','$password')" ;
    $sql = $conn->query($insertData);
        header("location:../teacher/teacherSignin.php");
    }
    
    
  
    }

    
//parent

if(isset($_POST['parent'])){
    echo 'hiii' ;
    $username = $_POST['firstname'];
    $email = $_POST['email'] ;
    $number = $_POST['mNumber'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    
    
    
    // $insertData = 'INSERT INTO  `students_details` VALUES ( , name="'.$username.'" , profile = "none" ,email="'.$email.'" , sap_id="'.$sapId.'" , cgpa = "'.$cgpa.'" , contact = "'.$contact.'" , password = "'.$password.'" ) ';
    $dataselect = 'SELECT * FROM parents WHERE parent_name="'.$username.'"   ' ;
    $check=$conn->query($dataselect);
    $row = mysqli_fetch_assoc($check);
    
    
    
    
    $_SESSION['myname'] = "" ;
    $_SESSION['emptymsg'] = "";
    
    
    
    
 if( !$username== NULL) {
        $insertData ="INSERT INTO `parents`( `parent_name`, `parent_Mnumber`, `email`, `password`) VALUES ('$username','$number','$email','$password')" ;
    $sql = $conn->query($insertData);
        header("location:../parent/parentSignin.php");
    }
    
    
 
    }
    
 
    

?>