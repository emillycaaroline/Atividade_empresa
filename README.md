# Atividade_empresa
Atividade avaliativa de Programação Web II


// codigo pronto
<p>NMR</p>
        <div>
            <form action="" method="post">
                <input type="number" name="numero">
                <br><br>
                <input type="submit">
            </form>
        </div>

        <?php
        $num = filter_input(INPUT_POST, "numero");
        $nmr = 20000;

         if($num >= $nmr){
            $bonus = 20000 * 0.01;
                echo "bateu $bonus";
            }else{
                echo "nao bateu";   
            }
         
        ?>

        
            echo "Salario final é $finaly"



           