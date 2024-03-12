<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // DATE MATHOED
    echo "<br>";
    echo "<br>";
    echo "TODAY IS DATE ", date("d" . "<br>"); // 0-9 tk 01,02,03,04 aise print krta hai
    echo "<br>";
    echo "TODAY IS DATE ", date("j" . "<br>"); // isme aisha kuch bhi nhi h
    echo "<br>";
    echo "TODAY IS DATE ", date("jS" . "<br>"); // isme last kuch aishe add kr deta hai 1st 2nd 3rd;

    // MONTH
    echo "<br>";
    echo "MONTH IS  ", date("F" . "<br>"); // FULL NAME
    echo "<br>";
    echo "MONTH IS  ", date("m" . "<br>"); // 03
    echo "<br>";
    echo "MONTH IS  ", date("n" . "<br>"); // 3
    echo "<br>";
    echo "MONTH IS  ", date("M" . "<br>"); // Mar


    // YEAR
    echo "<br>";
    echo "YEAR  IS  ", date("y" . "<br>"); // 23
    echo "<br>";
    echo "YEAR IS  ", date("Y" . "<br>"); // 2023
    echo "<br>";


    // FULL DATE
    echo "FULL DATE IS  ", date("d/F/Y");

    // WEEK
    echo "<br>";
    echo "<br>";
    echo "TODAY WEEK  IS  ", date("D" . "<br>"); //Thu
    echo "<br>";
    echo "TODAY WEEK IS  ", date("l" . "<br>"); //Thursday
    echo "<br>";
    echo "TODAY WEEK IS  ", date("w" . "<br>"); //4
    echo "<br>";
    echo "TODAY WEEK IS  ", date("N" . "<br>"); //4
    echo "<br>";
    echo "WHAT IS DAY OF THIS YEAR ", date("z" . "<br>");
    echo "<br>";
    echo "WHAT IS WEEK OF THIS YEAR ", date("W" . "<br>");
    echo "<br>";
    echo "WHAT IS THE DAY OF MONTH ", date("t" . "<br>");
    echo "<br>";
    echo "IS MONTH IS LEAPYEAR", date(" L " . "<br>"); //IF LEAPYEAR=1 NOT=0

    // TIME
    echo "<br>";
    echo "<br>";
    echo "HOUR IS ", date("h"); //12

    echo "<br>";
    echo "HOUR IS ", date("H"); //00

    echo "<br>";
    echo "HOUR IS ", date("g"); //12

    echo "<br>";
    echo "HOUR IS ", date("G"); //0

    echo "<br>";
    echo "MINUTE IS ", date("i");

    echo "<br>";
    echo "SECOND IS ", date("s");

    echo "<br>";
    echo "MERIDUIM IS ", date("A"); //AM

    // FULL TIME IS/
    echo "<br>";
    echo "FULL TIME  IS ", date("h:i:sa"); //AM
    echo "<br>";
    date_default_timezone_set("Asia/Kolkata");
    echo "FULL TIME  IS ", date("h:i:sa"); //AM


    // HISTORY TIME
    echo "<br>";
    echo "TIME AND DATE", date("d-m-Y h:i:sa");
    echo "<br>";
    echo date("l d-m-Y h:i:sa", mktime(0, 0, 0, 10, 12, 2001));
    echo "<br>";
    echo "<br>";
    echo date("l d-m-Y h:i:sa", gmmktime(0, 0, 0, 10, 12, 2001));

    // FUTURE TIME
    echo "<br>";
    echo "<br>";
    $date = date_create("2024-03-15");
    echo date_format($date, "l d/m/y h:i:sa");

    // CHECKDATE
    echo "<br>";
    echo checkdate(2, 10, 2023); // 1=true 0 false date hai ki nhi

    // date_diff
    $date1 = date_create("2024-03-15");
    $date2 = date_create("2023-04-16");
    $diff = date_diff($date1, $date2);
    echo "<pre>";
    print_r($diff);  //diff 334 days
    echo "</pre>";

    // date_add
    echo "<br>";
    echo "<br>";
    $dat = date_create("2024-03-15");
    date_add($dat, date_interval_create_from_date_string("3 days"));
    echo date_format($dat, "d/m/Y");
    // date_sub
    echo "<br>";
    $dat = date_create("2024-03-15");
    date_sub($dat, date_interval_create_from_date_string("3 days"));
    echo date_format($dat, "d/m/Y");

    echo "<br>";
    echo "<br>";
    echo "<pre>";
    print_r(getdate());
    echo "</pre>";
    $par = getdate();
    echo $par['month'] . $par['weekday'];
    ?>
</body>

</html>