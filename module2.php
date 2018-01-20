<html>
    <head>
    
    </head>
    <body>
        
<!-- Problem 1 -->
        <form action="module2.php" method="post">
            Mister A: <br>
            <input type="string" name="mra"><br><br>
            
            Mister B: <br>
            <input type="string" name="mrb"><br><br>
            
            Mister C:
            <br> <input type="string" name="mrc"><br><br>
            <input type="submit">
        </form>
        
        <table border="1">
            <tr>
                <th>EMPLOYEE NAME</th>
                <th>SALARY</th>
            </tr>
            <TR>
                <td>Mister A</td>
                <td><?php echo $_POST['mra']; ?></td>
            </TR>
            <TR>
                <td>Mister B</td>
                <td><?php echo $_POST['mrb']; ?></td>
            </TR>
            <TR>
                <td>Mister C</td>
                <td><?php echo $_POST['mrc']; ?></td>
            </TR>
        </table>
        
        
<!-- Problem 2 -->        
        <br><br><hr><br><br>
        Input value in inches:<br>
        <form action="module2.php" method="post">
            <input type="string" name="inches"><br>
            <input type="submit">
        </form>
        <br>
        <?php
            $inch = $_POST['inches'];
            $meters = $inch * 0.0254;
            echo $inch . "in is equal to " . $meters . "m";
        ?>
        <br><br><hr><br><br>
        
<!-- Problem 3 -->
        <form action="module2.php" method="post">
        Input your age: <input type="number" name="age">
            <br><input type="submit">
        </form>
        <br>
        <?php 
            $age = $_POST['age'];
            echo ($age <=25 ? "Millenials" : ($age<=49 ? "Gen X" : "Baby Boomer"));
        ?>
        <br><br><hr><br><br>
        
<!-- Problem 4 -->
        <form method="post" action="module2.php">
            Number 1:<br>
            <input type="string" name="num1">
            <br>Number 2:<br>
            <input type="string" name="num2">
            <br><input type="submit">
                    
        </form>
        <br>
        <?php $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
        
            $sum = $num1 + $num2;
            $difference = $num1 - $num2;
            $product = $num1 * $num2;
            $quotient = $num1 / $num2;
        ?>
        
        <table border="1">
            <tr><td><?php echo "The sum of " . $num1 . " + " . $num2 . " is " . $sum; ?> </td></tr>
            <tr><td><?php echo "The difference of " . $num1 . " - " . $num2 . " is " . $difference; ?></td></tr>
            <tr><td><?php echo "The product of " . $num1 . " x " . $num2 . " is " . $product; ?></td></tr>
           <tr>
            <td>
               <?php echo "The quotient of " . $num1 . " / " . $num2 . " is " . $quotient; ?>
               </td></tr>
            
        </table>
        <br><br><hr><br><br>

        
    </body>
</html>