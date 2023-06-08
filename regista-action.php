<?php require_once("baseNota.php");
if(isset($_POST['form_submit']))
{
  //$logfile = require __DIR__. '/../Cadastro/config.php';

	$nuregisto=trim($_POST['nuregisto']);
	$classe=trim($_POST['classe']);
	$name=trim($_POST['name']);
	$portugues=trim($_POST['portugues']);
	$matematica=trim($_POST['matematica']);
	$historia=trim($_POST['historia']);
	$engles=trim($_POST['engles']);
	$desenho=trim($_POST['desenho']);
	$cienciassocias=trim($_POST['cienciassocias']);
	$fisica=trim($_POST['fisica']);
  $geografia=trim($_POST['geografia']);
  $nuregi=trim($_POST['nuregi']);


	$sql="INSERT into notas1(nuregisto,classe,name,portugues,matematica,historia,engles,desenho,cienciassocias,fisica,geografia) VALUES(:nuregisto,:classe,:name,:portugues,:matematica,:historia,:engles,:desenho,:cienciassocias,:fisica,:geografia);";
	    $stmt = $db->prepare($sql);
      $stmt->bindParam(':nuregisto', $nuregisto, PDO::PARAM_STR);
      $stmt->bindParam(':classe', $classe, PDO::PARAM_STR);
      $stmt->bindParam(':name', $name, PDO::PARAM_STR);
      $stmt->bindParam(':portugues', $portugues, PDO::PARAM_STR);
      $stmt->bindParam(':matematica', $matematica, PDO::PARAM_STR);
      $stmt->bindParam(':historia', $historia, PDO::PARAM_STR);
      $stmt->bindParam(':engles', $engles, PDO::PARAM_STR);
      $stmt->bindParam(':desenho', $desenho, PDO::PARAM_STR);
      $stmt->bindParam(':cienciassocias', $cienciassocias, PDO::PARAM_STR);
      $stmt->bindParam(':fisica', $fisica, PDO::PARAM_STR);
      $stmt->bindParam(':geografia', $geografia, PDO::PARAM_STR);
      $stmt->execute();
      $last_id = $db->lastInsertId();
      if($last_id!='')
      {
    header("location: viewNotas.php?id=".$nuregisto);
      }
      else 
      {
      	echo 'Something went wrong'; 
      }
    
  
}  
?> 
