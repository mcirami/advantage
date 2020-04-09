<?php

class forms extends DBCG {

    function __construct( ) {
		DBCG::__construct();
    }//end __construct

	function form_html_input() {
	$this->show_pgr_form = 1;
		$return = '&lt;form action="" method="'.trim($this->pgr, '_').'" id="<span class="bx cz">' . $this->myTable . '</span>" name="<span class="bx cz">' . $this->myTable . '</span>"';
		if (array_intersect($this->fields, $this->html_file)) {
			$return .= ' enctype="multipart/form-data" ';
		}
		$return .= ' ><br />&lt;fieldset><br />&lt;legend> ' . $this->label_name($this->myTable) . ' &lt;/legend>';
		$x = 0;
		foreach ($this->fields as $key => $val) {
			if (($this->types[$x] == "text") || ($this->types[$x] == "mediumtext") || ($this->types[$x] == "longtext") || ($this->types[$x] == "blob") || ($this->types[$x] == "mediumblob") || ($this->types[$x] == "longblob") || ($this->in_arrayi($val, $this->html5_textarea))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;textarea class="" id="' . $val . '" name="' . $val . '">&lt;/textarea><br />';
			} else if (($val == "password") || ($this->in_arrayi($val, $this->html_pass))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">password</span>" value="" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" ' . $this->get_limits($val) . '/><br />';
			} else if (($val == "file") || ($this->in_arrayi($val, $this->html_file))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">file</span>" value="" class="" id="' . $val . '" name="' . $val . '"  ' . $this->get_limits($val) . '/><br />';
			} else {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="text" value="" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '"  ' . $this->get_limits($val) . '/><br />';
			}
			$x++;
		}
		$return .= '<br />&lt;input type="submit" value="Submit" /><br />&lt;/form>';

		return $this->tabulate($return);
	}

