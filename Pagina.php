<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My business</title>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
    
<section>
        <span>Sistema de tabuada</span>
        <div>
            <form action="" method="post">
                <input type="number" name="numero">
                <br><br>
                <input type="submit">
            </form>
        </div>
        <br>
        <!-- PHP -->
        <div>
            <?php
                $num = filter_input(INPUT_POST, "numero");
                if($num){
                    for ($i=1; $i < 11; $i++) { 
                        echo "$num x $i =" . ($num * $i). "<br>";
                    }
                }else{
                    // echo "<script>alert('informe um numero  ');</script"; FORMA DE FAZERE EM JAVASCRIPT
                    echo "<h1>informe um numero</h1>";
                }
            ?>
        </div>
    </section>

</body>
</html>