<?php
ob_start();
session_start();



include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <title>Document</title>
</head>
<body>
  <h1>XXE attack</h1>
    <form method="POST">

        <textarea required="" rows="12" cols="50" name="payload"></textarea><br>
        <br>
        <input type="submit" class="btn btn-primary" name="submit" value="Submit">  

    </form>
    <br />
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        libxml_disable_entity_loader(false) ;
        libxml_use_internal_errors(true);
        $xml = $_POST["payload"];
        $xmlobj = simplexml_load_string($xml, null, LIBXML_NOENT);
        //simplexml_load_string($xml);
        
        $result= $xmlobj->asXML();
        echo "" .$result ;
      }
      
    ?>
</body>
</html>

<?php include('footer.php')?>

