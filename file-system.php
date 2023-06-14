<?php
/**
 *  
 *      file system finctions
 *  
 *      disk_total_space();
 *      -- get total space in bytes => then you can get with [ KB , MB , GB ]
 *      
 *      disk_free_space(); || diskfreespace();
 *      -- get total free space in bytes => then you can get with [ KB , MB , GB ]
 *      
 *      file_exists( path );
 *      -- checks if a file or directory exists
 *      
 *      file_size( file_name );
 *      -- get space in bytes
 *      
 *      is_dir( name );
 *      -- tells if filename is directory
 *      
 *      mkdir( path <requird> , mode <optional> = 0777 , recursive <optional> , context <optional> );
 *      -- permission is ignored of windows
 *      -- permisstion is octal number start with 0
 *      --  -- second number is => owner paermission
 *      --  -- third number is ==> user group permission 
 *      --  -- fourth number is => other permissions 
 *      
 *      rmdir( name <required> , context <optional> );
 *      
 *      chmod( file <requird> , mode <requird> );
 *      -- change mode 
 *      
 *      filepermis( name ); 
 *      -- gets file permissions
 *      
 *      clearstatcache
 *      -- clear cache
 *      
 *      chown();
 *      -- you can change ownar 
 *      
 *      chgrp();
 *      -- you can change group 
 *      
 *      basename( path <requird> , suffix <optional> );
 *      -- return trailing name component of path 
 *      
 *      dirname( path <requird> , levels <optional> =1 );
 *      -- return a parent directory's path  
 *      -- levels is number of parent directory to go up 
 *      
 *      realpath( path <requird> );
 *      -- return abslute path 
 *      
 *      pathinfo( path <requird> , flags <optional> ); => return array
 *      --  PATHINFO_DIRNAME
 *      --  PATHINFO_BASENAME
 *      --  PATHINFO_EXTINTION
 *      --  PATHINFO_FILENAME
 *      */
            echo dirname(__FILE__);
        /*
 *      
 *      fgets( file <requird> , length <optional> );
 *      -- get a line ftom an open file 
 *      -- length => number of bytes to read || end of line if no length
 * 
 *      fread( file <requird> , length <requird> );
 *      -- get a date from an open file
 *      -- length => maximum number of bytes to read
 *      
 *      fclose( fiile <requird> );
 *      -- close an open file pointer
 *            
 *      fopen( filename <requird> , mode <requird> , includepath <optional> , centext <optional> );
 *      
 *      -- mode
 *      --  -- [r] for read => pointer at the beginning
 *      --  -- [r+] for read & write => pointer at the beginning
 *      --  -- [w] for write => pointer at the beginning + truncateto 0 length + create if not exists
 *      --  -- [w+] for read & write => pointer at the beginning + truncateto 0 length + create if not exists
 *      
 *      --  -- [a] for write => pointer at the end + create if not exists
 *      --  -- [a+] for read & write => pointer at the end + create if not exists
 *      --  -- [x] create + open for write => pointer at the beginning
 *      --  -- [x+] create + open for read & write => pointer at the beginning 
 *      
 *      --  -- [c]
 *      --  --  -- for write
 *      --  --  -- create if not exist
 *      --  --  -- no problem if it's exist
 *      --  --  -- no truncation
 *      --  --  -- pointer at the beginning  
 *      --  -- [c+]
 *      --  --  -- for read & write 
 *      --  --  -- create if not exist
 *      --  --  -- no problem if it's exist
 *      --  --  -- no truncation
 *      --  --  -- pointer at the beginning   
 * 
 *      fwrite( file <requird> , string <requird> , length <optional> );
 *      -- write to an open file 
 *      -- length => maximum number of bytes to write 
 *      
 *      file ( file <requird> , flag <optional> , context <optional> ); 
 *      -- read entire file into array
 *      
 *      feof( file <requird> );
 *      -- text for EOF on a file pointer 
 *      
 *      rewind( file <requird> );
 *      -- return the pointer to the beginning
 *      
 *      ftel( file <requird> );      
 *      -- return curent position of the pointer 
 *      
 *      fseek( file <requird> , offset <requird> , whenec <optional> = SEEK_SET );
 *      -- go to a position
 *      -- offset with bytes     
 *      -- SEEK_SET => equal to offset
 *      -- SEEK_CUR => current + offset
 *      -- SEEK_END => EOF + offset [ accept negative ]
 *      
 *      glop( pattren <requird> [*.* to get every thing] , flag <optional> );
 *      -- find path name mathing a pattren and return array 
 *      
 *      rename( old_file/old_name <requird> , new_file/new_name <requird> );
 *      -- cut a file 
 *      
 *      copy( old_file/name <requird> , new_file/name <requird> , context <optional> );
 *      -- copy a file 
 *      
 *      unlink( file <requird> , context <optional> );
 *      -- delete a file
 *      
 *      same concept
 *      -- opendir();
 *      -- readdir();
 *      -- closedir();
 *      
 *      file_get_contents( file <requird> , include_path <optional> , comtext <optional> , start <optional> , max_length <optional> );
 *      -- read entire file into string
 *      
 *      file_put_contents( file <requird> , data <requird> , mode <optional> , context <optional> );
 *      -- write data to file 
 *      -- mode
 *      --  -- FILE_APPEND => if file exist append to it 
 *      -- create if not exist 
 *      -- open and close 
 *      -- return number of bytes
 *      
 *      search
 *      -- get set include path
 */