<!DOCTYPE html>
<html>
<body>

<h1>PHP Arithmetic Operations</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Enter a number: <input type="number" name="num1"><br>
  Enter another number: <input type="number" name="num2"><br>
  Select an operator:
  <select name="operator">
    <option value="+">Addition</option>
    <option value="-">Subtraction</option>
    <option value="*">Multiplication</option>
    <option value="/">Division</option>
  </select><br>
  <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $operator = $_POST['operator'];
  switch ($operator) {
    case "+":
      echo "Addition: ", $num1 + $num2;
      break;
    case "-":
      echo "Subtraction: ", $num1 - $num2;
      break;
    case "*":
      echo "Multiplication: ", $num1 * $num2;
      break;
    case "/":
      echo "Division: ", $num1 / $num2;
      break;
    default:
      echo "Invalid operator";
  }
}
?>

</body>
</html>