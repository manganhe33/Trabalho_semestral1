<?php require_once("baseNota.php");$nuregisto=$_GET['id'];?>
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
	@page { size: auto;  margin: 10mm; margin-right: -70px; margin-left: -70px;}
@media print {
    a[href]:after {
        content: none !important;
    }
}
@media print {
        #printbtn {
        display: none !important;
    }
    .main-heading
    {
      font-size:30px !important;
    }

    .underline{
line-height: 27px !important;
 text-decoration-style: dotted !important;
}
}


</style>
</head>
<body>
<div class="container-fluid">
	<?php $sql="SELECT count(*) from notas1 WHERE nuregisto=:nuregisto"; 
    	 $stmt = $db->prepare($sql);
           $stmt->bindParam(':nuregisto', $nuregisto, PDO::PARAM_STR);
           $stmt->execute();
          $count=$stmt->fetchcolumn();
      if($count==0) 
      {
      	echo 'Registration number is missing or invalid.Kindly filup <a href="regista-nota.php">admission form</a>..';
      }
      else {
  ?>
<div class="row">
  <div class="col-sm-1">
  </div>

    <div class="col-sm-10" style="border: 2px solid black; padding:10px;">
    	<?php 

         $sql="SELECT * from notas1 WHERE nuregisto=:nuregisto"; 
         $stmt = $db->prepare($sql);
           $stmt->bindParam(':nuregisto', $nuregisto, PDO::PARAM_STR);
           $stmt->execute();
           $rows=$stmt->fetchall();
         foreach($rows as $row)
         {
    	 ?> 
         <div class="row">
          <div class="col-2">
            <img src="https://technosmarter.com/assets/images/logo-ts.png" class="img-fluid">
          </div>
           <div class="col">
              <div class="main-heading">DARUL IFTA WAL IRCHAD</div>
     <div class="sub-heading">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BAITUL ISLAM FIDDIN بيت الاسلام في الدين</div>
      <div class="address">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hed.Office: MAPUTO MOCAMBIQUE AV JOAQUIM CHISSANO.
</div>
<br>
         <p class="email">              Email: daruliftairchad@gmail.com , Website: </p>
          </div>
          <div class="col-sm-12">
            <hr class="hrcls"> 
          </div>
      </div>
      <div class="row">
  <p id="message"></p>
  <div class="col-sm-2">
  </div>
  <div class="col-sm-8" style="text-align: center;padding-bottom: 5px;">
   <h3> <u>Notas de Aluno 2023</u></h3>
  </div>
  <div class="col-sm-2">
  </div>

  </div>

<div class="row">
    <div class="col-6">
    <div class="col-6">
     <div class="form-group row">
   <div class="col-4">
      <label class="lable">Numero de Aluno</label>
    </div>
     <div class="col-8">
    <?php echo $row['nuregisto']; ?> 
    </div>
    </div>
    </div>
    
        <div class="form-group row">
   <div class="col-4">

      <label class="lable">Classe</label>
    </div>
     <div class="col-8">
      <strong><?php echo $row['classe']; ?></strong>
    </div>
    </div>

      <div class="form-group row">
   <div class="col-4">

      <label class="lable">Nome completo</label>
    </div>
     <div class="col-8">
      <?php echo $row['name']; ?> 
    </div>
    </div>
    <div class="form-group row">
   <div class="col-4">

      <label class="lable">Portugues</label>
    </div>
     <div class="col-8">
      <?php echo $row['portugues']; ?> 
    </div>
    </div>

    <div class="form-group row">
   <div class="col-4">
      <label class="lable">Matematica</label>
    </div>
     <div class="col-8">
       <?php echo $row['matematica']; ?> 
    </div>
    </div>
    <div class="form-group row">
   <div class="col-4">
      <label class="lable">Historia</label>
    </div>
     <div class="col-8">
      <?php echo $row['historia']; ?> 
    </div>
    </div>
    <div class="form-group row">
   <div class="col-4">
      <label class="lable">Engles</label>
    </div>
     <div class="col-8">
      <?php echo $row['engles']; ?> 
    </div>
    </div>
    <div class="form-group row">
   <div class="col-4">
      <label class="lable">Desenho</label>
    </div>
     <div class="col-8">
       <?php echo $row['desenho']; ?> 
    </div>
    </div>

<div class="form-group row">
   <div class="col-4">
      <label class="lable">Ciencias socias</label>
    </div>
     <div class="col-8" required>
   <?php echo $row['cienciassocias']; ?> 
    </div>
    </div>
    
<div class="form-group row">
   <div class="col-4">
      <label class="lable">Fisica</label>
    </div>
     <div class="col-8">
           <?php echo $row['fisica']; ?> 
    </div>
    </div>

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

<?php } ?> 
</div>
 
<div class="col-2">
  </div>

</div>
<br>
<center><button type="button" class="btn btn-warning" id="printbtn" onclick="window.print()">Imprimir</button>&nbsp;&nbsp;<a href="logout.php" class="btn btn-warning">Logout</a></center>

<br>
<?php } ?> 

</div>

</body>
</html>
