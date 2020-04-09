<?php

class misc extends DBCG {

    function __construct( ) {
		DBCG::__construct();
    }//end __construct

function list_tables() { 
	$return='';
		foreach ($this->tables as $key => $val) {
			$return .= '<br />' . $val;
		}
return $this->tabulate($return);
}
function list_column() {
	$return='';
		foreach ($this->fields as $key => $val) {
			$return .= '<br />' . $val;
		}
return $this->tabulate($return);
}


    function __destruct() {
    }//end __destruct
}//end class