<?php
session_start();
if (isset($_SESSION["user"])) {
  header("Location: index.php");

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lugar de login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="styleP.css">

</head>

<body>
  <div class="container">
    <?php
    if (isset($_POST["login"])) {
      $email = $_POST["email"];
      $password = $_POST["password"];
      require_once "database.php";
      $sql = "SELECT * FROM teacher  WHERE email = '$email'";
      $result = mysqli_query($conn, $sql);
      $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
      if ($user) {
        if (password_verify($password, $user["password"])) {
          session_start();
          $_SESSION["user"] = "yes";
          print_r($_SESSION);

          header("Location: index.php");
          die();
        } else {
          echo "<div class='alert alert-success'>O password nao combina com email</div>";
        }

      } else {
        echo "<div class='alert alert-success'>O email nao existe</div>";
      }
    }
    ?>

    <form action="login.php" method="post">
      <header style=" font-weight: 1000;border: 1px solid red;border-radius: 5px;border: 1px solid green;
  background: #33CC00;text-align: left;color: white;padding: 10px;">&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login
        do professor</header> <br>

      <div class="form-group">
        <input type="email" placeholder="Enter Email:" name="email" class="form-control">
      </div>
      <div class="form-group">
        <input type="password" placeholder="Enter Password:" name="password" class="form-control">
      </div>
      <div class="form-btn">
        <input type="submit" value="Login" name="login" class="btn btn-primary">
      </div>
    </form>
    <div>
      <p>Ainda nao se registou?<a href="registration.php">Regista se aqui</a></p>
    </div>
  </div>
  <br>

  <!--ver a lista de alunos que ensina-->
  <div class="container">
    <form action="login.php" method="post">
      <header>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ver
        lista de alunos que ensina</header> <br>

      <select name="categoria" class="form-control" required>
        <option value="">Selecione </option>
        <optgroup label="Primaria">>
          <option value="3ª Classe">3ª Classe</option>
          <option value="4ª Classe">4ª Classe</option>
          <option value="5ª Classe">5ª Classe</option>
          <option value="6ª Classe">6ª Classe</option>
        </optgroup>
        <optgroup label="Secundaria">>
          <option value="7ª Classe">7ª Classe</option>
          <option value="8ª Classe">8ª Classe</option>
          <option value="9ª Classe">9ª Classe</option>
          <option value="10ª Classe">10ª Classe</option>
          <option value="11ª Classe">11ª Classe</option>
          <option value="12ª Classe">12ª Classe</option>
        </optgroup>

        <optgroup label="Cambridge">>
          <option value="Grade 1">Grade 1</option>
          <option value="Grade 2">Grade 2</option>
          <option value="Grade 4">Grade 3</option>
          <option value="Grade 5">Grade 4</option>
        </optgroup>
    

      <?php
       require_once("config.php");
      if(isset($_POST['form_submit']))
      {
       $category=trim($_POST['category']);

      $sql = "SELECT reg_no, name, fname FROM cadastro where category= 'categoria'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
          echo "id: " . $row["reg_no"] . " - Name: " . $row["name"] . " " . $row["fname"] . "<br>";
        }
      } else {
        echo "0 results";
      }

      mysqli_close($conn);
      ?>

      </select>


      <center><button type="button" class="btn btn-warning" id="printbtn"
          onclick="window.print()">Ver</button>&nbsp;&nbsp;<a href="logout.php" class="btn btn-warning">Logout</a>
      </center>

      <?php }?>

  </div>
</body>

</html>