	function form_html_input_pre() {
	$this->show_pgr_form = 1;
	$this->show_funct_sql_val = '1';
	$this->show_if_statements_form = '1';
	$this->show_return_function = '1';

		$return = '&lt;form action="" method="'.trim($this->pgr, '_').'" id="<span class="bx cz">' . $this->myTable . '</span>" name="<span class="bx cz">' . $this->myTable . '</span>"';
		if (array_intersect($this->fields, $this->html_file)) {
			$return .= ' enctype="multipart/form-data" ';
		}
		$return .= ' ><br />&lt;fieldset><br />&lt;legend> ' . $this->label_name($this->myTable) . ' &lt;/legend>';
		$x = 0;
		foreach ($this->fields as $key => $val) {
			if (($this->types[$x] == "text") || ($this->types[$x] == "mediumtext") || ($this->types[$x] == "longtext") || ($this->types[$x] == "blob") || ($this->types[$x] == "mediumblob") || ($this->types[$x] == "longblob") || ($this->in_arrayi($val, $this->html5_textarea))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;textarea class="" id="' . $val . '" name="' . $val . '">&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo '.$this->return_function.'($' . $val . '); ?>&lt;/textarea><br />';
			} else if (($val == "password") || ($this->in_arrayi($val, $this->html_pass))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">password</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo '.$this->return_function.'($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "file") || ($this->in_arrayi($val, $this->html_file))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">file</span>" value="" class="" id="' . $val . '" name="' . $val . '" /><br />';
			} else {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="text" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo '.$this->return_function.'($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			}
			$x++;
		}
		$return .= '<br />&lt;input type="submit" value="Submit" /><br />&lt;/form>';
		return $this->tabulate($return);
	}

	function form_html5_input() {
	$this->show_custom_columns_form = '1';
		$return = '&lt;form action="" method="'.trim($this->pgr, '_').'" id="<span class="bx cz">' . $this->myTable . '</span>" name="<span class="bx cz">' . $this->myTable . '</span>"';
		if (array_intersect($this->fields, $this->html_file)) {
			$return .= ' enctype="multipart/form-data" ';
		}
		$return .= ' ><br />&lt;fieldset><br />&lt;legend> ' . $this->label_name($this->myTable) . ' &lt;/legend>';
		$x = 0;
		foreach ($this->fields as $key => $val) {
			if (($val == "email") || ($this->in_arrayi($val, $this->html5_email))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">email</span>" value="" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" pattern="[^ @]*@[^ @]*" placeholder="Enter an email address" /><br />';
			} else if (($val == "url") || ($this->in_arrayi($val, $this->html5_url))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">url</span>" value="" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" pattern="https?://.+" placeholder="Enter a web address" /><br />';
			} else if (($val == "tel") || ($this->in_arrayi($val, $this->html5_tel))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">tel</span>" value="" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" placeholder="Enter a Phone Number" /><br />';
			} else if (($val == "password") || ($this->in_arrayi($val, $this->html5_pass))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">password</span>" value="" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "number") || ($this->get_type($this->types[$x]) == "int") || ($this->in_arrayi($val, $this->html5_number))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">number</span>" value="" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" min="" max="" step="" /><br />';
			} else if (($val == "range") || ($this->in_arrayi($val, $this->html5_range))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">range</span>" value="" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" min="" max="" /><br />';
			} else if (($val == "date") || ($this->in_arrayi($val, $this->html5_date))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">date</span>" value="" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "month") || ($this->in_arrayi($val, $this->html5_month))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">month</span>" value="" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "week") || ($this->in_arrayi($val, $this->html5_week))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">week</span>" value="" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "time") || ($this->in_arrayi($val, $this->html5_time))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">time</span>" value="" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "datetime") || ($this->in_arrayi($val, $this->html5_datetime))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">datetime</span>" value="" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "datetime-local") || ($this->in_arrayi($val, $this->html5_datetime_local))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">datetime-local</span>" value="" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "color") || ($this->in_arrayi($val, $this->html5_color))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">color</span>" value="" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($this->types[$x] == "text") || ($this->types[$x] == "mediumtext") || ($this->types[$x] == "longtext") || ($this->types[$x] == "blob") || ($this->types[$x] == "mediumblob") || ($this->types[$x] == "longblob") || ($this->in_arrayi($val, $this->html5_textarea))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;<span class="bx hi">textarea</span> class="" id="' . $val . '" name="' . $val . '" rows="" cols="" >&lt;/textarea><br />';
			} else if (($val == "file") || ($this->in_arrayi($val, $this->html_file))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">file</span>" value="" class="" id="' . $val . '" name="' . $val . '" /><br />';
			} else {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="text" value="" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			}
			$x++;
		}
		$return .= '<br />&lt;input type="submit" value="Submit" /><br />&lt;/form>';
		return $this->tabulate($return);
	}

	function form_html5_input_pre() {
	$this->show_pgr_form = 1;
	$this->show_funct_sql_val = '1';
	$this->show_if_statements_form = '1';
	$this->show_return_function = '1';
	$this->show_custom_columns_form = '1';
		$return = '&lt;form action="" method="'.trim($this->pgr, '_').'" id="<span class="bx cz">' . $this->myTable . '</span>" name="<span class="bx cz">' . $this->myTable . '</span>"';
		if (array_intersect($this->fields, $this->html_file)) {
			$return .= ' enctype="multipart/form-data" ';
		}
		$return .= ' ><br />&lt;fieldset><br />&lt;legend> ' . $this->label_name($this->myTable) . ' &lt;/legend>';
		$x = 0;
		foreach ($this->fields as $key => $val) {
			if (($val == "email") || ($this->in_arrayi($val, $this->html5_email))) {
				$return .= '<br />&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">email</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo '.$this->return_function.'($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" pattern="[^ @]*@[^ @]*" placeholder="Enter an email address" /><br />';
			} else if (($val == "url") || ($this->in_arrayi($val, $this->html5_url))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">url</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo '.$this->return_function.'($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" pattern="https?://.+" placeholder="Enter a web address" /><br />';
			} else if (($val == "tel") || ($this->in_arrayi($val, $this->html5_tel))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">tel</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo '.$this->return_function.'($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" placeholder="Enter a Phone Number" /><br />';
			} else if (($val == "password") || ($this->in_arrayi($val, $this->html5_pass))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">password</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo '.$this->return_function.'($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "number") || ($this->get_type($this->types[$x]) == "int") || ($this->in_arrayi($val, $this->html5_number))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">number</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo '.$this->return_function.'($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" min="" max="" step="" /><br />';
			} else if (($val == "range") || ($this->in_arrayi($val, $this->html5_range))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">range</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo '.$this->return_function.'($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" min="" max="" /><br />';
			} else if (($val == "date") || ($this->in_arrayi($val, $this->html5_date))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">date</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo '.$this->return_function.'($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "month") || ($this->in_arrayi($val, $this->html5_month))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">month</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo '.$this->return_function.'($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "week") || ($this->in_arrayi($val, $this->html5_week))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">week</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo '.$this->return_function.'($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "time") || ($this->in_arrayi($val, $this->html5_time))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">time</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo '.$this->return_function.'($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "datetime") || ($this->in_arrayi($val, $this->html5_datetime))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">datetime</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo '.$this->return_function.'($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "datetime-local") || ($this->in_arrayi($val, $this->html5_datetime_local))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">datetime-local</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo '.$this->return_function.'($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "color") || ($this->in_arrayi($val, $this->html5_color))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">color</span>" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo '.$this->return_function.'($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($this->types[$x] == "text") || ($this->types[$x] == "mediumtext") || ($this->types[$x] == "longtext") || ($this->types[$x] == "blob") || ($this->types[$x] == "mediumblob") || ($this->types[$x] == "longblob") || ($this->in_arrayi($val, $this->html5_textarea))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;<span class="bx hi">textarea</span> class="" id="' . $val . '" name="' . $val . '"  rows="" cols="" >&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo '.$this->return_function.'($' . $val . '); ?>&lt;/textarea><br />';
			} else if (($val == "file") || ($this->in_arrayi($val, $this->html_file))) {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">file</span>" value="" class="" id="' . $val . '" name="' . $val . '" /><br />';
			} else {
				$return .= '<br />[tab]&lt;label for="' . $val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="text" value="&lt;?php if ('.$this->if_condition.'($' . $val . ')) echo '.$this->return_function.'($' . $val . '); ?>" class="" id="' . $val . '" name="' . $val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			}
			$x++;
		}
		$return .= '<br />&lt;input type="submit" value="Submit" /><br />&lt;/fieldset><br />&lt;/form><br />';
		return $this->tabulate($return);
	}

    function html_obfusc_1() {
	$this->show_pgr_form = 1;
	$this->show_trigger_form = 1;
	$this->show_funct_sql_val = '1';
	$this->show_if_statements_form = '1';
	$this->show_return_function = '1';
	$this->show_custom_columns_form = '1';
		$return='';
		$x    = 0;
		$post = "";
		$form = "";
		foreach ($this->fields as $key => $val) {
			$enc_val = $this->encrypt($val);
			if ($val == $this->first_fields)
				$post_trigger = 'if ('.$this->if_condition.'($'.$this->pgr.'[\'' . $enc_val . '\'])) { ';
	//		$post .= '<br />[tab]if ('.$this->if_condition.'($'.$this->pgr.'[\'' . $enc_val . '\'])) $' . $val . ' = clean($'.$this->pgr.'[\'' . $enc_val . '\'], "' . $this->types[$x] . '"); else $' . $val . ' = "";';
			$post .= '<br />[tab]$' . $val . ' = '.$this->if_condition.'($'.$this->pgr.'[\'' . $enc_val . '\']) ? clean($'.$this->pgr.'[\'' . $enc_val . '\'], "' . $this->types[$x] . '") : "";';
	
	
	
			if (($this->types[$x] == "text") || ($this->types[$x] == "mediumtext") || ($this->types[$x] == "longtext") || ($this->types[$x] == "blob") || ($this->types[$x] == "mediumblob") || ($this->types[$x] == "longblob") || ($this->in_arrayi($val, $this->html5_textarea))) {
				$form .= '<br />[tab]&lt;label for="' . $enc_val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;textarea class="" id="" name="' . $enc_val . '">&lt;/textarea><br />';
			} else if (($val == "password") || ($this->in_arrayi($val, $this->html_pass))) {
				$form .= '<br />[tab]&lt;label for="' . $enc_val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">password</span>" value="" class="" id="" name="' . $enc_val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			} else if (($val == "file") || ($this->in_arrayi($val, $this->html_file))) {
				$form .= '<br />[tab]&lt;label for="' . $enc_val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">file</span>" value="" class="" id="" name="' . $enc_val . '" /><br />';
			} else {
				$form .= '<br />[tab]&lt;label for="' . $enc_val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="text" value="" class="" id="" name="' . $enc_val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
			}
			$x++;
		}
		$return = '<h3>PHP Post - <span>You must use this post when using the obfuscated form below!!</span></h3>';
		$return .= '&lt;?php<br />';
		$return .= $post_trigger;
		$return .= $post;
		$return .= '<br />}<br />';
		$return .= '?>';
		$return .= '<h3>Obfuscated Form - <span>You must use the above POST when using this form!!</span></h3>';
		$return .= '&lt;form action="" method="POST" id="' . $this->myTable . '" name="' . $this->myTable . '"';
		if (array_intersect($this->fields, $this->html_file)) {
			$return .= ' enctype="multipart/form-data" ';
		}
		$return .= ' ><br />&lt;fieldset><br />&lt;legend> ' . $this->label_name($this->myTable) . ' &lt;/legend>';
		$return .= $form;
		$return .= '<br />&lt;input type="submit" value="Submit" /><br />&lt;form>';
		return $this->tabulate($return);
    }//end __destruct


    function html_obfusc_2() {
	$this->show_pgr_form = 1;
	$this->show_trigger_form = 1;
	$this->show_funct_sql_val = '1';
	$this->show_if_statements_form = '1';
	$this->show_return_function = '1';
	$this->show_custom_columns_form = '1';
		$return='';
	$x    = 0;
	$post = "";
	$form = "";
	foreach ($this->fields as $key => $val) {
		$enc_val = $this->encrypt($val);
			if ($val == $this->first_fields)
			$post_trigger = '/*' . $val . '*/ if ('.$this->if_condition.'($'.$this->pgr.'[\'' . $enc_val . '\'])) { ';
//		$post .= '<br />[tab] /*' . $val . '*/ if ('.$this->if_condition.'($'.$this->pgr.'[\'' . $enc_val . '\'])) $' . $val . ' = clean($'.$this->pgr.'[\'' . $enc_val . '\'], "' . $this->types[$x] . '"); else $' . $val . ' = "";';
		$post .= '<br />[tab] /*' . $val . '*/ $' . $val . ' = '.$this->if_condition.'($'.$this->pgr.'[\'' . $enc_val . '\']) ? clean($'.$this->pgr.'[\'' . $enc_val . '\'], "' . $this->types[$x] . '") : "";';
		if (($this->types[$x] == "text") || ($this->types[$x] == "mediumtext") || ($this->types[$x] == "longtext") || ($this->types[$x] == "blob") || ($this->types[$x] == "mediumblob") || ($this->types[$x] == "longblob") || ($this->in_arrayi($val, $this->html5_textarea))) {
			$form .= '<br />[tab]&lt;?php /*' . $val . '*/ ?>&lt;label for="' . $enc_val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;textarea class="" id="" name="' . $enc_val . '">&lt;/textarea><br />';
		} else if (($val == "password") || ($this->in_arrayi($val, $this->html_pass))) {
			$form .= '<br />[tab]&lt;?php /*' . $val . '*/ ?>&lt;label for="' . $enc_val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">password</span>" value="" class="" id="" name="' . $enc_val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
		} else if (($val == "file") || ($this->in_arrayi($val, $this->html_file))) {
			$form .= '<br />[tab]&lt;?php /*' . $val . '*/ ?>&lt;label for="' . $enc_val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="<span class="bx hi">file</span>" value="" class="" id="" name="' . $enc_val . '" /><br />';
		} else {
			$form .= '<br />[tab]&lt;?php /*' . $val . '*/ ?>&lt;label for="' . $enc_val . '">' . $this->label_name($val) . '&lt;/label><br />[tab][tab]&lt;input type="text" value="" class="" id="" name="' . $enc_val . '" maxlength="' . $this->max_length($this->types[$x]) . '" /><br />';
		}
		$x++;
	}
	$return = '<h3>PHP Post - <span>You must use this post when using the obfuscated form below!!</span></h3>';
	$return .= '&lt;?php<br />';
	$return .= $post_trigger;
	$return .= $post;
	$return .= '<br />}<br />';
	$return .= '?>';
	$return .= '<h3>Obfuscated Form - <span>You must use the above POST when using this form!!</span></h3>';
	$return .= '&lt;form action="" method="POST" id="' . $this->myTable . '" name="' . $this->myTable . '"';
	if (array_intersect($this->fields, $this->html_file)) {
		$return .= ' enctype="multipart/form-data" ';
	}
	$return .= ' ><br />&lt;fieldset><br />&lt;legend> ' . $this->label_name($this->myTable) . ' &lt;/legend>';
	$return .= $form;
	$return .= '<br />&lt;input type="submit" value="Submit" /><br />&lt;form>';
		return $this->tabulate($return);
    }//end __destruct

    function __destruct() {
    }//end __destruct
}//end class