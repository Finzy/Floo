<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/project.css">
</head>
<body>
<?php 

require_once('includes/config.inc.php');

require_once('helpers/Model.php');
require_once('helpers/Database.php');

	require('models/Project.php');
	
	$project = new Project();
	include('views/projectInfo.php');

 ?>
 <script type="text/javascript">

function toggleDisplay(child){



	var container = document.getElementById(child);
	 console.log(container);

	if(getComputedStyle(container, null).display == "none") {
 		container.style.display = "block";
 	}
 	else {
 		container.style.display = "none";
 	}


}

 </script>
 </body>
</html>