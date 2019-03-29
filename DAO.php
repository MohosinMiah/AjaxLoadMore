<?php
include("config.php");
 class DAO{
	
    public $number_posts = 2; 
    public $total_comments = 0; 
    
	
	public function dbConnect(){
		
		$dbhost = DB_SERVER; // set the hostname
		$dbname = DB_DATABASE ; // set the database name
		$dbuser = DB_USERNAME ; // set the mysql username
		$dbpass = DB_PASSWORD;  // set the mysql password

		try {
			$dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
			$dbConnection->exec("set names utf8");
            $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              echo "Success";
			return $dbConnection;

		}
		catch (PDOException $e) {
			echo 'Connection failed: ' . $e->getMessage();
		}
	
		
	}
	
	public function getDataFromPosts(){
	
		
		try {
			$dbConnection = $this->dbConnect();
			$stmt = $dbConnection->prepare("SELECT * FROM `posts`  LIMIT :number_posts");
			$stmt->bindParam(':number_posts', $this->number_posts, PDO::PARAM_INT);
			$stmt->execute();

            $Count = $stmt->rowCount(); 
            $this->total_comments = $Count;
			//echo " Total Records Count : $Count .<br>" ;
             
	
			if ($Count  > 0){

            $data =$stmt->fetchAll(PDO::FETCH_ASSOC);
               
				return $data;
			}else{
                return "No Data Found";
            }

		}
		catch (PDOException $e) {
			echo 'Connection failed: ' . $e->getMessage();
		}
	}
	
	
	
}



?>