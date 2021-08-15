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
        $n = $_GET["n"];
        $t = 0;
        echo "<h2>Analisando o número $n... </h2>";
        echo "</br>";
        echo "Valores múltiplos: ";
        for ($c = 1;$c <= $n; $c++){
            if ($n % $c == 0) {
              echo "$c ";
              $t++;
           }
        }
        echo "</br> </br>";
        echo "Total de múltiplos: $t";
        echo "</br> </br>";
        if ($t > 2){
          echo "RESULTADO: $n <h2><span class='foco'>NÃO É PRIMO</h2></span>";
        }
        if($t == 2) {
          echo "RESULTADO:$n  <h2><span class='foco'>É PRIMO</h2></span>";
        }
        ?>
        <br/><br/><a href="Identificadordenumerosprimo.html">Voltar<a/>
</div>
</body>
</html>
 