<?php require_once( 'couch/cms.php' ); ?>
<cms:embed 'header.html' />

		<!-- Title -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="text-uppercase">SCHOOL BHAGWAD GITA CONTEST</h3>
				</div>
			</div>
		</div>
		<!-- Title -->

		<!-- Banner -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div id="carousel-example-generic" style="z-index: 0" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="assets/images/20294009_1699890386984111_6487341988726715364_n-copy.jpg" alt="...">
								<!-- <div class="carousel-caption">
									
								</div> -->
							</div>
							<div class="item">
								<img src="assets/images/20294009_1699890386984111_6487341988726715364_n-copy.jpg" alt="...">
							</div>
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
		<!-- Banner -->

		<div class="gxcpl-ptop-30"></div>

		<!-- Content -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="gxcpl-text-container text-justify">
						<h4 class="text-center">
							Content Coming Soon...
						</h4>
					</div>
				</div>
			</div>
		</div>
		<!-- Content -->

		<cms:embed 'footer.html' />
<?php COUCH::invoke(); ?>