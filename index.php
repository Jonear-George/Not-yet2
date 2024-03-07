<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        font-family:Saysettha Web;
        font-size:15px;
    }
</style>
<body>
    <?php

        $Name ="Lataphone Xaiyavong"; 
        $phoneNumber = 29987999;
        $teacher= true;
        $height = 175.6; 
        $teach = array("HTML", "CSS", "PHP", "Digital Image Processing.");
        $hobby = array("badminton","Volley","Jogging.");

        echo "ຂ້ອຍຊື່: " .$Name;
        echo "<br/>ໂທລະສັບ: ".$phoneNumber; 
        echo "<br/>ຄວາມສູງ: ".$height;
        echo "<br/>ເວລາວ່າງ: ".implode(",",$hobby);
        echo "<br/>ວິຊາສອນມີ :";
        foreach($teach as $teachs){
            echo "<br/>-".$teachs;
        }
       echo "<br/>ວັນທູທີ:".date("d/m/Y");
        
        
        
    ?>
    
</body>
</html>