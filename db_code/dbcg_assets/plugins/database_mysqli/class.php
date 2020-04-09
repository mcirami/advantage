<?php

class database_mysqli extends DBCG {

    function __construct( ) {
		DBCG::__construct();
    }//end __construct

	function connect_short() {
	$this->show_compact_button = 1;
		$return  = '$mysqli = new mysqli(\'' . $this->myServer . '\', \'' . $this->myUser . '\', \'' . $this->myPass . '\', \'' . $this->myDB . '\');<br />';
		$return .= 'if ($mysqli->connect_errno) {<br />';
		$return .= '[tab] echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;<br />';
		$return .= '}';
		return $this->tabulate($return);
	}

	function connect_long() {
		$this->show_compact_button = 1;
		$return = '$myServer = "' . $this->myServer . '";<br />';
		$return .= '$myUser   = "' . $this->myUser . '";<br />';
		$return .= '$myPass   = "' . $this->myPass . '";<br />';
		$return .= '$myDB	 = "' . $this->myDB . '";<br /><br />';
		$return .= '$mysqli = new mysqli($myServer, $myUser, $myPass, $myDB);<br />';
		$return .= 'if ($mysqli->connect_errno) {<br />';
		$return .= '[tab] echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;<br />';
		$return .= '}';

		return $this->tabulate($return);
	}

	function delete( $results = "1" ) {
	$this->show_pgr_form = 1;
	$this->show_trigger_form = 1;
	$this->show_if_statements_form = '1';
		$return='';
		if ($this->if_statements==1) $return .= 'if ('.$this->if_condition.'('.$this->pgr($this->first_fields).')) {<br />[tab]';
		$return .= '$query  = "DELETE FROM ' . $this->myTable . ' WHERE `' . $this->first_fields . '`= ".sql_val('.$this->pgr($this->first_fields).');';
		if ($this->if_statements==1) $return .= '<br />[tab]'; else $return .= '<br />';
		$return .= ''.$this->db_result();
		$this->funct_sql_val = '1';
		if ($this->if_statements==1) $return .= '<br />} //end '.$this->if_condition.' '.$this->pgr($this->first_fields);
		return $this->tabulate($return);
	}

	function select_count() {
		$return  = '$query = \'SELECT COUNT(1) FROM `' . $this->myTable . '`\';<br />';
		$return .= $this->db_result();
		$return .= '<br />$row = mysqli_fetch_row($result);<br />';
		$return .= 'echo $row[0];';
		return $this->tabulate($return);
	}

	function insert_short() {
	$this->show_compact_button = 1;
	$this->show_pgr_form = 1;
	$this->show_trigger_form = 1;
	$this->show_funct_sql_val = '1';
	$this->show_if_statements_form = '1';
		$return='';
		if ($this->if_statements==1) $return .= 'if ('.$this->if_condition.'('.$this->pgr($this->first_fields).')) {<br />';
	        $return .= '$query = \'INSERT INTO ' . $this->myTable . ' ( ';
	        foreach ($this->fields as $key => $val) {
	            $return .= '`' . $val . '`';
	            if ($val != $this->last_fields)
	                $return .= ',&nbsp;';
	            else
	                $return .= '&nbsp;';
	        }
	        $return .= ') VALUES ( ';
	        foreach ($this->fields as $key => $val) {
	            $return .= '\'.sql_val('.$this->pgr($val).').\'';
	            if ($val != $this->last_fields)
	                $return .= ',&nbsp;';
	            else
	                $return .= '&nbsp;';
	        }
	        $return .= ' )\';';
	        $return .= "<br />" . $this->db_result();
		if ($this->if_statements==1) $return .= '<br />} //end '.$this->if_condition.' '.$this->pgr($this->first_fields);
	    return $this->tabulate($return);
	}

	function insert_long() {
	$this->show_compact_button = 1;
	$this->show_pgr_form = 1;
	$this->show_trigger_form = 1;
	$this->show_funct_sql_val = '1';
	$this->show_if_statements_form = '1';
		$return='';
		if ($this->if_statements==1) $return .= 'if ('.$this->if_condition.'('.$this->pgr($this->first_fields).')) {<br />';
	        $return .= '$query = \'INSERT INTO ' . $this->myTable . ' ( <br />';
	        foreach ($this->fields as $key => $val) {
	            $return .= '&nbsp;&nbsp;&nbsp;`' . $val . '`';
	            if ($val != $this->last_fields)
	                $return .= ',&nbsp;<br />';
	            else
	                $return .= '&nbsp;<br />';
	        }
	        $return .= ') VALUES ( <br />';
	        foreach ($this->fields as $key => $val) {
	            $return .= '&nbsp;&nbsp;&nbsp;\'.sql_val('.$this->pgr($val).').\'';
	            if ($val != $this->last_fields)
	                $return .= ',&nbsp;<br />';
	            else
	                $return .= '&nbsp;<br />';
	        }
	        $return .= ' )\'; ';
	        $return .= "<br />" . $this->db_result();
		if ($this->if_statements==1) $return .= '<br />} //end '.$this->if_condition.' '.$this->pgr($this->first_fields);
	    return $this->tabulate($return);
	}

