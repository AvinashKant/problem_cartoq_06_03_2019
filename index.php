<!DOCTYPE html>
<html>
<head>
	<title>Cartoq Problem</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>
<body>
	<div class="container-fluid">
		<div class="jumbotron">
			<h1 class="display-4">CarToq Problem</h1>
			<div class="step1View" id="step1View">
				<h1>Form 1</h1>
			</div>
			<div style="display: none;" id="step2" class="step2View">
				<h1>Form 2</h1>
			</div>
		</div>
		<form id="userstep1" method="POST" action="phpcode/savetodb.php">
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="username">Name</label>
					<input type="text" required="" class="form-control" id="username" name="user_name" placeholder="Name">
				</div>
				<div class="form-group col-md-4">
					<label for="useremail">Email</label>
					<input type="email" required="" name="user_email" class="form-control" id="useremail" placeholder="Email">
				</div>
				<div class="form-group col-md-4">

					<label for="userincome">Income</label>
					<input type="text" required="" name="user_income" id="userincome" class="form-control" placeholder="income">
				</div>
			</div>
			<div class="form-group">
				<label for="userAddress">Address</label>
				<textarea class="form-control" required="" name="user_address" rows="5" id="userAddress"></textarea>
			</div>
			<div class="form-row">
				<div class="col-md-12">
					Date of birth
				</div>
				<div class="form-group col-md-4">
					<label for="inputCity">Date</label>
					<select required="" name="user_date" id="inputState" class="form-control">
						<option value="">Choose your date</option>
						<?php
						for ($i=1; $i <= 31; $i++) { ?>
							<option value="<?php echo $i;?>"><?php echo $i;?></option>
						<?php }
						?>
					</select>
				</div>
				<div class="form-group col-md-4">
					<label for="inputState">Month</label>
					<select required="" name="user_month" id="inputState" class="form-control">
						<option value="">Choose your month</option>
						<?php
						for ($i=1; $i <= 12; $i++) { ?>
							<option value="<?php echo $i;?>"><?php echo $i;?></option>
						<?php }
						?>
					</select>
				</div>
				<input type="hidden" name="requestType" value="1" id="requestTypeId">
				<div class="form-group col-md-4">
					<label for="inputZip">Year</label>
					<select required="" name="user_year" id="inputState" class="form-control">
						<option value="">Choose your year</option>
						<?php
						for ($i=1950; $i <= date('Y'); $i++) { ?>
							<option value="<?php echo $i;?>"><?php echo $i;?></option>
						<?php }
						?>
					</select>
				</div>
			</div>

			<div class="form-row">
				<div style="display: none;" class="step2View">
					<select name="user_role" id="user_role" class="form-control">
						<option value="">Choose your role</option>
						<option value="1">Manager</option>
					</select>
				</div>
			</div>
		</div>
		<input type="reset" id="resetBtn">
		<button type="submit" class="btn btn-primary">Sign in</button>
	</form>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/formsubmit.js"></script>

</html>