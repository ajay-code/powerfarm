<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<title>Form</title>

	<!-- Styles -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="style/bootstrapValidator.css">
	<link rel="stylesheet" href="style/custom.css">
	
	<!-- Scripts -->
	<script src='scripts/jquery-1.11.3.js' type='text/javascript'></script>
	<script src="bootstrap/js/bootstrap.js"></script>
    <script src='scripts/bootstrapValidator.js'></script>
    <script src='scripts/custom.js'></script>
</head>
<body>
	<div class="container">
		<div class="row">
		<br>
		<br>
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default">
				  <div class="panel-heading">Sign Up to Enter the Draw</div>
				  <div class="panel-body">
				  
					<form id="form" action="submit.php" method="post">
						<div class="form-group has-feedback">
						    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name*" data-minlength="4" required>
						    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
						    <div class="help-block with-errors"></div>
						</div>
						<div class="form-group has-feedback">
						    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email*" required>
						    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
						    <div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
						    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Phone">
						</div>
						
						<select class="form-control" name="type"> 
						  	 <option value='Arable / Crop Farm'>Arable / Crop Farm</option>
		                     <option value='Construction/Hire'>Construction/Hire</option>
		                     <option value='Contractor'>Contractor</option>
		                     <option value='Dairy ( high input )'>Dairy ( high input )</option>
		                     <option value='Dairy ( low input )'>Dairy ( low input )</option>
		                     <option value='Deer'>Deer</option>
						</select>

						<div class="row"><!-- Checkbox Row -->
							<div class="form-group col-xs-4 col-xs-offset-3">
								<div class="checkbox ">
								    <label>
								      <input type="checkbox" name="new" > New
								      <!-- <span class="glyphicon form-control-feedback small" aria-hidden="true"></span> -->
						    		  <!-- <div class="help-block with-errors"></div> -->
								    </label>
								</div>
							</div>
							<div class="form-group col-xs-4">
								<div class="checkbox">
								    <label>
								      <input type="checkbox" name="used" > Used
								    </label>
								</div>
							</div>
						</div><!-- End Checkbox Row -->


						<!-- Images -->

						<div class="row brand"><!--Brand Tractor-->
							<div class="col-sm-12 brand-head"  >
								<span>
									<a href="#tractors" data-toggle="collapse"><i class="glyphicon glyphicon-plus"></i></a>
								</span>
								<p class="h4">Tractors</p>
								<img class="pull-right" class="" src="images/tractors-pic.png" alt="">
								<span id="tractors[]" class="text-danger"></span>
							</div>
							<div class="collapse col-sm-12" id="tractors">
								<div class="col-sm-12">
										<input type="checkbox" id="tractor1" class="hide" value="DF" name="tractors[]" >
	                  					<label for="tractor1">
	                  						<div class="row">  	                  						
		                  						<div class="col-xs-3">
		                  							<img class='img-responsive' src='images/DF.png' width='60' height='60' alt>
		                  						</div>
		                  						<div class="col-xs-7 desc-text">
		                  							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque repellendus inventore numquam blan.
		                  						</div>
		                  						<div class="col-xs-2 desc-text">
		                  							<img class="tic" src="images/kliponious-black-tick.png"    alt >
		                  						</div>
		                  					</div>
	                  					</label>
								</div>
								<div class="col-sm-12 ">
										<input type="checkbox" id="tractor2" class="hide" value="KI" name="tractors[]" >
	                  					<label for="tractor2">
	                  						<div class="row">  	                  						
		                  						<div class="col-xs-3">
		                  							<img class='img-responsive' src='images/KI.png' width='60' height='60' alt>
		                  						</div>
		                  						<div class="col-xs-7 desc-text">
		                  							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque repellendus inventore numquam blan.
		                  						</div>
		                  						<div class="col-xs-2 desc-text">
		                  							<img class="tic" src="images/kliponious-black-tick.png"    alt >
		                  						</div>
		                  					</div>
	                  					</label>
								</div>
								<div class="col-sm-12">
										<input type="checkbox" id="tractor3" class="hide" value="SA" name="tractors[]" >
	                  					<label for="tractor3">
	                  						<div class="row">  	                  						
		                  						<div class="col-xs-3">
		                  							<img class='img-responsive' src='images/SA.png' width='60' height='60' alt>
		                  						</div>
		                  						<div class="col-xs-7 desc-text">
		                  							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque repellendus inventore numquam blan.
		                  						</div>
		                  						<div class="col-xs-2 desc-text">
		                  							<img class="tic" src="images/kliponious-black-tick.png"    alt >
		                  						</div>
	                  						</div>
	
	                  					</label>
								</div>
								<div class="col-sm-12">
										<input type="checkbox" id="tractor4" class="hide" value="VE" name="tractors[]" >
	                  					<label for="tractor4">
	                  						<div class="row">  	                  						
		                  						<div class="col-xs-3">
		                  							<img class='img-responsive' src='images/VE.png' width='60' height='60' alt>
		                  						</div>
		                  						<div class="col-xs-7 desc-text">
		                  							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque repellendus inventore numquam blan.
		                  						</div>
		                  						<div class="col-xs-2 desc-text">
		                  							<img class="tic" src="images/kliponious-black-tick.png"    alt >
		                  						</div>
	                  						</div>
	
	                  					</label>
								</div>
								
							</div>
						</div><!--End Brand Tractor-->
	<!-- New Row  -->
						
						<!-- Test -->



						<button type="submit" class="btn btn-success">Submit</button>

					</form>
				</div>
				</div>
			</div>
		</div>
	</div>

    
</body>
</html>