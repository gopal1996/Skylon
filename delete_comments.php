<?php
if(isset($_POST["submit"])){
	
		$id = $_POST['id'];
		
		/*
         * Insert image data into database
         */
        
        //DB details
        $dbHost     = 'localhost';
    $dbUsername = 'id6491760_skylon1';
    $dbPassword = 'skylon@12345';
    $dbName     = 'id6491760_skylon1';
		$pwd=$_POST['passwd'];
		
		if(! strcmp ($pwd,'admin'))
		{
			//Create connection and select DB
			$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
		
			// Check connection
			if($db->connect_error){
				die("Connection failed: " . $db->connect_error);
			}
		
			//Insert image content into database
			$insert = $db->query("DELETE FROM comments WHERE id = '$id'")  ;
			if($insert){
				echo "File uploaded successfully.";
			}else{
				echo "File upload failed, please try again.".mysqli_error($db);
			}
		}
		else{
			echo "password wrong noted your IP. Thanks!";
		}
}
?>