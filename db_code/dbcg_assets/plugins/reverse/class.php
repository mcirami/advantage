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

if (!isset($_SESSION['textarea'])) $_SESSION['textarea'] = '';
if (!isset($_SESSION['number'])) $_SESSION['number'] = '';
if (!isset($_SESSION['text'])) $_SESSION['text'] = '';
if (!isset($_SESSION['phone'])) $_SESSION['phone'] = '';
if (!isset($_SESSION['code'])) $_SESSION['code'] = '';

$_SESSION['textarea'] = (isset($_POST['textarea'])) ? $_POST['textarea'] : 'text';
$_SESSION['number'] = (isset($_POST['number'])) ? $_POST['number'] : 'varchar';
$_SESSION['text'] = (isset($_POST['text'])) ? $_POST['text'] : 'varchar';
$_SESSION['phone'] = (isset($_POST['phone'])) ? $_POST['phone'] : 'varchar';
$_SESSION['code'] = (isset($_POST['code'])) ? $_POST['code'] : '';



class reverse extends DBCG {
    function __construct( ) {
		DBCG::__construct();
    }//end __construct

	function contains($haystack,$needle) { if (strlen(strstr($haystack,$needle))>0) { return 1; } else { return 0; 	} } //end function

	function reverse_form() {
		if (!empty($_POST['code'])) {	
			if (empty($_POST['code'])) return;
			$done = array(); $return = '';
			$subject = stripslashes($_POST['code']);
			$pattern = '/<(?=(.*)name=")(.*)>/im';
			preg_match_all($pattern, $subject, $matches);
			foreach ($matches[2] as $key=>$val){
				preg_match_all('/(?<=id\=\")(\w+)/im', $val, $id);
				preg_match_all('/(?<=name\=\")(\w+)/im', $val, $name);
				preg_match_all('/(?<=maxlength\=\")(\w+)/im', $val, $length);
				if (!empty($name['1']['0'])) $name = $name['1']['0']; else $name="";
				if (empty($name) && !empty($id['1']['0'])) $name = $id['1']['0'];
				if (empty($name)) $name = '<span class="bx sm tip_n">EMPTY</span>';
				$length = (!empty($length['1']['0'])) ? $length['1']['0'] : '<span class="bx sm tip_n">EMPTY</span>';
			
				if ($this->contains($val, "form") && !in_array($name, $done)) { $return = '<br /><br />CREATE TABLE IF NOT EXISTS `'.$name.'` (<br />'; $done[]=$name; }
				if ($this->contains($val, "textarea") && !in_array($name, $done)) { $return .= '&nbsp;&nbsp;&nbsp;`'.$name.'` <span class="bx cz rev tip_n">'.$_SESSION['textarea'].'</span> NOT NULL,<br />'; $done[]=$name; }
				if ( ($this->contains($val, 'type="text"') || $this->contains($val, 'type="email"')) && !in_array($name, $done)) { $return .= '&nbsp;&nbsp;&nbsp;`'.$name.'` <span class="bx cz rev tip_n">'.$_SESSION['text'].'('.$length.')</span> NOT NULL,<br />'; $done[]=$name; }
				if ($this->contains($val, 'type="number"') && !in_array($name, $done)) { $return .= '&nbsp;&nbsp;&nbsp;`'.$name.'` <span class="bx cz rev tip_n">'.$_SESSION['number'].'('.$length.')</span> NOT NULL,<br />'; $done[]=$name; }
				if ( ($this->contains($val, 'type="phone"') || $this->contains($val, 'type="tel"')) && !in_array($name, $done)) { $return .= '&nbsp;&nbsp;&nbsp;`'.$name.'` <span class="bx cz rev tip_n">'.$_SESSION['phone'].'('.$length.')</span> NOT NULL,<br />'; $done[]=$name; }
			}//end foreach
			$return .= ') ENGINE=MyISAM DEFAULT CHARSET=latin1;<br /><br />';
		return $return;
		} else {
			$return = '
				<form action="" method="POST" class="validate" id=""><h2>'.$this->lang['table_select'].'</h2>
					<h2> <strong>Options</strong> </h2>
					<label for="method"> <strong>Textarea</strong> <small></small> </label>
					<select name=textarea id=textarea class="span6">
						<option value=""></option>
						<option '.$this->selected($_SESSION['textarea'], "blob").' value="blob">Blob</option>
						<option '.$this->selected($_SESSION['textarea'], "text").' value="text">text</option>
					</select>

					<label for="method"> <strong>Number</strong> <small></small> </label>
					<select name=number id=number class="span6" >
						<option value=""></option>
						<option '.$this->selected($_SESSION['number'], "int").' value="int">int</option>
						<option '.$this->selected($_SESSION['number'], "varchar").' value="varchar">varchar</option>
					</select>

					<label for="method"> <strong>Text</strong> <small></small> </label>
					<select name=text id=text class="span6" >
						<option value=""></option>
						<option '.$this->selected($_SESSION['text'], "varchar").' value="varchar">varchar</option>
						<option '.$this->selected($_SESSION['text'], "text").' value="text">text</option>
						<option '.$this->selected($_SESSION['text'], "blob").' value="blob">Blob</option>
					</select>

					<label for="method"> <strong>Phone</strong> <small></small> </label>
					<select name=phone id=phone class="span6" >
						<option value=""></option>
						<option '.$this->selected($_SESSION['phone'], "varchar").' value="varchar">varchar</option>
						<option '.$this->selected($_SESSION['phone'], "int").' value="int">int</option>
					</select>

					<label for="notes"> <strong>Form</strong> </label>
					<textarea name="code" id="code" class="span12" rows="" cols="">'.htmlspecialchars(stripslashes($_SESSION['code'])).'</textarea>

					<div class="clearfix"></div>
					<input type="submit" name="submit" value="Create Table Structure" name=send class="btn btn-primary"/>
				</form>
			';
		}
	return $return;
	}

