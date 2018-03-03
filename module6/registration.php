<?php
$toast = '';
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
        
        
		$username = stripslashes($_POST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$email = stripslashes($_POST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$surname = stripslashes($_POST['surname']);
		$surname = mysqli_real_escape_string($con,$surname);
		$fname = stripslashes($_POST['fname']);
		$fname = mysqli_real_escape_string($con,$fname);
		$mname = stripslashes($_POST['mname']);
		$mname = mysqli_real_escape_string($con,$mname);
		$birthdate = stripslashes($_POST['birthdate']);
		$birthdate = mysqli_real_escape_string($con,$birthdate);
        $mobilenumber = stripslashes($_POST['mobile']);
		$mobilenumber = mysqli_real_escape_string($con,$mobilenumber);
		
		$password = stripslashes($_POST['pw']);
		$password = mysqli_real_escape_string($con,$password);
        $cpw = stripslashes($_POST['cpw']);
		$cpw = mysqli_real_escape_string($con,$cpw);
        if($cpw == $password){
            
		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into customers (username, surname, fname, mname, email, birthdate, mobilenumber, password) VALUES ('$username', '$surname', '$fname', '$mname', '$email', '$birthdate', '$mobilenumber', '$password')";
//             $query = "INSERT into `customers` (username, surname, fname, mname, email, birthdate, mobilenumber, password) VALUES ('$username', '$surname', '$fname', '$mname', '$email', '$birthdate' '$mobilenumber' '".md5($password)."')";
        $result = mysqli_query($con, $query);
        if($result){
            echo "<div class='form'><br/>Click here to <a href='login.php'>Login</a></div>";
            $toast = "<script>Materialize.toast('You have successfully registered!', 4000)</script>";
        }
        } else {
            $toast = "<script>Materialize.toast('Passwords do not match!', 4000)</script>";
        }

    }else{
        $username = '';
        $email = '';
        $surname = '';
        $fname = '';
        $mname = '';
        $birthdate= '';
        $mobilenumber = '';
        
        
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
        
<div class="row">
    <div class="col4 push-l4 m4 push-m4 s10">
          <div class="card">
              <div class="card-content">
              <form method="post" action="registration.php">
                 <p><label for="name">User Name</label><input id="username" type="text" name="username" value="<?php echo $username; ?>">
              </p>
                 <p><label for="name">Surname</label><input id="surname" placeholder="Surname" type="text" name="surname" value="<?php echo $surname; ?> ">
              </p>
                 <p><label for="name">First Name</label><input id="name" type="text" name="fname" value=" <?php echo $fname; ?>">
              </p>
                 <p><label for="name">Middle Name</label><input id="name" type="text" name="mname" value="<?php echo $mname; ?> ">
              </p>
                 <p><label for="name">E-mail</label><input id="name"  type="email" name="email" value=" <?php echo $email; ?>">
              </p>
                 <p><label for="name">Birthdate</label><input id="name" type="text" class="datepicker" name="birthdate" placeholder="Birthdate" value="<?php echo $birthdate; ?>">
              </p>
                  
                 <p><label for="mobile">Mobile Number</label><input id="mobile"  type="number" name="mobile" value=" <?php echo $mobilenumber; ?>">
              </p>
                 <p><label for="pw">Password</label><input id="pw"  type="password" name="pw">
              </p>
                 <p><label for="cpw">Confirm Password</label><input id="cpw"  type="password" name="cpw" >
              </p>
                  <p class="right-align">
                  <button type="submit" class="waves-effect waves-light btn">Submit <i class="material-icons right">send</i></button></p>
            </form>
              </div>
            
        </div>
    </div>
      
        </div>
        </div>
        
        
        
        
          <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <?php echo $toast; ?>
        <script>
            
         $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
  });

        </script>
    </body>
</html>