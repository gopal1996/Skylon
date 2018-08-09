<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
                        <li class="current"><a href="#body">Home</a></li>
                        <li><a href="index.html#about">About Us</a></li>
                        <li><a href="#page-wrapper">Services</a></li>
                        <li><a href="#showcase">Portfolio</a></li>
                        <li><a href="#our-team">Team</a></li>
                        <li><a href="#pricing">Pricing</a></li>
                        <li><a href="#blog">Blog</a></li>
                        <li><a href="#contact-us">Contact</a></li>
						
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <div id="page-wrapper">
            
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Dashboard</h3>
                </div>
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
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- wrapper -->
</body>            






