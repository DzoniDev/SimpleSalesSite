<?php
include('includes/header.php');
include('includes/postalcheck.php');
include('includes/categories.php');
include('includes/sellform.php');
include('includes/footer.php');
?>

<html>
<head>
    <meta name="description" content="Mass Effect cool images.">
    <meta name="author" content="Dzoni">
    <link rel="shortcut icon" href="favicon.png">
	
	<title></title>
	<style>
	body{
		background: url('images/sky.jpg');
		background-position: top;
		background-repeat: no-repeat;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		margin: 0;
		padding: 0;
		font-family: Segoe UI;
		width: 100%;
		height: 100%;
		}
	#main{
		width:90%;
		height:90%;
		margin-left: auto;
		margin-right: auto;
		margin-top: 25px;
	}
		
	#header{
		position:relative;
		width: 100%;
		height: 175px;
		background-color: #1b7b20;
		border-radius: 50px 50px 100px 100px;
		opacity: 0.8;
		
	}
	#midrow{
		position:relative;
		width: 90%;
		height: 200px;
		margin-top:10px;
		background-color: #fff;
		border-radius: 5px;
		opacity: 0.9;
		margin-left: auto;
		margin-right: auto;
		z-index: -1;
		
	}
	#midrow_footer{
		position:relative;
		background-color: #000;
		bottom: -100%;
		width: 100%;
		height: 10px;
		position:relative;
		border-radius: 5px;
		
	}
	#products{
		background-color: #fff;
		height: 550px;
		border-radius: 5px;
		opacity: 0.8;
		margin-top:10px;
		width: 90%;
		margin-left: auto;
		margin-right: auto;
	}
	#footer{
		background-color: #422505;
		height: 10%;
		border-radius: 5px;
		margin-top: -5px;
		opacity: 0.9;
		margin-top:10px;
		width: 100%;
		margin-left: auto;
		margin-right: auto;
	}
	#buybutton{
		position: relative;
		background-color: rgb(4, 180, 49);
		float: right;
		width: 15%;
		height: 82px;
		top: 22.5%;
		margin-right: 5%;
		border-radius: 15px;
	}
	#sellbutton{
		position: relative;
		background-color: rgb(4, 180, 49);
		float: right;
		width: 15%;
		height: 82px;
		top: 22.5%;
		margin-right: 5%;
		border-radius: 15px;
	}
	#postalcode{
		position: relative;
		background-color: rgb(255, 255, 255);
		float: right;
		width: 15%;
		height: 82px;
		top: 22.5%;
		margin-right: 5%;
		border-radius: 15px;
		border-color: rgb(4, 180, 49);
		border-style: solid;
	}
	
	#postalcodeerror {
		position: relative;
		width: 150%;
		height: 82px;
		padding: 0px;
		background: none repeat scroll 0% 0% rgb(160, 0, 60);
		border-radius: 10px;
		margin-top: 100px;
		margin-left: -50%;
		display: block;
		z-index: 2;
	}
	
	#postalcodeerror:after 
	{
		content: "";
		position: absolute;
		top: -15px;
		left: 50%;
		border-style: solid;
		border-width: 0 15px 15px;
		border-color: #A0003C transparent;
		display: block;
		width: 0;
		z-index: 1;
	}
	#postalcodeerror p{
		color: #fff;
		text-align: center;
		padding: 25;
	}
	
	</style>

</head>
<body>
	<div id="main">
	<div id="header">
		<div id="logo">
		</div>
		<div id="postalcode">
			<div id="postalcodeerror">
				<p>Enter postalcode please.</p>
			</div>
		</div>
		<div id="buybutton">
		</div>
		<div id="sellbutton">
		</div>
	</div>
	<div id="midrow">
		<div id="midrow_categories">
		</div>
		<div id="midrow_footer">
		</div>
	</div>
	<!-- something like <?php /*if($buy == true || $page == 'homepage'):*/ ?> -->
		<div id="products">
		</div>
	<?php /*endif;*/ ?>
	<!-- something like <?php /* if($sell == true): */?> -->
	<!--	<div id="sellform"> -->
	<!--	</div> -->
	<?php /*endif;*/ ?>
	
	
	<div id="footer">
	</div>
	</div>
</body>
</html>