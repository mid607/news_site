<?php

require('..\DATABASE CONECT\DBCONECTION.php');

$GLOBALS['admins']= array("4mido6anwar1988");


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../dist/css/php_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>INSETR DATA</title>
</head>

<body>

    <?php
    
        
     if(isset($_POST['admin-btn'])){ 
    
    
        function register (){    
       
     $GLOBALS['name'] = $_POST['admin-text'];
          
     if(in_array($GLOBALS['name'],$GLOBALS['admins'])){
     
        echo "<h1>" . "Welcome" ." (: ". $GLOBALS['name'] . " </h1>";
    
      echo "
      <form action='' method='post' class='admin_form'>
          <input type='file' name='imege' id= ''><br>
          <label for='title'>TITLE</label>
          <textarea name='title' id='' cols='20' rows='20'></textarea>
          <label for='subject'>SUBJECT</label>  
          <textarea name='subject' id='' cols='40' rows='40'></textarea>
      </form>";
  }
  
      else{
  
      echo "<h1>" . "you are not admin ):". $_POST['admin-text'] .";". "</h1>";
      }
      }
      
  register();
      
      }

    
    ?>


    <script src="../../dist/js/php_Script.js"></script>
</body>

</html>