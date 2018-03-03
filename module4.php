<!DOCTYPE html>
<?php
    $start_num=1;
    $end_num=10;
?>
<html>  
    <head>
        <meta charset="utf-8">
        <title>Multiply</title>
    </head>
    <body>
        <h2>Multiplication Table</h2>
        <table border="1">
        <?php 
            print("<tr>");
            print("<th></th>");
            $count_1 = $start_num;
            do{
                print("<th>$count_1</th>");
                $count_1++;
            } while($count_1 <= $end_num);
//            
//            for($count_1 = $start_num; $count_1 <= $end_num; $count_1++){
//                print("<th>$count_1</th>"); //this will print the header
//            }
            print("</tr>");
            
            $count_1 = $start_num;
            do{
                print("<tr><th>$count_1</th>;");
                $count_2 = $start_num;
                while($count_2 <= $end_num){
                    $result = $count_1 * $count_2;
                    printf("<td align=\"center\">%.0f</td>", $result);
                    $count_2++;
                }
                
//                do{
//                    $result = $count_1 * $count_2;
//                    printf("<td align=\"center\">%.0f</td>", $result);
//                } while ($count_2 <= $end_num);
                print("</tr>\n");
                $count_1++;
                
            } while($count_1<=$end_num);
//            
//            for($count_1 = $start_num; $count_1<=$end_num; $count_1++){
//                print("<tr><th>$count_1</th>;");
//                for($count_2 = $start_num; $count_2 <= $end_num; $count_2++){
//                    $result = $count_1 * $count_2;
//                    //printf("<td ali gn=\'center\'>%.Of</td>", $result);
//                    printf("<td align=\"center\">%.0f</td>", $result); 
//                }
//                print("</tr>\n");
//            }
//            
            ?>
            </table>
    </body>
</html>