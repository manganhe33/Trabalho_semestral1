<?php
session_start();
if (!isset($_SESSION["user"])){
  header("Location: login.php"); 

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="styleP.css">

  <title>User Dashboard</title>
</head>
<body>
   <div class = "">
    <!--<h1>Bem vindo a Manganhe</h1> -->
    <?php
//session_start();
  //header("Trabalho-Semestral\NotasAluno.regista-nota.php"); 
  header("location: regista-nota.php")
 //require __DIR__. '/../NotasAluno/regista-nota.php';
 //include __DIR__. '/..regista-nota.php'
 //require __DIR__. '/../NotasAluno/regista-nota.php';
  //__DIR__. '/Trabalho-Semestral/NotasAluno/regista-nota.php';
?>
    <a href="logout.php" class="btn btn-warning">Logout</a>
   </div>
</body>
</html>