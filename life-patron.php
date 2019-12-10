<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Life Patron' parent='_lifepatron_' clonable='1' order='2'>
	<cms:editable name='fullname' label='Full Name' type='text' required='1' order='1' />
	<cms:editable name='lp_email' label='Email Id' type='text' validator='email' order='2' />
	<cms:editable name='lp_mobile' label='Mobile Number' type='text' required='1' validator='exact_len=10 | non_negative_integer' order='3' />
	<cms:globals>
		<cms:editable name='patron_title' label='Title' desc='appears as title for Life Patron page' type='text' order='1' />
		<cms:editable name='patron_banner' label='Banner' desc='appears as page banner | banner size 1170px x 320px' type='image' show_preview='1' preview_width='100' order='2' />
		<cms:editable name='patron_content' label='Page Content' desc='page content | useful for SEO | 12-col width data' type='richtext' order='3' />
		<cms:editable name='patron_privledges' label='Life Patron Privledges' desc='page content | useful for SEO | 6-col width data' type='richtext' order='4' />
	</cms:globals>
</cms:template>
	<cms:embed 'header.html' />

		<!-- Content - History of Iskcon -->
		<div class="container">
			<div class="row">
				<cms:show_globals>
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
				</cms:show_globals>

				<div class="col-md-6 col-md-pull-6">
					<!-- <form>
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
					</form> -->
					<cms:if "<cms:not_empty "<cms:get_cookie 'submit_success_life_patron' />" />">
						<div class="row">
							<div class="col-md-12">
								<div class="alert alert-success alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<strong><cms:get_cookie 'submit_success_life_patron' /></strong>
								</div>
							</div>
						</div>
						<cms:delete_cookie 'submit_success_life_patron' />
					</cms:if>
					<cms:form
				        masterpage=k_template_name
				        mode='create'
				        enctype='multipart/form-data'
				        method='post'
				        anchor='0'
				    >
				        <cms:if k_success >
				            <cms:check_spam email=frm_email />
				            <cms:db_persist_form
				                _invalidate_cache='0'
				                _auto_title='1'
				            />
				            <cms:if k_success>
				            	<cms:set_cookie 'submit_success_life_patron' value='Form submitted successfully.' expire='86400' />
				            	<cms:redirect k_page_link />
				            </cms:if>
				        </cms:if>

				        <cms:if k_error >
				            <div class="error">
				            	<div class="row">
				            		<div class="col-md-12">
				            			<div class="alert alert-danger">
							                <cms:each k_error >
							                    <cms:show item /><br>
							                </cms:each>
							            </div>
							        </div>
							    </div>
				            </div>
				        </cms:if>

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
										<cms:input name="fullname" type="bound" class="form-control" />
										<div class="gxcpl-ptop-10"></div>
									</div>

									<div class="col-md-3 col-sm-12 col-xs-12" style="line-height: 34px;">
										Email Id
										<div class="gxcpl-ptop-10"></div>
									</div>
									<div class="col-md-9 col-sm-12 col-xs-12">
										<cms:input name="lp_email" type="bound" class="form-control" />
										<div class="gxcpl-ptop-10"></div>
									</div>

									<div class="col-md-3 col-sm-12 col-xs-12" style="line-height: 34px;">
										Mobile Number
										<div class="gxcpl-ptop-10"></div>
									</div>
									<div class="col-md-9 col-sm-12 col-xs-12">
										<cms:input name="lp_mobile" type="bound" class="form-control" />
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
					</cms:form>
					<div class="gxcpl-ptop-20"></div>
				</div>

			</div>
		</div>
		<!-- Content - History of Iskcon -->

	<cms:embed 'footer.html' />
<?php COUCH::invoke(); ?>