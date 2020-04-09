<?php

$language = 'en'; //en //de //es //fr //it //nl //pt //tr

$html5_email          = array("email_address");
$html5_url            = array('domain');
$html5_tel            = array("phone","work_phone","cell_phone","home_phone");
$html5_number         = array();
$html5_range          = array();
$html5_date           = array();
$html5_month          = array();
$html5_week           = array();
$html5_time           = array();
$html5_datetime       = array();
$html5_datetime_local = array();
$html5_color          = array();
$html5_textarea       = array("notes");
$html5_pass           = array();
$html_file            = array("image");
$html_textarea        = array();
$html_pass            = array();
$html_readonly        = array("id");
$html_disabled        = array();
$pdo_fetchers = array( 'PDO::FETCH_BOTH', 'PDO::FETCH_NUM', 'PDO::FETCH_ASSOC', 'PDO::FETCH_OBJ', 'PDO::FETCH_LAZY', 'PDO::FETCH_BOUND' );

$jquery_jquery = '3.1.1';
$jquery_google = '3.1.1';
$jquery_micro = '3.1.1';
$jquery_local = '3.1.1';

$jquery_ui_jquery = '1.12.0';
$jquery_ui_google = '1.12.0';
$jquery_ui_micro = '1.12.0';
$jquery_ui_local = '1.12.0';

$cache = 1; // 0 for no cache, 1 for cache
$space = 1; // 0 for "Tab" spaces, 1 for traditional "Space"
$pretty = 1; // 0 for NO pretty print, 1 for Google Pretty Print

//dont forget to delete the 'dbcg_assets/cache/_menu.php' file if you have enabled caching.
$tooltip = '';// empty for no tool tips. 'tooltip' to enable tool tips

$log_in_sets = array( //to setup login sets follow this example
//"Set_Name" => array('Host', 'Database', 'UserName', 'Password') //dont uncomment this unless you want it to show up on the front end!!
"visit_rotator_fix" => array('127.0.0.1','visit_rotator_fix','homestead','secret'),
"visit_rotator_hash" => array('127.0.0.1','visit_rotator_hash','homestead','secret'),
"vbidr" => array('127.0.0.1','vbidr','homestead','secret'),
"conference_meet_ups" => array('127.0.0.1','conference_meet_ups','homestead','secret'),

"zDemo 3" => array('localhost','Data_Base','User_Name','P@s5W0rD'),
);



uksort($log_in_sets, "strnatcasecmp");

ini_set('date.timezone', 'America/Chicago');
date_default_timezone_set('America/Chicago');
putenv("TZ=US/Central");

ini_set('display_errors',0);
ini_set('error_reporting',0);
error_reporting(0);

$debug = 0;
$autocomplete = "off";

include 'dbcg_assets/lang/db_code_gen_'.$language.'.php';
if (file_exists('dbcg_demo.php')) {
    include 'dbcg_demo.php';
}