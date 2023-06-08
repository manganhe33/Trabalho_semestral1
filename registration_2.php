<?php
session_start();
if (isset($_SESSION["user"])) {
  header("Location: index_2.php");

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <title>Document</title>
  <link rel="stylesheet" href="style_2.css">

</head>

<body>
  <div class="container">
    <?php
    if (isset($_POST["submit"])) {
      $fullName = $_POST["fullname"];
      $email = $_POST["email"];
      $password = $_POST["password"];
      $passwordRepeat = $_POST["repeat_password"];

      $passwordhash = password_hash($password, PASSWORD_DEFAULT);

      $errors = array();
      if (empty($fullName) or empty($email) or empty($password) or empty($passwordRepeat)) {
        array_push($errors, "Preencha todos campos");
      }

      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "O email. nao e valido");
      }
      if (strlen($password) < 8) {
        array_push($errors, "O password deve ser pelo menos 8 digitos");
      }
      if ($password !== $passwordRepeat) {
        array_push($errors, "O password nao e igual");
      }
      require_once "database_2.php";
      $sql = "SELECT * FROM users2  WHERE email = '$email'";
      $result = mysqli_query($conn, $sql);
      $rowCount = mysqli_num_rows($result);
      if ($rowCount > 0) {
        array_push($errors, "O email ja existe !");

      }

      if (count($errors) > 0) {
        foreach ($errors as $error) {
          echo "<div class='alert alert-danger'>$error</div>";
        }
      } else {
        //we will insert the data into database
        require_once "database_2.php";
        $sql = "INSERT INTO users2 (full_name, email, password) VALUES ( ?, ?, ? )";
        $stmt = mysqli_stmt_init($conn);
        $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
        if ($prepareStmt) {
          mysqli_stmt_bind_param($stmt, "sss", $fullName, $email, $passwordhash);
          mysqli_stmt_execute($stmt);
          echo "<div class='alert alert-success'>Registou se com sucesso</div>";
        } else {
          die("Alguma coisa nao correu bem");
        }

      }
    }
    ?>

    <form action="registration_2.php" method="post">
    <header style=" font-weight: 1000;border: 1px solid red;border-radius: 5px;border: 1px solid green;
  background: #33CC00;text-align: left;color: white;padding: 10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Somente registo de encarregado</header> <br>
      <div class="form-group">
        <input type="test" class="form-control" name="fullname" placeholder="full name">
      </div>

      <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="email">
      </div>

      <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="password">
      </div>
      <div class="form-group">
        <input type="password" class="form-control" name="repeat_password" placeholder="repeat password">
      </div>
      <div class="form-btn">
        <input type="submit" class="btn btn-primary" value="register" name="submit">
      </div>
    </form>
    <div>
      <div>
        <p>Ja se registou?<a href="login_2.php">Login se aqui</a></p>
      </div>
    </div>
  </div>
</body>

</html>