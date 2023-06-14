<?php

// If , Elseif and Else .


    /*

        // syntax 1

        if ( condition ){

            run first condition => if true .

        } elseif ( condition ){

            run second condition => if true .

        } else {

            run last condition => if false . 

        }
            
        // syntax 2
            
        if ( condition ) run single condition ; else run single condition ;
    or
        if ( condition ) 
            run single condition ; 
        else 
            run single condition ;
    or
        if ( condition ) run single condition ; 
        else run single condition ;

        // syntax 3

        <?php if (condition) { ?>
            |
            |
            |
            |
            |
            |
            |
            |
            |
        <?php } ?>

        // syntax 4

        <?php if (condition) : ?>
            |
            |
            |
            |
            |
            |
            |
            |
        <?php endif; ?>

        // syntax 5

        <?php 
        
            if (condition) :
            |
            |
            |
            |
            |
            |
            |
            |
            elseif (condition) :
            |
            |
            |
            |
            |
            |
            |
            |
            else (condition) :
            |
            |
            |
            |
            |
            |
            |
            |
            endif ;
        ?>condition ? true : false

        // syntax 5
                    
        condition ? true : false ;
    or
        $var = ( condition ? true : false ) ;


    */

// Switch

    /*
        // syntax

        switch ( expression ){
            case 1 : code block 1 ; breack ;
            case 2 : code block 2 ; breack ;
            case 3 : code block 3 ; breack ;
            case 4 : code block 4 ; breack ;
            case 5 : code block 5 ; breack ;
            case 6 : code block 6 ; breack ;
            case n : code block n ; breack ;
            defult : code block end ;
        }
     */

// While 

    /*
        // syntax 1

        while ( condition => true ){
            code block 1;
            code block 2;
            code block 3;
            code block 4;
            code block 5;
            code block 6;
            code block n;

            counter;
        }
        
        // syntax 2

        while ( condition => true ) :
            code block 1;
            code block 2;
            code block 3;
            code block 4;
            code block 5;
            code block 6;
            code block n;

            counter;
        endwhile ; 
    */

// Do While

    /*

        // syntax

        do{
            code block 1;
            code block 2;
            code block 3;
            code block 4;
            code block 5;
            code block 6;
            code block n;

            counter;
        } while ( condition ) ;


     */     

// For

    /*

        // syntax 1

        for ( $var = n ; $var condition ; $var counter ){
            code block 1;
            code block 2;
            code block 3;
            code block 4;
            code block 5;
            code block 6;
            code block n;

        }
    
        // syntax 2

        for ( $var = n ; $var condition ; $var counter ):
            code block 1;
            code block 2;
            code block 3;
            code block 4;
            code block 5;
            code block 6;
            code block n;

        endfor ;

    */

// Foreach
    
    /*
        
        $array = [ key1 => value 1 , key2 => value 2 , key3 => value 3 , key4 => value 4 , key5 => value 5 ]
        
        // syntax 1

        foreach ( $array as $value ) {
            code block 1;
            code block 2;
            code block 3;
            code block 4;
            code block 5;
            code block 6;
            code block n;
        }

        // syntax 2

        foreach ( $array as $key => $value ) {
            code block 1;
            code block 2;
            code block 3;
            code block 4;
            code block 5;
            code block 6;
            code block n;
        }

        // syntax 3

        foreach ( $array as $value ) :
            code block 1;
            code block 2;
            code block 3;
            code block 4;
            code block 5;
            code block 6;
            code block n;
            
        endforeach ;

        // syntax 4

        foreach ( $array as $key => $value ) :
            code block 1;
            code block 2;
            code block 3;
            code block 4;
            code block 5;
            code block 6;
            code block n;
            
        endforeach ;

    */

// Function

    /*
        
        // syntax

        function function_name( what it's take # if it's take something ){
            code block 1;
            code block 2;
            code block 3;
            code block 4;
            code block 5;
            code block 6;
            code block n;

            return ( what it's return ); // if it's return something
        }


        //function call 

        function_name( what it's take );
        
        or

        code block function_name( what it's take ); 

    */

// Anonymous function
    
    /*
            
        // syntax 1
        
        function ( what it's take ){ what it's do };
        
        // syntax 2
        
        code block function ( what it's take ){ what it's do };
        
        // syntax 3
        
        function function_name ( function ( what it's take ){ what it's do } );
        
        or
        
        function function_name ( function ( what it's take ){ what it's do } , what it's take );
        
    */

// Arrow function
        
    /*

        // syntax 1

        fn( what it's take ) =>  what it's do ;

    */