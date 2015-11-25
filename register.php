<?php
$html['css_lib'] .= '
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
';
$html['bodyer'] .= '
<!-- Top content -->
<div class="top-content">
	<div class="inner-bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-5 book" style="text-align: center;">
					<img src="assets/img/temp300-480.jpg" alt="">
				</div>
					<div class="col-sm-6 form-box">
						<div class="form-top">
							<div class="form-top-left">
								<h3><i class="fa fa-pencil" style=""></i> Login Panel</h3>
							</div>
							</div>
							<div class="form-bottom">
								<form role="form" action="" method="post" class="registration-form">
									<div class="form-group">
										<label class="sr-only" for="form-account-name"> Name</label>
											<input type="text" name="form-account-name" placeholder="Account name..." class="form-control" id="form-account-name">
										</div>
										<div class="form-group">
											<label class="sr-only" for="password">Password</label>
											<input type="password" name="password" placeholder="Password..." class="form-control" id="password">
										</div>
										<a class="btn btn-warning">SUBMIT</a>
								</form>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>
';
?>