<?php

class functions extends DBCG {

    function __construct( ) {
		DBCG::__construct();
    }//end __construct


function funct_sql_val() {
	$return = '
if (!function_exists(\'sql_val\')) {
function sql_val( $input ) {
[tab]if ( get_magic_quotes_gpc() ) {
[tab][tab]$input = stripslashes( $input );
[tab]} //get_magic_quotes_gpc()
[tab]return ( "\'" . mysqli_real_escape_string($link,  $input ) . "\'" );
}
} //end function not exist
';
	return $this->tabulate($return);
}

function funct_sql_key() {
	$return = '
if (!function_exists(\'sql_val\')) {
function sql_key( $input ) {
[tab]if ( get_magic_quotes_gpc() ) {
[tab][tab]$input = stripslashes( $input );
[tab]} //get_magic_quotes_gpc()
[tab]return ( "`" . mysqli_real_escape_string($link,  $input ) . "`" );
}
} //end function not exist
';
	return $this->tabulate($return);
}

function funct_clean() {
	$return = '
if ( !function_exists( \'clean\' ) ) {
function clean( $input, $type="", $no_tags="" ) {
[tab]if ($no_tags != "") {
[tab][tab]$input = trim(strip_tags($input));
[tab]}
[tab]if ($type != "") {
[tab][tab]if (strlen(strstr($type,"("))>0) {
[tab][tab][tab]$split = explode("(", $type);
[tab][tab][tab]$type = $split[\'0\'];
[tab][tab][tab]$limit = str_replace(")", "", $split[\'1\']);

[tab][tab][tab]if ( ($type == "int") && (!is_int($input)) ) {
[tab][tab][tab][tab]$input = (int)substr($input, 0, $limit);
[tab][tab][tab]} else {
[tab][tab][tab][tab]$input = substr($input, 0, $limit);
[tab][tab][tab]}
[tab][tab]}
[tab]}
[tab]if ( get_magic_quotes_gpc() ) {
[tab][tab]$input = stripslashes( $input );
[tab]}
[tab]if ( @mysqli_ping() != "" ) {
[tab][tab]$input = mysqli_real_escape_string($link,  $input );
[tab]} else {
[tab][tab]$search = array("\x00", "\n", "\\r", "\\\", "\'", "\"", "\x1a");
[tab][tab]$replace = array("\\\\x00", "\\\\n", "\\\\r", "\\\\\\\\" ,"\\\'", "\\\\\"", "\\\\x1a");
[tab][tab]$input = str_replace($search, $replace, $input);
[tab]}
[tab]return $input;
} //end function
} //end function not exist
';
	return $this->tabulate($return);
}
function funct_reverb() {
	$return = '
if (!function_exists(\'reverb\')) {
function reverb($value) {
[tab]return htmlspecialchars(stripslashes($value));
}
}//end functin not exists
';
	return $this->tabulate($return);
}
function funct_print_x() {
	$return = '
if (!function_exists(\'print_x\')) {
function print_x($value) {
[tab]echo \'&lt;pre>\';
[tab]print_r($value);
[tab]echo \'&lt;/pre>\';
}
}//end functin not exists
';
	return $this->tabulate($return);
}

    function __destruct() {
    }//end __destruct
}//end class