<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Users view</title>
    <link href="<?php echo base_url('css/style.css'); ?>" rel="stylesheet"/>
</head>
<body>
 <div class="userstable-desc"> <h3 class="m-5 top-message">Crud Operation Table..</h3> <button class="btn btn-primary"><a href="<?php echo  base_url('index.php/addusers'); ?>" class="text-light">add users</a></button></div>
<table class="table  users-table">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">mobile</th>
      <th scope="col">password</th>
      <th scope="col">delete</th>
      <th scope="col">update</th>
    </tr>
  </thead>
  <tbody>

    <?php
    
    foreach($users_data as $val)
    {
        echo '<tr>
        <th scope="row">'.$val['id'].'</th>
        <th scope="row">'.$val['name'].'</th>
        <th scope="row">'.$val['email'].'</th>
        <th scope="row">'.$val['mobile'].'</th>
        <td>'.$val['password'].'</td>
        <td><button class="btn btn-danger"><a href="'.base_url('index.php/deletebyid/?').'id='.$val['id'].'" class="text-light">delete</a></button></td>
        <td><button class="btn btn-primary"><a href="'.base_url('index.php/update/?').'id='.$val['id'].'" class="text-light">update</a></button></td>
         </tr>'; 
    }
    ?>
  </tbody>
</table>
<footer class="users-footer">
<h4>copyright by anish kumar @2023-2024</h1>
</footer>
</body>
</html>