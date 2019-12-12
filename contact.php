<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Contact Page' order='12'>
	<cms:editable name='cp_map' label='Map' type='textarea' desc='do not use http:// or https://' no_xss_check='1' order='1' />
	<cms:editable name='cp_cc' label='Address Box' type='group' order='2' />
		<cms:editable name='cp_cc_title' label='Title' type='text' group='cp_cc' order='1' />
		<cms:editable name='cp_cc_content' label='Content' type='textarea' no_xss_check='1' group='cp_cc' order='2' />
	<cms:editable name='cp_number' label='Contact Number Box' type='group' order='2' />
		<cms:repeatable name='cp_nums' label='Mobile Numbers or Email Id' order='2' group='cp_number'>
			<cms:editable name='cp_number_title' label='Title' type='text' group='cp_number' order='1' />
			<cms:editable name='cp_nums_name' label='Persons Name' type='text' order='2' />
			<cms:editable name='cp_nums_content' label='Content' type='text' order='3' />
		</cms:repeatable>
</cms:template>
	<cms:embed 'header.html' />
		<!-- Title -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="text-uppercase">Contact Us</h3>
				</div>
			</div>
		</div>
		<!-- Title -->

		<div class="gxcpl-ptop-20"></div>

		<!-- Content -->
		<div class="container">
			<div class="row">

				<div class="col-md-12">
					<div class="gxcpl-map">
						<iframe src="https://<cms:show cp_map />" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
					<div class="gxcpl-ptop-20"></div>
				</div>

				<div class="col-md-3">
					<div class="gxcpl-card-container" style="height: 160px;">
						<div class="gxcpl-card-header" style="letter-spacing: 1.5px;">
							<strong><cms:show cp_cc_title /></strong>
						</div>
						<div class="gxcpl-card-body">
							<cms:show cp_cc_content />
						</div>
					</div>
					<div class="gxcpl-ptop-20"></div>
				</div>

				<cms:show_repeatable 'cp_nums' >
				<div class="col-md-3">
					<div class="gxcpl-card-container" style="height: 160px;">
						<div class="gxcpl-card-header" style="letter-spacing: 1.5px;">
							<strong><cms:show cp_number_title /></strong>
						</div>
						<div class="gxcpl-card-body">
							<cms:show cp_nums_name /><br>
							<cms:show cp_nums_content />
						</div>
					</div>
					<div class="gxcpl-ptop-20"></div>
				</div>
				</cms:show_repeatable>


			</div>
		</div>
		<!-- Content -->

		<cms:embed 'footer.html' />
<?php COUCH::invoke(); ?>