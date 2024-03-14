<?php
session_start();
$data=$_SESSION['data']; 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System -Dashboard</title>

    <!--Bootstarp css link -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body class="bg-secondary text-light">
    
   <div class="container my-5">
    
   <a href="../"><button class="btn btn-dark text-light px-3">Back</button></a>
   <a href="logout.php"><button class="btn btn-dark text-light px-3">Logout</button></a>
   <h1 class="my-5"> Voting System</h1>  
   <div class="row my-5">
      <div class="col-md-7">
         
         <?php
         if(isset($_SESSION['group']))
         {
         $groups=$_SESSION  ['groups']; 
          for($i=0;$i<count($groups);$i++)
         {
            ?> 
            <div class="row">
             <div class="col md-4 ">
               <img src="../uploads/<?php echo $groups[$i]['photo']?>" alt="Group Image ">

             </div>
             <div class="col-md-8">
               <strong class="text-dark h5">Group name:</strong>
               <?php echo $groups[$i]['username']?>
               <br>
               <strong class="text-dark h5">Votes:</strong>
               <?php echo $groups[$i]['votes']?><br> 
            </div>
         </div>
         <hr>
         <?php
         }

         }
      
         
         
         
      