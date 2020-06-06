	<html>
	<head>
	  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  
	   <!--------Bootstrap Css Library---------->
	   <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css	">
	   <!--------Custom Css Library---------->
	   <link rel="stylesheet" type="text/css" href="../assets/css/megasStyle.css">
		<!-- Custom Fonts -->
		<link href="../assets/fonts/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	  <title>:::magas.services:::</title>

	</head>

	<body>
	<div id="wrapper">
	<!-------------Header start-------------------->
	<nav class="navbar navbar navBarSection">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>                        
		  </button>
		  <a class="navbar-brand megasbrand" href="#"><img src="../assets/images/logo.png"/></a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		  <ul class="nav navbar-nav navigationMenu">
			<li class="active"><a href="<?php echo e(route('bizz')); ?>">BIZZ</a></li>
			<li class=""><a href="<?php echo e(route('pro')); ?>">PRO</a></li>
			<li class=""><a href="<?php echo e(route('classifieds')); ?>">CLASSIFIEDS</a></li>
			<li class=""><a href="<?php echo e(route('projects')); ?>">Opportunities</a></li>
			<li class="dropdown">
			  <a class="dropdown-toggle" data-toggle="dropdown" href="#">SERVICES <span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<li><a href="<?php echo e(route('catalogue')); ?>">ALA CARTE</a></li>
				<?php
										if(Auth::user()){
										    ?>
										
										<li><a href="<?php echo e(route('packages')); ?>">PACKAGES</a></li>
										<?php
										}else{
										    ?>
										   <li> <a href="<?php echo e(route('user.create')); ?>">
								PACKAGES
							</a></li>
										    <?php
										}
?>
			  </ul>
			</li>
			<li class="dropdown">
			  <a class="dropdown-toggle" data-toggle="dropdown" href="#">INSIGHTS <span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<li><a href="<?php echo e(route('headlines')); ?>">HEADLINES</a></li>
				<li><a href="<?php echo e(route('blog')); ?>">BLOGS</a></li>
				<li><a href="<?php echo e(route('whitepaper_list')); ?>">WHITEPAPERS</a></li>
			  </ul>
			</li>
			<li><a href="<?php echo e(route('endorsements')); ?>">NETWORK</a></li>
		  </ul>
		  <ul class="nav navbar-nav navbar-right navigationSign">
			<li><a href="<?php echo e(route('user.create')); ?>" class="megasSignUp"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
			<li><a href="<?php echo e(route('login')); ?>" class="megasSignIn"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		  </ul>
		</div>
	  </div>
	</nav>
	<!-------------Header end-------------------->
	
	<!-------------Banner start-------------------->
	
            <div class="row bannerRow">
                <div class="col-lg-12 pad0">
	<div class="container-fluid pad0">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <!--<div class="item active">-->
      <!--  <img src="../assets/images/banner1.jpg"  style="width:100%;">-->
      <!--</div>-->
      
                            <?php $i=0; ?>
                            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="item <?php echo e($i==0? 'active':''); ?>">
                                   <a href="<?php echo e($slider->url); ?>" id="slider_url" target="_blank"><img src="<?php echo e(slider_url($slider)); ?>" alt="Image one" style="width:100%;"></a> 
                                    <div class="carousel-caption"><?php echo e($slider->caption); ?> </div>
                                     <!--<div class="carousel-caption"><a href="<?php echo e($slider->url); ?>" id="slider_url" target="_blank"></a> </div>-->
                                </div>
                                <?php $i++; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                            
      

    <!--  <div class="item">-->
    <!--    <img src="../assets/images/banner2.jpg"  style="width:100%;">-->
    <!--  </div>-->
    
    <!--  <div class="item">-->
    <!--    <img src="../assets/images/banner3.jpg" alt="New york" style="width:100%;">-->
    <!--  </div>-->
    <!--</div>-->

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <ol class="carousel-indicators">
                            
                            <?php $i=0; ?>
                            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li data-target="#carousel-example-generic" data-slide-to="<?php echo e($i); ?>" class="<?php echo e($i==0? 'active':''); ?>" style="color:grey"></li>
                                
                               
                                <?php $i++; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ol>
