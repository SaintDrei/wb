<?php 
//    if (isset($_POST['name'])){
//        $name = $_POST['name'];
//    } else {$name='';}
    isset($_POST['name'])? $name = $_POST['name'] : $name='';
    isset($_POST['amt'])? $name = $_POST['amt'] : $amt='';
    isset($_POST['freq'])? $name = $_POST['freq'] : $freq='';
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
            <p>
              <input name="freq" type="radio" id="fD" />
              <label for="fD">Daily</label>
            </p>
            <p>
              <input name="freq" type="radio" id="fW" />
              <label for="fW">Weekly</label>
            </p>
            <p>
              <input name="freq" type="radio" id="fM" />
              <label for="fM">Monthly</label>
            </p>
            <button type="submit" class="waves-effect waves-light btn">Submit</button>
        </form>
           <table class="responsive-table centered highlight">
           
           </table>
           <?php 
            if(isset($_POST['name'])){
                if(isset($_POST['amt'])){
                    if(isset($_POST['freq'])){
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
                        
                } else{}
                } else{}
            }else{}
           
           ?>
        
       </div>
     
          <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    </body>
</html>