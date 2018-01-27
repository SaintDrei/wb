
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
            echo $_POST['name'];
            echo date("H") . "-----"; 
            echo date("i");
//            $message = <<< PARA2
//                asdfd
//            PARA2;
            //echo time();
        }
        ?>
      <div class="row">
      <div class="col s12 m5">
        <div class="card-panel teal">
          <span class="white-text">I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
          </span>
        </div>
      </div>
    </div>
          <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    </body>
</html>