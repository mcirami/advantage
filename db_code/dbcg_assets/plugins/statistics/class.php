<?php



class statistics extends DBCG {
/*

$this->jquery_jquery
$this->jquery_google
$this->jquery_ui_jquery
$this->jquery_ui_google

*/
    function __construct( ) {
		DBCG::__construct();
    }//end __construct



	function stats() {
		$this->get_stats();
		//$this->print_x($this->statistics);

		$return = '
			<div class="well">
			<h3>'. $this->myTable.' uses '. $this->statistics['pcent']['dbsize'].'% of the '. $this->format_size($this->statistics['dbase']['dbsize']).' total database.</h3>
				<div class="progress">
				  <div class="bar bar-success" style="width: '. $this->statistics['pcent']['dbsize'].'%;">'. $this->format_size($this->statistics['table']['dbsize']).' ['. $this->statistics['pcent']['dbsize'].'%]</div>
				  <div class="bar bar-info" style="width: '.$this->of_100($this->statistics['pcent']['dbsize']).'%;">'. $this->format_size($this->statistics['dbase']['dbsize']).' [100%]</div>
				</div>
			</div>
			<div class="well">
			<h3>'. $this->myTable.' has '. $this->statistics['pcent']['ovhead'].'% of the '. $this->format_size($this->statistics['dbase']['ovhead']).' total database overhead.</h3>
				<div class="progress">
				  <div class="bar bar-warning" style="width: '. $this->statistics['pcent']['ovhead'].'%;">'. $this->format_size($this->statistics['table']['ovhead']).' ['. $this->statistics['pcent']['ovhead'].'%]</div>
				  <div class="bar bar-danger" style="width: '.$this->of_100($this->statistics['pcent']['ovhead']).'%;">'. $this->format_size($this->statistics['dbase']['ovhead']).' [100%]</div>
				</div>
			</div>
			<div class="well">
			<h3>'. $this->myTable.' has '. $this->statistics['pcent']['avgrow'].'% of the '. $this->format_size($this->statistics['dbase']['avgrow']).' total database avg row.</h3>
				<div class="progress">
				  <div class="bar bar-success" style="width: '. $this->statistics['pcent']['avgrow'].'%;">'. $this->format_size($this->statistics['table']['avgrow']).' ['. $this->statistics['pcent']['avgrow'].'%]</div>
				  <div class="bar bar-info" style="width: '.$this->of_100($this->statistics['pcent']['avgrow']).'%;">'. $this->format_size($this->statistics['dbase']['avgrow']).' [100%]</div>
				</div>
			</div>
			<div class="well">
			<h3>'. $this->myTable.' has '. $this->statistics['pcent']['allrow'].'% of the '. $this->format_size($this->statistics['dbase']['allrow']).' total database all row.</h3>
				<div class="progress">
				  <div class="bar bar-success" style="width: '. $this->statistics['pcent']['allrow'].'%;">'. $this->format_size($this->statistics['table']['allrow']).' ['. $this->statistics['pcent']['allrow'].'%]</div>
				  <div class="bar bar-info" style="width: '.$this->of_100($this->statistics['pcent']['allrow']).'%;">'. $this->format_size($this->statistics['dbase']['allrow']).' [100%]</div>
				</div>
			</div>
			<div class="well">
			<h3>'. $this->myTable.' uses '. $this->statistics['table']['allcol'].' of the '. $this->statistics['dbase']['allcol'].' total columns.</h3>
				<div class="progress">
				  <div class="bar bar-success" style="width: '. $this->statistics['pcent']['allcol'].'%;">'. $this->statistics['table']['allcol'].' ['. $this->statistics['pcent']['allcol'].'%]</div>
				  <div class="bar bar-info" style="width: '.$this->of_100($this->statistics['pcent']['allcol']).'%;">'. $this->statistics['dbase']['allcol'].' [100%]</div>
				</div>
			</div>
		';
	return $return;
	}




