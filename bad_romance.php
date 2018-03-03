<?php


function rah($x){
    for($i=1; $i<=$x; $i++){
        print "rah<br>";
    }
}
function ah($x){
    for($i=1; $i<=$x; $i++){
        print "ah<br>";
    }
}
function roma($x){
    for($i=1; $i<=$x; $i++){
        print "roma<br>";
    }
}
function ma($x){
    for($i=1; $i<=$x; $i++){
        print "ma<br>";
    }
}
function ga($x){
    for($i=1; $i<=$x; $i++){
        print "ga<br>";
    }
}
function ooh($x){
    for($i=1; $i<=$x; $i++){
        print "ooh<br>";
    }
}
function la($x){
    for($i=1; $i<=$x; $i++){
        print "la<br>";
    }
}
if(isset($_POST['rah'])){
     $rah = $_POST['rah'];
            $ah = $_POST['ah'];
            $roma = $_POST['roma'];
            $ma = $_POST['ma'];
            $ga = $_POST['ga'];
            $ooh = $_POST['ooh'];
            $la = $_POST['la'];
}
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
    <div class="row" >
        <div class="l6 xl6 m8">
        
        
        <form method="post" action="bad_romance.php">
             <p>
              <input name="rah" type="number" id="rah" placeholder="rah" value="<?php echo $rah;?>"/>
            </p>
             <p>
              <input name="ah" type="number" id="ah" placeholder="ah" value="<?php echo $ah;?>"/>
            </p>
             <p>
              <input name="roma" type="number" id="roma" placeholder="roma" value="<?php echo $roma;?>"/>
            </p>
             <p>
              <input name="ma" type="number" id="ma" placeholder="ma" value="<?php echo $ma;?>"/>
            </p>
             <p>
              <input name="ga" type="number" id="ga" placeholder="ga" value="<?php echo $ga;?>"/>
            </p>
             <p>
              <input name="ooh" type="number" id="ooh" placeholder="ooh" value="<?php echo $ooh;?>"/>
            </p>
             <p>
              <input name="la" type="number" id="la" placeholder="la" value="<?php echo $la;?>"/>
            </p>
            <button type="submit" class="waves-effect waves-light btn">Submit</button>
        </form>
            
          </div>  
    </div>
    <?php 
        if(isset($_POST['rah'])){
            
            
            echo "    <div class='card l6 m6 s8 center-align'>";
                rah($rah);
                ah($ah);
                roma($roma);
                ma($ma);
                ga($ga);
                ooh($ooh);
                la($la);
            echo "Want your bad romance";
            echo "</div>";
        }
    ?>

    
</div>
          <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    </body>
</html>