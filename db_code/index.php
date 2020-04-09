<?php
if (isset($_SERVER['HTTP_ACCEPT_ENCODING']) && substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) {
	ob_start("ob_gzhandler");
} else {
	ob_start();
}
session_start();

if (file_exists('dbcg_demo.php')) include 'dbcg_demo.php';

if (!function_exists('objectToArr' .
	'ay'
)) {
	function objectToArray($d)
	{
		if (is_object($d)) {
			$d = get_object_vars($d);
		}
		if (is_array($d)) {
			return array_map(__FUNCTION__, $d);
		} else {
			return $d;
		}
	}
} //end function not exist
if (!function_exists('selected')) {
	function selected($saved, $value)
	{
		if ($saved == $value) $selected = 'selected="selected"'; else $selected = '';
		
		return $selected;
	}
} //end function not exist
if (!function_exists('print_x')) {
	function print_x($value)
	{
		echo '<pre style="text-align:left;"><hr />';
		print_r($value);
		echo '<hr /></pre>';
	}
} //end function not exist
if (!function_exists('current_page')) {
	function current_page($current, $page)
	{
		if (is_array($current)) {
			if (in_array($page, $current)) $is_current = 'class="open"'; else $is_current = '';
			
			return $is_current;
		}
		if ($current == $page) $is_current = 'class="current"'; else $is_current = '';
		
		return $is_current;
	}
} //end function not exist
if (!function_exists('sql_val')) {
	function sql_val($input)
	{
		global $link;
		if (get_magic_quotes_gpc()) {
			$input = stripslashes($input);
		}
		
		return ("'" . mysqli_real_escape_string($link, $input) . "'");
	}
} //end function not exist
if (!function_exists('sql_key')) {
	function sql_key($input)
	{
		global $link;
		if (get_magic_quotes_gpc()) {
			$input = stripslashes($input);
		}
		
		return ("`" . mysqli_real_escape_string($link, $input) . "`");
	}
} //end function not exist
if (!function_exists('checked')) {
	function checked($checked, $current)
	{
		if ($checked == $current) return 'checked="checked"';
	}
} //end function not exist
if (!function_exists('contains')) {
	function contains($haystack, $needle)
	{
		return (strlen(strstr($haystack, $needle)) > 0);
	}
} //end function not exist

include 'dbcg_assets/_config.php';
include 'dbcg_assets/_DBCG_class.php';

global $link;
$_SESSION['loaded'] = 0;
//allow logout
if (isset($_REQUEST['logout'])) {
	$_POST    = array();
	$_GET     = array();
	$_SESSION = array();
	session_destroy();
	header('Location: ' . $_SERVER['PHP_SELF']);
}

if (!empty($_POST['quick_login'])) {

//print_x( $_POST['quick_login'] );
//print_x( $log_in_sets[ $_POST['quick_login'] ] );
	
	//have to clear out old session variables so it will fail if something is amiss later in script.
	unset($_SESSION['myTable'], $_SESSION['myServer'], $_SESSION['myDB'], $_SESSION['myUser'], $_SESSION['myPass']);
	$_SESSION['myServer']    = $log_in_sets[$_POST['quick_login']]['0'];
	$_SESSION['myDB']        = $log_in_sets[$_POST['quick_login']]['1'];
	$_SESSION['myUser']      = $log_in_sets[$_POST['quick_login']]['2'];
	$_SESSION['myPass']      = $log_in_sets[$_POST['quick_login']]['3'];
	$_SESSION['myQuckLogin'] = $_POST['quick_login'];
} else {
	if (!empty($_POST['myUser'])) {
		$_SESSION['myServer'] = $_POST['myServer'];
		$_SESSION['myDB']     = $_POST['myDB'];
		$_SESSION['myUser']   = $_POST['myUser'];
		$_SESSION['myPass']   = $_POST['myPass'];
		$_SESSION['myTable']  = $_POST['myTable'];
	}
}

//print_x($_SESSION);

if (!empty($_POST['table'])) $_SESSION['myTable'] = $_POST['table'];

