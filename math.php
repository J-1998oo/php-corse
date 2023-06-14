<?php
/**
 *      math functions
 *      
 *      abs( number <requird> ); absolute value القيمة المطلقة
 *      
 *      mt_rand ( min <optional> , max <optional> ); random number || rand ( min <optional> , max <optional> ); random number 
 *      ** if there is no min/max number it's still working
 * 
 *           mt_getrandmax(); return the max number in the range
 *      
 *      intdiv( dividend <requird> , divisor <requird> ); ناتج القسمة عدد صحيح
 *      
 *      fmod( dividend <requird> , divisor <requird> ); باقي القسمة عدد عشري
 *      
 *      ceil( number <requird> ); round up to integar التقريب للعدد الاكبر 
 *      
 *      floor( number <requird> ); round down to integar التقريب للعدد الاصغر
 *      
 *      round( number <requird> , precision <optional> , mode <optional> ); round up to integar
 *          precision
 * 
 *          0 => defult
 *          1 => round to 0.0
 *          2 => round to 0.00
 *          Etc.
 *          
 *          mode 
 *          
 *          PHP_ROUND_HALF_UP      - 50 => 99 => ceil / 01 => 49 => floor
 *          PHP_ROUND_HALF_DOWN    - 51 => 99 => ceil / 01 => 50 => floor
 *          PHP_ROUND_HALF_EVEN    - التقريب لاقرب عدد زوجي 
 *          PHP_ROUND_HALF_ODD     - التقريب لاقرب عدد فردي
 *      
 *      *** ceil , floor , round return double  
 *      
 *      sqrt( number <requird> ); الجذر التربيعي 
 *      
 *      min( array <requird> ); || min( values <requird> );
 *      
 *      max( array <requird> ); || max( values <requird> );
 *      
 */