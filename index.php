    <?php include 'php/header.php' ?>

	<section id='container'>

<?php
$url = $_GET['u'];
$currentPageId = 0;
	if ($url == 'contact'){
		include 'php/contact.php';
	}	else if ($url == 'portfolio'){
		include 'php/portfolio.php';
	}	else if ($url == 'about'){
		include 'php/overOns.php';
	} else{
    	include 'php/home.php';
	}
?>

	</section>
<!--moeten deze dingen niet in de container?-->
    <?php include 'php/footer.php' ?>
