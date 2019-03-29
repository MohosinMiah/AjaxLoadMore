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
        var commentsCount = 2;
        $("#load").click(function() { //user clicks on button
            commentsCount = commentsCount + 2;
            $("#comments").load('controller.php', {
                commentNewCount: commentsCount
            });

        });

    });
</script>

<div class="col-md-12">
    <h1 class="jumbotron text-center text-primary">Ajax Load More Example</h1>

</div>
<div class="col-md-12">


    <div id="comments">

        <?php 
        $posts = new DAO();
        $posts->number_posts = 2;

        $datas = $posts->getDataFromPosts();

        foreach ($datas as $data) {
            ?>

        <div class="media">
            <div class="media-left">
                <img src="https://www.w3schools.com/bootstrap/img_avatar1.png" class="media-object" style="width:60px">
            </div>
            <div class="media-body">
                <h4 class="media-heading"><?php echo $data["name"]; ?></h4>
                <p><?php echo $data["description"]; ?></p>
            </div>
        </div>

        <?php 
    }
    ?>
    </div>
    <button id="load" class="btn btn-big btn-info">Load More</button>




    </body>

</html> 