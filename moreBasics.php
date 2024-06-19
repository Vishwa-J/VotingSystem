<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<style>
    .container{
        max-width:80%;
        background-color: rgb(177, 91, 173);
        margin: auto;
        padding: 23px;
    }
</style>
<body>
    <div class="container">
        <h1> Let's learn about php.</h1>
        <p>ur party status is here</p>
         <?php
            $age=6;
            if($age>18){
                echo "You can go to party";
            }
            else if($age==7){
                echo "you are 7 years old";
            }
            else{
                echo "u cannot go to the party";
            }
         
        echo "<br>";
        //Arrays in PHP
         $languages=array("Python", "C++", "php", "NodeJs");
        //  echo count($languages);
        //  echo " "; 
        //  echo ($languages[0]); 

        //Loops in PHP
        echo "<br>";
        $a=0;
        while ($a <= 10) {
            echo "The value of a is: ";
            echo $a;
            echo "<br>";
            $a++;
        }
        echo "<br>";

        //Iterating array in PHP using while loop
        $a=0;
        while ($a < count($languages)) {
            echo $languages[$a];
            echo "<br>";
            $a++;
        }

        //Iterating array in PHP using do-while loop
        $a=0;
        do{
            echo $languages[$a];
            echo "<br>";
            $a++;
        }while ($a < count($languages));

        //Iterating array in PHP using for loop
        for ($a=0; $a <10; $a++) { 
            echo "<br>The value of a is: ";
            echo $a;
        }

        //Iterating array in PHP using foreach loop

        foreach ($languages as $value) {
            echo "<br>The value of language is: ";
            echo $value;
        }

        // Functions in PHP

        function print5(){
            echo "<br>Five";
        }
        print5();

        function print_number($number){
            echo "<br>Your number is ";
            echo $number;
        }
        print_number(6);
        print_number(23);
        print_number(243);

         ?>
    </div>
</body>
</html>