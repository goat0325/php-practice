<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //マイナスが含まれている数字があるかを配列する
        $arr = [12, 45, 22, 67, 36, -8, 5, 56, 13];

        //countを使って、配列の要素数を取得
        $num = count($arr);   //数字が何個あるかが←でわかる（今回だと９つの数字）

        $message = "含まれていません";

        for ($i=0; $i<$num; $i++){   //←配列の要素数分、処理を繰り返す（今回は９つ数字があるので、9回繰り返す）
            $value = $arr[$i];   //$iは配列の要素が順番に入っていくことになる
            if ($value < 0){   //もし$value($arrの配列)の中に、０より小さい数字があった時
                $message = "含まれています";    //含まれているというメッセージを出力する
                break;   //含まれているというメッセージが出た場合は、そこでbreak=処理終了してください
            }
        }
        echo $message;

        echo "<br>";
        echo "<br>";
        echo "<br>";
        //================================================================================
    ?>

    <?php
        


        //continue文　　　複雑なfor文の時に効力発揮することが多い！
        //配列にある偶数だけの総和が知りたい
        $sum = 0;   //$sumは初期値０であるという変数を用意

        for ($i=0; $i<$num; $i++){
            $value = $arr[$i];
            if ($value %2 === 1 ){   //２で割った時に余りが１の場合は奇数なので、
                continue;   //その時はcontinue＝次の値に進んでくださいという命令
            }
            $sum +=$value;   //奇数じゃない時は、$sum＝偶数なので、$value=$arrの配列の値を一つずつ足し算していってという命令
        }
        echo $sum;

        echo "<br>";
        echo "<br>";
        echo "<br>";
        //================================================================================
    ?>

    <?php
        //while文　　for文と同じような意味

        //----ここからwhile文の構文----
        //初期化式;

        //while(継続条件式){
            //処理

            //更新式;
        //}
        //----ここまで----  ↑これだとfor文とまったく同じ意味


        //最初にやったfor文をwhile文で書いてみる
        $i = 0;

        while ($i < $num){   //←配列の要素数分、処理を繰り返す（今回は９つ数字があるので、9回繰り返す）
            $value = $arr[$i];   //$iは配列の要素が順番に入っていくことになる
            if ($value < 0){   //もし$value($arrの配列)の中に、０より小さい数字があった時
                $message = "含まれています";    //含まれているというメッセージを出力する
                break;   //含まれているというメッセージが出た場合は、そこでbreak=処理終了してください
            }
            $i++;
        }
        echo $message;

        echo "<br>";
        echo "<br>";
        echo "<br>";
        //================================================================================
    ?>

    <?php
        //foreach文　　　連想配列の要素から１つずつ順番に値を取り出す

        //----ここからwhile文の構文----
        
        //foreach ($連想配列 as $変数名) {
            //処理
        //}

        //----ここまで----


        $number = [1, 2, 3, 4, 5];   //PHPでは連想配列も配列も同じようなもの

        foreach ($number as $value){
            echo $value;
            echo "<br>";
        }

        //foreach文を使うと、マイナスの数字が含まれているかどうかを出力する書き方がわかりやすくなる
        $message = "含まれていません";

        foreach ($arr as $value){
            if($value <0){
                $message = "含まれています";
                break;
            }
        }
        echo $message;

        echo "<br>";
        echo "<br>";
        echo "<br>";

        //================================
    ?>

    <?php

        $fruits = [
            'りんご' => 3,
            'みかん' => 2,
            'ぶどう' => 6
        ];

        foreach ($fruits as $key => $value){
            echo "{$key}の個数は{$value}個です";
            echo "<br>";
        }

        

    ?>
</body>
</html>