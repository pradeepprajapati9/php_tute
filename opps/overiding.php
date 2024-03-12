<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!--  Method And Property Overriding -->
    <?php
    class bigboss
    {
        public $Name = "Laptop";

        public function ADD($ab, $bc)
        {
            echo "THis is Your Parent Class" . $ab * $bc;
        }
    }

    class chootaBoss extends bigboss
    {
        public $Name = "Computer";


        public function ADD($ab, $bc)
        {
            echo "THis is Your Child Class" . $ab + $bc;
        }
    }

    $call = new chootaBoss();
    echo $call->ADD(12, 34)
    ?>
</body>

</html>