<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ユーザー管理プログラム</title>
</head>

<body>
    <?php
    class User
    {
        public string $name;
        public int $age;

        public function __construct(string $name, int $age)
        {
            $this->name = $name;
            $this->age = $age;
        }

        public function introduce(): string
        {
            return "こんにちは、私は" . $this->name . "です。"
                . $this->age . "歳です。<br>";
        }

        public function isAdult(): bool
        {
            return $this->age >= 18;
        }
    }

    $users = [
        new User("田中太郎", 25),
        new User("佐藤花子", 17),
        new User("鈴木一郎", 30),
    ];

    echo "<h2>自己紹介</h2>";

    foreach ($users as $user) {
        echo $user->introduce();
    }

    echo "<h2>成人判定</h2>";

    foreach ($users as $user) {
        if ($user->isAdult()) {
            echo $user->name . "は成人です。<br>";
        } else {
            echo $user->name . "は未成年です。<br>";
        }
    }
    ?>
</body>