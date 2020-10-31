<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>PizzaNow!</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<!-- STYLES -->
	<style {csp-style-nonce}>
		body {
			color: white;
			background: #121618;
			background: <?php echo base_url('test/assets/bg_4.jpg'); ?> no-repeat fixed;
		}

		.pricing-entry {
			width: 100%;
			display: block;
			margin-bottom: 30px;
		}

		.pricing-entry .img {
			width: 60px;
			height: 60px;
			border-radius: 50%;
		}

		.pricing-entry .desc {
			width: calc(100% - 60px);
		}

		.pricing-entry .desc p {
			margin-bottom: 0;
		}

		.pricing-entry .text {
			width: 100%;
			display: block;
			position: relative;
			z-index: 0;
		}

		.pricing-entry .text:after {
			position: absolute;
			bottom: 35%;
			left: 0;
			right: 0;
			content: '';
			width: 100%;
			height: 1px;
			border-bottom: 1px dashed #bf7e06;
			z-index: -1;
		}

		.pricing-entry .text h3 {
			width: calc(100% - 80px);
			font-size: 18px;
		}

		.pricing-entry .text h3 span {
			background: #121618;
			background: url(../images/bg_4.jpg) no-repeat fixed;
			padding-right: 20px;
		}

		.pricing-entry .text .price {
			width: 80px;
			color: #fac564;
			text-align: right;
			background: #121618;
			background: <?php echo base_url('test/assets/bg.jpg'); ?> no-repeat fixed;
			font-size: 16px;
		}

		.d p {
			color: gray;
		}

		/* .pizzaCol{
			border: 1px solid black;
			border-radius: 5%;
			padding-top:10%; } */

		.pizzaCol img {
			display: block;
			width: 200px;
			height: 190px;
			margin: 0 auto;
			border-radius: 50%;
		}

		.pizzaCol .text h3 {
			font-size: 22px;
		}

		.pizzaCol .text h3 a {
			color: white;
		}

		.pizzaCol .text p {
			color: gray;
		}

		.pizzaCol .text .price {
			font-size: 16px;
			font-weight: 400;
		}

		.pizzaCol .text .price span {
			color: orange;
		}
	</style>
</head>

<body>