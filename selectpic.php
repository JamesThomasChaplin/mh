<?php
$files = glob('backgrounds-2301' . '/*.*');
$file = array_rand($files);
echo "http://mhtalk.org/".$files[$file];
?>
