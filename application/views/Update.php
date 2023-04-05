<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Users view</title>
    <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">
</head>
<body>
  <div class="table-message userstable-desc">   <button class="btn btn-info"> <a href="<?php echo base_url('index.php/users'); ?>" style="color:white;">home</a></button> <h3 class="m-5" >Update User Data..</div>


<!-- form start......................................................... -->
  <form method="post" class="addusersform" action="<?php echo base_url('index.php/updatebyid/?').'id='.$data[0]['id']; ?>">
<div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input  type="text" value="<?php echo $data[0]['name'];?>" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" >

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" value="<?php echo $data[0]['email'];?>" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Mobile Number</label>
    <input type="number" value="<?php echo $data[0]['mobile'];?>" name="mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="mobile number">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" value="<?php echo $data[0]['password'];?>" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  
  </div>
  <br/>
  <button type="submit" class="btn btn-primary" id="button" name="submit" >Updata Now</button>
</form>

<!-- form end......................................................... -->
<footer class="update-footer">
 <h4>copyright by anish kumar @2023-2024</h1>
</footer>
</body>
</html>