<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Food for Life' parent='_campus_' order='1'>
	<cms:editable name='fff_title' label='Title' desc='appears as title for Food for Life page' type='text' order='1' />
	<cms:repeatable name='fff_banner' label='Banner' desc='appears as page banner | banner size 1170px x 320px' order='2'> 
		<cms:editable name='fff_banner_image' label='Image' type='image' show_preview='1' preview_width='100' order='1' />
	</cms:repeatable>
	<cms:editable name='fff_content' label='Page Content' desc='page content, useful for SEO' type='richtext' order='3' />
</cms:template>
	<cms:embed 'header.html' />

		<!-- Title -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="text-uppercase"><cms:show fff_title /></h3>
				</div>
			</div>
		</div>
		<!-- Title -->

		<!-- Banner -->
		<cms:set has_banner='0' 'global' />
		<cms:capture into='fff_banneer_capture'>
		<cms:show_repeatable 'fff_banner'>
		<cms:if "<cms:not_empty fff_banner_image />">
			<div class="item <cms:if k_count eq '1'>active</cms:if>">
				<img src="<cms:show fff_banner_image />">
				<cms:set has_banner='1' 'global' />
			</div>
		</cms:if>
		</cms:show_repeatable>
		</cms:capture>
		<cms:if has_banner>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div id="carousel-example-generic" style="z-index: 0" class="carousel slide" data-ride="carousel">

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<cms:show fff_banneer_capture />
						</div>

						<!-- Controls -->
						<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		</cms:if>
		<!-- Banner -->

		<div class="gxcpl-ptop-30"></div>

		<!-- Content -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="gxcpl-text-container">
						<cms:show fff_content />
					</div>
				</div>
			</div>
		</div>
		<!-- Content -->

		<cms:embed 'footer.html' />
<?php COUCH::invoke(); ?>