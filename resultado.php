<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, 
        initial-scale=1">
        <link rel="stylesheet" href="css/estilo.css">
        <meta charset="UTF-8">
        <title>Aula 1 PHP</title>

        
    </head>

    <body>

    <?php
            $numero = $_GET["n"];
            $numero1 = $_GET["n1"];
            $numero2 = $_GET["n2"];

            $exp = "";

            if( is_numeric($numero)  && is_numeric($numero1) && is_numeric($numero2)){
                if($numero1 <= $numero2){

                echo "<table border='1'>";
                echo "<tr>";
                echo "<th>número</th>";
                echo "<th>número 2</th>";
                echo "<th>expressão</th>";
                echo "</tr>";
            
                for($i=$numero1; $i<=$numero2; $i++){
           
                    echo "<tr>";
                    echo "<td>$numero</td>";
                    echo "<td><?=$i?></td>";
                    echo "<td>$numero x $i = ".($numero * $i). "</td>";
                    echo "</tr>";
                } 
                echo "</table>";

                }else{
                    echo  "<div class='erro'>intervalos incorretos</DIV>";
                }
            }else{        

                echo "<div class='erro'>INFORME OS NÚMEROS</DIV>";
            }        
        ?>


            
            

        




    </body>

</html>