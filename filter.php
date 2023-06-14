<?php

/**
 *      filter functions
 *      
 *      filter();
 *      -- return a list of supported filters 
 *      
 *      */
            echo "<pre";
            print_r(filter_list());
            echo "</pre";
/*
 *      
 *      filter_id( filter_name <requird> );
 *      -- return the id of the filter 
 * 
 *      */
            echo filter_id("boolean") . "<br>"; // 258

/*
 *      */
            $var = true; // true || 1 || "yes" || "on"    // false || 0 || "no" || "off"

            if (filter_var($var, FILTER_VALIDATE_BOOL)) { // FILTER_VALIDATE_BOOL == 258
                echo "this is true";
            } else {
                echo "this is false";
            };

/*
 *      
 *      filter_var( value <requird> , filter <optional> , option <optional> );
 *      
 *      you can use more than one flag useing an array => ["flags"=> flag1 | flag2 | flag 3 ]
 *      
 *      filter   FILTER_VALIDATE_BOOL        ** if not true return false 
 *      flags    FILTER_NULL_ON_FAILURE      ** if not true and not false return NULL
 *      
 *      _______________________________________________________________________________________________________________
 *      
 *      filter   FILTER_VALIDATE_URL         ** return the count of char and the url ** if not url return false
 *      flags    FILTER_NULL_ON_FAILURE      ** return the count of char and the url ** if not url return NULL
 *      flags    FILTER_FLAG_PATH_REQUIRED   ** return the count of char and the url ** if there is not path return NULL
 *      flags    FILTER_FLAG_QUERY_REQUIRED  ** eturn the count of char and the url ** if there is not query return NULL
 *      
 *      _______________________________________________________________________________________________________________
 *      
 *      
 *      filter   FILTER_VALIDATE_ip          ** return the count of char and the ip ** if not ip return false
 *      flags    FILTER_NULL_ON_FAILURE      ** return the count of char and the ip ** if not ip return NULL
 *      flags    FILTER_FLAG_IPV4            ** return the count of char and the ipv4 only ** if not ipv4 return false
 *      flags    FILTER_FLAG_IPV6            ** return the count of char and the ipv6 only ** if not ipv6 return false
 *      
 *      _______________________________________________________________________________________________________________
 *      
 *      filter  FILTER_VALIDATE_MAC          ** return the count of char and the mac ** if not mac return false
 *      flags   FILTER_NULL_ON_FAILURE       ** return the count of char and the mac ** if not mac return NULL
 *      
 *      _______________________________________________________________________________________________________________
 * 
 *      if the number as string convert to int success
 * 
 *      filter  FILTER_VALIDATE_INT          ** return the count of char and the int ** if not int return false
 *      flags   FILTER_NULL_ON_FAILURE     ** return the count of char and the int ** if not int return NULL
 *      options min_range               
 *      options max_range
 *                
 *      _______________________________________________________________________________________________________________
 * 
 *      if the number as string convert to float success
 * 
 *      filter  FILTER_VALIDATE_FLOAT        ** return the count of char and the float ** if not float return false
 *      flags   FILTER_NULL_ON_FAILURE       ** return the count of char and the float ** if not float return NULL
 *      options min_range               
 *      options max_range
 *                
 *******************************************************************************************************************************      
 *      
 *      sanitize filter
 *      
 *      filter  FILTER_SANITIZE_EMAIL        ** remove all but letters , digits and !#$%&'*+-=^_`{|}~@.[]
 *                
 *      _______________________________________________________________________________________________________________
 * 
 *      filter  FILTER_SANITIZE_NUMBER_INT   ** remove all but digits and + , - 
 *                
 *      _______________________________________________________________________________________________________________
 * 
 *      filter  FILTER_SANITIZE_NUMBER_FLOAT ** remove all but digits , + , - and optionally .,eE
 *      flags   FILTER_FLAG_ALLOW_THOUSAND   ** show the , in big number case    
 *      flags   FILTER_FLAG_ALLOW_FRACTION   ** show the . in big number case    
 *                
 *      _______________________________________________________________________________________________________________
 *      
 *      filter  FILTER_SANITIZE_URL        ** remove all but letters , digits and $-_.+!*'()|\\^~[]`<>#%";?:@&=.
 *      
 *******************************************************************************************************************************      
 *      
 *      filter_input( type <requird> , value <requird> , filter <optional> , option <optional );
 *  
 *      INPUT_GET
 *      INPUT_POST
 *      INPUT_COOKIE
 *      INPUT_SERVER
 *      INPUT_ENV
 *      
 *      
 *      Example:-
 */
            echo filter_input(INPUT_GET, "num");
?>

            <form action="" method="GET">   
                <input type="text" name="num">
                <input type="submit" value="send">
            </form>