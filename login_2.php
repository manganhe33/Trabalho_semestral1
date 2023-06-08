<?php
session_start();
if (isset($_SESSION["user"])){
  header("Location: index_2.php"); 

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lugar de login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="style_2.css">

</head>
<body>
  <div class = "container">
  <?php
  if(isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    require_once "database_2.php";
$sql = "SELECT * FROM users2  WHERE email = '$email'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_array($result, MYSQLI_ASSOC);
if ($user){
  if (password_verify($password, $user["password"])){
    session_start();
    $_SESSION["user"] = "yes";
    print_r($_SESSION);

   header("Location: index_2.php"); 
   die();
  }else{
    echo "<div class='alert alert-success'>O password nao combina com email</div>";
  }

}else {
  echo "<div class='alert alert-success'>O email nao existe</div>";
}
  }
  ?>

  <form action="login_2.php" method="post">
  <header style=" font-weight: 1000;border: 1px solid red;border-radius: 5px;border: 1px solid green;
  background: #33CC00;text-align: left;color: white;padding: 10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fazer login para ver as notas do seu filho</header> <br>
  <div class="form-group">
      <input type="email" placeholder="Enter Email:" name="email" class ="form-control">
    </div>
    <div class="form-group">
      <input type="password" placeholder="Enter Password:" name="password" class ="form-control">
    </div>
    <div class="form-btn">
      <input type="submit" value="Login" name="login" class="btn btn-primary">
    </div>
</form>
<div><p>Ainda nao se registou?<a href="registration_2.php">Regista se aqui</a></p></div>
  </div>
</body>
</html>