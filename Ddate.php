<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
    font-family: Saysettha Web;
    }
</style>
<body>
    <form action="#" method="post">
        <p>ປ້ອນ lek Duean</p>
        <input type="text" name="month" placeholder="" required>
        <input type="submit" value="QUERY">
    </form>
    <?PHP
    if(isset($_POST['month'])){
        $month = $_POST['month'];
        switch($month){
            case 1 :echo"ມັງກອນ";break;
            case 2 :echo"ກຸມພາ";break;
            case 3 :echo"ມີນາ";break;
            case 4 :echo"ເມສາ";break;
            case 5 :echo"ພຶດສະພາ";break;
            case 6 :echo"ມິຖຸນາ";break;
            case 7 :echo"ກໍລະກົດ";break;
            case 8 :echo"ສິງຫາ";break;
            case 9 :echo"ກັນຍາ";break;
            case 10 :echo"ຕຸລາ";break;
            case 11 :echo"ພະຈິກ";break;
            case 12 :echo"ທັນວາ";break;

            default: echo"ພາດຜິດ";break;
        }
    }
    ?>
</body>
</html>