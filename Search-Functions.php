<?php

// PHP String Search Functions 

// strstr(string, search, brfore_search) /  stristr(string, search, brfore_search) /  strchr(string, search, brfore_search) /  strrchr(string, search(Last theke start)) / strpbrk(string,charlist) / String Substr(string, start, lenght)


// PHP strstr(string, search, brfore_search)

$str = "Note: phpinfo() outputs a large amount of information about the current state of PHP. This includes information about PHP compilation options and extensions, the PHP version, server information and environment, the PHP environment, OS version information, paths, master and local values of configuration options, HTTP headers, and the PHP License.";

$strs = strstr($str, "This", true);
print_r($strs);

echo "<br>";



// PHP stristr(string, search, brfore_search)


$stri = "Note: phpinfo() outputs a large amount of information about the current state of PHP.";

$stri = stristr($stri,"of"); // (case-insensitive)
print_r($stri);

echo "<br>";


// PHP strchr(string, search, brfore_search)

$strc = "This includes information about PHP compilation options and extensions, the PHP version, server information and environment, the PHP environment";

$strch = strchr($strc, "about", true);
print_r($strch);

// echo "<br>";



// PHP strrchr(string, search(Last theke start))

$strrc = "OS version information, paths, master and local values of configuration options HTTP headers, and the PHP License.";

$strrch = strrchr($strrc , "of");
print_r($strrch);

echo "<br>";


// PHP strpbrk(string,charlist)

$strp = "Master and local values of configuration options, HTTP headers, and the PHP License." ;

$strpb = strpbrk($strp,"v" );

print_r($strpb);

echo "<br>";




// String Substr(string, start, lenght)

$sub = "PHP compilation options and extensions, the PHP version, server information and environment";

$subs = substr($sub, 4);

print_r($subs);