if (!isset($_SESSION['custom_columns'])) $_SESSION['custom_columns'] = '0';
if (isset($_POST['trigger']) && !isset($_POST['custom_columns'])) {
	$_SESSION['custom_columns'] = '0';
}
if (isset($_POST['trigger']) && isset($_POST['custom_columns'])) {
	$_SESSION['custom_columns'] = '1';
}

if (!isset($_SESSION['if_statements'])) $_SESSION['if_statements'] = '0';
if (isset($_POST['trigger']) && !isset($_POST['if_statements'])) {
	$_SESSION['if_statements'] = '0';
}
if (isset($_POST['trigger']) && isset($_POST['if_statements'])) {
	$_SESSION['if_statements'] = '1';
}

if (!isset($_SESSION['jquery_min'])) $_SESSION['jquery_min'] = '.min';
if (isset($_POST['trigger']) && !isset($_POST['jquery_min'])) {
	$_SESSION['jquery_min'] = '.min';
}
if (isset($_POST['trigger']) && isset($_POST['jquery_min'])) {
	$_SESSION['jquery_min'] = '';
}

if (!isset($_SESSION['safe_mode'])) $_SESSION['safe_mode'] = '1';
if (isset($_POST['trigger']) && !isset($_POST['safe_mode'])) {
	$_SESSION['safe_mode'] = '0';
}
if (isset($_POST['trigger']) && isset($_POST['safe_mode'])) {
	$_SESSION['safe_mode'] = '1';
}

if (empty($_SESSION['if_condition'])) $_SESSION['if_condition'] = 'isset';
if (isset($_POST['trigger']) && isset($_POST['if_condition'])) {
	$_SESSION['if_condition'] = $_POST['if_condition'];
}

if (empty($_SESSION['return_function'])) $_SESSION['return_function'] = 'clean';
if (isset($_POST['trigger']) && isset($_POST['return_function'])) {
	$_SESSION['return_function'] = $_POST['return_function'];
}

if (empty($_SESSION['return_ternary'])) $_SESSION['return_ternary'] = 'ternary';
if (isset($_POST['trigger']) && isset($_POST['return_ternary'])) {
	$_SESSION['return_ternary'] = $_POST['return_ternary'];
}

if (empty($_SESSION['return_array'])) $_SESSION['return_array'] = 'normal';
if (isset($_POST['trigger']) && isset($_POST['return_array'])) {
	$_SESSION['return_array'] = $_POST['return_array'];
}

if (empty($_SESSION['jquery_version'])) $_SESSION['jquery_version'] = $jquery_jquery;
if (isset($_POST['trigger']) && isset($_POST['jquery_version'])) {
	$_SESSION['jquery_version'] = $_POST['jquery_version'];
}

if (empty($_SESSION['compact'])) $_SESSION['compact'] = '';
if (isset($_POST['trigger']) && isset($_POST['compact'])) {
	if (isset($_GET['method']) && contains($_GET['method'], '_long')) header('Location: ' . preg_replace('/_long$/', '', $_SERVER['REQUEST_URI']) . '_short');
	if (isset($_GET['method']) && contains($_GET['method'], '_short')) header('Location: ' . preg_replace('/_short$/', '', $_SERVER['REQUEST_URI']) . '_long');
}

if (empty($_SESSION['pgr'])) $_SESSION['pgr'] = '0';
if (isset($_POST['trigger']) && isset($_POST['pgr'])) {
	$_SESSION['pgr'] = $_POST['pgr'];
}

if (empty($_SESSION['query'])) $_SESSION['query'] = '1';
if (isset($_POST['trigger']) && isset($_POST['query'])) {
	$_SESSION['query'] = $_POST['query'];
}

if (empty($_SESSION['pdo_fetch'])) $_SESSION['pdo_fetch'] = 'PDO::FETCH_BOTH';
if (isset($_POST['trigger']) && isset($_POST['pdo_fetch'])) {
	$_SESSION['pdo_fetch'] = $_POST['pdo_fetch'];
}

