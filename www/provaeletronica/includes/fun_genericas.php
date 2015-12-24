<?php 

//
// echo iif( $loggedin, "Logged In", "Not Logged In" );
//    echo ($loggedin ? "Logged In" : "Not Logged In");
//


/*
function iif( $bool = true, $tstr = '', $fstr = '') {
    if ($bool) {
        return( $tstr );
    }else {
        return( $fstr );
    }
}
*/

function iif($expression, $returntrue, $returnfalse = '') {
    return ($expression ? $returntrue : $returnfalse);
} 

?>