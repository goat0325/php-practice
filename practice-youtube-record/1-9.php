<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = ["清水","二岡","高橋","松井"];
        //１つしか値を追加しない場合は、「$a[] = "新しい値"」で追加できる。
        $a[] = "清原";
        
        //array_pushで、$aに値を追加できる
        array_push($a,"江藤","元木");
        

        //配列に配列をくっつけることもできる
        $b = ["ルフィ","ゾロ","ナミ"];
        $merged = array_merge($a,$b);
        var_dump($merged);
        echo "<br>";
        echo "<br>";
        
        //array_unshiftで、配列の先頭に値を追加する
        array_unshift($a,"ゴジラ","モスラ");
        var_dump($a);
        echo "<br>";
        echo "<br>";

        //array_shiftで、先頭から値を取って消す
        //var_dump($○○);とすると、消した値が返ってくる（今回だとゴジラ）
        $first = array_shift($a);
        var_dump($first);
        echo "<br>";
        echo "<br>";

        //array_popで、列の末尾から値を消す
        //var_dump($○○);とすると、消した値が返ってくる（今回だと元木）
        $last = array_pop($a);
        var_dump($last);

        //他にも色んな関数があるため、その都度調べる。
        //連想配列は、「文字列」にするか、「０から始まる連番」にすること！エラーになるよ
    ?>
    
</body>
</html>