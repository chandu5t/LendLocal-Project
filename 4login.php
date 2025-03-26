<?php 

include 'asconnect.php';
if(isset($_POST['signIn'])){
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];
    // $Password=md5($Password) ;
    
    
    $sql="SELECT * FROM user WHERE Email='{$Email}' AND Password='{$Password}'";
    $result = mysqli_query($conn,$sql) or die("Query Failed .");
    //$result=$conn->query($sql);
    //if($result->num_rows>0)
    if(mysqli_num_rows($result)>0)
    {
     session_start();
     $row=$result->fetch_assoc();
     $_SESSION['Email']=$row['Email'];
     header("Location: adv_afterlogin.php");
     exit();
    }

    else{
     echo "Not Found, Incorrect Email or Password";
    }
 }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LendLocal - Login</title>
    <link rel="stylesheet" href="5login.css">
    <link rel="icon" href="favicon 192.png" type="image/x-icon">
</head>
<body>
    <div class="container" id="signIn">
        <h1>Login to Lend Local</h1>
        <br/>
        <form id="loginForm" method="post" action="<?php $_SERVER['PHP_SELF'];?>">
            <h2>Account Info</h2>
            <label for="Email">Email:</label>
            <input type="text" id="Email" name="Email" required>

            <label for="Password">Password:</label>
            <input type="password" id="Password" name="Password" required>

            <button type="submit" class="btn" value="SignIn" name="signIn">Login</button>
        </form>
    </div>

    <script src="login01.js"></script>
</body>
</html>
