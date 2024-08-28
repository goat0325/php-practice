<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //for文の学習
        for ($i=0; $i<10; $i++){
            echo "こんにちは";
            echo "<br>";
        }
        //for (初期化処理; 継続処理;　更新処理) {
            //処理
        //}　　このように書く
        //継続条件がTRUEの間ずっと処理が行われる。
        echo $i;
        echo "<br>";
        echo "<br>";
        echo "<br>";

        $i++;
        $i = $i + 1;
        $i += 1;   //この３つはほぼ同じ意味（シンタックスシュガーと呼ばれる）

        for ($i=0; $i<10; $i++){
            $count = (string) $i;
            echo $count . "回目の繰り返しです";
            echo "<br>";
        }
        echo "<br>";
        echo "<br>";
        echo "<br>";
        
        //上は「.」(文字列の結合演算)を使って出力していたが、他にも書き方がある
        //下は「埋め込み」という記法（"{}"）
        for ($i=0; $i<10; $i++){
            $count = (string) $i;
            echo "{$count}回目の繰り返しです";
            echo "<br>";
        }
        echo "<br>";
        echo "<br>";
        echo "<br>";
    ?>

    <?php
        //for文を二重にしてみよう
        for ($i=1; $i<10; $i++){
            for ($j=1; $j<10; $j++){
                $x = $i * $j;
                echo "{$i}✖︎{$j}={$x}";
                echo "<br>";
            }
            
        }
        echo "<br>";
        echo "<br>";
        echo "<br>";
    ?>
    

    <!-- テーブル形式にして表にしてみよう -->
    <table border="1">
    <?php
        //for文を二重にしてみよう
        for ($i=1; $i<10; $i++){
            echo "<tr>";
            for ($j=1; $j<10; $j++){
                $x = $i * $j;
                echo "<td>{$x}</td>";
            }
            echo "</tr>";
        }
    
    ?>
    </table>
    
</body>
</html>