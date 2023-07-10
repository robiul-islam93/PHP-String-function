<?php

// PHP String Str_split function

// str_split( string, lenght )

$str = "I Love PHP";

$str_split = str_split( $str, 2 );
print_r($str_split);




// php  Chunk_split Function

// chunk_split( string,lenght, end  )


$chunk = "I Love Laravel";

$chunk_split = chunk_split($chunk , 2,".");
print_r($chunk_split);
