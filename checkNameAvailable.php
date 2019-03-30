<?php 
include 'DAO.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax Load More Example</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<script type="text/javascript">
    $(document).ready(function() {
      $("input").keyup(function(){
      
      var name = $("input").val();
      $.post("suggession.php",{
        checkName : name

      },function(data,status){
        $("#checkName").html(data);
      }); 


      });


    });
</script>

<div class="col-md-12">
    <h1 class="jumbotron text-center text-primary">Check Name Availability</h1>
    <a href="index.php">Ajax Load More</a>

</div>
<div class="col-md-12">

<label for="name">Enter Your Name Pls</label>
<input type="text" name="name">
<p id="checkName"></p>


    </body>

</html> 