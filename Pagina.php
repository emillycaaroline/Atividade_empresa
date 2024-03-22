<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         body{
            text-align: center;
         }
    </style>
</head>
<body>
    <p>NMR</p>
        <div>
            <form action="" method="post">
                <input type="number" name="numero">

                <p>mes</p>
                <form action="" method="post">
                <input type="number" name="mes">

                <br><br>
                <input type="submit">
            </form>
        </div>

        <?php
        $num = filter_input(INPUT_POST, "numero");
        $mes = filter_input(INPUT_POST, "mes");
        $min = 1927.02;
        $Msmn = 20000;
        $Mmen = 80000;

         if($num == $Msmn){
            $bonus = $Msmn * 0.01;
            $f = $min + $bonus;
                echo "Bateu a meta $f";

            }if($num > $Msmn){
                $sob = $num - $Msmn ;
                $bon = $sob * 0.05;
                $fin = $min + $bon;
                echo "exedeu a meta semanal $fin";  

            }
            
            if($mes > $Mmen){
                $sobrou = $mes - $Mmen ;
                $bonu = $sobrou * 0.1;
                $finish = $min + $bonu;
                echo "exedeu a meta mensal $finish"; 

                $finaly = $f + $fin + $finish;
            }
            echo "Salario final é $finaly"

         
        ?>
</body>
</html>