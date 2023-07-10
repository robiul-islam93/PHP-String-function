<?php

// PHP String Replace Functions

// str_replace( find, replace, string(case-sensitive)) / str_ireplace( find, replace, string(case-insensitive)) / subtr_replace(string, replacement,start,length) / strtr( string, from, to (carecter remove) )



// PHP str_replace( find, replace, string(case-sensitive))

$str_r = "OS version information, paths, master and local values of configuration options";
$str_rp = str_replace("local","Live",$str_r);

// print_r($str_rp);

// echo "<br>";


// PHP str_ireplace( find, replace, string(case-insensitive))

$str_i = "OS version information, paths, master and local values of configuration options";
$str_irp = str_ireplace("Local","Live",$str_i);

print_r($str_irp);

echo "<br>";


// PHP subtr_replace(string, replacement,start,length)

$subtr = "PHP compilation options and extensions, the PHP version, server information and environment, the PHP environment";
$subtr_re = substr_replace($subtr, " the PHP environment, OS version information", 37, 50 );

print_r($subtr_re);

echo "<br>";



// PHP strtr( string, from, to (carecter remove) )

$strt = "PHPlove compilation options and extensions";

$strtr = strtr($strt , "PHPlove", "LARAVEL");
print_r($strtr);

