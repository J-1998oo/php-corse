<?php
/*
    date and time functions 

    date_defult_timezone_get();
    
    date_defult_timezone_set( timezone <requird> );

    date_create( date/time <optional> , timezone <oprional> );
    -- time : date/time string || current time if NULL
    -- timezone : timezone string || current timezone

    timezone_open( timezone );

    checkdate( M , D , Y ); => all <requird>
    --validate a gregorian date 

    date();
    
    date_format();
    --  -- [ year ]
    -- [Y] => four digits 
    -- [y] => tow digits 
    --  -- [ month ]
    -- [M] => text month => 3 letters 
    -- [m] => 01 - 12 
    -- [F] => full text
    -- [t] => number of days in this month
    --  -- [day]
    -- [D] => day text => 3 letters 
    -- [d] => day of the month 01 - 31
    -- [j] => day without leading zero 1 - 31
    -- [l] => full text 
    -- [z] => day of the year 1 - 365
    -- [S] => st, rd, nth suffix for day of the month
    --  --  [ time ]
    -- [A] => capital AM / PM
    -- [a] => small am / pm
    --  --  [ hour ]
    -- [H] => 00 - 23
    -- [h] => 01 - 12
    -- [G] => 1 - 12 
    -- [g] => 0 - 23
    --  --  [ minutes ]
    --  --  [ seconds ]
    --  --  [ micro ]
    -- [i] => 00 - 59
    -- [s] => 00 - 59
    -- [u] => microseconds

    date_interval_create_from_date_string();

    date_add();

    date_sub();

    date_modify();

    time();
    -- unix timestamp => seconda since 1 Jan 1970

    getdate();

    date_parse();

    date_diff();

    stetotime( date_time , base );
*/