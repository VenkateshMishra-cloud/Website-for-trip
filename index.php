<?php
$insert=false;
if(isset($_POST['name'])){
$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server, $username, $password);
if(!$con){
    die("Connection to the database failed due to ". mysqli_connect_error());
}

// echo "Connection to the database successful! ";

$name =$_POST['name'];
$age =$_POST['age'];
$gender =$_POST['gender'];
$email =$_POST['email']; 
$phone =$_POST['phone'];
$desc =$_POST['desc'];

$sql="INSERT INTO trip.trip (`name`, `age`, `gender`, `email`, `phone`, `desc1`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

// echo $sql;


if($con->query($sql)==true){
    // echo "Successfully inserted";
    $insert=true;
}
else echo  "ERROR: $sql <br> $con->error";

$con->close();

} 
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to IIIT Bhagalpur Travel form</title>
    <link rel="stylesheet"  href="style12.css">
</head>
<body>
    <img class="image" src="123.jpg" alt="IIIT Bhagalpur">
    <div class="container"><h3>
        <br>
        Welcome to IIIT Bhagalpur trip form</h1>
        <br>
        <p> Enter your details in the form.</p>
      <br> 




     <form action="index.php" method="post">
         <input type="text" name="name" id="name" placeholder="Enter your name">
         <input type="text" name="age" id="age" placeholder="Enter your age">
         <input type="text" name="gender" id="gender" placeholder="Enter your gender">
         <input type="text" name="email" id="email" placeholder="Enter your email">
         <input type="text" name="phone" id="phone" placeholder="Enter your phone">
         
         <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter other information here (if any)."></textarea>
         <button class="btn">Submit</button>
        

     </form>


    </div>
    
     <script src="index.js">  </script>
   
     
</body>
</html>