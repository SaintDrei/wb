<?php 
//    if (isset($_POST['name'])){
//        $name = $_POST['name'];
//    } else {$name='';}
    isset($_POST['name'])? $name = $_POST['name'] : $name='';
    isset($_POST['amt'])? $amt = $_POST['amt'] : $amt='';
    isset($_POST['freq'])? $freq = $_POST['freq'] : $freq='';
?>
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
 
       <div class="container">
        <form action="midterm.php" method="post" id="form1">
           
            <p><label for="name">Enter Your Name</label><input id="name" placeholder="John Dela Cross" type="text" name="name" value="<?php echo $name; ?>">
              </p>
            
            <p><label for="amt">Enter Savings Amount</label>
                <input id="amt" placeholder="500" type="number" name="amt" value="<?php echo $amt; ?>">
              </p>
            <p><label>Choose the frequency of savings</label></p>
            <p>
              <input name="freq" type="radio" id="fD" value="Daily"/>
              <label for="fD">Daily</label>
            </p>
            <p>
              <input name="freq" type="radio" id="fW" value="Weekly"/>
              <label for="fW">Weekly</label>
            </p>
            <p>
              <input name="freq" type="radio" id="fM" value="Monthly"/>
              <label for="fM">Monthly</label>
            </p>
            <button type="submit" class="waves-effect waves-light btn">Submit</button>
        </form>
           
             <div class="row">
        <div class="col s12 m8 push-m2 l6">
          <div class="card darken-1">
            <div class="card-content">
              <span class="card-title">Card Title</span>
                <p> Hello <?php echo $name;?>!!</p>
                <p>Your <?php echo $freq;?> Peso Sense Savings Goal is:</p>
                <p>
                     <table class=" centered highlight">
                        <tr>
                            <th><?php echo $freq;?></th>
                            <th>Amount</th>
                            <th>Savings</th>
                         </tr>
                         <?php 
                            switch($freq){
                                case "Daily": $freqnum = 365; break;
                                case "Weekly": $freqnum = 52; break;
                                case "Monthly": $freqnum = 12; break;
                            }
                            
                            for($i=0;$i<=$freqnum;$i++){
                                $savings = $i * $amt;
                                echo "<tr>
                                        <td>$i</td>
                                        <td>$amt</td>
                                        <td>$savings</td>
                                      </tr>";
                                $i++;
                            }
                         ?>
                    </table>
                </p>
              <p class="right-align">Savings in 1 year: <?php echo $amt * $freqnum;?></p>
            </div>
          </div>
        </div>
      </div>
    
           
                
          
           <?php 
            if(isset($_POST['name'])){
                if(isset($_POST['amt'])){
                    if(isset($_POST['freq'])){
                        
//                         $message = <<< PARA1
//                 <div class="row">
//      <div class="col s12 m5">
//        <div class="card-panel $colour">
//          <span class="white-text">$greeting $name, today is $day taken from the planet $planet and the color of the day is $colour :O 
//          </span>
//        </div>
//      </div>
//    </div>
//            PARA1;
                        
                } else{}
                } else{}
            }else{}
           
           ?>
        
       </div>
     
          <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    </body>
</html>