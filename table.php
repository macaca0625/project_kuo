<?php
// 下面這坨來自
// http://www.minwt.com/webdesign-dev/html/14066.html
$html['css_content'] .= '
.rwd-table{
	background-color: #fff;
	overflow: hidden;
}
.rwd-table tr:nth-of-type(2n){
	background-color: #eee;
}
.rwd-table th,
.rwd-table td {
	margin: 0.5em 1em;
}
.rwd-table {
	min-width: 100%;
}
.rwd-table th {
	display: none;
}
.rwd-table td {
	display: block;
}
.rwd-table td:before {
	content: attr(data-th) " : ";
	font-weight: bold;
	width: 6.5em;
	display: inline-block;
}
.rwd-table th, .rwd-table td {
	text-align: left;
}
.rwd-table th, .rwd-table td:before {
	color: #D20B2A;
	font-weight: bold;
}
@media (min-width: 480px) {
	.rwd-table td:before {
		display: none;
	}
	.rwd-table th, .rwd-table td {
		display: table-cell;
		padding: 0.25em 0.5em;
	}
	.rwd-table th:first-child,
	.rwd-table td:first-child {
		padding-left: 0;
	}
	.rwd-table th:last-child,
	.rwd-table td:last-child {
		padding-right: 0;
	}
	.rwd-table th,
	.rwd-table td {
		padding: 1em !important;
	}

}
.table_ctrl{
	text-align: center;
}
';
// 有包PANEL的版本
/*
$html['bodyer'] .= '
	<h3>Table Page</h3>
	<div class="row" style="width: 80%;margin: 0 auto;">
		<div class="panel panel-default loginPanel">
			<div class="panel-body">
				'.make_table($fake_data['table'],'rwd-table items_table').'
			</div>
		</div>
	</div>
	<hr/>
';
*/
// 沒包PANEL的版本
$html['bodyer'] .= '
	<h3>Table Page</h3>
		<div class="col-md-12 col-sm-6">
			'.make_table($fake_data['table'],'rwd-table items_table').'
		</div>
	<hr/>
';


$html['bottom_js'] .= '
<script>
var page_cut = '.$config['page_cut'].';
var current_page = 1;
var max_page = Math.floor(($("table.items_table tbody tr").size())/page_cut);
pagination(1);
function pagination(page){
	// 用來幫table data做分頁切換的,單純用 hide & show 處理.
	if(page=="prev") page = current_page-1;
	if(page=="next") page = current_page+1;
	if(page < 1) page =1;
	if(page > max_page) page = max_page;

	var start = page_cut * (page-1);
	var end = page_cut * (page);
	var item_no_array = [];
	for (var i=start; i<end; i++) {
		item_no_array.push(i);
	}
	$("table.items_table tbody tr").hide();

	$.each(item_no_array, function(i, v) {
   		$("table.items_table tbody tr").eq(v).show(1000);
	});
	current_page = page;
	$(".current_page").html(" "+current_page+" ");
}
</script>
';

?>