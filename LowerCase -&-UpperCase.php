<?php

// PHP String LowerCase & UpperCase Functions 

//  Strtolower() /   strtoupper() /  ucfirst() /  ucwords() /  lcfirst()


// PHP String Strtolower

$lower = "CODE Next It";
$str = strtolower($lower);
print_r($str);

echo "<br>";

// PHP String strtoupper

$upper = "Note: phpinfo() outputs a large amount of information about the current state of PHP. This includes information about PHP compilation options and extensions, the PHP version, server information and environment, the PHP environment, OS version information, paths, master and local values of configuration options, HTTP headers, and the PHP License.";

$strto = strtoupper($upper);
print_r($strto);

echo "<br>";

// PHP String ucfirst

$ucf = " Code Nextit ";
$ucfirst = ucfirst($ucf);
print_r($ucfirst);

echo "<br>";


// PHP String ucwords

$ucw = "Note: phpinfo() outputs a large amount of information about the current state of PHP.";
$ucworld = ucwords($ucw);
print_r($ucworld);

echo "<br>";


// PHP String lcfirst

$lcf = "His Includes Information About PHP Compilation Options And Extensions, The PHP Version, Server Information And Environment.";
$lcfirst = lcfirst($lcf);
print_r($lcfirst);