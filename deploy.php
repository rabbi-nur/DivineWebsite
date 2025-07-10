<?php
// Change to your repo directory
chdir('/home/divinetextile/public_html/DG4');

// Pull from Git
$output = shell_exec('git pull 2>&1');

echo "<pre>$output</pre>";
?>
