<?php $__env->startSection('page-css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
<style>
.carousel-indicators{
z-index : auto !important;
}
</style>

 <div class="container-fluid" style="margin-top: 6%;">
            <div class="row">
                <div class="">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <?php $i=0; ?>
                            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li data-target="#carousel-example-generic" data-slide-to="<?php echo e($i); ?>" class="<?php echo e($i==0? 'active':''); ?>"></li>
                                <?php $i++; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <?php $i=0; ?>
                            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="item <?php echo e($i==0? 'active':''); ?>">
                                    <img src="<?php echo e(slider_url($slider)); ?>" alt="Image one">
                                    <div class="carousel-caption"><?php echo e($slider->caption); ?> </div>
                                </div>
                                <?php $i++; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                       
                    </div>
                </div>
            </div>
        </div>
	<div class="main" style=" padding: 20px !important; ">

		<div class="custom-container">

                    <div class="modern-home-search-bar-wrap">
			<form class="form-inline" action="<?php echo e(route('classifieds')); ?>" method="get">			
                            <div class="searchpanel" style="margin-top: -2%;">

				<input type="text" name="q" placeholder="Search for an Investment Project, Buyer or Seller  (Company Name, Specialist...etc)">
				<input type="hidden" name="sub_category">
<button type="submit" class="btn topnone"> <i class="fa fa-search"></i> GO</button>
			</form>

			</div>


                    </div>

<!--			<div class="searchpanel">

				<input type="text" placeholder="Search for an Investment Project, Buyer or Seller  (Company Name, Specialist...etc)">

				<button type="button">SEARCH</button>

			</div>-->
			<div class="row margintop">
				<div class="col-md-9">
					<div class="tabpanel">
						<div class="heading violet">
							BIZZ   
						</div>
						<ul class="nav nav-tabs fullnavtablog">
							<li class="active">
								<a  href="<?php echo e(route('listyourbusiness')); ?>" style="cursor: pointer;">
									Advertise
								</a>
							</li>
							  <li>
								<a href="<?php echo e(route('bizz')); ?>">
									View All
								</a>

							</li>
							
							
                                                      

						</ul>

						<div class="tab-content backnone">

                                                     <?php if($bizz_ads->count() > 0): ?>
							<div id="advertise" class="tab-pane fade in active">
								<div class="complogoprt">
									<ul><?php $i = 1;?>
                                                                              <?php $__currentLoopData = $bizz_ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                         
										<li>
                                                                                     <a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>">
			
											<div class="compLogo">
                                                                                           <?php if ($ad->business_image== "") { ?>
									<img src="<img src="<?php echo url('/');?>/uploads/placeholder.png" style="width:150px">
									<?php } else { ?>
									<img src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>" style="width:150px">
									<?php } ?>
											</div>          				
											<h3><?php echo e($ad->title); ?></h3>
											<h4><?php echo e($ad->country->country_name); ?></h4>
                                                                                         </a>

										</li>

                                                                             
									<?php if ($i++ == 4) break; ?>
									 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

									</ul>                                    <div class="clearfix"></div>

								</div>

							</div>

							<div id="connect" class="tab-pane fade">

								Connect

							</div>

                                                       <?php endif; ?>

						</div>

					</div>

				</div>

				<div class="col-md-3">

					<div class="adprt">

						 <div id="myCarousel" class="carousel slide" data-ride="carousel">
 

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    				

			    	<div class="item">
			      		<img src="https://www.dance.nyc/uploads/ad-sample-250x250.gif" alt="Chicago">
			    	</div>
				<div class="item active">
			      		<img src="https://kakiseni.org/wp-content/uploads/2018/03/250X250.png" alt="Chicago">
      						
    				</div>

  </div>

</div>


					</div>

				</div>

			</div>



			<div class="row margintop">

				<div class="col-md-6">

					<div class="tabpanel padnone">

						<div class="heading blue">
							Pro
						</div>
						<ul class="nav nav-tabs fullnavtablog">
                                                       
<li class="active">

								<a href="<?php echo e(route('create_proad')); ?>" style="cursor: pointer;">
									Advertise
								</a>
							</li>
 <li>
								<a href="<?php echo e(route('pro')); ?>">
									View All
								</a>
							</li>
							
						</ul>

                                            <div class="tab-content">
                                                                             <?php if($pro_ads->count() > 0): ?>
         

							<div id="advertise2" class="tab-pane fade in active">
								<div class="maninto">
<?php $pro = 1;?>
                                                                     <ul>
                        <?php $__currentLoopData = $pro_ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<li>



<?php if ($ad->business_image== "") { ?>
									<a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>"><img src="<?php echo url('/');?>/uploads/placeholder.png" style="width:130px;margin-right: 30px;" class="img-circle"></a>
									<?php } else { ?>
									<a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>"><img src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>" style="width:130px;margin-right: 30px;" class="img-circle"></a>
									<?php } ?>

                                                                                            



											<div class="manintoinner">

                                                                                             <a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>">

												<h3><?php echo e($ad->title); ?></h3>
										    		<h4><?php echo e($ad->designation); ?></h3> 
												<h5><?php echo e($ad->country->country_name); ?></h5>

                                                                                             </a>

											</div>

                                                                                    

										</li>
									<?php if ($pro++ == 4) break; ?>

									 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        

                        </ul>

								</div>

							</div>

							

						</div>

						

                                                                                

    <?php endif; ?>

			

					</div>



				</div>

                 

				<div class="col-md-6">



					<div class="tabpanel">

						<div class="heading yellow">

							Classifieds

						</div>

						<ul class="nav nav-tabs fullnavtablog">
<li class="active">
								<a style="cursor: pointer;" href="<?php echo e(route('createclassifieds')); ?>">
									Advertise for free
								</a>
							</li>

							<li>
								<a  href="<?php echo e(route('classifieds')); ?>">
									View All
								</a>
							</li>
							
						</ul>
<?php
function shortDescription($fullDescription) {
$shortDescription = "";
$fullDescription = trim(strip_tags($fullDescription));
if ($fullDescription) {
		$initialCount = 125;
		if (strlen($fullDescription) > $initialCount) {
			$shortDescription = substr($fullDescription,0,$initialCount)."…";
		} else {
			return $fullDescription;
		 }
}
return $shortDescription;
}//End of function shortDescription

?>


						<div class="tab-content padnone">

							<div id="free" class="tab-pane fade in active">

								<div class="advertiseList">

                                              <?php if($classifieds_ads->count() > 0): ?>

						<ul>
<?php $class = 1;?>
							<?php $__currentLoopData = $classifieds_ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						            <li> 
						                 <a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>">
						         <h3><?php echo e($ad->title); ?></h3> 
						         <p><?php echo shortDescription($ad->description);?></p>
						                 </a>
						            </li>
									<?php if ($class++ == 4) break; ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</ul>
						<?php endif; ?>

									

								</div>

							</div>

							<div id="View" class="tab-pane fade">

								Hire

							</div>

						</div>

					</div>

				</div>

			</div>





			<div class="row margintop">

				<div class="col-md-9">

					<div class="tabpanel">

						<div class="heading green">

							Projects

						</div>

						<ul class="nav nav-tabs fullnavtablog">



							<li class="active">

								<a  href="<?php echo e(route('projectevaluation')); ?>" style="cursor: pointer;">

									Post a project

								</a>

							</li>

							<li>

								<a  href="<?php echo e(route('projects')); ?>">

									View all

								</a>

							</li>

						</ul>

						<div class="tab-content padnonetwo">

							<div id="project" class="tab-pane fade in active">

								<div class="projectList">

									            <?php if($opportunities_ads->count() > 0): ?>

                        <ul>
<?php $projects = 1;?>
                        <?php $__currentLoopData = $opportunities_ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

										<li>

                                                                                     <a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>">

                                                                                     <h3><?php echo e($ad->title); ?></h3> 

                                 <p> <i class="fa fa-map-marker"></i> <?php echo e($ad->country->country_name); ?></p>

                                                                                     </a>

											

											

										</li>
<?php if ($projects++ == 5) break; ?>				

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        

                        </ul>

    <?php endif; ?>

		

								</div>

							</div>

							

						</div>

					</div>

				</div>

				<div class="col-md-3">



					<div class="housesevice">

						<h2>In House Services</h2>

						<div class="servicebox">

						<ul>

										<li>

											<a href="page/business-valuation">  Business Valuation</a>			

										</li>

											<li>

												<a href="page/deal-sourcing">

												 Deal Sourcing

											</a>

											</li>

											<li>

											<a href="page/deal-structuring">

												  Deal Structuring 

											</a>

											</li>

											<li>

											<a href="page/deals-execution">

												 Deals Execution

											</a>												

											</li>

											<li>

											<a href="page/due-diligence">

												  Due Diligence 

											</a>

											</li>

											<li><a href="page/joint-ventures">

												Joint Ventures

											</a>

											</li>

											<li><a href="page/sensitivity-analysis">

												  Sensitivity Analysis 

											</li>

											<li>

											  <a href="page/sustainability-testing-and-analysis">

												 Sustainability Testing and Analysis

											</a>

											</li>										

											

										</ul>

						</div>

					</div>

				</div>

			</div>



			<div class="row margintop">

				<div class="col-md-9">

					<div class="tabpanel">

						<div class="topheadingpanel" id="myDIV">

							<a class="tabbutton active" id="btn1">Services</a>

							<a class="tabbutton" id="btn2">Sector</a>

						</div>



						<div class="div1">

							<ul class="nav nav-tabs fullnavtablog">



								<li class="active">

									<a data-toggle="tab" href="#package">

										Packages

									</a>

								</li>

								<li>

									<a  href="<?php echo e(route('contact_us_page')); ?>" style="cursor: pointer;">

											CONTACT US

									</a>

								</li>

							</ul>

							<div class="tab-content">

								<div id="package" class="tab-pane fade in active">

									<div class="packageiconprt">

										<ul>

											<li>

												<a href="page/business-valuation"><img src="uploads/theme/icon1.png">  Business Valuation</a> 



											</li>

											<li>

											<a href="page/deal-sourcing">

												<img src="uploads/theme/icon2.png"> Deal Sourcing

											</a>

											</li>

											<li>

											<a href="page/deal-structuring">

												<img src="uploads/theme/icon3.png">  Deal Structuring 

											</a>

											</li>

											<li>

											<a href="page/deals-execution">

												<img src="uploads/theme/icon4.png"> Deals Execution

											</a>												

											</li>

											<li>

											<a href="page/due-diligence">

												<img src="uploads/theme/icon5.png">  Due Diligence 

											</a>

											</li>

											<li><a href="page/joint-ventures">

												<img src="uploads/theme/icon6.png"> Joint Ventures

											</a>

											</li>

											<li>

											<a href="page/sensitivity-analysis">

												<img src="uploads/theme/icon7.png">  Sensitivity Analysis 

												</a>

											</li>

											<li>

											  <a href="page/sustainability-testing-and-analysis">

												<img src="uploads/theme/icon8.png"> Sustainability Testing and Analysis

											</a>

											</li>

											

											

										</ul>

									</div>

								</div>

								<div id="carte" class="tab-pane fade">

									services carte

								</div>

							</div>

						</div>



						<div class="div2">

							<ul class="nav nav-tabs fullnavtablog">



								<li class="active">

									<a data-toggle="tab" href="#package2">

										Packages

									</a>

								</li>

								<li>

									<a  href="<?php echo e(route('contact_us_page')); ?>">

											CONTACT US

									</a>

								</li>

							</ul>

							<div class="tab-content padnonetwoo">

								<div id="package2" class="tab-pane fade in active">

									<div class="packageiconprt">

										<ul>

											<li>

												<a href="page/business-valuation"><img src="uploads/theme/icon1.png">  Education</a> 



											</li>

											<li>

											<a href="page/healthcare">

												<img src="uploads/theme/icon2.png"> Health Care

											</a>

											</li>

											<li>

											<a href="page/media">

												<img src="uploads/theme/icon3.png">  Media 

											</a>

											</li>

											<li>

											<a href="page/oil-gas">

												<img src="uploads/theme/icon4.png"> Oil & Gas

											</a>												

											</li>

											<li>

											<a href="page/real-estate">

												<img src="uploads/theme/icon5.png">  Real Estate 

											</a>

											</li>

											<li><a href="page/trading">

												<img src="uploads/theme/icon6.png"> Trading

											</a>

											</li>

											<li>

											<a href="page/travel-tourism">

												<img src="uploads/theme/icon7.png">  Travel & Tourism

												</a>

											</li>

											

											

											

										</ul>

									</div>

								</div>

								<div id="carte2" class="tab-pane fade">

									sector carte

								</div>

							</div>

						</div>



					</div>

				</div>

				<div class="col-md-3">



					<div class="housesevice">

						<h2>Outsource to us</h2>

						<div class="servicebox">

							<ul>

							<li>

								<a href="page/accounting">Accounting</a>

							</li>

							<li>

								<a href="page/auditing">Auditing</a>

							</li>

							<li>

								<a href="page/advertising">Advertising</a>

							</li>

							<li>

								<a href="page/business-advisory">Business Advisory</a>

							</li>

							<li>

								<a href="page/business-plan-writing">Business Plan Writing</a>

							</li>

							<li>

								<a href="page/brand-consultancy">Brand Consultancy</a>

							</li>

							<li>

								<a href="page/feasibility-studies">Feasibility Studies</a>

							</li>

							<li>

								<a href="page/insurance">Insurance</a>

							</li>

							<li>

								<a href="page/management-consultancy">Management Consultancy</a>

							</li>

							

						</ul>

						</div>

					</div>

				</div>

			</div>




<!--
			<div class="row margintop">

				<div class="col-md-9">

					<div class="tabpanel">

						<div class="heading pink">

							Insights

						</div>

						<ul class="nav nav-tabs fullnavtablog">

<li>

								<a  href="<?php echo e(route('insight')); ?>">

									View

								</a>

							</li>

							<li>

								<a  href="<?php echo e(route('contact_us_page')); ?>">

									Post a white paper

								</a>

							</li>

							<li class="active">

								<a data-toggle="tab" href="#white">

									Whitepaper

								</a>

							</li>

							<li>

								<a href="<?php echo e(route('blog')); ?>">

									Blogs

								</a>

							</li>

							<li>

								<a href="<?php echo e(route('contact_us_page')); ?>">

									Headline

								</a>

							</li>

							<li>

								<a href="<?php echo e(route('contact_us_page')); ?>">

									Videos

								</a>

							</li>

						</ul>

						<div class="tab-content">

							<div id="paper" class="tab-pane fade ">

								<div class="twoprtimg">

									<div class="leftimgsec">



										<div class="topvideoprt">

											<iframe width="100%" height="200" src="https://www.youtube.com/embed/S1oX9L6e6_Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"

											 allowfullscreen></iframe>

										</div>

										<h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>

										<h5>103 views</h5>

									</div>

									<div class="rightimgsec">

										<ul>

											<li>

												Lorem Ipsum is simply dummy text of the printing

											</li>

											<li>

												Lorem Ipsum is simply dummy text of the printing

											</li>

											<li>

												Lorem Ipsum is simply dummy text of the printing

											</li>

											<li>

												Lorem Ipsum is simply dummy text of the printing

											</li>

											<li>

												Lorem Ipsum is simply dummy text of the printing

											</li>

											<li>

												Lorem Ipsum is simply dummy text of the printing

											</li>



											<li>

												Lorem Ipsum is simply dummy text of the printing

											</li>

											<li>

												Lorem Ipsum is simply dummy text of the printing

											</li>

											<li>

												Lorem Ipsum is simply dummy text of the printing

											</li>

											<li>

												Lorem Ipsum is simply dummy text of the printing

											</li>

											<li>

												Lorem Ipsum is simply dummy text of the printing

											</li>



											<li>

												Lorem Ipsum is simply dummy text of the printing

											</li>

										</ul>



									</div>

								</div>

							</div>

							<div id="white" class="tab-pane fade in active">

												            <?php if($whitepapers_ads->count() > 0): ?>

                        <ul>

                        <?php $__currentLoopData = $whitepapers_ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

										<li>

                                                                                     <a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>">

                                                                                     <h3><?php echo e($ad->title); ?></h3> 

                                 <p><?php echo e($ad->description); ?></p>

                                                                                     </a>

										</li>

										

										

								

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        

                        </ul>

    <?php endif; ?>

		

							</div>

							<div id="blogs" class="tab-pane fade">

								blogs

							</div>

							<div id="headline" class="tab-pane fade">

								headline

							</div>

							<div id="videos" class="tab-pane fade">

								videos

							</div>

						</div>

					</div>

				</div>

				<div class="col-md-3">

					<div class="housesevice">

						<div class="topfollowheadprt">

							<h3>Follow us on</h3>

							<div class="rightsocial">

								<ul>

									<li>

										<a>

											<i class="fa fa-linkedin"></i>

										</a>

									</li>

									<li>

										<a>

											<i class="fa fa-twitter"></i>

										</a>

									</li>

									<li>

										<a>

											<i class="fa fa-instagram"></i>

										</a>

									</li>

									<li>

										<a>

											<i class="fa fa-facebook"></i>

										</a>

									</li>

								</ul>

							</div>

						</div>



						<div class="blogsection">

							<div class="blognameprt">

								<div class="leftnameblog">

									-------

									<span>

										<h3>Magnas</h3>

										<h4>engagement</h4>

									</span>



								</div>

								<a>

									<i class="fa fa-twitter"></i>

								</a>

							</div>



							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard

								dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen

								book.

							</p>



							<div class="imgprt">

								<img src="uploads/theme/blog-img.png">

								<div class="downiminto">

									<h3>Lorem Ipsum is simply dummy text</h3>

									<p>October 20, 2019</p>

								</div>

							</div>



							<div class="uploadprt">

								<ul>

										<li>

												<a>

													<img src="uploads/theme/like-con.png">

												</a>

											</li>

									<li>

										<a>

											<img src="uploads/theme/boxlogin.png">

										</a>

									</li>

								</ul>

								<p>Oct 20, 2019</p>

							</div>

						</div>

					</div>



				</div>

			</div>

-->

			<div class="row margintop">

				<div class="col-md-12">

					<div class="tabpanel">

						<div class="heading grey">

							Endorsments

						</div>

						<ul class="nav nav-tabs fullnavtablog">



							<li class="active">
								<a href="<?php echo url('/');?>/endorsements" style="cursor: pointer;">
										ASSOCIATE & EARN
								</a>
							</li>
							<li>
								<a data-toggle="tab" href="#partner">
									Partners
								</a>
							</li>
							<li>
								<a data-toggle="tab" href="#clients">
									Clients
								</a>

							</li>



						</ul>

						<div class="tab-content backnone">

							<div id="earn" class="tab-pane fade">

								<div class="prtnerlogoprt">

									

								</div>

							</div>

							<div id="partner" class="tab-pane fade">

								<div class="prtnerlogoprt">

									<ul>

										<li>

											<img src="uploads/theme/partners/BakerTilly.png">

										</li>

										<li>

											<img src="uploads/theme/partners/CalvinJamesRecruitment.png">

										</li>

										<li>

											<img src="uploads/theme/partners/CBS.jpg">

										</li>

										<li>

											<img src="uploads/theme/partners/Crowe.png">

										</li>

										<li>

											<img src="uploads/theme/partners/Dreamdays.jpg">

										</li>

										<li>

											<img src="uploads/theme/partners/EIKR.png">

										</li>

										<li>

											<img src="uploads/theme/partners/Tally.png">

										</li>

										<li>

											<img src="uploads/theme/partners/Zoho.png">

										</li>

									</ul>

								</div>

							</div>

							<div id="clients" class="tab-pane fade in active">

							<div class="prtnerlogoprt">

									<ul>

										<li>
											<img src="uploads/theme/clients/AboveDigital.png">

										</li>

										<li>

											<img src="uploads/theme/clients/UAG.png">

										</li>

										

										<li>

											<img src="uploads/theme/clients/GalePacific.png">

										</li>

										<li>

											<img src="uploads/theme/clients/deGrisogono.png">

										</li>

										<li>

											<img src="uploads/theme/clients/Cranmore.png">

										</li>

										<li>

											<img src="uploads/theme/clients/AboveDigital.png">

										</li>
										<li>

											<img src="uploads/theme/clients/Nemesis.png">

										</li>

										<li>

											<img src="uploads/theme/clients/MurdochUniversity.png">

										</li>
									</ul>

								</div>

							</div>





						</div>

					</div>

				</div>

			</div>

		</div>

	</div>
	<div class="clearfix"></div>
	<div class="arrowup">
		<a href="javascript:" id="return-to-top">
			<i class="fa fa-angle-double-up"></i>
		</a>
	</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-js'); ?>

    <script src="<?php echo e(asset('assets/plugins/owl.carousel/owl.carousel.min.js')); ?>"></script>
    	<script>
		$('.tabbutton').click(function () {

			if (this.id == 'btn1') {
				$('.div1').show();
				$('.div2').hide();
                                $('#btn2').removeClass('active');
			    $('#btn1').addClass('active');
			} else {
				$('.div1').hide();
				$('.div2').show();
                                $('#btn1').removeClass('active');
				$('#btn2').addClass('active');
			}
		})
	</script>



<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sermagas/public_html/beta/resources/views/theme/modern/index.blade.php ENDPATH**/ ?>