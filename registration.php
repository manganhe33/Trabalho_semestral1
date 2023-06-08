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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <title>Document</title>
  <link rel="stylesheet" href="styleP.css">

</head>

<body>
  <div class="container">
    <?php
    if (isset($_POST["submit"])) {
      $fullName = $_POST["fullname"];
      $email = $_POST["email"];
      $password = $_POST["password"];
      $passwordRepeat = $_POST["repeat_password"];
      $categoria = trim($_POST['categoria']);
      $disci = $_POST["disci"];
      $tele = $_POST["tele"];

      $passwordhash = password_hash($password, PASSWORD_DEFAULT);

      $errors = array();
      if (empty($fullName) or empty($email) or empty($password) or empty($passwordRepeat) or empty($disci) or empty($tele)) {
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
      require_once "database.php";
      $sql = "SELECT * FROM teacher  WHERE email = '$email'";
      $result = mysqli_query($conn, $sql);
      $rowCount = mysqli_num_rows($result);
      if ($rowCount > 0) {
        array_push($errors, "O email ja existe !");

      }
      require_once "database.php";
      $sql = "SELECT * FROM teacher  WHERE full_name = '$fullName'";
      $result = mysqli_query($conn, $sql);
      $rowCount = mysqli_num_rows($result);
      if ($rowCount > 0) {
        array_push($errors, "Este nome ja existe !");
      }

      if (count($errors) > 0) {
        foreach ($errors as $error) {
          echo "<div class='alert alert-danger'>$error</div>";
        }
      } else {
        //we will insert the data into database
        require_once "database.php";
        $sql = "INSERT INTO teacher (full_name, email, password, categoria, disci, tele) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
        if ($prepareStmt) {
          mysqli_stmt_bind_param($stmt, "ssssss", $fullName, $email, $passwordhash, $categoria, $disci, $tele);
          mysqli_stmt_execute($stmt);
          echo "<div class='alert alert-success'>Registou se com sucesso</div>";
        } else {
          die("Alguma coisa nao correu bem");
        }

      }
    }
    ?>

    <form action="registration.php" method="post">
      <div class="form-group">
        <header style=" font-weight: 1000;border: 1px solid red;border-radius: 5px;border: 1px solid green;
  background: #33CC00;text-align: left;color: white;padding: 10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbspRegisto
          Professor</header> <br>
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
      <div class="form-group">
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

        </select> <br>

        <input type="disci" class="form-control" name="disci" placeholder="Disciplina que leciona">
      </div>
      <div class="form-group">
        <input type="tele" class="form-control" name="tele" placeholder="Telefone">
      </div>
      <div class="form-btn">
        <input type="submit" class="btn btn-primary" value="register" name="submit">
      </div>
    </form>
    <div>
      <div>
        <p>Ja se registou?<a href="login.php">Login se aqui</a></p>
      </div>
    </div>
  </div>
</body>

</html>