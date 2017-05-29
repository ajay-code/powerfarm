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
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default">
				  <div class="panel-heading">Sign Up to Enter the Draw</div>
				  <div class="panel-body">
				  
					<!-- <div class="page-header">
					    <h3>Sign Up to Enter the Draw</h3> 
					</div> -->
					<form id="form" action="#">
						<div class="form-group">
						    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name*">
						</div>
						<div class="form-group">
						    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email*" required>
						</div>
						<div class="form-group">
						    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Phone">
						</div>
						<div class="row"><!-- Checkbox Row -->
							<div class="col-xs-4 col-xs-offset-3">
								<div class="checkbox">
								    <label>
								      <input type="checkbox" name="new"> New
								    </label>
								</div>
							</div>
							<div class="col-xs-4">
								<div class="checkbox">
								    <label>
								      <input type="checkbox" name="used"> Used
								    </label>
								</div>
							</div>
						</div><!-- End Checkbox Row -->

						<select class="form-control" name="type"> 
						  	 <option value='Arable / Crop Farm'>Arable / Crop Farm</option>
		                     <option value='Construction/Hire'>Construction/Hire</option>
		                     <option value='Contractor'>Contractor</option>
		                     <option value='Dairy ( high input )'>Dairy ( high input )</option>
		                     <option value='Dairy ( low input )'>Dairy ( low input )</option>
		                     <option value='Deer'>Deer</option>
						</select>

						<!-- Images -->
						<div class="h3 text-center">
							Brand Interest
						</div>

						<div class="row brand"><!--Brand Tractor-->
							<div class="col-sm-12 brand-head">
								<p class="h4">Tractors</p>
									<img class="" src="images/tractors-pic.png" alt="">
							</div>
							<div class="col-sm-12 ">
								<div class="col-sm-3 col-xs-6">
										<input type="checkbox" id="tractor1" class="hide">
	                  					<label for="tractor1">
	                  						<img class='img-responsive' src='images/DF.png' width='60' height='60' alt>
	                  					</label>
								</div>
								<div class="col-sm-3 col-xs-6">
										<input type="checkbox" id="tractor2" class="hide">
	                  					<label for="tractor2">
	                  						<img class='img-responsive' src='images/KI.png' width='60' height='60' alt>
	                  					</label>
								</div>
								<div class="col-sm-3 col-xs-6">
										<input type="checkbox" id="tractor3" class="hide">
	                  					<label for="tractor3">
	                  						<img class='img-responsive' src='images/SA.png' width='60' height='60' alt>
	                  					</label>
								</div>
								<div class="col-sm-3 col-xs-6">
										<input type="checkbox" id="tractor4" class="hide">
	                  					<label for="tractor4">
	                  						<img class='img-responsive' src='images/VE.png' width='60' height='60' alt>
	                  					</label>
								</div>
							</div>
						</div><!--End Brand Tractor-->
	<!-- New Row  -->
						<div class="row brand"><!--Brand Grass-->
							<div class="col-sm-12 brand-head">
								<p class="h4">Grass</p>
									<img class="" src="images/grass-pic.png" alt="">
							</div>
							<div class="col-sm-12 ">
								<div class="col-sm-3 col-xs-6">
										<input type="checkbox" id="Grass1" class="hide">
	                  					<label for="Grass1">
	                  						<img class='img-responsive' src='images/HO.png' width='75'  alt>
	                  					</label>
								</div>
								<div class="col-sm-3 col-xs-6">
										<input type="checkbox" id="Grass2" class="hide">
	                  					<label for="Grass2">
	                  						<img class='img-responsive' src='images/KV.png' width='75'  alt>
	                  					</label>
								</div>
								<div class="clearfix visible-xs"></div>
								<div class="col-sm-3 col-xs-6">
										<input type="checkbox" id="Grass3" class="hide">
	                  					<label for="Grass3">
	                  						<img class='img-responsive' src='images/MG.png' width='75'  alt>
	                  					</label>
								</div>
								<div class="col-sm-3 col-xs-6">
										<input type="checkbox" id="Grass4" class="hide">
	                  					<label for="Grass4">
	                  						<img class='img-responsive' src='images/SR.png' width='75'  alt>
	                  					</label>
								</div>
								<div class="clearfix"></div>

								<div class="col-sm-3 col-sm-offset-5 col-xs-6">
										<input type="checkbox" id="Grass5" class="hide">
	                  					<label for="Grass5">
	                  						<img class='img-responsive' src='images/MH.png' width='75'  alt>
	                  					</label>
								</div>
							</div>
						</div><!--End Brand Grass-->
	<!-- New Row -->


						<button class="btn btn-success">Submit</button>

					</form>
				</div>
				</div>
			</div>
		</div>
	</div>

    
</body>
</html>