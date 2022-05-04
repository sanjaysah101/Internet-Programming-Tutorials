<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Client Form</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery-3.2.1.min.js"></script>
		<script>
			
		</script>
		<style>
			#error{
				color:red;	
			}
		</style>
	</head>
	<body>
		<div class="container">
			<h2>Client Detail Form</h2>
			<div id="error" style="display:none"></div>
			<form action="http://google.com" method="post" id="clientform">
				<div class="form-group">
					<label id="error" style="display:none;">Fill all detail</label>
				</div>
				<div class="form-group">
					<label for="cname">Name:</label>
					<input type="text" class="form-control" id="cname" placeholder="Enter Name" name="cname">
				</div>
				<div class="form-group">
					<label for="email">Username:</label>
					<input type="email" class="form-control" id="email" placeholder="example@gmail.com" name="email">
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" id="pwd" placeholder="123456" name="pwd">
				</div>
				<div class="form-group">
					<label for="rpwd">Re-Password:</label>
					<input type="text" class="form-control" id="rpwd" placeholder="Enter Re-Password" name="rpwd">
				</div>
				<div class="form-group">
					<label for="age">Age:</label>
					<input type="number" class="form-control" id="age" placeholder="Enter age between 18 to 70" name="age">
				</div>
				<div class="form-group">
					<label for="bdate">Birth date:</label>
					<input type="date" class="form-control" id="bdate" placeholder="Enter birthdate" name="bdate">
				</div>
				<div class="form-group">
					<label for="country">Country:</label>
					<input type="text" class="form-control" id="country" placeholder="Enter country" name="country">
				</div>
				<div class="form-group">
					<label for="state">State:</label>
					<input type="text" class="form-control" id="state" placeholder="Enter state" name="state">
				</div>
				<div class="form-group">
					<label for="city">City:</label>
					<input type="text" class="form-control" id="city" placeholder="Enter city" name="city">
				</div>
				<div class="form-group">
					<label for="image">Image:</label>
					<input type="file" class="form-control" id="image" placeholder="Select Image" name="image">
				</div>
				<div class="form-group">
					<label for="city">Note:</label>
					<textarea class="form-control" id="note" placeholder="Enter Description" name="note">
					</textarea>
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</body>
</html>
