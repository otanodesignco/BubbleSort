<?php
function bubbleSort( $args, $type )
{
    /* variables for looping */
    $i = 0;
    $k = 0;
    
    /* error types 0 = not array; 1 = not ASC or DES */
    $err[0] = "Error: Input is not an array."; // code 0
    $err[1] = "Error: Type is not ASC or DES."; // code 1
    
    /* temp variable to hold data */
    $temp;
    
    /* checks if the args variable is an array and if it is get its count if its not set it to 0 */
    $c = is_array( $args )? count( $args ) : 0; 
    
    /* checks if $c is set to 0 to trigger error; code 0 */
    if($c == 0)
    {
        
        return $err[0];
        
    }
    
    /* checks $type to see if it matches what we want it to, ASC is expected */
    if( strtolower( $type ) == "asc" )
    {
        /* initial counter that is used for the second loops < or > step */
        for( $i = 0; $i < $c; $i++ )
        {
            /* uses first loops count to perform operations on array */
            for( $k = $c - 1;$k > $i; $k-- )
            {
                /* compares values and performs array shifts */
                if( $args[$k - 1] > $args[$k] )
                {
                    
                    $temp = $args[$k - 1];
                    $args[$k - 1] = $args[$k];
                    $args[$k] = $temp;
                    
                }
                
            }
            
        }
    }
    /* checks $type to see if it matches what we want it to, DES is expected */
    else if ( strtolower( $type ) == "des" )
    {
        /* initial counter that is used for the second loops < or > step */
        for( $i = 0; $i < $c; $i++ )
        {
            /* uses first loops count to perform operations on array */
            for( $k = $c - 1;$k > $i; $k-- )
            {
                /* compares values and performs array shifts */
                if( $args[$k - 1] < $args[$k] )
                {
                    
                    $temp = $args[$k - 1];
                    $args[$k - 1] = $args[$k];
                    $args[$k] = $temp;
                    
                }
                
            }
            
        }
    }
    /* $type does not equal set standards trigger error: code 1 */
    else
    {
        return $err[1];
    }
    /* return shifted array */
    return $args;
}
?>