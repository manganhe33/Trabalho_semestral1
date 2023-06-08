<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Folha de admissao a nossa escola , imprimivel..</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style_ca.css">

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
</head>
<body>
<div class="container">
<div class="row">
  <div class="col-sm-2">
  </div>
  <div class="col-sm-8" style="background: #33CC00;border: 2px solid black;padding:5px; text-align: center;color: white;">
   <h1>Folha de cadastro 2023 <br> Atenção, essa é uma pre-inscrição. <br>  Para completar a sua inscrição deve se dirigir a escola.</h1>
  </div>
  <div class="col-sm-2">
  </div>
  </div>
  <div class="row">
  <div class="col-sm-1">
  </div>
    <div class="col-sm-10" style="border: 0px solid black; padding:80px;">
      <form action="form_action.php" method="post" enctype="multipart/form-data">
<div class="row">
    <div class="col-sm-6">
      <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Nome completo : </label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="name" class="form-control" required>
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Nome do pai : </label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="fname" class="form-control" required>
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Nome mae : </label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="mname" class="form-control" required>
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">endereço: </label>
    </div>
     <div class="col-sm-8">
     <textarea name="address" class="form-control" required></textarea>
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Email: </label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="email" class="form-control" required>
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Telefone : </label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="mobile" maxlength="10" class="form-control" required>
    </div>
    </div>
<div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Data:  </label>
    </div>
     <div class="col-sm-8" required>
      <input type="date" name="dob" id="dob" class="form-control">
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Categoria Escolar: </label>
    </div>
     <div class="col-sm-8">
     <select name="category"  class="form-control" required>
     <option value="">Selecione </option>
    <optgroup label ="Primaria">>
        <option value="3ª Classe">3ª Classe</option>
        <option value="4ª Classe">4ª Classe</option>
        <option value="5ª Classe">5ª Classe</option>
        <option value="6ª Classe">6ª Classe</option>
        </optgroup>
        <optgroup label ="Secundaria">>
        <option value="7ª Classe">7ª Classe</option>
        <option value="8ª Classe">8ª Classe</option>
        <option value="9ª Classe">9ª Classe</option>
        <option value="10ª Classe">10ª Classe</option>
        <option value="11ª Classe">11ª Classe</option>
        <option value="12ª Classe">12ª Classe</option>
        </optgroup>

        <optgroup label ="Cambridge">>
        <option value="Grade 1">Grade 1</option>
        <option value="Grade 2">Grade 2</option>
        <option value="Grade 4">Grade 3</option>
        <option value="Grade 5">Grade 4</option>
        </optgroup>

     </select>
    </div>
    </div>
<div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Genero : </label>
    </div>
     <div class="col-sm-8">
     <select name="gender" class="form-control" required>
      <option value="">Seleciona Genero</option>
        <option value="Male">Masculino</option>
        <option value="Female">Femenino</option>
     </select>
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Courso Religioso</label>
    </div>
     <div class="col-sm-8">
     <select name="course" class="form-control" required>
      <option value="">Selecione o curso</option>
        <option value="Alimo">Alimo</option>
        <option value="Hifz">Hifz</option>
        <option value="Maktab">Maktab</option>
     </select>
    </div>
    </div>
    </div>
    <div class="col-sm-6">
  <div class="row">
    <div class="col-sm-12">
    <div class="form-group" style="float: right;">
         <label class="lable"> Photo </label>
   <div style="border: 1px solid black; height: 150px; width: 150px;  background: #F5FAFF;">
      <img id="output"  width="150" height="150" / style="display:none">
  </div>

    <input type="file" name="image" id="image" onchange="loadFile(event)" class="form-control" required accept="image/*" / style="width:150px;" required>

<script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    }; 

  $('#output').show();
    reader.readAsDataURL(event.target.files[0]);
  };
</script>
  </div>
  </div>
  </div>  
  <br> 
  <div class="row">
    <div class="col-sm-12">
      <div class="form-group" style="float: right;">
         <label class="lable">ASSINATURA</label>
   <div style="border: 1px solid black; height: 120px; width: 150px;  background: #F5FAFF;">
      <img id="outputs"  width="150" height="120" / style="display:none">
  </div>
    <input type="file" id="simage" name="simage"  onchange="loadFiles(event)" class="form-control" required accept="image/*" / style="width:150px;" required>
<script>
  var loadFiles = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('outputs');
      output.src = reader.result;
    }; 

  $('#outputs').show();
    reader.readAsDataURL(event.target.files[0]);
  };
</script>

  </div>  
    </div>
  </div>
    </div>
</div> <!--Row 1 end --> 
  <br>
     <div class="row">
     <div class="col-sm-2">
      <label class="lable"></label>
    </div>
    <div class="col-sm-8"> 
 <div id="msg-price"> </div>
    </div>
  </div> <!-- Row 5 end -->
     <div class="row">
     <div class="col-sm-2">
      <label class="lable">DECLARAÇÃO </label>
    </div>
    <div class="col-sm-8">
      <div style=""><div id="msg-price"> </div></div>
      
      <div style="border: 2px solid black;padding:10px; text-align: center;border-radius: 25px;">
        <input type="checkbox" name="declare" required>
        Eu declaro que li e preenchi a informação acima , e se a  informação que fornece é incorreta, a escola tem direito de cancelar sem me informar.
    </div>
      <div class="form-group row">
        <div class="col-sm-4">
        </div>
           <div class="col-sm-4">
            <br> 
               <button class="btn btn-success" name="form_submit">Submit </button>
           </div>
           <div class="col-sm-4">
           </div>
      </div> 
    </div>
  </div> <!-- Row 5 end --> 
</form>
</div>
<div class="col-sm-2">
  </div>
</div>
</div>
</body>
</html>