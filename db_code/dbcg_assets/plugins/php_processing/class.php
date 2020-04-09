<?php
/*
	helper functions
	$this->funct_print_x = '1';
	$this->funct_reverb = '1';
	$this->funct_clean = '1';
	$this->funct_sql_val = '1';

	options forms
	$this->show_pgr_form = 1;
	$this->show_trigger_form = 1;
	$this->show_custom_columns_form = 1;
	$this->pdo_fetch_form = 1;
	$this->secondary_form = 1;
	$this->dup_column_form = 1;
	$this->jquery_version_form = 1;
	$this->safe_mode_form = 1;
	$this->ajax_file_form = 1;
	$this->show_if_statements_form = '1';

$this->show_return_ternary = 1;
if ($this->return_ternary)

$this->show_return_function = 1;
if ($this->return_function) 

	$this->pgr($this->first_fields) = Variable wrapped in POST, GET, or REQUEST - or not wrapped at all (RAW)

*/
class php_processing extends DBCG {
    function __construct( ) {
		DBCG::__construct();
    }//end __construct
	
	
	
	function method_post() {
		
		$this->show_trigger_form = 1;
		$this->funct_clean = '1';
		$this->show_if_statements_form = '1';
		$return='';
		if ($this->if_statements==1) $return .= 'if ('.$this->if_condition.'($_POST[\'' . $this->first_fields . '\'])) { ';
		$x	  = 0;
		foreach ($this->fields as $key => $val) {
			$return .= '<br />[tab]$' . $val . ' = '.$this->if_condition.'($_POST[\'' . $val . '\']) ? clean($_POST[\'' . $val . '\'], "' . $this->types[$x] . '") : "";';
			$x++;
		}
		if ($this->if_statements==1) $return .= '<br />} //end '.$this->if_condition.' '.$this->pgr($this->first_fields);
		return $this->tabulate($return);
	}
	
	
	function method_post2() {
		
		$this->show_trigger_form = 1;
		$this->funct_clean = '1';
		$this->show_if_statements_form = '1';
		$return='';
		if ($this->if_statements==1) $return .= 'if ('.$this->if_condition.'($_POST[\'' . $this->first_fields . '\'])) { ';
		$x	  = 0;
		foreach ($this->fields as $key => $val) {
			$return .= '<br />[tab]$' . $val . ' = '.$this->if_condition.'($_POST[\'' . $val . '\']) ? $_POST[\'' . $val . '\'], "' . $this->types[$x] . '" : "";';
			$x++;
		}
		if ($this->if_statements==1) $return .= '<br />} //end '.$this->if_condition.' '.$this->pgr($this->first_fields);
		return $this->tabulate($return);
	}
	function bootstrap_tiny_radio() {
		
		$this->show_trigger_form = 1;
		$this->funct_clean = 0;
		$this->show_if_statements_form = '1';
		$return='';
		if ($this->if_statements==1) $return .= 'if ('.$this->if_condition.'($_POST[\'' . $this->first_fields . '\'])) { ';
		$x	  = 0;
		print_x($this->fields);
		foreach ($this->fields as $key => $val) {
			$return .= '<br />[tab]$' . $val . ' = '.$this->if_condition.'($_POST[\'' . $val . '\']) ? clean($_POST[\'' . $val . '\'], "' . $this->types[$x] . '") : "";';
		
			$x++;
			
			
		}
		if ($this->if_statements==1) $return .= '<br />} //end '.$this->if_condition.' '.$this->pgr($this->first_fields);
		return $this->tabulate($return);
	}
	function bootstrap_tiny_checkbox() {
		
		$this->show_trigger_form = 1;
		$this->funct_clean = '1';
		$this->show_if_statements_form = '1';
		$return='';
		if ($this->if_statements==1) $return .= 'if ('.$this->if_condition.'($_POST[\'' . $this->first_fields . '\'])) { ';
		$x	  = 0;
		foreach ($this->fields as $key => $val) {
			$return .= '<br />[tab]$' . $val . ' = '.$this->if_condition.'($_POST[\'' . $val . '\']) ? $_POST[\'' . $val . '\'], "' . $this->types[$x] . '" : "";';
			$x++;
		}
		if ($this->if_statements==1) $return .= '<br />} //end '.$this->if_condition.' '.$this->pgr($this->first_fields);
		return $this->tabulate($return);
	}
	
	
	
