<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class</title>
</head>
<body>
    <?php
        class Human {
            private $name;
            private $birthday;
            private $gender;

            public function __construct($name, $birthday, $gender)
            {
                $this->name = $name;
                $this->birthday = $birthday;
                $this->gender = $gender;
            }

            public function walk()
            {
                echo "{$this->name}は歩く<br/>";
            }

            public function eat()
            {
                echo '食べる<br/>';
            }

            public function explain_gender($word)
            {
                echo "私は{$this->gender}です {$word}";
            }
        }

        $human = new Human('サトウ', 918, 'male');
        $human->eat();
        $human->walk();
        $human->explain_gender('よろしく!');

    ?>
</body>
</html>
