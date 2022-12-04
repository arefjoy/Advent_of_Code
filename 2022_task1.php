<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
     <?php 
     $filename = __DIR__ . '/calories.txt';
     $calories = file($filename);
     $i = 0;
     $a = 0;
     $cal = [0];

     //ЧАСТЬ 1:____

     while($i <= sizeof($calories)){
        if ($calories[$i] == "\n") {
            $a++;
            $i++;
        }
        $cal[$a] = $cal[$a] + $calories[$i];
        $i++;
     }
     $elf1 = max($cal);
     echo $elf1, '<br>';

     //ЧАСТЬ 2:____

     $i = 0;
     rsort($cal);
     $top3 = array_slice($cal, 0, 3);
     foreach ($top3 as $key => $val) {
     $cal[$i] = $val;
     $i++;
     }
     echo $cal[0] + $cal[1] + $cal[2];
    ?>
    </body>
    </html>