	function reverse_table(){
		if (!empty($_POST['code'])) {	
			$done = array(); $return = '';
			$subject = stripslashes($_POST['code']);
			$pattern = '/(?<=<tr>)(.+?)(?=<\/tr>)/s';
			$ct_cms = preg_match($pattern, $subject, $columns);
			$cols_array = explode("\r\n",$columns['1']);
			array_pop($cols_array);
			array_shift($cols_array);
			$rows = explode("<tr>",$subject);
			$max = array();
			foreach($rows as $key=>$val){
				if ($key <= $ct_cms) continue;
				$vals = explode("\r\n",$val);
				array_pop($vals);	array_pop($vals);
				array_shift($vals);
				foreach($vals as $key=>$val){
					$val = strip_tags(trim($val));
					if (empty($val)) continue;
					$length = strlen($val);
					if (empty($max[$key]['count'])) $max[$key]['count'] = $length;
					if ($length > $max[$key]['count']) $max[$key]['count'] = $length;
					if (empty($max[$key]['type'])) $max[$key]['type'] = "int";
					if ( preg_match('/[\D]/', $val) ) { $max[$key]['type'] = "varchar"; }
					if ($max[$key]['count'] > 255) $max[$key]['type'] = "text";
					if ($max[$key]['count'] == 1 && $max[$key]['type'] = "int") $max[$key]['type'] = "boolean";
					$max[$key]['column'] = trim($cols_array[$key]);
				}//end foreach
			}//end foreach
			$return = 'CREATE TABLE IF NOT EXISTS `<span class="bx sm tip_n">DatabaseName</span>` (<br />';
			foreach($max as $key=>$val) {
				$return .= '&nbsp;&nbsp;&nbsp;`'.$val['column'].'` <span class="bx cz rev tip_n">'.$val['type'].'('.$val['count'].')</span> NOT NULL,<br />';
			}
			$return = rtrim($return, ",<br />")."<br />";
			$return .= ') ENGINE=MyISAM DEFAULT CHARSET=latin1;<br />';
			return $return;
		} else {
			$return = '
				<h2>Table MUST have a header row eg: &lt;th>xxx&lt;/th></h2>
				<p>The more data in your table the more accurate the database will be!</p>
				<form action="" method="POST" class=" validate" id=""><h2>'.$this->lang['table_select'].'</h2>
					<label for="notes"> <strong>Table</strong> </label>
					<textarea name="code" id="code" class="span12" rows="" cols="">'.htmlspecialchars(stripslashes($_SESSION['code'])).'</textarea>
					<input type="submit" name="submit" value="Create Table Structure" name=send class="btn btn-primary"/>
				</form>
			';
		}
	return $return;
	}



    function __destruct() {
    }//end __destruct
}//end class