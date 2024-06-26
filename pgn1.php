<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade-Calculo</title>
    <style>
        body {
            text-align: center;
            background: rgb(238, 220, 255);
            background: rgb(213, 170, 255);
            background: radial-gradient(circle, rgba(213, 170, 255, 1) 11%, rgba(195, 148, 255, 1) 76%, rgba(190, 144, 248, 1) 77%, rgba(77, 49, 83, 1) 100%, rgba(148, 187, 233, 1) 100%);
            padding: 1px;
            /* Arredondar a borda */
            border-radius: 50px;
        }

        input {
            /* Arruma a borda */
            padding: 5px;
            border-radius: 50px;
        }

        .caixa-texto {
            /* Arruma as caixas de texto */
            display: inline-block;
            width: 100px;
            margin-right: 10px;
        }

        .Form {
            /* Adiciona borda no formulário */
            border: 5px solid #000;
            border-radius: 50px;
            margin-top: 10px;
            width: 700px;
            border-style: double;
            border-color: #19002f;


        }

        h1 {
            /* Arruma o valor final adicionando cor e borda */
            color: #8700ff;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            border: 2px solid #000;
            border-radius: 30px;
            border-style: dotted;



        }

        h4 {
            /* Adiciona cor vermelha no alerta de erro para chama atenção */
            color: red;
        }

        p {
            /* Altera a fonte dos valores da meta */
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        .title {
            /* Coloca cor e almenta o tamanho do titulo */
            color: #5e29a1;
            font-size: 30px;
        }

        /* botão Pego de um site no google (site adicionado no README)------------------------------------------------------------------------------------------------------------------ */
        html,
        body {
            /* alinha a pagina toda incluindo o botão */
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

        .glow-on-hover {
            width: 100px;
            height: 30px;
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
            /* Adiciona as cores interativas no fundo do botão */
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
            /* Adiciona ação ao ativar o botão */
            color: yellow;
        }

        .glow-on-hover:hover:before {
            opacity: 100;
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
    </style>
</head>

<body>

    </script>

    <!-- Adicionei uma caixas de texto para informar o nome do funcionario, valores da semana e do mes e o botão -->
    <div>
        <div class="Form">
            <h2 class="title">Calculadora de Salário</h2>
            <h2>Funcionario</h2>
            <form method="post" action="">
                <input type="text" name="name" required> <br> <br>

                <br>semana 1
                <form action="" method="post">
                     <input type="number" class="caixa-texto" name="sem1" required>          <!--required torna o formulario obrigatorio -->

                    semana 2
                    <form action="" method="post">
                        <input type="number" class="caixa-texto" name="sem2" required> <br><br>

                        semana 3
                        <form action="" method="post">
                            <input type="number" class="caixa-texto" name="sem3" required>

                            semana 4
                            <form action="" method="post">
                                <input type="number" class="caixa-texto" name="sem4" required> <br>

                                <br>mês
                                <form action="" method="post">
                                    <input type="number" name="mes" required>

                                    <br><br>
                                    <button class="glow-on-hover" type="submit">Conferir</button> <br> <br>


                                </form>
        </div>


        <?php
        // Comecei fazendo variaveis para puxar a informação adicionada em cada caixa de texto
        $fun = filter_input(INPUT_POST, "name");

        $sem1 = filter_input(INPUT_POST, "sem1");
        $sem2 = filter_input(INPUT_POST, "sem2");
        $sem3 = filter_input(INPUT_POST, "sem3");
        $sem4 = filter_input(INPUT_POST, "sem4");

        $mes = filter_input(INPUT_POST, "mes");

        // Variaveis para o valor do salario minimo que é confirmado no fim e as metas a serem batidas.
        $min = 1927.02;
        $Msmn = 20000;
        $Mmen = 80000;

        $totalSem = $sem1 + $sem2 + $sem3 + $sem4;
        if ($mes != $totalSem) {
            echo "<h4>Possivel Erro: A soma das semanas não é igual ao valor do mês.</h4>";
            // Variavel para informar um possivel erro se o valor mensal não bater com as semanas .
        }



        //Comecei executar o comando, fiz o mesmo para os dias das quatros semanas do mês, se for maior  ou igual começa executar e irá calcular 1% dos 20 000, se não o valor passa a ser 0.
        if ($sem1 >= $Msmn) {
            $v = $Msmn * 0.01;
        } else {
            $v = 0;
        }
        if ($sem1 > $Msmn) { // se o valor for maior vai somar 5% a mais sobre oque sobrar.
            $sob = $sem1 - $Msmn;
            $va = $sob * 0.05;
        } else {
            $va = 0;
        }
        //As semnas seguintes apenas se repete o processo.
        //semana 2------------------------------------------------------------------------------------------------------------------

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


        //semana 3---------------------------------------------------------------------------------------------------------------------
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


        //semana 4------------------------------------------------------------------------------------------------------------------
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
 
        // comando para o mes, que se for maior começa executar e somar 5% do que excedeu a soma caso contrário o valor passa ser 0
        if ($mes > $Mmen) {
            $sobrou = $mes - $Mmen;
            $bonu = $sobrou * 0.1;;
        } else {
            $bonu = 00;
        }


        //variavel responsavel por somar o valor total ganho nas metas 
        $metaSemanal = $v + $vv + $vvv + $vvvv;
        $excedentesemanal = $va + $vaa + $vaaa + $vaaaa;

        //Adiciona os valores na tela
        echo "<h2>Resultado Salárial para $fun</h2>";

        echo "<p>Salario minimo: $min</p>";

        echo "<p>Bonus recebido por meta semanal: $metaSemanal</p>";

        echo "<p>Bonus recebido por excedentes semanais $excedentesemanal.</p>";

        echo "<p>  exedeu a meta mensal. Valor Bônus:$bonu</p>  ";

        
       

        // valor do salario final (soma de tudo)

        //Variavel responsavel pelo valor do salario final onde soma o bonus recebido de cada semana e mes e soma com o salario minimo
        $sf = $va + $vaa +  $vaaa + $vaaaa + $v + $vv + $vvv + $vvvv + $bonu + $min;
        echo "<h1> Salário final $sf </h1>";






        ?>
    </div>
</body>

</html>