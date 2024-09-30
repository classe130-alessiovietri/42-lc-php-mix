<?php

    include_once __DIR__.'/partials/functions.php';
    include_once __DIR__.'/partials/functions.php';
    include_once __DIR__.'/partials/functions.php';
    include_once __DIR__.'/partials/functions.php';
    include_once __DIR__.'/partials/functions.php';
    include __DIR__.'/partials/ciccio.php';       // Continua l'esecuzione
    // require __DIR__.'/partials/ciccio.php';    // Blocca l'esecuzione dando un fatal error
    // require_once __DIR__.'/partials/ciccio.php';    // Blocca l'esecuzione dando un fatal error
    
    $thirdNumber = 10;

    // function sum($numOne, $numTwo) {
    //     // $fourthNumber = 20;
    //     return $numOne + $numTwo;
    //     // return $numOne + $numTwo + $thirdNumber;
    // }

    /*
        Somma come arrow function:
        fn($numOne, $numTwo) => $numOne + $numTwo;
    */

    // var_dump($fourthNumber);

    $mySum = sum(3, 4);

    var_dump($mySum);

    $otherSum = sum(12, 14);

    var_dump($otherSum);

    echo '<br><br><br><br><br><br><br>';

    echo "A $color $fruit, so good!"; // A
    
    include __DIR__.'/partials/variables.php';

    echo '<br>';
    
    echo "A $color $fruit"; // A green apple

    echo '<br>';

    $color = 'red';
    $fruit = 'mango';
    
    echo "A $color $fruit"; // A red mango
    
    include __DIR__.'/partials/variables.php';

    echo '<br>';
    
    echo "A $color $fruit"; // A ?

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>42 LC PHP Mix</title>
    </head>
    <body>

        <main>
            <?php
                include __DIR__.'/partials/subscripts.php';
            ?>
        </main>
        
        <script src="js/scripts.js"></script>
        <script>
            const sumOne = (numOne, numTwo) => {
                console.log('CIAO');
                return numOne + numTwo;
            };

            const sumTwo = (numOne, numTwo) => numOne + numTwo;
        </script>
    </body>
</html>