<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lesson 2</title>
</head>
<body>
<?php
//$array = [];
//for($i = 0; $i < 25; $i++){
//    $array[$i] = rand(1,999);
////    echo ' | '.$array[$i];
//}
//$sum = 0;
//$max = 0;
//$indexMin = 0;
//$indexMax = 0;
//for($i = 0,$min = $array[0]; $i < 25; $i++){
//    if($array[$i] > $max){
//        $max = $array[$i];
//        $indexMax = $i;
//    }
//    if($array[$i] < $min){
//        $min = $array[$i];
//        $indexMin = $i;
//    }
//    $sum += $array[$i];
//}
//
//$arrayFirst = [];
//$arraySecond = [];
//for($i = 0; $i < 10; $i++){
//    $arrayFirst[$i] = rand(1,10);
//    $arraySecond[$i] = rand(1,10);
//}
//
//$arraySame = [];
//$arrayNotSame = [];
//sort($arrayFirst);
//sort($arraySecond);
//for($i = 0; $i < 10; $i++){
//    echo ' | '.$arrayFirst[$i];
//}
//echo '<br>';
//for($i = 0; $i < 10; $i++){
//    echo ' | '.$arraySecond[$i];
//}
//echo '<br>';
//for($i =0; $i < 10; $i++){
//    if($arrayFirst[$i] === $arraySecond[$i]){
//        array_push($arraySame,$arrayFirst[$i]);
//    }
//
//}
//for($i =0; $i < 10; $i++){
//if($arrayFirst[$i] != $arraySecond[$i] && !in_array($arraySecond[$i],$arraySame)){
//    array_push($arrayNotSame, $arraySecond[$i]);
//    }
//}
//$counterFirst = count($arraySame);
//$counterSecond = count($arrayNotSame);
//echo '<br>';
//echo 'Совпадающие';
//echo '<br>';
//for($i = 0; $i < $counterFirst; $i++){
//    echo $arraySame[$i].' | ';
//}
//echo '<br>';
//echo 'Те,которые есть только во втором';
//echo '<br>';
//for($i = 0; $i < $counterSecond; $i++){
//    echo $arrayNotSame[$i].' | ';
//}
//echo '<br>';
//echo 'Максимальное '.$max;
//echo '<br>';
//echo 'Индекс максимального '.$indexMax;
//echo '<br>';
//echo 'Сумма '.$sum;
//echo '<br>';
//echo 'Минимальное '.$min;
//echo '<br>';
//echo 'Индекс минимального '.$indexMin;
// $array = [];
// for($i = 0; $i < 4; $i++){
//     for($j = 0; $j < 4; $j++){
//         $array[$i][$j] = rand(10,30);
//     }
// }

// for($i = 0; $i < 4; $i++){
//     for($j = 0; $j < 4; $j++){
//         echo $array[$i][$j]." | ";
//     }
//     echo '<br>';
// }
// echo '<br>';
// $sum = 0;


// for($i = 0; $i < 4; $i++){
//     for($j = 0; $j < 4; $j++){
//         if($j==4-$i+1)
//         $sum= $array[$j][$i];
//     }
//     echo '<br>';
// }

// echo '<br>';
// echo $sum;


// function createArray($size){
//    $array = [];
//     for ($i = 0; $i < $size; $i++) { 
//         $array[$i] = rand(1,20);
//     }
//     return $array;
// }
// $array = createArray(8);
// var_dump($array);



// function maximum($firstNumber,$secondNumber,$max = true){
//     $usl = $firstNumber < $secondNumber;
//     if($max){
//         $usl = $firstNumber > $secondNumber;
//     }
//     if($usl){
//         $max = $firstNumber;
//     }
//     else{
//         $max = $secondNumber;
//     }
//     return $max;
// }
// echo maximum(12,maximum(9,4));
// echo '<br>';
// echo maximum(12,maximum(9,4,false),false);
// $catalog = [
//     'S' => [    'white' => 30,
//                 'black' => 40,
//                 'green' => 40,
//                 'blue' => 50,
//     ],
//     'L' => [   
//                 'black' => 25,
//                 'green' => 42,
//                 'blue' => 81,
//     ],
//     'X' => [    'white' => 60,
//                 'green' => 80,
//     ]
// ];

// function getPriceForSize($size,$catalog){
//     if(!isset($catalog[$size])){
//         return 0;
//     }
//     return $catalog[$size]; 
// }
// function getSizeForColors($color,$filteredBySize){
//     if(!isset($filteredBySize[$color])){
//         return -1;
//     }
//     return $filteredBySize[$color];
// }
// function getPriceForShirt($size,$color,$catalog){   
//     return getSizeForColors($color,getPriceForSize($size,$catalog)); 
// }
// echo(getPriceForShirt('M','white',$catalog));

 
function fibonaci($k)
 {
     if ($k==1 || $k==2) 
         return 1;
     if ($k==0) 
         return 0;

    return fibonaci($k-1)+fibonaci($k-2);
 }

echo fibonaci(7);
    ?>
</body>
</html>