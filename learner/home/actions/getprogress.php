    <?php


include '../../../sqlcon_sesSt/sqlconn.php';
include '../../../sqlcon_sesSt/sessionSt.php';

$studentname = $_SESSION['username'] ;



$student=$_GET['studentname'];
$class = $_GET['classname'];





$sql = 'SELECT * FROM '.$student.' WHERE  selected_courses = "'.$class.'" ' ;

$query = $conn->query($sql);
$row = mysqli_fetch_assoc($query);


// if(isset($_GET['insert'])){

//    $cardname =  $_GET['exercise'];

//     $insertData ="UPDATE  `jojo` SET answered_cards = kjhvjh " ;
//     $shootTable =$conn->query($insertData);

//    $answeredcards =$row;

// echo json_encode( array(
//     'answeredcards'=> '$answeredcards'
// ));

// }



if(isset($_GET['calltype'])){
    
$calltype=$_GET['calltype'];


switch($calltype){
case 'exercise1':

 
    

    echo json_encode(array(
        'status' => 'succes',
        'progress' => "{".$row['answered_cards']."}",
        'description' => 'dd',
        'url' => 'c-5-sec1/'.$calltype.'.php',
        'data' => 'loaded',
       'location'=>'c-5-sec1/'.$calltype.'.php',
      
    
    ));
    break;
    case 'insert':
        $points =  $_GET['exercise'];
        $cardname =  $_GET['cardname'];


        $insertData ='UPDATE '.$student.' SET answered_cards=CONCAT(answered_cards, ",",  "'.$cardname.'"    "," "'.$points.'" ) ;' ; //inserting ito answered cards
        $shootTable =$conn->query($insertData);
       
        

        $insertData ='UPDATE '.$student.' SET points =CONCAT(points +  "'.$points.'"    ) ;' ; //inserting into  points
        $shootTable =$conn->query($insertData);
       


        echo json_encode(array(
            'status' => 'succes',
            'progress' => "{".$row['answered_cards']."}",
            'description' => "",
            'url' =>"" ,
            'data' => 'loaded',
           'location'=>'c-5-sec1/'.$calltype.'.php',
          
        
        ));
        break;

  
} ;
}

?>


