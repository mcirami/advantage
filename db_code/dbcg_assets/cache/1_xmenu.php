<a class="nav-header" rel="tooltip" href="#phpprocessing" title="These will help with PHP processing."  data-toggle="collapse"><i class="icon-cog"></i>PHP Processing<i class="icon-chevron-down"></i></a>
<ul id="phpprocessing" class="nav nav-list collapse">
<li>
<a class="nav-header" rel="tooltip" href="#phpprocessing_processmethod" title="Which method to use depends on how you setup the form. Look at the method=&quot;&quot; attribute of your form."  data-toggle="collapse"><i class="icon-caret-right"></i>Process Method<i class="icon-chevron-down"></i></a>
<ul id="phpprocessing_processmethod" class="nav nav-list collapse">
<li><a rel="tooltip" href="?class=php_processing&method=method_post" title="Using the first column from the table as a trigger, [or Trigger column] this will run the $_POST variable though the &quot;clean&quot; function and then assign it to a variable named the same as the name of the column.">$_POST<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=php_processing&method=method_get" title="Using the first column from the table as a trigger, [or Trigger column] this will run the $_GET variable though the &quot;clean&quot; function and then assign it to a variable named the same as the name of the column.">$_GET<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=php_processing&method=method_request" title="Using the first column from the table as a trigger, [or Trigger column] this will run the $_REQUEST variable though the &quot;clean&quot; function and then assign it to a variable named the same as the name of the column.">$_REQUEST<i class="icon-caret-right"></i></a></li>
</ul>
</li>
<li>
<a class="nav-header" rel="tooltip" href="#phpprocessing_databasearray" title="Turns table structure into an array."  data-toggle="collapse"><i class="icon-caret-right"></i>Database => Array <i class="icon-chevron-down"></i></a>
<ul id="phpprocessing_databasearray" class="nav nav-list collapse">
<li><a rel="tooltip" href="?class=php_processing&method=array_key_val" title="This turns all the column names in to keys of an array whose value is from a variable named the same as the column name.">$key=>$val<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=php_processing&method=array_key" title="Creates an array with auto-numeric keys whose value is from a variable named the same as the column name.">$key<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=php_processing&method=array_val" title="Creates an array with auto-numeric keys whose values are the names of the columns.">$val<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=php_processing&method=array_serialize" title="Creates an array using the column names as keys. Their corresponding values are from a variable named the same as the column name.">Serialize<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=php_processing&method=array_unserialize" title="Unserializes an array and turns the column names into variables to hold the contents of the serialized array.">Unserialize<i class="icon-caret-right"></i></a></li>
</ul>
</li>
<li>
<a class="nav-header" rel="tooltip" href="#phpprocessing_databaseechos" title="Which method to use depends on how you setup the form. Look at the method=&quot;&quot; attribute of your form."  data-toggle="collapse"><i class="icon-caret-right"></i>Database Echos<i class="icon-chevron-down"></i></a>
<ul id="phpprocessing_databaseechos" class="nav nav-list collapse">
<li><a rel="tooltip" href="?class=php_processing&method=if_isset_echo" title="Echo Variables">Echo Variables<i class="icon-caret-right"></i></a></li>
</ul>
</li>
</ul>
<a class="nav-header" rel="tooltip" href="#pdodatabaseoperations" title="PDO Database Operations"  data-toggle="collapse"><i class="icon-road"></i>PDO Database Operations<i class="icon-chevron-down"></i></a>
<ul id="pdodatabaseoperations" class="nav nav-list collapse">
<li>
<a class="nav-header" rel="tooltip" href="#pdodatabaseoperations_connect" title="Generates a database connection using the credentials you used to log into this program."  data-toggle="collapse"><i class="icon-caret-right"></i>Connect<i class="icon-chevron-down"></i></a>
<ul id="pdodatabaseoperations_connect" class="nav nav-list collapse">
<li><a rel="tooltip" href="?class=database_pdo&method=pdo_db_connect_1" title="This pulls the credentials you used when logging into the database. This is a compact version. Credentials are <strong>not</strong> available through a variable. See [Alt] if you want credentials in variables.">Connect<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=database_pdo&method=pdo_db_connect_2" title="This pulls the credentials you used when logging into the database. This is the long version. Most useful if you need to grab the credentials later in the script.">Connect[alt]<i class="icon-caret-right"></i></a></li>
</ul>
</li>
<li>
<a class="nav-header" rel="tooltip" href="#pdodatabaseoperations_insert" title="Creates an INSERT statement for your database."  data-toggle="collapse"><i class="icon-caret-right"></i>Insert<i class="icon-chevron-down"></i></a>
<ul id="pdodatabaseoperations_insert" class="nav nav-list collapse">
<li><a rel="tooltip" href="?class=database_pdo&method=pdo_insert_short" title="This runs all the variables [processed via POST] through the sql_val function and then into the database.<br />This is a compact version.<br />See [Alt] if you want a &quot;long&quot; version.">Insert<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=database_pdo&method=pdo_insert_long" title="This runs all the variables [processed via POST] through the sql_val function and then into the database.<br />This is the &quot;long&quot; version.<br />See non [Alt] if you want a &quot;compact&quot; version.">Insert [alt]<i class="icon-caret-right"></i></a></li>
</ul>
</li>
<li>
<a class="nav-header" rel="tooltip" href="#pdodatabaseoperations_update" title="Creates an update statement you can copy and paste into your code."  data-toggle="collapse"><i class="icon-caret-right"></i>Update<i class="icon-chevron-down"></i></a>
<ul id="pdodatabaseoperations_update" class="nav nav-list collapse">
<li><a rel="tooltip" href="?class=database_pdo&method=pdo_update_short" title="Using the first column from the table as an identifier, this will update the database row that is equal to the identifiers value.<br />This is a compact version.<br />See [Alt] if you want a &quot;long&quot; version.">Update<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=database_pdo&method=pdo_update_long" title="Using the first column from the table as an identifier, this will update the database row that is equal to the identifiers value.<br />This is a compact version.<br />See [Alt] if you want a &quot;long&quot; version.">Update[alt]<i class="icon-caret-right"></i></a></li>
</ul>
</li>
<li>
<a class="nav-header" rel="tooltip" href="#pdodatabaseoperations_select" title="Creates a select statement you can copy and paste into your code."  data-toggle="collapse"><i class="icon-caret-right"></i>Select<i class="icon-chevron-down"></i></a>
<ul id="pdodatabaseoperations_select" class="nav nav-list collapse">
<li><a rel="tooltip" href="?class=database_pdo&method=pdo_select_one" title="Using the first column from the table as an identifier, this will grab all columns from a <strong>single</strong> row [the first one it finds] in the database that is equal to the value of the identifier.">Select One<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=database_pdo&method=pdo_select_multiple" title="Using the first column from the table as an identifier, this will grab all columns from <strong>all</strong> rows in the database that is equal to the value of the identifier.">Select Many<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=database_pdo&method=pdo_select_all" title="This will grab all columns from <strong>all</strong> rows in the database.">Select All<i class="icon-caret-right"></i></a></li>
</ul>
</li>
<li>
<a class="nav-header" rel="tooltip" href="#pdodatabaseoperations_search" title="Search Left, Right, or Both"  data-toggle="collapse"><i class="icon-caret-right"></i>Search<i class="icon-chevron-down"></i></a>
<ul id="pdodatabaseoperations_search" class="nav nav-list collapse">
<li><a rel="tooltip" href="?class=database_pdo&method=pdo_search_left" title="Search Left [%search]">Search Left<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=database_pdo&method=pdo_search_right" title="Search Right [search%]">Search Right<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=database_pdo&method=pdo_search_both" title="Search Both [%search%]">Search Both<i class="icon-caret-right"></i></a></li>
</ul>
</li>
<li>
<a class="nav-header" rel="tooltip" href="#pdodatabaseoperations_delete" title="Which method to use depends on how you setup the form. Look at the method=&quot;&quot; attribute of your form."  data-toggle="collapse"><i class="icon-caret-right"></i>Delete<i class="icon-chevron-down"></i></a>
<ul id="pdodatabaseoperations_delete" class="nav nav-list collapse">
<li><a rel="tooltip" href="?class=database_pdo&method=pdo_delete" title="Which method to use depends on how you setup the form. Look at the method=&quot;&quot; attribute of your form.">Delete<i class="icon-caret-right"></i></a></li>
</ul>
</li>
</ul>
<a class="nav-header" rel="tooltip" href="#mysqladv" title="This is a help"  data-toggle="collapse"><i class="icon-ambulance"></i>MySQL Adv<i class="icon-chevron-down"></i></a>
<ul id="mysqladv" class="nav nav-list collapse">
<li>
<a class="nav-header" rel="tooltip" href="#mysqladv_miscellaneous" title="Which method to use depends on how you setup the form. Look at the method=&quot;&quot; attribute of your form."  data-toggle="collapse"><i class="icon-caret-right"></i>Miscellaneous<i class="icon-chevron-down"></i></a>
<ul id="mysqladv_miscellaneous" class="nav nav-list collapse">
<li><a rel="tooltip" href="?class=database_mysql_adv&method=create_table" title="This will copy the table structure so you can create another table without all the data.">Copy Table Structure<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=database_mysql_adv&method=find_dups" title="Queries the database to find duplicate information. The primary key is detected and used first, followed by the column you want to find the duplicates in. ">Find &amp; Show Duplicates<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=database_mysql_adv&method=pagination" title="Pay attention!! This uses a wildcard search">Pagination<i class="icon-caret-right"></i></a></li>
</ul>
</li>
<li>
<a class="nav-header" rel="tooltip" href="#mysqladv_dropdownlist" title="Creates Drop down lists"  data-toggle="collapse"><i class="icon-caret-right"></i>Drop Down List<i class="icon-chevron-down"></i></a>
<ul id="mysqladv_dropdownlist" class="nav nav-list collapse">
<li><a rel="tooltip" href="?class=database_mysql_adv&method=dd_table_list" title="While a bit odd - this creates a select field [drop down] with the names of the <strong>TABLES</strong> as the options. It uses the <strong>database name</strong> as the name of the select field.">Drop Down List of Tables<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=database_mysql_adv&method=dd_column_list" title="While a bit odd - this creates a select field [drop down] with the names of the <strong>COLUMNS</strong> as the options. It uses the <strong>table name</strong> as the name of the select field.">Drop Down List of Columns<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=database_mysql_adv&method=select_maker" title="This will generate a drop down list on the fly.">Drop Down List Generator<i class="icon-caret-right"></i></a></li>
</ul>
</li>
<li>
<a class="nav-header" rel="tooltip" href="#mysqladv_autoincrement" title="Which method to use depends on how you setup the form. Look at the method=&quot;&quot; attribute of your form."  data-toggle="collapse"><i class="icon-caret-right"></i>Auto Increment<i class="icon-chevron-down"></i></a>
<ul id="mysqladv_autoincrement" class="nav nav-list collapse">
<li><a rel="tooltip" href="?class=database_mysql_adv&method=auto_incre_safe" title="Safe way to get &quot;next&quot; auto increment id. This will insert a blank row into the database - securing the &quot;next&quot; auto increment number. Then once your done with your logic, rather than using an insert statement, update the blank row with your data.">Next Auto Increment - the safe way<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=database_mysql_adv&method=auto_incre" title="Drop this in your script to get the next auto incremental number.">Next Auto Increment<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=database_mysql_adv&method=auto_incre_alt" title="Drop this in your script to get the next auto incremental number.">Next Auto Increment [alt]<i class="icon-caret-right"></i></a></li>
</ul>
</li>
<li>
<a class="nav-header" rel="tooltip" href="#mysqladv_insertondup" title="Which method to use depends on how you setup the form. Look at the method=&quot;&quot; attribute of your form."  data-toggle="collapse"><i class="icon-caret-right"></i>Insert On Dup<i class="icon-chevron-down"></i></a>
<ul id="mysqladv_insertondup" class="nav nav-list collapse">
<li><a rel="tooltip" href="?class=database_mysql_adv&method=insert_dup" title="This runs all the variables [processed via POST] through the sql_val function and then into the database - unless the indexed column value already exists, then it switches to an update statement.<br />This is a compact version.<br />See [Alt] if you want a &quot;long&quot; version.">Insert Into - On Duplicate - Update<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=database_mysql_adv&method=insert_dup2" title="This runs all the variables [processed via POST] through the sql_val function and then into the database - unless the indexed column value already exists, then it switches to an update statement.<br />This is the &quot;long&quot; version.<br />See non [Alt] if you want a &quot;compact&quot; version.">Insert Into - On Duplicate - Update [alt]<i class="icon-caret-right"></i></a></li>
</ul>
</li>
</ul>
<a class="nav-header" rel="tooltip" href="#mysql" title="This is a help"  data-toggle="collapse"><i class="icon-truck"></i>MySQL<i class="icon-chevron-down"></i></a>
<ul id="mysql" class="nav nav-list collapse">
<li>
<a class="nav-header" rel="tooltip" href="#mysql_connect" title="Generates a database connection using the credentials you used to log into this program."  data-toggle="collapse"><i class="icon-caret-right"></i>Connect<i class="icon-chevron-down"></i></a>
<ul id="mysql_connect" class="nav nav-list collapse">
<li><a rel="tooltip" href="?class=database_mysql&method=connect_short" title="This pulls the credentials you used when logging into the database. This is a compact version. Credentials are <strong>not</strong> available through a variable. See [Alt] if you want credentials in variables.">Connect<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=database_mysql&method=connect_long" title="This pulls the credentials you used when logging into the database. This is the long version. Most useful if you need to grab the credentials later in the script.">Connect[alt]<i class="icon-caret-right"></i></a></li>
</ul>
</li>
<li>
<a class="nav-header" rel="tooltip" href="#mysql_insert" title="Creates an INSERT statement for your database."  data-toggle="collapse"><i class="icon-caret-right"></i>Insert<i class="icon-chevron-down"></i></a>
<ul id="mysql_insert" class="nav nav-list collapse">
<li><a rel="tooltip" href="?class=database_mysql&method=insert_short" title="This runs all the variables [processed via POST] through the sql_val function and then into the database.<br />This is a compact version.<br />See [Alt] if you want a &quot;long&quot; version.">Insert<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=database_mysql&method=insert_long" title="This runs all the variables [processed via POST] through the sql_val function and then into the database.<br />This is the &quot;long&quot; version.<br />See non [Alt] if you want a &quot;compact&quot; version.">Insert [alt]<i class="icon-caret-right"></i></a></li>
</ul>
</li>
<li>
<a class="nav-header" rel="tooltip" href="#mysql_update" title="Creates an update statement you can copy and paste into your code."  data-toggle="collapse"><i class="icon-caret-right"></i>Update<i class="icon-chevron-down"></i></a>
<ul id="mysql_update" class="nav nav-list collapse">
<li><a rel="tooltip" href="?class=database_mysql&method=update_short" title="Using the first column from the table as an identifier, this will update the database row that is equal to the identifiers value.<br />This is a compact version.<br />See [Alt] if you want a &quot;long&quot; version.">Update<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=database_mysql&method=update_long" title="Using the first column from the table as an identifier, this will update the database row that is equal to the identifiers value.<br />This is a compact version.<br />See [Alt] if you want a &quot;long&quot; version.">Update[alt]<i class="icon-caret-right"></i></a></li>
</ul>
</li>
<li>
<a class="nav-header" rel="tooltip" href="#mysql_select" title="Creates a select statement you can copy and paste into your code."  data-toggle="collapse"><i class="icon-caret-right"></i>Select<i class="icon-chevron-down"></i></a>
<ul id="mysql_select" class="nav nav-list collapse">
<li><a rel="tooltip" href="?class=database_mysql&method=select_one" title="Using the first column from the table as an identifier, this will grab all columns from a <strong>single</strong> row [the first one it finds] in the database that is equal to the value of the identifier.">Select One<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=database_mysql&method=select_multiple" title="Using the first column from the table as an identifier, this will grab all columns from <strong>all</strong> rows in the database that is equal to the value of the identifier.">Select Many<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=database_mysql&method=select_all" title="This will grab all columns from <strong>all</strong> rows in the database.">Select All<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=database_mysql&method=select_count" title="This will generate the code you would copy and paste into your script to show how many rows are in your table">Count Rows<i class="icon-caret-right"></i></a></li>
</ul>
</li>
<li>
<a class="nav-header" rel="tooltip" href="#mysql_search" title="Search Left, Right, or Both"  data-toggle="collapse"><i class="icon-caret-right"></i>Search<i class="icon-chevron-down"></i></a>
<ul id="mysql_search" class="nav nav-list collapse">
<li><a rel="tooltip" href="?class=database_mysql&method=search_left" title="Search Left [%search]">Search Left<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=database_mysql&method=search_right" title="Search Right [search%]">Search Right<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=database_mysql&method=search_both" title="Search Both [%search%]">Search Both<i class="icon-caret-right"></i></a></li>
</ul>
</li>
<li>
<a class="nav-header" rel="tooltip" href="#mysql_delete" title="Which method to use depends on how you setup the form. Look at the method=&quot;&quot; attribute of your form."  data-toggle="collapse"><i class="icon-caret-right"></i>Delete<i class="icon-chevron-down"></i></a>
<ul id="mysql_delete" class="nav nav-list collapse">
<li><a rel="tooltip" href="?class=database_mysql&method=delete" title="Which method to use depends on how you setup the form. Look at the method=&quot;&quot; attribute of your form.">Delete<i class="icon-caret-right"></i></a></li>
</ul>
</li>
</ul>
<a class="nav-header" rel="tooltip" href="#functions" title="These will help with PHP processing."  data-toggle="collapse"><i class="icon-stethoscope"></i>Functions<i class="icon-chevron-down"></i></a>
<ul id="functions" class="nav nav-list collapse">
<li>
<a class="nav-header" rel="tooltip" href="#functions_functions" title="Which method to use depends on how you setup the form. Look at the method=&quot;&quot; attribute of your form."  data-toggle="collapse"><i class="icon-caret-right"></i>Functions<i class="icon-chevron-down"></i></a>
<ul id="functions_functions" class="nav nav-list collapse">
<li><a rel="tooltip" href="?class=functions&method=funct_clean" title="Using the first column from the table as a trigger, [or Trigger column] this will run the $_POST variable though the &quot;clean&quot; function and then assign it to a variable named the same as the name of the column.">Clean<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=functions&method=funct_sql_val" title="Using the first column from the table as a trigger, [or Trigger column] this will run the $_GET variable though the &quot;clean&quot; function and then assign it to a variable named the same as the name of the column.">sql_val<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=functions&method=funct_sql_key" title="Using the first column from the table as a trigger, [or Trigger column] this will run the $_REQUEST variable though the &quot;clean&quot; function and then assign it to a variable named the same as the name of the column.">sql_key<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=functions&method=funct_reverb" title="Using the first column from the table as a trigger, [or Trigger column] this will run the $_REQUEST variable though the &quot;clean&quot; function and then assign it to a variable named the same as the name of the column.">reverb<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=functions&method=funct_print_x" title="Using the first column from the table as a trigger, [or Trigger column] this will run the $_REQUEST variable though the &quot;clean&quot; function and then assign it to a variable named the same as the name of the column.">print_x<i class="icon-caret-right"></i></a></li>
</ul>
</li>
</ul>
<a class="nav-header" rel="tooltip" href="#statistics" title=""  data-toggle="collapse"><i class="icon-bar-chart"></i>Statistics<i class="icon-chevron-down"></i></a>
<ul id="statistics" class="nav nav-list collapse">
<li>
<a class="nav-header" rel="tooltip" href="#statistics_stats" title=""  data-toggle="collapse"><i class="icon-caret-right"></i>Stats<i class="icon-chevron-down"></i></a>
<ul id="statistics_stats" class="nav nav-list collapse">
<li><a rel="tooltip" href="?class=statistics&method=stats" title="">Statistics<i class="icon-caret-right"></i></a></li>
</ul>
</li>
</ul>
<a class="nav-header" rel="tooltip" href="#reverse" title="This is a help"  data-toggle="collapse"><i class="icon-retweet"></i>Reverse<i class="icon-chevron-down"></i></a>
<ul id="reverse" class="nav nav-list collapse">
<li>
<a class="nav-header" rel="tooltip" href="#reverse_form" title="Reverse"  data-toggle="collapse"><i class="icon-caret-right"></i>Form<i class="icon-chevron-down"></i></a>
<ul id="reverse_form" class="nav nav-list collapse">
<li><a rel="tooltip" href="?class=reverse&method=reverse_form" title="Paste a HTML form to generate database table">Reverse Form<i class="icon-caret-right"></i></a></li>
</ul>
</li>
<li>
<a class="nav-header" rel="tooltip" href="#reverse_table" title="Reverse"  data-toggle="collapse"><i class="icon-caret-right"></i>Table<i class="icon-chevron-down"></i></a>
<ul id="reverse_table" class="nav nav-list collapse">
<li><a rel="tooltip" href="?class=reverse&method=reverse_table" title="Paste a HTML table to generate database table">Reverse Table<i class="icon-caret-right"></i></a></li>
</ul>
</li>
</ul>
<a class="nav-header" rel="tooltip" href="#pagesajax" title="Full PHP/HTML Pages"  data-toggle="collapse"><i class="icon-signout"></i>Pages / Ajax<i class="icon-chevron-down"></i></a>
<ul id="pagesajax" class="nav nav-list collapse">
<li>
<a class="nav-header" rel="tooltip" href="#pagesajax_jquerysource" title="Implementation of the source JS files"  data-toggle="collapse"><i class="icon-caret-right"></i>jQuery Source<i class="icon-chevron-down"></i></a>
<ul id="pagesajax_jquerysource" class="nav nav-list collapse">
<li><a rel="tooltip" href="?class=ajax&method=jquery" title="jQuery">jQuery fallback<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=ajax&method=jquery2" title="jQuery">jQuery<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=ajax&method=jquery_ui" title="jQuery UI">jQuery UI fallback<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=ajax&method=jquery_ui2" title="jQuery UI">jQuery UI<i class="icon-caret-right"></i></a></li>
</ul>
</li>
<li>
<a class="nav-header" rel="tooltip" href="#pagesajax_ajax" title="Full Page forms ajaxed by jQuery"  data-toggle="collapse"><i class="icon-caret-right"></i>Ajax<i class="icon-chevron-down"></i></a>
<ul id="pagesajax_ajax" class="nav nav-list collapse">
<li><a rel="tooltip" href="?class=ajax&method=j_full_insert" title="Full Page Ajaxed [Insert]">Full Page Ajaxed [Insert]<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=ajax&method=j_full_update" title="Full Page Ajaxed [Update]">Full Page Ajaxed [Update]<i class="icon-caret-right"></i></a></li>
</ul>
</li>
<li>
<a class="nav-header" rel="tooltip" href="#pagesajax_htmlpages" title="These are <strong>NOT</strong> ajax pages!"  data-toggle="collapse"><i class="icon-caret-right"></i>HTML Pages<i class="icon-chevron-down"></i></a>
<ul id="pagesajax_htmlpages" class="nav nav-list collapse">
<li><a rel="tooltip" href="?class=ajax&method=full_page_insert" title="Full Page [Insert]">Full Page [Insert]<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=ajax&method=full_page_update" title="Full Page [Update]">Full Page [Update]<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=ajax&method=full_page_insert_cmt" title="Full Page Commented">Full Page Commented<i class="icon-caret-right"></i></a></li>
</ul>
</li>
</ul>
<a class="nav-header" rel="tooltip" href="#misc" title="This is a help"  data-toggle="collapse"><i class="icon-shopping-cart"></i>Misc<i class="icon-chevron-down"></i></a>
<ul id="misc" class="nav nav-list collapse">
<li>
<a class="nav-header" rel="tooltip" href="#misc_lists" title="Misc"  data-toggle="collapse"><i class="icon-caret-right"></i>Lists<i class="icon-chevron-down"></i></a>
<ul id="misc_lists" class="nav nav-list collapse">
<li><a rel="tooltip" href="?class=misc&method=list_tables" title="Creates a plain text list of all the <strong>TABLES</strong> in the database">Plain Text Table List<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=misc&method=list_column" title="Creates a plain text list of all the <strong>COLUMNS</strong> in the table">Plain Text Column List<i class="icon-caret-right"></i></a></li>
</ul>
</li>
</ul>
<a class="nav-header" rel="tooltip" href="#forms" title="HTML and HTML5 forms are different; pay attention to what you need!"  data-toggle="collapse"><i class="icon-suitcase"></i>Forms<i class="icon-chevron-down"></i></a>
<ul id="forms" class="nav nav-list collapse">
<li>
<a class="nav-header" rel="tooltip" href="#forms_html" title="These are standard HTML forms"  data-toggle="collapse"><i class="icon-caret-right"></i>HTML<i class="icon-chevron-down"></i></a>
<ul id="forms_html" class="nav nav-list collapse">
<li><a rel="tooltip" href="?class=forms&method=form_html_input" title="This pulls the credentials you used when logging into the database. This is a compact version. Credentials are <strong>not</strong> available through a variable. See [Alt] if you want credentials in variables.">HTML Form<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=forms&method=form_html_input_pre" title="This pulls the credentials you used when logging into the database. This is the long version. Most useful if you need to grab the credentials later in the script.">HTML - Prefilled<i class="icon-caret-right"></i></a></li>
</ul>
</li>
<li>
<a class="nav-header" rel="tooltip" href="#forms_html5" title="These are standard HTML5 forms"  data-toggle="collapse"><i class="icon-caret-right"></i>HTML5<i class="icon-chevron-down"></i></a>
<ul id="forms_html5" class="nav nav-list collapse">
<li><a rel="tooltip" href="?class=forms&method=form_html5_input" title="These are standard HTML5 forms">HTML5 Form<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=forms&method=form_html5_input_pre" title="This runs all the variables [processed via POST] through the sql_val function and then into the database.<br />This is the &quot;long&quot; version.<br />See non [Alt] if you want a &quot;compact&quot; version.">HTML5 Form - Prefilled<i class="icon-caret-right"></i></a></li>
</ul>
</li>
<li>
<a class="nav-header" rel="tooltip" href="#forms_obfuscation" title="These are standard HTML5 forms"  data-toggle="collapse"><i class="icon-caret-right"></i>Obfuscation<i class="icon-chevron-down"></i></a>
<ul id="forms_obfuscation" class="nav nav-list collapse">
<li><a rel="tooltip" href="?class=forms&method=html_obfusc_1" title="Creates a <strong>standard HTML</strong> form using the column names as the &quot;name&quot; of each input field - except for the fact that they are encoded. You must use the special POST to convert the variables/names back into normal text.">*HTML Form - Obfuscated*<i class="icon-caret-right"></i></a></li>
<li><a rel="tooltip" href="?class=forms&method=html_obfusc_2" title="Creates a <strong>standard HTML</strong> form using the column names as the &quot;name&quot; of each input field - except for the fact that they are encoded. You must use the special POST to convert the variables/names back into normal text.<br /><br />This alternative version adds the variable name before the code inside of a PHP comment so that it cannot be seen when someone views source via the browser, but when working with the file, you can see what it is.">*HTML Form - Obfuscated [alt]*<i class="icon-caret-right"></i></a></li>
</ul>
</li>
</ul>
