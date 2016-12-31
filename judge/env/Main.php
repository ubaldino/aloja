<?php

define( 'PWD' , getcwd() ) ;

require_once "Database.php";
require_once "errors_table.php";


/*
# Change values  for  source code compilation

$compiler = "py";        // py , c , cpp
$source   = "easy.py";   // easy.py , easy.c , easy.cpp
$input    = "input2";
$output   = "output2";
$exe      = 'exe';

// set executable
if( $compiler == 'java' ) $exe = 'jar';
else if( $compiler == 'py' ) $exe = 'py';

echo PWD . "/compile/{$compiler} src/{$source}\n" ;
exec( PWD . "/compile/{$compiler} src/{$source}" , $std_output , $return_var );

if ( $return_var != 0 ) {
    echo "======= " . $ERRORS[ $return_var ] . " ========\n";
    exit( $return_var );
}
echo "======= Compile => " . $ERRORS[ $return_var ] . " ========\n";


echo PWD . "/run/{$compiler} run.{$exe} src/{$input} 1\n";
exec( PWD . "/run/{$compiler} run.{$exe} src/{$input} 1" , $std_output , $return_var );
if ( $return_var != 0 ) {
    echo "======= " . $ERRORS[ $return_var ] . " ========\n";
    exit( $return_var );
}
echo "======= Run => " . $ERRORS[ $return_var ] . " ========\n";

echo PWD . "/compare/{$compiler} src/{$output} stdout0\n";
exec( PWD . "/compare/{$compiler} src/{$output} stdout0" , $std_output , $return_var );

if ( $return_var != 4 ) {
    echo "======= Compare => " . $return_var . " ========\n";
    echo implode( "\n" , $std_output ) . PHP_EOL;
    exit( $return_var );
}

echo "======= Compare => ok ========\n";
echo implode( "\n" , $std_output ) ;
echo "\n";

*/

