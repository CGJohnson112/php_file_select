<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP File Directory Selector</title>
</head>
<body>
<h1>Directory Selector in PHP</h1>
<h3>How this works....?</h3>
<p>This is coded so that the index.php doesn't have to be hardcoded with the names of the files inside "Filez". You can also click the link to go into the contents inside, and add files to 'filez'. They will show inside the folder on the landing page screen on load.</p>
<br>
<h3>What do I use this for?</h3>
<p>This is good for especially the admin side of a site for reference of files</p>
<p>Also good for maintaining multiple image galleries</p>

<?php

//this grabs all the file names from "filez" directory and makes the array 
$dir    = 'filez/';
$files = scandir($dir);


//get rid of dot structure in array that Linux creates and turns array to separate strings
$files = array_slice(scandir('filez/'), 2);

//show names of files inside directory
foreach($files as $file) {
	echo "<br/><a href='filez/". $file . "'>" . ($file) . "</a>";
};

  
?>


	
</body>
</html>