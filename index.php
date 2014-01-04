<html>
<head>
    <meta name="description" content="Mass Effect cool images.">
    <meta name="author" content="Dzoni">
    <link rel="shortcut icon" href="favicon.png">
	
	<title></title>
	<style>
	body{
		background-color:#f18e00;
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
	header{
		position: relative;
		top 0px;
		width: 90%;
		height: 15%;
		background-color: #fff;
	}
	body img{
		position:absolute;
		top:0;
		display:none;
		width:100%;
		height:100%;
	}
	</style>

</head>
<body>	
	<div class="header">
		<div class="logo">
		</div>
		<div class="postalcode">
		</div>
		<div class="buybutton">
		</div>
		<div class="sellbutton">
		</div>
	<div>
	<div class="midrow">
		<div class="midrow_categories">
		</div>
	</div>
	<?php if($buy == true || $page == 'homepage'):?>
		<div class="products">
		</div>
	<?php endif: ?>
	<?php if($sell == true): ?>
		<div class="sellform">
		</div>
	<?php endif: ?>
	
	
	<div class="footer">
</body>
</html>