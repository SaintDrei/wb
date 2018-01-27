
<html>
    <head>
     <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
    
<!-- Problem 1 -->
        <form action="module3mp.php" method="post" id="form1">
            
            <input type="text" name="name" value="<?php echo $name; ?>"> <br><br>
            <button type="submit" class="waves-effect waves-light btn">Submit</button>
        </form>
        <?php
        if(isset($_POST['name'])){
            date_default_timezone_set('Asia/Manila');
            $hour = date("H");
            $day = date("D");
            
            
            echo $_POST['name'];
            echo date("H") . "-----"; 
            echo date("i");
            if ($hour >= 6 &&  $hour < 12){
                $greeting = "Good Morning, ";
            } else if ($hour >=12 && $hour < 18){
                $greeting = "Good Afternoon, ";
            } else {
                $greeting = "Good Evening, ";
            }
            
            switch($day)
            {
                case "Sun": $fday = "Sunday"; $planet = Sun; $colour = red; break;
                case "Mon": $fday = "Monday"; $planet = Moon;  $colour = yellow; break;
                case "Tue": $fday = "Tuesday"; $planet = Mars;  $colour = pink; break;
                case "Wed": $fday = "Wednesday"; $planet = Mercury; $colour = green;  break;
                case "Thu": $fday = "Thursday"; $planet = Jupiter; $colour = orange;  break;
                case "Fri": $fday = "Friday"; $planet = Venus;  $colour = blue; break;
                case "Sat": $fday = "Saturday"; $planet = Saturn;  $colour = purple; break;
            } 
            
            $message = <<< PARA1
                 <div class="row">
      <div class="col s12 m5">
        <div class="card-panel $colour">
          <span class="white-text">$greeting $name, today is $day taken from the planet $planet and the color of the day is $colour :O 
          </span>
        </div>
      </div>
    </div>
            PARA1;
            echo $message;
            echo time();
        }
        ?>
     
          <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    </body>
</html>