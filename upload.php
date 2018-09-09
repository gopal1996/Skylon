<?php
if(isset($_POST["submit"])){
	echo $_FILES["image"]["tmp_name"];
		$check = getimagesize($_FILES["image"]["tmp_name"]);
		$imgContent=null;
		if($check !== false){
			$image = $_FILES['image']['tmp_name'];
			$imgContent = addslashes(file_get_contents($image));
		}
		$prod_name=$_POST['prod_name'];
		$prod_desc=$_POST['prod_desc'];
		$Category=$_POST['Category']
		/*
         * Insert image data into database
         */
        
        //DB details
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'skylon1';
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
			$insert = $db->query("INSERT into products (image, prod_name, prod_desc, Category) VALUES ('$imgContent', '$prod_name', '$prod_desc','$Category')")  ;
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