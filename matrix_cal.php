<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrix calculator</title>
</head>

<?PHP
    $result1 = "";
    $result2= "";
    $result3 = "";
    $result4 = "";

    if(isset($_POST['operator'])){
        $first_num = $_POST['first_num'];
        $second_num = $_POST['second_num'];
        $third_num = $_POST['third_num'];
        $fourth_num = $_POST['fourth_num'];
        $fifth_num = $_POST['fifth_num'];
        $sixth_num = $_POST['sixth_num'];
        $seventh_num = $_POST['seventh_num'];
        $eighth_num = $_POST['eighth_num'];
        $operator = $_POST['operator'];
        if(is_numeric($first_num) && is_numeric($second_num)){
            $arr1=array(
                array($first_num,$second_num),
                array($third_num,$fourth_num)
            );
            $arr2 =array(
                array($fifth_num,$sixth_num),
                array($seventh_num,$eighth_num)
            );
            if(is_numeric($first_num)&& is_numeric($second_num) && is_numeric($third_num) && is_numeric($fourth_num) && is_numeric($fifth_num) && is_numeric($sixth_num) && is_numeric($seventh_num)&& is_numeric($eighth_num)){

                if(is_numeric($arr1[0][0])&& is_numeric($arr2[0][0]) && is_numeric($arr1[0][1]) && is_numeric($arr2[0][1]) && is_numeric($arr1[1][0]) && is_numeric($arr2[1][0]) && is_numeric($arr1[1][1])&& is_numeric($arr2[1][1])){

                    if($operator=="A+B"){
                        $result1 = $arr1[0][0] + $arr2[0][0];
                        #echo $result1;
                    }
                    elseif($operator=="A-B"){
                        $result1 = $arr1[0][0] - $arr2[0][0];
                       #echo $result1;
                    }
                    else{
                        $result1 = $arr1[0][0] * $arr2[0][0];
                    }
                    //second
                    if($operator =="A+B"){
                        $result2= $arr1[0][1] + $arr2[0][1];
                        #echo $result2;
                    }
                    elseif($operator=="A-B"){
                        $result2= $arr1[0][1] - $arr2[0][1];
                       #echo $result2;
                    }
                    else{
                        $result2= $arr1[0][1] * $arr2[0][1];
                    }
                    //third
                    if($operator =="A+B"){
                        $result3= $arr1[1][0] + $arr2[1][0];
                      
                    }
                    elseif($operator=="A-B"){
                        $result3= $arr1[1][0] - $arr2[1][0];
                      
                    }
                    else{
                        $result3= $arr1[1][0] * $arr2[1][0];
                    }
                    //fourth
                    if($operator =="A+B"){
                        $result4= $arr1[1][1] + $arr2[1][1];
                    
                    }
                    elseif($operator=="A-B"){
                        $result4= $arr1[1][1] - $arr2[1][1];
                      
                    }
                    else{
                        $result4= $arr1[1][1] * $arr2[1][1];
                    }
                }
            }
        }

        


    }



?>
<body>
    <h1>My calculator</h1>
    <form method = "POST">
        <h2>A =</h2>
        <input type="number" name= "first_num" value = "<?php echo $first_num?>">
        <input type="number" name= "second_num" value = "<?php echo $second_num?>">
        <br> <br>
        <input type="number" name= "third_num" value = "<?php echo $third_num?>">
        <input type="number" name= "fourth_num" value = "<?php echo $fourth_num?>">

        <br> <br> <br>
        <h2>B =</h2>
        <input type="number" name= "fifth_num" value = "<?php echo $fifth_num?>">
        <input type="number" name= "sixth_num" value = "<?php echo $sixth_num?>">
        <br> <br>
        <input type="number" name= "seventh_num" value = "<?php echo $seventh_num?>">
        <input type="number" name= "eighth_num" value = "<?php echo $eighth_num?>">
        <br> <br>

        <h2>Click Here</h2>
        <input type="submit"value = "A+B" name = "operator">
        <input type="submit"value = "A-B" name = "operator">
        <input type="submit"value = "A*B" name = "operator">


        <h2>Result</h2>
        <input name = "result1" value ="<?php echo $result1;?>">
        <input name = "result1" value ="<?php echo $result2;?>">
        <br> <br>
        <input name = "result1" value ="<?php echo $result3;?>">
        <input name = "result1" value ="<?php echo $result4;?>">
        <br> <br> <br>

       

    </form>
    
</body>
</html>