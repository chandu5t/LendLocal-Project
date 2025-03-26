<?php 

//include 'asconnect.php';

$host="localhost";
$user="root";
$pass="";
$db="lendlocal";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}



if(isset($_POST['signUp'])){
    $Full_name=$_POST['Full_name'];
    $Email=$_POST['Email'];
    $Phone=$_POST['Phone'];
    $DOB=$_POST['DOB'];
    $Address=$_POST['Address'];
    $User_name=$_POST['User_name'];
    $Password=$_POST['Password']; 
    $Password=md5($Password);
    $Security_Que=$_POST['Security_Que'];
    $User_preference=$_POST['User_preference'];

     $checkEmail="SELECT * From user where Email='$Email'";
     $result=$conn->query($checkEmail) or die("Query Fail.");
     if($result->num_rows>0){
        echo "Email Address Already Exists !";
     }
     else{
        $insertQuery="INSERT INTO user(Full_name,Email,Phone,DOB,Address,User_name,Password,Security_Que,User_preference)
                       VALUES ('$Full_name','$Email',{$Phone},'$DOB','$Address','$User_name','$Password','$Security_Que','$User_preference')";
            if($conn->query($insertQuery)==TRUE){
                header("location: 4login.php");
            }
            else{
                echo "Error:".$conn->error;
            }
     }
   

}

if(isset($_POST['signIn'])){
   $Email=$_POST['Email'];
   $Password=$_POST['Password'];
   $Password=md5($Password) ;
   
   $sql="SELECT * FROM User WHERE Email='{$Email}' AND Password='{$Password}'";
   $result = mysqli_query($conn,$sql) or die("Query Failed .");
   //$result=$conn->query($sql);
   //if($result->num_rows>0)
   if(mysqli_num_rows($result)>0)
   {
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['Email']=$row['Email'];
    header("Location: index11.html");
    exit();
   }
   else{
    echo "Not Found, Incorrect Email or Password";
   }

}


?>