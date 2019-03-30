<?php
        include("DAO.php");
        
          $posts = new DAO();
          $posts->number_posts = 12;
          $name = $_POST["checkName"];
 if(!empty($name)){
        $datas = $posts->getDataFromPosts();

            foreach ($datas as $data) {

                 if(stripos($data["name"], $name) !== false ){
                     echo $data["name"];
                     echo "<br>";
                 }
                
    }
}
        
?> 