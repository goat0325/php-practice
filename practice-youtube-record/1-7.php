<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = 0;

        if ( $x > 0 ) {
            if ( $x % 2 === 0 ) {
                echo "整の数だよ";
            }else{
                echo "整の奇数だよ";
            }
        }elseif ( $x < 0) {
            if($x%2===0){
                echo "負の数だよ";
            }else{
                echo "負の奇数だよ";
            }
        }else{
            echo "ゼロだよ";
        }
    ?>
    
</body>
</html>