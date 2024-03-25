<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            text-align: center;
            background: rgb(238, 220, 255);
            background: rgb(213, 170, 255);
            background: radial-gradient(circle, rgba(213, 170, 255, 1) 11%, rgba(195, 148, 255, 1) 76%, rgba(190, 144, 248, 1) 77%, rgba(77, 49, 83, 1) 100%, rgba(148, 187, 233, 1) 100%);
            /* tamanho */
            padding: 1px;
            /* Arredondar a borda */
            border-radius: 50px;
        }

        input {
            padding: 5px;
            border-radius: 50px;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
        }

        h1 {
            color: #5e29a1;
            font-family: 'Courier New', Courier, monospace;

        }



        .glow-on-hover {
            width: 220px;
            height: 50px;
            border: none;
            outline: none;
            color: #fff;
            background: #111;
            cursor: pointer;
            position: relative;
            z-index: 0;
            border-radius: 10px;
        }

        .glow-on-hover:before {
            content: '';
            background: linear-gradient(45deg, #000000, #19002f, #4b028c, #8700ff);
            position: absolute;
            top: -2px;
            left: -2px;
            background-size: 400%;
            z-index: -1;
            filter: blur(5px);
            width: calc(100% + 4px);
            height: calc(100% + 4px);
            animation: glowing 20s linear infinite;
            opacity: 0;
            transition: opacity .3s ease-in-out;
            border-radius: 10px;
        }

        .glow-on-hover:active {
            color: #000
        }

        .glow-on-hover:active:after {
            background: transparent;
        }

        .glow-on-hover:hover:before {
            opacity: 1;
        }

        .glow-on-hover:after {
            z-index: -1;
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: #111;
            left: 0;
            top: 0;
            border-radius: 10px;
        }

        @keyframes glowing {
            0% {
                background-position: 0 0;
            }

            50% {
                background-position: 400% 0;
            }

            100% {
                background-position: 0 0;
            }
        }

        .caixa-texto {
            display: inline-block;
            width: 100px;
            margin-right: 10px;
        }
    </style>
</head>

<body>

    </script>

    <!-- Adicionei uma caixas de texto para informar o nome do funcionario, valores da semana e do mes e o botão -->
    <div>
        <h1>Calculadora de Salário</h1>
        <h2>Funcionario</h2>
        <form method="post" action="">
            <input type="text" name="name"> <br> <br>

            <br>semana 1
            <form action="" method="post">
                <input type="number" class="caixa-texto" name="sem1">

                semana 2
                <form action="" method="post">
                    <input type="number" class="caixa-texto" name="sem2" required> <br><br>

                    semana 3
                    <form action="" method="post">
                        <input type="number" class="caixa-texto" name="sem3">

                        semana 4
                        <form action="" method="post">
                            <input type="number" class="caixa-texto" name="sem4"> <br><br>

                            <br>mes
                            <form action="" method="post">
                                <input type="number" name="mes">

                                <br><br>
                                <button class="glow-on-hover" type="submit">Conferir</button> <br> <br> 

                            </form>



                            <?php
                            // Comecei fazendo variaveis para as caixas de texto
                            $fun = filter_input(INPUT_POST, "name");

                            $sem1 = filter_input(INPUT_POST, "sem1");
                            $sem2 = filter_input(INPUT_POST, "sem2");
                            $sem3 = filter_input(INPUT_POST, "sem3");
                            $sem4 = filter_input(INPUT_POST, "sem4");

                            $mes = filter_input(INPUT_POST, "mes");
                            // Variaveis para o valor que é confirmado no fim e as metas a serem batidas.
                            $min = 1927.02;
                            $Msmn = 20000;
                            $Mmen = 80000;


                            //Comecei executar o comando, fiz o mesmo para os dias das quatros semanas do mês, se for maior  ou igual começa executar, se não cancela.
                            if ($sem1 >= $Msmn) {
                                $v = $Msmn * 0.01;
                            } else {
                                $v = 0;
                            }
                            if ($sem1 > $Msmn) {
                                $sob = $sem1 - $Msmn;
                                $va = $sob * 0.05;
                            } else {
                                $va = 0;
                            }
                            //semana 2--------------------------------------------------------------------------

                            if ($sem2 >= $Msmn) {
                                $vv = $Msmn * 0.01;
                            } else {
                                $vv = 0;
                            }
                            if ($sem2 > $Msmn) {
                                $sob = $sem2 - $Msmn;
                                $vaa = $sob * 0.05;
                            } else {
                                $vaa = 0;
                            }


                            //semana 3------------------------------------------------------------------------
                            if ($sem3 >= $Msmn) {
                                $vvv = $Msmn * 0.01;
                            } else {
                                $vvv = 0;
                            }
                            if ($sem3 > $Msmn) {
                                $sob = $sem3 - $Msmn;
                                $vaaa = $sob * 0.05;
                            } else {
                                $vaaa = 0;
                            }


                            //semana 4---------------------------------------------------------------------------
                            if ($sem4 >= $Msmn) {
                                $vvvv = $Msmn * 0.01;
                            } else {
                                $vvvv = 0;
                            }
                            if ($sem4 > $Msmn) {
                                $sob = $sem4 - $Msmn;
                                $vaaaa = $sob * 0.05;
                            } else {
                                $vaaaa = 0;
                            }

                            // comando para o mes, que se for maior começa executar a soma caso contrário a porcentagem a receber é 0
                            if ($mes > $Mmen) {
                                $sobrou = $mes - $Mmen;
                                $bonu = $sobrou * 0.1;;
                            } else {
                                $bonu = 00;
                            }

                            $metaS = $v + $vv + $vvv + $vvvv;
                            $exS = $va + $vaa + $vaaa + $vaaaa;

                            echo "<h2>Resultados para $fun</h2>";

                            echo "<h3>Bonus recebido por meta semanal: $metaS  ";

                            echo "E exedeu a meta semanal Valor bonus:$va. <br> ";

                            echo "<h3>Na segunda semana bateu a meta Valor Bônus:$exS.   ";
                            echo "E exedeu a meta semanal Valor bonus: $vaa <br> ";

                            echo "<h3>Na terceira semana bateu a meta Valor Bônus:$vvv.   ";
                            echo "E exedeu a meta semanal Valor bonus: $vaaa <br> ";

                            echo "<h3>Na quarta semana bateu a meta Valor Bônus:$vvvv.   ";
                            echo "E exedeu a meta semanal Valor bonus: $vaaaa <br> ";

                            echo "<h2>  exedeu a meta mensal. Valor Bônus:$bonu<h2>  <br>";




                            //Variavel responsavel pelo valor do salario final onde soma o bonus recebido de cada semana e mes e soma com o salario minimo
                            $sf = $va + $vaa +  $vaaa + $vaaaa + $v + $vv + $vvv + $vvvv + $bonu + $min;
                            echo "<h1> Salário final $sf </h1>";






                            ?>
    </div>
</body>

</html>