<?php 

  if(isset($_POST['btn'])){
    $username = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['pass'];

  }



?>
<h2>UserName: <?php if(isset($username)){
        echo $username;
    } ?></h2>
    <h2>Email: <?php if(isset($email)){
        echo $email;
    } ?></h2>
    <h2>Password: <?php if(isset($password)){
        echo $password;
    } ?></h2>


