<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>



<?php $__env->startSection('main'); ?>





	<div class="main" >
		<div class="custom-container">
		     <ul class="breadcrumb">
		         	<div class="listingbody">
		         	    <ul>
                            <li> <a href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('app.home'); ?></a> </li>
                           
                            <li> <span><?php echo e($ad->title); ?></span> </li>
                        </ul>
                        </div>
                        
                                     <div class="innerListingbody" >
					<div class="innerheading yellow">
						PROJECTS 
					</div>

					<div class="topdetailintoprt">
						
						<div class="profinto">
						    	<div class="infoPanel">
						    	    <h2><?php echo e($ad->title); ?> </h2>	
							<?php echo html_entity_decode($ad->description); ?> 
						</div>
						    <span><?php  echo $ad->seller_name;?></span>
							<!--<span><?php echo e($ad->seller_name); ?> </span>-->
						
														<span>
								<i class="fa fa-phone"></i>
								<?php 	echo $ad->seller_phone; ?>
							
							</span>
							<span>
									<i class="fa fa-envelope"></i>
								<?php echo e($ad->seller_email); ?>

								</span><br>
								<span>
								  
								    
								   
							<a href="<?php echo url('/');?>/uploads/pdf/<?php echo e($ad->pdffilename); ?>" target="_blank">Download Brochure</a>
							 	<!--<a href="<?php  //echo url("/uploads/pdf/{$ad->pdffilename}"); ?>" target="_blank">Download Brochure</a> */-->
								</span>
						</div>

						<div class="socialinto">
						   
                            
							
						</div>

<!--						<div class="personalinfoprt">-->



<!--<div class="profinto" style="margin-bottom:20px;">-->
	
						
<!--</div>-->
					

<!--<div>-->
<!--                           <a href="#" data-toggle="modal" data-target="#reportAdModal"><i class="fa fa-ban"></i> <?php echo app('translator')->get('app.report_this_ad'); ?></a>-->
<!--</div>-->



<!--					</div>-->

					
					</div>

				

					
				</div>
		
          
		</div>
	</div>







<?php $__env->stopSection(); ?>





<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/beta1magas/public_html/resources/views/theme/modern/evaluation_ad.blade.php ENDPATH**/ ?>