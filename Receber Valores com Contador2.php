<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
     <h3>Receber Valores com Contador</h3>
     <?php
     $c = 1;
     while ($c <= 5) {
        echo "valor $c: ". $_GET["v$c"]."</br>";    
      $c++;}
     ?>     
     <br/><a href="Receber Valores com Contador.html">Voltar<a/>
</div>
</body>
</html>
 