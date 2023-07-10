<?php 

 // PHP String Compare Functions



// strcmp((int-big) string1) , (int-sm)string2(case-sensitive))

//  strncmp( string1 , string2, length)

// Strcasecmp( string1 , string2(case-insensitive)

//  Strncasecmp( string1 , string2, length)

// strnatcmp( (int-sm)string1 , (int-big)string2)

// strnatcasecmp((int-sm)string1 , (int-big)string2)

// substr_compare( string1, string2, start, length, case ) {True - case-insensitive && false - case-sensitive} 

// similar_text( string1 , string2, percent )




// PHP strcmp((int-big) string1) , (int-sm)string2(case-sensitive))


$strcmp = strcmp("master values","master configuration");
// print_r($strcmp);

// echo "<br>";


// PHP strncmp( string1 , string2, length)

$strnc = strncmp("infor", "information",5);
// print_r($strnc);

// echo "<br>";



// PHP Strcasecmp( string1 , string2(case-insensitive)

$strcase = strcasecmp("master and values","master  configuration");
// print_r($strcase);

// echo "<br>";



// PHP strnatcmp( (int-sm)string1 , (int-big)string2)

$strnat = strnatcmp("5Hello PHP", "10hello php");
// print_r($strnat);

// echo "<br>";


// PHP substr_compare( string1, string2, start, length, case ) {True - case-insensitive && false - case-sensitive} 

$substr = substr_compare("historical","HISTORICal", 8, false);

// print_r($substr);

// echo "<br>";


// PHP similar_text( string1 , string2, percent )

$similar = similar_text("hello hasan", "hello yahoo");
print_r($similar);