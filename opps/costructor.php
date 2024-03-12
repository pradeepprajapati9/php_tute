<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    class Person
    {
        public $name, $age;
        function __construct($Name, $Age)
        {
            $this->name = $Name;
            $this->age=$Age;
        }

        function Show()
        {
            echo "Your Name Is" . $this->name."<br>";
            echo "Your Age Is" . $this->age;
        }
    }

    $Name = new Person("Laptop", 23);
    echo $Name->Show();
    ?>
</body>

</html>