<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Photo Gallery' parent='_media_' clonable='1' dynamic_folders='1' order='10'>
	
	<cms:repeatable name='pg_gallery' label='Gallery' order='1'>
		<cms:editable name='pg_gallery_image' label='Image' type='image' show_preview='1' preview_width='100' order='1' />
		<cms:editable name='pg_gallery_desc' label='Photo Description' type='text' order='2' />
	</cms:repeatable>

	<cms:globals>
		<cms:editable name='pg_title' label='Title' desc='appears as title for Photo Gallery page' type='text' order='1' />
	</cms:globals>
</cms:template>
	<cms:embed 'header.html' />
		<!-- Title -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="text-uppercase"><cms:show_globals><cms:show pg_title /></cms:show_globals></h3>
				</div>
			</div>
		</div>
		<!-- Title -->

		<!-- Gallery -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<center>
						<div class="btn-group">
							<button type="button" id="all" class="btn btn-success btn-sm">All</button>
							<cms:folders mastepage=k_template_name>
							<button type="button" id="<cms:show k_folder_id />" class="btn btn-success btn-sm"><cms:show k_folder_title /></button>
							</cms:folders>
						</div>
					</center>
					<div class="gxcpl-ptop-30"></div>
				</div>
				<div id="parent" class="row">
					<cms:pages masterpage=k_template_name folder=k_folder_name>
					<cms:show_repeatable 'pg_gallery'>
					<div class="col-md-3 <cms:show k_page_folderid />">
						<a class="<cms:show k_page_folderid />" href="<cms:show pg_gallery_image />" data-lightbox="<cms:show k_page_id />" data-title='<cms:show pg_gallery_desc />'>
							<img class="gxcpl-gallery-image" src="<cms:show pg_gallery_image />" />
						</a>	
						<div class="gxcpl-ptop-30"></div>				
					</div>
					</cms:show_repeatable>
					</cms:pages>
				</div>
			</div>
		</div>
		<!-- Gallery -->

		<cms:embed 'footer.html' />
<?php COUCH::invoke(); ?>