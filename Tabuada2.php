<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $n = isset($_GET["n"])?$_GET["n"]:1;  
        for ($c=1; $c<=10; $c++){
            $r = $c * $n;
            echo "$n x $c = $r </br>";
        }  
     ?>  
    <br/><br/> <a href="javascript:history.go(-1)"> Voltar <a/>
</div>
</body>
</html>
 