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
						    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name*" required>
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
							<div class="form-group col-xs-6 col-sm-4 col-sm-offset-2">
								<div class="checkbox text-center">
								    <label>
								      <input type="checkbox" name="new" > New
								     
								    </label>
								</div>
							</div>
							<div class="form-group col-xs-6 col-sm-4">
								<div class="checkbox text-center">
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
							</div>
							<div class="collapse col-sm-12" id="tractors">
								<div class="col-sm-12">
										<input type="checkbox" id="tractor1" class="hide" value="DF" name="tractors[]" >
	                  					<label for="tractor1">
	                  						<div class="row">  	                  						
		                  						<div class="padding-0 col-xs-3 col-sm-2">
		                  							<img class='label-img' src='images/DF.png'  alt>
		                  						</div>
		                  						<div class="col-xs-7 col-sm-8 desc-text">
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
		                  						<div class="padding-0 col-xs-3 col-sm-2">
		                  							<img class='label-img' src='images/KI.png'  alt>
		                  						</div>
		                  						<div class="col-xs-7 col-sm-8 desc-text">
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
		                  						<div class="padding-0 col-xs-3 col-sm-2">
		                  							<img class='label-img' src='images/SA.png'  alt>
		                  						</div>
		                  						<div class="col-xs-7 col-sm-8 desc-text">
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
		                  						<div class="padding-0 col-xs-3 col-sm-2">
		                  							<img class='label-img' src='images/VE.png'  alt>
		                  						</div>
		                  						<div class="col-xs-7 col-sm-8 desc-text">
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
						<div class="row brand"><!--Brand Tractor-->
							<div class="col-sm-12 brand-head"  >
								<span>
									<a href="#grass" data-toggle="collapse"><i class="glyphicon glyphicon-plus"></i></a>
								</span>
								<p class="h4">Grass</p>
								<img class="pull-right" class="" src="images/grass-pic.png" alt="">
							</div>
							<div class="collapse col-sm-12" id="grass">
								<div class="col-sm-12">
										<input type="checkbox" id="grass1" class="hide" value="HO" name="grasses[]" >
	                  					<label for="grass1">
	                  						<div class="row">  	                  						
		                  						<div class="padding-0 col-xs-4">
		                  							<img class='label-img' src='images/HO.png'  alt>
		                  						</div>
		                  						<div class="col-xs-6 desc-text">
		                  							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque repellendus inventore numquam blan.
		                  						</div>
		                  						<div class="col-xs-2 desc-text">
		                  							<img class="tic" src="images/kliponious-black-tick.png"    alt >
		                  						</div>
		                  					</div>
	                  					</label>
								</div>
								<div class="col-sm-12 ">
										<input type="checkbox" id="grass2" class="hide" value="KV" name="grasses[]" >
	                  					<label for="grass2">
	                  						<div class="row">  	                  						
		                  						<div class="padding-0  padding-0 col-xs-4">
		                  							<img class=' label-img' src='images/KV.png'  alt>
		                  						</div>
		                  						<div class="col-xs-6 desc-text">
		                  							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque repellendus inventore numquam blan.
		                  						</div>
		                  						<div class="col-xs-2 desc-text">
		                  							<img class="tic" src="images/kliponious-black-tick.png"    alt >
		                  						</div>
		                  					</div>
	                  					</label>
								</div>
								<div class="col-sm-12">
										<input type="checkbox" id="grass3" class="hide" value="MG" name="grasses[]" >
	                  					<label for="grass3">
	                  						<div class="row">  	                  						
		                  						<div class="padding-0 col-xs-4">
		                  							<img class='label-img' src='images/MG.png'  alt>
		                  						</div>
		                  						<div class="col-xs-6 desc-text">
		                  							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque repellendus inventore numquam blan.
		                  						</div>
		                  						<div class="col-xs-2 desc-text">
		                  							<img class="tic" src="images/kliponious-black-tick.png"    alt >
		                  						</div>
	                  						</div>
	
	                  					</label>
								</div>
								<div class="col-sm-12">
										<input type="checkbox" id="grass4" class="hide" value="SR" name="grasses[]" >
	                  					<label for="grass4">
	                  						<div class="row">  	                  						
		                  						<div class="padding-0 col-xs-4">
		                  							<img class='label-img' src='images/SR.png'  alt>
		                  						</div>
		                  						<div class="col-xs-6 desc-text">
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
						
						<!-- Test -->


						<br>
						<br>
						<button type="submit" class="btn btn-success">Submit</button>

					</form>
				</div>
				</div>
			</div>
		</div>
	</div>

    
</body>
</html>