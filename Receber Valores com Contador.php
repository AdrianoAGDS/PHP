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
   <form method="GET" action="Receber Valores com Contador2.php">
     <?php
     $c = 1;
     while ($c <= 5) {
        echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'/> <br/>";    
      $c++;}
     ?>     
     <input type="submit" value="Enviar" />
   </form>
</div>
</body>
</html>
 