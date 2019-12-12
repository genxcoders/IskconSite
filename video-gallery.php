<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Video Gallery' clonable='1' parent='_media_' order='11' >
	
	<cms:editable name='video_key' label='Video Key' type='text' order='1' />

	<cms:globals>
		<cms:editable name='vg_title' label='Title' desc='appears as Title for hte Video Gallery page' type='text' order='1' />
	</cms:globals>
</cms:template>
	<cms:embed 'header.html' />
		<!-- Title -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="text-uppercase"><cms:show_globals><cms:show vg_title /></cms:show_globals></h3>
					<div class="gxcpl-ptop-30"></div>
				</div>
			</div>
		</div>
		<!-- Title -->

		<!-- Banner -->
		<div class="container">
			<div class="row">

				<cms:pages masterpage=k_template_name>
				<div class="col-md-4" style="height: 290px;">					
					<div class="gxcpl-video-container">
						<iframe class="iframe" src="https://www.youtube.com/embed/<cms:show video_key />" allowfullscreen="" width="100%" height="200" frameborder="0"></iframe>
					</div>
					<h5><cms:excerptHTML count='15'><cms:show k_page_title /></cms:excerptHTML></h5>
					<div class="gxcpl-ptop-20"></div>
				</div>
				</cms:pages>

			</div>
		</div>
		<!-- Banner -->

		<div class="gxcpl-ptop-30"></div>
		<cms:embed 'footer.html' />
<?php COUCH::invoke(); ?>