	function max_cols() {
global $link;
$field_types =array(
                    "1" => "TINYINT",
                    "2" => "SMALLINT",
                    "3" => "INT",
                    "4" => "FLOAT",
                    "5" => "DOUBLE",
                    "6" => "NULL",
                    "7" => "TIMESTAMP",
                    "8" => "BIGINT",
                    "9" => "MEDIUMINT",
                    "10" => "DATE",
                    "11" => "TIME",
                    "12" => "DATETIME",
                    "13" => "YEAR",
                    "14" => "NEWDATE",
                    "15" => "VARCHAR",
                    "16" => "BIT",
                    "246" => "DECIMAL",
                    "247" => "ENUM",
                    "248" => "SET",
                    "249" => "TINY_BLOB",
                    "250" => "MEDIUM_BLOB",
                    "251" => "LONG_BLOB",
                    "252" => "BLOB",
                    "253" => "VARCHAR",
                    "254" => "CHAR",
                    "255" => "GEOMETRY",);
$flags_types = array("1" => "NOT_NULL_FLAG","2" => "PRI_KEY_FLAG","4" => "UNIQUE_KEY_FLAG","16" => "BLOB_FLAG","32" => "UNSIGNED_FLAG","64" => "ZEROFILL_FLAG","128" => "BINARY_FLAG","256" => "ENUM_FLAG","512" => "AUTO_INCREMENT_FLAG","1024" => "TIMESTAMP_FLAG","2048" => "SET_FLAG","4097" => "","32768" => "NUM_FLAG","16384" => "PART_KEY_FLAG","32768" => "GROUP_FLAG","49667" => "","65536" => "UNIQUE_FLAG","36865" => "","4113" => "","4225" => "","4129" => "","49699" => "","9377" => "","36961" => "","4241" => "","20483" => "","161" => "",);
$result = mysqli_query($link, "SELECT * FROM ".$this->myTable);
$fields = mysqli_num_fields($result);
$rows   = mysqli_num_rows($result);
$return = "Your '" . $this->myTable . "' table has " . $fields . " fields and " . $rows . " record(s)<br />";
//for ($i=0; $i < $fields; $i++) {
    //$type  = mysql_field_type($result, $i);
    //$name  = mysql_field_name($result, $i);
    //$len   = mysql_field_len($result, $i);
    //$flags = mysql_field_flags($result, $i);


while ($fieldinfo=mysqli_fetch_field($result)) {
//print_x($fieldinfo);
	$table = $fieldinfo->table;
	$type  = $field_types[$fieldinfo->type];
	$type  = (array_key_exists($fieldinfo->type, $field_types)) ? $field_types[$fieldinfo->type] : $fieldinfo->type;
	$name  = $fieldinfo->name;
	$len   = $fieldinfo->max_length;
	$flags  = (array_key_exists($fieldinfo->flags, $flags_types)) ? $flags_types[$fieldinfo->flags] : $fieldinfo->flags;

	//not used, but available
		$def = $fieldinfo->def;
		$db = $fieldinfo->db;
		$catalog = $fieldinfo->catalog;
		$max_length = $fieldinfo->max_length;
		$charsetnr = $fieldinfo->charsetnr;
		$decimals = $fieldinfo->decimals;

	$consider = $consists_of = '';
	$most_used = mysqli_fetch_array(mysqli_query($link, 'SELECT MAX(LENGTH(`'.$name.'`)) FROM '.$this->myTable));
	$most_used = $most_used[0];

	if ($most_used <= 20){
		$tq= mysqli_query($link, "SELECT `".$name."` FROM ".$this->myTable." WHERE `".$name."` REGEXP '^[0-9]{1,20}'");
		if($tq){
			$temp = mysqli_num_rows($tq);
			if ($rows == $temp) {
				$consists_of = 'Only Numbers';
				$max = mysqli_fetch_array( mysqli_query($link,  "SELECT MAX( `".$name."` ) AS max FROM `".$this->myTable."`" ) );
				if ($max['max'] >= -128 && $max['max'] <= 127) {
					$consider = 'TinyInt';
				} else if ($max['max'] >= -32768 && $max['max'] <= 32767) {
					$consider = 'SmallInt';
				} else if ($max['max'] >= -8388608 && $max['max'] <= 8388607) {
					$consider = 'MediumInt';
				} else if ($max['max'] >= -2147483648 && $max['max'] <= 2147483647) {
					$consider = 'Int';
				} else if ($max['max'] >= -9223372036854775808 && $max['max'] <= 9223372036854775807) {
					$consider = 'BigInt';
				}
			}
		}
	}

	if ($type != "TIMESTAMP") {
		$tq= mysqli_query($link, "SELECT `".$name."` FROM ".$this->myTable." WHERE `".$name."` REGEXP '([0-9]{2}):([0-9]{2}):([0-9]{2})'");
		if($tq){
			$temp = mysqli_num_rows($tq);
			if ($rows == $temp) {
			$consists_of = 'Time Stamps';
			$consider = 'TimeStamp';
			}
		}
	}
	if ($type != "DATETIME") {
		$tq= mysqli_query($link, "SELECT `".$name."` FROM ".$this->myTable." WHERE `".$name."` REGEXP '([0-9]{4})-([0-9]{2})-([0-9]{2}) ([0-9]{2}):([0-9]{2}):([0-9]{2})'");
		if($tq){
			$temp = mysqli_num_rows($tq);
			if ($rows == $temp) {
			$consists_of = 'Date & Time Stamps';
			$consider = 'DateTime';
			}
		}
	}
	if ($type == "BLOB") {
		$max = mysqli_fetch_array(mysqli_query($link, 'SELECT MAX(LENGTH(`'.$name.'`)) FROM '.$this->myTable));
		$min = mysqli_fetch_array(mysqli_query($link, 'SELECT MIN(LENGTH(`'.$name.'`)) FROM '.$this->myTable));
		if ($max['0'] <= '4294967295') $consider = 'LongText';
		if ($max['0'] <= '16777215') $consider = 'MediumText';
		if ($max['0'] <= '65535') $consider = 'Text';
		if ($max['0'] <= '255') $consider = 'VarChar';
		$consists_of = '';
	}


	$return .= '<hr />Column <strong>' . $name . '</strong> is <strong rel="tooltip" title="['.$fieldinfo->type.']">'.$type . ' (' . $len . ')</strong>.';
	$return .= '<br />Longest value is <strong>'.$most_used.'</strong> characters.';
	if($consists_of)$return .= '<br />Column contains <strong>'. $consists_of.'</strong>';
	$min = min($len, $most_used);
	if ($consider) $return .= '<br />Consider changing this column to <strong>' . $consider . ' ('.$min.')</strong>';

}//end while

//		$return = 'The most characters used in each column:<br />';
//		foreach($this->fields as $key => $fields){
//			$query = 'SELECT MAX(LENGTH(`'.$fields.'`)) FROM '.$this->myTable;
//			$result = mysqli_query($link, $query) or die("<b>A fatal MySQL error occured</b>.<br />Query: ".$query."<br />Error: (".mysqli_errno().") ".mysqli_error());$row = mysqli_fetch_row($result);
//			$return .= $fields.': '. $row[0].'<br />';
//		}
return $return;
	}





    function __destruct() {
    }//end __destruct
}//end class