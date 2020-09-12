<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Ini halaman contact</title>
  </head>
  <body>
	<!-- <div id="header"></div> -->
	<?php include('header.php'); ?>
	<div class="container" style="width: 75%; color:black ;">
		<div class="row">
			<div class="col-md-12">
				<form class="needs-validation" novalidate>
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="" class="form-control" required>
						<div class="valid-feedback">
								Looks good!
						</div>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="" class="form-control" required>
						<div class="valid-feedback">
								Looks good!
						</div>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" name="" class="form-control" id="num" autocomplete="off" required>
						<div class="valid-feedback">
								Looks good!
						</div>
					</div>
					<div class="form-group">
						<label>Message</label>
						<textarea name="" class="form-control" rows="5" required></textarea>
						<div class="valid-feedback">
								Looks good!
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Submit</button>
						<button type="reset" class="btn btn-primary">Cancel</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="container" style="width: 75%;">
   	 <div class="row">
   		 <div class="col-sm-12">
   			 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3550138537535!2d106.7678225148337!3d-6.216826395499647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f72b05acf713%3A0x9e0838ac53a146ed!2sWebHozz!5e0!3m2!1sen!2sid!4v1536382411342" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
   		 </div>
   	 </div>
	</div>
	
	<!-- <div id="footer"></div> -->
	<?php include('footer.php'); ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
  </body>
</html>