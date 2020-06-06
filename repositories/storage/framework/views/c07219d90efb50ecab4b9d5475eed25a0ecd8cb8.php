<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

  	<div class="main">
		<div class="custom-container">
			<div class="listingbody">
                            <ul class="breadcrumb">
                            <li> <a href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('app.home'); ?></a> </li>
                            <li> <span>All Projects</span> </li>
                        </ul>

                    <div class="modern-home-search-bar-wrap">
                        <div class="search-wrapper">
                            <form class="form-inline" action="<?php echo e(route('projects')); ?>" method="get"> <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <h3>SEARCH FILTERS</h3>
                                </div>
                              
                                 <div class="form-group">
                                       <div class="select">
                                                            <select class="form-control select2" name="q" id="searchTerms">
                                                                <option value ="">Service Type</option>
                                                                 <option value="Accounting & Book Keeping">Accounting & Book Keeping</option>
                                                                <option value="Actor">Actor</option>
                                                                <option value="Administration">Administration</option>
                                                                <option value="Advertising and Marketing">Advertising and Marketing</option>
                                                                <option value="Accounting & Book Keeping">Accounting & Book Keeping</option>
                                                                <option value="Actor">Actor</option>
                                                                <option value="Administration">Administration</option>
                                                                <option value="Analysts">Analysts</option>
                                                                <option value="Architects">Architects</option>
                                                                <option value="Archivists & Curator">Archivists & Curator</option>
                                                                <option value="Artist">Artist</option>
                                                                <option value="Auditing & Assurance">Auditing & Assurance</option>
                                                                <option value="Authors & Writer">Authors & Writer</option>
                                                                <option value="Cartographers and Surveyor">Cartographers and Surveyor</option>
                                                                <option value="Consultant">Consultant</option>
                                                                <option value="Dancers & Choreographer">Dancers & Choreographer</option>
                                                                <option value="Interior Decorator">Interior Decorator</option>
                                                                <option value="Designer">Designer</option>
                                                                <option value="Designer">Developer</option>
                                                                <option value="Economist">Economist</option>
                                                                <option value="Governmental">Governmental</option>
                                                                <option value="IT Specialist">IT Specialist</option>
                                                                <option value="Lawyer">Lawyer</option>
                                                                <option value="Medical Practitioner">Medical Practitioner</option>
                                                                <option value="Musicians, Singers & Composers">Musicians, Singers & Composers</option>
                                                                <option value="Pharmacist">Pharmacist</option>
                                                                <option value="Physio Therapists">Physio Therapists</option>
                                                                <option value="Public Relation Officer">Public Relation Officer</option>
                                                                <option value="Repairs & Maintenance">Repairs & Maintenance</option>
                                                                <option value="Tax Expert">Tax Expert</option>
                                                                <option value="Teacher">Teacher</option>
                                                                <option value="Therapist">Therapist</option>
                                                                <option value="Trainer">Trainer</option>
                                                                <option value="Translation">Translation</option>
                                                                <option value="Translators & Interpreters">Translators & Interpreters</option>
                                                                <option value="Travel Agent">Travel Agent</option>
                                                                <option value="Visual Artists">Visual Artists</option>
                                                                <option value="Visual Artists">Web & Multimedia</option>
                                                                <option value="Others">Others</option>
                                                            </select>
                                                        </div>
                                                        </div>
                                <div class="form-group">
                                    <select class="form-control select2" name="sub_category">
                                        <option value="">Select Industry</option>
                                         
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                         
                                            <?php if($category->sub_categories->count() > 0): ?>
                                                <optgroup label="<?php echo e($category->category_name); ?>">
                                                    <?php $__currentLoopData = $category->sub_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                  
                                                        <option value="<?php echo e($sub_category->id); ?>"><?php echo e($sub_category->category_name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </optgroup>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                                <!--<?php $country_usage = get_option('countries_usage'); ?>-->
                                <!--<?php if($country_usage == 'all_countries'): ?>-->
                                    <div class="form-group">
                                        <select class="form-control select2" name="country">
                                            <!--<option value=""><?php echo app('translator')->get('app.select_a_country'); ?></option>-->
                                            <option value="">Select Country</option>
                                            <?php
                                          //  dd($countries);
                                            ?>
                                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            
                                                <option value="<?php echo e($country->id); ?>" ><?php echo e($country->country_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                <!--<?php endif; ?>-->
                                <?php
                               // dd($countries);
                                foreach($countries as $country){
                                   // echo $country->country_name;
                                }
                                ?>
                                <div class="form-group">
                                     <select class="form-control select2" name="country">
                                            <option value="">Select Country</option>
                                            <?php
                                          //  dd($countries);
                                            ?>
                                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            
                                                <option value="<?php echo e($country->id); ?>" ><?php echo e($country->country_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-control select2" id="state_select" name="state">
                                        <!--<option value=""> <?php echo app('translator')->get('app.select_state'); ?> </option>-->
                                        <option value="">Select Location</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn theme-btn"> <i class="fa fa-search"></i> GO</button>
                            </form>
                        </div>
                    </div>
                    
<?php if($ads->count() <= 0): ?>

<p> No Records Found.</p>
   <?php endif; ?>

<?php
					
	if(Auth::user()){
					?>
				<div class="innerListingbody">
					<div class="innerheading green" style="background: #EA1C57 !important;">
						PROJECTS
					</div>
					<?php
				
					?>
<?php if($ads->count() > 0): ?>
					<ul>
                                              <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li style="width:21%">
                         <a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>">

						<div class="compLogo">
                                                                       <?php if ($ad->business_image== "") { ?>
				<img src="<?php echo url('/');?>/uploads/placeholder.png" style="width:150px">
				<?php } else { ?>
				<img src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>" style="width:150px">
				<?php } ?>
						</div>          				
						<!--<h3 ><?php echo e($ad->title); ?></h3>-->
						<h2 style="font-size: 12px;"><?php echo e($ad->title); ?></h2>
						<span style="font-size: 12px;"> <i class="fa fa-map-marker"></i><?php echo e($ad->country->country_name); ?></span><br>
							<span style="font-size: 12px;"><B>Industry:</B> <?php echo e($ad->sub_category->category_name); ?></span><br>
							<span style="font-size: 12px;">  <B>Req:</B> <?php echo e($ad->requirement); ?></span>
                           </a>
					</li>
					
					
						<!--<li>-->
      <!--                                              <a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>">-->
						<!--	<div class="topproductimgprt">-->
      <!--                                                             <?php if ($ad->business_image== "") { ?>-->
						<!--			<img src="<?php echo url('/');?>/uploads/placeholder.png" style="width:300px">-->
						<!--			<?php } else { ?>-->
						<!--			<img src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>" style="width:300px">-->
						<!--			<?php } ?>-->
						<!--		<div class="imgcont">-->
						<!--			<?php echo e($ad->title); ?>-->
						<!--		</div>-->
						<!--	</div>-->
						<!--	<h2><?php echo e($ad->slug); ?></h2>-->
						<!--	<h3><?php echo e($ad->category->category_name); ?> > <?php echo e($ad->sub_category->category_name); ?></h3>-->
						<!--	<span>-->
						<!--		<i class="fa fa-map-marker"></i>-->
						<!--		<?php echo e($ad->country->country_name); ?>-->
						<!--	</span>-->
      <!--                                              </a>-->
						<!--</li>-->
					 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
   <?php endif; ?>
				</div>
				<?php
	}else{
	    ?>
	    	<div class="innerListingbody">
					<div class="innerheading green" style="background: #EA1C57 !important;">
						PROJECTS
					</div>
					<?php
				
					?>
<?php if($ads->count() > 0): ?>
					<ul>
                                              <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li style="width:21%">
                         <a href="<?php echo e(route('user.create')); ?>">

						<div class="compLogo">
                                                                       <?php if ($ad->business_image== "") { ?>
				<img src="<?php echo url('/');?>/uploads/placeholder.png" style="width:150px">
				<?php } else { ?>
				<img src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>" style="width:150px">
				<?php } ?>
						</div>          				
						<!--<h3 ><?php echo e($ad->title); ?></h3>-->
						<h2 style="font-size: 12px;"><?php echo e($ad->title); ?></h2>
						<span style="font-size: 12px;"> <i class="fa fa-map-marker"></i><?php echo e($ad->country->country_name); ?></span><br>
							<span style="font-size: 12px;"><B>Industry:</B> <?php echo e($ad->sub_category->category_name); ?></span><br>
							<span style="font-size: 12px;">  <B>Req:</B> <?php echo e($ad->requirement); ?></span>
                           </a>
					</li>
					
					
						<!--<li>-->
      <!--                                              <a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>">-->
						<!--	<div class="topproductimgprt">-->
      <!--                                                             <?php if ($ad->business_image== "") { ?>-->
						<!--			<img src="<?php echo url('/');?>/uploads/placeholder.png" style="width:300px">-->
						<!--			<?php } else { ?>-->
						<!--			<img src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>" style="width:300px">-->
						<!--			<?php } ?>-->
						<!--		<div class="imgcont">-->
						<!--			<?php echo e($ad->title); ?>-->
						<!--		</div>-->
						<!--	</div>-->
						<!--	<h2><?php echo e($ad->slug); ?></h2>-->
						<!--	<h3><?php echo e($ad->category->category_name); ?> > <?php echo e($ad->sub_category->category_name); ?></h3>-->
						<!--	<span>-->
						<!--		<i class="fa fa-map-marker"></i>-->
						<!--		<?php echo e($ad->country->country_name); ?>-->
						<!--	</span>-->
      <!--                                              </a>-->
						<!--</li>-->
					 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
   <?php endif; ?>
				</div>
	    <?php
	}
	?>
			</div>

		<div class="row">
                    <div class="col-xs-12">
                        <?php echo e($ads->appends(request()->input())->links()); ?>

                    </div>
                </div>
		</div>
	</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('page-js'); ?>
 


    <script>
        <?php if(session('success')): ?>
            toastr.success('<?php echo e(session('success')); ?>', '<?php echo trans('app.success') ?>', toastr_options);
        <?php endif; ?>
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sermagas/public_html/resources/views/theme/modern/opportunities.blade.php ENDPATH**/ ?>