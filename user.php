<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <div class="container">
        <?php
        class User {
            public $name;
            public $age;

            public function __construct($name, $age) {
                $this->name = $name;
                $this->age = $age;
            }

            public function introduce(): void {
                echo "<p>こんにちは、私は{$this->name}です。年齢は{$this->age}歳です。</p>";
                echo "</div>";
            }

            public function isAdult(): bool {
                return $this->age >= 18;
            }
        }

            $user1 = new User(name:"田中太郎", age:25);
            $user2 = new User(name:"佐藤花子", age:17);
            $user3 = new User(name:"鈴木一郎", age:30);

            echo "<h2>自己紹介</h2>";
            echo $user1->introduce();
            echo $user2->introduce();
            echo $user3->introduce();

            echo "<h2>成人判定</h2>";
            
            $users = [ $user1, $user2, $user3 ];
            foreach ($users as $user) {
                if ($user->isAdult()) {
                    echo "<p class='adult'>✓ {$user->name}さんは成人です。</p>";
                } else {
                    echo "<p class='minor'>✗ {$user->name}さんは未成年です。</p>";
                }
            }

        ?>  
        </div>
    
</body>
</html>