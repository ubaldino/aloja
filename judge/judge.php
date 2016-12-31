#!/usr/bin/env php

<?php

define( 'APP_PATH' , __DIR__ . DIRECTORY_SEPARATOR ) ;

require_once  APP_PATH . 'env/Main.php' ;


//while ( true ) { -----
    $sql_query = "SELECT
    answers.id , answers.source_code ,  langs.name as lang_name,  problems.number ,
    problems.slug_name , problems.input  , problems.output
    FROM answers
    INNER JOIN problems , langs
    WHERE problems.id = answers.problem_id
    AND langs.id = answers.lang_id
    AND answers.judged = 0";

    $record = DB::query( $sql_query );

    foreach ( $record as $key => $answer ) {
        // clean env
        exec( "rm " . APP_PATH . "src/*" );
        exec( "rm " . APP_PATH . "*.exe" );
        exec( "rm " . APP_PATH . "*.jar" );
        exec( "rm " . APP_PATH . "log" );
        exec( "rm " . APP_PATH . "{stderr0,stdin0,stdout0}" );


        $source_code_file = APP_PATH . "src/" . $answer['slug_name'] . "." . $answer['lang_name'] ;
        $input_file = APP_PATH . "src/input" ;
        $output_file = APP_PATH . "src/output" ;

        // Prepare files into src folder
        file_put_contents( $source_code_file , $answer['source_code'] ) ;
        file_put_contents( $input_file , $answer['input'] ) ;
        file_put_contents( $output_file , $answer['output'] ) ;

        // set tools for judge
        $compiler_file = $answer['lang_name'];        // py , c , cpp
        $exe_file      = 'exe';

        if( $compiler_file == 'java' ) $exe_file = 'jar';
        else if( $compiler_file == 'py' ) $exe_file = 'py';

        $compiler_file = APP_PATH . "env/compile/{$compiler_file}";
        $run_file = str_replace( 'compile' , 'run' , $compiler_file ) ;
        $compare_file = str_replace( 'run' , 'compare' , $run_file );



        // compile files from src
        echo "{$compiler_file} {$source_code_file}\n" ;
        exec( "{$compiler_file} {$source_code_file}" , $std_output , $return_var );

        if ( $return_var != 0 ) {
            echo "======= " . $ERRORS[ $return_var ] . " ========\n";
            exit( $return_var );
        }
        echo "======= Compile => " . $ERRORS[ $return_var ] . " ========\n\n";
        unset( $std_output );
        unset( $return_var );



        // run genereted binaries
        echo "{$run_file} " . APP_PATH . "run.{$exe_file} {$input_file} 1\n";
        exec( "{$run_file} " . APP_PATH . "run.{$exe_file} {$input_file} 1" , $std_output , $return_var );
        if ( $return_var != 0 ) {
            echo "======= " . $ERRORS[ $return_var ] . " ========\n";
            exit( $return_var );
        }
        echo "======= Run => " . $ERRORS[ $return_var ] . " ========\n\n";
        unset( $std_output );
        unset( $return_var );


        // compare result after run binaries
        echo "{$compare_file} {$output_file} stdout0\n";
        exec( "{$compare_file} {$output_file} stdout0" , $std_output , $return_var );

        $std_output = implode( "\n" , $std_output ) ;
        if ( $return_var != 4 ) {
            echo "======= Compare => " . $return_var . " ========\n\n";
            DB::query( "UPDATE answers SET stderr ='" . $std_output . "' WHERE ( id ='" . $answer['id'] . "')" );
            echo implode( "\n" , $std_output ) . PHP_EOL;
            exit( $return_var );
        }

        echo "======= Compare => ok {$key} ========\n\n";
        DB::query( "UPDATE answers SET judged ='1' WHERE ( id ='" . $answer['id'] . "')" );
        DB::query( "UPDATE answers SET stdout ='" . $std_output . "' WHERE ( id ='" . $answer['id'] . "')" );
        //echo file_get_contents( APP_PATH . 'log');
        echo $std_output;
        echo "\n";
        unset( $std_output );
        unset( $return_var );

        echo "\n**************************************************************************\n";



    }
        //echo "\n";
//}   --------
