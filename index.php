<?php
/* 乖寶寶都要噴error reporting唷 */
error_reporting(E_ALL & ~E_NOTICE);
ini_set("display_errors", 'On');
ini_set('display_startup_errors', 'On');
include_once "fake_data.php";
$config['page_cut'] = 10;
//$sys['ru_r'] = explode('/', substr($_SERVER['GB_URI'], 1));
//list($_url1, $_url2, $_url3, $_url4) = $sys['ru_r'];
//var_dump($_SERVER);
$current_page = ($_GET['page'])? $_GET['page'] : 'index';

$config['page_cut'] = 10;
$html['css_content'] .= '
input[type="text"] {
	padding: 3px;
	margin: 2px;
	border-radius: 3px;
	border: 1px solid #B1B1B1;
}
.loginPanel{
	box-shadow: 1px 1px 0px rgba(0,0,0,.3);
}
h1, h3{
	text-align: center;
}
';
$html['header'] = '
<div class="container-fluid">
	<h1>Bootstrap Components Display</h1>
	<p class="text-center">by eason 2015-11-23</p>

	<ul class="list-inline text-center">
		<li><a href="?page=index">index</a></li>
		<li><a href="?page=login">login</a></li>
		<li><a href="?page=table">table</a></li>
		<li><a href="?page=form">form</a></li>
	</ul>
	<hr/>
</div>
';
include_once($current_page.".php");

function make_table($input_array,$class_name=''){
	if(!$input_array) return;
	global $config;
	$page_count = ceil(count($input_array)/$config['page_cut']);
	$output = '';
	$col_count = count($input_array[0]);
	$output .= '<table class="table table-striped '.$class_name.'"><thead>';
	foreach($input_array[0] as $k=>$v){
		$output .= '<th class="text-uppercase">'.$k.'</th>';
	}
	$output .= '</thead><tbody class="">';
	foreach($input_array as $k=>$v){
		if(count($v)!=$col_count){return "欄位數有錯！";}
		$output .= '<tr>';
		foreach($v as $v2){
			$output .= '<td>'.$v2.'</td>';
		}
		$output .= '</tr>';
	}
	$output .= '</tbody></table>';
	$output .= '
	<p>(第<span class="current_page"> 1 </span>頁，共 '.$page_count.' 頁)</p>
	<ul class="pagination">
		<li><a onclick="pagination(\'prev\')" href="javascript:void(0)">&laquo;</a></li>';
	for($i=1;$i<($page_count+1);$i++){
		$output .= '<li><a onclick="pagination('.$i.')" href="javascript:void(0)">'.$i.'</a></li>';
	}
	$output .= '

		<li><a onclick="pagination(\'next\')" href="javascript:void(0)">&raquo;</a></li>
	</ul>
	';

	return $output;
}
include "../template2014.php";
?>