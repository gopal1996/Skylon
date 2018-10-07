<?php
if(isset($_POST["submit"])){
	
		$id = $_POST['id'];
		$prod_name=$_POST['prod_name'];
		$prod_desc=$_POST['prod_desc'];
		$Category=$_POST['Category'];
		/*
         * Insert image data into database
         */
        
        //DB details
    $dbHost     = 'localhost';
    $dbUsername = 'skyloki9_skylon';
    $dbPassword = 'skylon@123';
    $dbName     = 'skyloki9_skylon';
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
			$insert = $db->query("UPDATE products SET prod_name='$prod_name', prod_desc='$prod_desc', Category='$Category' WHERE id = '$id'")  ;
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