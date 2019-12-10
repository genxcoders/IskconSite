<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='ISKCON Literature' clonable='1' order='2'>
	<cms:editable name='author_name' label='Author Name' desc='appears as title for History of ISKCON page' type='text' order='1' />
	<cms:editable name='literature_book' label='Book Image' desc='appears as page banner | banner size 155px x 225px' type='image' show_preview='1' preview_width='100' order='2' />
	<cms:editable name='literature_content' label='Book Description' desc='page content | useful for SEO | max 30 words' type='richtext' order='3' />

	<cms:globals>
		<cms:editable name='literature_title' label='Title' desc='appears as title for Literature page' type='text' order='1' />
	</cms:globals>
</cms:template>
	<cms:embed 'header.html' />

		<!-- Content - History of Iskcon -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="text-uppercase"><cms:show k_page_title /></h3>
				</div>

				<cms:pages>
				<div class="col-md-4">
					<div class="gxcpl-literature">
						<div class="gxcpl-book-container">
							<img class="gxcpl-book-image" src="<cms:show literature_book />">
						</div>
						<div class="gxcpl-book-text-container">
							<h4 class="gxcpl-no-margin"><cms:show k_page_title /></h4>
							<div class="gxcpl-ptop-5"></div>
							<h5 class="text-muted gxcpl-no-margin"><cms:show author_name /></h5>
							<div class="gxcpl-ptop-20"></div>
							<div class="gxcpl-book-description text-justify">
								<cms:excerptHTML count='30'>
									<cms:show literature_content />
								</cms:excerptHTML>
							</div>
						</div>
					</div>
					<div class="gxcpl-ptop-20"></div>
				</div>
				</cms:pages>

			</div>
		</div>
		<!-- Content - History of Iskcon -->

	<cms:embed 'footer.html' />
<?php COUCH::invoke(); ?>