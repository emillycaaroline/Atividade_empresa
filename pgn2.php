<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATV2</title>
    <style>
        body {
            text-align: center;
        }

        input {

            margin-right: 10px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <h2>Vendedor</h2>
    <form method="post" action="">
        <input type="text" name="vendedor" > <br>

        <p>semana 1:</p>
        <form action="" method="post">
            <input type="number" name="semana1" ><br>

            <p>semana 2:</p>
            <form action="" method="post">
                <input type="number" name="semana2" > <br>

                <p>semana 3:</p>
                <form action="" method="post">
                    <input type="number" name="semana3" ><br>

                    <p>semana 4:</p>
                    <form action="" method="post">
                        <input type="number" name="semana4" > <br>

                        <p>mês:</p>
                        <form action="" method="post">
                            <input type="number" name="mes" >

                            <br><br>
                            <button type="submit">Conferir</button> <br> <br>

                            <?php
                            $mes = filter_input(INPUT_POST, "mes");
                            $semana1 = filter_input(INPUT_POST, "semana1");
                            $semana2 = filter_input(INPUT_POST, "semana2");
                            $semana3 = filter_input(INPUT_POST, "semana3");
                            $semana4 = filter_input(INPUT_POST, "semana4");
                            $vendedor = filter_input(INPUT_POST, "vendedor");
                            $SalarioMinimo = 1927.02;
                            $MetaSemanal = 20000;
                            $MetaMensal = 80000;

                            if($semana1>=20000){
                                $bonusMetaSemanal1=20000*0.01;
                                echo "$bonusMetaSemanal1";
                            }
                            if($semana2>=20000){
                                $bonusMetaSemanal2=20000*0.01;
                                echo "$bonusMetaSemanal2";
                            }
                            if($semana3>=20000){
                                $bonusMetaSemanal3=20000*0.01;
                                echo "$bonusMetaSemanal3";
                            }
                            if($semana4>=20000){
                                $bonusMetaSemanal4=20000*0.01;
                                echo "$bonusMetaSemanal4";
                            }

                            if($semana1>20000){
                                $bonusExcedenteSemanal1=($semana1-20000)*0.05;
                                echo "$bonusExcedenteSemanal1";
                            }
                            if($semana2>20000){
                                $bonusExcedenteSemanal2=($semana2-20000)*0.05;
                                echo "$bonusExcedenteSemanal2";
                            }
                            if($semana3>20000){
                                $bonusExcedenteSemanal3=($semana3-20000)*0.05;
                                echo "$bonusExcedenteSemanal3";
                            }
                            if($semana4>20000){
                                $bonusExcedenteSemanal4=($semana4-20000)*0.05;
                                echo "$bonusExcedenteSemanal4";
                            }
                            if ($mes > 80000) {
                                $BonusMensal = ($mes - 80000)* 0.1;
                                echo "$BonusMensal";
                            } else {
                                $bonu = 00;
                            }
                            
                            ?>

                            
</body>

</html>