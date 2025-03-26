<?php

$host="localhost";
$user="root";
$pass="";
$db="lendlocal";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}


///  row code 

// $sql ="SELECT * FROM `User`";

// $result = mysqli_query($conn,$sql);

// $num = mysqli_num_rows($result);

// echo " Number of records in users table =  ".$num;
// echo "<br>";
// echo "<br>";

// if($num>0){
//     // without loop print 
//     $row = mysqli_fetch_assoc($result);
//     echo var_dump($row);

//     // with loop print 
//     while($row = mysqli_fetch_assoc($result)){
//         echo "<br>";
//         echo var_dump($row);

        
//     }

// }



?>


