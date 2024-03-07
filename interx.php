<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="" method="post">
        <h1>ປ້ອນຂໍ້ມູນ</h1>
        <input type="text" name="day" placeholder="Input">
        <input type="submit" value="submit" class="la" name="btn">
    </form>
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
			margin-bottom: 20px;
			width: 100%;
			box-sizing: border-box;
		}
		input[type="submit"] {
			background-color: #4CAF50;
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
			background-color: #3E8E41;
		}
		h1 {
            font-family:Saysettha web;
			font-size: 20px;
			margin-top: 20px;
			text-align: center;
		}
	</style>
   <?PHP
  if(isset($_POST['btn'])){
    $txt = $_POST['day'];
    if($txt=="ວັນອາທິດ"){
        echo "ມື້ນີ້ມື້ພັກ ນອນຕໍ່ໄດ້";
    }
    elseif($txt=="ວັນຈັນ"){
        echo "ໄປຮຽນ";
    }
    elseif($txt=="ວັນຄານ"){
        echo "ໄປຮຽນ";
    }
    elseif($txt=="ວັນພຸດ"){
        echo "ໄປຮຽນ";
    }
    elseif($txt=="ວັນພະຫັດ"){
        echo "ໄປຮຽນ";
    }elseif($txt=="ວັນສຸກ"){
        echo "ໄປຮຽນ";
    }elseif($txt=="ວັນເສົາ"){
        echo "ມື້ນີ້ມື້ພັກ ນອນຕໍ່ໄດ້";
    }
    else{
        echo "ຂໍ້ມູນບໍ່ຖືກ";
    }
}

   ?>
</body>
</html>