	function update_short() {
	$this->show_compact_button = 1;
	$this->show_pgr_form = 1;
	$this->show_trigger_form = 1;
	$this->show_funct_sql_val = '1';
	$this->show_if_statements_form = '1';
		$return = '';

		if ($this->if_statements==1) $return .= 'if ('.$this->if_condition.'('.$this->pgr($this->first_fields).')) {<br />[tab]';

		$return .= '$query = \'UPDATE ' . $this->myTable . ' SET ';

		foreach ($this->fields as $key => $val) {
			$return .= '`' . $val . '` = \'.sql_val('.$this->pgr($val).').\'';
			if ($val != $this->last_fields)
				$return .= ',&nbsp;';
			else
				$return .= '&nbsp;';
		}
		$return .= 'WHERE `' . $this->first_fields . '` = \'.sql_val('.$this->pgr($this->first_fields).');<br />';
		if ($this->if_statements==1) $return .= '[tab]';
		$return .= ''.$this->db_result();
		if ($this->if_statements==1) $return .= '<br />} //end '.$this->if_condition.' '.$this->pgr($this->first_fields);

	return $this->tabulate($return);
	}


	function update_long() {
	$this->show_compact_button = 1;
	$this->show_pgr_form = 1;
	$this->show_trigger_form = 1;
	$this->show_funct_sql_val = '1';
	$this->show_if_statements_form = '1';
		$return = '';
		if ($this->if_statements==1) $return = 'if ('.$this->if_condition.'('.$this->pgr($this->first_fields).')) { <br />[tab]';
		$return .= '$query = \'UPDATE ' . $this->myTable . ' SET ';
		foreach ($this->fields as $key => $val) {
			$return .= '<br />[tab]';
			if ($this->if_statements==1) $return .= '[tab]';
			$return .= '`' . $val . '` = \'.sql_val('.$this->pgr($val).').\'';
			if ($val != $this->last_fields)
				$return .= ',&nbsp;';
			else
				$return .= '&nbsp;';
		}
		$return .= '<br />[tab]WHERE `' . $this->first_fields . '` = \'.sql_val('.$this->pgr($this->first_fields).');<br />';
		if ($this->if_statements==1) $return .= '[tab]';
		$return .= ''.$this->db_result();
		if ($this->if_statements==1) $return .= '<br />} //end '.$this->if_condition.' '.$this->pgr($this->first_fields);

	return $this->tabulate($return);
	}

	function select_one() {
	$this->show_pgr_form = 1;
	$this->show_trigger_form = 1;
	$this->show_funct_sql_val = '1';
	$this->show_if_statements_form = '1';
	$this->show_return_array_form = '1';
	$return='';
			if ($this->if_statements==1) $return .= 'if ('.$this->if_condition.'('.$this->pgr($this->first_fields).')) { <br />[tab]';
			if ($this->return_array=='array') $return .= '<br />$' . $this->myTable . '=array();<br />';
	        $return .= '$query = \'SELECT * FROM ' . $this->myTable . ' WHERE `' . $this->first_fields . '` = \'.sql_val('.$this->pgr($this->first_fields).');';
	        $return .= '<br />[tab]' . $this->db_result();
			$return .= '<br />[tab]$row = mysqli_fetch_array($result);';
			$return .= $this->iterate_fields();
			if ($this->if_statements==1) $return .= '<br />} //end '.$this->if_condition.' '.$this->pgr($this->first_fields);
		return $this->tabulate($return);
	}


	function select_multiple() {
		$query = '[tab]$query = \'SELECT * FROM ' . $this->myTable . ' WHERE `' . $this->first_fields . '` = \'.sql_val('.$this->pgr($this->first_fields).');';
		$return = $this->select($query);
		return $this->tabulate($return);
	}

	function select_all() {
		$query = '[tab]$query = \'SELECT * FROM ' . $this->myTable . '\';';
		$return = $this->select($query);
		return $this->tabulate($return);
	}

	function search_left() {
		$query = '[tab]$query = \'SELECT * FROM ' . $this->myTable . ' WHERE `' . $this->first_fields . '` LIKE \'.sql_val(\'%\'.' . $this->pgr($this->first_fields) . ');';
		$return = $this->select($query);
		return $this->tabulate($return);
	}

	function search_right() {
		$query = '[tab]$query = \'SELECT * FROM ' . $this->myTable . ' WHERE `' . $this->first_fields . '` LIKE \'.sql_val('.$this->pgr($this->first_fields).'.\'%\');';
		$return = $this->select($query);
		return $this->tabulate($return);
	}

	function search_both() {
		$query = '[tab]$query = \'SELECT * FROM ' . $this->myTable . ' WHERE `' . $this->first_fields . '` LIKE \'.sql_val(\'%\'.'.$this->pgr($this->first_fields).'.\'%\');';
		$return = $this->select($query);
		return $this->tabulate($return);
	}


	function select($query) {
	$this->show_pgr_form = 1;
	$this->show_trigger_form = 1;
	$this->show_funct_sql_val = '1';
	$this->show_if_statements_form = '1';
	$this->show_return_array_form = '1';
	$return='';
			if ($this->if_statements==1) $return .= 'if ('.$this->if_condition.'('.$this->pgr($this->first_fields).')) { <br />';
			if ($this->return_array=='array') $return .= '<br />[tab]$' . $this->myTable . '=array();<br />';
			$return .= $query;
	        $return .= '<br />[tab]' . $this->db_result();
			if ($this->return_array=='table') {
				$return .= $this->iterate_fields_table();
			} else {
				$return .= '<br />[tab]while ($row = mysqli_fetch_assoc($result)) { ';
				$return .= $this->iterate_fields();
				$return .= '<br />[tab]}//end while';
			}
			if ($this->if_statements==1) $return .= '<br />} //end '.$this->if_condition.' '.$this->pgr($this->first_fields);
		return $this->tabulate($return);
	}


    function __destruct() {
    }//end __destruct
}//end class