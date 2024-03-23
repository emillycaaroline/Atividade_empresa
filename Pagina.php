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
    
        <div>
            <p>Funcionario</p>
        <form action="" method="post">
                <input type="text" name="name"> <br> <br>

                <p>semana</p>
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

            if($num >= $Msmn){
            $bonus = $Msmn * 0.01;
            
                echo "Bateu a meta $bonus <br>";

            }else{
                echo "n bateu<br>";
            }
            if($num > $Msmn){
                $sob = $num - $Msmn ;
                $bon = $sob * 0.05;
               
                echo "exedeu a meta semanal $bon <br> "; 
            }else{
                echo "nn<br>";
            }
            
            if($mes > $Mmen){
                $sobrou = $mes - $Mmen ;
                $bonu = $sobrou * 0.1;
                echo "exedeu a meta mensal $bonu  <br>";
            }else{
                echo "nn<br>";
            }

            $final = $bon + $bonu + $bonus + $min;
            echo "<h1>$final </h1>"

        ?>
        
</body>
</html>