<?php
$html['bodyer'] .= '
	<h3>Table Page</h3>
	<div class="row" style="width: 80%;margin: 0 auto;">
		<div class="panel panel-default loginPanel">
			<div class="panel-body">
				'.make_table($fake_data['table'],'items_table').'
			</div>
		</div>
	</div>
	<hr/>
';

$html['bottom_js'] .= '
<script>
var page_cut = '.$config['page_cut'].';
var current_page = 1;
pagination(1);
function pagination(page){
	// 用來幫table data做分頁切換的,單純用 hide & show 處理.
	if(page=="prev") page = current_page-1;
	if(page=="next") page = current_page+1;
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