<?php 
    
    $price = $_POST['price'];
    $amout = $_POST['amout'];
    $sum =  $amout - $price;
    echo "เงินทอน " .$sum . "<br>" ;
    if($sum>=1000){
        $cash  = $sum/1000;
        $cashbank = floor($cash)*1000;
        $sum   = $sum - $cashbank;
        echo "ธนบัตร 1,000 = ".floor($cash)." ใบ"."<br>";
    }
    if($sum>=500){
        $cash  = $sum/500;
        $cashbank = floor($cash)*500;
        $sum   = $sum - $cashbank;
        echo "ธนบัตร 500= ".floor($cash)." ใบ"."<br>";
    }
    if($sum>=100){
        $cash  = $sum/100;
        $cashbank = floor($cash)*100;
        $sum   = $sum - $cashbank;
        echo "ธนบัตร 100= ".floor($cash)." ใบ"."<br>";
    }
    if($sum>=50){
        $cash  = $sum/50;
        $cashbank = floor($cash)*50;
        $sum   = $sum - $cashbank;
        echo "ธนบัตร 50= ".floor($cash)." ใบ"."<br>";
    }
    if($sum>=20){
        $cash  = $sum/20;
        $cashbank = floor($cash)*20;
        $sum   = $sum - $cashbank;
        echo "ธนบัตร 20= ".floor($cash)." ใบ"."<br>";
    }
    if($sum>=10){
        $cash  = $sum/10;
        $cashbank = floor($cash)*10;
        $sum   = $sum - $cashbank;
        echo "เหรียญ 10= ".floor($cash)." เหรียญ"."<br>";
    }
    if($sum>=5){
        $cash  = $sum/5;
        $cashbank = floor($cash)*5;
        $sum   = $sum - $cashbank;
        echo "เหรียญ 5= ".floor($cash)." เหรียญ"."<br>";
    }
    if($sum>=1){
        $cash  = $sum/1;
        $cashbank = floor($cash)*1;
        $sum   = $sum - $cashbank;
        echo "เหรียญ 1= ".floor($cash)." เหรียญ"."<br>";
    }
    if($sum>=0.50){
        $cash  = $sum/0.50;
        $cashbank = floor($cash)*0.50;
        $sum   = $sum - $cashbank;
        echo "เหรียญ 0.50= ".floor($cash)." เหรียญ"."<br>";
    }
    
    ?>