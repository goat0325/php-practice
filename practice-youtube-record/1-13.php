<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //クラス   =データ
        class Human {
            //下の$name,$birthday,$genderの3つのデータはプロパティと呼ぶ
            public $name;   //public=プロパティ（今回だと$name）を外部に公にさらす
            private $birthday;   //private=プロパティ（今回だと$bairthdayと$gender）を外部から隠す
            private $gender;   //特に理由がなければ基本はprivateで書くこと


            //デフォルトのコンストラクトは何も定義されていないが、自分で定義することもできる
            public function __construct($name, $birthday, $gender){
                //今からコンストラクトで作ろうとしているhumanのオブジェクトが、thisという変数に代入されている
                $this->name = $name;
                $this->birthday = $birthday;
                $this->gender = $gender;

            }

            //public function  =メソッド（ふるまい）
            public function walk() {
                echo "{$this->name}は歩きます<br>";
            }

            public function eat(){
                echo "食べます<br>";
            }
        }

        //コンストラクタ   モノを呼び出すことができる
        $human = new Human("ルフィ", "1994/3/25", "男");   //←一人の人間を作り出すみたいな感じ
        $human->eat();   //←これでメソッドを呼び出せる
        $human->walk();
    ?>
    
</body>
</html>