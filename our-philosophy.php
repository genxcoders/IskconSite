<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Our Philosophy' parent='_about_' order='3'>
	<cms:editable name='philosophy_title' label='Title' desc='appears as title for Our Philosophy page' type='text' order='1' />
	<cms:editable name='philosophy_banner' label='Banner' desc='appears as page banner | banner size 1170px x 320px' type='image' show_preview='1' preview_width='100' order='2' />
	<cms:editable name='philosophy_content' label='Page Content' desc='page content, useful for SEO' type='richtext' order='3' />
</cms:template>
	<cms:embed 'header.html' />

		<!-- Content - Our Philosophy -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="text-uppercase"><cms:show philosophy_title /></h3>
				</div>

				<cms:show philosophy_banner >
				<div class="col-md-12">
					<img class="gxcpl-single-banner" src="<cms:show philosophy_banner />">
					<div class="gxcpl-ptop-20"></div>
				</div>
				</cms:show>

				<div class="col-md-12">
					<div class="gxcpl-text-container text-justify">
						<cms:show philosophy_content />
   					</div>
					<div class="gxcpl-ptop-20"></div>
				</div>

			</div>
		</div>
		<!-- Content - Our Philosophy -->

	<cms:embed 'footer.html' />
<?php COUCH::invoke(); ?>