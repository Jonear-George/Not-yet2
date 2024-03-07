<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormForm</title>
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
		h1{
			font-size: 30px;
            font-family: Saysettha Web;
            color:blue;
            text-align:center;
		}
        body{
            text-align: center;
        }
	</style>
</head>
<body>
    <form action="" method="post">
        <h1>ຄໍານວນຄະແນນ</h1>
        <input type="number" name="score1" placeholder="0-100" >
        <input type="number" name="score2" placeholder="0-100" >
        <input type="number" name="score3" placeholder="0-100" >
        <input type="number" name="score4" placeholder="0-100" >
        <input type="submit" value="submit" class="la" name="btn">
    </form>
   <?PHP
     if(isset($_POST["btn"])){
        $score1  = ($_POST["score1"]*10) /100;
        $score2  = ($_POST["score2"]*20) /100;
        $score3  = ($_POST["score3"]*30) /100;
        $score4  = ($_POST["score4"]*40) /100;
        $total = $score1+$score2+$score3+$score4;
        if($total>100 || $total<0){
            echo"<h1 style='color: red;'>";
            echo "Error";
            echo"</h1>";
        }
        
        elseif($total>=0 and $total<=29){
            echo "Grade: F"; 
        }
        elseif($total>=30 and $total<=39){
            echo "Grade: D";
        }
        elseif($total>=40 and $total<=49){
            echo "Grade: D+";
        }
        elseif($total>=50 and $total<=59){
            echo "Grade: C";
        }
        elseif($total>=60 and $total<=69){
            echo "Grade: C+";
        }
        elseif($total>=70 and $total<=79){
            echo "Grade: B";
        }
        elseif($total>=80 and $total<=89){
            echo "Grade: B+";
        }
        elseif($total>=90 and $total<=100){
            
            echo"<h3 style='color:rgb(54, 245, 54);font-weight: bolder;'>";
            echo "Grade: A";
            echo"</h3>";
        }
        else{
            echo"<h1 style='color: red;'>";
            echo "ຂໍ້ມູນບໍຖືກຕ້ອງ";
            echo"</h1>";
        }
        
    }

   ?>
</body>
</html>