</div>
</div>
</div>
	<!-------------Banner end-------------------->
	<!-------------Search-Container start-------------------->
	<div class="col-md-12">
		<div class="searchContainer align-middle">
			<div class="fieldContaner brdR">
			<select class="form-control field">
				<option>Select Type</option>
			</select>
			</div>
			<div class="fieldContaner brdR">
			<select class="form-control field">
				<option>Select Industry</option>
			</select>
			</div>
			<div class="fieldContaner brdR">
			<select class="form-control field">
				<option>Service Country</option>
			</select>
			</div>
			<div class="fieldContaner">
			<select class="form-control field">
				<option>Select City</option>
			</select>
			</div>
			<div class="fieldContaner">
			<button type="button" class=" btn  btn-fill btn-add btn-wd searchButt"> Search</button>
			</div>
			
		</div>
	</div>
	
	<!-------------Search-Container end-------------------->
	
	<!-------------OFFER-Container start-------------------->
	 <div class="row bannerRow">
        <div class="container pad0">
			<div class="card form_card">
				<h4 class="h4">Our Core Offerings</h4>
				<div class="col-md-12 coreOfferingContaner">
					<ul>
						<li>
							<a href="<?php echo e(route('bizz')); ?>">
								<div class="imageBizzContaner">&nbsp;</div>
								<div>BIZZ</div>
							</a>
						</li>
						<li>
							<a href="<?php echo e(route('pro')); ?>">
								<div class="imageProContaner">&nbsp;</div>
								<div>PRO</div>
							</a>
						</li>
						<li>
							<a href="<?php echo e(route('classifieds')); ?>">
								<div class="imageClassifiedsContaner">&nbsp;</div>
								<div>Classifieds</div>
							</a>
						</li>
						<li>
							<a href="<?php echo e(route('projects')); ?>">
								<div class="imageOpportunitiesContaner">&nbsp;</div>
								<div>Opportunities</div>
							</a>
						</li>
						<li>
							<a href="<?php echo e(route('catalogue')); ?>">
								<div class="imageServicesContaner">&nbsp;</div>
								<div>Services</div>
							</a>
						</li>
						<li>
							<a href="<?php echo e(route('whitepaper_list')); ?>">
								<div class="imageWPContaner">&nbsp;</div>
								<div>WHITE PAPERS</div>
							</a>
						</li>
					
					</ul>
				</div>
				<div class="col-md-12 ala-carteContaner">
				<div class="megas_toggleButton">
					<div class="btn-group" data-toggle="buttons">
					  <label class="btn btn-light-blue form-check-label form-check-labelBorder active">
						<input class="form-check-input" type="radio" name="options" id="option1" autocomplete="off" checked>
						   <a href="<?php echo e(route('catalogue')); ?>">ALA-Carte</a>
					  </label>
					  <label class="btn btn-light-blue form-check-label form-check-labelBorder">
						<input class="form-check-input" type="radio" name="options" id="option2" autocomplete="off"> <a  href="<?php echo e(route('bespoke')); ?>" style="cursor: pointer;">
									BESPOKE
								</a>
					  </label>
					  <label class="btn btn-light-blue form-check-label">
						<input class="form-check-input" type="radio" name="options" id="option3" autocomplete="off"> <a href="<?php echo e(route('packages')); ?>">Packages</a>
					  </label>
					</div>
				</div>
				<div class="alaCarteOfferingContaner">
					<ul>
						<li>
							<a href="page/business-advisory">
								<div class="imageAdvisoryContaner">&nbsp;</div>
								<div>Advisory</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="imageCapitalContaner">&nbsp;</div>
								<div>Capital</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="imageCSContaner">&nbsp;</div>
								<div>corporate services</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="imageTechnologyContaner">&nbsp;</div>
								<div>Technology</div>
							</a>
						</li>
					</ul>
				</div>
				</div>
			</div>
		</div>
	</div>
	<!-------------OFFER-Container End-------------------->
	<div class="cls"></div>
	<!-------------Mid-Container start-------------------->
	<div class="row bannerRow mrt25">
        <div class="container pad0">
			<div class="card form_card">
				<!-------------Bizz start-------------------->
				<div class="col-md-12 mrt25">
				<h3 class="h3">LATEST IN <b><a href="<?php echo e(route('bizz')); ?>">Bizz</a></b>
				<div class="smallViewAll"><a href="<?php echo e(route('bizz')); ?>">View All</a></div>
				<div class="smallPinkbutt"><a href="<?php echo e(route('advertise')); ?>" target="_blank">Advertise With Us</a></div>
				</h3>
				<?php if($bizz_ads->count() > 0): ?>
				<?php $i = 1;?>
				<?php $__currentLoopData = $bizz_ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				
				<div class="bizzContaner">
					<div class="bizzimageContaner"><a href="">
					    
					                <?php if ($ad->business_image== "") { ?>
									<img class="img-responsive" src="<?php echo url('/');?>/uploads/placeholder.png" >
									<?php } else { ?>
									<img class="img-responsive" src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>" >
									<?php } ?>
					    
					    <!--<img class="img-responsive" src="../assets/images/img/bizz1.png"/></a>-->
					</div>
					<div class="bizzTextContaner">
						<div class="bizzHeadline"><a href=""><?php echo e($ad->title); ?></a></div>
						<div class="bizzSection"><span><?php echo e($ad->sub_category->category_name); ?></span>  |  <span><?php echo e($ad->servicename); ?></span></div>
						<div class="bizzLocation"><?php echo e($ad->country->country_name); ?></div>
						<div class="bizzReview"><img src="../assets/images/img/rating.png"/> <a href=""><span>18</span> Review</a></div>
					</div>
				</div>
			   <?php if ($i++ == 5) break; ?>             
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php endif; ?>
				<!--<div class="bizzContaner">-->
				<!--	<div class="bizzimageContaner"><a href=""><img class="img-responsive" src="../assets/images/img/bizz2.png"/></a></div>-->
				<!--	<div class="bizzTextContaner">-->
				<!--		<div class="bizzHeadline"><a href="">Allegiance International</a></div>-->
				<!--		<div class="bizzSection"><span>Legal</span>  |  <span>Consultant</span></div>-->
				<!--		<div class="bizzLocation">UAE</div>-->
				<!--		<div class="bizzReview"><img src="../assets/images/img/rating.png"/> <a href=""><span>18</span> Review</a></div>-->
				<!--	</div>-->
				<!--</div>-->
				<!--<div class="bizzContaner">-->
				<!--	<div class="bizzimageContaner"><a href=""><img class="img-responsive" src="../assets/images/img/bizz3.png"/></a></div>-->
				<!--	<div class="bizzTextContaner">-->
				<!--		<div class="bizzHeadline"><a href="">Allegiance International</a></div>-->
				<!--		<div class="bizzSection"><span>Legal</span>  |  <span>Consultant</span></div>-->
				<!--		<div class="bizzLocation">UAE</div>-->
				<!--		<div class="bizzReview"><img src="../assets/images/img/rating.png"/> <a href=""><span>18</span> Review</a></div>-->
				<!--	</div>-->
				<!--</div>-->
				<!--<div class="bizzContaner">-->
				<!--	<div class="bizzimageContaner"><a href=""><img class="img-responsive" src="../assets/images/img/bizz4.png"/></a></div>-->
				<!--	<div class="bizzTextContaner">-->
				<!--		<div class="bizzHeadline"><a href="">Allegiance International</a></div>-->
				<!--		<div class="bizzSection"><span>Legal</span>  |  <span>Consultant</span></div>-->
				<!--		<div class="bizzLocation">UAE</div>-->
				<!--		<div class="bizzReview"><img src="../assets/images/img/rating.png"/> <a href=""><span>18</span> Review</a></div>-->
				<!--	</div>-->
				<!--</div>-->
				<!--<div class="bizzContaner">-->
				<!--	<div class="bizzimageContaner"><a href=""><img class="img-responsive" src="../assets/images/img/bizz5.png"/></a></div>-->
				<!--	<div class="bizzTextContaner">-->
				<!--		<div class="bizzHeadline"><a href="">Allegiance International</a></div>-->
				<!--		<div class="bizzSection"><span>Legal</span>  |  <span>Consultant</span></div>-->
				<!--		<div class="bizzLocation">UAE</div>-->
				<!--		<div class="bizzReview"><img src="../assets/images/img/rating.png"/> <a href=""><span>18</span> Review</a></div>-->
				<!--	</div>-->
				<!--</div>-->
				</div>
				<!-------------Bizz End-------------------->
				<!-------------2nd row start-------------------->
				<div class="col-md-12 mrt25">
					<div class="col-md-8 col-xs-12 pad0">
						<h3 class="h3">Featured <b><a href="<?php echo e(route('pro')); ?>">PRO</a></b>
						<div class="smallViewAll"><a href="<?php echo e(route('pro')); ?>">View All</a></div>
						</h3>
						<?php if($pro_ads->count() > 0): ?>
						<?php $pro = 1;?>
                         <?php $__currentLoopData = $pro_ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="proContaner">
							<div class="proimageContaner"><img class="img-responsive img-circle" src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>"/></div>
							<div class="proTextContaner">
							<div class="proHeadline"><a href=""> <?php
												    $words = explode( " ", $ad->title  );
							   // dd($words);