if (empty($_SESSION['ajax_file'])) $_SESSION['ajax_file'] = '_ajax.php';
if (isset($_POST['trigger']) && isset($_POST['ajax_file'])) {
	$_SESSION['ajax_file'] = $_POST['ajax_file'];
}

if (empty($_SESSION['dup_column'])) $_SESSION['dup_column'] = '';
if (isset($_POST['trigger']) && isset($_POST['dup_column'])) {
	$_SESSION['dup_column'] = $_POST['dup_column'];
}

if (empty($_SESSION['secondary'])) $_SESSION['secondary'] = '';
if (isset($_POST['trigger']) && isset($_POST['secondary'])) {
	$_SESSION['secondary'] = $_POST['secondary'];
}


if (empty($_SESSION['pdo_fetch'])) $_SESSION['pdo_fetch'] = 'PDO::FETCH_BOTH';
if (isset($_POST['trigger']) && isset($_POST['pdo_fetch'])) {
	$_SESSION['pdo_fetch'] = $_POST['pdo_fetch'];
}

//	if (!isset($_SESSION['pretty'])) $_SESSION['pretty'] = '0';
//	if (isset($_POST['trigger']) && !isset($_POST['pretty'])) { $_SESSION['pretty'] = '0'; }
//	if (isset($_POST['trigger']) && isset($_POST['pretty'])) { $_SESSION['pretty'] = '1'; }
//	$pretty = $_SESSION['pretty'];

if (!isset($_SESSION['tooltip'])) $_SESSION['tooltip'] = '1';
if (isset($_POST['trigger']) && !isset($_POST['tooltip'])) {
	$_SESSION['tooltip'] = '0';
}
if (isset($_POST['trigger']) && isset($_POST['tooltip'])) {
	$_SESSION['tooltip'] = '1';
}
$tooltip = $_SESSION['tooltip'];

if (!empty($_SESSION['myDB']) && !empty($_SESSION['myTable'])) {

//		$meth_class = str_replace(trim($_SERVER["PHP_SELF"], 'index.php'), '', $_SERVER["REQUEST_URI"]);
//		$meth_class = isset($meth_class) ? explode('.',$meth_class) : '';
//		$class = isset($meth_class['0']) ? $meth_class['0'] : '';
//		$method = isset($meth_class['1']) ? $meth_class['1'] : '';
	
	$class  = isset($_GET['class']) ? $_GET['class'] : '';
	$method = isset($_GET['method']) ? $_GET['method'] : '';
	if (!empty($class) && empty($method)) header('Location: ' . $_SERVER['PHP_SELF'] . '?logout');
	if (empty($class) && !empty($method)) header('Location: ' . $_SERVER['PHP_SELF'] . '?logout');

//		$pages = explode('/', $_SERVER['SCRIPT_NAME']);
//		$page = end($pages);
	
	if (!empty($method) && !empty($class) && $class != 'index' && file_exists('dbcg_assets/plugins/' . $class . '/class.php')) {
		include 'dbcg_assets/plugins/' . $class . '/class.php';
		$dbcg = new $class;
		if (!method_exists($dbcg, $method)) header('Location: ' . $_SERVER['PHP_SELF'] . '?logout');
		$_SESSION['loaded'] = 1;
	} else {
		$dbcg = new DBCG;
	}
	
	if (empty($_SESSION['primary'])) $_SESSION['primary'] = $dbcg->first_fields;
	if (isset($_POST['trigger']) && isset($_POST['pdo_fetch'])) {
		$_SESSION['primary'] = $_POST['primary'];
	}
	
	if ($method == "stats") $pretty = 0;
	if ($method == "reverse_form" && empty($_POST['code'])) $pretty = 0;
	if ($method == "reverse_table" && empty($_POST['code'])) $pretty = 0;
	
}//end !empty session myDB and myTable


