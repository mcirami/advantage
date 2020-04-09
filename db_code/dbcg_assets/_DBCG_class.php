<?php
$version = '20170130.1718';
class DBCG extends class_helpers {
     public $myServer;
     public $myUser;
     public $myPass;
     public $myDB;

        public $tooltip='';

        public $show_funct_print_x;
        public $show_funct_reverb;
        public $show_funct_clean;
        public $show_funct_sql_val;

		public $show_compact_button;
		public $show_pgr_form;
        public $show_query_form;
		public $show_trigger_form;
		public $show_custom_columns_form;
		public $show_pdo_fetch_form;
		public $show_secondary_form;
		public $show_dup_column_form;
		public $show_jquery_version_form;
		public $show_safe_mode_form;
		public $show_ajax_file_form;
		public $show_pdo_fetchers_form;
		public $show_if_statements_form;
		public $show_return_array_form;

		public $show_return_ternary;
		public $show_return_function;

        public $pdo_fetchers = array();
        public $if_statements;
        public $return_array;

        public $custom_columns;
        public $html5_color;
        public $html5_date;
        public $html5_datetime;
        public $html5_datetime_local;
        public $html5_email;
        public $html5_month;
        public $html5_number;
        public $html5_pass;
        public $html5_range;
        public $html5_tel;
        public $html5_textarea;
        public $html5_time;
        public $html5_url;
        public $html5_week;
        public $html_file;
        public $html_pass;
        public $html_readonly;
        public $html_textarea;

        public $jquery_jquery;
        public $jquery_google;
        public $jquery_micro;
        public $jquery_local;
        public $jquery_ui_jquery;
        public $jquery_ui_google;
        public $jquery_ui_micro;
        public $jquery_ui_local;
        public $jquery_version;
        public $jquery_min='';

        public $fields = array();
        public $types = array();
        public $tables = array();
        public $primary_key;
        public $first_fields;
        public $second_fields;
        public $first_types;
        public $last_fields;
        public $last_types;
        public $format_result;
        public $results_format;

        public $show_sql;
        public $show_clean;
        public $show_reverb;
        public $show_print_x;
        public $return;
        public $safe_mode;
        public $show_preview_button;
        public $list_tables = array();

        public $type;
        public $pgr;
        public $if_condition;
        public $title;

        public $lang;
        public $language;
        public $statistics = array();

	function __construct() {

	    include 'dbcg_assets/_config.php';
	    include 'dbcg_assets/lang/db_code_gen_'.$language.'.php';
	    $this->language     = $language;
	    $this->lang     = $lang;
	    $this->myServer = !empty($_SESSION['myServer']) ? $_SESSION['myServer'] : '';
	    $this->myUser   = !empty($_SESSION['myUser']) ? $_SESSION['myUser'] : '';
	    $this->myPass   = !empty($_SESSION['myPass']) ? $_SESSION['myPass'] : '';
	    $this->myDB     = !empty($_SESSION['myDB']) ? $_SESSION['myDB'] : '';
	    $this->myTable  = !empty($_SESSION['myTable']) ? $_SESSION['myTable'] : '';

	    $this->cache          = $cache;
   	    $this->space          = $space;
	    $this->tooltip        = $tooltip;
	    $this->results_format = 2;

	    $this->compact       = !empty($_SESSION['compact']) ? $_SESSION['compact'] : '';
	    $this->pgr           = !empty($_SESSION['pgr']) ? $_SESSION['pgr'] : '_POST';
		$this->query         = !empty($_SESSION['query']) ? $_SESSION['query'] : '1';
	    $this->if_statements = isset($_SESSION['if_statements']) ? $_SESSION['if_statements'] : '';
	    $this->if_condition  = !empty($_SESSION['if_condition']) ? $_SESSION['if_condition'] : '';
	    $this->return_array  = !empty($_SESSION['return_array']) ? $_SESSION['return_array'] : '';
	    $this->title         = !empty($_SESSION['title']) ? $_SESSION['title'] : '';

	    $this->first_fields  = !empty($_SESSION['first_fields']) ? $_SESSION['first_fields'] : '';
	    $this->second_fields = !empty($_SESSION['second_fields']) ? $_SESSION['second_fields'] : '';
	    $this->dup_column    = !empty($_SESSION['dup_column']) ? $_SESSION['dup_column'] : '';

	    $this->return_ternary  = !empty($_SESSION['return_ternary']) ? $_SESSION['return_ternary'] : '';
	    $this->return_function = !empty($_SESSION['return_function']) ? $_SESSION['return_function'] : '';

	    $this->safe_mode = isset($_SESSION['safe_mode']) ? $_SESSION['safe_mode'] : '';

	    $this->html5_email          = isset($html5_email) ? $html5_email : array();
	    $this->html5_url            = isset($html5_url) ? $html5_url : array();
	    $this->html5_tel            = isset($html5_tel) ? $html5_tel : array();
	    $this->html5_number         = isset($html5_number) ? $html5_number : array();
	    $this->html5_range          = isset($html5_range) ? $html5_range : array();
	    $this->html5_date           = isset($html5_date) ? $html5_date : array();
	    $this->html5_month          = isset($html5_month) ? $html5_month : array();
	    $this->html5_week           = isset($html5_week) ? $html5_week : array();
	    $this->html5_time           = isset($html5_time) ? $html5_time : array();
	    $this->html5_datetime       = isset($html5_datetime) ? $html5_datetime : array();
	    $this->html5_datetime_local = isset($html5_datetime_local) ? $html5_datetime_local : array();
	    $this->html5_color          = isset($html5_color) ? $html5_color : array();
	    $this->html5_textarea       = isset($html5_textarea) ? $html5_textarea : array();
	    $this->html5_pass           = isset($html5_pass) ? $html5_pass : array();
	    $this->html_file            = isset($html_file) ? $html_file : array();
	    $this->html_textarea        = isset($html_textarea) ? $html_textarea : array();
	    $this->html_pass            = isset($html_pass) ? $html_pass : array();
	    $this->html_readonly        = isset($html_readonly) ? $html_readonly : array();
	    $this->html_disabled        = isset($html_disabled) ? $html_disabled : array();
	    $this->pdo_fetchers         = isset($pdo_fetchers) ? $pdo_fetchers : array();

	    $this->custom_columns = $_SESSION['custom_columns'];
	    if ($this->custom_columns != 1)
		   $this->html5_email = $this->html5_url = $this->html5_tel = $this->html5_number = $this->html5_range = $this->html5_date = $this->html5_month = $this->html5_week = $this->html5_time = $this->html5_datetime = $this->html5_datetime_local = $this->html5_color = $this->html5_textarea = $this->html5_pass = $this->html_file = $this->html_textarea = $this->html_pass = $this->html_readonly = $this->html_disabled = array();


	    $this->jquery_jquery    = isset($jquery_jquery) ? $jquery_jquery : '';
	    $this->jquery_google    = isset($jquery_google) ? $jquery_google : '';
	    $this->jquery_local     = isset($jquery_local) ? $jquery_local : '';
	    $this->jquery_ui_jquery = isset($jquery_ui_jquery) ? $jquery_ui_jquery : '';
	    $this->jquery_ui_google = isset($jquery_ui_google) ? $jquery_ui_google : '';
	    $this->jquery_ui_local  = isset($jquery_ui_local) ? $jquery_ui_local : '';

	    if (!empty($_SESSION['jquery_version'])) {
		   $this->jquery_jquery = $_SESSION['jquery_version'];
	    }
	    if (!empty($_SESSION['jquery_version'])) {
		   $this->jquery_google = $_SESSION['jquery_version'];
	    }
	    if (!empty($_SESSION['jquery_version'])) {
		   $this->jquery_micro = $_SESSION['jquery_version'];
	    }
	    if (!empty($_SESSION['jquery_version'])) {
		   $this->jquery_local = $_SESSION['jquery_version'];
	    }
	    if (!empty($_SESSION['jquery_version'])) {
		   $this->jquery_ui_jquery = $_SESSION['jquery_version'];
	    }
	    if (!empty($_SESSION['jquery_version'])) {
		   $this->jquery_ui_google = $_SESSION['jquery_version'];
	    }
	    if (!empty($_SESSION['jquery_version'])) {
		   $this->jquery_ui_micro = $_SESSION['jquery_version'];
	    }
	    if (!empty($_SESSION['jquery_version'])) {
		   $this->jquery_ui_local = $_SESSION['jquery_version'];
	    }

	    if (!empty($_SESSION['jquery_min'])) {
		   $this->jquery_min = $_SESSION['jquery_min'];
	    }

	    if (!empty($_SESSION['pdo_fetch'])) {
		   $this->pdo_fetch = $_SESSION['pdo_fetch'];
	    }

	} //end __construct

