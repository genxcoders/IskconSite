<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Spiritual Scientist' clonable='1' parent='_campus_' order='9' >
	
	<cms:editable name='ss_fullname' label='Full Name' type='text' order='1' />
	<cms:editable name='ss_emailid' label='Email Id' type='text' validator='email' order='2' />
	<cms:editable name='ss_mobile' label='Mobile Number' type='text' validator='exact_len=10 | non_negative_integer' order='3' />
	<cms:editable name='ss_college' label='College' type='text' order='4' />
	<cms:editable name='ss_stream' label='Proficiency Stream' type='text' order='5' />
	<cms:editable name='ss_age' label='Age (in years)' type='text' validator='non_negative_integer' order='6' />
	<cms:editable name='ss_gender' label='Gender' type='dropdown' opt_values='Select =- | Male | Female' order='7' />
	<cms:editable name='ss_address' label='Address' type='textarea' no_xss_check='1' height='100' order='8' />

	<cms:globals>
		<cms:editable name='ss_title' label='Title' desc='appears as title for Food for Life page' type='text' order='1' />
		<cms:repeatable name='ss_banner' label='Banner' desc='appears as page banner | banner size 1170px x 320px' order='2'> 
			<cms:editable name='ss_banner_image' label='Image' type='image' show_preview='1' preview_width='100' order='1' />
		</cms:repeatable>
		<cms:editable name='ss_content' label='Page Content' desc='page content, useful for SEO' type='richtext' order='3' />
	</cms:globals>
</cms:template>
	<cms:embed 'header.html' />
		<!-- Title -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="text-uppercase">Become A Spiritual Scientist</h3>
				</div>
			</div>
		</div>
		<!-- Title -->

		<!-- Banner -->
		<cms:set has_banner='0' 'global' />
		<cms:show_globals>
		<cms:capture into='ss_banneer_capture'>
		<cms:show_repeatable 'ss_banner'>
		<cms:if "<cms:not_empty ss_banner_image />">
			<div class="item <cms:if k_count eq '1'>active</cms:if>">
				<img src="<cms:show ss_banner_image />">
				<cms:set has_banner='1' 'global' />
			</div>
		</cms:if>
		</cms:show_repeatable>
		</cms:capture>
		</cms:show_globals>
		
		<div class="container">
			<div class="row">
				<cms:if has_banner>
				<div class="col-md-8">
					<div id="carousel-example-generic" style="z-index: 0" class="carousel slide" data-ride="carousel">
						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<cms:show ss_banneer_capture />
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
					<div class="gxcpl-ptop-30"></div>
				</div>
				</cms:if>
				
				<cms:if has_banner>
				<div class="col-md-4">
				<cms:else />
				<div class="col-md-4 col-md-offset-4">
				</cms:if>
					<cms:if "<cms:not_empty "<cms:get_cookie 'submit_success_spiritual_scientist' />" />">
						<div class="row">
							<div class="col-md-12">
								<div class="alert alert-success alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<strong><cms:get_cookie 'submit_success_spiritual_scientist' /></strong>
								</div>
							</div>
						</div>
						<cms:delete_cookie 'submit_success_spiritual_scientist' />
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
								Registration Form
							</div>
							<div class="gxcpl-card-body">
								<div class="gxcpl-ptop-10"></div>
								<div class="row">
									
									<div class="col-md-12 col-sm-12 col-xs-12">
										<cms:input name="ss_fullname" type="bound" class="form-control" placeholder="Full Name" />
										<div class="gxcpl-ptop-10"></div>
									</div>
									<div class="col-md-6 col-sm-12 col-xs-12">
										<cms:input name="ss_emailid" type="bound" class="form-control" placeholder="Email Id" />
										<div class="gxcpl-ptop-10"></div>
									</div>
									<div class="col-md-6 col-sm-12 col-xs-12">
										<cms:input name="ss_mobile" type="bound" class="form-control" placeholder="Mobile No" />
										<div class="gxcpl-ptop-10"></div>
									</div>
									<div class="col-md-12 col-sm-12 col-xs-12">
										<cms:input name="ss_college" type="bound" class="form-control" placeholder="College" />
										<div class="gxcpl-ptop-10"></div>
									</div>
									<div class="col-md-12 col-sm-12 col-xs-12">
										<cms:input name="ss_stream" type="bound" class="form-control" placeholder="Stream" />
										<div class="gxcpl-ptop-10"></div>
									</div>
									<div class="col-md-6 col-sm-12 col-xs-12">
										<cms:input name="ss_age" type="bound" class="form-control" placeholder="Age" />
										<div class="gxcpl-ptop-10"></div>
									</div>
									<div class="col-md-6 col-sm-12 col-xs-12">
										<cms:input name='ss_gender' type='bound' class='form-control' />
										<div class="gxcpl-ptop-10"></div>
									</div>
									<div class="col-md-12 col-sm-12 col-xs-12">
										<cms:input name="ss_address" type="bound" class="form-control" placeholder="Address" />
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
				</div>
			</div>
		</div>
		<!-- Banner -->

		<div class="gxcpl-ptop-30"></div>

		<!-- Content -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="gxcpl-text-container text-justify">
						<cms:show_globals>
							<cms:show ss_content />
						</cms:show_globals>
					</div>
				</div>
			</div>
		</div>
		<!-- Content -->

		<cms:embed 'footer.html' />
<?php COUCH::invoke(); ?>