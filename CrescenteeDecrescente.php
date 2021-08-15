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
        $i = $_GET["in"];
        $f = $_GET["fi"];
        $ir = $_GET["inc"];
       
        
        if ($i < $f) {
          $c = $i;
        while ($c <= $f) {
          echo "$c ";
          $c+=$ir;
        }
      }
        else { $c = $i;
          while ($c >= $f) {
            echo "$c ";
            $c-=$ir; 
          }  
        }


        /*
        if ($i < $f) {
          $c = $i;
        while ($c <= $f) {
          echo "$c ";
          $c+=$ir;
        }
      }   
        if ($i > $f) {
          $c = $i;
        while ($c >= $f) {
          echo "$c ";
          $c-=$ir;   
        }     
      }  */
    ?>
    <br/><a href="CrescenteeDecrescente.html">Voltar<a/>
</div>
</body>
</html>
 