<?php

    $var_name = "Mohammad";
    echo $var_name;
    echo '<br>';
    
    /********************************************************************************************************************************************************************************************
     *  
     *      The string is an array of characters 
     *      This array start with index 0 
     * 
     * 
     * 
     * 
     *      To know what is the length of the string 
     *          use => strlen( $var_name );
     */     echo strlen($var_name);
            echo '<br>'; 
     /**    Whin you want to search in strings you 
      *     must need the index 
      * 
      *     Ex: 
      *      
      *     If you want the first letter you can 
      *         use  => $var_name[0];
      * 
      *     If you want the therd letter you can 
      *         use  => $var_name[2];
      * 
      *     If you want the last letter you can 
      *         use  => $var_name[-1];
      * 
      *     If you want the before last letter you can 
      *         use  => $var_name[-2];
      *      
      *     You can update & add in strings 
      *     useing index  
      * 
      *     to update 
      */    $var_name[0] = "m";
            echo $var_name;
            echo '<br>'; 
    /**     
     *      to add
     */     $var_name[8]="J";
            echo $var_name;
            echo '<br>'; 

            $var_name[0] = "M"; # return 
    /**     
     *      # String function 
     *      
     *      lsfirst( string <required> ); // make the first letter lower case
     * 
     *      usfirst( string <required> ); // make the first letter upper case
     * 
     *      strtolower( string <required> ); // make the string letters lower case
     * 
     *      strtoupper( string <required> ); // make the string letters upper case
     * 
     *      uswords( string <required> , delimiters <optional> ); // make the all first letter upper case to every word
     *      
     *      str_repeat( string <required> , counter <required> ); // repeat the string like counter times
     * 
     *      implode( separator <optional> , array <required> ); // make the strings in the array one string " as one line "
     *      
     *      explode( separator <optional> , array <required> , limit <optional> ); // Reverseing the implode 
     *                                                                                   // make the line of words as an array by ' '  
     *                                                                                      and the limit to control how many items you want
     *      
     *      str_shuffle( string <required> ); // rewrite the string with random index order 
     *      
     *      strrev( string <required> ); // rewrite the string with reverse index order 
     * 
     *      
     *      trim( string <required> , charList <optional> );         ||
     *                                                                   ||
     *      ltrim( string <required> , charList <optional> );        |||||=> // remove the charector from edges or left edge or right edge 
     *                                                                   ||     |-----------------------------------|
     *      rtrim( string <required> , charList <optional> );        ||      | ( the defult charectors is )      |
     *                                                                          |  space          => " " or ' '     |
     *                                                                          |  tab            => "\t"           |
     *                                                                          |  new line       => "\n"           |
     *                                                                          |  cariage return => "\r"           |
     *                                                                          |  vertical tab   => "\x0B"         |
     *                                                                          |  NULL           => "\0"           |
     *                                                                          |-----------------------------------|
     *      
     *      chunk_split ( string <required> , length <optional> , end <optional> ); // make chunks in taked length and breakpoint " what you want " 
     *      
     *      strlen ( string <required> ); // count the length of string 
     *      
     *      str_split( string <required> , length <optional> ); // to split the string every length indexes alone 
     *      
     *      strip_tags( string <required> , allowed <optional> ); // to ignore the tags or ignore some tags
     *      
     *      nl2br( string <required> , XHTML <optional> ); // to replace "\n" in "break line ( if the XHTML => true => <br /> )
     *                                                                                          ( if the XHTML => false => <br> )
     *      
     *      strpos( string <required> , value <required> , start position <optional> );     |                // position of first charector 
     *                                                                                           | |case sensitive
     *      strrpos( string <required> , value <required> , start position <optional> );    |                // position of last charector
     *                                                                                           
     *      stripos( string <required> , value <required> , start position <optional> );    |                  // position of first charector
     *                                                                                           | |case insensitive
     *      strripos( string <required> , value <required> , start position <optional> );   |                  // position of last charector
     *      
     *      substr_count( string <required> , value <required> , start position <optional> , length <optional> ); // counter to how many the value repated
     *      
     *      parse_str( string <required> , array <required> );
     * 
     *      puotemeta( string <required> ); // to \ any symbol
     * 
     *      str_pad( string <required> , length <required> , string <optional> , pad flag <optional>);
     *                                                                              |
     *                                                                              | STR_PAD_BOTH
     *                                                                              | STR_PAD_LEFT
     *                                                                              | STR_PAD_RIGHT
     *                                                                              | 
     *      strtr( string <required> , from <required> , to <required> ) |
     *   or                                                                    || // translate some thing to some thing else  
     *      strtr( string <required> , array <required> )                  |
     *                                  |                  |
     *                                  |                  |
     *                                  |                  |
     *                                  |________-_________|
     *                                           |
     *                                           |
     *                                           |=======}>  $array =[ "from" => "to" , "from" => "to" , "from" => "to" , "from" => "to" ]
     *      
     *      str_replace( find <required>  , replace with <required> , data <required> , replace count <optional> ); | case sensitive
     * 
     *      str_ireplace( find <required>  , replace with <required> , data <required> , replace count <optional> ); | case insensitive
     *      
     *      substr_replace( find <required>  , replace with or insert <required> , start <required> , length < $ > );
     *                                                                                                               |
     *                                                          _____________________________________________________|      
     *                                                         |
     *                                                         |
     *                                                         |======}> positive num => replace this number of length
     *                                                         |
     *                                                         |
     *                                                         |======}> negative num => replace and take this number of length from end
     *                                                         |
     *                                                         |
     *                                                         |======}> 0 => insert in this number of length 
     *                                                         
     *      wordwarp( string <required> , width < optinal = 75 > break_char < optinal = "\n" > , cut_long < optinal =false > );
     *      
     *      ord( string <required> ); // char to ASCII
     *      
     *      chr ( int <required> ); // ASCII to char
     * 
     *      similar_text( string 1 <required> , string 2 <required> , percent <optional> ); // how much % ( string 1 == string 2 )
     * 
     *      strstr( string <required> , saerch <required> , before_saerch < optinal = false > ); | case sensitive
     *      
     *      stristr( string <required> , saerch <required> , before_saerch < optinal = false > ); | case insensitive
     *      
     *      number_format( number <required> , decimal <optional> , decimal_string <optional> , separator <optional> );
     *      
     *      
     ***************************************************************************************************************************************************************************************************/     