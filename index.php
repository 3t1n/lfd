<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site </title>
    <!--[if lte IE 6]>
    <style type="text/css">
        #container {
            height: 100%;
        }
    </style>
    <![endif]-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/v4-shims.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
</head>
<nav class="navbar  navbar-expand-md navbar-dark bg-dark">
  <!-- Conteúdo do navbar -->
  <a  class="navbar-brand" style="color: #FFD30E;"><?php print("Site dos Sites" ) ?></a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"><font color=#ffcc00></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">   
        <a class="nav-item nav-link active">Olá visitante</a>       
        </div>
        <div class="form-inline ml-auto" >
        <div class="navbar-nav">       
        </div>
        </div>
    </div>
</nav>
<?php 
include 'config.php';
$PDO = db_connect();
$sql = "SELECT  *  FROM nome";
$stmt = $PDO->prepare($sql);
$stmt->execute();
$nomes = $stmt->fetchAll(PDO::FETCH_ASSOC);
$nome = $nomes[0]["nome"];

for($i=0;$i < 100; $i++){
   print("<h1>".$nomes[0]["nome"]."</h1>");
}
?>
<body>