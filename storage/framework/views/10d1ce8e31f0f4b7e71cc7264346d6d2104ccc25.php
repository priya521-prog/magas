<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

  	<div class="main">
            
		<div class="custom-container">
        
               
       
			<div class="listingbody">
			    <div class="innerListingbody" >
				   
				   
					<div class="innerheading violet">
						PROJECT LISTS
					</div>
							<div class="headline_outter">
                <div class="row">
                     <div class="col-md-12">
                          <div class="col-md-9">
                              <?php if($ads->count() <= 0): ?>

<p> No Records Found.</p>
   <?php endif; ?>

<?php if($ads->count() > 0): ?>
  <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			
                       <a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>">

			
						<h3 ><?php echo e($ad->title); ?></h3>
					 <a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>"> Read More</a>
					
                           </a>  
<!--                          <div class="col-md-3">-->
<!--				<div class="headline_footer">-->
<!--					<div class="headline_readmore" style="margin-top: 26px;-->
<!--   ">-->
<!--					   <a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>"> Read More</a>-->
<!--						<span>↓</span>-->
<!--					</div>-->
<!--				</div>-->
<!--</div>-->
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php endif; ?> 
                    </div>
                  
					</ul>
   
                </div>
               
			</div>
      


                  
	


                </div>

			</div>
	
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('page-js'); ?>
  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sermagas/public_html/resources/views/theme/modern/evaluation_list.blade.php ENDPATH**/ ?>