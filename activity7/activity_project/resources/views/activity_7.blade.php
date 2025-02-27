<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
    $color; 
    $secondAmount = $amount;
    if($amount % 2 == 1){
        $color = "red";
    }
    else{
        $color = "green";
    }
    
    $premade = [
        0 => "",
        1 => "one",
        2 => "two",
        3 => "three",
        4 => "four",
        5 => "five",
        6 => "six",
        7 => "seven",
        8 => "eight",
        9 => "nine",
        10 => "ten",
        11 => "eleven",
        12 => "twelve",
        13 => "thirteen",
        14 => "fourteen",
        15 => "fifteen",
        16 => "sixteen",
        17 => "seventeen",
        18 => "eighteen",
        19 => "nineteen",
        20 => "twenty",
        30 => "thirty",
        40 => "forty",
        50 => "fifty",
        60 => "sixty",
        70 => "seventy",
        80 => "eighty",
        90 => "ninety"
    ];

    $scales = [
        1=>"thousand",
        2=>"million",
        3=>"billion",
        4=>"trillion",
        5=>"quadrillion",
        6=>"quintillion",
        7=>"sextillion",
        8=>"septillion" 
    ];

    if ($amount == 0) {
        return "zero";
    }

    $word = "";
    $counter = 0;

    while ($amount > 0) {
        $count = $amount % 1000;
        
        if ($count > 0) {
            $countWord = "";
            if ($count >= 100) {
                $countWord .= $premade[(int)($count / 100)] . " hundred ";
                $count %= 100;
            }
            if ($count > 19) {
                $countWord .= $premade[(int)($count / 10) * 10] . " " . $premade[$count % 10];
            } else {
                $countWord .= $premade[$count];
            }
            $countWord = trim($countWord);
            if ($counter > 0) {
                $countWord .= " " . $scales[$counter];
            }
            $word = trim($countWord . " " . $word);
        }

        $amount = (int)($amount / 1000);
        $counter++;
    }

    $word = trim($word);

    $breakdown=[1000, 500, 200, 100, 50, 20, 5, 1];
    $output =[];
    foreach ($breakdown as $x){
        $count = intdiv($secondAmount, $x);
        if($count > 0){
            $output[$x] = $count;
        }
        else{
            $output[$x] = 0;
        }

        $secondAmount -= $count * $x;
    }

?>

<body style="color: {{$color}}">
    <h1>{{$word}}</h1>
    <?php
    foreach ($output as $denomination => $count) {
        echo "$denomination: $count\n <br>";
    }
    ?>
</body>
</html>