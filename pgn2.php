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

div{
   border: 5px solid rgb(0, 0, 0);
   padding: 1px;
   border-radius: 50px;
}
    </style>
</head>
<body>
    
    
        <div>
            <p>Funcionario</p>
       <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
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

                <p>mes</p>
                <form action="" method="post">
                <input type="number" name="mes">

                <br><br>
                <input type="submit">
            </form>
        

        <?php
        
        $fun = filter_input(INPUT_POST, "name");

        $sem1 = filter_input(INPUT_POST, "sem1");
        $sem2 = filter_input(INPUT_POST, "sem2");
        $sem3 = filter_input(INPUT_POST, "sem3");
        $sem4 = filter_input(INPUT_POST, "sem4");

        $mes = filter_input(INPUT_POST, "mes");

        $min = 1927.02;
        $Msmn = 20000;
        $Mmen = 80000;

           

            if($sem1 >= $Msmn){
            $v = $Msmn * 0.01;
            
                echo "<h3>Na primeira semana $fun bateu a meta Valor Bônus:$v.   ";

            }else{
                $v = 0;
                echo "Na primeira semana $fun NÃO bateu a meta Valor Bônus:$v.   ";
            }
            if($sem1 > $Msmn){
                $sob = $sem1 - $Msmn ;
                $va = $sob * 0.05;
               
                echo "E exedeu a meta semanal Valor bonus:$va. <br> "; 
            }else{
                $va = 0;
                echo "E NÃO exedeu a meta Valor Bônus:$va <br>";
            }


            if($sem2 >= $Msmn){
                $vv = $Msmn * 0.01;
                
                    echo "<h3>Na segunda semana $fun bateu a meta Valor Bônus:$vv.   ";
    
                }else{
                    $vv = 0;
                    echo "Na segunda semana $fun NÃO bateu a meta Valor Bônus:$vv.   ";
                }
                if($sem2 > $Msmn){
                    $sob = $sem2 - $Msmn ;
                    $vaa = $sob * 0.05;
                   
                    echo "E exedeu a meta semanal Valor bonus: $vaa <br> "; 
                }else{
                    $vaa = 0;
                    echo "E NÃO exedeu a meta Valor Bônus: $vaa<br>";
                }



                if($sem3 >= $Msmn){
                    $vvv = $Msmn * 0.01;
                    
                        echo "<h3>Na terceira semana $fun bateu a meta Valor Bônus:$vvv.   ";
        
                    }else{
                        $vvv= 0;
                        echo "Na terceira semana $fun NÃO bateu a meta Valor Bônus:$vvv.   ";
                    }
                    if($sem3 > $Msmn){
                        $sob = $sem3 - $Msmn ;
                        $vaaa = $sob * 0.05;
                       
                        echo "E exedeu a meta semanal Valor bonus: $vaaa <br> "; 
                    }else{
                        $vaaa = 0;
                        echo "E NÃO exedeu a meta Valor Bônus: $vaaa<br>";
                    }



                    if($sem4 >= $Msmn){
                        $vvvv = $Msmn * 0.01;
                        
                            echo "<h3>Na quarta semana $fun bateu a meta Valor Bônus:$vvvv.   ";
            
                        }else{
                            $vvvv = 0;
                            echo "Na quarta semana $fun NÃO bateu a meta Valor Bônus:$vvvv."   ;
                        }
                        if($sem4 > $Msmn){
                            $sob = $sem4 - $Msmn ;
                            $vaaaa = $sob * 0.05;
                           
                            echo "E exedeu a meta semanal Valor bonus: $vaaaa <br> "; 
                        }else{
                            $vaaaa = 0;
                            echo "E NÃO exedeu a meta Valor Bônus:  $vaaaa<br>";
                        }

                        if($mes > $Mmen){
                            $sobrou = $mes - $Mmen ;
                            $bonu = $sobrou * 0.1;
                            echo "<h2> Parabens $fun, você exedeu a meta mensal. Valor Bônus:$bonu<h2>  <br>";
                        }else{
                            $bonu = 00;
                            echo "Não exedeu a meta $bonu<br> </h3>";
                        }

                          
                      
                        


                        $sf = $va + $vaa +  $vaaa + $vaaaa + $v + $vv +$vvv + $vvvv + $bonu + $min;
                        echo "<h1> Salário final $sf </h1>";
                        
            


            
           
        ?>
        </div>
</body>
</html>