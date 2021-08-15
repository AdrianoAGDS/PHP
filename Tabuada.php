<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form method="get" action="13EstruturadeRepetiçãoFor22.php">
            <select name="n">
                <?php
                    for ($c = 1; $c<=10;$c++){
                        echo "<option>$c</option>";
                    }
                ?>  
            </select>
            <input type="submit" value="tabuada"/> 
    </form>
    
</div>
</body>
</html>
 