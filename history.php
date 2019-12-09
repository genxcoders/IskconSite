<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='History of ISKCON' parent='_about_' order='2'>
	<cms:editable name='history_title' label='Title' desc='appears as title for History of ISKCON page' type='text' order='1' />
	<cms:editable name='history_banner' label='Banner' desc='appears as page banner | banner size 1170px x 320px' type='image' show_preview='1' preview_width='100' order='2' />
	<cms:editable name='history_content' label='Page Content' desc='page content, useful for SEO' type='richtext' order='3' />
</cms:template>
	<cms:embed 'header.html' />

		<!-- Content - History of Iskcon -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3><cms:show history_title /></h3>
				</div>

				<cms:if history_banner >
				<div class="col-md-12">
					<img class="gxcpl-single-banner" src="<cms:show history_banner />">
					<div class="gxcpl-ptop-20"></div>
				</div>
				</cms:if>

				<div class="col-md-12">
					<div class="gxcpl-text-container text-justify">
						<cms:show history_content />
   					</div>
					<div class="gxcpl-ptop-20"></div>
				</div>

			</div>
		</div>
		<!-- Content - History of Iskcon -->

	<cms:embed 'footer.html' />
<?php COUCH::invoke(); ?>