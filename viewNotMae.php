<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Campo de notas de aluno 2023</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="styleg1.css">
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <style type="text/css">
    @page {
      size: auto;
      margin: 10mm;
      margin-right: -70px;
      margin-left: -70px;
    }

    @media print {
      a[href]:after {
        content: none !important;
      }
    }

    @media print {
      #printbtn {
        display: none !important;
      }

      .main-heading {
        font-size: 30px !important;
      }

      .underline {
        line-height: 27px !important;
        text-decoration-style: dotted !important;
      }
    }
  </style>
</head>

<body>
  <br>


  <div class="container-fluid">

    <div class="row">
      <div class="col-sm-1">
      </div>

      <div class="col-sm-10" style="border: 2px solid black; padding:10px;">

        <div class="row">
          <div class="col-2">
            <img src="https://technosmarter.com/assets/images/logo-ts.png" class="img-fluid">
          </div>
          <div class="col"
            style="background: #33CC00;border: 2px solid black;padding:5px; text-align: center;color: white">
            <div class="main-heading" style="padding:5px; text-align: center;color: white">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DARUL IFTA WAL IRCHAD</div>
            <div class="sub-heading" style="padding:5px; text-align: center;color: white">
              &nbsp;&nbsp;&nbsp;&nbsp;BAITUL
              ISLAM FIDDIN بيت الاسلام في الدين</div>
            <div class="address" style="padding:5px; text-align: center;color: white">&nbsp;&nbsp;
              Hed.Office: MAPUTO MOCAMBIQUE AV JOAQUIM CHISSANO.
            </div>
            <br>
            <p class="email"> Email: daruliftairchad@gmail.com , Website: </p>
          </div>
          <div class="col-sm-12">
            <hr class="hrcls">
          </div>
        </div>

        <form action="" method="GET">
          <div class="row">
            <div class="col-sm-6">
              <div class="mb-3 row">
                <div class="col-sm-6">
                  <label
                    class="lable">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Nome do aluno :</label>
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

      </div>

      <div class="col-2">
      </div>

    </div>

  </div>
  <br>
  <hr>
  <?php
  $con = mysqli_connect("localhost", "root", "", "Trabalho-semestral");

  if (isset($_GET['stud_id'])) {
    $stud_id = $_GET['stud_id'];

    $query = "SELECT * FROM notas1 WHERE nuregisto='$stud_id' ";
    $query_run = mysqli_query($con, $query);

    if (mysqli_num_rows($query_run) > 0) {
      foreach ($query_run as $row) {
        ?>

        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-1">
            </div>



            <div class="row">
              <div class="col-6">

                 
                <div class="form-group row">
                  <div class="col-4">

                    <label class="lable">Numero de estudante</label>
                  </div>
                  <div class="col-8">
                    <strong>
                      <?php echo $row['nuregisto']; ?>
                    </strong>
                  </div>
                </div>
                <br>
                <div class="form-group row">
                  <div class="col-4">

                    <label class="lable">Classe</label>
                  </div>
                  <div class="col-8">
                    <strong>
                      <?php echo $row['classe']; ?>
                    </strong>
                  </div>
                </div>
                <br>
                <div class="form-group row">
                  <div class="col-4">

                    <label class="lable">Nome completo</label>
                  </div>
                  <div class="col-8">
                    <?php echo $row['name']; ?>
                  </div>
                </div>
                <br>
                <div class="form-group row">
                  <div class="col-4">

                    <label class="lable">Portugues</label>
                  </div>
                  <div class="col-8">
                    <?php echo $row['portugues']; ?>
                  </div>
                </div>
                <br>
                <div class="form-group row">
                  <div class="col-4">
                    <label class="lable">Matematica</label>
                  </div>
                  <div class="col-8">
                    <?php echo $row['matematica']; ?>
                  </div>
                </div>
                <br>
                <div class="form-group row">
                  <div class="col-4">
                    <label class="lable">Historia</label>
                  </div>
                  <div class="col-8">
                    <?php echo $row['historia']; ?>
                  </div>
                </div>
                <br>
                <div class="form-group row">
                  <div class="col-4">
                    <label class="lable">Engles</label>
                  </div>
                  <div class="col-8">
                    <?php echo $row['engles']; ?>
                  </div>
                </div>
                <br>
                <div class="form-group row">
                  <div class="col-4">
                    <label class="lable">Desenho</label>
                  </div>
                  <div class="col-8">
                    <?php echo $row['desenho']; ?>
                  </div>
                </div>
                <br>
                <div class="form-group row">
                  <div class="col-4">
                    <label class="lable">Ciencias socias</label>
                  </div>
                  <div class="col-8" required>
                    <?php echo $row['cienciassocias']; ?>
                  </div>
                </div>
                <br>
                <div class="form-group row">
                  <div class="col-4">
                    <label class="lable">Fisica</label>
                  </div>
                  <div class="col-8">
                    <?php echo $row['fisica']; ?>
                  </div>
                </div>
                <br>
                <div class="form-group row">
                  <div class="col-4">
                    <label class="lable">Geografia</label>
                  </div>
                  <div class="col-8">
                    <?php echo $row['geografia']; ?>
                  </div>
                </div>
              </div>
              <div class="col-6">
              </div>
            </div>
            <?php ?>
            <div class="col-2">
            </div>

          </div>
          <br>
          <center><button type="button" class="btn btn-warning" id="printbtn"
              onclick="window.print()">Imprimir</button>&nbsp;&nbsp;<a href="logout.php" class="btn btn-warning">Logout</a>
          </center>

          <br>
          --
          <?php ?>

        </div>

        <?php
      }
    } else {
      echo "     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      ESTE ALUNO NAO ESTA INSCRITO, QUEIRA POR FAVOR CONTACTAR O PROFESSOR PEDAGOGICO.";
    }
  }

  ?>

</body>

</html>