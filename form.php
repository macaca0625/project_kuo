<?php
$html['css_content'] .= '
#select1{
	float: left;
	width: 81px;
}
#select2{
	float: left;
	width: 81px;
}
#select3{
	float: left;
	width: 200px;
}
';
$html['bodyer'] .= '
	<h3>Forms</h3>
	<div class="row" style="width: 80%;margin: 0 auto;">
		<div class="panel panel-default loginPanel">
			<div class="panel-body">
				<form>
					<div class="form-group">
						<label for="text1">Text</label><br/><input type="text" name="text1" id="text1"/><br/>
						<label for="text2">Text</label><br/><input type="text" name="text2" id="text2"/><br/>
						<label for="text3">Text</label><br/><input type="text" name="text3" id="text3"/><br/><br/>

						<label for="radio1">Radio</label><br/>
						<input type="radio" name="radio_select" id="radio1" checked="1"><label for="radio1">Radio1</label><br/>
						<input type="radio" name="radio_select" id="radio2"><label for="radio2">Radio2</label><br/>
						<input type="radio" name="radio_select" id="radio3"><label for="radio3">Radio3</label><br/>
					</div>
					<strong>Checkbox</strong>
					<div class="checkbox">
						<label><input type="checkbox" name="chkbox" id="chkbox1">ChkBox1</label>
						<label><input type="checkbox" name="chkbox" id="chkbox2">ChkBox2</label>
						<label><input type="checkbox" name="chkbox" id="chkbox3">ChkBox3</label>
						<label><input type="checkbox" name="chkbox" id="chkbox4">ChkBox4</label>
						<label><input type="checkbox" name="chkbox" id="chkbox5">ChkBox5</label>
						<label><input type="checkbox" name="chkbox" id="chkbox6">ChkBox6</label>
					</div>
					<strong>Textarea</strong>
					<textarea class="form-control" rows="3" name="textarea1"></textarea><br/>

					<strong>Select</strong>
					<div class="form-group">
						<select class="form-control" id="select1" name="select1"></select>
						<select class="form-control" id="select2" name="select2" class="hidden"></select>
						<select class="form-control" id="select3" name="select3" class="hidden"></select>
					</div>
					<div class="clearfix"></div><br/>
					<a class="btn btn-primary" id="submit">Submit</a>
				</form>
			</div>
		</div>
	</div>
	<hr/>
';
$html['bottom_js'] .= '
<script>
	var fake_formdata_lv1 = '.$fake_data["json"]['lv1'].';
	var temp_content = "";
	$.each(fake_formdata_lv1, function(i, v) {
		//console.log(v);
		temp_content += "<option>"+v+"</option>"
	});
	$("select#select1").html(temp_content);

	//選擇列表
	$("select#select1").change(function() {
		//console.log($(this).val());
	}); //eof 選擇列表
</script>
';
$html['ready_js'] .= '
		$("body").on("click","#submit",function(){
			form_data = $("form");
			form_data = form_data.serialize();
			console.log(form_data);
		});
';
?>