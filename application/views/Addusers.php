<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="<?php echo base_url('css/style.css');  ?>" rel="stylesheet"/>
</head>
<body>
<div class="userstable-desc">    <button class="btn btn-primary"><a href="<?php echo base_url('index.php/users'); ?>" style="color:white;">home</a></button><h3 class="m-5 top-message">Add Users Form..</h3>  </div>

<form method="post" action="<?php echo base_url('index.php/addusers'); ?>" class="addusersform">
<div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input  type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" >
    <small id="emailHelp" class="form-text text-muted text-danger"><?php echo form_error('name'); ?></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted text-danger"><?php echo form_error('email'); ?></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Mobile Number</label>
    <input type="number" name="mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="mobile number">
    <small id="emailHelp" class="form-text text-muted text-danger"><?php echo form_error('mobile'); ?></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    <small id="emailHelp" class="form-text text-muted text-danger"><?php echo form_error('password'); ?></small>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Register Now</button>
</form>
<footer class="add-users-footer">
<h4>copyright by anish kumar @2023-2024</h1>
</footer>
</body>
</html>