	function db_result($force = '', $i = '') {
        $i="i";
		if (!empty($i)) $mysqli = '$dbconnect, '; else $mysqli='';
	    if (empty($force)) $force = $this->query;
	    if ($force == "q") {
		   return '$result = mysql'.$i.'_query('.$mysqli.'$query);';
	    } else if ($force == "1") {
		   return '$result = mysql'.$i.'_query('.$mysqli.'$query) or die("'.$this->customize("Problems").'");';
	    } else if ($force == "2") {
		   return '$result = mysql'.$i.'_query('.$mysqli.'$query) or die("&lt;b>A fatal MySQL error occured&lt;/b>.&lt;br />Query: ".$query."&lt;br />Error: (".mysqli_errno().") ".mysqli_error());';
	    } else if ($force == "3") {
			$this->funct_reverb = '1';
			$return  = '$result = mysql'.$i.'_query('.$mysqli.'$query) or $db_message = \'&lt;p class="db_error">&lt;b>A fatal MySQL error occurred while trying to save &lt;b>\'.reverb($' . $this->pgr . '[\'' . $this->first_fields . '\']).\'&lt;/b> to the database.&lt;/b>&lt;br />Query: \'.$query.\'&lt;br />Error: (\'.mysqli_errno().\') \'.mysqli_error().\'&lt;/p>\';<br />';
			$return .= 'if ($result) $db_message = \'&lt;p class="db_success">Successfully saved &lt;b>' . $this->first_fields . ' : \'.reverb($' . $this->pgr . '[\'' . $this->first_fields . '\']).\'&lt;/b> to the database!!&lt;/p>\';<br />';
			$return .= 'else $db_message = \'&lt;p class="db_error">Error saving &lt;b>' . $this->first_fields . ' : \'.reverb($' . $this->pgr . '[\'' . $this->first_fields . '\']).\'&lt;/b> to the database!!&lt;/p>\';<br />';
			$return .= 'echo $db_message;';
			return $return;
	    }
	}

	function dbase_switch($log_in_sets) {

	    if (emtpy($log_in_sets))
		   $log_in_sets = $this->log_in_sets;

	    $return      = '<label>Select Table</label>';
	    $quick_login = (!empty($_SESSION['database']['quick_login'])) ? $_SESSION['database']['quick_login'] : '';
	    $return .= '<select name="quick_login" class="search"  onchange="this.form.submit();"><option><!-- Blank --></option>';
	    foreach ($log_in_sets as $key => $val) {
		   $return .= '<option value="' . $key . '" ' . $this->selected($key, $quick_login) . ' >' . $key . '</option>';
	    }
	    $return .= '</select>';

	    return $return;
	}

	function table_switch() {
	    $return = '<label>Select Database</label>';
	    $return .= '<select id="database" name="database" class="search" >';
	    $return .= '<option value="" ></option>';
	    foreach ($this->list_tables as $key => $val) {
		   $return .= '<option ';
		   if (isset($this->myTable))
			  $return .= $this->selected($this->myTable, $val);
		   $return .= ' value="' . $val . '" >' . $val;
	    } //end foreach
	    $return .= '</select>';
	    return $return;
	}

