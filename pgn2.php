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
            background: rgb(93, 31, 151);
            background: radial-gradient(circle, rgba(93, 31, 151, 1) 0%, rgba(130, 52, 208, 1) 37%, rgba(131, 59, 204, 1) 68%, rgba(99, 48, 149, 1) 81%, rgba(57, 49, 62, 1) 100%);
            /* tamanho */
            padding: 1px;
            /* Arredondar a borda */
            border-radius: 50px;
            color: rgb(255, 255, 255);
        }

        input {
            border-radius: 10px;
            padding: 3px;
        }

        .glow-on-hover {
            width: 130px;
            height: 40px;
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
            background: linear-gradient(45deg, #5200a0, #351c44, #8000ff, rgba(238, 220, 255, 1), rgba(208, 162, 255, 1), rgba(203, 119, 255, 1));
            position: absolute;
            top: -2px;
            left: -2px;
            background-size: 400%;
            z-index: -1;
            filter: blur(5px);
            width: calc(100% + 4px);
            height: calc(100% + 4px);
            animation: glowing 20s linear infinite;
            opacity: 100;
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
    </style>
</head>

<body>

    <!-- Adicionei uma caixas de texto para informar o nome do funcionario, valores da semana e do mes e o botão -->
    <div>
        <h3>Funcionario</h3>
        <form method="post" action="">
            <input type="text" name="name"> <br> <br>

            <br>semana 1
            <form action="" method="post">
                <input type="number" name="sem1"> <br>

                <br>semana 2
                <form action="" method="post">
                    <input type="number" name="sem2"> <br>

                    <br>semana 3
                    <form action="" method="post">
                        <input type="number" name="sem3"><br>

                        <br>semana 4
                        <form action="" method="post">
                            <input type="number" name="sem4"><br>

                            <br>mes
                            <form action="" method="post">
                                <input type="number" name="mes">

                                <br><br>
                                <button class="glow-on-hover" type="submit">Conferir</button> <br> <br> <br>

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

                                echo "<h3>Na primeira semana $fun bateu a meta Valor Bônus:$v.   ";
                            } else {
                                $v = 0;
                                echo "Na primeira semana $fun NÃO bateu a meta Valor Bônus:$v.   ";
                            }
                            if ($sem1 > $Msmn) {
                                $sob = $sem1 - $Msmn;
                                $va = $sob * 0.05;

                                echo "E exedeu a meta semanal Valor bonus:$va. <br> ";
                            } else {
                                $va = 0;
                                echo "E NÃO exedeu a meta Valor Bônus:$va <br>";
                            }


                            if ($sem2 >= $Msmn) {
                                $vv = $Msmn * 0.01;

                                echo "<h3>Na segunda semana $fun bateu a meta Valor Bônus:$vv.   ";
                            } else {
                                $vv = 0;
                                echo "Na segunda semana $fun NÃO bateu a meta Valor Bônus:$vv.   ";
                            }
                            if ($sem2 > $Msmn) {
                                $sob = $sem2 - $Msmn;
                                $vaa = $sob * 0.05;

                                echo "E exedeu a meta semanal Valor bonus: $vaa <br> ";
                            } else {
                                $vaa = 0;
                                echo "E NÃO exedeu a meta Valor Bônus: $vaa<br>";
                            }



                            if ($sem3 >= $Msmn) {
                                $vvv = $Msmn * 0.01;

                                echo "<h3>Na terceira semana $fun bateu a meta Valor Bônus:$vvv.   ";
                            } else {
                                $vvv = 0;
                                echo "Na terceira semana $fun NÃO bateu a meta Valor Bônus:$vvv.   ";
                            }
                            if ($sem3 > $Msmn) {
                                $sob = $sem3 - $Msmn;
                                $vaaa = $sob * 0.05;

                                echo "E exedeu a meta semanal Valor bonus: $vaaa <br> ";
                            } else {
                                $vaaa = 0;
                                echo "E NÃO exedeu a meta Valor Bônus: $vaaa<br>";
                            }



                            if ($sem4 >= $Msmn) {
                                $vvvv = $Msmn * 0.01;

                                echo "<h3>Na quarta semana $fun bateu a meta Valor Bônus:$vvvv.   ";
                            } else {
                                $vvvv = 0;
                                echo "Na quarta semana $fun NÃO bateu a meta Valor Bônus:$vvvv.";
                            }
                            if ($sem4 > $Msmn) {
                                $sob = $sem4 - $Msmn;
                                $vaaaa = $sob * 0.05;

                                echo "E exedeu a meta semanal Valor bonus: $vaaaa <br> ";
                            } else {
                                $vaaaa = 0;
                                echo "E NÃO exedeu a meta Valor Bônus:  $vaaaa<br>";
                            }

                            // comando para o mes, que se for maior começa executar a soma caso contrário a porcentagem a receber é 0
                            if ($mes > $Mmen) {
                                $sobrou = $mes - $Mmen;
                                $bonu = $sobrou * 0.1;
                                echo "<h2> Parabens $fun, você exedeu a meta mensal. Valor Bônus:$bonu<h2>  <br>";
                            } else {
                                $bonu = 00;
                                echo "Não exedeu a meta $bonu<br> </h3>";
                            }






                            //Variavel responsavel pelo valor do salario final onde soma o bonus recebido de cada semana e mes e soma com o salario minimo
                            $sf = $va + $vaa +  $vaaa + $vaaaa + $v + $vv + $vvv + $vvvv + $bonu + $min;
                            echo "<h1> Salário final $sf </h1>";






                            ?>
    </div>
</body>

</html>