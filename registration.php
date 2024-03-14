<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting system -Registration Page</title>

      <!--Bootstarp css link -->

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class ="bg-dark">
   <h1 class="test-center text-info p-3">Voting System</h1>
    <div class="bg-info py-4">
        <h2 class="text-center">Register Account</h2>
        <div class="container text-center" >
            <form action="../actions/register.php" method="POST" enctype="multipart/form-data"><div class="mb-3">
                <input type="text"class="form-control w-50 m-auto" placeholder="Enter your username" required="required" name="username">
            </div>

             <!--div class="container"--> 
            <div class="mb-3">
                <input type="text"class="form-control w-50 m-auto" placeholder="Enter your mobile number" required="required" name="mobile">
                </div>

                <!--div class="container"--> 
            <div class="mb-3">
                <input type="Password"class="form-control w-50 m-auto" placeholder="Enter your password" required="required" name="Password">
                </div>
                <!--div class="container"--> 

            <div class="mb-3">
                <input type="confirm password"class="form-control w-50 m-auto" placeholder="confirm password" required="required" name="CPassword">
                </div>

                <div class="mb-3">
                <input type="file"class="form-control w-50 m-auto"  name="Photo">
                </div>    

                <div class="mb-3">
                <select name="std" class="form form-control w-50 m-auto" >
                    <option value="group">Group</option>
                    <option value="voter">Voter</option>
                </select>
                </div>
        <button type="submit" class="btn btn-dark my-4">Register</button>
        <p>Already have an account? <a href="../" class="text-white">Login here</a></p>
        </div>
    </div>
</body>
</html>