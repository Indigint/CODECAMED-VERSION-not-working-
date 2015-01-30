<?php
	include_once 'includes/DBConnect.php';
	

	$pageName = basename($_SERVER['SCRIPT_NAME']);
	 
	if (isset($_COOKIE['email'])){
    	$loggedin = True;
  	}
	 
	if ($loggedin == True) {
	    //do nothing
	} else {
	    $logged = 'out';
	    if($pageName == 'index.php' or $pageName == 'register.php' or $pageName == 'debug.php' or $pageName == 'about.php' or $pageName == 'contact.php' or $pageName == 'why.php'){
	    	//do nothing
	    } else{
	    	header('Location: index.php');
	    }
	}
?>

<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
	<head>
		<title>Indigint</title>
		<link rel="shortcut icon" href="../indigint.ico" type="image/x-icon">
		<link rel="icon" href="../indigint.ico" type="image/x-icon">
		<meta charset="utf-8">
		<meta property="og:title" content="Indigint" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://indigint.com" />
		<meta property="og:image" content="images/main_logo.png" />
		<meta name="viewport" content="width=device=width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
		<meta name="keywords"  content="Indigint, Budget, Shopping, Savings, Money" />
		<!-- social glyphicons -->
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/stylesheet.css">

		<!-- JS Validation Scripts -->
		<script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
        <?php include_once("analyticstracking.php"); ?>


	</head>
	
	<body class="main-bg">
	
	<div class="navbar navbar-default navbar-fixed-top">
	    <div class="container">
	        <div class="navbar-header">
	            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	            <a class="navbar-brand" href="index.php"><img src="../images/main_logo.png"></a>
	        </div>
	        <center>
	            <div class="navbar-collapse collapse" id="navbar-main">
	                <ul class="nav navbar-nav">
	                    <li><a href="why.php">why use us?</a>
	                    </li>
	                    <li><a href="about.php">about us</a>
	                    </li>
	                    <li><a href="contact.php">contact us</a>
	                    </li>
		                    <!-- <li class="dropdown">
		                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
		                        <ul class="dropdown-menu">
		                            <li><a href="#">Action</a>
		                            </li>
		                            <li><a href="#">Another action</a>
		                            </li>
		                            <li><a href="#">Something else here</a>
		                            </li>
		                            <li class="divider"></li>
		                            <li><a href="#">Separated link</a>
		                            </li>
		                            <li class="divider"></li>
		                            <li><a href="#">One more separated link</a>
		                            </li>
		                        </ul>
		                    </li> -->
	                </ul>
	                <?php if ($logged == 'out'){ // if they're logged out show login form
	                	echo '
	                		<form class="navbar-form navbar-right" role="search" action="index.php" method="post" name="login_form">
			                    
			                    <div class="form-group">
			                        <input type="text" class="form-control" name="email" placeholder="email">
			                    </div>
			                    <div class="form-group">
			                        <input type="password" class="form-control" name="password" id="password" placeholder="password">
			                    </div>
			                    <input type="submit" class="btn btn-info" value="Login" />
			                    <a href="register.php"><input type="button" class="btn btn-info" value="Sign Up" /></a>
			                </form>
			                
			                


	                	'; //<a href="register.php"><button class="navbar-right btn btn-info">Register</button></a>
	                }
	                else {
	           			//show the logout button
	           			echo '
	           			<a href="logout.php"><button class="navbar-right btn btn-info">Logout</button></a>
	           			';
	                }
	                 ?>
	                
	            </div>
	        </center>
	    </div>
	</div>

	<div class="container" style="margin-top:100px;"> <!-- main page container -->

