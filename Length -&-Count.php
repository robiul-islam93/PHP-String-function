<?php

// PHP String Length & Count Functions

// strlen() / str_word_count() / substr_count


// PHP String strlen()

$strl = "Note: phpinfo() outputs a large amount of information about the current state of PHP. This includes information about PHP compilation options and extensions, the PHP version, server information and environment, the PHP environment, OS version information, paths, master and local values of configuration options, HTTP headers, and the PHP License.";

$strlen = strlen($strl);
// print_r($strlen);

// echo "<br>";

// PHP String str_word_count()

$strw = " This includes information about PHP compilation options and extensions, the PHP version, server information and environment, the PHP environment, OS version information, paths, master and local values of configuration options, HTTP headers, and the PHP License.";

$strwc = str_word_count($strw);
// print_r($strwc);

// echo "<br>";

// PHP String substr_count()


$sub = "Note: phpinfo() outputs a large amount of information amount about the current amount state of PHP.";

$subtr = substr_count($sub, "amount");
print_r($subtr);