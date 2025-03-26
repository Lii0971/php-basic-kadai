<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
       <?php
       // クラスを定義する
       class Food {
           // プロパティを定義する(privateを使用)　プロパティ以外の変数（pyblicを使用）
           private $name;
           private $price;

           public function __construct(string $name, int $price){
            $this->name = $name;
            $this->price = $price;
           }

           public function show_price(){
            echo $this->price;
           }
       }

       // クラスを定義する
       class Animal{
        // プロパティを定義する
           private $name;
           private $height;
           private $weight;

           public function __construct(string $name, int $height, int $weight){
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
         }

        public function show_height(){
          echo $this->height;
        }
    }

       $a = new Food('ポテト',250);
       print_r($a);

       // 改行する
       echo '<br>';

       $b = new Animal('ドッグ',60,'5000');
       print_r($b);

       // インスタンス$foodのかくプロパティの値を出力する

       ?>
   </p>
</body>

</html>