	function get_stats() {
        global $link;
	    $this->statistics['dbase'] = array(
		   'dbsize' => 0,
		   'ovhead' => 0,
		   'allrow' => 0,
		   'avgrow' => 0,
		   'allcol' => 0
	    );
	    $this->statistics['table'] = array(
		   'dbsize' => 0,
		   'ovhead' => 0,
		   'allrow' => 0,
		   'avgrow' => 0,
		   'allcol' => 0
	    );
	    $this->statistics['pcent'] = array(
		   'dbsize' => 0,
		   'ovhead' => 0,
		   'allrow' => 0,
		   'avgrow' => 0,
		   'allcol' => 0
	    );

	    foreach ($this->list_tables as $key => $val) {
		   $result2 = mysqli_query($link, 'SHOW TABLE STATUS WHERE `name` = "' . $val . '"');
		   while ($row2 = mysqli_fetch_array($result2)) {
			  $this->statistics['dbase']['dbsize'] += $row2["Data_length"] + $row2["Index_length"];
			  $this->statistics['dbase']['ovhead'] += $row2["Data_free"];
			  $this->statistics['dbase']['allrow'] += $row2["Rows"];
			  $this->statistics['dbase']['avgrow'] += $row2["Avg_row_length"];

			  if ($val == $this->myTable) {
				 $this->statistics['table']['dbsize'] += $row2["Data_length"] + $row2["Index_length"];
				 $this->statistics['table']['ovhead'] += $row2["Data_free"];
				 $this->statistics['table']['allrow'] += $row2["Rows"];
				 $this->statistics['table']['avgrow'] += $row2["Avg_row_length"];

			  }

		   }
		   $resultx = mysqli_query($link, 'DESCRIBE `' . $val . '`');
		   while ($rowx = mysqli_fetch_assoc($resultx)) {
			  $this->statistics['dbase']['allcol']++;
		   }
	    }

	    $this->statistics['table']['allcol'] = count($this->fields);

	    $this->statistics['pcent']['dbsize'] = $this->pcent($this->statistics['dbase']['dbsize'], $this->statistics['table']['dbsize'], '0');
	    $this->statistics['pcent']['ovhead'] = $this->pcent($this->statistics['dbase']['ovhead'], $this->statistics['table']['ovhead'], '0');
	    $this->statistics['pcent']['allrow'] = $this->pcent($this->statistics['dbase']['allrow'], $this->statistics['table']['allrow'], '0');
	    $this->statistics['pcent']['avgrow'] = $this->pcent($this->statistics['dbase']['avgrow'], $this->statistics['table']['avgrow'], '0');
	    $this->statistics['pcent']['allcol'] = $this->pcent($this->statistics['dbase']['allcol'], $this->statistics['table']['allcol'], '0');
	    return $this->statistics;
	}

	function a_n_only($string) {
	    return preg_replace('/[^\da-z]/i', '', $string);
	}

	function generate_menu() {

	    include 'lang/db_code_gen_'.$this->language.'.php';

	    if (file_exists('dbcg_assets/cache/_menu.php') && $this->cache) {
		   $return_menu = file_get_contents('dbcg_assets/cache/_menu.php');
	    } else {
		   $return_menu = '';

		   if (!function_exists('scandir')) {
			  $plugins = scandir('dbcg_assets/plugins');
		   } //end function not exists
		   else {
			  $plugins = array();
			  $dh      = opendir('dbcg_assets/plugins');
			  while (false !== ($filename = readdir($dh))) {
				 $plugins[] = $filename;
			  }
		   }
		   sort($plugins);
		   array_shift($plugins);
		   array_shift($plugins);

		   foreach ($plugins as $key => $dir) {
			  if (file_exists('dbcg_assets/plugins/' . $dir . '/menu.php'))
				 include 'dbcg_assets/plugins/' . $dir . '/menu.php';
			  rsort($menu);
		   }
		   foreach ($menu as $top => $parent) {
//			  $url = (isset($parent['class'])) ? trim($parent['class'] . '.' . $parent['method'], '.') : $parent['page'];
			  $url = (isset($parent['class'])) ? '?class='.trim($parent['class'] . '&method=' . $parent['method'], '.') : $parent['page'];
			  $return_menu .= '<a class="nav-header" rel="' . $this->tooltip . '" href="#' . strtolower($this->a_n_only($parent['name'])) . '" title="' . $parent['help'] . '"  data-toggle="collapse"><i class="' . $parent['image'] . '"></i>' . $parent['name'] . '<i class="icon-chevron-down"></i></a>' . "\r\n";
			  $return_menu .= '<ul id="' . strtolower($this->a_n_only($parent['name'])) . '" class="nav nav-list collapse">' . "\r\n"; //child level
			  foreach ($parent['mid'] as $x => $child) {
				 $return_menu .= '<li>' . "\r\n"; //child level
//				 $url = (isset($child['class'])) ? trim($child['class'] . '.' . $child['method'], '.') : $child['page'];
				 $url = (isset($child['class'])) ? '?class='.trim($child['class'] . '&method=' . $child['method'], '.') : $child['page'];
				 if (!isset($child['bottom'])) {
				    $url = (isset($child['class'])) ? '?class='.trim($child['class'] . '&method=' . $child['method'], '.') : $child['page'];
				 	$return_menu .= '<a  class="nav-header" rel="' . $this->tooltip . '" href="' . $url . '" title="' . $child['help'] . '"  >' . $child['name'] . '<i class="' . $child['image'] . '"></i></a>' . "\r\n";
				 } else {
				 	 $return_menu .= '<a class="nav-header" rel="' . $this->tooltip . '" href="#' . strtolower($this->a_n_only($parent['name']) . '_' . $this->a_n_only($child['name'])) . '" title="' . $child['help'] . '"  data-toggle="collapse"><i class="' . $child['image'] . '"></i>' . $child['name'] . '<i class="icon-chevron-down"></i></a>' . "\r\n";
					$return_menu .= '<ul id="' . strtolower($this->a_n_only($parent['name']) . '_' . $this->a_n_only($child['name'])) . '" class="nav nav-list collapse">' . "\r\n";
					foreach ($child['bottom'] as $k => $title) {
//					    $url = (isset($title['class'])) ? trim($title['class'] . '.' . $title['method'], '.') : $title['page'];
					    $url = (isset($title['class'])) ? '?class='.trim($title['class'] . '&method=' . $title['method'], '.') : $title['page'];
					    $return_menu .= '<li><a rel="' . $this->tooltip . '" href="' . $url . '" title="' . $title['help'] . '">' . $title['name'] . '<i class="' . $title['image'] . '"></i></a></li>' . "\r\n";
					} //end foreach child
					$return_menu .= '</ul>' . "\r\n";
				 }
				 $return_menu .= '</li>' . "\r\n";
			  } //end foreach parent
			  $return_menu .= '</ul>' . "\r\n";
		   } //end foreach menu
		   if ($this->cache)
			  file_put_contents('dbcg_assets/cache/_menu.php', $return_menu);
	    } //end not cached
	    return $return_menu;
	} //end generate_menu

