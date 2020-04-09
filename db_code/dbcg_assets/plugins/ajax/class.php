<?php



class ajax extends DBCG {
/*

$this->jquery_jquery
$this->jquery_google
$this->jquery_ui_jquery
$this->jquery_ui_google

*/
    function __construct( ) {
		DBCG::__construct();
    }//end __construct


	function jquery2() {
	$this->show_jquery_version_form = 1;
		$return = '<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button><strong>Pick only ONE</strong> This is not a fallback! Pick only 1 host!!</div>
					<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button><strong>The missing "http" is intentional!!</strong> By removing the "http:" it will allow you to use the same code on both SSL and non SSL sites!</div><br />
		&lt;!-- grab '.$this->jquery_google.' from google --><br />
		&lt;script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/'.$this->jquery_google.'/jquery'.$this->jquery_min.'.js">&lt;/script><br /><br />
		&lt;!-- if its not online grab '.$this->jquery_jquery.' from jquery --><br />
		&lt;script type="text/javascript" src="//code.jquery.com/jquery-'.$this->jquery_jquery.''.$this->jquery_min.'.js">&lt;/script><br /><br />
		&lt;!-- if its not online grab '.$this->jquery_jquery.' from microsoft --><br />
		&lt;script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-'.$this->jquery_jquery.''.$this->jquery_min.'.js">&lt;/script><br /><br />
		&lt;!-- if its not online grab latest from google --><br />
		&lt;script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery'.$this->jquery_min.'.js">&lt;/script><br /><br />
		&lt;!-- if its not online grab latest from jquery --><br />
		&lt;script type="text/javascript" src="//code.jquery.com/jquery'.$this->jquery_min.'.js">&lt;/script><br /><br />
		&lt;!-- if its not online grab '.$this->jquery_local.' local --><br />
		&lt;script type="text/javascript" src="<span class="bx cz">/js/jquery.'.$this->jquery_local.''.$this->jquery_min.'.js</span>">&lt;/script><br /><br />
		&lt;!-- uncomment below to verify jQuery loaded --><br />
	    &lt;!--script>window.jQuery && document.write(unescape(\'%3Cscript type="text/javascript"%3E alert("jQuery Loaded!!"); %3C/script%3E\'));&lt;/script--><br />
		<br />
		';
		return $this->tabulate($return);
	}

	function jquery() {
	$this->show_jquery_version_form = 1;
		$return = '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button><strong>&lt!--The missing "http" is intentional!!</strong> By removing the "http:" it will allow you to use the same code on both SSL and non SSL sites!--></div><br />
		&lt;!-- grab '.$this->jquery_google.' from google --><br />
		&lt;script>!window.jQuery && document.write(unescape(\'%3Cscript type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/'.$this->jquery_google.'/jquery'.$this->jquery_min.'.js"%3E%3C/script%3E\'));&lt;/script><br /><br />
		&lt;!-- if its not online grab '.$this->jquery_jquery.' from jquery --><br />
		&lt;script>!window.jQuery && document.write(unescape(\'%3Cscript type="text/javascript" src="//code.jquery.com/jquery-'.$this->jquery_jquery.''.$this->jquery_min.'.js"%3E%3C/script%3E\'));&lt;/script><br /><br />
		&lt;!-- if its not online grab '.$this->jquery_jquery.' from microsoft --><br />
		&lt;script>!window.jQuery && document.write(unescape(\'%3Cscript type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-'.$this->jquery_jquery.''.$this->jquery_min.'.js"%3E%3C/script%3E\'));&lt;/script><br /><br />
		&lt;!-- if its not online grab latest from google --><br />
		&lt;script>!window.jQuery && document.write(unescape(\'%3Cscript type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery'.$this->jquery_min.'.js"%3E%3C/script%3E\'));&lt;/script><br /><br />
		&lt;!-- if its not online grab latest from jquery --><br />
		&lt;script>!window.jQuery && document.write(unescape(\'%3Cscript type="text/javascript" src="//code.jquery.com/jquery'.$this->jquery_min.'.js"%3E%3C/script%3E\'));&lt;/script><br /><br />
		&lt;!-- if its not online grab '.$this->jquery_local.' local --><br />
		&lt;script>!window.jQuery && document.write(unescape(\'%3Cscript type="text/javascript" src="<span class="bx cz">/js/jquery.'.$this->jquery_local.''.$this->jquery_min.'.js</span>"%3E%3C/script%3E\'));&lt;/script><br /><br />
		&lt;!-- if its still not online your S.O.L. --><br />
	    &lt;script>!window.jQuery && document.write(unescape(\'%3Cscript type="text/javascript"%3E alert("All reasonable attempts to load jQuery have failed.\\\nAt this point, you may want to call it a day as\\\nyou\\\'ve stepped in a big \\\'ol pile of S.O.L."); %3C/script%3E\'));&lt;/script><br /><br />
		&lt;!-- uncomment below to verify jQuery loaded --><br />
	    &lt;!--script>window.jQuery && document.write(unescape(\'%3Cscript type="text/javascript"%3E alert("jQuery Loaded!!"); %3C/script%3E\'));&lt;/script--><br />
		<br />
		';
		return $this->tabulate($return);
	}



	function jquery_ui2() {
	$this->show_jquery_version_form = 1;
		$return = '<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button><strong>Pick only ONE</strong> This is not a fallback! Pick only 1 host!!</div>
					<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button><strong>All 4 online hosts have different versions!</strong> This only applies to the UI library! Google usually always has the latest. It can take months for Microsoft to get the latest!</div>
					<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button><strong>The missing "http" is intentional!!</strong> By removing the "http:" it will allow you to use the same code on both SSL and non SSL sites!</div><br />
		&lt;!-- grab '.$this->jquery_ui_google.' from google --><br />
		&lt;script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/'.$this->jquery_ui_google.'/jquery-ui'.$this->jquery_min.'.js">&lt;/script><br /><br />
		&lt;!-- if its not online grab '.$this->jquery_ui_jquery.' from jquery --><br />
		&lt;script type="text/javascript" src="//code.jquery.com/jquery-'.$this->jquery_ui_jquery.''.$this->jquery_min.'.js">&lt;/script><br /><br />
		&lt;!-- if its not online grab '.$this->jquery_ui_jquery.' from microsoft --><br />
		&lt;script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.ui/'.$this->jquery_ui_google.'/jquery-ui'.$this->jquery_min.'.js">&lt;/script><br /><br />
		&lt;!-- if its not online grab latest from google --><br />
		&lt;script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui'.$this->jquery_min.'.js">&lt;/script><br /><br />
		&lt;!-- if its not online grab '.$this->jquery_ui_local.' local --><br />
		&lt;script type="text/javascript" src="<span class="bx cz">/js/jquery.'.$this->jquery_ui_local.''.$this->jquery_min.'.js</span>">&lt;/script><br /><br />
		&lt;!-- uncomment below to verify jQuery loaded --><br />
	    &lt;!--script>window.jQuery && document.write(unescape(\'%3Cscript type="text/javascript"%3E alert("jQuery Loaded!!"); %3C/script%3E\'));&lt;/script--><br />
		<br />
		';
		return $this->tabulate($return);
	}

	function jquery_ui() {
	$this->show_jquery_version_form = 1;
		$return = '<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button><strong>&lt!--All 4 online hosts have different versions!</strong> This only applies to the UI library! Google usually always has the latest. It can take months for Microsoft to get the latest!--></div>
					<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button><strong>&lt!--The missing "http" is intentional!!</strong> By removing the "http:" it will allow you to use the same code on both SSL and non SSL sites!--></div><br />
		&lt;!-- grab '.$this->jquery_ui_google.' from google --><br />
		&lt;script>!window.jQuery && document.write(unescape(\'%3Cscript type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/'.$this->jquery_ui_google.'/jquery-ui'.$this->jquery_min.'.js"%3E%3C/script%3E\'));&lt;/script><br /><br />
		&lt;!-- if its not online grab '.$this->jquery_ui_jquery.' from jquery --><br />
		&lt;script>!window.jQuery && document.write(unescape(\'%3Cscript type="text/javascript" src="//code.jquery.com/jquery-'.$this->jquery_ui_jquery.''.$this->jquery_min.'.js"%3E%3C/script%3E\'));&lt;/script><br /><br />
		&lt;!-- if its not online grab '.$this->jquery_ui_jquery.' from microsoft --><br />
		&lt;script>!window.jQuery && document.write(unescape(\'%3Cscript type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.ui/'.$this->jquery_ui_google.'/jquery-ui'.$this->jquery_min.'.js"%3E%3C/script%3E\'));&lt;/script><br /><br />
		&lt;!-- if its not online grab latest from google --><br />
		&lt;script>!window.jQuery && document.write(unescape(\'%3Cscript type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui'.$this->jquery_min.'.js"%3E%3C/script%3E\'));&lt;/script><br /><br />
		&lt;!-- if its not online grab '.$this->jquery_ui_local.' local --><br />
		&lt;script>!window.jQuery && document.write(unescape(\'%3Cscript type="text/javascript" src="<span class="bx cz">/js/jquery.'.$this->jquery_ui_local.''.$this->jquery_min.'.js</span>"%3E%3C/script%3E\'));&lt;/script><br /><br />
		&lt;!-- if its still not online your S.O.L. --><br />
	    &lt;script>!window.jQuery && document.write(unescape(\'%3Cscript type="text/javascript"%3E alert("All reasonable attempts to load jQuery have failed.\\\nAt this point, you may want to call it a day as\\\nyou\\\'ve stepped in a big \\\'ol pile of S.O.L."); %3C/script%3E\'));&lt;/script><br /><br />
		&lt;!-- uncomment below to verify jQuery loaded --><br />
	    &lt;!--script>window.jQuery && document.write(unescape(\'%3Cscript type="text/javascript"%3E alert("jQuery Loaded!!"); %3C/script%3E\'));&lt;/script--><br />
		<br />
		';
		return $this->tabulate($return);
	}








	function j_full_insert() {
		if (!isset($_SESSION['ajax_file'])) $_SESSION['ajax_file'] = '_ajax.php';
	$this->show_ajax_file_form = 1;
	$this->show_pgr_form = 1;
	$this->show_trigger_form = 1;
	$this->show_funct_sql_val = '1';
	$this->show_if_statements_form = '1';
	$this->show_custom_columns_form = '1';
	$this->funct_clean = '1';
	$this->show_safe_mode_form = '1';
	$return = '&lt;?php <br />
	<span class="bx nb">// This is your AJAX page <br />
	// This file name MUST be <span class="bx nb" style="padding:5px;">'.$_SESSION['ajax_file'].'</span> in order for this to work!!<br />
	// This file MUST be located in the same directory as the PHP file shown below!</span>';
	$return .= '<br />if ('.$this->if_condition.'($'.$this->pgr.'[\''.$this->first_fields.'\'])) { <br /><br />';
		$return .= $this->connect_long().'<br />';
		$return .= $this->funct_sql_val().'<br />';
		$return .= $this->funct_clean().'<br />';
		$return .= $this->funct_reverb().'<br />';
		$return .= $this->funct_print_x().'<br />';
		$x	  = 0;
		foreach ($this->fields as $key => $val) {
			$return .= '<br />$' . $val . ' = '.$this->if_condition.'('.$this->pgr($val).') ? clean('.$this->pgr($val).', "' . $this->types[$x] . '") : "";';
			$x++;
		}
		$return .= '<br /><br />';
		$return .= $this->insert_long();
	$return .= '<br />if ('.$this->if_condition.'($db_message)) echo $db_message;<br />';
	$return .= '<br />}//end if '.$this->if_condition.' '.$this->first_fields.'<br />';
	$return .= '?>';

	$return .= '</div></div></div><div class="block"><p class="block-heading">Results</p><div class="btn-group pull-right"><a href="javascript:void(0);" class="btn btn-mini font_smaller" title="10px" data-gravity="e"><i class="icon-font"></i></a><a href="javascript:void(0);" class="btn btn-mini font_bigger" title="14px" data-gravity="w"><i class="icon-font"></i></a></div><div class="block-body"><div id="results" style="word-break: break-all;word-wrap: break-word;padding: 20px;">';

	$return .= '<span class="bx nb">&lt;!-- #### This is your normal PHP page #### --></span><br /><br />';
	$return .= $this->head("jquery");
	if ($this->safe_mode == "1") $return .= $this->warn_safe_mode();
	$return .= '&lt;section class="form_container"><br />';
		$return .= '&lt;form action="" method="'.trim($this->pgr, '_').'" id="<span class="bx cz">' . $this->myTable . '</span>" name="<span class="bx cz">' . $this->myTable . '</span>"';
		if (array_intersect($this->fields, $this->html_file)) {
			$return .= ' enctype="multipart/form-data" ';
		}
		$return .= ' ><br />&lt;fieldset><br />&lt;legend> ' . $this->label_name($this->myTable) . ' &lt;/legend>';
		$x = 0;
		foreach ($this->fields as $key => $val) {
			if (($val == "email") || ($this->in_arrayi($val, $this->html5_email))) {
				$return .= '<br />&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">email</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" pattern="[^ @]*@[^ @]*" placeholder="Enter an email address" /><br />';
			} else if (($val == "url") || ($this->in_arrayi($val, $this->html5_url))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">url</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" pattern="https?://.+" placeholder="Enter a web address" /><br />';
			} else if (($val == "tel") || ($this->in_arrayi($val, $this->html5_tel))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">tel</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" placeholder="Enter a Phone Number" /><br />';
			} else if (($val == "password") || ($this->in_arrayi($val, $this->html5_pass))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">password</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "number") || ($this->get_type($this->types[$x]) == "int") || ($this->in_arrayi($val, $this->html5_number))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">number</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" min="" max="" step="" /><br />';
			} else if (($val == "range") || ($this->in_arrayi($val, $this->html5_range))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">range</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" min="" max="" /><br />';
			} else if (($val == "date") || ($this->in_arrayi($val, $this->html5_date))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">date</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "month") || ($this->in_arrayi($val, $this->html5_month))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">month</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "week") || ($this->in_arrayi($val, $this->html5_week))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">week</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "time") || ($this->in_arrayi($val, $this->html5_time))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">time</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "datetime") || ($this->in_arrayi($val, $this->html5_datetime))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">datetime</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "datetime-local") || ($this->in_arrayi($val, $this->html5_datetime_local))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">datetime-local</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "color") || ($this->in_arrayi($val, $this->html5_color))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">color</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($this->types[$x] == "text") || ($this->types[$x] == "mediumtext") || ($this->types[$x] == "longtext") || ($this->types[$x] == "blob") || ($this->types[$x] == "mediumblob") || ($this->types[$x] == "longblob") || ($this->in_arrayi($val, $this->html5_textarea))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;<span class="bx hi">textarea</span> class="" id="' . $val . '" name="' . $val . '"  rows="" cols="" >&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>&lt;/textarea><br />';
			} else if (($val == "file") || ($this->in_arrayi($val, $this->html_file))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">file</span>" value="" class="" id="' . $val . '" name="' . $val . '" /><br />';
			} else {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="text" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			}
			$x++;
		}
		$return .= '<br />&lt;input type="submit" value="Submit" /><br />&lt;/fieldset><br />&lt;/form><br />';

		$return .= $this->foot();
$search = array("&nbsp;", "&lt;", ">", '<span class="bx hi">', "</span>", "<br />", "[tab]", '<span class="bx cz">');
$replace = array("", "<", ">", "", "", "", "", "");
$contents = str_replace($search,$replace,$return);
//file_put_contents("dbcg_temp.php",$contents);
	return $this->tabulate($return);
	}








	function j_full_update() {
	$this->show_ajax_file_form = 1;
	$this->show_pgr_form = 1;
	$this->show_trigger_form = 1;
	$this->show_funct_sql_val = '1';
	$this->show_if_statements_form = '1';
	$this->show_custom_columns_form = '1';
	$this->funct_clean = '1';
	$this->show_safe_mode_form = '1';
	$this->show_secondary_form = 1;
	$return = '&lt;?php <br />
	<span class="bx nb">// This is your AJAX page <br />
	// This file name MUST be <span class="bx nb" style="padding:5px;">'.$_SESSION['ajax_file'].'</span> in order for this to work!!<br />
	// This file MUST be located in the same directory as the PHP file shown below!</span><br />';
	$return .= '<br />if ('.$this->if_condition.'($'.$this->pgr.'[\''.$this->first_fields.'\'])) {<br />';
		$return .= $this->connect_long().'<br />';
		$return .= $this->funct_sql_val().'<br />';
		$return .= $this->funct_clean().'<br />';
		$return .= $this->funct_reverb().'<br />';
		$return .= $this->funct_print_x().'<br />';
		$x	  = 0;
		foreach ($this->fields as $key => $val) {
			$return .= '<br />$' . $val . ' = '.$this->if_condition.'('.$this->pgr($val).') ? clean('.$this->pgr($val).', "' . $this->types[$x] . '") : "";';
			$x++;
		}
		$return .= '<br /><br />';
//	$return .= '<br />$id = clean($'.$this->pgr.'[\''.$this->first_fields.'\']);<br />';
	$return .= '<br />if (mysqli_num_rows(mysqli_query($link, \'SELECT `'.$this->first_fields.'` FROM '.$this->myTable.' WHERE `'.$this->first_fields.'` = \'.sql_val($'.$this->first_fields.'))) >= 1) {<br />';
		$return .= $this->update_long();
//	if ($this->safe_mode == "1") { $return .= '<br /><span class="bx sm">/*&lt;!-- safe mode warning start -->*/</span><br />//'; } else { $return .= '<br /><span class="bx ns">/*&lt;!-- NOT in safe mode!! -->*/</span><br />'; }
//			$return .= '$result = mysqli_query($link, $query) or die(\'&lt;p class="db_error">&lt;b>A fatal MySQL error occurred while trying to update &lt;b>\'.reverb($'.$this->pgr.'[\''.$this->first_fields.'\']).\'&lt;/b> in the database.&lt;/b>&lt;br />Query: \'.$query.\'&lt;br />Error: (\'.mysqli_errno().\') \'.mysqli_error().\'&lt;/p>\');<br />';
//			$return .= 'if ($result) $db_message = \'&lt;p class="db_success">Successfully updated &lt;b>'.$this->first_fields.' : \'.reverb($'.$this->pgr.'[\''.$this->first_fields.'\']).\'&lt;/b> in the database!!&lt;/p>\';';
//	if ($this->safe_mode != "1") { $return .= '<br />//'; } else { $return .= '<br />'; }
//	$return .= 'print_x($query);';
	$return .= '<br />}//end if more than or equal to 1<br />';
	$return .= 'else { ';
	$return .= '$db_message = \'&lt;p class="db_error">There are no entries where &lt;b>'.$this->first_fields.' = \'.reverb($'.$this->pgr.'[\''.$this->first_fields.'\']).\'&lt;/b> &lt;/p>\';';
	$return .= ' }';
//	if ($this->safe_mode == "1") { $return .= '<br /><span class="bx sm">/*&lt;!-- safe mode warning end -->*/</span><br />'; } else { $return .= '<br /><span class="bx ns">/*&lt;!-- NOT in safe mode!! -->*/</span><br />'; }
	$return .= '<br />if ('.$this->if_condition.'($db_message)) echo $db_message;<br />';
	$return .= '<br />}//end if '.$this->if_condition.' POST '.$this->first_fields.'<br />';
	$return .= '?>';

	$return .= '</div></div></div><div class="block"><p class="block-heading">Results</p><div class="btn-group pull-right"><a href="javascript:void(0);" class="btn btn-mini font_smaller" title="10px" data-gravity="e"><i class="icon-font"></i></a><a href="javascript:void(0);" class="btn btn-mini font_bigger" title="14px" data-gravity="w"><i class="icon-font"></i></a></div><div class="block-body"><div id="results" style="word-break: break-all;word-wrap: break-word;padding: 20px;">';

	$return .= '<span class="bx nb">&lt;!-- #### This is your normal PHP page #### --></span><br /><br />';
	$return .= '&lt;?php';
	$return .= $this->connect_long();
	$return .= $this->funct_sql_val();
	$return .= $this->funct_reverb();
	$return .= '?>';
	$return .= $this->head("jquery");
	if ($this->safe_mode == "1") $return .= $this->warn_safe_mode();
	$return .= '&lt;section class="form_container"><br />';
	$return .= $this->select_maker(1);
		$return .= '&lt;form action="" method="'.trim($this->pgr, '_').'" id="<span class="bx cz">' . $this->myTable . '</span>" name="<span class="bx cz">' . $this->myTable . '</span>"';
		if (array_intersect($this->fields, $this->html_file)) {
			$return .= ' enctype="multipart/form-data" ';
		}
		$return .= ' ><br />&lt;fieldset><br />&lt;legend> ' . $this->label_name($this->myTable) . ' &lt;/legend>';
		$x = 0;
		foreach ($this->fields as $key => $val) {
			if (($val == "email") || ($this->in_arrayi($val, $this->html5_email))) {
				$return .= '<br />&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">email</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" pattern="[^ @]*@[^ @]*" placeholder="Enter an email address" /><br />';
			} else if (($val == "url") || ($this->in_arrayi($val, $this->html5_url))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">url</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" pattern="https?://.+" placeholder="Enter a web address" /><br />';
			} else if (($val == "tel") || ($this->in_arrayi($val, $this->html5_tel))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">tel</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" placeholder="Enter a Phone Number" /><br />';
			} else if (($val == "password") || ($this->in_arrayi($val, $this->html5_pass))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">password</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "number") || ($this->get_type($this->types[$x]) == "int") || ($this->in_arrayi($val, $this->html5_number))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">number</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" min="" max="" step="" /><br />';
			} else if (($val == "range") || ($this->in_arrayi($val, $this->html5_range))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">range</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" min="" max="" /><br />';
			} else if (($val == "date") || ($this->in_arrayi($val, $this->html5_date))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">date</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "month") || ($this->in_arrayi($val, $this->html5_month))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">month</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "week") || ($this->in_arrayi($val, $this->html5_week))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">week</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "time") || ($this->in_arrayi($val, $this->html5_time))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">time</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "datetime") || ($this->in_arrayi($val, $this->html5_datetime))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">datetime</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "datetime-local") || ($this->in_arrayi($val, $this->html5_datetime_local))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">datetime-local</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "color") || ($this->in_arrayi($val, $this->html5_color))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">color</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($this->types[$x] == "text") || ($this->types[$x] == "mediumtext") || ($this->types[$x] == "longtext") || ($this->types[$x] == "blob") || ($this->types[$x] == "mediumblob") || ($this->types[$x] == "longblob") || ($this->in_arrayi($val, $this->html5_textarea))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;<span class="bx hi">textarea</span> class="" id="' . $val . '" name="' . $val . '"  rows="" cols="" >&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>&lt;/textarea><br />';
			} else if (($val == "file") || ($this->in_arrayi($val, $this->html_file))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">file</span>" value="" class="" id="' . $val . '" name="' . $val . '" /><br />';
			} else {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="text" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			}
			$x++;
		}
		$return .= '<br />&lt;input type="submit" value="Submit" /><br />&lt;/fieldset><br />&lt;/form><br />';
	$return .= '&lt;?php } ?><br />';
	$return .= $this->foot();
$search = array("&nbsp;", "&lt;", ">", '<span class="bx hi">', "</span>", "<br />", "[tab]", '<span class="bx cz">');
$replace = array("", "<", ">", "", "", "", "", "");
$contents = str_replace($search,$replace,$return);
//file_put_contents("dbcg_temp.php",$contents);
		return $this->tabulate($return);
	}

	function full_page_insert() {
	$this->show_pgr_form = 1;
	$this->show_trigger_form = 1;
	$this->show_funct_sql_val = '1';
	$this->show_if_statements_form = '1';
	$this->show_custom_columns_form = '1';
	$this->funct_clean = '1';
	$this->show_safe_mode_form = '1';
	$return='';
		if ($this->if_statements==1) {
			$return .= '&lt;?php <br /><br />if ('.$this->if_condition.'('.$this->pgr($this->first_fields).')) { <br /><br />';
		} else {
			$return .= '&lt;?php <br /><br />if ('.$this->if_condition.'('.$this->pgr($this->first_fields).')) { <br /><br />';
		}
		$return .= $this->connect_long().'<br />';
		$return .= $this->funct_sql_val().'<br />';
		$return .= $this->funct_clean().'<br />';
		$return .= $this->funct_reverb().'<br />';
		$return .= $this->funct_print_x().'<br />';
		$x	  = 0;
		foreach ($this->fields as $key => $val) {
			$return .= '<br />$' . $val . ' = '.$this->if_condition.'('.$this->pgr($val).') ? clean('.$this->pgr($val).', "' . $this->types[$x] . '") : "";';
			$x++;
		}
		$return .= '<br /><br />';
		$return .= $this->insert_long();
		if ($this->if_statements==1) {
			$return .= '<br />} //end '.$this->if_condition.' '.$this->pgr($this->first_fields).'<br />';
		} else {
			$return .= '<br />} //end '.$this->if_condition.' '.$this->pgr($this->first_fields).'<br />';
		}
		$return .= '?><br />';
		$return .= '<br /><br /><span class="bx nb">&lt;!-- #### Start #### Page #### Display #### --></span><br /><br />';
		$return .= $this->head();
		if ($this->safe_mode == "1") $return .= $this->warn_safe_mode();
		$return .= '&lt;section class="form_container"><br />';

		$return .= '&lt;form action="" method="'.trim($this->pgr, '_').'" id="<span class="bx cz">' . $this->myTable . '</span>" name="<span class="bx cz">' . $this->myTable . '</span>"';
		if (array_intersect($this->fields, $this->html_file)) {
			$return .= ' enctype="multipart/form-data" ';
		}
		$return .= ' ><br />&lt;fieldset><br />&lt;legend> ' . $this->label_name($this->myTable) . ' &lt;/legend>';
		$x = 0;
		foreach ($this->fields as $key => $val) {
			if (($val == "email") || ($this->in_arrayi($val, $this->html5_email))) {
				$return .= '<br />&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">email</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" pattern="[^ @]*@[^ @]*" placeholder="Enter an email address" /><br />';
			} else if (($val == "url") || ($this->in_arrayi($val, $this->html5_url))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">url</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" pattern="https?://.+" placeholder="Enter a web address" /><br />';
			} else if (($val == "tel") || ($this->in_arrayi($val, $this->html5_tel))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">tel</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" placeholder="Enter a Phone Number" /><br />';
			} else if (($val == "password") || ($this->in_arrayi($val, $this->html5_pass))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">password</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "number") || ($this->get_type($this->types[$x]) == "int") || ($this->in_arrayi($val, $this->html5_number))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">number</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" min="" max="" step="" /><br />';
			} else if (($val == "range") || ($this->in_arrayi($val, $this->html5_range))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">range</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" min="" max="" /><br />';
			} else if (($val == "date") || ($this->in_arrayi($val, $this->html5_date))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">date</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "month") || ($this->in_arrayi($val, $this->html5_month))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">month</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "week") || ($this->in_arrayi($val, $this->html5_week))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">week</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "time") || ($this->in_arrayi($val, $this->html5_time))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">time</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "datetime") || ($this->in_arrayi($val, $this->html5_datetime))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">datetime</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "datetime-local") || ($this->in_arrayi($val, $this->html5_datetime_local))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">datetime-local</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "color") || ($this->in_arrayi($val, $this->html5_color))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">color</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($this->types[$x] == "text") || ($this->types[$x] == "mediumtext") || ($this->types[$x] == "longtext") || ($this->types[$x] == "blob") || ($this->types[$x] == "mediumblob") || ($this->types[$x] == "longblob") || ($this->in_arrayi($val, $this->html5_textarea))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;<span class="bx hi">textarea</span> class="" id="' . $val . '" name="' . $val . '"  rows="" cols="" >&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>&lt;/textarea><br />';
			} else if (($val == "file") || ($this->in_arrayi($val, $this->html_file))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">file</span>" value="" class="" id="' . $val . '" name="' . $val . '" /><br />';
			} else {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="text" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			}
			$x++;
		}
		$return .= '<br />&lt;input type="submit" value="Submit" /><br />&lt;/fieldset><br />&lt;/form><br />';

		$return .= $this->foot();
	$search = array("&nbsp;", "&lt;", ">", '<span class="bx hi">', "</span>", "<br />", "[tab]", '<span class="bx cz">');
	$replace = array("", "<", ">", "", "", "", "", "");
	$contents = str_replace($search,$replace,$return);
	//file_put_contents("dbcg_temp.php",$contents);
		return $this->tabulate($return);
	}

	function full_page_update() {
	$this->show_pgr_form = 1;
	$this->show_trigger_form = 1;
	$this->show_funct_sql_val = '1';
	$this->show_if_statements_form = '1';
	$this->show_custom_columns_form = '1';
	$this->funct_clean = '1';
	$this->show_safe_mode_form = '1';
	$this->show_secondary_form = 1;

	$return='&lt;?php <br /><br />';
		$return .= $this->connect_long().'<br />';
		$return .= $this->funct_sql_val().'<br />';
		$return .= $this->funct_clean().'<br />';
		$return .= $this->funct_reverb().'<br />';
		$return .= $this->funct_print_x().'<br />';
		if ($this->if_statements==1) {
			$return .= '<br />if ('.$this->if_condition.'('.$this->pgr($this->first_fields).')) { <br /><br />';
		} else {
			$return .= '<br />if ('.$this->if_condition.'('.$this->pgr($this->first_fields).')) { <br /><br />';
		}
		$x	  = 0;
		foreach ($this->fields as $key => $val) {
			$return .= '<br />$' . $val . ' = '.$this->if_condition.'('.$this->pgr($val).') ? clean('.$this->pgr($val).', "' . $this->types[$x] . '") : "";';
			$x++;
		}
		$return .= '<br /><br />';
		$return .= $this->update_long();
		if ($this->if_statements==1) {
			$return .= '<br />} //end '.$this->if_condition.' '.$this->pgr($this->first_fields).'<br />';
		} else {
			$return .= '<br />} //end '.$this->if_condition.' '.$this->pgr($this->first_fields).'<br />';
		}
		$return .= '?><br />';
		$return .= '<br /><br /><span class="bx nb">&lt;!-- #### Start #### Page #### Display #### --></span><br /><br />';
		$return .= $this->head();
		if ($this->safe_mode == "1") $return .= $this->warn_safe_mode();
		$return .= '&lt;section class="form_container"><br />';


		$return .= $this->select_maker(1);


		$return .= '&lt;form action="" method="'.trim($this->pgr, '_').'" id="<span class="bx cz">' . $this->myTable . '</span>" name="<span class="bx cz">' . $this->myTable . '</span>"';
		if (array_intersect($this->fields, $this->html_file)) {
			$return .= ' enctype="multipart/form-data" ';
		}
		$return .= ' ><br />&lt;fieldset><br />&lt;legend> ' . $this->label_name($this->myTable) . ' &lt;/legend>';
		$x = 0;
		foreach ($this->fields as $key => $val) {
			if (($val == "email") || ($this->in_arrayi($val, $this->html5_email))) {
				$return .= '<br />&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">email</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" pattern="[^ @]*@[^ @]*" placeholder="Enter an email address" /><br />';
			} else if (($val == "url") || ($this->in_arrayi($val, $this->html5_url))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">url</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" pattern="https?://.+" placeholder="Enter a web address" /><br />';
			} else if (($val == "tel") || ($this->in_arrayi($val, $this->html5_tel))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">tel</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" placeholder="Enter a Phone Number" /><br />';
			} else if (($val == "password") || ($this->in_arrayi($val, $this->html5_pass))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">password</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "number") || ($this->get_type($this->types[$x]) == "int") || ($this->in_arrayi($val, $this->html5_number))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">number</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" min="" max="" step="" /><br />';
			} else if (($val == "range") || ($this->in_arrayi($val, $this->html5_range))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">range</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" min="" max="" /><br />';
			} else if (($val == "date") || ($this->in_arrayi($val, $this->html5_date))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">date</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "month") || ($this->in_arrayi($val, $this->html5_month))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">month</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "week") || ($this->in_arrayi($val, $this->html5_week))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">week</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "time") || ($this->in_arrayi($val, $this->html5_time))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">time</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "datetime") || ($this->in_arrayi($val, $this->html5_datetime))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">datetime</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "datetime-local") || ($this->in_arrayi($val, $this->html5_datetime_local))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">datetime-local</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "color") || ($this->in_arrayi($val, $this->html5_color))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">color</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($this->types[$x] == "text") || ($this->types[$x] == "mediumtext") || ($this->types[$x] == "longtext") || ($this->types[$x] == "blob") || ($this->types[$x] == "mediumblob") || ($this->types[$x] == "longblob") || ($this->in_arrayi($val, $this->html5_textarea))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;<span class="bx hi">textarea</span> class="" id="' . $val . '" name="' . $val . '"  rows="" cols="" >&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>&lt;/textarea><br />';
			} else if (($val == "file") || ($this->in_arrayi($val, $this->html_file))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">file</span>" value="" class="" id="' . $val . '" name="' . $val . '" /><br />';
			} else {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="text" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			}
			$x++;
		}
		$return .= '<br />&lt;input type="submit" value="Submit" /><br />&lt;/fieldset><br />&lt;/form><br />';
		$return .= '&lt;?php } ?><br />';
		$return .= $this->foot();
	$search = array("&nbsp;", "&lt;", ">", '<span class="bx hi">', "</span>", "<br />", "[tab]", '<span class="bx cz">');
	$replace = array("", "<", ">", "", "", "", "", "");
	$contents = str_replace($search,$replace,$return);
	//file_put_contents("dbcg_temp.php",$contents);
		return $this->tabulate($return);
		return $this->tabulate($return);
	}

	function full_page_insert_cmt() {
	$this->show_pgr_form = 1;
	$this->show_trigger_form = 1;
	$this->show_funct_sql_val = '1';
	$this->show_if_statements_form = '1';
	$this->show_custom_columns_form = '1';
	$this->funct_clean = '1';
	$this->show_safe_mode_form = '1';
	$return='';
		$return .= '<span class="bx hi">&lt;!-- First we need to invoke PHP  --></span><br />';
		$return .= '&lt;?php <br /><br />';
		$return .= '<span class="bx hi">/* &lt;!-- Before we start executing code, we need to make sure our variable is set. No since of executing code that we will not use until later. --> */</span><br />';
		if ($this->if_statements==1) {
			$return .= 'if ('.$this->if_condition.'('.$this->pgr($this->first_fields).')) { <br /><br />';
		} else {
			$return .= 'if ('.$this->if_condition.'('.$this->pgr($this->first_fields).')) { <br /><br />';
		}
		$return .= '<span class="bx hi">/* &lt;!-- If our variable is set continue  --> */</span><br />';
		$return .= '<span class="bx hi">/* &lt;!-- Establish a connection to the database  --> */</span><br />';
		$return .= $this->connect_long().'<br />';
		$return .= '<span class="bx hi">/* &lt;!-- Define our User/Custom functions  --> */</span><br />';
		$return .= '<span class="bx hi">/* &lt;!-- Adds single quotes to strings that we enter into the db - keeps our insert statements nice and clean.  --> */</span><br />';
		$return .= $this->funct_sql_val().'<br />';
		$return .= '<span class="bx hi">/* &lt;!-- Basic Sanitization - help prevent sql injections / hacks --> */</span><br />';
		$return .= $this->funct_clean().'<br />';
		$return .= '<span class="bx hi">/* &lt;!-- Strips slashes and converts special html characters to normal text so we can display it on the screen without jacking up our form. --> */</span><br />';
		$return .= $this->funct_reverb().'<br />';
		$return .= '<span class="bx hi">/* &lt;!-- Wraps print_r in &lt;pre&gt; tags - so it prints nicely on the screen. --> */</span><br />';
		$return .= $this->funct_print_x().'<br />';
		$x	  = 0;
		$return .= '<span class="bx hi">/* &lt;!-- Process our POST - turn the data submitted from the form into PHP variables  --> */</span><br />';
		$return .= '<span class="bx hi">/* &lt;!-- Never trust user input - clean the variables before we do anything else!!  --> */</span><br />';
		foreach ($this->fields as $key => $val) {
			$return .= '<br />$' . $val . ' = '.$this->if_condition.'('.$this->pgr($val).') ? clean('.$this->pgr($val).', "' . $this->types[$x] . '") : "";';
			$x++;
		}
		$return .= '<br /><br />';
		$return .= '<span class="bx hi">/* &lt;!-- Now that we have clean variables - lets prepair the insert statement so we can get them into the database.  --> */</span><br />';
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
	            $return .= '&nbsp;&nbsp;&nbsp;\'.sql_val($'.$val.').\'';
	            if ($val != $this->last_fields)
	                $return .= ',&nbsp;<br />';
	            else
	                $return .= '&nbsp;<br />';
	        }
	        $return .= ' )\'; ';
		$return .= '<br /><span class="bx hi">/* &lt;!-- The next comment lets you know if your in safe mode or not.  --> */</span><br />';
		if ($this->safe_mode == "1") { $return .= '<br /><span class="bx sm">/*&lt;!-- safe mode warning start -->*/</span><br />//'; } else { $return .= '<br /><span class="bx ns">/*&lt;!-- NOT in safe mode!! -->*/</span><br />'; }
		$return .= '<span class="bx hi">/* &lt;!-- Now we execute the insert statement  --> */</span><br />';
	        $return .= $this->db_result('3');
		if ($this->safe_mode != "1") { $return .= '<br />//'; } else { $return .= '<br />'; }
		$return .= '<span class="bx hi">/* &lt;!-- print_x helpful for debugging --> */</span><br />';
		$return .= '//print_x($query);';
		if ($this->safe_mode == "1") { $return .= '<br /><span class="bx sm">/*&lt;!-- safe mode warning end -->*/</span><br />'; } else { $return .= '<br /><span class="bx ns">/*&lt;!-- NOT in safe mode!! -->*/</span><br />'; }
		if ($this->if_statements==1) {
			$return .= '<br />} //end '.$this->if_condition.' '.$this->pgr($this->first_fields).'<br />';
		} else {
			$return .= '<br />} //end '.$this->if_condition.' '.$this->pgr($this->first_fields).'<br />';
		}
		$return .= '<span class="bx hi">/* &lt;!-- We are done with PHP so lets shut it down. --> */</span><br />';
		$return .= '?><br />';
		$return .= '<br /><br /><span class="bx hi">&lt;!-- Now that PHP is over with, lets get on with the HTML --></span><br />';
		$return .= '<br /><br /><span class="bx nb">&lt;!-- #### Start #### Page #### Display #### --></span><br /><br />';
		$return .= '<br /><span class="bx hi">&lt;!-- Standard HTML heading --></span><br />';
		$return .= $this->head();
		if ($this->safe_mode == "1") $return .= $this->warn_safe_mode();
		$return .= '&lt;section class="form_container"><br />';
		$return .= '<br /><span class="bx hi">&lt;!-- And here is our form --></span><br />';
		$return .= '&lt;form action="" method="'.trim($this->pgr, '_').'" id="<span class="bx cz">' . $this->myTable . '</span>" name="<span class="bx cz">' . $this->myTable . '</span>"';
		if (array_intersect($this->fields, $this->html_file)) {
			$return .= ' enctype="multipart/form-data" ';
		}
		$return .= ' ><br />&lt;fieldset><br />&lt;legend> ' . $this->label_name($this->myTable) . ' &lt;/legend>';
		$x = 0;
		foreach ($this->fields as $key => $val) {
			if (($val == "email") || ($this->in_arrayi($val, $this->html5_email))) {
				$return .= '<br />&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">email</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" pattern="[^ @]*@[^ @]*" placeholder="Enter an email address" /><br />';
			} else if (($val == "url") || ($this->in_arrayi($val, $this->html5_url))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">url</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" pattern="https?://.+" placeholder="Enter a web address" /><br />';
			} else if (($val == "tel") || ($this->in_arrayi($val, $this->html5_tel))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">tel</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" placeholder="Enter a Phone Number" /><br />';
			} else if (($val == "password") || ($this->in_arrayi($val, $this->html5_pass))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">password</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "number") || ($this->get_type($this->types[$x]) == "int") || ($this->in_arrayi($val, $this->html5_number))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">number</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" min="" max="" step="" /><br />';
			} else if (($val == "range") || ($this->in_arrayi($val, $this->html5_range))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">range</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" min="" max="" /><br />';
			} else if (($val == "date") || ($this->in_arrayi($val, $this->html5_date))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">date</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "month") || ($this->in_arrayi($val, $this->html5_month))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">month</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "week") || ($this->in_arrayi($val, $this->html5_week))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">week</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "time") || ($this->in_arrayi($val, $this->html5_time))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">time</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "datetime") || ($this->in_arrayi($val, $this->html5_datetime))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">datetime</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "datetime-local") || ($this->in_arrayi($val, $this->html5_datetime_local))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">datetime-local</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "color") || ($this->in_arrayi($val, $this->html5_color))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">color</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($this->types[$x] == "text") || ($this->types[$x] == "mediumtext") || ($this->types[$x] == "longtext") || ($this->types[$x] == "blob") || ($this->types[$x] == "mediumblob") || ($this->types[$x] == "longblob") || ($this->in_arrayi($val, $this->html5_textarea))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;<span class="bx hi">textarea</span> class="" id="' . $val . '" name="' . $val . '"  rows="" cols="" >&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>&lt;/textarea><br />';
			} else if (($val == "file") || ($this->in_arrayi($val, $this->html_file))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">file</span>" value="" class="" id="' . $val . '" name="' . $val . '" /><br />';
			} else {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="text" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo reverb($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			}
			$x++;
		}
		$return .= '<br />&lt;input type="submit" value="Submit" /><br />&lt;/fieldset><br />&lt;/form><br />';
		$return .= '<br /><span class="bx hi">&lt;!-- Wrap it up with the footer --></span><br />';
		$return .= $this->foot();
	$return .= '<br /><span class="bx hi">&lt;!-- And Done!! --></span><br />';
	$search = array("&nbsp;", "&lt;", ">", '<span class="bx hi">', "</span>", "<br />", "[tab]", '<span class="bx cz">');
	$replace = array("", "<", ">", "", "", "", "", "");
	$contents = str_replace($search,$replace,$return);
	//file_put_contents("dbcg_temp.php",$contents);
		return $this->tabulate($return);
	}






































	function connect_long() {
		$return = '
			$myServer = "' . $this->myServer . '";<br />
			$myUser   = "' . $this->myUser . '";<br />
			$myPass   = "' . $this->myPass . '";<br />
			$myDB	 = "' . $this->myDB . '";<br />
			$dbconnect = mysqli_connect($myServer, $myUser, $myPass, $myDB);<br />
			if (mysqli_connect_errno()) {
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
		';
		return $this->tabulate($return);
	}

	function insert_long() {
		$return='';
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
	            $return .= '&nbsp;&nbsp;&nbsp;\'.sql_val($'.$val.').\'';
	            if ($val != $this->last_fields)
	                $return .= ',&nbsp;<br />';
	            else
	                $return .= '&nbsp;<br />';
	        }
	        $return .= ' )\'; ';

		if ($this->safe_mode == "1") { $return .= '<br /><span class="bx sm">/*&lt;!-- safe mode warning start -->*/</span><br />//'; } else { $return .= '<br /><span class="bx ns">/*&lt;!-- NOT in safe mode!! -->*/</span><br />'; }
	        $return .= $this->db_result('3');
		if ($this->safe_mode != "1") { $return .= '<br />//'; } else { $return .= '<br />'; }
			$return .= 'print_x($query);';
		if ($this->safe_mode == "1") { $return .= '<br /><span class="bx sm">/*&lt;!-- safe mode warning end -->*/</span><br />'; } else { $return .= '<br /><span class="bx ns">/*&lt;!-- NOT in safe mode!! -->*/</span><br />'; }
	    return $this->tabulate($return);
	}
	function update_long() {
		$return = '';
		$return .= '$query = \'UPDATE ' . $this->myTable . ' SET ';
		foreach ($this->fields as $key => $val) {
			$return .= '<br />[tab]';
			if ($this->if_statements==1) $return .= '[tab]';
			$return .= '`' . $val . '` = \'.sql_val($'.$val.').\'';
			if ($val != $this->last_fields)
				$return .= ',&nbsp;';
			else
				$return .= '&nbsp;';
		}
		$return .= '<br />[tab]WHERE `' . $this->first_fields . '` = \'.sql_val($'.$this->first_fields.');<br />';

		if ($this->safe_mode == "1") { $return .= '<br /><span class="bx sm">/*&lt;!-- safe mode warning start -->*/</span><br />//'; } else { $return .= '<br /><span class="bx ns">/*&lt;!-- NOT in safe mode!! -->*/</span><br />'; }
	        $return .= $this->db_result('3');
		if ($this->safe_mode != "1") { $return .= '<br />//'; } else { $return .= '<br />'; }
			$return .= 'print_x($query);';
		if ($this->safe_mode == "1") { $return .= '<br /><span class="bx sm">/*&lt;!-- safe mode warning end -->*/</span><br />'; } else { $return .= '<br /><span class="bx ns">/*&lt;!-- NOT in safe mode!! -->*/</span><br />'; }


	return $this->tabulate($return);
	}

	function select_one() {
	$return='';
			if ($this->if_statements==1) $return .= 'if ('.$this->if_condition.'('.$this->pgr($this->first_fields).')) { <br />[tab]';
			if ($this->return_array=='array') $return .= '<br />[tab][tab]$' . $this->myTable . '=array();';
	        $return .= '$query = \'SELECT * FROM ' . $this->myTable . ' WHERE `' . $this->first_fields . '` = \'.sql_val($'.$this->first_fields.');';
	        $return .= '<br />[tab]' . $this->db_result();
			$return .= '<br />[tab]$row = mysqli_fetch_array($result);';
			$return .= $this->iterate_fields();
			if ($this->if_statements==1) $return .= '<br />} //end '.$this->if_condition.' '.$this->pgr($this->first_fields);
		return $this->tabulate($return);
	}

function head($alt="") {
	$return = '
	&lt;!DOCTYPE HTML><br />
	&lt;html><br />
	&lt;head><br />
	&lt;meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><br />
	&lt;title>' . ucwords(str_replace("_", " ", $this->myTable)) . ' Form&lt;/title><br />
	&lt;meta name="keywords" content="<span class="bx cz">#customize#</span>" /><br />
	&lt;meta name="description" content="<span class="bx cz">#customize#</span>" /><br />
	&lt;link rel="stylesheet" href="<span class="bx cz">#customize#</span>" type="text/css" /><br />
	&lt;link rel="icon" href="<span class="bx cz">#customize#</span>" type="image/x-icon" /><br />
	&lt;!--[if gte IE 7]>&lt;link rel="stylesheet" type="text/css" href="<span class="bx cz">#customize#</span>" media="screen, projection" />&lt;![endif]--><br />
	&lt;!--[if IE 6]>&lt;link rel="stylesheet" type="text/css" href="http://universal-ie6-css.googlecode.com/files/ie6.0.3.css" media="screen, projection" />&lt;![endif]--><br />
	&lt;style type="text/css"><br />
	.db_success { background-color: #91CB00; border: 1px solid #91CB00; border-radius: 5px; box-shadow: 1px 1px 0 #fff inset, -1px -1px 0 #fff inset; color: #F9F9F9; display: inline-block; margin: 10px 0; padding: 10px; }<br />
	.db_success b  { background-color: #F9F9F9; border: 1px solid #F9F9F9; border-radius: 5px; box-shadow: 1px 1px 0 #91CB00 inset, -1px -1px 0 #91CB00 inset; color: #91CB00; display: inline-block; margin: 2px 0; padding: 2px; }<br />
	.db_error   { background-color: #C91F2C; border: 1px solid #C91F2C; border-radius: 5px; box-shadow: 1px 1px 0 #fff inset, -1px -1px 0 #fff inset; color: #F9F9F9; display: inline-block; margin: 10px 0; padding: 10px; }<br />
	.db_error b b,.db_error b  { background-color: #f6f6f6; border: 1px solid #f6f6f6; border-radius: 5px; box-shadow: 1px 1px 0 #C91F2C inset, -1px -1px 0 #C91F2C inset; color: #C91F2C; display: inline-block; margin: 2px 0; padding: 2px; }<br />
	pre { background-color: #999; border: 1px solid #999; border-radius: 5px; box-shadow: 1px 1px 0 #fff inset, -1px -1px 0 #fff inset; color: #F9F9F9; display: inline-block; margin: 10px 0; padding: 10px; text-align:left;}<br />
	pre b { background-color: #F9F9F9; border: 1px solid #F9F9F9; border-radius: 5px; box-shadow: 1px 1px 0 #999 inset, -1px -1px 0 #999 inset; color: #999; display: inline-block; margin: 2px 0; padding: 2px; }<br />
	.safe_mode_warning p { background-color:#C91F2C; color: #F9F9F9; display: block; margin: 2px 0; padding: 2px; box-shadow: 1px 1px 0 white inset,-1px -1px 0 white inset; border-radius: 5px; border: 1px solid #C91F2C; }
	&lt;/style><br />';

if ($alt=="jquery") {
	$return .= $this->jquery();
	$return .= '
	&lt;script type="text/javascript"><br />
	[tab]$(document).ready(function() {<br />
	[tab][tab]$("#<span class="bx cz">'.$this->myTable.'</span>").submit(function() {<br />
	[tab][tab][tab]var str = $(this).serialize();<br />
	[tab][tab][tab]$.ajax({<br />
	[tab][tab][tab][tab]type: "POST",<br />
	[tab][tab][tab][tab]url: "<span class="bx cz">'.$_SESSION['ajax_file'].'</span>",<br />
	[tab][tab][tab][tab]data: str,<br />
	[tab][tab][tab][tab]success: function(msg) {<br />
	[tab][tab][tab][tab][tab]$("#db_message").ajaxComplete(function(event, request, settings) {<br />
	[tab][tab][tab][tab][tab][tab]$(this).replaceWith(msg);  //replaces contents<br />
	[tab][tab][tab][tab][tab]});<br />
	[tab][tab][tab][tab]}<br />
	[tab][tab][tab]});<br />
	[tab][tab][tab]return false;<br />
	[tab][tab]});<br />
	[tab]});<br />
	&lt;/script><br /><br />
	';
}


	$return .= '
	&lt;/head><br />
	&lt;body id="' . $this->myTable . '_form"><br />';
if ($alt=="jquery") {
	$return .= '
	&lt;section class="db_message" id="db_message"><br />
	<span class="bx nb">&lt!-- your ajax message will appear here --></span><br />
	&lt;/section><br />';
} else {
	$return .= '
	&lt;section class="db_message"><br />
	&lt;?php if ('.$this->if_condition.'($db_message)) echo $db_message; ?><br />
	&lt;/section><br />';
}
	$return .= '
	&lt;header><br />
	&lt;nav><br />
	&lt;!-- <span class="bx cz">#customize#</span> --><br />
	&lt;/nav><br />
	&lt;/header><br />
	';
	return $return;
}

function foot() {
	$return = '&lt;/section><br />
	&lt;footer class="container"><br />
	&amp;copy;&lt;?php date_default_timezone_set(\'America/Chicago\'); echo date("Y"); ?> '.ucwords(str_replace("_", " ", $this->myTable)).' Form  &lt;!-- <span class="bx cz">#customize#</span> --><br />
	&lt;/footer><br />
	&lt;/body><br />
	&lt;/html><br />';
return $return;
}

function warn_safe_mode() {
	$return = '<span class="bx sm">&lt;!-- safe mode warning start --></span><br />
	&lt;section class="safe_mode_warning"><br />&lt;hr />
	&lt;p>This will NOT insert into the database until you edit the code!!&lt;br /> Search for "print_x($query)" in the code.&lt;br />
	A line above it you will see that "//$result" is commented out.&lt;br /> Remove the comment from the $result and place them in front of print_x($query);&lt;br />
	&lt;br /> It should now look like:&lt;br /> $result ...&lt;br /> //print_x($query);&lt;br /> &lt;br /> Once that is done, your form will save the data to the database!
	While you\'re editing the code, delete this paragraph. &lt;/p> &lt;hr /><br />
	&lt;/section><br />
	<span class="bx sm">&lt;!-- safe mode warning end --></span><br />';
return $return;
}










function select_maker($alt = "") {

if (empty($alt)) {
	$return = '<br />echo \'&lt;select id="" name="select" class="">\';';
	$return .= '<br />echo \'&lt;option value="">&lt;!-- Blank -->&lt;/option>\';';
	$return .= '<br />$query = \'SELECT `<span class="bx cz">' . $this->first_fields . '</span>`, `<span class="bx cz">' . $this->second_fields . '</span>` FROM ' . $this->myTable . '\';';
	$return .= '<br />$result = mysqli_query($link, $query) or die(\'&lt;p class="db_error">&lt;b>A fatal MySQL error occured&lt;/b>&lt;br />Query: \'.$query.\'&lt;br />Error: (\'.mysqli_errno().\') \'.mysqli_error().\'&lt;/p>\');';
	$return .= '<br />while ($row = mysqli_fetch_assoc($result)) { ';
	$return .= '<br />&nbsp;&nbsp;echo \'&lt;option value="\'.$row[\'<span class="bx cz">' . $this->first_fields . '</span>\'].\'">\'.$row[\'<span class="bx cz">' . $this->second_fields . '</span>\'].\'&lt;/option>\';';
	$return .= '<br />}//end while';
	$return .= '<br />echo \'&lt;/select>\';';
} else {
	$return = '&lt;?php if (!isset($'.$this->pgr.'[\'select\'])) { ';
	$return .= '<br />echo \'&lt;form action="" method="POST" id="' . $this->myTable . '_selector" name="' . $this->myTable . '_selector" >\';';
	$return .= '<br />echo \'&lt;fieldset>\';';
	$return .= '<br />echo \'&lt;legend> ' . $this->label_name($this->myTable) . ' &lt;/legend>\';';
	$return .= '<br />echo \'&lt;select id="" name="select" class="">\';';
	$return .= '<br />echo \'&lt;option value="">&lt;!-- Blank -->&lt;/option>\';';
	$return .= '<br />$query = \'SELECT `<span class="bx cz">' . $this->first_fields . '</span>`, `<span class="bx cz">' . $this->second_fields . '</span>` FROM ' . $this->myTable . '\';';
	$return .= '<br />$result = mysqli_query($link, $query) or die(\'&lt;p class="db_error">&lt;b>A fatal MySQL error occurred while trying to save &lt;b>\'.reverb($'.$this->pgr.'[\'' . $this->first_fields . '\']).\'&lt;/b> to the database.&lt;/b>&lt;br />Query: \'.$query.\'&lt;br />Error: (\'.mysqli_errno().\') \'.mysqli_error().\'&lt;/p>\');';
	$return .= '<br />while ($row = mysqli_fetch_assoc($result)) { ';
	$return .= '<br />&nbsp;&nbsp;echo \'&lt;option value="\'.$row[\'<span class="bx cz">' . $this->first_fields . '</span>\'].\'">\'.$row[\'<span class="bx cz">' . $this->second_fields . '</span>\'].\'&lt;/option>\';';
	$return .= '<br />}//end while';
	$return .= '<br />echo \'&lt;/select>\';';
	$return .= '<br />echo \'&lt;input type="submit" value="Submit" />\';';
	$return .= '<br />echo \'&lt;/fieldset>\';';
	$return .= '<br />echo \'&lt;/form>\';';
	$return .= '<br />}//end if not isset';
	$return .= '<br />if (isset($'.$this->pgr.'[\'select\'])) {';
	$return .= '<br />     $query = \'SELECT * FROM ' . $this->myTable . ' WHERE `' . $this->first_fields . '` = \'.sql_val($'.$this->pgr.'[\'select\']);';
	$return .= '<br />     $result = mysqli_query($link, $query) or $db_message = \'&lt;p class="db_error">&lt;b>A fatal MySQL error occurred while trying to save &lt;b>\'.reverb($'.$this->pgr.'[\'' . $this->first_fields . '\']).\'&lt;/b> to the database.&lt;/b>&lt;br />Query: \'.$query.\'&lt;br />Error: (\'.mysqli_errno().\') \'.mysqli_error().\'&lt;/p>\';';
	$return .= '<br />     if ($result) $db_message = \'&lt;p class="db_success">Successfully saved &lt;b>' . $this->first_fields . ' : \'.reverb($'.$this->pgr.'[\'' . $this->first_fields . '\']).\'&lt;/b> to the database!!&lt;/p>\';';
	$return .= '<br />     $result = mysqli_fetch_array($result);';
	foreach ($this->fields as $key => $val) {
		$return .= '<br />[tab][tab]if ('.$this->if_condition.'($result[\'' . $val . '\'])) $' . $val . ' = $result[\'' . $val . '\']; else $' . $val . ' = "";';
	}
	$return .= '<br />?>';
}
return $return;
} //end functions

    function __destruct() {
    }//end __destruct
}//end class