if (isset($_SESSION['myServer'])) {
	
	if (file_exists('dbcg_demo.php')) {
		include 'dbcg_demo.php';
	} else {
		$link = mysqli_connect($_SESSION['myServer'], $_SESSION['myUser'], $_SESSION['myPass'], $_SESSION['myDB']);
		if (mysqli_connect_errno()) {
			//echo "Failed to connect to MySQL: " . mysqli_connect_error();
			header('Location: ' . $_SERVER['PHP_SELF'] . '?logout');
		} else {
			$dbname = $_SESSION['myDB'];
		}
		//if (!$link) {
		/* die('Could not connect to MySQL server: ' . mysql_error()); */
		//	header('Location: ' . $_SERVER['PHP_SELF'] . '?logout');
		//}
		//$dbname      = $_SESSION['myDB'];
		//$db_selected = mysql_select_db($dbname, $link);
		//if (!$db_selected) {
		//	die("Could not set $dbname: " . mysql_error());
		//}
	}
	//start generate list for step2 - list of tables.
	
	$sql    = "SHOW TABLES FROM `$dbname`";
	$result = mysqli_query($link, $sql);
	if (!$result) {
		echo "DB Error, could not list tables<br />MySQL Error: " . mysqli_error($link);
		exit;
	}
	while ($row = mysqli_fetch_row($result)) {
		$dbcg->list_tables[] = $row[0];
		$list_tables[]       = $row[0];
	}
	
	if (!empty($_SESSION['myTable']) && !in_array($_SESSION['myTable'], $dbcg->list_tables)) unset($_SESSION['myTable']);
	
	if (!empty($_SESSION['myTable'])) {
		$dbcg->primary_key = mysqli_fetch_assoc(mysqli_query($link, "SHOW INDEX FROM " . $dbcg->sql_key($_SESSION['myTable'])));
		$dbcg->primary_key = !empty($dbcg->primary_key['Column_name']) ? $dbcg->primary_key['Column_name'] : "";
	}
} //end isset post user

if (!empty($_SESSION['myTable'])) {
	$result = mysqli_query($link, 'DESCRIBE ' . sql_key($_SESSION['myTable']));
	if (!$result) {
		echo 'Could not run query: ' . mysqli_error();
	}
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$dbcg->fields[] = $row['Field'];
			$dbcg->types[]  = $row['Type'];
			if ($row['Key'] == "PRI") {
				$dbcg->primary_key = $row['Field'];
			}
		}
		$dbcg->first_fields  = current($dbcg->fields);
		$dbcg->second_fields = next($dbcg->fields);
		$dbcg->first_types   = current($dbcg->types);
		$dbcg->last_fields   = end($dbcg->fields);
		$dbcg->last_types    = end($dbcg->types);
		$get_tables          = mysqli_query($link, "SHOW TABLES FROM `$dbname`");
		while ($row = mysqli_fetch_row($get_tables)) {
			$dbcg->tables[] = $row[0];
		}
		if (empty($dbcg->primary_key) & !empty($first_fields)) $dbcg->primary_key = $first_fields;
	}
	if (!isset($_POST['primary'])) $_POST['primary'] = $dbcg->primary_key;
	if (empty($_POST['dup_column'])) $_POST['dup_column'] = $dbcg->second_fields;
	if (!empty($_POST['primary'])) $dbcg->first_fields = $_POST['primary'];
	if (!empty($_POST['secondary'])) $dbcg->second_fields = $_POST['secondary'];
}

