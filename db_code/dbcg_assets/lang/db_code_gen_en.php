<?php
$lang = array( //english
    'hello' => 'Hello World',
    'username' => 'Your Username',

    'login' => 'Login',
    'login_quick' => 'Quick Login',
    'login_set' => 'Select Login Set',

    'login_into_database' => 'Log into database',
    'login_host' => 'DB Host',
    'login_database' => 'Database',
    'login_username' => 'Username',
    'login_password' => 'Password',

    'table_select' => 'Select Table',
    'table' => 'Table',

    'options_sub' => 'Sub Options',
    'options' => 'Options',

    'safe_mode' => 'Safe Mode ?',
    'safe_mode_label' => 'Use Safe Mode ?',

    'safe_mode_en' => 'Safe mode Enabled',
    'safe_mode_dis' => 'Safe mode Disabled',

    'ajax_file_name' => 'Ajax File Name',

    'jquery_version' => 'jQuery Version',
    'developer_version' => 'Developer Version ?',
    'column_name' => 'Column Name',
    'secondary_column' => 'Secondary Column',

    'custom_columns' => 'Custom Columns',
    'custom_columns_label' => 'Use Custom Columns ?',

    'trigger' => 'Primary Column / Trigger /  Query',
    'trigger_tip' => 'Primary Column / Trigger /  Query<br />This is the tables column that will act as a trigger for if conditions; and be the column for the query',

    'method' => 'PHP Process Method',
    'method_tip' => 'The method you use will depend on the form.',

    'post' => 'POST',
    'get' => 'GET',
    'request' => 'REQUEST',

    'pdo_fetch' => 'PDO Fetch Parameter',
    'pdo_fetch_using' => 'Fetch With',

    'if_statements' => 'If Conditions',
    'if_statements_label' => 'Use If Conditions',
    'if_statements_tip' => 'If checked, PHP will be wrapped in a conditional statement',


    'return_array' => 'Return Array',
    'return_array_label' => 'Return Array ?',
    'return_array_tip' => 'Return results in an array.',

    'if_echo' => 'Echo Variables',
    'help_echo' => 'Echo Variables',


//information boxes
    'information' => 'Information',
	 'help_db_connect_1' => 'This pulls the credentials you used when logging into the database. This is a compact version. Credentials are <strong>not</strong> available through a variable. See [Alt] if you want credentials in variables.',
	 'help_db_connect_2' => 'This pulls the credentials you used when logging into the database. This is the long version. Most useful if you need to grab the credentials later in the script.',
	 'help_select_one' => 'Using the first column from the table as an identifier, this will grab all columns from a <strong>single</strong> row [the first one it finds] in the database that is equal to the value of the identifier.',
	 'help_select_while' => 'Using the first column from the table as an identifier, this will grab all columns from <strong>all</strong> rows in the database that is equal to the value of the identifier.',
	 'help_select_all' => 'This will grab all columns from <strong>all</strong> rows in the database.',
	 'help_select_table' => 'This will grab all columns from <strong>all</strong> rows in the database and display them in a html &amp;lt;table&amp;gt;',
	 'help_select_count' => 'This will generate the code you would copy and paste into your script to show how many rows are in your table',
	 'help_search_l' => 'Search Left [%search]',
	 'help_search_r' => 'Search Right [search%]',
	 'help_search_b' => 'Search Both [%search%]',

	 'help_pagination' => 'Pay attention!! This uses a wildcard search',

	 'help_insert_1' => 'This runs all the variables [processed via POST] through the sql_val function and then into the database.<br />This is a compact version.<br />See [Alt] if you want a &quot;long&quot; version.',
	 'help_insert_2' => 'This runs all the variables [processed via POST] through the sql_val function and then into the database.<br />This is the &quot;long&quot; version.<br />See non [Alt] if you want a &quot;compact&quot; version.',
	 'help_update_1' => 'Using the first column from the table as an identifier, this will update the database row that is equal to the identifiers value.<br />This is a compact version.<br />See [Alt] if you want a &quot;long&quot; version.',
	 'help_update_2' => 'Using the first column from the table as an identifier, this will update the database row that is equal to the identifiers value.<br />This is the &quot;long&quot; version.<br />See non [Alt] if you want a &quot;compact&quot; version.',
	 'help_delete' => 'Using the first column from the table as an identifier, this will <strong>delete</strong> the row from the database that is equal to the identifiers value.',
	 'help_create_table' => 'This will allow you to copy the table structure so you can drop it into another database<br /> - via the SQL tab in phpMyAdmin</span>',




	 'help_pdo_db_connect_1' => 'This pulls the credentials you used when logging into the database. This is a compact version. Credentials are <strong>not</strong> available through a variable. See [Alt] if you want credentials in variables.',
	 'help_pdo_db_connect_2' => 'This pulls the credentials you used when logging into the database. This is the long version. Most useful if you need to grab the credentials later in the script.',
	 'help_pdo_select_one' => 'Using the first column from the table as an identifier, this will grab all columns from a <strong>single</strong> row [the first one it finds] in the database that is equal to the value of the identifier.',
	 'help_pdo_select_while' => 'Using the first column from the table as an identifier, this will grab all columns from <strong>all</strong> rows in the database that is equal to the value of the identifier.',
	 'help_pdo_select_all' => 'This will grab all columns from <strong>all</strong> rows in the database.',
	 'help_pdo_select_table' => 'This will grab all columns from <strong>all</strong> rows in the database.',
	 'help_pdo_select_count' => 'This will generate the code you would copy and paste into your script to show how many rows are in your table',
	 'help_pdo_search_l' => 'Search Left [%search]',
	 'help_pdo_search_r' => 'Search Right [search%]',
	 'help_pdo_search_b' => 'Search Both [%search%]',

	 'help_pdo_pagination' => 'Pay attention!! This uses a wildcard search',

	 'help_pdo_insert_1' => 'This runs all the variables [processed via POST] through the sql_val function and then into the database.<br />This is a compact version.<br />See [Alt] if you want a &quot;long&quot; version.',
	 'help_pdo_insert_2' => 'This runs all the variables [processed via POST] through the sql_val function and then into the database.<br />This is the &quot;long&quot; version.<br />See non [Alt] if you want a &quot;compact&quot; version.',
	 'help_pdo_update_1' => 'Using the first column from the table as an identifier, this will update the database row that is equal to the identifiers value.<br />This is a compact version.<br />See [Alt] if you want a &quot;long&quot; version.',
	 'help_pdo_update_2' => 'Using the first column from the table as an identifier, this will update the database row that is equal to the identifiers value.<br />This is the &quot;long&quot; version.<br />See non [Alt] if you want a &quot;compact&quot; version.',
	 'help_pdo_delete' => 'Using the first column from the table as an identifier, this will <strong>delete</strong> the row from the database that is equal to the identifiers value.',
	 'help_pdo_create_table' => 'This will allow you to copy the table structure so you can drop it into another database<br /> - via the SQL tab in phpMyAdmin</span>',

	 'help_pdo_fetch' => 'PDO::FETCH_BOTH (default) <br />PDO::FETCH_NUM<br />PDO::FETCH_ASSOC<br />PDO::FETCH_OBJ<br />PDO::FETCH_LAZY<br />PDO::FETCH_BOUND',


     'compact_tip' => 'Compact',













	 'help_post' => 'Using the first column from the table as a trigger, [or Trigger column] this will run the $_POST variable though the &quot;clean&quot; function and then assign it to a variable named the same as the name of the column.',
	 'help_get' => 'Using the first column from the table as a trigger, [or Trigger column] this will run the $_GET variable though the &quot;clean&quot; function and then assign it to a variable named the same as the name of the column.',
	 'help_request' => 'Using the first column from the table as a trigger, [or Trigger column] this will run the $_REQUEST variable though the &quot;clean&quot; function and then assign it to a variable named the same as the name of the column.',
	 'help_array_1' => 'This turns all the column names in to keys of an array whose value is from a variable named the same as the column name.',
	 'help_array_2' => 'Creates an array with auto-numeric keys whose value is from a variable named the same as the column name.',
	 'help_array_3' => 'Creates an array with auto-numeric keys whose values are the names of the columns.',
	 'help_array_4' => 'Creates an array using the column names as keys. Their corresponding values are from a variable named the same as the column name.',
	 'help_array_5' => 'Unserializes an array and turns the column names into variables to hold the contents of the serialized array.',
	 'help_form_dry' => 'Creates a <strong>standard HTML</strong> form using the column names as the &quot;name&quot; of each input field.',
	 'help_form_wet' => 'Creates a <strong>standard HTML</strong> form using the column names as the &quot;name&quot; of each input field. If a variable is set with the same name as the column name it will be input fields value.',
	 'help_html5_dry' => 'Creates a <strong>HTML5</strong> form using the column names as the &quot;name&quot; of each input field.',
	 'help_html5_wet' => 'Creates a <strong>HTML5</strong> form using the column names as the &quot;name&quot; of each input field. If the column name matches a HTML5 input type, that type will be automatically assigned to that input field. If a variable is set with the same name as the column name it will be input fields value.',
	 'help_html_obfusc_1' => 'Creates a <strong>standard HTML</strong> form using the column names as the &quot;name&quot; of each input field - except for the fact that they are encoded. You must use the special POST to convert the variables/names back into normal text.',
	 'help_html_obfusc_2' => 'Creates a <strong>standard HTML</strong> form using the column names as the &quot;name&quot; of each input field - except for the fact that they are encoded. You must use the special POST to convert the variables/names back into normal text.<br /><br />This alternative version adds the variable name before the code inside of a PHP comment so that it cannot be seen when someone views source via the browser, but when working with the file, you can see what it is.',
	 'help_dd_table_list' => 'While a bit odd - this creates a select field [drop down] with the names of the <strong>TABLES</strong> as the options. It uses the <strong>database name</strong> as the name of the select field.',
	 'help_dd_column_list' => 'While a bit odd - this creates a select field [drop down] with the names of the <strong>COLUMNS</strong> as the options. It uses the <strong>table name</strong> as the name of the select field.',
	 'help_list_tables' => 'Creates a plain text list of all the <strong>TABLES</strong> in the database',
	 'help_list_columns' => 'Creates a plain text list of all the <strong>COLUMNS</strong> in the table',
	 'help_full_insert' => 'Copy and paste the results below in to a blank page and it will be everything you need to <strong>add a new</strong> entry to the database.',
	 'help_full_update' => 'Copy and paste the results below in to a blank page and it will be everything you need to <strong>update an existing</strong> entry in the database.',
	 'help_is_set_echo' => 'Creates a list of all the column names as variables. Adds an <strong>isset</strong> clause and then echoes the variable with a line break.',
	 'help_is_set_clean' => 'Creates a list of all the column names as variables. Adds an <strong>isset</strong> clause, cleans the variable and then echoes it with a line break.',
	 'help_not_empty_echo' => 'Creates a list of all the column names as variables. Adds a <strong>not empty</strong> clause and then echoes the variable with a line break.',
	 'help_not_empty_clean' => 'Creates a list of all the column names as variables. Adds a <strong>not empty</strong> clause, cleans the variable and then echoes it with a line break.',
	 'help_funct_sql_val' => 'If Magic Quotes are on, it <strong>stripslashes</strong> from the string then passes it on to <strong>mysql_real_escape_string</strong> which sanitizes it. It adds single quotes to each side of the string before returning it.<br />Intended to be used for inserting data into the database.',
	 'help_funct_clean' => 'If $no_tags is set it <strong>strip_tags</strong> and <strong>trim</strong>s each end of the string. If the $type is set it checks the length and typecasts an integer if needed. It then passes it to <strong>stripslashes</strong> if Magic Quotes is on. And finally it gets passed to <strong>mysql_real_escape</strong>. <br />Intended to be used for cleaning forms.',
	 'help_funct_reverb' => 'It <strong>stripslashes</strong> and then gets ran through <strong>htmlspecialchars</strong> before it gets returned. Intended to be used when echoing variables from a forms input, or printing it back on the screen.',
	 'help_funct_print_x' => 'This simply wraps the <strong>print_r</strong> inside of <strong>pre</strong> tags so it has a nice print out on the screen.<br />Intended to be replace print_r.',
	 'help_funct_all' => 'Shows you ALL the functions used throughout this script.',
	 'help_jquery' => 'What Can I Say? I\'m Lazy!!',
	 'help_jquery_ui' => 'What Can I Say? I\'m Lazy!!',
	 'help_j_full_insert' => 'jQuery Full Page [Insert]',
	 'help_j_full_update' => 'jQuery Full Page [Update]',
	 'help_full_insert_cmt' => 'This is a fully working full page insert script.<br />It is commented so you can see how it works.<br />Unless you need the extra comments, I recommend you use the other Full Page Insert form.',
	 'help_select_maker' => 'This will generate a drop down list on the fly.',
	 'help_auto_incre' => 'Drop this in your script to get the next auto incremental number.',
	 'help_auto_incre_alt' => 'Drop this in your script to get the next auto incremental number.',
	 'help_insert_dup' => 'This runs all the variables [processed via POST] through the sql_val function and then into the database - unless the indexed column value already exists, then it switches to an update statement.<br />This is a compact version.<br />See [Alt] if you want a &quot;long&quot; version.',
	 'help_insert_dup2' => 'This runs all the variables [processed via POST] through the sql_val function and then into the database - unless the indexed column value already exists, then it switches to an update statement.<br />This is the &quot;long&quot; version.<br />See non [Alt] if you want a &quot;compact&quot; version.',
	 'help_find_dups' => 'Queries the database to find duplicate information. The primary key is detected and used first, followed by the column you want to find the duplicates in. ',
	 'help_auto_incre_safe' => 'Safe way to get &quot;next&quot; auto increment id. This will insert a blank row into the database - securing the &quot;next&quot; auto increment number. Then once your done with your logic, rather than using an insert statement, update the blank row with your data.',
	 'help_custom_columns' => 'If you want certain database table columns to be recognized as a specific HTML[5] input type, edit this files source code and enter the name of the column(s) in the appropriate HTML[5] arrays at the top of the file.</p><p>Once this has been done, you can enable and disable these custom columns using the &quot;Custom Columns&quot; checkbox.</p>',
	 'help_safe_mode_en' => 'This only comes in to play when dealing with a database insert or update statement!!</p><p>When &quot;Safe Mode&quot; is enabled and you submit the form, rather than entering the data into the database, it will instead be printed right there on your screen so you can see how it will be once inside the database. This could easily be called debugging mode.',
	 'help_safe_mode_dis' => 'This only comes in to play when dealing with a database insert or update statement!!</p><p>When &quot;Safe Mode&quot; is disabled and you submit the form, the data will go into the database - as you expect from a form. Safe Mode should be disabled for use on a live website.',
	 'help_obfuscated_code' => 'If you don\'t know why you would want a form like this, chances are, you don\'t need to use this form. Use the standard HTML form instead.</p><p>Using the form adds a bit more security, but it can also make it harder to work with because of the obscure names. This does not increase overhead at all, other than the fact that it increases the file size.</p><p>Once the form has been submitted and ran though the POST operation it restores the variables to their original column names from the database. You can then use the variables as normal.',
	 'help_ajax_file_name' => 'You can name your ajax file any name you want - provided it does not conflict with another file name.</p><p>I like to name my ajax files so that they start with an underscore, then say ajax, followed by another underscore, then say what they are doing (if they handle a single task).<br />eg: _ajax_demo.php.',
	 'help_jquery_version' => 'You can define what version of jQuery to use by entering the numbers in the box. By default, it will fetch the minified version.<br />If for some strange reason you want the developers version, you can place a check in the box to get the full (non-minified) version.',
	 'help_duplicate_column' => 'Select which column you want to find the duplicates in.<br />If your table has a Primary key, or Unique index, we know that the rows in that column cannot be duplicates - so we use that as an identifier - so we know which row(s) are duplicates.',
	 'help_copy_table' => 'This will copy the table structure so you can create another table without all the data.',

	 'obfuscated_code' => 'Obfuscated Code',
	 'duplicate_column' => 'Duplicate Column',

	 'color_block_key' => 'Color Block Key',
	 'blue' => 'Blue',
	 'blue_help' => 'pay special attention to these',
	 'green' => 'Green',
	 'green_help' => 'customize this content',
	 'red' => 'Red',
	 'red_help' => 'Safe mode Enabled',
	 'white' => 'White',
	 'white_help' => 'Safe mode Disabled',
	 'pink' => 'Pink',
	 'pink_help' => 'Script Notes',

	 'copy_paste' => 'Copy &amp; Paste Code',
	 'php_used_in_code' => 'PHP Functions Used in Code',

	 'customize_sec' => 'Customize this/these function(s) to meet your security needs!!',

	 'func_sql_val' => '<strong>SQL Val</strong> - Forces the variable inside of single quotes.',
	 'func_sanitize' => '<strong>Sanitize</strong> - Quick function to clean user input',
	 'func_reverb' => '<strong>Reverb</strong> - Short for Reverberate - cleans variable before echoing it into a form field.',
	 'func_print_x' => '<strong>Print X</strong> - Prints an array with a nice format.',









//menu

//Database
	 'database' => 'Database',
	 'database_operations' => 'Database Operations',
	 'connect' => 'Connect',
	 'connect_help' => 'Generates a database connection using the credentials you used to log into this program.',
	 'alt' => '[alt]',
	 'create' => 'Create',
	 'create_help' => 'Creates an INSERT statement for your database.',
	 'insert' => 'Insert',
	 'select' => 'Select',
	 'select_help' => 'Creates a select statement you can copy and paste into your code.',
	 'select_one' => 'Select One',
	 'select_many' => 'Select Many',
	 'select_all' => 'Select All',
	 'select_all_table' => 'Select All show &lt;table&gt;',

	 'search' => 'Search',
	 'search_help' => 'Search Left, Right, or Both',

	 'search_l' => 'Search Left',
	 'search_r' => 'Search Right',
	 'search_b' => 'Search Both',

	 'pagination' => 'Pagination',
	 'pagination_help' => 'Pagination Help',

	 'count_rows' => 'Count Rows',
	 'update' => 'Update',
	 'update_help' => 'Creates an update statement you can copy and paste into your code.',
	 'delete' => 'Delete',
	 'delete_help' => 'Which method to use depends on how you setup the form. Look at the method=&quot;&quot; attribute of your form.',

//PDO Database
	 'pdo_database' => 'PDO Database',
	 'pdo_database_operations' => 'PDO Database Operations',





	'DDL' => 'Drop Down List',
	'ddl' => 'Drop Down List',
	'ddl_help' => 'Creates Drop down lists',

	'Auto' => 'Auto Increment',
	'auto_inc' => 'Auto Increment',
	'auto_help' => 'Auto Increment',

	'InsertDup' => 'Insert On Dup',
	'insertdup' => 'Insert On Dup',
	'insert_dup_help' => 'Insert / Dup',



































//PHP
	 'php' => 'PHP',
	 'php_form_processing' => 'PHP Processing',
	 'php_form_processing_help' => 'These will help with PHP processing.',
	 'form_method' => 'Process Method',
	 'form_method_help' => 'Which method to use depends on how you setup the form. Look at the method=&quot;&quot; attribute of your form.',
	 'database_array' => 'Database => Array ',
	 'database_array_help' => 'Turns table structure into an array.',
	 'key_val' => '$key=>$val',
	 'key' => '$key',
	 'val' => '$val',
	 'serialize' => 'Serialize',
	 'unserialize' => 'Unserialize',
	 'database_echo' => 'Database Echos',
	 'database_echo_help' => 'Which method to use depends on how you setup the form. Look at the method=&quot;&quot; attribute of your form.',
	 'if_isset_echo' => 'if isset echo',
	 'if_isset_clean_echo' => 'if isset clean echo',
	 'if_not_empty_echo' => 'if not empty echo',
	 'if_not_empty_clean_echo' => 'if not empty clean echo',


//Forms
	 'forms' => 'Forms',
	 'html_forms' => 'HTML Forms',
	 'html_forms_help' => 'HTML and HTML5 forms are different; pay attention to what you need!',
	 'html' => 'HTML',
	 'html_help' => 'These are standard HTML forms',
	 'html5' => 'HTML5',
	 'html5_help' => 'These are standard HTML5 forms',
	 'form_html_input' => 'HTML Form',
	 'form_html_input_pre' => 'HTML - Prefilled',
	 'form_html5_input' => 'HTML5 Form',
	 'form_html5_input_pre' => 'HTML5 Form - Prefilled',

//Functions
	 'functions' => 'Functions',
	 'functions_help' => 'Customize these functions to meet your security needs!!',
	 'funct_sql_val' => 'function sql_val()',
	 'funct_clean' => 'function clean()',
	 'funct_reverb' => 'function reverb()',
	 'funct_print_x' => 'function print_x()',
	 'funct_all' => 'All functions used',

	 'funct_sanitize' => 'Sanitization',
	 'funct_sanitize_help' => 'These functions apply some sanitization to the variable passed through them.',
	 'funct_display' => 'Display',
	 'funct_display_help' => 'These functions help display information.',
	 'funct_all_help' => 'Shows all functions used.',

//Ajax
	 'pages_ajax' => 'Pages / Ajax',
	 'full_pages' => 'Full PHP/HTML Pages',
	 'full_pages_help' => 'These are complete, copy and paste, pages that should not require any extra editing for basic functionality.',
	 'jquery' => 'jQuery',
	 'jquery_ui' => 'jQuery UI',
	 'jquery_js' => 'jQuery Source',
	 'jquery_js_help' => 'Implementation of the source JS files',


	 'ajax' => 'Ajax',
	 'jquery_pages' => 'Ajax Pages',
	 'jquery_pages_help' => 'Full Page forms ajaxed by jQuery',
	 'j_full_insert' => 'Full Page Ajaxed [Insert]',
	 'j_full_update' => 'Full Page Ajaxed [Update]',

	 'html_pages' => 'HTML Pages',
	 'html_pages_help' => 'These are <strong>NOT</strong> ajax pages!',
	 'full_page_insert' => 'Full Page [Insert]',
	 'full_page_update' => 'Full Page [Update]',
	 'full_page_insert_cmt' => 'Full Page Commented',


//Advanced
	 'advanced' => 'Advanced',
	 'advanced_misc' => 'Advanced &amp; Miscellaneous',
	 'advanced_misc_help' => 'These are eccentric and advanced things.',
	 'advanced_help' => 'These are a little more advanced and may require extra care with using.',

	 'misc' => 'Miscellaneous',
	 'misc_help' => 'Other database interactions',
	 'copy_table' => 'Copy Table Structure',

	 'html_obfusc_1' => '*HTML Form - Obfuscated*',
	 'html_obfusc_2' => '*HTML Form - Obfuscated [alt]*',
	 'dd_table_list' => 'Drop Down List of Tables',
	 'dd_column_list' => 'Drop Down List of Columns',
	 'select_maker' => 'Drop Down List Generator',
	 'list_tables' => 'Plain Text Table List',
	 'list_columns' => 'Plain Text Column List',

	 'find_dups' => 'Find &amp; Show Duplicates',
	 'auto_incre_safe' => 'Next Auto Increment - the safe way',
	 'auto_incre' => 'Next Auto Increment',
	 'auto_incre_alt' => 'Next Auto Increment [alt]',
	 'insert_dup' => 'Insert Into - On Duplicate - Update',
	 'insert_dup2' => 'Insert Into - On Duplicate - Update [alt]',

	 'aftermarket' => 'Aftermarket Plugins',
	 'aftermarket_help' => 'These plugins are available on codecanyon',

	 'reverse_form' => 'Reverse Form',
	 'help_reverse_form' => 'Paste a HTML form to generate database table',

	 'reverse_table' => 'Reverse Table',
	 'help_reverse_table' => 'Paste a HTML table to generate database table',















	 'auto_login' => 'Auto Login from Saved Sets',
);