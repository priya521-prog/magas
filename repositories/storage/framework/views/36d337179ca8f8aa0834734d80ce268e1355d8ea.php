<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

  	<div class="main">
		<div class="custom-container">
		    	<div class="listingbody">
		    
<?php if($ads->count() <= 0): ?>

<p> No Records Found.</p>
   <?php endif; ?>
 <div class="modern-home-search-bar-wrap">
       <ul class="breadcrumb">
                            <li> <a href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('app.home'); ?></a> </li>
                            <!--<li> <span>All Projects</span> </li>-->
                        </ul>
                        <br>
			<form class="form-inline" action="<?php echo e(route('main_search')); ?>" method="get">			
                            <div class="searchpanel" style="margin-top: -2%;">

				<input type="text" name="q" placeholder="What you are looking for??">
				<!--<input type="hidden" name="sub_category">-->
<button type="submit" class="btn topnone"> <i class="fa fa-search"></i> GO</button>
			</form>

			</div>


                    </div>
<div class="innerListingbody">
    
                  
					<div class="innerheading green">
						SEARCH RESULTS
					</div>
<?php if($ads->count() > 0): ?>
					 <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					
					
					 	<h3><a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>"><?php echo $ad->title; ?></a></h3>
					 	<div><a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>"><?php echo $ad->type; ?></a></div>




					 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					
   <?php endif; ?>
   </div>
				</div>
			</div>
</div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/beta1magas/public_html/resources/views/theme/modern/search.blade.php ENDPATH**/ ?>