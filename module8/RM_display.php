
<?php 
	$page_title = "Dashboard";
//	include_once('../includes/header_admin.php');
    $mysqli = mysqli_connect('localhost', 'admin', 'enter', 'learndb') or die("Please, die");
    $query = "SELECT RoomID, RoomName, RoomNumber, BuildingName, RoomStatus FROM roommaintenance;";
    $result = mysqli_query($mysqli, $query) or die(mysql_error());

?>

<!----------------------------------- HEADER START ----------------------------------->

<!DOCTYPE html> 

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php echo $page_title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="author" content="Andrei Mishael D. Santos">
    <meta charset="utf-8">
    <meta name="description" content="Official Website of DLS-CSB's Office of Culture and Arts">
    <meta name='keywords' content="arts, theater, dance, choir, de la salle, saint, benilde, la salle, DLS-CSB">
    
     <!-- Stylesheets -->
       <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">       
            
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
    
    <body>
    <div class="row">
        <div class="col l4 m6 s10 push-l4 push-s1 push-m3">
            
      <table class="striped centered">
        <thead>
          <tr>
              <th>RoomID</th>
              <th>Room Name</th>
              <th>Room Number</th>
              <th>Building Name</th>
              <th>Room Status</th>
              <th>Actions</th>
          </tr>
        </thead>

        <tbody>
         <?php
    
    if (mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            extract($row);
            echo"<Tr>
            <td>$RoomID </td>
            <td>$RoomName </td>
            <td>$RoomNumber </td>
            <td>$BuildingName </td>
            <td>$RoomStatus </td>
            <td> <a href='RM_update.php?id=$RoomID' class='btn-floating btn-large waves-effect waves-light blue lighten-1'><i class='material-icons'>create</i></a>
            <a href='RM_delete.php?id=$RoomID' class='btn-floating btn-large waves-effect waves-light red lighten-1'><i class='material-icons'>clear</i></a> </td>
            </tr>";
            
        }
    }
    ?>
        
        </tbody>
      </table>
            
        </div>    
    </div>

    
    

        
     
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    </body>
</html> 
<!------------------------------------------ FOOTER END ---------------------------->
  