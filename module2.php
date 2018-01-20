<?php

?>

<html>
    <head>
    
    </head>
    <body>
        <form action="module2.php" method="post">
            Mister A: <br>
            <input type="number" name="mra"><br><br>
            
            Mister B: <br>
            <input type="number" name="mrb"><br><br>
            
            Mister C:
            <br> <input type="number" name="mrc"><br><br>
            <input type="submit">
        </form>
        
        <table>
            <tr>
                <th>EMPLOYEE NAME</th>
                <th>SALARY</th>
            </tr>
            <TR>
                <td>Mister A</td>
                <td><?php echo $mra; ?></td>
            </TR>
            <TR>
                <td>Mister B</td>
                <td><?php echo $mrb; ?></td>
            </TR>
            <TR>
                <td>Mister C</td>
                <td><?php echo $mrc; ?></td>
            </TR>
        </table>
    </body>
</html>