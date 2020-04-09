<?php

class database_mysql_adv extends DBCG {

    function __construct( ) {
		DBCG::__construct();
    }//end __construct




function create_table() {
	global $link;
	$row = mysqli_fetch_array(mysqli_query($link, "SHOW CREATE TABLE " . $this->myTable));
	$return[] = str_replace("\n", "<br />[tab]", $row[1].";");
	return $this->tabulate(implode("\r", $return));
}

function dd_table_list($alt = "") {
	$return = '&lt;label>Tables:&lt;/label><br />&lt;select id="' . $this->myDB . '" name="' . $this->myDB . '" ><br />[tab]&lt;option value="" > &lt;!-- Blank --> &lt;/option><br />';
	foreach ($this->tables as $key => $val) {
		$return .= '[tab]&lt;option value="' . $val . '" ';
		//if ($first == $val) $return .= ' selected="selected"';
		$return .= ' >' . ucwords($val) . '&lt;/option><br />';
	}
	$return .= '&lt;/select>';
return $this->tabulate($return);
}


function dd_column_list() {
	$return = '&lt;label>Columns:&lt;/label><br />&lt;select id="' . $this->myTable . '" name="' . $this->myTable . '" ><br />[tab]&lt;option value="" > &lt;!-- Blank --> &lt;/option><br />';
	foreach ($this->fields as $key => $val) {
		$return .= '[tab]&lt;option value="' . $val . '" ';
		//if ($first == $val) $return .= ' selected="selected"';
		$return .= ' >' . ucwords($val) . '&lt;/option><br />';
	}
	$return .= '&lt;/select>';
return $this->tabulate($return);
}
function select_maker() {
	$return = '<br />echo \'&lt;select id="" name="select" class="">\';';
	$return .= '<br />echo \'&lt;option value="">&lt;!-- Blank -->&lt;/option>\';';
	$return .= '<br />$query = \'SELECT `<span class="bx cz">' . $this->first_fields . '</span>`, `<span class="bx cz">' . $this->second_fields . '</span>` FROM ' . $this->myTable . '\';';
	$return .= '<br />$result = mysqli_query($link, $query) or die(\'&lt;p class="db_error">&lt;b>A fatal MySQL error occured&lt;/b>&lt;br />Query: \'.$query.\'&lt;br />Error: (\'.mysqli_errno().\') \'.mysqli_error().\'&lt;/p>\');';
	$return .= '<br />while ($row = mysqli_fetch_assoc($result)) { ';
	$return .= '<br />&nbsp;&nbsp;echo \'&lt;option value="\'.$row[\'<span class="bx cz">' . $this->first_fields . '</span>\'].\'">\'.$row[\'<span class="bx cz">' . $this->second_fields . '</span>\'].\'&lt;/option>\';';
	$return .= '<br />}//end while';
	$return .= '<br />echo \'&lt;/select>\';';
return $this->tabulate($return);
}
function find_dups() {
	if (empty($_POST['dup_column'])) $_POST['dup_column'] = $this->second_fields;

	$return = 'echo "&lt;table>&lt;tr>&lt;th>Count&lt;/th>&lt;th>'.$this->primary_key.'&lt;/th>&lt;th>Name&lt;/th>&lt;th>Dups&lt;/th>&lt;/tr>";<br />';
	$return .= '$query  = \'SELECT `<span class="bx cz">'.$this->primary_key.'</span>`, `<span class="bx cz">'.$_POST['dup_column'].'</span>`, count(<span class="bx cz">'.$_POST['dup_column'].'</span>) as dups FROM `'.$this->myTable.'` GROUP BY `<span class="bx cz">'.$_POST['dup_column'].'</span>` HAVING dups > 1\';<br />';
	$return .= '$result = mysqli_query($link, $query);<br />';
	$return .= '$num    = mysqli_num_rows($result);<br />';
	$return .= 'for ($i = 0; $i < $num; $i++) {<br />';
	$return .= '[tab]<span class="bx cz">$'.$this->primary_key.'</span> = mysql_result($result, $i, "<span class="bx cz">'.$this->primary_key.'</span>");<br />';
	$return .= '[tab]$dups = mysql_result($result, $i, "dups");<br />';
	$return .= '[tab]<span class="bx cz">$'.$_POST['dup_column'].'</span> = mysql_result($result, $i, "<span class="bx cz">'.$_POST['dup_column'].'</span>");<br />';
	$return .= '[tab]echo "&lt;tr>&lt;td>".$i."&lt;/td>&lt;td>".<span class="bx cz">$'.$this->primary_key.'</span>."&lt;/td>&lt;td>".<span class="bx cz">$'.$_POST['dup_column'].'</span>."&lt;/td>&lt;td>".$dups."&lt;/td>&lt;/tr>";<br />';
	$return .= '}<br />';
	$return .= 'echo "&lt;/table>";';
	//return $return;
return $this->tabulate($return);
}
function auto_incre_safe() {
	$return = '$query = \'INSERT INTO '.$this->myTable.' (`'.$this->first_fields.'`) VALUES ("")\';<br />';
	$return .= '$result = mysqli_query($link, $query) or die(\'&lt;p class="db_error">&lt;b>A fatal MySQL error occurred while trying to save &lt;b>\'.reverb($'.$this->first_fields.').\'&lt;/b> to the database.&lt;/b>&lt;br />Query: \'.$query.\'&lt;br />Error: (\'.mysqli_errno().\') \'.mysqli_error().\'&lt;/p>\');<br />';
	$return .= '<span class="bx hi">$next_ai</span> = mysql_insert_id();<br />';
	$return .= '<span class="bx nb">// Insert whatever logic relies upon the next auto increment number <br />// Instead of using an INSERT statement, use an UPDATE statement instead </span>';
	$return .= '<br />$query = \'UPDATE ' . $this->myTable . ' SET ';
	foreach ($this->fields as $key => $val) {
		$return .= '`' . $val . '` = \'.sql_val($' . $val . ').\'';
		if ($val != $this->last_fields)
			$return .= ',&nbsp;';
		else
			$return .= '&nbsp;';
	}
	$return .= 'WHERE `' . $this->first_fields . '` = \'.sql_val(<span class="bx hi">$next_ai</span>);<br />';
	$return .= '$result = mysqli_query($link, $query) or die(\'&lt;p class="db_error">&lt;b>A fatal MySQL error occurred while trying to update &lt;b>\'.reverb($' . $this->first_fields . ').\'&lt;/b> in the database.&lt;/b>&lt;br />Query: \'.$query.\'&lt;br />Error: (\'.mysqli_errno().\') \'.mysqli_error().\'&lt;/p>\');<br />';
	$return .= 'if (mysql_affected_rows()) { $db_message = \'&lt;p class="db_success">Successfully updated &lt;b>' . $this->first_fields . ' : \'.reverb($'.$this->pgr.'[\'' . $this->first_fields . '\']).\'&lt;/b> in the database!!&lt;/p>\'; }<br />';
	$return .= 'else { $db_message = \'&lt;p class="db_error">Not able to update &lt;b>id : \'.reverb($' . $this->first_fields . ').\'&lt;/b> in the database!!&lt;/p>\'; }';
return $this->tabulate($return);
}
function auto_incre() {
		$return="";
		$return .= '$qai = "SHOW TABLE STATUS LIKE \''.$this->myTable.'\'";<br />';
		$return .= '$rai = mysqli_query($link, $qai) or die(\'&lt;p class="db_error">A fatal MySQL error occurred &lt;br />Query: \'.$qai.\'&lt;br />Error: (\'.mysqli_errno().\') \'.mysqli_error().\'&lt;/p>\');<br />';
		$return .= '$row = mysqli_fetch_assoc($rai);<br />';
		$return .= '$nai = $row[\'Auto_increment\'];<br />';
		$return .= '//echo $nai;<br />';

return $this->tabulate($return);
}
function auto_incre_alt() {
		$return="";
		$return .= '$nai = mysqli_fetch_assoc(mysqli_query($link, "SHOW TABLE STATUS LIKE \''.$this->myTable.'\'")) or die(\'&lt;p class="db_error">A fatal MySQL error occurred &lt;br />Error: (\'.mysqli_errno().\') \'.mysqli_error().\'&lt;/p>\');<br />';
		$return .= '$nai = $nai[\'Auto_increment\'];<br />';
		$return .= '//echo $nai;<br />';
return $this->tabulate($return);
}
function insert_dup() {
	$return = '$query = \'INSERT INTO ' . $this->myTable . ' ( ';
	foreach ($this->fields as $key => $val) {
		$return .= '`' . $val . '`';
		if ($val != $this->last_fields)
			$return .= ',&nbsp;';
		else
			$return .= '&nbsp;';
	}
	$return .= ') VALUES ( ';
	foreach ($this->fields as $key => $val) {
		$return .= '\'.sql_val($' . $val . ').\'';
		if ($val != $this->last_fields)
			$return .= ',&nbsp;';
		else
			$return .= '&nbsp;';
	}
	$return .= ' )';
	$return .= ' ON DUPLICATE KEY UPDATE ';

	foreach ($this->fields as $key => $val) {
		$return .= '`' . $val . '` = \'.sql_val($' . $val . ').\'';
		if ($val != $this->last_fields)
			$return .= ',&nbsp;';
		else
			$return .= '&nbsp;';
	}

	$return .= ' \'; ';
	$return .= '<br />'.$this->db_result('3');

return $this->tabulate($return);
}
function insert_dup2() {
	$return = '$query = \'INSERT INTO ' . $this->myTable . ' ( <br />';
	foreach ($this->fields as $key => $val) {
		$return .= '&nbsp;&nbsp;&nbsp;`' . $val . '`';
		if ($val != $this->last_fields)
			$return .= ',&nbsp;<br />';
		else
			$return .= '&nbsp;<br />';
	}
	$return .= ') VALUES ( <br />';
	foreach ($this->fields as $key => $val) {
		$return .= '&nbsp;&nbsp;&nbsp;\'.sql_val($' . $val . ').\'';
		if ($val != $this->last_fields)
			$return .= ',&nbsp;<br />';
		else
			$return .= '&nbsp;<br />';
	}
	$return .= ' )';
	$return .= '<br />ON DUPLICATE KEY UPDATE ';

	foreach ($this->fields as $key => $val) {
		$return .= '<br />[tab]`' . $val . '` = \'.sql_val($' . $val . ').\'';
		if ($val != $this->last_fields)
			$return .= ',&nbsp;';
		else
			$return .= '&nbsp;';
	}

	$return .= '<br />\'; ';
	$return .= '<br />'.$this->db_result();
return $this->tabulate($return);
}
function pagination() {
		$return = 'if ('.$this->if_condition.'($'.$this->pgr.'[\'' . $this->first_fields . '\'])) { <br />';
		$return .= '[tab]$max_rows = current(mysqli_fetch_row(mysqli_query($link, \'SELECT COUNT(1) FROM ' . $this->myTable . ' WHERE `' . $this->first_fields . '` LIKE \'.sql_val(\'<span class="bx cz">%</span>\'.$'.$this->pgr.'[\'' . $this->first_fields . '\'].\'<span class="bx cz">%</span>\'))));<br />';
		$return .= '[tab]$max_rows = (is_numeric($max_rows)) ? $max_rows : 0;<br />';
		$return .= '[tab]$start = (int)$_REQUEST[\'<span class="bx cz">start</span>\'];<br />';
		$return .= '[tab]if ($start < 0) $start = 0;<br />';
		$return .= '[tab]$step = <span class="bx cz">5</span>;<br />';
		$return .= '[tab]$query = \'SELECT * FROM ' . $this->myTable . ' WHERE `' . $this->first_fields . '` LIKE \'.sql_val(\'<span class="bx cz">%</span>\'.$'.$this->pgr.'[\'' . $this->first_fields . '\'].\'<span class="bx cz">%</span>\').\' LIMIT \'.(int)$start.\', \'.(int)$step;';

		$return .= $this->db_result();
		$return .= '<br />[tab]$count = mysql_numrows($result);';
		$return .= '<br />echo \'&lt;table>\';';

		$return .= '<br />echo \'&lt;tr>\';';
		foreach ($this->fields as $key => $val) {
			$return .= '<br />[tab][tab]echo "&lt;td>'.$val.'&lt;/td>";';
		}
		$return .= '<br />echo \'&lt;/tr>\';';

		$return .= '<br />[tab]while ($row = mysqli_fetch_assoc($result)) { ';
		$return .= '<br />echo "&lt;tr>";';
		foreach ($this->fields as $key => $val) {
			$return .= '<br />[tab][tab]echo "&lt;td>".$row[\'' . $val . '\']."&lt;/td>";';
		}
		$return .= '<br />echo "&lt;/tr>";';
		$return .= '<br />[tab]}//end while<br />';
		$return .= 'echo \'&lt;/table>\';<br />';
		$return .= '}<br /><br />';
		$return .= '<hr />//pagination controls<br />echo \'&lt;a href="?start=0" class="pagination step_first">First&lt;/a> \';<br />';
		$return .= '$i=1;<br />';
		$return .= 'for($x=0; ($x+$step)&lt;=($max_rows-$step); $x+=$step){<br />';
		$return .= '[tab]echo \'&lt;a href="?start=\'.($x+$step).\'" class="pagination step_\'.$i.\'">\'.$i.\'&lt;/a> \';<br />';
		$return .= '[tab]$i++;<br />';
		$return .= '}<br />';
		$return .= 'echo \'&lt;a href="?start=\'.($step*floor($max_rows / $step)).\'" class="pagination step_last">Last&lt;/a>\';<br />';

return $this->tabulate($return);
}


    function __destruct() {
    }//end __destruct
}//end class