<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For loop</title>
</head>
<style>
    html{
        display:flex;
        display-flex:start;
        align-items:center;
        justify-content:center;
    }
    input[type="submit"]{
        border-radius: 20px;
    }
    input[type="submit"]:hover{
        background: linear-gradient(135deg, orange 60%, cyan);
    }
  
</style>
<body>
<form method="post" action="">
    <label for="rows">Rows:</label>
    <input type="number" name="rows" id="rows">
    <br>
    <label for="cols">Columns:</label>
    <input type="number" name="cols" id="cols">
    <br>
    <input type="submit" value="Submit" name='btn'>
</form>
    <?PHP
   if(isset($_POST['btn'])){
    $row = $_POST['rows'];
    $col = $_POST['cols'];
    for($i=1;$i<=$row;$i++){
        for($j=1;$j<=$col;$j++){
          echo "($j - $i)"; 
        } 
        echo "<br/>";
    }
   }
    ?>
</body>
</html>