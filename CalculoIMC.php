<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/estilo.css"/>
  <meta char="UTF-8"/>
  <title> Meu Projeto - Calculo IMC </title>
</head>
<body>
<div>
    <h3>  Calculo de IMC  </h3> 
    <?php
        $Kg = $_GET["KG"];
        $M = $_GET["AM"];
        $IMC = $Kg / ($M * 2);
        echo "Seu IMC é: $IMC </br></br>";
        if ($IMC < 17) {
       echo "Muito <span class='foco'>abaixo do peso</span>";
      }
         elseif ($IMC >= 17 && $IMC < 18.5) {
          echo "Você está abaixo do Peso.";
        }
          elseif($IMC >= 18.5 && $IMC < 25) {
                  echo "Você está com Peso Ideal.";  
          }     
                elseif($IMC >= 25 && $IMC < 30) {
                      echo "Você está com Sobre peso.";
                     }                  
                     elseif($IMC >= 30 && $IMC < 35) {
                            echo "Com Obesidade.";
                          }    
                          elseif($IMC >= 35 && $IMC < 40) {
                                echo "Com Obesidade Severa.";
                          }          
                          else{    
                                echo "Com Obesidade Morbida.";
                              } 
    ?>
    <br/><a href="CalculoIMC.html">Voltar<a/>
</div>
</body>
</html>
 