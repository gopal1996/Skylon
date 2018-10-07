<?php
if(isset($_POST["submit"])){
		
		$prod_name=$_POST['prod_name'];
		$prod_desc=$_POST['prod_desc'];
		$Category=$_POST['Category'];
		


// get temporary file name for the uploaded file

$ftp_server = "ftp.skylonindia.com";
$ftp_user_name = "2gdevelopers@skylonindia.com";
$ftp_user_pass = "re7res#U3224";
$destination_file = "/project/";
$ftp_port = "21";
if(!empty($_FILES['image']['name'])){
	
        $filename = $_FILES['image']['name'];
	  $ftmp =  $_FILES['image']['tmp_name'];
	  
	  $imgtype = $_FILES['image']['type'];
        
        $file_parts = explode('.', $filename);
        $ext = $file_parts[count($file_parts) - 1];

        ///Save file with today's date and time
        $todaysdate = date("d-m-Y")."-".time();
        $new_file_name = $todaysdate.".".$ext;
	
        }else
        {
        	echo "not if<br>";
        }
// set up basic connection
$conn_id = ftp_connect($ftp_server,$ftp_port);
ftp_pasv($conn_id, true); 

// login with username and password
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass); 

// check connection
if ((!$conn_id) || (!$login_result)) { 
    echo "FTP connection has failed!";
    echo "Attempted to connect to $ftp_server for user $ftp_user_name"; 
    exit; 
} else {
    echo "Connected to $ftp_server, for user $ftp_user_name";
}

// upload the file
ftp_chdir($conn_id, '/project');


$upload = ftp_put($conn_id, "ble_$todaysdate.$ext", $ftmp, FTP_BINARY);
$image="ble_$todaysdate.$ext";

// check upload status
if (!$upload) { 
echo "FTP upload has failed!";
} else {
echo "Uploaded $ftmp to $ftp_server as $destination_file";
}

// close the FTP stream 
ftp_close($conn_id);

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
			$insert = $db->query("INSERT into products (image, prod_name, prod_desc, Category) VALUES ('$image', '$prod_name', '$prod_desc', '$Category')")  ;
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