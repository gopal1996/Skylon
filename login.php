<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	 <header id="navigation" class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
                    
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="Navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li class="current"><a href="">Projects</a></li>
                        <li><a href="comments.php">Comments</a></li>
                        
                        
						
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
       <!-- Nav tabs -->
	   <script>
	   $(".add").click(function(){
    $(".edit").removeClass("active");
    $(".del").removeClass("active");
});
	   $(".edit").click(function(){
    $(".add").removeClass("active");
    $(".del").removeClass("active");
});
	   </script>
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link add active" data-toggle="tab" href="#home">Add Projects</a>
    </li>
    <li class="nav-item">
      <a class="nav-link edit" data-toggle="tab" href="#edit">Edit Projects</a>
    </li>
    <li class="nav-item">
      <a class="nav-link del" data-toggle="tab" href="#delete">Remove Projects</a>
    </li>
  </ul>
  
<div class="tab-content">
	<div id="home" class="container tab-pane active"><br>
		<div class="container">             
			<form action="upload.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="prod_name">Project Name:</label>
					<input type="text" name="prod_name" class="form-control" id="prod_name">
				</div>
				<div class="form-group">
					<label for="prod_desc">Project Description:</label>
					<input type="text" name="prod_desc" class="form-control" id="prod_desc">
				</div>
				<div class="form-group">
					<label for="Category">Category:</label>
					<select name="Category" class="form-control" id="Category">
					<option id="ongoing">ongoing</option>
					<option id="completed">completed</option>
					</select>
				</div>

				<div class="form-group">
					<label for="image">Images:</label>
					<input type="file" class="form-control" name="image">
				</div>
				<div class="form-group">
					<label for="passwd">Password:</label>
					<input type="password" class="form-control" name="passwd">
				</div>
				<input type="submit" class="form-control" name="submit" value="UPLOAD"/>
			</form>
		</div>
	</div>



    <div id="edit" class="container tab-pane fade"><br>
      <div class="container">
	  <?php
//DB details
    $dbHost     = 'localhost';
    $dbUsername = 'skyloki9_skylon';
    $dbPassword = 'skylon@123';
    $dbName     = 'skyloki9_skylon';
		//$pwd=$_POST['passwd'];

// Create connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, prod_name, prod_desc, Category FROM products";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	echo '<table class="table table-striped table-bordered">';
    	
    echo '<tbody>';
      echo '<tr>';
        echo '<td>'.$row["id"].'</td>';
        echo '<td>'.$row["prod_name"].'</td>';
        echo '<td>'.$row["prod_desc"].'</td>';
		echo '<td>'.$row["Category"].'</td>';
      echo '</tr>';
      
    echo '</tbody>';
  echo '</table>';
        
    }
} else {
    echo "0 results";
}

//$conn->close();
?> 

<form action="edit.php" method="post" enctype="multipart/form-data">
                    
					<?php
					echo '<div class="form-group">';
					echo '<label for="id">ID:</label>';
					echo '<select class="form-control" id="id" name="id">';
					$sql_id = "SELECT id FROM products";
					$result_id = $conn->query($sql_id);
				if($result_id->num_rows > 0) {
					while($row = $result_id->fetch_assoc()) {
				
						echo '<option id="id">'.$row["id"].'</option>';
					}
				}
						
						
					 echo '</select>';
					 echo '</div>';
					 ?>
					
					<div class="form-group">
					<label for="prod_name">Project Name:</label>
					<input type="text" name="prod_name" class="form-control" id="prod_name">
					</div>
					<div class="form-group">
					<label for="prod_desc">Project Description:</label>
					<input type="text" name="prod_desc" class="form-control" id="prod_desc">
					</div>
					<div class="form-group">
					<label for="Category">Category:</label>
					<select name="Category" class="form-control" id="Category">
					<option>ongoing</option>
					<option>completed</option>
					</select>
					</div>
					<div class="form-group">
					<label for="passwd">Password:</label>
					<input type="password" class="form-control" name="passwd">
					</div>
					<input type="submit" class="form-control" name="submit" value="UPLOAD"/>
					</form>
                </div>
    </div>
	
	
	
    <div id="delete" class="container tab-pane fade"><br>
      <div class="container">
	  <?php
//DB details
    $dbHost     = 'localhost';
    $dbUsername = 'skyloki9_skylon';
    $dbPassword = 'skylon@123';
    $dbName     = 'skyloki9_skylon';
		

// Create connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, prod_name, prod_desc, Category FROM products";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	echo '<table class="table table-striped table-bordered">';
    	
    echo '<tbody>';
      echo '<tr>';
        echo '<td>'.$row["id"].'</td>';
        echo '<td>'.$row["prod_name"].'</td>';
        echo '<td>'.$row["prod_desc"].'</td>';
		echo '<td>'.$row["Category"].'</td>';
      echo '</tr>';
      
    echo '</tbody>';
  echo '</table>';
        
    }
} else {
    echo "0 results";
}

//$conn->close();
?> 

<form action="delete.php" method="post" enctype="multipart/form-data">
                    
					<?php
					echo '<div class="form-group">';
					echo '<label for="id">ID:</label>';
					echo '<select class="form-control" id="id" name="id">';
					$sql_id_del = "SELECT id FROM products";
					$result_id_del = $conn->query($sql_id_del);
				if($result_id_del->num_rows > 0) {
					while($row = $result_id_del->fetch_assoc()) {
				
						echo '<option id="id">'.$row["id"].'</option>';
					}
				}
						
						
					 echo '</select>';
					 echo '</div>';
					 $conn->close();
					 ?>
					
		
                    
                        
					<div class="form-group">
					<label for="passwd">Password:</label>
					<input type="password" class="form-control" name="passwd">
					</div>
					<input type="submit" class="form-control" name="submit" value="DELETE"/>
					</form>
                </div>
    </div>
  </div>

    <!-- wrapper -->
</body>            






