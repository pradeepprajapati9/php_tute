<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    class Calculation
    {
        public $a, $b, $c;
        function sum()
        {

            $this->c = $this->a + $this->b;
            return "Sum is " . $this->c;
        }

        function sub()
        {
            $this->c = $this->a - $this->b;
            return "Sub is " . $this->c;
        }
    }

    $sum = new Calculation();
    $sum->a = 30;
    $sum->b = 20;
    echo $sum->sum();

    $sub = new Calculation();
    $sub->a = 30;
    $sub->b = 20;
    echo $sub->sub();



    ?>

</body>

</html>