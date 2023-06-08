<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Folha de notas, imprimivel..</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="styleg1.css">
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
</head>

<body>
  <div class="w-100">
    <div class="row ">
      <div class="col-sm-2">
      </div>
      <div class="col-sm-8"
        style="background: #33CC00;border: 2px solid black;padding:5px; text-align: center;color: white">
        <h1>Folha de notas 2023 <br>preenchivel somente pelo professor <br> que leciona uma certa disciplina </h1>
      </div>
      <div class="col-sm-2">
      </div>
    </div>
    <br><br>
    <form action="" method="GET">
      <div class="row">
      <div class="col-sm-6">
      <div class="mb-3 row">
        <div class="col-sm-6">
          <label class="lable">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nome do aluno :</label>
        </div>
        <div class="col-sm-4">
          <input type="text" name="stud_id" value="<?php if (isset($_GET['stud_id'])) {
            echo $_GET['stud_id'];
          } ?>" class="form-control">
        </div>
        <div class="col-sm-2 ">
          <button type='submit' class="btn btn-primary">Search</button>
        </div>
        </div>
        </div>
      </div>
    </form>

    <div class="row">
      <hr>
      <?php
      $con = mysqli_connect("localhost", "root", "", "Trabalho-semestral");

      if (isset($_GET['stud_id'])) {
        $stud_id = $_GET['stud_id'];

        $query = "SELECT * FROM cadastro WHERE name='$stud_id' ";
        $query_run = mysqli_query($con, $query);

        if (mysqli_num_rows($query_run) > 0) {
          foreach ($query_run as $row) {
            ?>

            <div class="col-sm-1">
            </div>
            <div class="col-sm-10" style="border: 0px solid black; padding:80px;">
              <form action="regista-action.php" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-sm-6">




                    <div class="mb-3 row">
                      <div class="col-sm-4">
                        <label class="lable">Numero de Aluno : </label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" value="<?= $row['reg_no']; ?>" name="nuregisto" class="form-control" required>
                      </div>
                    </div>

                    <div class="mb-3 row">
                      <div class="col-sm-4">
                        <label class="lable">Classe : </label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" value="<?= $row['category']; ?>" name="classe" class="form-control" required>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <div class="col-sm-4">
                        <label class="lable">Nome completo : </label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" value="<?= $row['name']; ?>" name="name" class="form-control" required>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <div class="col-sm-4">
                        <label class="lable">Portugues: </label>
                      </div>
                      <div class="col-sm-8">
                        <input type="number" name="portugues" class="form-control" required>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <div class="col-sm-4">
                        <label class="lable">Matematica: </label>
                      </div>
                      <div class="col-sm-8">
                        <input type="number" name="matematica" class="form-control" required>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <div class="col-sm-4">
                        <label class="lable">Historia : </label>
                      </div>
                      <div class="col-sm-8">
                        <input type="number" name="historia" class="form-control" required>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <div class="col-sm-4">
                        <label class="lable">Engles: </label>
                      </div>
                      <div class="col-sm-8" required>
                        <input type="number" name="engles" class="form-control">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <div class="col-sm-4">
                        <label class="lable">Desenho: </label>
                      </div>
                      <div class="col-sm-8" required>
                        <input type="number" name="desenho" class="form-control">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <div class="col-sm-4">
                        <label class="lable">Ciencias socias: </label>
                      </div>
                      <div class="col-sm-8" required>
                        <input type="number" name="cienciassocias" class="form-control">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <div class="col-sm-4">
                        <label class="lable">Fisica: </label>
                      </div>
                      <div class="col-sm-8" required>
                        <input type="number" name="fisica" class="form-control">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <div class="col-sm-4">
                        <label class="lable">Geografia: </label>
                      </div>
                      <div class="col-sm-8" required>
                        <input type="number" name="geografia" class="form-control">
                      </div>
                    </div>
                    <script>
                      var loadFile = function (event) {
                        var reader = new FileReader();
                        reader.onload = function () {
                          var output = document.getElementById('output');
                          output.src = reader.result;
                        };

                        $('#output').show();
                        reader.readAsDataURL(event.target.files[0]);
                      };
                    </script>

                  </div>

                </div> <!--Row 1 end -->
                <br>

                <div class="row">

                  <div class="form-group row">
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-4">
                      <br>
                      <button class="btn btn-success" name="form_submit">Submit </button>
                      <a href="logout.php" class="btn btn-warning">Logout</a>
                    </div>
                    <div class="col-sm-4">
                    </div>
                  </div>


                </div> <!-- Row 5 end -->
              </form>
            </div>
            <div class="col-sm-2">
            </div>

            <?php
          }
        } else {
          echo "No Record Found";
        }
      }

      ?>

    </div>
  </div>
</body>

</html>