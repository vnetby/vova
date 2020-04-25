<?php
$dir = dirname(__FILE__);
$scan = scandir($dir);

$connected = ['blocks'];

foreach ($scan as $file_name) {
  if (!in_array($file_name, $connected)) continue;
  $path = $dir . '/' . $file_name;
  if (!is_dir($path) || $file_name === '.' || $file_name === '..') continue;
  $file = $path . '/install.php';
  if (!file_exists($file)) continue;
  require($file);
}
