<?php
require_once('connect.php');
$id = $_GET['id'];
$SelSql = "SELECT * FROM `project` WHERE id=$id";
$res = mysqli_query($connection, $SelSql);
$r = mysqli_fetch_assoc($res);
if(isset($_POST) & !empty($_POST)){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];

	$UpdateSql = "UPDATE `project` SET fname='$fname', lname='$lname', gender='$gender', age=$age, email_id='$email' WHERE id=$id";
	$res = mysqli_query($connection, $UpdateSql);
	if($res){
		header('location: view.php');
	}else{
		$fmsg = "Failed to update data.";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD Application - UPDATE Operation</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
 
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
 
<link rel="stylesheet" href="styles.css" >
 
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
	<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
		<form method="post" class="form-horizontal col-md-6 col-md-offset-3">
		<h2>UPDATE Operation in CRUD Application</h2>
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">First Name</label>
			    <div class="col-sm-10">
			      <input type="text" name="fname"  class="form-control" id="input1" value="<?php echo $r['fname']; ?>" placeholder="First Name" />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Last Name</label>
			    <div class="col-sm-10">
			      <input type="text" name="lname"  class="form-control" id="input1" value="<?php echo $r['lname']; ?>" placeholder="Last Name" />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">E-Mail</label>
			    <div class="col-sm-10">
			      <input type="email" name="email"  class="form-control" id="input1" value="<?php echo $r['email_id']; ?>" placeholder="E-Mail" />
			    </div>
			</div>

			<div class="form-group" class="radio">
			<label for="input1" class="col-sm-2 control-label">Gender</label>
			<div class="col-sm-10">
			  <label>
			    <input type="radio" name="gender" id="optionsRadios1" value="male" <?php if($r['gender'] == 'male'){ echo "checked";} ?>> Male
			  </label>
			  	  <label>
			    <input type="radio" name="gender" id="optionsRadios1" value="female" <?php if($r['gender'] == 'female'){ echo "checked";} ?>> Female
			  </label>
			</div>
			</div>

			<div class="form-group">
			<label for="input1" class="col-sm-2 control-label">Age</label>
			<div class="col-sm-10">
				<select name="age" class="form-control">
					<option>Select Your Age</option>
					<option value="20" <?php if($r['age'] == '20'){ echo "selected";} ?> >20</option>
					<option value="21" <?php if($r['age'] == '21'){ echo "selected";} ?> >21</option>
					<option value="22" <?php if($r['age'] == '22'){ echo "selected";} ?> >22</option>
					<option value="23" <?php if($r['age'] == '23'){ echo "selected";} ?> >23</option>
					<option value="24" <?php if($r['age'] == '24'){ echo "selected";} ?> >24</option>
					<option value="25" <?php if($r['age'] == '25'){ echo "selected";} ?> >25</option>
				</select>
			</div>
			</div>
			<input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="submit" />
		</form>
	</div>
</div>
</body>
</html>