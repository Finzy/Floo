<?php 

$projects = $project->getProjects();

foreach ($projects as $projectInfo) {
	echo '<div class="projectContainer">'.
	'<img class="headerImg" onclick="toggleDisplay(\'container' . $projectInfo["id"] . '\')" src="' . $projectInfo["headimg"] . '" id="pButton' . $projectInfo["id"] . '">'.
	'<div class="infoContainer" id="container' . $projectInfo["id"] . '"><h3>' . $projectInfo["title"] . '</h3>'.
	'<img src="' . $projectInfo['img'] . '">'.
	'<p>' . $projectInfo['beschrijving'] . '</p>'.
	'</div>'.
	'</div>';
}
 ?>