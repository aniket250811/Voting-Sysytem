<?php
include('connect.php');

$username=$_POST['username'];
$mobile=$_POST['mobile'];
$Password=$_POST['Password'];
$CPassword=$_POST['CPassword'];
$image=$_FILES['Photo']['name'];
$tmp_name=$_FILES['Photo']['tmp_name'];
$std=$_POST['std'];

if($Password!=$CPassword)
{
    echo '<script> 
    alert("Password do not match");
    window.location="../partials/registration.php";
    </script>';
}
else
{
    
  move_uploaded_file($tmp_name,"../uploads/$image");
  $sql="insert into `userdata` (username,mobile,Password,Photo,standard,status,votes) values ('$username','$mobile','$Password','$image','$std','0','0')";
  
  $result=mysqli_query($con , $sql);



  if($result)
  {
    echo '<script> 
    alert("Registration successfull");
    window.location="../";
    </script>';
  }


}
?>

