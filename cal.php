<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert 2</title>
</head>
<body>
<?php 

$num1 = 0;
$num2 = 0;
$calc = 0;

if (isset($_POST['submit']))
{
  $num1 = $_POST['n1'];
  $num2 = $_POST['n2'];
  $calc =  calculate($num1, $num2, $_POST['submit']);
}

function calculate($num1,$num2,$op) 
{
 $calc = 0;

 switch ($op) 
 {
    case '+':   
              $calc = $num1 + $num2;
              break;
    case '-':
              $calc = $num1 - $num2;
              break;
    case '*';
             $calc = $num1 * $num2;
             break;
    case '/';
             $calc = $num1 / $num2;
    break;
 }
 return $calc;
}
?>
</head>

<body>

<form action="" method="post">
  input number: <input  name='n1' value="<?php echo $num1;?>">
 <br><br>
  input number: <input  name='n2' value="<?php echo $num2;?>"><br><br>
 total: <input name="res" value="<?php echo $calc;?>"><br><br>
 <input type="submit" name="submit" value="+">
 <input type="submit" name="submit" value="-">
 <input type="submit" name="submit" value="*">
 <input type="submit" name="submit" value="/">

</form>

</body>
</html>