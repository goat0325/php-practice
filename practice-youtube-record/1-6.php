<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (TRUE){
            echo "()の中がTRUEの時しか出ないよ";
            echo "<br>";
        }
        echo "if文の下だよ";
        echo "<br>";

        if (FALSE){
        //これはFALSEなのでif文の中の出力は出ないけど、if文より下の出力はされる
            echo "()の中がTRUEの時しか出ないよ";
            echo "<br>";
        }
        echo "ここはif文がFALSEだけど、if文の{}の中じゃないから出力されるよ";
        echo "<br>";

        if(TRUE){
            $x = 5 +3;
            echo $x;
            echo "<br>";
        }
        echo "<br>";

        $bool = TRUE;
        if ($bool) {
            $x = 5 + 4;
            echo $x;
            echo "<br>";
        }

        $bool = FALSE;
        //これはFALSEだから出力されない
        if ($bool) {
            $x = 5 + 4;
            echo $x;
            echo "<br>";
        }
        echo "<br>";

        if (TRUE || FALSE) {
        //これは「TRUEまたはFALSEなら出力」という意味になるため、出力される
            $x = 5 + 5;
            echo $x;
            echo "<br>";
        }
    
        if (TRUE && FALSE) {
        //これは「TRUEかつFALSEなら出力」という意味になるため、出力されない
            $x = 5 + 5;
            echo $x;
            echo "<br>";
        }

        echo "<br>";
        echo "<br>";
        echo "ここから下は比較演算だよ";
        echo "<br>";
        
        var_dump(1 < 2);
        echo "<br>";
        var_dump(2 > 1);
        echo "<br>";
        echo "<br>";
        // <=　や　>=も可能。一般的には不等号の向きが「<=」と記すように書く
        var_dump(1 <= 2);
        echo "<br>";
        var_dump(2 <= 1);
        echo "<br>";
        var_dump(1 <= 1);
        echo "<br>";
        echo "<br>";
        //　==　は両辺の値が等しかった時にTRUEになる
        var_dump(1 == 2);
        echo "<br>";
        var_dump(1 == 1);
        echo "<br>";
        echo "<br>";
        //!=は両辺の値が等しくなかった時にTRUEになる
        var_dump(1 != 2);
        echo "<br>";
        var_dump(1 != 1);
        echo "<br>";
        echo "<br>";
        
        echo "変数を使った比較もできる！";
        $x = 1;
        $y = 2;
        var_dump($x < $y);
        echo "<br>";
        var_dump($x > $y);
        echo "<br>";
        echo "<br>";
        echo "暗黙の型変換はここでも行われちゃう";
        echo "<br>";
        var_dump(1 < "a");


    ?>
</body>
</html>