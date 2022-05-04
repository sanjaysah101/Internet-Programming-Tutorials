<!DOCTYPE html>
<html lang="en">
	<head>
		<title>File Upload</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery-3.2.1.min.js"></script>
	</head>
	<body>
		<div class="container">
			<h2>Upload Image</h2>
			<div id="error" style="display:none"></div>
			<form action="upload.php" method="post" id="clientform" enctype = "multipart/form-data">
				<div class="form-group">
					<label for="username">Username:</label>
					<input type="text" class="form-control" id="username" placeholder="Enter Email" name="username">
				</div>
				
				<div class="form-group">
					<label for="image">Image:</label>
					<input type="file" class="form-control" id="image" placeholder="Select Image" name="image" accept="image/*">
				</div>
				
				<button type="submit" class="btn btn-default" name="upload">Submit</button>
			</form>
		</div>
	</body>
</html>
