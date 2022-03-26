<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box; 

}
.container{
max-width: 80%;
background-color: grey;
margin: auto;
padding: 23px;

}

    </style>

<body>

<div class="container">
    <h1> Let's learn about PHP</h1>
    
<?php
 $age=18;
 if($age>18){
     echo "You can go to the party.";
 }
 else{
     echo "You cannot go to the party.";
 }



?>


</div>    
</body>
</html>