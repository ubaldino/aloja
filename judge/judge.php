#!/usr/bin/env php

<?php

define( 'APP_PATH' , __DIR__ . DIRECTORY_SEPARATOR ) ;

require_once  APP_PATH . 'env/Main.php' ;



while ( true ) {
    $sql_query = "SELECT * FROM answers where judged = 0";
    $record = DB::query( $sql_query );

    foreach ( $record as $answer ) {
        print_r( $answer['created_at'] );
        echo "\n";
    }

}


