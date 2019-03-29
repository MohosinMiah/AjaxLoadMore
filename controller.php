        <?php
        include("DAO.php");
        ?>

        <?php 
// Creat Object of DAO class to Load data from Database
        $posts = new DAO();
        $posts->number_posts = $_POST["commentNewCount"];

        $datas = $posts->getDataFromPosts();
        if ($posts->total_comments + 2 >  $posts->number_posts) {
            ?>
   <script>
       $(document).ready(function(){

            $("#load").content="";


       });
   </script>
            <?php
        }

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