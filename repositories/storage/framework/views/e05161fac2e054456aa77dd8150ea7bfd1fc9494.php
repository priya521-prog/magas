<?php $__env->startSection('page-css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
<style>
.carousel-indicators{
z-index : auto !important;
}
a:hover {
    color:white;
}
 .disabled {
        pointer-events: none;
        cursor: default;
    }
    .djslider-default .slider-container {
    position: absolute;
    overflow: hidden;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
}
.djslider-default {
    margin: 0 auto;
    position: relative;
    -webkit-transition: opacity 400ms ease;
    transition: opacity 400ms ease;
    opacity: 0;
}


</style>

 <div class="container-fluid" style="margin-top: 121px;">
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
                                   <a href="<?php echo e($slider->url); ?>" id="slider_url" target="_blank"> <img src="<?php echo e(slider_url($slider)); ?>" alt="Image one"></a>
                                    <div class="carousel-caption"><?php echo e($slider->caption); ?> </div>
                                     <!--<div class="carousel-caption"><a href="<?php echo e($slider->url); ?>" id="slider_url" target="_blank"></a> </div>-->
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
			<form class="form-inline" action="<?php echo e(route('main_search')); ?>" method="get">			
                            <div class="searchpanel" style="margin-top: -2%;">

				<input type="text" name="q" placeholder="Find A Service Provider">
				<!--<input type="hidden" name="sub_category">-->
<button type="submit" class="btn topnone"> <i class="fa fa-search"></i> GO</button>
			</form>

			</div>


                    </div>
                  

			<!--<div class="searchpanel">-->

			<!--	<input type="text" placeholder="Search for an Investment Project, Buyer or Seller  (Company Name, Specialist...etc)">-->

			<!--	<button type="button">SEARCH</button>-->

			<!--</div>-->
			

			<div class="row margintop">
				<div class="col-md-9">
					<div class="tabpanel">
						<!--<div class="heading violet">-->
						<!--	BIZZ   -->
						<!--</div>-->
						<ul class="nav nav-tabs fullnavtablog" style="border-bottom: 1px solid #ddd;">
						    <li style="float: left;
   
    margin-left: 0px;
    
    background: #EA1C57!important">	<a class="isDisabled" style="color:white">
								BIZZ
								</a></li>
							<li class="active">
								<!--<a  href="<?php echo e(route('listyourbusiness')); ?>" style="cursor: pointer;">-->
								 <!--<a  href="/user/create" target="_blank">-->
								  <a  href="<?php echo e(route('advertise')); ?>" target="_blank">
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
						    
<!--<marquee loop="infinite" scrollamount="10" direction="right">-->
<div class="carousel slide row" data-ride="carousel" data-type="multi" data-interval="2000" id="carousel_n" style="width: 100%;
    height: 220px;
    
    overflow-y: hidden;
    overflow-x: visible;
    white-space:nowrap;">
<!--<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">-->
    
     <div class="slide" style="display: inline-block;">
                                                     <?php if($bizz_ads->count() > 0): ?>
							<div id="advertise" class="tab-pane fade in active">
								<div class="complogoprt">
									<ul>
									   
                                                                              <?php $__currentLoopData = $bizz_ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                          <?php $i = 1;?>
										<li style="border-right:none">
                                                                                     <a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>">
			
											<div class="compLogo">
                                                                                           <?php if ($ad->business_image== "") { ?>
									<img src="<img src="<?php echo url('/');?>/uploads/placeholder.png" style="width:120px">
									<?php } else { ?>
									<img src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>" style="width:120px">
									<?php } ?>
											</div>     
											<!--<h3><?php echo e($ad->title); ?></h3><br>-->
                                                                                                                                                
												<span><?php echo e($ad->sub_category->category_name); ?></span>
											<h4><?php echo e($ad->country->country_name); ?></h4>
										
                                                                                         </a>

										</li>

                                                                             
									<?php if($i++==2){ break;} ?>
									<!--<?php $i++; ?>-->
								
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
                                                       <!--</marquee>-->

						</div>
						

					</div>

				</div>

				<div class="col-md-3">
                        	<div class="tabpanel">
						
						<ul class="nav nav-tabs fullnavtablog">
							<li class="active">
								<a  href="<?php echo e(route('bespoke')); ?>" style="cursor: pointer;">
									BESPOKE
								</a>
							</li>
							<!--  <li>-->
							<!--	<a href="<?php echo e(route('bizz')); ?>">-->
							<!--		View All-->
							<!--	</a>-->

							<!--</li>-->
							
							
                                                      

						</ul>
						</div>
							
							
                                                      

						</ul>
					<div class="adprt" style="border: 1px solid #ccc;width:267px;
    height:183px;">

						 <!--<div id="myCarousel" class="carousel slide" data-ride="carousel">-->
 

  <!-- Wrapper for slides -->
  <!--<div class="carousel-inner">-->
    				
	<!--<div class="item">-->
			     <!-- 		<img src="https://www.dance.nyc/uploads/ad-sample-250x250.gif" alt="Chicago">-->
			    	<!--</div>-->
			    
				<!--<div class="item active">-->
			      		<!--<img src="https://kakiseni.org/wp-content/uploads/2018/03/250X250.png" alt="Chicago">-->
			      		<!--<img src="http://beta1.magas.services/uploads/businesslogo/2019-11-19 04_16_41dream days.jpg" alt="Chicago" style="height:183px">-->
      					      						<a href="https://diplomatssummit.com" target="_blank">	<img src="http://beta1.magas.services/uploads/businesslogo/WhatsApp Image 2020-02-25 at 8.49.08 AM (1)-min.jpeg" alt="Chicago" style="height:183px;width: 100%;"></a>	
    				<!--</div>-->

<!--  </div>-->

<!--</div>-->


					</div>

				</div>

			</div>



		<div class="row margintop">

				<div class="col-md-8">

					<div class="tabpanel padnone">

						<!--<div class="heading blue">-->
						<!--	Pro-->
						<!--</div>-->
						<ul class="nav nav-tabs fullnavtablog" style="border-bottom: 3px solid #ddd;">
						<li style="float: left;
   
    margin-left: 0px;
    
    background: #1D2053!important">	<a class="isDisabled" style="color:white">
								PRO
								</a></li>
                                                       
<li class="active">

								<!--<a href="<?php echo e(route('create_proad')); ?>" style="cursor: pointer;">-->
								 <!--<a  href="/user/create" target="_blank">-->
								  <a  href="<?php echo e(route('advertise')); ?>" target="_blank">
									Advertise
								</a>
							</li>
 <li>
								<a href="<?php echo e(route('pro')); ?>">
									View All
								</a>
							</li>
							
						</ul>

                                            <div class="tab-content" style="background: #f5f5f5;">
                                                                             <?php if($pro_ads->count() > 0): ?>
         

							<div id="advertise2" class="tab-pane fade in active">
								<div class="maninto">
<?php $pro = 1;?>
                                                                     <ul style="margin-left:-16px">
                        <?php $__currentLoopData = $pro_ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<li style="width:32%">



<?php if ($ad->business_image== "") { ?>
									<a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>"><img src="<?php echo url('/');?>/uploads/placeholder.png" style="width:90px;height: 90px;
    overflow: hidden;margin-right: 30px;" class="img-circle"></a>
									<?php } else { ?>
									<a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>"><img src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>" style="width:90px;height: 90px;
    overflow: hidden;margin-right: 30px;" class="img-circle"></a>
									<?php } ?>

                                                                                            



											<div class="manintoinner">

                                                                                             <a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>">

												<h3><?php echo e($ad->title); ?></h3><br>
										    		<h4 style="text-transform: capitalize;"><?php echo e($ad->designation); ?></h3> 
												<p><h5><?php echo e($ad->country->country_name); ?></h5></p>
<br>
                                                                                             </a>

											</div>

                                                                                   

										</li>
									<?php if ($pro++ == 6) break; ?>

									 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        

                        </ul>

								</div>

							</div>

							

						</div>

						

                                                                                

    <?php endif; ?>

			

					</div>



				</div>

                 
				<div class="col-md-4">



					<div class="tabpanel">

						<!--<div class="heading yellow">-->

						<!--	Classifieds-->

						<!--</div>-->

						<ul class="nav nav-tabs fullnavtablog" style="border-bottom: 1px solid #ddd;">
						     <li style="float: left;
   
    margin-left: 0px;
    
    background: #f7f701 !important">	<a class="isDisabled" style="color:black">
								CLASSIFIEDS
								</a></li>
<li class="active">
								<a style="cursor: pointer;" href="<?php echo e(route('createclassifieds')); ?>">
									Post for free
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
		$initialCount = 100;
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
						         <h3 style="float:right">  <i class="fa fa-map-marker"></i> <?php echo e($ad->country->country_name); ?></h3> 
						         <h3><?php echo e($ad->title); ?></h3>
						         <div class="text" style="overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 2; /* number of lines to show */
   -webkit-box-orient: vertical;"><?php echo shortDescription($ad->description);?></div>
						         	  <!--<hr style="color:red">-->
						         	 
						                 </a>
						                
						            </li>
						          
									<?php if ($class++ == 3) break; ?>
								
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

						<!--<div class="heading green">-->

						<!--	Projects-->

						<!--</div>-->

						<ul class="nav nav-tabs fullnavtablog" style="border-bottom: 1px solid #ddd;">

                            <li style="float: left;
   
    margin-left: 0px;
    
    background: #EA1C57 !important">	<a class="isDisabled" style="color:white">
								PROJECTS
								</a></li>

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

						<div class="tab-content padnonetwo" style="background: #f5f5f5;">

							<div id="project" class="tab-pane fade in active">

								<div class="projectList">

									            <?php if($opportunities_ads->count() > 0): ?>

                        <ul>
<?php $projects = 1;?>
                        <?php $__currentLoopData = $opportunities_ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

										<li style="padding:0%">

                                                                                     <a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>">

                                                                                     <h3><?php echo e($ad->title); ?></h3> 

                                 <i class="fa fa-map-marker"></i> <?php echo e($ad->country->country_name); ?><br>
                                <B>Industry:</B> <?php echo e($ad->sub_category->category_name); ?><br>
                                <B>Requirement:</B> <?php echo e($ad->requirement); ?>

                                  <!--<i class="fa fa-map-marker"></i> <?php echo e($ad->country->country_name); ?><br>-->
                                 <!--Industry: <?php echo e($ad->sub_category->category_name); ?>-->
                                 

                                                                                     </a><br>
                                                                                    <button style="background-color: white;padding: 0px 8px;border:2px solid #191a50;border-radius:12px;margin-left:40px;border-radius:12px;" class="btn btn-primary"> <a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>" style="
    font-size: 12px;color: #2c3e50;
    
    font-weight: 500;">VIEW</a></button>

											

											

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

						<h2>In-House Services</h2>

						<div class="servicebox" style="overflow: auto;height: 14.0em">

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

												 Sustainability Analysis

											</a>

											</li>										

											<!--	<li>-->

											<!--  <a href="page/sustainability-testing-and-analysis">-->

											<!--	 Sustainability Analysis-->

											<!--</a>-->

											<!--</li>-->
											<!--	<li>-->

											<!--  <a href="page/sustainability-testing-and-analysis">-->

											<!--	 Sustainability Analysis-->

											<!--</a>-->

											<!--</li>-->
											<!--	<li>-->

											<!--  <a href="page/sustainability-testing-and-analysis">-->

											<!--	 Sustainability Analysis-->

											<!--</a>-->

											<!--</li>-->

										</ul>

						</div>

					</div>

				</div>

			</div>



			<div class="row margintop">

				<div class="col-md-9">

					<div class="tabpanel">

						<!--<div class="topheadingpanel" id="myDIV">-->
						     
							<!--<a class="tabbutton active" id="btn1">Services</a>-->

							<!--<a class="tabbutton" id="btn2">Sector</a>-->

						<!--</div>-->


                        <ul class="tab">
                                                           <li style="float: left;
   
    margin-left: 0px;
    
    
    background: #1D2053 !important;;padding: 5px 7px;
    font-size: 13px;
   
    border-left: none!important;
    border-top: none!important;
    border-right: none!important;
    text-transform: uppercase;
    font-weight: 700;border-top-left-radius: 7px;
    border-top-right-radius: 7px;">	<a  class="tabbutton active" style="color:white;padding: 5px 20px;
    font-size: 13px;
   
    border-left: none!important;
    border-top: none!important;
    border-right: none!important;
    text-transform: uppercase;
    font-weight: 700;" id="btn1">
								SERVICES
								</a></li>
								  <li style="float: left;
   
    margin-left: 5px;
   
    background: grey !important;;padding: 5px 7px;
    font-size: 13px;
   
    border-left: none!important;
    border-top: none!important;
    border-right: none!important;
    text-transform: uppercase;
    font-weight: 700;border-top-left-radius: 7px;
    border-top-right-radius: 7px;">	<a  class="tabbutton" style="color:white;padding: 7px 20px;
    font-size: 13px;
   
    border-left: none!important;
    border-top: none!important;
    border-right: none!important;
    text-transform: uppercase;
    font-weight: 700;" id="btn2">
								SECTOR
								</a></li>
                            </ul>
						<div class="div1">

							<ul class="nav nav-tabs fullnavtablog" style="border-bottom: 1px solid #ddd;">

    <!--                              <li style="float: left;-->
   
    <!--margin-left: 0px;-->
    
    <!--background: #1D2053 !important">	<a  class="tabbutton active" style="color:white" id="btn1">-->
				<!--				SERVICES-->
				<!--				</a></li>-->
				<!--				  <li style="float: left;-->
   
    <!--margin-left: 0px;-->
    
    <!--background: grey !important">	<a  class="tabbutton" style="color:white" id="btn2">-->
				<!--				SECTOR-->
				<!--				</a></li>-->
				<!--<div class="topheadingpanel" id="myDIV">-->
				<!--	<a class="tabbutton active" id="btn1">Services</a>-->

				<!--			<a class="tabbutton" id="btn2">Sector</a>-->
				<!--			</div>-->

								<li class="active">

									<!--<a data-toggle="tab" href="#package" style="margin-top: 3px;">-->
									    	<a  href="<?php echo e(route('packages')); ?>" style="cursor: pointer;margin-top: 3px;">
                                        
										Packages

									</a>

								</li>

								<li>

									<a  href="<?php echo e(route('catalogue')); ?>" style="cursor: pointer;margin-top: 3px;">

											ALA CARTE

									</a>

								</li>

							</ul>

							<div class="tab-content" style="background: #f5f5f5;">

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

												<img src="uploads/theme/icon8.png"> Sustainability Analysis

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

							<div class="tab-content padnonetwoo" style="background: #f5f5f5;">

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

						<div class="servicebox" style="overflow: auto;height: 12.0em"> 

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






				<!--<div class="col-md-3">-->

				<!--	<div class="housesevice">-->

				<!--		<div class="topfollowheadprt">-->

				<!--			<h3>Follow us on</h3>-->

				<!--			<div class="rightsocial">-->

				<!--				<ul>-->

				<!--					<li>-->

				<!--						<a>-->

				<!--							<i class="fa fa-linkedin"></i>-->

				<!--						</a>-->

				<!--					</li>-->

				<!--					<li>-->

				<!--						<a>-->

				<!--							<i class="fa fa-twitter"></i>-->

				<!--						</a>-->

				<!--					</li>-->

				<!--					<li>-->

				<!--						<a>-->

				<!--							<i class="fa fa-instagram"></i>-->

				<!--						</a>-->

				<!--					</li>-->

				<!--					<li>-->

				<!--						<a>-->

				<!--							<i class="fa fa-facebook"></i>-->

				<!--						</a>-->

				<!--					</li>-->

				<!--				</ul>-->

				<!--			</div>-->

				<!--		</div>-->



				<!--		<div class="blogsection">-->

				<!--			<div class="blognameprt">-->

				<!--				<div class="leftnameblog">-->

				<!--					--------->

				<!--					<span>-->

				<!--						<h3>Magnas</h3>-->

				<!--						<h4>engagement</h4>-->

				<!--					</span>-->



				<!--				</div>-->

				<!--				<a>-->

				<!--					<i class="fa fa-twitter"></i>-->

				<!--				</a>-->

				<!--			</div>-->



				<!--			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard-->

				<!--				dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen-->

				<!--				book.-->

				<!--			</p>-->



				<!--			<div class="imgprt">-->

				<!--				<img src="uploads/theme/blog-img.png">-->

				<!--				<div class="downiminto">-->

				<!--					<h3>Lorem Ipsum is simply dummy text</h3>-->

				<!--					<p>October 20, 2019</p>-->

				<!--				</div>-->

				<!--			</div>-->



				<!--			<div class="uploadprt">-->

				<!--				<ul>-->

				<!--						<li>-->

				<!--								<a>-->

				<!--									<img src="uploads/theme/like-con.png">-->

				<!--								</a>-->

				<!--							</li>-->

				<!--					<li>-->

				<!--						<a>-->

				<!--							<img src="uploads/theme/boxlogin.png">-->

				<!--						</a>-->

				<!--					</li>-->

				<!--				</ul>-->

				<!--				<p>Oct 20, 2019</p>-->

				<!--			</div>-->

				<!--		</div>-->

				<!--	</div>-->



				<!--</div>-->

<!--			</div>-->

       
			<div class="row margintop">
			    

				<div class="col-md-9">

					<div class="tabpanel">

					

						<ul class="nav nav-tabs fullnavtablog" style="border-bottom: 1px solid #ddd;">

							<li style="float: left;margin-left: 0px;background: #EA1C57!important">	<a class="isDisabled" style="color:white">
								INSIGHTS
								</a>
							</li>
							  <li style="float:left">
								<a data-toggle="tab" href="#headline" style="color:white;background: grey !important;padding: 7px 20px;
    font-size: 13px;
   
    border-left: none!important;
    border-top: none!important;
    border-right: none!important;
    text-transform: uppercase;
    font-weight: 700;color:white">
									Headlines
								</a>
                                  
							</li>
							<li style="float:left">
								<a data-toggle="tab" href="#blogs" style="color:white;padding: 7px 20px;
    font-size: 13px;
   
    border-left: none!important;
    border-top: none!important;
    border-right: none!important;
    text-transform: uppercase;
    font-weight: 700;color:white;background: grey !important;">
                                Blogs
								</a>
							</li>
		                  
						</ul>
						<br><br>
						<div class="row">
						<div class="col-md-12">
	<div class="col-md-5">

										<div class="topvideoprt">
										
											 <iframe width="100%" height="200" src="https://www.youtube.com/embed/SazITH8P8xA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										</div><br>
											  <button style="background-color: white;padding: 1px 9px;border:2px solid #191a50;border-radius:12px" class="btn btn-primary"> <a href="<?php echo e(route('videos')); ?>" style="color: #2c3e50;font-size: 13px;font-weight: 500;">VIEW ALL</a></button>
									
									</div>
									<div class="col-md-7">
<div class="tab-content">
							
						
							<div id="media" class="tab-pane fade">

		<!--					         <a class="twitter-timeline" data-tweet-limit="1" data-width="20"-->
  <!--data-height="20" href="https://twitter.com/magasintl?ref_src=twsrc%5Etfw">Tweets by magasintl</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>-->
							      
							  
							</div>
						<div id="headline" class="tab-pane fade in active">
						      <?php
	$rss = new DOMDocument();
 	$rss->load('http://www.moneycontrol.com/rss/latestnews.xml');
// $rss->load('https://www.economictimes.indiatimes.com/rss/latestnews.xml');
	
	$feed = array();
	foreach ($rss->getElementsByTagName('item') as $node) {
		$item = array ( 
			'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
// 			'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
			'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
// 			'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
			);
		array_push($feed, $item);
	}
	$limit = 4;
	for($x=0;$x<$limit;$x++) {
		$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
		$link = $feed[$x]['link'];
// 		$description = $feed[$x]['desc'];
// 		$date = date('l F d, Y', strtotime($feed[$x]['date']));
?>
<!--<img src="<?php //echo url('/');?>/uploads/theme/pointimg.png">&nbsp;&nbsp; -->
<?php
		echo '<p><img src="../uploads/theme/pointimg.png">&nbsp;&nbsp;<strong><a href="'.$link.'" title="'.$title.'" style="margin-left:1px">'.$title.'</a></strong><br />';
// 		echo '<small><em>Posted on '.$date.'</em></small></p>';
// 		echo '<p>'.$description.'</p>';
	}
                            
?><br>
                             <button style="background-color: white;padding: 1px 9px;border:2px solid #191a50;border-radius:12px" class="btn btn-primary"> <a href="<?php echo e(route('headlines')); ?>" style="color: #2c3e50;font-size: 13px;font-weight: 500;">VIEW ALL</a></button>
                        
						  
						    </div>
							<div id="blogs" class="tab-pane fade">
							    <?php $i=1; ?>
							       <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							       
							      
							       
                                                                                       <a href="<?php echo e(route('author_blog_posts', [$ad1->id])); ?>">
                                                                                     <p> <img src="<?php echo url('/');?>/uploads/theme/pointimg.png">&nbsp;&nbsp;<b><?php echo e($ad1->title); ?></b></p> 
                                
                                                                                     </a>
                                                                                     	<?php if($i++==5){ break;} ?>
								 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								
						 <button style="background-color: white;padding: 1px 9px;border:2px solid #191a50;border-radius:12px" class="btn btn-primary"> <a href="<?php echo e(route('blog')); ?>" style="color: #2c3e50;font-size: 13px;font-weight: 500;">VIEW ALL</a></button>
							</div>
							<div id="white" class="tab-pane fade">
								<?php if($whitepapers_ads->count() > 0): ?>
												             <!--<p style="font-size:5px">-->
                        <ul>
                            <?php $i=1; ?>
                        <?php $__currentLoopData = $whitepapers_ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       
										<!--<li>-->
									
										    
                                                                                     <a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>">
                                                                                     <!--<p><b><?php echo e($ad->title); ?></b></p> -->
                                 <!--<p><?php echo e($ad->description); ?></p>-->
                                                                     <div class="compLogo">
                                                                                           <?php if ($ad->business_image== "") { ?>
									<img src="<img src="<?php echo url('/');?>/uploads/placeholder.png" style="width:200px">
									<?php } else { ?>
									<img src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>" style="width:200px">
									<?php } ?>
											</div>          <br>   
											  <!--<button> <a href="<?php echo e(route('whitepaper')); ?>">VIEW ALL</a></button>-->
											   <button style="background-color: white;padding: 1px 9px;border:2px solid #191a50;border-radius:12px" class="btn btn-primary"> <a href="<?php echo e(route('whitepaper_list')); ?>" style="color: #2c3e50;font-size: 13px;font-weight: 500;">VIEW ALL</a></button>
											</a>
										<!--</li>-->
										
									<?php if($i++==1){ break;} ?>
								
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                        </ul>
                        	<!--</p>-->
    <?php endif; ?>
							</div>
						</div></div>
						</div>
						</div>
						<br><br>
					</div>
				
				</div>
	
                <div class="col-md-3">
      <!--          	<div class="heading pink">-->

						<!--	Media-->

						<!--</div>-->
							<ul class="nav nav-tabs fullnavtablog">
						<li style="float: left;
   
    margin-left: 0px;
    
    background: #EA1C57!important">	<a data-toggle="tab"  href="#list" style="color:white">
								WHITEPAPER
								</a></li>
									<li>

						<a   href="<?php echo e(route('create_your_whitepaper')); ?>" style="color:#f11e5d!important; ">

									POST

								</a>

							</li>
								</ul>
                   

<!--							</ul>-->
                    <div class="housesevice">

						<div class="topfollowheadprt">
	
						 
						
						
							
						    </div>
						    
						    <div>
						    <div id="list" class="tab-pane fade in active" style="margin-top:3px">
								<?php if($whitepapers_ads->count() > 0): ?>
												             <!--<p style="font-size:5px">-->
                        <ul>
                            <?php $i=1; ?>
                        <?php $__currentLoopData = $whitepapers_ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       
										<!--<li>-->
									
										    
                                                                                     <a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>">
                                                                                     <!--<p><b><?php echo e($ad->title); ?></b></p> -->
                                 <!--<p><?php echo e($ad->description); ?></p>-->
                                                                     <div class="compLogo" style="margin-top: 56px;">
                                                                                           <?php if ($ad->business_image== "") { ?>
									<img src="<img src="<?php echo url('/');?>/uploads/placeholder.png" style="width:150px">
									<?php } else { ?>
									<img src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>" style="width:150px">
									<?php } ?>
											</div>           
											 <button style="background-color: white;padding: 1px 9px;border:2px solid #191a50;border-radius:12px;margin-top:0px" class="btn btn-primary">  <a href="<?php echo e(route('whitepaper_list')); ?>" style="color:#2c3e50;font-size: 13px;
    font-weight: 500;">VIEW ALL</a></button>
											  
											</a>
										<!--</li>-->
										
									<?php if($i++==1){ break;} ?>
								
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                        </ul>
                        	<!--</p>-->
    <?php endif; ?>
							</div>
                </div>
			</div>
				</div>

			<div class="row margintop">

				<div class="col-md-12">

					<div class="tabpanel">

						<!--<div class="heading grey">-->

						<!--	Network-->

						<!--</div>-->

						<ul class="nav nav-tabs fullnavtablog" style="border-bottom: 1px solid #ddd;">


	<li style="float: left;
   
    margin-left: 0px;
    
    background: #1D2053!important">	
    <!--<a class="isDisabled" style="color:white">-->
    	<a href="<?php echo url('/');?>/endorsements" target="_blank" style="cursor: pointer;color:white">
								NETWORK
								</a></li>
									<li>
								<!--<a href="<?php //echo url('/');?>/endorsements" style="cursor: pointer;">-->
								 <!--<a href="<?php echo e(asset('assets/downloads/MAGAS-FORM-KYC.pdf')); ?>" style="cursor: pointer">-->
 <?php
								  if (Auth::user()) {  
								      ?>
								      <a  href="<?php echo e(route('associate')); ?>" style="cursor: pointer; border:solid transparent;color: #f11e5d!important;">
                                        ASSOCIATE & EARN
										
								</a>
								       
								      
								      <?php
								  }else{
								  ?>
								  
								 <a  href="/user/create" style="cursor: pointer; border:solid transparent;color: #f11e5d!important;">
                                        ASSOCIATE & EARN
										
								</a>
								<?php
								  }
								  ?>
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

										<!--<li>-->

										<!--	<img src="uploads/theme/clients/UAG.png">-->

										<!--</li>-->

										

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
	<!--<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-double-up"></i></button title="Go to top">-->
		<!--<a href="javascript:" id="return-to-top" onclick="topFunction()">-->
		<!--	<i class="fa fa-angle-double-up"></i>-->
		<!--</a>-->
			<a href="" id="return-to-top" onclick="topFunction()"  id="myBtn">
			<i class="fa fa-angle-double-up"></i>
		</a>
	</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-js'); ?>

    <script src="<?php echo e(asset('assets/plugins/owl.carousel/owl.carousel.min.js')); ?>"></script>
 <!--   <script type="text/javascript"> -->
	<!--	$(window).load(function() { -->
	<!--		$(".carousel .item").each(function() { -->
	<!--			var i = $(this).next(); -->
	<!--			i.length || (i = $(this).siblings(":first")), -->
	<!--			i.children(":first-child").clone().appendTo($(this)); -->
				
	<!--			for (var n = 0; n < 4; n++)(i = i.next()).length || -->
	<!--			(i = $(this).siblings(":first")), -->
	<!--			i.children(":first-child").clone().appendTo($(this)) -->
	<!--		}) -->
	<!--	}); -->
	<!--</script> -->
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

<script>
 
jQuery(document).ready(function() {
 
 
 
jQuery('.carousel[data-type="multi"] .item').each(function(){
 
var next = jQuery(this).next();
 
if (!next.length) {
 
next = jQuery(this).siblings(':first');
 
}
 
next.children(':first-child').clone().appendTo(jQuery(this));
 
 
 
for (var i=0;i<2;i++) {
 
next=next.next();
 
if (!next.length) {
 
next = jQuery(this).siblings(':first');
 
}
 
next.children(':first-child').clone().appendTo($(this));
 
}
 
});
 
 
 
});
 
</script>
<script type="text/javascript">
var mybutton = document.getElementById("myBtn");
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
//alert("vhbj");
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
<style type="text/css">
#slider_url{color: white;
    font-size: 24px;}
</style>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/beta1magas/public_html/resources/views/theme/modern/index.blade.php ENDPATH**/ ?>