<?php
/**
 *      array functions 
 * 
 *      arraychunk( array <required> , lenght <required> , preserve_key <optional> );
 *      slipt an array into chunks 
 *      preserve_key ====> false => defult - the index start with 0 -
 *                     ==> true  => - use the wettin key in array -
 *      
 *      array_change_key_case( array <required> , case <optional> );
 *      change the strucher of the keys
 *      case ============> case_lowre => defult - convert the keys to lowrecase -
 *                     ==> case_upper => - convert the keys to lowrecase -
 *      
 *      array_combine( array_of_keys < recuird > , array_of_value < recuird > );
 *      combine 2 arrays into one array  
 *      ** thay must have the same number of element
 *      
 *      array_count_values( array <required> );
 *      count how many values repeted in the array
 *      
 *      array_revurse( array <required> , preserve <optional> );
 *      preserve ======> false => defult
 *                   ==> true  => revirce with index
 *      
 *      array_flip( array <required> );
 *      switch between the key and value
 *      
 *      count( array <required> , mode <optional> ); 
 *      mode =====> 0 => defult
 *              ==> 1 => count the element in multiydimentional array
 *      
 *      in_array( search <required> , array <required> , type <optional> );
 *      cheacks if the value is in the array
 *      type =====> false => defult 
 *              ==> true  => search the value in spacefic type
 *      
 *      array_key_exists( key <required> , array <required> );
 *      cheacks if the key is in the array
 *      
 *      array_keys ( array <required> , key <optional> , type <optional> );
 *      return the array keys
 *      type =====> false => defult
 *              ==> true  => check type
 *      
 *      array_value( array <required> );
 *      return all the values in the array 
 *      
 *      array_pad( array <required> , size <required> , value <required> );
 *      padding the array to the bigger size   
 *      
 *      array_prodect( array <required> );
 *      multiple the integar values in the array 
 *      
 *      array_sum( array <required> );
 *      summation the intgar values in the array
 *      
 *      
 *      *   array functions 
 *      *
 *      *   current( array <required> ); => return the current element in the array 
 *      *   next( array <required> );    => advance the internal pointer
 *      *   prev( array <required> );    => rewind the internal pointer
 *      *   reset( array <required> );   => put the internal pointer in first element
 *      *   end( array <required> );     => put the internal pointer in last element
 *      *   
 *      *       *   notes
 *      *        
 *      *       ******************************************************************************
 *      *       *                                                                            *
 *      *       *   1- every array have a pointer                                            * 
 *      *       *                                                                            *
 *      *       *   2- the pointer initialized in the first element                          *
 *      *       *                                                                            *
 *      *       *   3- after use next / prev functions the pointer move and have save        *
 *      *       *                                                                            *
 *      *       ******************************************************************************
 *      *   
 *      *   array_merge( array <required> , other array/s <optional> );   
 *      *   if the keys of arrays are strings and there is two values with same key
 *      *       then it replace the old value with the new value
 *      *   if the keys of the arrays are number then it replace the keys with index
 *      *   
 *      *   array_replace( array <required> , replacemient/s <optional> );
 *      *   
 *      *   array_rand( array <required> , number <optional> );
 *      *   
 *      *   shuffle( array <required> );
 *      *   
 *      *********************************************************************************
 *      *   
 *      *   array_shift( array <required> ); => remove the first element
 *      *   
 *      *   array_pop( array <required> ); => remove the last element
 *      *   
 *      *   array_push( array <required> , value <optional> ); => add 1 or more element in the end  of array  
 *      *   *   you can use $array[] = element ; for fast result  
 *      *   
 *      *   array_unshift( array <required> , value <optional> ); => add 1 or more element in the start of array 
 *      *   
 *      *   array_slice( arrat <required> , start <required> , lenght <optional> , preserve_key <optional> );
 *      *   
 *      *   array_splice( arrat <required> , start <required> , lenght <optional> , array <optional> );
 *      *   
 *      *********************************************************************************
 *      *   
 *      *   sort( array <requird> , flag <optional> ); ascending => تصاعدي
 *      *   
 *      *   rsort( array <requird> , flag <optional> );  descending => تنازلي
 *      *   
 *      *   asort( array <requird> , flag <optional> ); ascending ==> with value
 *      *   
 *      *   arsort( array <requird> , flag <optional> ); descending ==> with value
 *      *   
 *      *   ksort( array <requird> , flag <optional> ); ascending ==> with key
 *      *   
 *      *   krsort( array <requird> , flag <optional> ); descending ==> with key
 *      *   
 *      *   natsort( array <requird> , flag <optional> ); narural order
 *      *   
 *      *********************************************************************************
 *      *   
 *      *   array_map( callback function <requird> , array <requird> , other array <optional> );
 *      *   
 *      *   array_filter( array <requird> , callback function <requird> , flag <optional> );
 *      *   flag ========> 0 => defult => filter with value 
 *      *              ==> ARRAY_FILTER_USE_KEY => filter with KEY 
 *      *              ==> ARRAY_FILTER_USE_BOTH => filter with value & KEY
 *      *   
 *      *   array_reduce( array <requird> , callback function <requird> , initial_value <optinal> );
 *      *   
 *      ****************************************************************************************************
 *      
 * 
 */
