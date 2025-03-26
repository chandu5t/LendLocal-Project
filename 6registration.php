<?php 

include 'asconnect.php';

if(isset($_POST['signUp'])){
    $Full_name=$_POST['Full_name'];
    $Email=$_POST['Email'];
    $Phone=$_POST['Phone'];
    $DOB=$_POST['DOB'];
    $Address=$_POST['Address'];
    $User_name=$_POST['User_name'];

    $Password = $_POST['Password'] ; 
    // $Password=md5($Password);
    $Security_Que=$_POST['Security_Que'];
    $User_preference=$_POST['User_preference'];

     $checkEmail="SELECT * From user where Email='$Email'";
     $result=$conn->query($checkEmail) or die("Query Fail.");
     if($result->num_rows>0){
        echo "Email Address Already Exists !";
     }
     else{
        $insertQuery="INSERT INTO user(Full_name,Email,Phone,DOB,Address,User_name,Password,Security_Que,User_preference)
                       VALUES ('$Full_name','$Email','$Phone','$DOB','$Address','$User_name','$Password','$Security_Que','$User_preference')";
            if($conn->query($insertQuery)==TRUE){
                header("location: 4login.php");
            }
            else{
                echo "Error:".$conn->error;
            }
     }
   

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LendLocal - Common Information Form</title>
    <link rel="stylesheet" href="7registration.css">
    <link rel="icon" href="favicon 192.png" type="image/x-icon">

</head>
<body>

    <div class="container" id="signup" >
        <h1>Common Information Form</h1>
        <form method="post" id="commonInfoForm"action="<?php $_SERVER['PHP_SELF'];?>">
            <h2>Personal Information</h2>
            <label for="Full_name">Full Name:</label>
            <input type="text" id="Full_name" name="Full_name" required>

            <label for="Email">Email Address:</label>
            <input type="email" id="Email" name="Email" required>

            <label for="Phone">Phone Number:</label>
            <input type="tel" id="Phone" name="Phone" required>

            <label for="DOB">Date of Birth:</label>
            <input type="Date" id="DOB" name="DOB" required>

            <label for="Address">Physical Address:</label>
            <input type="text" id="Address" name="Address" required>

            <h2>Account Information</h2>
            <label for="Username">Username:</label>
            <input type="text" id="Username" name="User_name" required>

            <label for="Password">Password:</label>
            <input type="password" id="Password" name="Password" required>

            <label for="Security_Que">Security Questions:</label>
            <select id="Security_Que" name="Security_Que" required>
                <option value="" disabled selected>Select a question</option>
                <option value="What is the name of your first pet?">What is the name of your first pet?</option>
                <option value="What is your mother's maiden name?">What is your mother's maiden name?</option>
                <option value="city">What city were you born in?</option>
            </select>

            <h2>User Preferences</h2>
            <label for="communicationMethod">Preferred Communication Method:</label>
            <select id="communicationMethod" name="User_preference" required>
                <option value="email">Email</option>
                <option value="phone">Phone</option>
                <option value="in-app">In-app Messaging</option>
            </select>

            <button type="submit" class="btn" value="Sign Up" name="signUp">Submit</button>
        </form>
    </div>

    <script src="login01.js"></script>
</body>
</html>