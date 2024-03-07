<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while</title>
</head>
<body>
    <form action='' method='post'>
    <p>bung dh</p>
    input:<input type="text" name = "number">
    <input type = "submit" value"QUERY">
</form>
<?php
if(isset($_POST["number"])){
    $number = $_POST['number'];
    if($number >= 1){
        echo " ສູດຄູນທີ່ຕ້ອງການ:" .$number ."<hr/>";
        $x = 1;
        while($x <=12){
            echo "$number X $x =".($number*$x)."<br/>";
            $x++;
        }
        }else{
            echo "Wrong!";
        }
    }

?>
</body>
</html>
