<?php

class database_pdo extends DBCG {

    function __construct( ) {
		DBCG::__construct();
    }//end __construct


function pdo_db_connect_short($alt = "") {
	$this->show_compact_button = 1;
	$return = 'try { <br />';
	$return .= '[tab]$dbh = new PDO("mysql:host=' . $this->myServer . ';dbname=' . $this->myDB . '", "' . $this->myUser . '", "' . $this->myPass . '");<br />';
	$return .= '[tab]$dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );<br />';
	$return .= '[tab]# $dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );<br />';
	$return .= '[tab]# $dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );<br />';
	$return .= '}<br />';
	$return .= 'catch(PDOException $e) {<br />';
	$return .= '[tab]echo $e->getMessage();<br />';
	$return .= '[tab]file_put_contents(\'PDOErrors.txt\', $e->getMessage(), FILE_APPEND);<br />';
	$return .= '}<br />';
	return $this->tabulate($return);
}
function pdo_db_connect_long($alt = "") {
	$this->show_compact_button = 1;
	$return = 'try {<br />';
	$return .= '[tab]$myServer = "' . $this->myServer . '";<br />';
	$return .= '[tab]$myUser   = "' . $this->myUser . '";<br />';
	$return .= '[tab]$myPass   = "' . $this->myPass . '";<br />';
	$return .= '[tab]$myDB	 = "' . $this->myDB . '";<br />';
	$return .= '[tab]$dbh = new PDO("mysql:host=$myServer;dbname=$myDB", $myUser, $myPass);<br />';
	$return .= '[tab]$dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );<br />';
	$return .= '[tab]# $dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );<br />';
	$return .= '[tab]# $dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );<br />';
	$return .= '}<br />';
	$return .= 'catch(PDOException $e) {<br />';
	$return .= '[tab]echo $e->getMessage();<br />';
	$return .= '[tab]# file_put_contents(\'PDOErrors.txt\', $e->getMessage(), FILE_APPEND);<br />';
	$return .= '}';
	return $this->tabulate($return);
}
	function pdo_insert_short() {
	$this->show_pgr_form = 1;
	$this->show_trigger_form = 1;
	$this->show_funct_sql_val = '1';
	$this->show_if_statements_form = '1';
	$this->show_return_array_form = '1';
	$this->show_compact_button = 1;
		$return='';
		$return = '$stmt = $dbh->prepare("insert into ' . $this->myTable . ' (';
		foreach ($this->fields as $key => $val) {
			$return .= '`' . $val . '`';
			if ($val != $this->last_fields)
				$return .= ', ';
			else
				$return .= ' ';
		}
		$return .= ') values (';
		foreach ($this->fields as $key => $val) {
			$return .= ':' . $val . '';
			if ($val != $this->last_fields)
				$return .= ',&nbsp;';
			else
				$return .= '&nbsp;';
		}
		$return .= ')");<br />';
		foreach ($this->fields as $key => $val) {
			$return .= '&nbsp;&nbsp;&nbsp;$stmt->bindParam(\':' . $val . '\', '.$this->pgr($val).', <span class="bx cz tip_n" original-title="Click to Change">PDO::PARAM_STR</span>, <span class="bx cz tip_n" original-title="Click to Change">64</span>);<br />';
		}
//		foreach ($this->fields as $key => $val) {
//			$return .= ' $' . $val . ' = \'' . $val . '\';';
//		}
//		$return .= '$pass = \'Bar\';';

		$return .= '$executed = $stmt->execute();<br />';

		$return .= 'if($executed){<br />';
		$return .= '&nbsp;&nbsp;&nbsp;$db_message = \'&lt;p class="db_success">Successfully saved &lt;b>' . $this->first_fields . ' : \'.reverb('.$this->pgr($this->first_fields).').\'&lt;/b> to the database!!&lt;/p>\';<br />';
		$return .= '}else{<br />';
		$return .= '&nbsp;&nbsp;&nbsp;$db_message = \'&lt;p class="db_error">There was a problem saving &lt;b>' . $this->first_fields . ' : \'.reverb('.$this->pgr($this->first_fields).').\'&lt;/b> to the database!!&lt;/p>\';<br />';
		$return .= '}<br />';
		return $this->tabulate($return);
	}
	function pdo_insert_long() {
	$this->show_pgr_form = 1;
	$this->show_trigger_form = 1;
	$this->show_funct_sql_val = '1';
	$this->show_if_statements_form = '1';
	$this->show_return_array_form = '1';
	$this->show_compact_button = 1;

		$return='';
		$return = '$stmt = $dbh->prepare("insert into ' . $this->myTable . ' (<br />';
		foreach ($this->fields as $key => $val) {
			$return .= '&nbsp;&nbsp;&nbsp;`' . $val . '`';
			if ($val != $this->last_fields)
				$return .= ',&nbsp;<br />';
			else
				$return .= '&nbsp;<br />';
		}
		$return .= ') values (<br />';
		foreach ($this->fields as $key => $val) {
			$return .= '&nbsp;&nbsp;&nbsp;:' . $val . '';
			if ($val != $this->last_fields)
				$return .= ',&nbsp;<br />';
			else
				$return .= '&nbsp;<br />';
		}
		$return .= ')");<br />';
		foreach ($this->fields as $key => $val) {
			$return .= '&nbsp;&nbsp;&nbsp;$stmt->bindParam(\':' . $val . '\', '.$this->pgr($val).', <span class="bx cz tip_n" original-title="Click to Change">PDO::PARAM_STR</span>, <span class="bx cz tip_n" original-title="Click to Change">64</span>);<br />';
		}

//		foreach ($this->fields as $key => $val) {
//			$return .= '&nbsp;&nbsp;&nbsp;$' . $val . ' = \'' . $val . '\';<br />';
//		}
//		$return .= '$pass = \'Bar\';<br />';

		$return .= '$executed = $stmt->execute();<br />';
		$return .= 'if($executed){<br />';
		$return .= '&nbsp;&nbsp;&nbsp;$db_message = \'&lt;p class="db_success">Successfully saved &lt;b>' . $this->first_fields . ' : \'.reverb('.$this->pgr($this->first_fields).').\'&lt;/b> to the database!!&lt;/p>\';<br />';
		$return .= '}else{<br />';
		$return .= '&nbsp;&nbsp;&nbsp;$db_message = \'&lt;p class="db_error">There was a problem saving &lt;b>' . $this->first_fields . ' : \'.reverb('.$this->pgr($this->first_fields).').\'&lt;/b> to the database!!&lt;/p>\';<br />';
		$return .= '}<br />';
		return $this->tabulate($return);
	}
	function pdo_update_short() {
		$this->show_compact_button = 1;
		$return='';
		$return = '$sql = \'UPDATE ' . $this->myTable . ' SET ';
		foreach ($this->fields as $key => $val) {
			$return .= '`' . $val . '` = :' . $val;
			if ($val != $this->last_fields)
				$return .= ',&nbsp;';
			else
				$return .= '&nbsp;';
		}

		$return .= 'WHERE `id`=:id\';<br />';

		$return .= '$stmt = $dbh->prepare($sql);';

		foreach ($this->fields as $key => $val) {
			$return .= '<br />[tab][tab]$stmt->bindParam(\':' . $val . '\', '.$this->pgr($val).', <span class="bx cz tip_n" original-title="Click to Change">PDO::PARAM_STR</span>, <span class="bx cz tip_n" original-title="Click to Change">64</span>);';
		}
	//	$return .= '$stmt->bindParam(\':id\', $id, <span class="bx cz tip_n" original-title="Click to Change">PDO::PARAM_INT</span>, <span class="bx cz tip_n" original-title="Click to Change">11</span>);';

			$return .= '<br />$executed = $stmt->execute();<br />';
			$return .= 'if($executed){<br />';
			$return .= '&nbsp;&nbsp;&nbsp;$db_message = \'&lt;p class="db_success">Successfully saved &lt;b>' . $this->first_fields . ' : \'.reverb('.$this->pgr($this->first_fields).').\'&lt;/b> to the database!!&lt;/p>\';<br />';
			$return .= '}else{<br />';
			$return .= '&nbsp;&nbsp;&nbsp;$db_message = \'&lt;p class="db_error">There was a problem saving &lt;b>' . $this->first_fields . ' : \'.reverb('.$this->pgr($this->first_fields).').\'&lt;/b> to the database!!&lt;/p>\';<br />';
			$return .= '}<br />';
		return $this->tabulate($return);
	}
	function pdo_update_long() {
		$this->show_compact_button = 1;
		$return='';
		$return = '$sql = \'UPDATE ' . $this->myTable . ' SET ';
		foreach ($this->fields as $key => $val) {
			$return .= '<br />[tab][tab]`' . $val . '` = :' . $val;
			if ($val != $this->last_fields)
				$return .= ',&nbsp;';
			else
				$return .= '&nbsp;';
		}

		$return .= '<br />WHERE `id`=:id\';<br />';

		$return .= '$stmt = $dbh->prepare($sql);';

		foreach ($this->fields as $key => $val) {
			$return .= '<br />[tab][tab]$stmt->bindParam(\':' . $val . '\', '.$this->pgr($val).', <span class="bx cz tip_n" original-title="Click to Change">PDO::PARAM_STR</span>, <span class="bx cz tip_n" original-title="Click to Change">64</span>);';
		}
	//	$return .= '$stmt->bindParam(\':id\', $id, <span class="bx cz tip_n" original-title="Click to Change">PDO::PARAM_INT</span>, <span class="bx cz tip_n" original-title="Click to Change">11</span>);';

			$return .= '<br />$executed = $stmt->execute();<br />';
			$return .= 'if($executed){<br />';
			$return .= '&nbsp;&nbsp;&nbsp;$db_message = \'&lt;p class="db_success">Successfully saved &lt;b>' . $this->first_fields . ' : \'.reverb('.$this->pgr($this->first_fields).').\'&lt;/b> to the database!!&lt;/p>\';<br />';
			$return .= '}else{<br />';
			$return .= '&nbsp;&nbsp;&nbsp;$db_message = \'&lt;p class="db_error">There was a problem saving &lt;b>' . $this->first_fields . ' : \'.reverb('.$this->pgr($this->first_fields).').\'&lt;/b> to the database!!&lt;/p>\';<br />';
			$return .= '}<br />';
		return $this->tabulate($return);
	}
	function pdo_select_one() {
	$this->show_pdo_fetch_form = '1';
	$this->show_pgr_form = 1;
	$this->show_trigger_form = 1;
	$this->show_funct_sql_val = '1';
	$this->show_if_statements_form = '1';
	$this->show_return_array_form = '1';
		$return='';
		$return = 'if ('.$this->if_condition.'('.$this->pgr($this->first_fields).')) {<br />';
		if ($this->return_array=='array') $return .= '[tab]$' . $this->myTable . '=array();<br />';
		$return .= '[tab]$stmt = $dbh->prepare(\'SELECT * FROM ' . $this->myTable . ' WHERE `' . $this->first_fields . '` = :' . $this->first_fields . '\');<br />'
			.'[tab]$stmt->bindParam(\'' . $this->first_fields . '\', '.$this->pgr($this->first_fields).', <span class="bx cz tip_n" original-title="Click to Change">PDO::PARAM_STR</span>, <span class="bx cz tip_n" original-title="Click to Change">64</span>);<br />'
			.'[tab]$stmt->execute();';
			$x = '<br />[tab]$row = $stmt->fetch(<span class="bx hi tip_n" original-title="Change in left sidebar [Options]">'.$this->pdo_fetch.'</span>);';

			if ($this->return_array=='table') {
				$return .= $this->iterate_fields_table($x);
				$return .= '[tab]$stmt = null;';
			} else {
			$return .= '<br />[tab]$row = $stmt->fetch(<span class="bx hi tip_n" original-title="Change in left sidebar [Options]">'.$this->pdo_fetch.'</span>);<br />'
			.'[tab]$stmt = null;';
				$return .= $this->iterate_fields();
			}
		$return .= '<br />}';
		return $this->tabulate($return);
	}
	function pdo_select_multiple() {
	$this->show_pdo_fetch_form = '1';
	$this->show_pgr_form = 1;
	$this->show_trigger_form = 1;
	$this->show_secondary_form = 1;
	$this->show_funct_sql_val = '1';
	$this->show_if_statements_form = '1';
	$this->show_return_array_form = '1';
		$return='';
		$return = 'if ('.$this->if_condition.'('.$this->pgr($this->first_fields).')) {<br />';
		if ($this->return_array=='array') $return .= '[tab]$' . $this->myTable . '=array();<br />';
		$return .= '[tab]$stmt = $dbh->prepare(\'SELECT * FROM ' . $this->myTable . ' WHERE `' . $this->first_fields . '` = :' . $this->first_fields . '\');<br />'
			.'[tab]$stmt->bindParam(\'' . $this->first_fields . '\', '.$this->pgr($this->first_fields).', <span class="bx cz tip_n" original-title="Click to Change">PDO::PARAM_STR</span>, <span class="bx cz tip_n" original-title="Click to Change">64</span>);<br />'
			.'[tab]$stmt->execute();';
			$x = '<br />[tab]while ($row = $stmt->fetch(<span class="bx hi tip_n" original-title="Change in left sidebar [Options]">'.$this->pdo_fetch.'</span>)) { ';
			if ($this->return_array=='table') {
				$return .= $this->iterate_fields_table($x);
				$return .= '[tab]$stmt = null;';
			} else {
			$return .= '<br />[tab]$row = $stmt->fetch(<span class="bx hi tip_n" original-title="Change in left sidebar [Options]">'.$this->pdo_fetch.'</span>);<br />'
			.'[tab]$stmt = null;';
				$return .= $this->iterate_fields();
			}
		$return .= '<br />[tab]}//end isset';
		return $this->tabulate($return);
	}
	function pdo_select_all() {
$this->show_pdo_fetch_form = '1';
	$this->show_pgr_form = 1;
	$this->show_trigger_form = 1;
	$this->show_funct_sql_val = '1';
	$this->show_if_statements_form = '1';
	$this->show_return_array_form = '1';
		$return='';
		$return = 'if ('.$this->if_condition.'('.$this->pgr($this->first_fields).')) {<br />';
		if ($this->return_array=='array') $return .= '[tab]$' . $this->myTable . '=array();<br />';
		$return .= '[tab]$stmt = $dbh->prepare(\'SELECT * FROM ' . $this->myTable . '\');<br />'
			.'[tab]$stmt->execute();';
			$x = '<br />[tab]while ($row = $stmt->fetch(<span class="bx hi tip_n" original-title="Change in left sidebar [Options]">'.$this->pdo_fetch.'</span>)) { ';
			if ($this->return_array=='table') {
				$return .= $this->iterate_fields_table($x);
				$return .= '[tab]$stmt = null;';
			} else {
			$return .= '<br />[tab]$row = $stmt->fetch(<span class="bx hi tip_n" original-title="Change in left sidebar [Options]">'.$this->pdo_fetch.'</span>);<br />'
			.'[tab]$stmt = null;';
				$return .= $this->iterate_fields();
			}
		$return .= '<br />[tab]}//end isset';
		return $this->tabulate($return);
	}

