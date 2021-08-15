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
         $d = isset($_GET["test"])?$_GET["test"]:1;
         switch ($d) {
             case 1:
              echo "Rio de Janeiro é da Região Sudeste";
              break;
             case 2:
              echo "São Paulo é da Região Sudeste";
                break;
            case 3: 
              echo "Paraná é da Região Sul";
              break;
            case 4:
              echo "Rio Grande do Sul é da Região Sul";
            }           
    ?>
    <br/><br/><a href="IdentificadordeRegiao.html">Voltar<a/>
</body>
</html>
 