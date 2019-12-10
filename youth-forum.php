<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Youth Forum' parent='_campus_' order='2' >
	<cms:editable name='content' label='Page Content' type='group' order='1' />
		<cms:editable name='yf_title' label='Title' desc='appears as title for Youth Forum page' type='text' order='1' group='content' />
		<cms:repeatable name='yf_banner' label='Banner' desc='appears as page banner | banner size 1170px x 320px' order='2'  group='content'> 
			<cms:editable name='yf_banner_image' label='Image' type='image' show_preview='1' preview_width='100' order='1' />
		</cms:repeatable>
		<cms:editable name='yf_content' label='Page Content' desc='page content, useful for SEO' type='richtext' order='3' group='content' />
		<cms:editable name='yf_contact' label='Contact Details' type='richtext' order='4' group='content' />

	<cms:editable name='yf_testimonials' label='Testimonials' type='group' order='2' />
		<cms:repeatable name='testi' label='Testimonial Content' group='yf_testimonials'>
			<cms:editable name='testi_text' label='Testimonial Content Text' type='textarea' no_xss_check='1' order='1' />
			<cms:editable name='testi_name' label='Person\'s Name' type='text' order='2' />
			<cms:editable name='testi_designation' label='Designation' type='text' order='3' />
		</cms:repeatable>
</cms:template>
	<cms:embed 'header.html' />

		<!-- Title -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="text-uppercase"><cms:show yf_title /></h3>
				</div>
			</div>
		</div>
		<!-- Title -->

		<!-- Banner -->
		<cms:set has_banner='0' 'global' />
		<cms:capture into='yf_banneer_capture'>
		<cms:show_repeatable 'yf_banner'>
		<cms:if "<cms:not_empty yf_banner_image />">
			<div class="item <cms:if k_count eq '1'>active</cms:if>">
				<img src="<cms:show yf_banner_image />">
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
							<cms:show yf_banneer_capture />
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
					<div class="gxcpl-text-container text-justify">
						<cms:show yf_content />

						<cms:set has_testi='0' 'global' />
    
    					<cms:capture into='testimonials' >
						<cms:show_repeatable 'testi' startcount='1'>
						<cms:if "<cms:not_empty testi_text />" && "<cms:not_empty testi_name />" && "<cms:not_empty testi_designation />">
						<div class="item<cms:if k_count eq '1'> active</cms:if>">
							<div class="col-md-12 text-center">
								<div class="gxcpl-ptop-10"></div>
								<h5 class="gxcpl-no-margin">
									<cms:show testi_text />
									<div class="gxcpl-ptop-5"></div>
									<small>
										- <cms:show testi_name />
										<br>
										<cms:show testi_designation />
									</small>
								</h5>
								<cms:set has_testi='1' 'global' />
							</div>
						</div>
						</cms:if>
						</cms:show_repeatable>
						</cms:capture>
						
						<cms:if has_testi >
						<div class="gxcpl-ptop-30"></div>

						<!-- Testimonials -->
						<div class="gxcpl-testimonial">
							<div id="carousel-example-generic-2" class="carousel slide" data-ride="carousel">
								<!-- Wrapper for slides -->
								<div class="carousel-inner" role="listbox">
									<cms:show testimonials />								    
								</div>

								<!-- Controls -->
								<a class="left carousel-control" href="#carousel-example-generic-2" role="button" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control" href="#carousel-example-generic-2" role="button" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
						<!-- Testimonials -->
						</cms:if>

						<div class="gxcpl-ptop-30"></div>

						<p class="text-center">
							<cms:show yf_contact />
						</p>
					</div>
				</div>
			</div>
		</div>
		<!-- Content -->

		<cms:embed 'footer.html' />
<?php COUCH::invoke(); ?>