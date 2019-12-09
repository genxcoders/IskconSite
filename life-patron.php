<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Life Patron' order='2'>
	<cms:editable name='patron_title' label='Title' desc='appears as title for Life Patron page' type='text' order='1' />
	<cms:editable name='patron_banner' label='Banner' desc='appears as page banner | banner size 1170px x 320px' type='image' show_preview='1' preview_width='100' order='2' />
	<cms:editable name='patron_content' label='Page Content' desc='page content | useful for SEO | 12-col width data' type='richtext' order='3' />
	<cms:editable name='patron_privledges' label='Life Patron Privledges' desc='page content | useful for SEO | 6-col width data' type='richtext' order='4' />
</cms:template>
	<cms:embed 'header.html' />

		<!-- Content - History of Iskcon -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="text-uppercase"><cms:show patron_title /></h3>
				</div>

				<cms:if patron_banner >
				<div class="col-md-12">
					<img class="gxcpl-single-banner" src="<cms:show patron_banner />">
					<div class="gxcpl-ptop-20"></div>
				</div>
				</cms:if>

				<div class="col-md-12">
					<div class="gxcpl-text-container text-justify">
						<cms:show patron_content />
					</div>	
					<div class="gxcpl-ptop-20"></div>
				</div>

				<div class="col-md-6 col-md-push-6">
					<div class="gxcpl-text-container text-justify">
						<cms:show patron_privledges />
					</div>
					<div class="gxcpl-ptop-20"></div>
				</div>

				<div class="col-md-6 col-md-pull-6">
					<form>
						<div class="gxcpl-card-container">
							<div class="gxcpl-card-header">
								Apply Now for Membership
							</div>
							<div class="gxcpl-card-body">
								<div class="gxcpl-ptop-10"></div>
								<div class="row">
									<div class="col-md-3 col-sm-12 col-xs-12" style="line-height: 34px;">
										Full Name
										<div class="gxcpl-ptop-10"></div>
									</div>
									<div class="col-md-9 col-sm-12 col-xs-12">
										<input name="fullname" type="text" class="form-control" />
										<div class="gxcpl-ptop-10"></div>
									</div>

									<div class="col-md-3 col-sm-12 col-xs-12" style="line-height: 34px;">
										Email Id
										<div class="gxcpl-ptop-10"></div>
									</div>
									<div class="col-md-9 col-sm-12 col-xs-12">
										<input name="emailid" type="text" class="form-control" />
										<div class="gxcpl-ptop-10"></div>
									</div>

									<div class="col-md-3 col-sm-12 col-xs-12" style="line-height: 34px;">
										Mobile Number
										<div class="gxcpl-ptop-10"></div>
									</div>
									<div class="col-md-9 col-sm-12 col-xs-12">
										<input name="fullname" type="text" class="form-control" />
										<div class="gxcpl-ptop-10"></div>
									</div>
								</div>
							</div>
							<div class="gxcpl-card-footer text-center">
								<button class="btn btn-danger btn-sm" type="submit">
									<i class="fa fa-send"></i> SEND REQUEST
								</button>
							</div>
						</div>
					</form>
					<div class="gxcpl-ptop-20"></div>
				</div>

			</div>
		</div>
		<!-- Content - History of Iskcon -->

	<cms:embed 'footer.html' />
<?php COUCH::invoke(); ?>