if (!empty($_SESSION['myDB']) && !empty($_SESSION['myTable']) && !empty($method) && !empty($class) && $class != 'index') {
	$print_results = $dbcg->$method();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>DBCG <?php echo $version; ?></title>
	<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
	
	<meta name="description" content=""/>
	<meta name="author" content=""/>
	<!--meta name="google" value="notranslate" /-->
	
	<link rel="stylesheet" type="text/css" href="dbcg_assets/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="dbcg_assets/css/dbcg.css"/>
	<link rel="stylesheet" href="dbcg_assets/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="dbcg_assets/css/bootstrap-responsive.css"/>
	
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script>!window.jQuery && document.write(unescape('%3Cscript type="text/javascript" src="dbcg_assets/js/jquery.3.1.1.min.js"%3E%3C/script%3E'));</script>
	
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- Le fav and touch icons -->
	<link rel="shortcut icon" href="dbcg_assets/img/favicon.png?v=<?php echo $version; ?>"/>
	<?php echo (isset($script)) ? $script : ''; ?>
</head>

<!--[if lt IE 7 ]>
<body class="ie ie6" <?php if ($pretty == 1) echo 'onload="prettyPrint()" id="pretty_print"'; ?>> <![endif]-->
<!--[if IE 7 ]>
<body class="ie ie7 " <?php if ($pretty == 1) echo 'onload="prettyPrint()" id="pretty_print"'; ?>> <![endif]-->
<!--[if IE 8 ]>
<body class="ie ie8 " <?php if ($pretty == 1) echo 'onload="prettyPrint()" id="pretty_print"'; ?>> <![endif]-->
<!--[if IE 9 ]>
<body class="ie ie9 " <?php if ($pretty == 1) echo 'onload="prettyPrint()" id="pretty_print"'; ?>> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<body class="" <?php if ($pretty == 1) echo 'onload="prettyPrint()" id="pretty_print"'; ?>>
<!--<![endif]-->

<div class="navbar">
	<div class="navbar-inner">
		<a class="brand" href="index.php"><i class="icon-cogs" style="font-size: 25px;"></i>&nbsp;DBCG <span><?php echo $version; ?></span></a>
	</div>
</div>

<div class="sidebar-nav">
	<div class="navbar">
		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a>
		<a href="index.php" class="nav-header" data-toggle="collapse" data-target=".nav-collapse"><i class="icon-dashboard"></i>Dashboard</a>
		<div class="nav-collapse collapse">
			<?php if (!empty($_SESSION['myServer']) && !empty($dbcg->myTable)) echo $dbcg->generate_menu(); ?>
			<a href="?logout" class="btn btn-danger btn-block">Logout <span class="icon-remove"></span></a>
		</div>
	</div>
	<?php if (!empty($print_results)) { ?>
		<!--div class="block">
				<p class="block-heading">Quick Options</p>
				<div class="block-body">
					<form method="post">
						<label class="checkbox span12">Pretty Print</label>
						<div class="span12">
							<div class="switch" data-on-label="<i class='icon-ok'></i>" data-off-label="<i class='icon-remove icon-white'></i>"  data-on="warning" data-off="primary">
								<input class=" " type="checkbox" name="pretty" value="1" onchange="this.form.submit();" <?php echo checked('1', $pretty); ?> />
							</div>
						</div>
						<div class="clearfix"></div>
						<hr />

						<label class="checkbox span12">ToolTip</label>
						<div class="span12">
							<div class="switch" data-on-label="<i class='icon-ok'></i>" data-off-label="<i class='icon-remove icon-white'></i>"  data-on="success" data-off="primary">
								<input class=" " type="checkbox" name="tooltip" value="1" onchange="this.form.submit();" <?php echo checked('1', $tooltip); ?> />
							</div>
						</div>
						<input type="hidden" name="trigger" value="1">
						<div class="clearfix"></div>
					</form>
				</div>
			</div-->
	<?php } ?>
</div>

<div class="content">
	<div class="header">
		<?php
		if (!empty($_SESSION['myServer'])) {
			echo '<h1 class="page-title">';
			echo ucfirst($_SESSION['myServer']);
			if (!empty($dbcg->myDB)) {
				echo '&nbsp;&nbsp;<i class="icon-chevron-right"></i>&nbsp;&nbsp;';
				echo ucfirst($dbcg->myDB);
			}
			if (!empty($dbcg->myTable)) {
				echo '&nbsp;&nbsp;<i class="icon-chevron-right"></i>&nbsp;&nbsp;';
				echo ucfirst($dbcg->myTable);
			}
			if (!empty($class) && $class != 'index') {
				echo '&nbsp;&nbsp;<i class="icon-chevron-right"></i>&nbsp;&nbsp;';
				echo ucfirst(str_replace('_', ' ', $class));
			}
			if (!empty($method) && $method != 'php') {
				echo '&nbsp;&nbsp;<i class="icon-chevron-right"></i>&nbsp;&nbsp;';
				echo ucfirst(str_replace('_', ' ', $method));
			}
			echo '</h1>';
		} else {
			echo '<h1 class="page-title">Login</h1>';
		}
		?>
	</div>
	<ul class="breadcrumb">
		<?php if (!empty($dbcg->myTable)) {
			$dbcg->get_stats(); ?>
			<li>
				<small><strong><?php echo $dbcg->myTable; ?></strong> uses <strong class="label label-info"
																				   title="<?php echo $dbcg->statistics['pcent']['dbsize']; ?>%"><?php echo $dbcg->format_size($dbcg->statistics['table']['dbsize']); ?></strong> of the
					<span><?php echo $dbcg->format_size($dbcg->statistics['dbase']['dbsize']); ?></span> database.
				</small>
			</li>
			<li>
				<small>It has <strong class="label label-info" title="<?php echo $dbcg->statistics['pcent']['ovhead']; ?>%"><?php echo $dbcg->format_size($dbcg->statistics['table']['ovhead']); ?></strong> of the
					<span><?php echo $dbcg->format_size($dbcg->statistics['dbase']['ovhead']); ?></span> overhead.
				</small>
			</li>
			<li>
				<small>Its Average Row size is <strong class="label label-info" title="<?php echo $dbcg->statistics['pcent']['avgrow']; ?>%"><?php echo $dbcg->format_size($dbcg->statistics['table']['avgrow']); ?></strong> of the
					<span><?php echo $dbcg->format_size($dbcg->statistics['dbase']['avgrow']); ?></span> database.
				</small>
			</li>
			<li>
				<small>It has <strong class="label label-info" title="<?php echo $dbcg->statistics['pcent']['allrow']; ?>%"><?php echo $dbcg->statistics['table']['allrow']; ?></strong> of the
					<span><?php echo $dbcg->statistics['dbase']['allrow']; ?></span> rows.
				</small>
			</li>
			<li>
				<small>And uses <strong class="label label-info" title="<?php echo $dbcg->statistics['pcent']['allcol']; ?>%"><?php echo $dbcg->statistics['table']['allcol']; ?> </strong> of the
					<span><?php echo $dbcg->statistics['dbase']['allcol']; ?></span> columns.
				</small>
			</li>
		<?php } ?>
	</ul>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="row-fluid">
				<div class="span10">
					<?php if (!empty($_SESSION['myServer']) && !empty($dbcg->myTable) && empty($print_results)) { ?>
						<div class="hero-unit alert alert-success">
							<h1><i class="icon-arrow-left"></i> Logged In!!</h1>
							<p>Pick an operation on the left menu to start!</p>
						</div>
					<?php } ?>
					<?php if (!empty($print_results)) { ?>
						<div class="block">
							<div class="block-heading">
								<span class="block-icon pull-right">
									<a href="javascript:void(0);" class="btn btn-mini font_bigger pull-right" style="font-size: 18px;line-height: 35px;"><i class="icon-double-angle-up"></i></a>
									<a href="javascript:void(0);" class="btn btn-mini font_smaller pull-right" style="font-size: 18px;line-height: 35px;"><i class="icon-double-angle-down"></i></a>
								</span>
								<a href="#page_results" data-toggle="collapse">Results</a>
							</div>
							<div class="block-body" id="page_results" class="block-body in collapse">
								<?php if ($pretty == 1) { ?>
									<pre id="results" style="word-break: break-all;word-wrap: break-word;" class="prettyprint linenums"><?php echo $print_results; ?></pre>
								<?php } else { ?>
									<div id="results" style="word-break: break-all;word-wrap: break-word;padding: 20px;"><?php echo $print_results; ?></div>
								<?php } ?>
							</div>
						</div>
						<div class="block">
							<div class="block-body" id="columns_results" class="block-body in collapse">
								Table Columns: <?php echo implode(', ', $dbcg->fields); ?>
							</div>
						</div>
					<?php } ?>
					<?php if (empty($_SESSION['myServer'])) { ?>
						<div class="hero-unit alert alert-error">
							<h1><i class="icon-arrow-down"></i> You Must Login!!</h1>
							<p>You must log into a database before you can do anything else!</p>
						</div>
						<div class="block">
							<p class="block-heading">Select A Database</p>
							<div class="block-body">
								<form action="" method="POST" class="validate">
									<label for="quick_login"><?php echo $lang['auto_login']; ?></label>
									<?php
									$quick_login = (!empty($_SESSION['database']['quick_login'])) ? $_SESSION['database']['quick_login'] : '';
									echo '<select class="span12" name="quick_login"  onchange="this.form.submit();" ><option><!-- Blank --></option>';
									foreach ($log_in_sets as $key => $val) {
										echo '<option value="' . $key . '" ' . selected($key, $quick_login) . ' >' . $key . '</option>';
									}
									echo '</select>';
									?>
									<style>
										.hr_or {
											text-align: center;
											margin: 10px 50px;
										}
										
										.hr_or span {
											font-size: 30px;
											font-weight: bold;
											background: white;
											padding: 0 50px;
											color: #555;
										}
										
										.hr_or hr {
											margin-top: -15px;
											background: none;
											border-bottom: 5px solid #BBB;
										}
									</style>
									<div class="hr_or">
										<span>OR</span>
										<hr/>
									</div>
									
									<label for="myServer"><strong><?php echo $lang['login_host']; ?></strong>
										<small>e.g. localhost</small>
									</label>
									<input type="text" class="span12 required" value='localhost' name="myServer" id="myServer"/>
									
									<label for="myDB"><strong><?php echo $lang['login_database']; ?></strong></label>
									<input type="text" class="span12 required" value="" name="myDB" id="myDB"/>
									
									<label for="myUser"><strong><?php echo $lang['login_username']; ?></strong></label>
									<input type="text" class="span12 required" value="" name="myUser" id="myUser"/>
									
									<label for="myPass"><strong><?php echo $lang['login_password']; ?></strong></label>
									<input type="password" class="span12 required" value="" name="myPass" id="myPass"/>
									
									<label for="myTable"><strong><?php echo $lang['table']; ?></strong></label>
									<input type="text" class="span12 required" value="Demo_1" name="myTable" id="myTable"/>
									
									<div class="clearfix"></div>
									
									<input type="submit" class="btn btn-primary" value="Login" name="login"/>
									<input type="submit" class="btn btn-danger pull-right" value="Logout" name="logout"/>
								</form><!-- End of .box -->
							</div>
						</div>
					<?php } ?>
					<?php if (!empty($_SESSION['myServer'])) { ?>
						
						<?php if (!isset($dbcg->myTable)) { ?>
							<div class="hero-unit alert alert-info">
								<h1><i class="icon-arrow-down"></i> Logged In!!</h1>
								<p>Change the database, or select a tabel below!</p>
							</div>
						<?php } ?>
						
						<div class="block" style="background:#F5F5F5">
							<a href="#select_a_database" class="block-heading" data-toggle="collapse">Select A Database</a>
							<div class="block-body" id="select_a_database" class="block-body in collapse">
								<h3>Auto Login</h3>
								<form action="" method="POST" id="select_table">
									<?php if (!empty($log_in_sets)) { ?>
										<label for="p1_username"><?php echo $lang['database']; ?></label>
										<?php
										$quick_login = (!empty($_SESSION['myQuckLogin'])) ? $_SESSION['myQuckLogin'] : '';
										echo '<select class="span12" name="quick_login"  onchange="this.form.submit();" ><option><!-- Blank --></option>';
										foreach ($log_in_sets as $key => $val) {
											echo '<option value="' . $key . '" ' . selected($key, $quick_login) . ' >' . $key . '</option>';
										}
										echo '</select>';
										?>
									<?php } ?>
									<?php if (!empty($list_tables)) { ?>
										<label for="p1_username"><?php echo $lang['table']; ?></label>
										<?php
										echo '<select class="span12" id="tables" name="table" onchange="this.form.submit();">';
										echo '<option value="" ></option>';
										foreach ($list_tables as $key => $val) {
											echo '<option ';
											if (isset($_SESSION['myTable'])) {
												echo selected($_SESSION['myTable'], $val);
											}
											echo ' value="' . $val . '" >' . $val;
										}//end foreach
										echo '</select>';
									}
									?>
									<a href="?logout" class="btn btn-danger pull-right">Logout</a>
									<div class="clearfix"></div>
								</form>
							</div>
						</div>
					<?php } ?>
				</div>
				<div class="span2">
					<?php
					if (!empty($_SESSION['myServer']) && !empty($dbcg->myTable)) {
						$form_options = $dbcg->show_options();
						if (count($form_options) > 0) {
							echo '<div class="block"><p class="block-heading">' . $lang['options'] . ' | ' . $lang['options_sub'] . '</p><div class="block-body"><form action="" method="POST">
							<input type=hidden name=trigger value=1 />';
						}
						foreach ($form_options as $key => $option) {
							echo $option;
						}
						if (count($form_options) > 0) echo '</form></div></div>';
					}
					?>
					<?php if ($debug) { ?>
						<div class="block">
							<p class="block-heading">POST</p>
							<div class="block-body">
								<?php print_x($_POST); ?>
							</div>
						</div>
						<div class="block">
							<p class="block-heading">GET</p>
							<div class="block-body">
								<?php print_x($_GET); ?>
							</div>
						</div>
						<div class="block">
							<p class="block-heading">REQUEST</p>
							<div class="block-body">
								<?php print_x($_REQUEST); ?>
							</div>
						</div>
						<div class="block">
							<p class="block-heading">SESSION</p>
							<div class="block-body">
								<?php print_x($_SESSION); ?>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
			<footer>
				<hr/>
				<p>
					&copy; 2013 - <?php echo date('Y'); ?> <a href="http://codecanyon.net/user/CodeFusion/portfolio" target="_blank">Bradley Klco</a> All rights reserved.<br/>
					<?php echo 'Ver: ' . $version; ?> | <?php echo 'PHP Version: ' . phpversion(); ?>
				</p>
			</footer>
		</div>
	</div>
</div>

<script src="dbcg_assets/js/bootstrap.js"></script>
<script src="dbcg_assets/js/bootstrap-tooltip.js"></script>
<script src="dbcg_assets/js/bootstrap-collapse.js"></script>
<script src="dbcg_assets/js/bootstrapSwitch.js"></script>
<?php if ($pretty == 1) { ?>
	<script src="dbcg_assets/js/google-code-prettify/prettify.js"></script>
<?php } ?>
<script>
	$(document).ready(function () {
		<?php if ($tooltip) { ?>
		$("[rel=tooltip]").tooltip();
		<?php } else { ?>
		$("[rel=tooltip]").tooltip('destroy');
		<?php } ?>
		$('.chzn-done').on('change', function () {
			$(this).closest("form").submit();
		});
		$('.font_smaller').click(function () {
			var fsize = (parseInt($("#results").css('fontSize').replace('px', '')) - 2);
			var lhght = (parseInt($("#results").css('line-height').replace('px', '')) - 2);
			$("#results, ol.linenums li").css('fontSize', fsize + 'px');
			$("#results, ol.linenums li").css('line-height', (fsize + 4) + 'px');
		});
		$('.font_bigger').click(function () {
			var fsize = (parseInt($("#results").css('fontSize').replace('px', '')) + 2);
			$("#results, ol.linenums li").css('fontSize', fsize + 'px').css('line-height', (fsize + 4) + 'px');
		});
		/* Opens the menu to the current page/link */
		$(".sidebar-nav a").each(function () {
			if (this.href == window.location.href) {
				$(this).addClass("active").parent().parent().addClass("in").parent().parent().addClass("in");
				$(this).parent().parent().prev().addClass("collapsed").parent().parent().prev().addClass("collapsed");
			}
		});
	});
</script>
</body>
</html>