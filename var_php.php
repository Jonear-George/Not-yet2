<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Dog {
        var $breed ="Golden";

        var $color ="Brown";

        function bark(){
            echo "Honk kong";
        }
    }
    class Cat {
        var $breed ="Percia";

        var $color ="White";

        function bark(){
            echo "Meow Meow";
        }
    }
    $objDog = new Dog();
    $objCat = new Cat();
    
    echo "Dog's Breed : ".$objDog->breed;
    echo "<br/>";
    echo "Cat's Breed : ".$objCat->breed;
    

     
    ?>
    
</body>
</html>