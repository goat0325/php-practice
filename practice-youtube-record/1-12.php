<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //関数
        $arr = [1, 2, 3];
        $x = count($arr);   //count関数＝数を数える関数
        echo $x;

        echo "<br>";
        echo "<br>";
        
        //============================================
    ?>

    <?php
        $x = -10;
        $y = abs($x);   //absolute number=絶対値関数　absは絶対値を返してくれる関数
        echo $y;

        echo "<br>";
        echo "<br>";
    ?>

    <?php
    //-----ここからfunctionの文法-----

        // function 関数名 ($引数1, $引数2){   $引数1,2のことを仮引数と呼ぶ。どのデータを呼ぶのか今の段階ではまだわからないため、ここではまだ名前しか決めれない
            // 処理　　　計算や処理

            // return 返り値;
        // }

        //関数名 ($実取引);

    //----------ここまで----------

        function add($x, $y){
            $z = $x + $y;
            return $z;
        }

        $a = 15;
        $b = 6;

        $sum = add($a, $b);
        echo $sum;
    ?>

    
</body>
</html>