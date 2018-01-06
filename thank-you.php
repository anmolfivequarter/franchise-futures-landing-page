<?php
$name = $_POST['txtFullName'];
$email = $_POST['txtEmail'];
$telNo = $_POST['txtTelNo'];
$natureOfEnquiry = $_POST['ddlIAm'];
$additionalInfo = $_POST['txtAdditionalInfo'];
$bestTime = $_POST['ddlBestTime'];
$referal = $_POST['txtReferal'];

$formcontent = "Full name: $name \n Email: $email \n Telephone number: $telNo \n Nature of enquiry: $natureOfEnquiry \n Best time to call: $bestTime \n Additional information: $additionalInfo \n Where they heard about us: $referal";
$recipient = "krishma@franchisefutures.co.uk";
$subject = "Franchise Futures - Enquiry Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

?>
<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.typekit.net/nrx1onf.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">

	<title>Franchise Futures</title>
</head>

<body>
	<header>
		<div class="container">
			<div class="d-flex justify-content-center">
				<img src="img/franchise-futures-logo@2x.png" alt="Franchise Futures - Helping you move forward">
			</div>
		</div>
	</header>
	<section class="content">
		<div class="container">
			<h1 class="text-center">Thank you for your enquiry</h1>
			<h2 class="text-center">Your enquiry has been receive and we’ll be in touch at the time you specified.</h2>
		</div>
	</section>

	<!-- Javascript -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>

</html>
