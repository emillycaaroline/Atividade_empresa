<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATV2</title>
    <style>
        body {
            text-align: center;
            background: rgb(115, 108, 241);
            background: linear-gradient(90deg, rgba(115, 108, 241, 1) 0%, rgba(135, 255, 175, 1) 31%, rgba(191, 255, 85, 1) 47%, rgba(211, 255, 183, 1) 69%, rgba(213, 255, 193, 1) 69%, rgba(117, 124, 234, 1) 100%);
        }

        input {
            margin-right: 1px;
        }

        h2 {
            font-family: cursive;
        }

        .Pagina {
            border: 5px solid #000;

            margin-top: 10px;
            
            border-style: abstract;
            border-color: #19002f;
        }

        /* Botão pego da internet */
        .custom-btn {
            width: 130px;
            height: 40px;
            color: #fff;
            border-radius: 5px;
            padding: 10px 25px;
            font-family: 'Lato', sans-serif;
            font-weight: 500;
            background: transparent;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            display: inline-block;
            box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5),
                7px 7px 20px 0px rgba(0, 0, 0, .1),
                4px 4px 5px 0px rgba(0, 0, 0, .1);
            outline: none;
        }

        .btn-2 {
            background: rgb(115, 108, 241);
            background: linear-gradient(90deg, rgba(232, 233, 255, 1) 100%,   rgba(168, 165, 255, 1) 58%, rgba(115, 108, 241, 1) 0%,);
            border: none;

        }

        .btn-2:before {
            height: 0%;
            width: 2px;
        }

        .btn-2:hover {
            box-shadow: 4px 4px 6px 0 rgba(255, 255, 255, .5),
                -4px -4px 6px 0 rgba(116, 125, 136, .5),
                inset -4px -4px 6px 0 rgba(255, 255, 255, .2),
                inset 4px 4px 6px 0 rgba(0, 0, 0, .4);
        }
        p{
            font-family: cursive;
        }
    </style>
</head>

<body>
    <div class="Pagina">
        <h2>Vendedor:</h2>
        <form method="post" action="">
            <input type="text" name="vendedor"> 

            <p>semana 1:</p>
            <form action="" method="post">
                <input type="number" name="semana1" required>

                <p>semana 2:</p>
                <form action="" method="post">
                    <input type="number" name="semana2" required>

                    <p>semana 3:</p>
                    <form action="" method="post">
                        <input type="number" name="semana3" required>

                        <p>semana 4:</p>
                        <form action="" method="post">
                            <input type="number" name="semana4" required> 

                            <p>mês:</p>
                            <form action="" method="post">
                                <input type="number" name="mes" required>

                                <br><br>
                                <button class="custom-btn btn-2">Verificar</button>
                                <br> <br>

                                <?php
                                //Variáveia
                                $mes = filter_input(INPUT_POST, "mes");
                                $semana1 = filter_input(INPUT_POST, "semana1");
                                $semana2 = filter_input(INPUT_POST, "semana2");
                                $semana3 = filter_input(INPUT_POST, "semana3");
                                $semana4 = filter_input(INPUT_POST, "semana4");
                                $vendedor = filter_input(INPUT_POST, "vendedor");
                                $SalarioMinimo = 1927.02;
                                $MetaSemanal = 20000;
                                $MetaMensal = 80000;

                                //Calcula se o valor ganho é maior que a meta assim ganha 5%

                                if ($semana1 > 20000) {
                                    $BonusSemana1 = ($semana1 - 20000) * 0.05;
                                } else {
                                    $BonusSemana2 = 00;
                                }
                                if ($semana2 > 20000) {
                                    $BonusSemana2 = ($semana2 - 20000) * 0.05;
                                } else {
                                    $BonusSemana2 = 00;
                                }
                                if ($semana3 > 20000) {
                                    $BonusSemana3 = ($semana3 - 20000) * 0.05;
                                } else {
                                    $BonusSemana3 = 00;
                                }
                                if ($semana4 > 20000) {
                                    $BonusSemana4 = ($semana4 - 20000) * 0.05;
                                } else {
                                    $Bonuss = 00;
                                }

                                //Calcula se o valor semanal se for igual ganha 1%
                                if ($semana1 >= 20000) {
                                    $bonusMetaSemanal1 = 20000 * 0.01;
                                } else {
                                    $bonusMetaSemanal1 = 00;
                                }

                                if ($semana2 >= 20000) {
                                    $bonusMetaSemanal2 = 20000 * 0.01;
                                } else {
                                    $bonusMetaSemanal2 = 00;
                                }

                                if ($semana3 >= 20000) {
                                    $bonusMetaSemanal3 = 20000 * 0.01;
                                } else {
                                    $bonusMetaSemanal3 = 00;
                                }

                                if ($semana4 >= 20000) {
                                    $bonusMetaSemanal4 = 20000 * 0.01;
                                } else {
                                    $bonusMetaSemanal4 = 00;
                                }





                                //Calcula se o valor ganho mensalmente é maior que meta ganha 10%
                                if ($mes > 80000) {
                                    $BonusMensal = ($mes - 80000) * 0.1;
                                } else {
                                    $BonusMensal = 00;
                                }

                                $TotalBonusSemanal = $bonusMetaSemanal1 +  $bonusMetaSemanal2 +  $bonusMetaSemanal3 +  $bonusMetaSemanal4;
                                $TotalExcedenteSemanal =  $BonusSemana1 + $BonusSemana2 + $BonusSemana3 + $BonusSemana4;
                                $SomaTotal = $TotalBonusSemanal + $TotalExcedenteSemanal + $BonusMensal + $SalarioMinimo;

                                echo "<h6>Valor ganho por meta batida na semana $TotalBonusSemanal</h6>";
                                echo "<h6>Valor ganho por meta exedida na semana $TotalExcedenteSemanal</h6>";
                                echo "<h6>Valor ganho por meta batida no mês $BonusMensal</h6>";
                                echo "<h6>total=$SomaTotal</h6>";

                                ?>
    </div>

>>>>>>> 3bd95cc12b30b9a7e9b411851efac0a17b1dc819

</body>

</html>