	function pdo_delete() {
		$return='';
			$return  = '<br />//$' . $this->first_fields . ' = $dbh->quote('.$this->pgr($this->first_fields).');';
			$return .= '<br />//$' . $this->first_fields . ' = '.$this->pgr($this->first_fields).';';
			$return .= '<br />$stmt = $dbh->prepare(\'DELETE FROM ' . $this->myTable . ' WHERE `' . $this->first_fields . '` = :' . $this->first_fields . '\');';
			$return .= '<br />$stmt->bindParam(\'' . $this->first_fields . '\', $' . $this->first_fields . ', <span class="bx cz tip_n" original-title="Click to Change">PDO::PARAM_STR</span>);';
			$return .= '<br />$executed = $stmt->execute();<br />';

			$return .= 'if($executed){<br />';
			$return .= '&nbsp;&nbsp;&nbsp;$db_message = \'&lt;p class="db_success">Successfully removed &lt;b>' . $this->first_fields . ' : \'.reverb('.$this->pgr($this->first_fields).').\'&lt;/b> from the database!!&lt;/p>\';<br />';
			$return .= '}else{<br />';
			$return .= '&nbsp;&nbsp;&nbsp;$db_message = \'&lt;p class="db_error">There was a problem removing &lt;b>' . $this->first_fields . ' : \'.reverb('.$this->pgr($this->first_fields).').\'&lt;/b> from the database!!&lt;/p>\';<br />';
			$return .= '}<br />';

		return $this->tabulate($return);
	}




/* This is all assbackwards! */
	function pdo_search_left() {
		$query  = '[tab]$stmt->bindParam(\'' . $this->first_fields . '\', $search_for , <span class="bx cz tip_n" original-title="Click to Change">PDO::PARAM_STR</span>, <span class="bx cz tip_n" original-title="Click to Change">64</span>);<br />';
		$return = $this->select($query, 'left');

		return $this->tabulate($return);
	}
	function pdo_search_right() {
		$query  = '[tab]$stmt->bindParam(\'' . $this->first_fields . '\', $search_for , <span class="bx cz tip_n" original-title="Click to Change">PDO::PARAM_STR</span>, <span class="bx cz tip_n" original-title="Click to Change">64</span>);<br />';
		$return = $this->select($query, 'right');

		return $this->tabulate($return);
	}
	function pdo_search_both() {
		$query  = '[tab]$stmt->bindParam(\'' . $this->first_fields . '\', $search_for , <span class="bx cz tip_n" original-title="Click to Change">PDO::PARAM_STR</span>, <span class="bx cz tip_n" original-title="Click to Change">64</span>);<br />';
		$return = $this->select($query, 'both');

		return $this->tabulate($return);
	}

/* This is all assbackwards! */
	function select($query, $dir) {
	$this->show_pgr_form = 1;
	$this->show_trigger_form = 1;
	$this->show_funct_sql_val = '1';
	$this->show_if_statements_form = '1';
	$this->show_return_array_form = '1';
	$return='';
		$return = 'if ('.$this->if_condition.'('.$this->pgr($this->first_fields).')) { <br />';

		if ($dir == 'left')  $return .= '[tab]$search_for = \'%\'.'.$this->pgr($this->first_fields).';<br />';
		if ($dir == 'right') $return .= '[tab]$search_for = '.$this->pgr($this->first_fields).'.\'%\';<br />';
		if ($dir == 'both')  $return .= '[tab]$search_for = \'%\'.'.$this->pgr($this->first_fields).'.\'%\';<br />';

		$return .= '[tab]$stmt = $dbh->prepare(\'SELECT * FROM ' . $this->myTable . ' WHERE `' . $this->first_fields . '` LIKE :' . $this->first_fields . '\');<br />';

		$return .= $query;

		$return .= '[tab]$stmt->execute();';
		$x = '<br />[tab]while ($row = $stmt->fetch(<span class="bx hi tip_n" original-title="Change in left sidebar [Options]">'.$this->pdo_fetch.'</span>)) { ';

			if ($this->return_array=='table') {
				$return .= $this->iterate_fields_table($x);
				$return .= '[tab]$stmt = null;';
			} else {
			$return .= '<br />[tab]while ($row = $stmt->fetch(<span class="bx hi tip_n" original-title="Change in left sidebar [Options]">'.$this->pdo_fetch.'</span>)) { '
			.'[tab]$stmt = null;';
				$return .= $this->iterate_fields();
			$return .= '<br />[tab]}//end while';
			}

		$return .= '<br />}//end isset';

		return $this->tabulate($return);
	}




















    function __destruct() {
    }//end __destruct
}//end class