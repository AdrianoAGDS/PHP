<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/estilo.css"/>
  <meta char="UTF-8"/>
  <title> Meu Projeto - Calculo IMC </title>
</head>
<body>
<div>
    <h3>  Calculo de IMC </h3> 
    
    <?php
      echo "<p><span class='foco'> Analisando ...</p></br></span>";
        $Kg = $_GET["KG"];
        $M = $_GET["AM"];
        $IMC = $Kg / ($M * 2);
        echo "Seu peso é: ".number_format($Kg,2);
        echo "</br>";
        echo "Sua Altura é: ".number_format($M,2);
        echo "</br>";
        echo "Seu IMC é: ".number_format($IMC,2);
        echo "</br></br>";
        if ($IMC < 17) {
       echo "<span class='foco'> Você está muito abaixo do peso.</span>";
      }
         elseif ($IMC >= 17 && $IMC < 18.5) {
          echo "<span class='foco'>Você está abaixo do peso.</span>";
        }
          elseif($IMC >= 18.5 && $IMC < 25) {
                  echo "<span class='foco'>Você está com peso ideal.</span>";  
          }     
                elseif($IMC >= 25 && $IMC < 30) {
                      echo "<span class='foco'>Você está com sobre peso.</span>";
                     }                  
                     elseif($IMC >= 30 && $IMC < 35) {
                            echo "<span class='foco'>Com obesidade.</span>";
                          }    
                          elseif($IMC >= 35 && $IMC < 40) {
                                echo "<span class='foco'>Com obesidade severa.</span>";
                          }          
                          else{    
                                echo "<span class='foco'>Com obesidade morbida.</span>";
                              } 
    ?>
    <br/><br/><a href="CalculoIMC.html">Voltar<a/>
</div>
</body>
</html>
 