<?php 
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $oprtr = $_POST['oprtr'];
    
    switch($oprtr):
        case "add": $result = $num1 + $num2; break;
        case "subtract": $result = $num1 - $num2; break;
        case "multiply": $result = $num1 * $num2; break;
        case "divide": $result = $num1 / $num2; break;
    endswitch;
        
    
?>
<html>
    <head>
    
    </head>
    <body>
    
<!-- Problem 1 -->
        <form action="module3.php" method="post" id="form1">
            
            <input type="number" name="num1" value="<?php echo $num1; ?>"> <br><br>
            <input type="number" name="num2" value="<?php echo $num2; ?>"><br>
            <button type="submit" form="form1" value="add" name="oprtr">+</button>
            <button type="submit" form="form1" value="subtract" name="oprtr">-</button>
            <button type="submit" form="form1" value="multiply" name="oprtr">*</button>
            <button type="submit" form="form1" value="divide" name="oprtr">/</button><br><br>
            <input type="number" name="result" value="<?php echo $result; ?>"> 
        </form>
        <br><br><hr><br><br>
        
        
<!-- Problem 2-->
        <?php 
        $input1 = $_POST['input1'];
        if ($input1 =="1"): $output="Monday";
        elseif($input1=="2"):$output="Tuesday";
        elseif($input1=="3"):$output="Wednesday";
        elseif($input1=="4"):$output="Thursday";
        elseif($input1=="5"):$output="Friday";
        elseif($input1=="6"):$output="Saturday";
        elseif($input1=="7"):$output="Sunday";
        endif;
        ?>
        <form action="module3.php" method="post" id="form1">
            <input type="number" name="input1" value="<?php echo $input1; ?>" max="7" >       
            <input type="submit"><br><br>
            <?php 
              echo $output;  
            ?>
        </form>
        
    </body>
</html>