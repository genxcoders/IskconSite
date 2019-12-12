<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='News' parent='_media_' clonable='1' dynamic_folders='1' order='12' >
	<cms:editable name='news_date' label='Publication Date' type='datetime' allow_time='0' order='1' />
	<cms:repeatable name='news_banner' label='Banner' desc='appears as page banner | banner size 1120px x 430px' order='2'> 
		<cms:editable name='news_banner_image' label='Image' type='image' show_preview='1' preview_width='100' order='1' />
	</cms:repeatable>
	<cms:editable name='news_content' label='News Content' type='richtext' order='3' />

	<cms:globals>

	</cms:globals>
</cms:template>
	<cms:embed 'header.html' />
		<!-- Title -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="text-uppercase"><cms:show k_page_title /></h3>
				</div>
			</div>
		</div>
		<!-- Title -->

		<!-- Banner -->
		<cms:set has_banner='0' 'global' />
		<cms:capture into='news_banneer_capture'>
		<cms:show_repeatable 'news_banner'>
		<cms:if "<cms:not_empty news_banner_image />">
			<div class="item <cms:if k_count eq '1'>active</cms:if>">
				<img src="<cms:show news_banner_image />">
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
							<cms:show news_banneer_capture />
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

		<!-- News Content -->
		<cms:if k_page_foldertitle >
			<cms:set cat=k_page_foldertitle />
		<cms:else />
			<cms:set cat='General' />
		</cms:if>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="gxcpl-card-container">
						<div class="gxcpl-card-header">
							<cms:show cat /> <cms:if news_date ><small><em>(<cms:date news_date format='M d, Y' />)</em></small></cms:if>
						</div>
						<div class="gxcpl-card-body text-justify">
							<cms:show news_content />
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- News Content -->

		<div class="gxcpl-ptop-30"></div>

		<!-- Back -->
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4 text-center">
					<button class="btn btn-danger" type="submit">
						<i class="fa fa-newspaper-o"></i> BACK TO NEWS LIST
					</button>
				</div>
			</div>
		</div>
		<!-- Back -->

		<div class="gxcpl-ptop-30"></div>

		<!-- Recent News -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="text-uppercase">OTHER ISKCON News</h3>
				</div>
			</div>
		</div>
		<div class="container hidden-sm hidden-xs">
			<div class="row">
				<div class="col-md-3">
					<div class="gxcpl-news-container">
						<div class="gxcpl-news-image">
							<img src="assets/images/11.jpg">
						</div>
						<div class="gxcpl-news-content">
							<h4>News Title Two Lines Long</h4>
							content goes here. and will fill the box to a level 12 words. then it will have "..."
						</div>
						<a href="">
							<div class="gxcpl-news-readmore">
								READ MORE
							</div>
						</a>
					</div>
					<div class="gxcpl-ptop-20"></div>
				</div>
				<div class="col-md-3">
					<div class="gxcpl-news-container">
						<div class="gxcpl-news-image">
							<img src="assets/images/11.jpg">
						</div>
						<div class="gxcpl-news-content">
							<h4>News Title Two Lines Long</h4>
							content goes here. and will fill the box to a level 12 words. then it will have "..."
						</div>						
						<a href="">
							<div class="gxcpl-news-readmore">
								READ MORE
							</div>
						</a>
					</div>
					<div class="gxcpl-ptop-20"></div>
				</div>
				<div class="col-md-3">
					<div class="gxcpl-news-container">
						<div class="gxcpl-news-image">
							<img src="assets/images/11.jpg">
						</div>
						<div class="gxcpl-news-content">
							<h4>News Title Two Lines Long</h4>
							content goes here. and will fill the box to a level 12 words. then it will have "..."
						</div>						
						<a href="">
							<div class="gxcpl-news-readmore">
								READ MORE
							</div>
						</a>
					</div>
					<div class="gxcpl-ptop-20"></div>
				</div>
				<div class="col-md-3">
					<div class="gxcpl-news-container">
						<div class="gxcpl-news-image">
							<img src="assets/images/11.jpg">
						</div>
						<div class="gxcpl-news-content">
							<h4>News Title Two Lines Long</h4>
							content goes here. and will fill the box to a level 12 words. then it will have "..."
						</div>						
						<a href="">
							<div class="gxcpl-news-readmore">
								READ MORE
							</div>
						</a>
					</div>
					<div class="gxcpl-ptop-20"></div>
				</div>
			</div>
		</div>

		<div class="container hidden-lg hidden-md">
			<div class="row">
				<div class="col-sm-12 col-xs-12">
					<div class="gxcpl-news-container-other">
						<img class="gxcpl-news-image-other" src="assets/images/11.jpg">
						<div class="gxcpl-news-content-other">
							<h4 class="gxcpl-no-margin">News Title Two Lines Long</h4>
							<div class="gxcpl-ptop-5"></div>
							read more...
						</div>
					</div>
				</div>

				<div class="col-sm-12 col-xs-12">
					<div class="gxcpl-news-container-other">
						<img class="gxcpl-news-image-other" src="assets/images/11.jpg">
						<div class="gxcpl-news-content-other">
							<h4 class="gxcpl-no-margin">News Title Two Lines Long</h4>
							<div class="gxcpl-ptop-5"></div>
							read more...
						</div>
					</div>
				</div>

				<div class="col-sm-12 col-xs-12">
					<div class="gxcpl-news-container-other">
						<img class="gxcpl-news-image-other" src="assets/images/11.jpg">
						<div class="gxcpl-news-content-other">
							<h4 class="gxcpl-no-margin">News Title Two Lines Long</h4>
							<div class="gxcpl-ptop-5"></div>
							read more...
						</div>
					</div>
				</div>

				<div class="col-sm-12 col-xs-12">
					<div class="gxcpl-news-container-other">
						<img class="gxcpl-news-image-other" src="assets/images/11.jpg">
						<div class="gxcpl-news-content-other">
							<h4 class="gxcpl-no-margin">News Title Two Lines Long</h4>
							<div class="gxcpl-ptop-5"></div>
							read more...
						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- Recent News -->

		<cms:embed 'footer.html' />
<?php COUCH::invoke(); ?>