<?php

// PHP String Search & Find Position Functions

// strpos(first search) /  strrpos(last search ) / stripos(case-sensitive) / strripos(case-insensitive)


// PHP String strpos()

$strp = "phpinfo() outputs a large amount of information amount about the current amount state of PHP.";

$strpos = strpos($strp ,"of");
print_r($strpos);

echo "<br>";


// PHP String strrpos()


$strrp = "Note: phpinfo() outputs a large amount of information about the current state of PHP. This includes information about PHP compilation options and extensions, the PHP version, server information and environment, the PHP environment, OS version information, paths, master and local values of configuration options, HTTP headers, and the PHP License.";

$strrpos = strrpos($strrp, "version");
print_r($strrpos);

echo "<br>";


// PHP String stripos()

$strip = "Note: phpinfo() outputs a large amount of information about the current state of PHP. This includes information about PHP compilation options and extensions, the PHP version, server information and environment, the PHP environment, OS version information, paths, master and local values of configuration options, HTTP headers, and the PHP License.";

$stripos = stripos($strip, "server");
print_r($stripos);

echo "<br>";


// PHP String strripos()


$strrip = "Note: phpinfo() outputs a large amount of information about the current state of PHP. This includes information about PHP compilation options and extensions, the PHP version, server information and environment, the PHP environment, OS version information, paths, master and local values of configuration options, HTTP headers, and the PHP License.";

$strrpos = strripos($strrip, "Values");
print_r($strrpos);

echo "<br>";

