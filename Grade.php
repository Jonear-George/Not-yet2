<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
		form {
			margin: 50px auto;
			width: 300px;
			text-align: center;
		}
		
		input[type="text"] {
			padding: 10px;
			font-size: 18px;
			border-radius: 5px;
			border: none;
			box-shadow: 0 0 5px gray;
			margin-bottom: 100px;
			width: 100%;
			box-sizing: border-box;
		}
		input[type="submit"] {
            background: linear-gradient(45deg, red, blue);
			color: white;
			padding: 10px;
			border-radius: 5px;
			border: none;
			cursor: pointer;
			font-size: 18px;
			transition: background-color 0.3s ease;
			width: 100%;
			box-sizing: border-box;
		}
		input[type="submit"]:hover {
			background: linear-gradient(135deg, orange 60%, cyan);
		}
		h1 {
			font-size: 30px;
            font-family: Saysettha Web;
            color:blue;
		}
	</style>
</head>
<body>
    <form action="" method="post">
        <h1>ປ້ອນຂໍ້ມູນ</h1>
        <input type="number" name="day" placeholder="Input Score" required>
        <input type="submit" value="submit" class="la" name="btn">
    </form>
   <?PHP
  if(isset($_POST['btn'])){
    $txt = $_POST['day'];
    if($txt >= 90 && $txt<= 100){
        echo "Grade: A";
    }elseif($txt >= 80 && $txt<= 89 ){
        echo "Grade: B+";
    }elseif($txt >= 70 && $txt<= 79 ){
        echo "Grade: B";
    }elseif($txt >= 60 && $txt<= 69 ){
        echo "Grade: C+";
    }elseif($txt >= 50 && $txt<= 59 ){
        echo "Grade: C";
    }elseif($txt >= 40 && $txt<= 49 ){
        echo "Grade: D+";
    }elseif($txt >= 30 && $txt<= 39 ){
        echo "Grade: D";
    }elseif($txt >= 0 && $txt<= 29 ){
        echo "Grade: F";
    }elseif($txt <>100) {
        echo "Error";
    }
}
    

   ?>
</body>
</html>