	function method_get() {
	$this->show_trigger_form = 1;
	$this->funct_clean = '1';
	$this->show_if_statements_form = '1';
	$return='';
		if ($this->if_statements==1) $return .= 'if ('.$this->if_condition.'($_GET[\'' . $this->first_fields . '\'])) { ';
		$x	  = 0;
		foreach ($this->fields as $key => $val) {
			$return .= '<br />[tab]$' . $val . ' = '.$this->if_condition.'($_GET[\'' . $val . '\']) ? clean($_GET[\'' . $val . '\'], "' . $this->types[$x] . '") : "";';
			$x++;
		}
		if ($this->if_statements==1) $return .= '<br />} //end '.$this->if_condition.' '.$this->pgr($this->first_fields);
		return $this->tabulate($return);
	}
	function method_request() {
	$this->show_trigger_form = 1;
	$this->funct_clean = '1';
	$this->show_if_statements_form = '1';
	$return='';
		if ($this->if_statements==1) $return .= 'if ('.$this->if_condition.'($_REQUEST[\'' . $this->first_fields . '\'])) { ';
		$x	  = 0;
		foreach ($this->fields as $key => $val) {
	//		$return .= '<br />[tab]if ('.$this->if_condition.'($_REQUEST[\'' . $val . '\'])) $' . $val . ' = clean($_REQUEST[\'' . $val . '\'], "' . $this->types[$x] . '"); else $' . $val . ' = "";';
			$return .= '<br />[tab]$' . $val . ' = '.$this->if_condition.'($_REQUEST[\'' . $val . '\']) ? clean($_REQUEST[\'' . $val . '\'], "' . $this->types[$x] . '") : "";';
			$x++;
		}
		if ($this->if_statements==1) $return .= '<br />} //end '.$this->if_condition.' '.$this->pgr($this->first_fields);
		return $this->tabulate($return);
	}

	function array_key_val() {
		$this->show_return_function = 1;

		$return = '$' . $_SESSION['myTable'] . ' = array(';
		foreach ($this->fields as $key => $val) {
			if ($this->return_function) $return .= '<br />[tab]\'' . $val . '\' => '.$this->return_function.'($' . $val . '), ';
			else $return .= '<br />[tab]\'' . $val . '\' => $' . $val . ', ';
		}
		$return = rtrim($return, ', ') . '<br />);';
		return $this->tabulate($return);
	}

	function array_key() {
		$return = '$' . $_SESSION['myTable'] . ' = array(';
		foreach ($this->fields as $key => $val) {
			$return .= "<br />[tab]'" . $val . '\', ';
		}
		$return = rtrim($return, ', ') . '<br />);';
		return $this->tabulate($return);
	}

	function array_val() {
		$this->show_return_function = 1;

		$return = '$' . $_SESSION['myTable'] . ' = array(';
		foreach ($this->fields as $key => $val) {
			if ($this->return_function) $return .= '<br />[tab]'.$this->return_function.'($' . $val . '), ';
			else $return .= '<br />[tab]$' . $val . ', ';
		}
		$return = rtrim($return, ', ') . '<br />);';
		return $this->tabulate($return);
	}

	function array_serialize() {
		$this->show_return_function = 1;
		$return = '$' . $_SESSION['myTable'] . ' = serialize(array(';
		foreach ($this->fields as $key => $val) {
			if ($this->return_function) $return .= '<br />[tab]\'' . $val . '\' => '.$this->return_function.'($' . $val . '), ';
			else $return .= '<br />[tab]\'' . $val . '\' => $' . $val . ', ';
		}
		$return = rtrim($return, ', ') . '<br />));';
		return $this->tabulate($return);
	}

	function array_unserialize() {
		$this->show_return_function = 1;
		$this->show_return_ternary = 1;

		$return = '$' . $_SESSION['myTable'] . ' = unserialize($result[\''.$this->first_fields.'\']);';
		foreach ($this->fields as $key => $val) {
			if ($this->return_ternary == 'ternary') {
				$return .= '<br />[tab]$' . $val . ' = ('.$this->if_condition.'($' . $_SESSION['myTable'] . '[\'' . $val . '\'])) ? '.$this->return_function.'($' . $_SESSION['myTable'] . '[\'' . $val . '\']) : "";';
			} else if ($this->return_ternary == 'long') {
				$return .= '<br />[tab]if ('.$this->if_condition.'($' . $_SESSION['myTable'] . '[\'' . $val . '\'])) ';
				$return .= ' $' . $val . ' = '.$this->return_function.'($' . $_SESSION['myTable'] . '[\'' . $val . '\']); else $' . $val . ' = "";';
			} else {
				$return .= '<br />[tab]$' . $val . ' = '.$this->return_function.'($' . $_SESSION['myTable'] . '[\'' . $val . '\']);';
			}
		}
		return $this->tabulate($return);
	}


	function if_isset_echo() {
		$this->show_return_function = 1;
		$this->show_if_statements_form = '1';
		$return = '';
		foreach ($this->fields as $key => $val) {
			if ($this->if_statements==1) {
				if ($this->return_function) $return .= 'if ('.$this->if_condition.'($' . $val . ')) echo '.$this->return_function.'($'.$val.')."&lt;br />";<br />';
				else                        $return .= 'if ('.$this->if_condition.'($' . $val . ')) echo $'.$val.'."&lt;br />";<br />';
			}else {
				if ($this->return_function) $return .= 'echo '.$this->return_function.'($'.$val.')."&lt;br />";<br />';
				else                        $return .= 'echo $'.$val.'."&lt;br />";<br />';
			}
		}

		return $this->tabulate($return);
	}





    function __destruct() {
    }//end __destruct
}//end class