	function customize($x) {
	    return '<span class="bx cz">' . $x . '</span>';
	} //end __destruct

	function attention($x) {
	    return '<span class="bx hi">' . $x . '</span>';
	} //end __destruct

	function information($x) {
	    return '<span class="bx nb">' . $x . '</span>';
	} //end __destruct

	function unsafe_mode($x) {
	    return '<span class="bx ns">' . $x . '</span>';
	} //end __destruct

	function safe_mode($x) {
	    return '<span class="bx sm">' . $x . '</span>';
	} //end __destruct

	function of_100($x) {
	    return (100 - $x);
	}
	function tabulate($x) {
		if ($this->space) return str_replace('[tab]', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', $x);
		else return str_replace('[tab]', "\t", $x);
	} //end __destruct

	function lister($alt = "") {
	    $return = "";
	    if (empty($alt)) {
		   foreach ($this->fields as $key => $val) {
			  $return .= '<br />' . $val;
		   }
	    } else {
		   foreach ($this->tables as $key => $val) {
			  $return .= '<br />' . $val;
		   }
	    }

	    return substr_replace($return, '', 0, 6);
	}

	function iterate_fields() {
	    $return = '';
	    foreach ($this->fields as $key => $val) {
		   if ($this->return_array == 'array')
			  $return .= '<br />[tab][tab]$' . $this->myTable . '[$row[\'' . $this->first_fields . '\']][\'' . $val . '\'] = $row[\'' . $val . '\'];';
		   else
			  $return .= '<br />[tab][tab]$' . $val . ' = $row[\'' . $val . '\'];';
	    }
	    return $this->tabulate($return);
	}

	function iterate_fields_table($func = '') {

	    if (empty($func))
		   $func = '<br />[tab]while ($row = mysqli_fetch_assoc($result)) { ';
	    $return = '<br />echo \'&lt;table>\';';

	    $return .= '<br />echo \'&lt;thead>&lt;tr>\';';
	    foreach ($this->fields as $key => $val) {
		   $return .= '<br />[tab][tab]echo "&lt;th>' . $val . '&lt;/th>";';
	    }
	    $return .= '<br />echo \'&lt;/tr>&lt;/thead>&lt;tbody>\';';

	    $return .= $func;
	    $return .= '<br />echo "&lt;tr>";';
	    foreach ($this->fields as $key => $val) {
		   $return .= '<br />[tab][tab]echo "&lt;td>".$row[\'' . $val . '\']."&lt;/td>";';
	    }
	    $return .= '<br />echo "&lt;/tr>";';
	    $return .= '<br />[tab]}//end while<br />';
	    $return .= 'echo \'&lt;/tbody>&lt;/table>\';<br />';
	    return $this->tabulate($return);
	}

	function pgr($value) {
		if ($this->pgr == "_POST" || $this->pgr == "_GET" || $this->pgr == "_REQUEST" || $this->pgr == "row" || $this->pgr == "val" )
		return '$'.$this->pgr.'[\''.$value.'\']';
		else
		return '$'.$value;
	}

	function if_condition($value) {
		if ($this->pgr == "isset" ) return 'isset('.$value.')';
		if ($this->pgr == "!empty" ) return '!empty('.$value.')';
		return $value;
	}

	function funct_sql_val() {
		$return = '
		if (!function_exists(\'sql_val\')) {<br />
		function sql_val( $input ) {<br />
		[tab]if ( get_magic_quotes_gpc() ) {<br />
		[tab][tab]$input = stripslashes( $input );<br />
		[tab]} //get_magic_quotes_gpc()<br />
		[tab]return ( "\'" . mysqli_real_escape_string($link,  $input ) . "\'" );<br />
		}<br />
		} //end function not exist<br />
		';
	return $this->tabulate($return);
	}

	function funct_clean() {
		$return = '
			if ( !function_exists( \'clean\' ) ) {<br />
			function clean( $input, $type="", $no_tags="" ) {<br />
			[tab]if ($no_tags != "") {<br />
			[tab][tab]$input = trim(strip_tags($input));<br />
			[tab]}<br />
			[tab]if ($type != "") {<br />
			[tab][tab]if (strlen(strstr($type,"("))>0) {<br />
			[tab][tab][tab]$split = explode("(", $type);<br />
			[tab][tab][tab]$type = $split[\'0\'];<br />
			[tab][tab][tab]$limit = str_replace(")", "", $split[\'1\']);<br />
			[tab][tab][tab][tab]if (is_numeric($limit)){<br />
			[tab][tab][tab][tab]if ( ($type == "int") && (!is_int($input)) ) {<br />
			[tab][tab][tab][tab][tab]$input = (int)substr($input, 0, $limit);<br />
			[tab][tab][tab][tab]} else {<br />
			[tab][tab][tab][tab][tab]$input = substr($input, 0, $limit);<br />
			[tab][tab][tab][tab]}<br />
			[tab][tab][tab][tab]}<br />
			[tab][tab]}<br />
			[tab]}<br />
			[tab]if ( get_magic_quotes_gpc() ) {<br />
			[tab][tab]$input = stripslashes( $input );<br />
			[tab]} <br />
			[tab]if ( @mysqli_ping() != "" ) {<br />
			[tab][tab]$input = mysqli_real_escape_string($link,  $input );<br />
			[tab]} else {<br />
			[tab][tab]$search = array("\\x00", "\\n", "\\r", "\\\", "\'", \'"\', "\\x1a");<br />
			[tab][tab]$replace = array("\\\x00", "\\\n", "\\\r", "\\\\\\\" ,"\\\'", \'\\"\', "\\\x1a");<br />
			[tab][tab]$input = str_replace($search, $replace, $input);<br />
			[tab]}<br />
			[tab]return $input;<br />
			} //end function<br />
			} //end function not exist<br />
		';
	return $this->tabulate($return);
	}

	function funct_reverb() {
		$return = '
		if (!function_exists(\'reverb\')) {<br />
		function reverb($value) {<br />
		[tab]return htmlspecialchars(stripslashes($value));<br />
		}<br />
		}//end functin not exists<br />
		';
	return $this->tabulate($return);
	}

	function funct_print_x() {
		$return = '
		if (!function_exists(\'print_x\')) {<br />
		function print_x($value) {<br />
		[tab]echo \'&lt;pre>\';<br />
		[tab]print_r($value);<br />
		[tab]echo \'&lt;/pre>\';<br />
		}<br />
		}//end functin not exists<br />
		';
	return $this->tabulate($return);
	}

	function show_functions() {
		$return=array();
        if ($this->show_funct_print_x) $return[] = $this->funct_print_x();
        if ($this->show_funct_reverb) $return[] = $this->funct_reverb();
        if ($this->show_funct_clean) $return[] = $this->funct_clean();
        if ($this->show_funct_sql_val) $return[] = $this->funct_sql_val();
	return $this->tabulate($return);
	}

	function pgr_form() {
		$return = '
				<legend class="tipper" data-gravity="e" title="'.$this->lang['method_tip'].'">'.$this->lang['method'].'</legend>
				<select class="span12" name="pgr" id="pgr" onchange="this.form.submit();">
					<option value="_POST" '.$this->selected($this->pgr, "_POST").'>'.$this->lang['post'].'</option>
					<option value="_GET" '.$this->selected($this->pgr, "_GET").'>'.$this->lang['get'].'</option>
					<option value="_REQUEST" '.$this->selected($this->pgr, "_REQUEST").'>'.$this->lang['request'].'</option>
					<option value="_RAW" '.$this->selected($this->pgr, "_RAW").'>Raw</option>
					<option value="row" '.$this->selected($this->pgr, "row").'>Row</option>
					<option value="val" '.$this->selected($this->pgr, "val").'>Val</option>
				</select>
		';
	return $this->tabulate($return);
	}

	function query_form() {
		$return = '
				<legend class="tipper" data-gravity="e" title="">Query Format</legend>
				<select class="span12" name="query" id="query" onchange="this.form.submit();">
					<option value="q" '.$this->selected($this->query, "q").'>Query</option>
					<option value="1" '.$this->selected($this->query, "1").'>Query Or Die</option>
					<option value="2" '.$this->selected($this->query, "2").'>Query Or Die Error</option>
					<option value="3" '.$this->selected($this->query, "3").'>Custom</option>
				</select>
		';
	return $this->tabulate($return);
	}

	function compact_button() {
		$return  = '<legend class="tipper" data-gravity="e" title="'.$this->lang['compact_tip'].'">Compact</legend>';
		if (isset($_GET['method']) && contains($_GET['method'], '_long') ) $return .= '<button class="btn btn-block btn-inverse" name="compact" id="compact" onclick="this.form.submit();" value="_short">Compact</button>';
		if (isset($_GET['method']) && contains($_GET['method'], '_short') )  $return .= '<button class="btn btn-block btn-inverse" name="compact" id="compact" onclick="this.form.submit();" value="_long">Expand</button>';
	return $this->tabulate($return);
	}

	function trigger_form() {
		$return = '
				<legend>'.$this->lang['trigger'].'</legend>
				<select class="span12" name="primary" onchange="this.form.submit();">
				'.$this->list_columns($this->fields, $this->first_fields).'
				</select>
		';
	return $this->tabulate($return);
	}

	function custom_columns_form() {
		$return = '
				<legend>'.$this->lang['custom_columns'].'</legend>
				<input type="checkbox" name="custom_columns" id="custom_columns" '.$this->checked($this->custom_columns, "1").' value="1" class="grid_1"  onchange="this.form.submit();" />
				<label for="custom_columns" class="checkbox inline">'.$this->lang['custom_columns_label'].'</label>
		';
	return $this->tabulate($return);
	}

	function pdo_fetch_form() {
		$return = '
				<legend>'.$this->lang['pdo_fetch'].'</legend>
				<select class="span12" name="pdo_fetch" onchange="this.form.submit();">
				<option value=""><!-- Select One --></option>
				';
				foreach($this->pdo_fetchers as $key=>$val) {
					$return .= '<option value="'.$val.'"  '.$this->selected($this->pdo_fetch, $val).'>'.$val.'</option>';
				}
		$return .= '</select>
		';

	return $this->tabulate($return);
	}

	function secondary_form() {
		$return = '
				<legend>Secondary Column [used for select]</legend>
				<select class="span12" name="secondary" onchange="this.form.submit();">'.$this->list_columns($this->fields, $this->second_fields).'</select>
		';
	return $this->tabulate($return);
	}

	function dup_column_form() {
		$return = '
				<legend>'.$this->lang['column_name'].'</legend>
					<select name="dup_column" onchange="this.form.submit();">'.$this->list_columns($this->fields, $this->dup_column).'</select>
		';
	return $this->tabulate($return);
	}

	function jquery_version_form() {
		$return = '
				<legend>'.$this->lang['jquery_version'].'</legend>
					<input class="span12" type="text" name="jquery_version" id="jquery_version" value="'.$this->jquery_version.'" onBlur="this.form.submit();" /><br />
					<label for="jquery_version" class="checkbox inline">'.$this->lang['developer_version'].':</label><input type="checkbox" name="jquery_min" id="jquery_min" '.$this->checked($this->jquery_min, "").' value=""  onchange="this.form.submit();" />
                    <label for="jquery_version" class="checkbox inline"><a href="http://code.jquery.com/jquery/" target="_blank">jQuery</a> | <a href="http://code.jquery.com/ui/" target="_blank">jQuery UI</a></label>
                    <datalist id="versions">
        ';

	return $this->tabulate($return);
	}

	function safe_mode_form() {

		if ($this->safe_mode) {
			$sm_warn = '<span class="bx sm"> '.$this->lang['safe_mode_en'].' </span>';
		} else {
			$sm_warn = '<span class="bx ns"> '.$this->lang['safe_mode_dis'].' </span>';
		}
		$return = '
				<legend>'.$this->lang['safe_mode'].'</legend>
					<input type="checkbox" name="safe_mode" id="safe_mode" '.$this->checked($this->safe_mode, "1").' value="1" onchange="this.form.submit();" />
					<label for="safe_mode" class="checkbox inline">'.$this->lang['safe_mode_label'].'</label>
					'.$sm_warn.'
				';
	return $this->tabulate($return);
	}

	function ajax_file_form() {
	if (!isset($this->ajax_file)) $this->ajax_file = '_ajax.php';
		$return = '
				<legend>'.$this->lang['ajax_file_name'].'</legend>
					<input class="span12" type="text" name="ajax_file" value="'.$this->ajax_file.'"  onchange="this.form.submit();" />
		';
	return $this->tabulate($return);
	}

	function if_statements_form() {
		$return = '
				<legend class="tipper" data-gravity="e" title="'.$this->lang['if_statements_tip'].'">'.$this->lang['if_statements'].'</legend>
					<label for="if_statements" class="checkbox inline">'.$this->lang['if_statements_label'].'<input type="checkbox" name="if_statements" id="if_statements" '.$this->checked($this->if_statements, "1").' value="1" onchange="this.form.submit();" /></label>

					<select class="span12" name="if_condition" id="if_condition" onchange="this.form.submit();">
						<option value="isset" '.$this->selected($this->if_condition, 'isset').'>Is Set</option>
						<option value="!isset" '.$this->selected($this->if_condition, '!isset').'> Not Is Set</option>
						<option value="empty" '.$this->selected($this->if_condition, 'empty').'>Empty</option>
						<option value="!empty" '.$this->selected($this->if_condition, '!empty').'>Not Empty</option>
						<option value="is_null" '.$this->selected($this->if_condition, 'is_null').'>Is Null</option>
						<option value="!is_null" '.$this->selected($this->if_condition, '!is_null').'>Not Null</option>
						<option value="" '.$this->selected($this->if_condition, '').'>Short Hand</option>
						<option value="!" '.$this->selected($this->if_condition, '!').'>Not Short Hand</option>
					</select>
		';
	return $this->tabulate($return);
	}

	function return_array_form() {
		$return = '
				<legend class="tipper" data-gravity="e" title="'.$this->lang['return_array_tip'].'">'.$this->lang['return_array'].'</legend>
					<select class="span12" name="return_array" id="return_array" onchange="this.form.submit();">
						<option value="normal" '.$this->selected($this->return_array, 'normal').'>Normal</option>
						<option value="array" '.$this->selected($this->return_array, 'array').'>As Array</option>
						<option value="table" '.$this->selected($this->return_array, 'table').'>In A Table</option>
					</select>
				';
	return $this->tabulate($return);
	}

	function return_ternary_form() {
		$return = '
				<legend class="tipper" data-gravity="e" title="'.$this->lang['return_array_tip'].'">'.$this->lang['return_array'].'</legend>
					<select class="span12" name="return_ternary" id="return_ternary" onchange="this.form.submit();">
						<option value="ternary" '.$this->selected($this->return_ternary, 'ternary').'>Ternary</option>
						<option value="normal" '.$this->selected($this->return_ternary, 'normal').'>Normal</option>
						<option value="long" '.$this->selected($this->return_ternary, 'long').'>Long Winded</option>
					</select>
				';
	return $this->tabulate($return);
	}

	function return_function_form() {
		$return = '
				<legend class="tipper" data-gravity="e" title="'.$this->lang['return_array_tip'].'">Custom Functions</legend>
					<select class="span12" name="return_function" id="return_function" onchange="this.form.submit();">
						<option value="" '.$this->selected($this->return_function, '').'>None</option>
						<option value="clean" '.$this->selected($this->return_function, 'clean').'>Clean</option>
						<option value="sql_val" '.$this->selected($this->return_function, 'sql_val').'>SQL_Val</option>
						<option value="key_val" '.$this->selected($this->return_function, 'key_val').'>Key_Val</option>
						<option value="reverb" '.$this->selected($this->return_function, 'reverb').'>Reverb</option>
					</select>
				';
	return $this->tabulate($return);
	}

	function show_options($append='') {
		$return=array();
		if ($this->show_pgr_form) $return[] = $this->pgr_form();
		if ($this->show_query_form) $return[] = $this->query_form();
		if ($this->show_trigger_form) $return[] = $this->trigger_form();
		if ($this->show_secondary_form) $return[] = $this->secondary_form();
		if ($this->show_pdo_fetch_form) $return[] = $this->pdo_fetch_form();
		if ($this->show_if_statements_form) $return[] = $this->if_statements_form();
		if ($this->show_custom_columns_form) $return[] = $this->custom_columns_form();
		if ($this->show_dup_column_form) $return[] = $this->dup_column_form();
		if ($this->show_jquery_version_form) $return[] = $this->jquery_version_form();
		if ($this->show_safe_mode_form) $return[] = $this->safe_mode_form();
		if ($this->show_ajax_file_form) $return[] = $this->ajax_file_form();
		if ($this->show_return_array_form) $return[] = $this->return_array_form();
		if ($this->show_return_ternary) $return[] = $this->return_ternary_form();
		if ($this->show_return_function) $return[] = $this->return_function_form();
		if ($this->show_compact_button) $return[] = $this->compact_button();
		if (!empty($append)) $return[] = $append;
	return $return;
	}

	function object2array($o2a) {
		if (is_object($o2a)) {
			$o2a = get_object_vars($o2a);
		}
		if (is_array($o2a)) {
			return array_map(__METHOD__, $o2a);
		} else {
			return $o2a;
		}
	}
	function print_x($value) {echo '<pre style="text-align:left;"><hr />';print_r($value);echo '</pre><hr />';}
	function sql_val($input) {global $link; if (get_magic_quotes_gpc()) {$input = stripslashes($input);}return ("'" . mysqli_real_escape_string($link, $input) . "'");}
	function sql_key($input) {global $link; if ( get_magic_quotes_gpc() ) { $input = stripslashes( $input ); } return ( "`" . mysqli_real_escape_string($link,  $input ) . "`" ); }
	function selected($selected, $current) {if ($selected == $current)return 'selected="selected"';}
	function checked($checked, $current) {if ($checked == $current)return 'checked="checked"';}
	function max_length($type) {preg_match('/\d+/', $type, $length); return !empty($length['0']) ? $length['0'] : '';}
	function label_name($name) {$name = str_replace("_", " ", $name);$name = ucwords($name);return $name;}
	function get_type($type) {if (strlen(strstr($type, "int")) > 0) return "int";if (strlen(strstr($type, "text")) > 0)return "text";}
	function in_arrayi($needle, $haystack) {for($h = 0 ; $h < count($haystack) ; $h++) {$haystack[$h] = strtolower($haystack[$h]);}return in_array(strtolower($needle),$haystack);}
	function encrypt($encode="") {if (!empty($encode)) return "_".trim(str_replace(array('+','/','='),array('-','_','#'),base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, "4+QAX2D=@xYUX*$^20Y)@CIVod8ZcHOJ", $encode."|".microtime(), MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND)))));}
	function decrypt($decode) {if (!empty($decode)) return current(explode("|", trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, "4+QAX2D=@xYUX*$^20Y)@CIVod8ZcHOJ", base64_decode(str_replace(array('-','_','#'),array('+','/','='), substr( $decode, 1 ))), MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND)))));}
	function get_limits($val) { global $html_readonly, $html_disabled; if ($this->in_arrayi($val, $this->html_readonly)) return 'readonly="readonly"'; else return ""; if ($this->in_arrayi($val, $this->html_disabled)) return 'disabled="disabled"'; else return ""; }
	function list_columns($fields, $selected="") { $return="<option> <!-- Blank --></option>"; foreach($fields as $key=>$val){ $return .= '<option value="'.$val.'" '.$this->selected($selected, $val).'>'.$val.'</option>'; } return $return; }
	function show_help($trigger, $lang) { return '<div class="box"><h2><a href="#" id="">'.$lang['information'].'</a></h2><div class="block" id=""><p>'.$lang['help_'.$trigger].'</p></div></div>'; }
	function contains($haystack,$needle) { if (strlen(strstr($haystack,$needle))>0) { return 1; } else { return 0; 	} } //end function

    function __destruct() {

    }//end __destruct
}//end class





class class_helpers {

    function __construct( ) {
    }//end __construct

	function fix_field($value) {
		return ucwords(str_replace('_',' ',$value));
	}//end delete

    private function clean_request($request) {
		if (isset($request['id']))  return array('id'=> $this->clean($request['id'], 'int(10)', 'strip_tags'), 'fd'=>'id');
		return;
	}//end get_client

    function get_date($date) {
		if ($date == 'date')     return $this->date;
		if ($date == 'date_now') return $this->date_now;
		if ($date == 'date_30')  return $this->date_30;
		if ($date == 'date_60')  return $this->date_60;
		if ($date == 'date_90')  return $this->date_90;
		if ($date == 'date_365') return $this->date_365;
	}//end get date

	function sql_val( $input ) {
	     if ( get_magic_quotes_gpc() ) {
	          $input = stripslashes( $input );
	     } //get_magic_quotes_gpc()
	     return ( "'" . mysqli_real_escape_string($link,  $input ) . "'" );
	}

    function sql_key( $input ) {
        if ( get_magic_quotes_gpc() ) {
            $input = stripslashes( $input );
        } //get_magic_quotes_gpc()
        return ( "`" . mysqli_real_escape_string($link,  $input ) . "`" );
    }

	function clean( $input, $type="", $no_tags="" ) {
		 $input = trim($input, ' ');
	     if ($no_tags != "") {
	          $input = trim(strip_tags($input));
	     }
	     if ($type != "") {
	          if (strlen(strstr($type,"("))>0) {
	               $split = explode("(", $type);
	               $type = $split['0'];
	               $limit = str_replace(")", "", $split['1']);
					if (is_numeric($limit)){
		               if ( ($type == "int") && (!is_int($input)) ) {
		                    $input = (int)substr($input, 0, $limit);
		               } else {
		                    $input = substr($input, 0, $limit);
		               }
					}
	          }
	     }
	     if ( get_magic_quotes_gpc() ) {
	          $input = stripslashes( $input );
	     }
	     if ( @mysqli_ping() != "" ) {
	          $input = mysqli_real_escape_string($link,  $input );
	     } else {
	          $search = array("\x00", "\n", "\r", "\\", "'", "\"", "\x1a");
	          $replace = array("\\x00", "\\n", "\\r", "\\\\" ,"\'", "\\\"", "\\x1a");
	          $input = str_replace($search, $replace, $input);
	     }
	     return $input;
	} //end function

	function print_x($value) {
		echo '<pre style="text-align:left;"><hr />';
		print_r($value);
		echo '</pre><hr />';
	}

	function contains($haystack,$needle) {
		if (strlen(strstr($haystack,$needle))>0) {
			return 1;
		} else {
			return 0;
		}
	}

    function selected($saved, $value) {
        if ($saved == $value) $selected = 'selected="selected"';
        else                  $selected = '';
        return $selected;
    }

	function reverb($value) {
	     return htmlspecialchars(stripslashes($value));
	}

    function checked($saved, $value) {
        if ($saved == $value) $checked = 'checked="checked"';
        else                  $checked = "";
        return $checked ;
    }

	function objectToArray($d) {
		if (is_object($d)) {
			$d = get_object_vars($d);
		}

		if (is_array($d)) {
			return array_map(__FUNCTION__, $d);
		}
		else {
			return $d;
		}
	}

	function arrayToObject($d) {
		if (is_array($d)) {
			return (object) array_map(__FUNCTION__, $d);
		}
		else {
			return $d;
		}
	}

	function acontains($str, array $arr) {
	    foreach($arr as $a) {
	        if (stripos($str,$a) !== false) return true;
	    }
	    return false;
	}

    function encrypt($value) {
        if(!$value){ return "Invalid Encryption Input"; }
		if ($this->acontains( $value , array('wHAm', 'WhAm', 'whAm', 'whaM') ) ) {
			return $value;
		}
		switch (microtime(true) % 6) {
			case 0: $value = _SALT.$value._PEPPER; break;
		    case 1: $value = _PEPPER._SALT.$value; break;
		    case 2: $value = $value._PEPPER._SALT; break;
		    case 3: $value = _PEPPER.$value._SALT; break;
		    case 4: $value = _SALT._PEPPER.$value; break;
		    case 5: $value = $value._SALT._PEPPER; break;
		}
        $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
        $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
        $crypttext = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, _HASH, $value, MCRYPT_MODE_ECB, $iv);
        $data = base64_encode($crypttext);
        $hashed_value = str_replace(array('+','/','='),array('-','_',''),$data);
        $hashed_value = trim($hashed_value);
		$check = array('whAm', 'wHAm', 'WhAm', 'whaM');
		$check = $check[array_rand($check)];
		$hashed_value = substr_replace($hashed_value, $check, rand(0, strlen($hashed_value)), 0);
		return $hashed_value;
    }

    function decrypt($value){
        if(!$value || $value == "Invalid Encryption Input"){ return "Invalid Decryption Input"; }
		if ( $this->acontains( $value , array('wHAm', 'WhAm', 'whAm', 'whaM') ) ) {
			$value = str_replace(array('wHAm', 'WhAm', 'whAm', 'whaM'),'',$value);
		}
        $data = str_replace(array('-','_'),array('+','/'),$value);
        $mod4 = strlen($data) % 4;
        if ($mod4) {
            $data .= substr('====', $mod4);
        }
        $crypttext = base64_decode($data);
        $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
        $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
        $decrypttext = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, _HASH, $crypttext, MCRYPT_MODE_ECB, $iv);

		$decrypttext = str_replace(array(_SALT,_PEPPER),"",$decrypttext);
        return trim($decrypttext);
    }


    function check_encryption($value){
		if (!empty($value) && !$this->acontains( $value , array('wHAm', 'WhAm', 'whAm', 'whaM') ) )
			return $this->encrypt($value);
			else return $value;
    }

	function plural($num) {
		if ($num != 1) return "s";
	}

	function getRelativeTime($date) {
		$diff = time() - strtotime($date);
		if ($diff<60)
			return $diff . " second" . plural($diff) . " ago";
		$diff = round($diff/60);
		if ($diff<60)
			return $diff . " minute" . plural($diff) . " ago";
		$diff = round($diff/60);
		if ($diff<24)
			return $diff . " hour" . plural($diff) . " ago";
		$diff = round($diff/24);
		if ($diff<7)
			return $diff . " day" . plural($diff) . " ago";
		$diff = round($diff/7);
		if ($diff<4)
			return $diff . " week" . plural($diff) . " ago";
		return "on " . date("F j, Y", strtotime($date));
	}


	static function curPageURL() {
		$pageURL = 'http';
		if (!empty($_SERVER["HTTPS"])) {$pageURL .= "s";}
		$pageURL .= "://";
		if ($_SERVER["SERVER_PORT"] != "80") {
			$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		} else {
			$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		}
		return $pageURL;
	}

	static function curPageName() {
		return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
	}

	function format_size( $data ) {
	if( $data < 1024 ) { return $data . "b"; } // bytes
	else if( $data < 1024000 ) { return round( ( $data / 1024 ), 1 ) . "k"; } // kilobytes
	else { return round( ( $data / 1024000 ), 1 ) . "MB"; } // megabytes
	}

	function pcent($big,$small,$switch='0') {
	switch ($switch) {
	    case 0:
			if ($big == 0) return 0;
			return substr(($small / $big)*100, 0, 4 );
	    case 1:
			if ($small == 0) return 0;
			return substr((($big / $small) * 100), 0, 4 );
	    case 2:
			if ($small == 0) return 0;
			return substr((($small - $big) / $small), 0, 4 );
	    case 3:
			if ($small == 0) return 0;
			return substr(((($small - $big) / $small) * 100), 0, 4 );
	}
	return;
	}

    function __destruct() {

    }//end __destruct
}//end class




/*------------------------------*\
|  |__) _ _  _|| _    |_/| _ _   |
|  |__)| (_|(_||(-\/  | \|(_(_)  |
|                 /              |
|      ©2013 Bradley Klco        |
\*------------------------------*/