$e=array_slice( $words,0,2);
$t=implode( " ", $e );
		echo $t;										    ?></a></div>
							<div class="proSection"><?php echo e($ad->designation); ?></div>
							<div class="proLocation"><?php echo e($ad->country->country_name); ?></div>
							</div>
						</div>
						<?php if ($pro++ == 6) break; ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				            <?php endif; ?>
						<!--<div class="proContaner">-->
						<!--	<div class="proimageContaner"><img class="img-responsive img-circle" src="../assets/images/img/pro2.png"/></div>-->
						<!--	<div class="proTextContaner">-->
						<!--	<div class="proHeadline"><a href="">Dharmik Sonani</a></div>-->
						<!--	<div class="proSection">Chartered Accountant</div>-->
						<!--	<div class="proLocation">UAE</div>-->
						<!--	</div>-->
						<!--</div>-->
						<!--<div class="proContaner">-->
						<!--	<div class="proimageContaner"><img class="img-responsive img-circle" src="../assets/images/img/pro3.png"/></div>-->
						<!--	<div class="proTextContaner">-->
						<!--	<div class="proHeadline"><a href="">Dharmik Sonani</a></div>-->
						<!--	<div class="proSection">Chartered Accountant</div>-->
						<!--	<div class="proLocation">UAE</div>-->
						<!--	</div>-->
						<!--</div>-->
						<!--<div class="proContaner">-->
						<!--	<div class="proimageContaner"><img class="img-responsive img-circle" src="../assets/images/img/pro4.png"/></div>-->
						<!--	<div class="proTextContaner">-->
						<!--	<div class="proHeadline"><a href="">Dharmik Sonani</a></div>-->
						<!--	<div class="proSection">Chartered Accountant</div>-->
						<!--	<div class="proLocation">UAE</div>-->
						<!--	</div>-->
						<!--</div>-->
						<!--<div class="proContaner">-->
						<!--	<div class="proimageContaner"><img class="img-responsive img-circle" src="../assets/images/img/pro5.jpg"/></div>-->
						<!--	<div class="proTextContaner">-->
						<!--	<div class="proHeadline"><a href="">Dharmik Sonani</a></div>-->
						<!--	<div class="proSection">Chartered Accountant</div>-->
						<!--	<div class="proLocation">UAE</div>-->
						<!--	</div>-->
						<!--</div>-->
						<!--<div class="proContaner">-->
						<!--	<div class="proimageContaner"><img class="img-responsive img-circle" src="../assets/images/img/pro6.png"/></div>-->
						<!--	<div class="proTextContaner">-->
						<!--	<div class="proHeadline"><a href="">Dharmik Sonani</a></div>-->
						<!--	<div class="proSection">Chartered Accountant</div>-->
						<!--	<div class="proLocation">UAE</div>-->
						<!--	</div>-->
						<!--</div>-->
					</div>
					<div class="col-md-4 col-xs-12">
						<h3 class="h3"><span>Classifieds</span>
						<div class="smallViewAll"><a href="<?php echo e(route('classifieds')); ?>">View All</a></div>
						</h3>
						<div class="mrt25">
						    <?php if($classifieds_ads->count() > 0): ?>
                            <?php $class = 1;?>
							<?php $__currentLoopData = $classifieds_ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						
						<div class="classContaner">
							<div class="classHeadline"><?php
					
                        	if(Auth::user()){
                        					?>
                                            <a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>">
                                                                                                             <?php
                        	}else{
                        	?>
                        	<a href="/user/create">                                              <?php
                        	}
                        	?><?php echo e($ad->title); ?></a></div>
						    	<div class="classSection"><?php echo shortDescription($ad->description);?>…</div>
							<div class="classLocation"><?php echo e($ad->country->country_name); ?></div>
						</div>
						</a>
						<?php if ($class++ == 3) break; ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				            <?php endif; ?>
				            
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
						<!--<div class="classContaner">-->
						<!--	<div class="classHeadline"><a href="">Human Resource Generalist	</a></div>-->
						<!--	<div class="classSection">Senior HR Professional with over 12 years of…</div>-->
						<!--	<div class="classLocation">UAE</div>-->
						<!--</div>-->
						<!--<div class="classContaner">-->
						<!--	<div class="classHeadline"><a href="">Human Resource Generalist	</a></div>-->
						<!--	<div class="classSection">Senior HR Professional with over 12 years of…</div>-->
						<!--	<div class="classLocation">UAE</div>-->
						<!--</div>-->
						</div>
					</div>
				</div>
				<!-------------2nd row End-------------------->
				<!-------------3rd row start-------------------->
				<div class="col-md-12 mrt25">
					<div class="col-md-8 col-xs-12 pad0">
						<h3 class="h3">Current <b>Opportunities</b> 
						<div class="smallViewAll"><a href="">View All</a></div>
						<div class="smallPinkbutt"><a href="">Post Now</a></div>
						</h3>
						 <?php if($opportunities_ads->count() > 0): ?>
                         <?php $projects = 1;?>
                         <?php $__currentLoopData = $opportunities_ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="OpportunitiesContaner">
						    
						    
							<div class="opportunitiesimageContaner"><?php if ($ad->business_image== "") { ?>
									<img class="img-responsive" src="<?php echo url('/');?>/uploads/placeholder.png" style="width:100px;height:110px">
									<?php } else { ?>
									<img src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>" style="width:100px;height:110px">
									<?php } ?></div>
							<div class="opportunitiesTextContaner">
							<div class="opportunitiesHeadline"><a href=""><?php echo e($ad->title); ?></a></div>
							<div class="opportunitiesSection">
								<div><span>Industry:</span> Technology</div>
								<div><span>Requirement:</span> looking For Retailers in GCC</div>
							</div>
							<div class="opportunitiesLocation">UAE</div>
							<div class="readmoreLink"><a href="">Read More <span class="glyphicon glyphicon-chevron-right"></span></a></div>
							</div>
						</div>
						<?php if ($projects++ == 4) break; ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				            <?php endif; ?>
						<!--<div class="OpportunitiesContaner">-->
						<!--	<div class="opportunitiesimageContaner"><img class="img-responsive img-thumbnail" src="../assets/images/img/opp2.jpg"/></div>-->
						<!--	<div class="opportunitiesTextContaner">-->
						<!--	<div class="opportunitiesHeadline"><a href="">Project Fascial Biometric</a></div>-->
						<!--	<div class="opportunitiesSection">-->
						<!--		<div><span>Industry:</span> Technology</div>-->
						<!--		<div><span>Requirement:</span> looking For Retailers in GCC</div>-->
						<!--	</div>-->
						<!--	<div class="opportunitiesLocation">UAE</div>-->
						<!--	<div class="readmoreLink"><a href="">Read More <span class="glyphicon glyphicon-chevron-right"></span></a></div>-->
						<!--	</div>-->
						<!--</div>-->
						<!--<div class="OpportunitiesContaner">-->
						<!--	<div class="opportunitiesimageContaner"><img class="img-responsive img-thumbnail" src="../assets/images/img/opp3.jpg"/></div>-->
						<!--	<div class="opportunitiesTextContaner">-->
						<!--	<div class="opportunitiesHeadline"><a href="">Project Fascial Biometric</a></div>-->
						<!--	<div class="opportunitiesSection">-->
						<!--		<div><span>Industry:</span> Technology</div>-->
						<!--		<div><span>Requirement:</span> looking For Retailers in GCC</div>-->
						<!--	</div>-->
						<!--	<div class="opportunitiesLocation">UAE</div>-->
						<!--	<div class="readmoreLink"><a href="">Read More <span class="glyphicon glyphicon-chevron-right"></span></a></div>-->
						<!--	</div>-->
						<!--</div>-->
						<!--<div class="OpportunitiesContaner">-->
						<!--	<div class="opportunitiesimageContaner"><img class="img-responsive img-thumbnail" src="../assets/images/img/opp4.jpg"/></div>-->
						<!--	<div class="opportunitiesTextContaner">-->
						<!--	<div class="opportunitiesHeadline"><a href="">Project Fascial Biometric</a></div>-->
						<!--	<div class="opportunitiesSection">-->
						<!--		<div><span>Industry:</span> Technology</div>-->
						<!--		<div><span>Requirement:</span> looking For Retailers in GCC</div>-->
						<!--	</div>-->
						<!--	<div class="opportunitiesLocation">UAE</div>-->
						<!--	<div class="readmoreLink"><a href="">Read More <span class="glyphicon glyphicon-chevron-right"></span></a></div>-->
						<!--	</div>-->
						<!--</div>-->
						
					</div>
					<div class="col-md-4 col-xs-12">
						<h3 class="h3">In-House <b>Services</b></h3>
						<div class="inHousContaner">
							<ul>
								<li><a href=""/>Business Valuation</a></li>
								<li><a href=""/>Deal Sourcing</a></li>
								<li><a href=""/>Deal Structuring</a></li>
								<li><a href=""/>Deals Execution</a></li>
								<li><a href=""/>Due Diligence</a></li>
								<li><a href=""/>Joint Ventures</a></li>
								<li><a href=""/>Sensitivity Analysis</a></li>
								<li><a href=""/>Sustainability Analysis</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-------------3rd row End-------------------->
				<!-------------insight row start-------------------->
				<div class="col-md-12 mrt25">
					<h3 class="h3 txtcenter"><b>Insights</b></h3>
					<div class="insightContaner">
					<div class="col-md-8 col-xs-12 pad0">
						
							<div class="insight_toggleButton">
							<div class="btn-group" data-toggle="buttons">
							  <label class="btn btn-light-blue form-check-label form-check-labelBorder blogEntryButt">
								<input class="form-check-input" type="radio" name="options" id="option1" autocomplete="off" checked>
								BLOGS
							  </label>
							  <label class="btn btn-light-blue form-check-label form-check-labelBorder headlineEntryButt active">
								<input class="form-check-input" type="radio" name="options" id="option2" autocomplete="off"> Headlines
							  </label>
							  <label class="btn btn-light-blue form-check-label">
								<input class="form-check-input" type="radio" name="options" id="option3" autocomplete="off"> VIDEOs
							  </label>
							</div>
						</div>
						<!-- headline start here -->
						<div id="headLineContaner" >
							<div class="col-md-5">
							<iframe width="100%" src="https://www.youtube.com/embed/bUI9jkQLwFs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>							
							</div>
							<div class="col-md-7">
								<ul>
									<li><a href="">5 Aspects Of Content Marketing</a></li>
									<li><a href="">Winner BEST Emerging Business Platform 2019 Middle East</a></li>
									<li><a href="">MAGAS wins MEA Markets - UAE Business Awards</a></li>
									<li><a href="">Do you face this complication, too?</a></li>
									<li><a href="">Find ‘people for jobs’, not ‘jobs for people’</a></li>
								</ul>
								<div class="smallViewAll"><a href="">View All</a></div>
							</div>
						</div>
						<!-- headline End here -->
						<!-- blog start here -->
						<div id="blogWrapper" class="disNon">
							<div class="blogContaner">
							<div class="blogimageContaner"><img class="img-responsive img-thumbnail" src="../assets/images/img/blog1.jpg"/></div>
							<div class="blogTextContaner">
							<div class="blogHeadline"><a href="">5 Aspects Of Content Marketing</a></div>
							<div class="blogSection">
								<div><span>Published By:</span> By Content</div>
								<div>In our first edition of the&nbsp;Silx Mini Blog, we address five important...</div>
							</div>
							<div class="blogClender"><span class="glyphicon glyphicon-calendar"></span> May 5, 2020 3:21 PM</div>
							<div class="readmoreLink"><a href="">Read More <span class="glyphicon glyphicon-chevron-right"></span></a></div>
							</div>
						</div>
						<div class="blogContaner">
							<div class="blogimageContaner"><img class="img-responsive img-thumbnail" src="../assets/images/img/blog2.jpg"/></div>
							<div class="blogTextContaner">
							<div class="blogHeadline"><a href="">Winner BEST Emerging Business</a></div>
							<div class="blogSection">
								<div><span>Published By:</span> By Content</div>
								<div>MAGAS participated in the GCC ENTERPRISEAWARDS 2019. The... </div>
							</div>
							<div class="blogClender"><span class="glyphicon glyphicon-calendar"></span> November 14, 2019 11:01 AM	</div>
							<div class="readmoreLink"><a href="">Read More <span class="glyphicon glyphicon-chevron-right"></span></a></div>
							</div>
						</div>
						<div class="smallViewAll"><a href="">View All</a></div>
						</div>
						<!-- blog End here -->
						</div>
			
					
					<div class="col-md-4 col-xs-12">
						<div class="whitePaperContaner">
							<h3 class="h3">Featured <b>WHITE PAPER</b></h3>
								<div class="whitePaperSection">
								<div class="whitePaperHeadline"><a href="">Managing Receivables</a></div>
								<div class="whitePaperthumbnail"><img class="" src="../assets/images/img/whtePaper1.jpg"/></div>
								<div class="whitePaperLocation">UAE</div>
								<div class="readmoreLink"><a href="">Read More <span class="glyphicon glyphicon-chevron-right"></span></a></div>
								</div>
							<div class="smallViewAll"><a href="">View All</a></div>
						</div>
					</div>
					</div>
				</div>
				<!-------------insight row end-------------------->
			</div>
		</div>
	</div>
	<!-------------Mid-Container End-------------------->
	<!-------------Megas Network Start-------------------->
	<div class=" mrt25">
        <div class="container pad0">
			<div class="col-md-12 mrt25">
			<h2 class="h2 txtcenter">MAGAS <b>Network</b></h2>
			<div class="col-md-12 networkContaner">
				<div class="networkImg"><img class="img-responsive" src="../assets/images/img/netw1.png"/></div>
				<div class="networkImg"><img class="img-responsive" src="../assets/images/img/netw2.png"/></div>
				<div class="networkImg"><img class="img-responsive" src="../assets/images/img/netw3.png"/></div>
				<div class="networkImg"><img class="img-responsive" src="../assets/images/img/netw4.png"/></div>
				<div class="networkImg"><img class="img-responsive" src="../assets/images/img/netw5.png"/></div>
				<div class="networkImg"><img class="img-responsive" src="../assets/images/img/netw6.png"/></div>
				<div class="networkImg"><img class="img-responsive" src="../assets/images/img/netw7.jpg"/></div>
				<div class="networkImg"><img class="img-responsive" src="../assets/images/img/netw8.png"/></div>
			</div>
			</div>
		</div>
	</div>
	<!-------------Megas Network End-------------------->
	<div class="cls"></div>
	<!-------------B-Partner Start-------------------->
	<div class="mrt25">
        <div class="container-fluid bPartnerContaner pad0">
			<div class="col-md-12">
			<div class="bpartnerHeading">Be Our Partner</div>
			<div class="bigPinkbutt"><a href="">Be An Associate</a></div>
			<div class="callBPartner"><a href="">Be A Partner</a></div>
			</div>
		</div>
	</div> 
	<!-------------B-Partner End-------------------->
	<!-------------Footer start-------------------->
	<div class=" mrt25">
        <div class="container-fluid pad0 footerContaner">
			<div class="container">
				<div class="col-md-4">
				<div class="txtcenter"><img src="../assets/images/logo-footer.png"/></div>
				<div class="footerText">MAGAS is an online destination that is dedicated to solve the biggest challenges in Lead Generation and Service Delivery. MAGAS connects with businesses and professionals across various geographies and industries who can fulfill your business needs with cost-effective solutions arising from shared economy and idle resources. It delivers services at an affordable price to empower Entrepreneurs, Startups, SME’s, etc. We are a platform where businesses & professionals find their eco-system to get support and grow.</div>
				<div class="readmoreLinkWhite"><a href="">Read More <span class="glyphicon glyphicon-chevron-right"></span></a></div>
				</div>
				<div class="col-md-2 footerList">
				<h6 class="h6">In-House Services</h6>
					<ul>
						<li><a href="#">Business Valuation</a></li>
						<li><a href="#">Deal Sourcing</a></li>
						<li><a href="#">Deal Structuring</a></li>
						<li><a href="#">Deals Execution</a></li>
						<li><a href="#">Due Diligence</a></li>
						<li><a href="#">Joint Ventures</a></li>
						<li><a href="#">Sensitivity Analysis</a></li>
						<li><a href="#">Sustainability Testing</a></li>			
					</ul>
				</div>
				<div class="col-md-2 footerList">
				<h6 class="h6">Managed Services</h6>
					<ul>
						<li><a href="#">Business Liquidation</a></li>
						<li><a href="#">Business Setup</a></li>
						<li><a href="#">Content Development</a></li>
						<li><a href="#">Crisis Management</a></li>
						<li><a href="#">Intellectual Property</a></li>
						<li><a href="#">KYC & Credit Check</a></li>
						<li><a href="#">Manpower Supply</a></li>
						<li><a href="#">Multilingual Translation</a></li>						
					</ul>
				</div>
				<div class="col-md-2 footerList">
				<h6 class="h6">Outsource to Us</h6>
					<ul>
						<li><a href="#">Accounting</a></li>
						<li><a href="#">Auditing</a></li>
						<li><a href="#">Advertising</a></li>
						<li><a href="#">Business Advisory</a></li>
						<li><a href="#">Business Plan Writing</a></li>
						<li><a href="#">Brand Consultancy</a></li>
						<li><a href="#">Feasibility Studies</a></li>
						<li><a href="#">Insurance</a></li>
						<li><a href="#">Management Consultancy</a></li>						
					</ul>
				</div>
				<div class="col-md-2 footerList">
				<h6 class="h6">Sectors</h6>
					<ul>
						<li><a href="#">Education</a></li>
						<li><a href="#">Healthcare</a></li>
						<li><a href="#">Media</a></li>
						<li><a href="#">Oil & Gas</a></li>
						<li><a href="#">Real Estate</a></li>
						<li><a href="#">Trading</a></li>
						<li><a href="#">Travel & Tourism</a></li>		
					</ul>
				</div>
			</div>
			<!-- Foot Note -->
			<div class="footeNote">
				<div class="container">
					<div class="col-md-4 copyRight">© 2010 MAGAS International. All Rights Reserved.</div>
					<div class="col-md-4 socialICO"><span class="fl">Follow Us</span>
					<a href="" class="linin">&nbsp;</a>
					<a href="" class="twit">&nbsp;</a>
					<a href="" class="insta">&nbsp;</a>
					<a href="" class="face">&nbsp;</a>
					<a href="" class="mail">&nbsp;</a>				
					</div>
					<div class="col-md-4 footNoteLink">
					<a href="">TERMS OF USE</a>    |    <a href="">ABOUT US</a>    |    <a href="">CONTACT US</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-------------Footer End-------------------->

	</div>
	</body>
	<!--------Bootstrap js  Library---------->
	<script type="text/javascript" src="../assets/js/vendor/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="../assets/js/vendor/bootstrap.min.js"></script>
	<!--------Custom js Library---------->
	<script type="text/javascript" src="../assets/js/magas-custom.js"></script>
	</html><?php /**PATH /home/magas21/public_html/resources/views/index.blade.php ENDPATH**/ ?>