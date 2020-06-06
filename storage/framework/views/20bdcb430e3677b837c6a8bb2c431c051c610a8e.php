<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>



<?php $__env->startSection('page-css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/fotorama-4.6.4/fotorama.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/owl.carousel/assets/owl.carousel.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

	<div class="main" >
		<div class="custom-container">
			<div class="listingbody">
			   <div class="form-group">
                          	<div class="detailbannerprt">

							<div class="innerheading violet">
								BIZZ
							</div>
							<img src="../../uploads/theme/banner.jpg">

							<div class="innercontDetail">
								<div class="">
									<?php if ($ad->business_image== "") { ?>
									<img src="../../uploads/placeholder.png" style="width:300px">
									<?php } else { ?>
									<img src="../../uploads/businesslogo/<?php echo $ad->business_image;?>" style="width:200px;height:200px">
									<?php } ?>
								</div>
							</div>
				</div>
					<div class="twodetailpanel row">
					<div class="col-md-8">
						<div class="leftquestionprt">
							<h2><?php echo e($ad->title); ?></h2>

							<div class="innerinfopannel">
							 <p><?php echo html_entity_decode($ad->description); ?> </p>
							</div>
							
							<div>
							    <?php //dd($user);
					  $user=$ad->user_id;
					  if($user = Auth::user()){
					  ?>
					  <a class="btn theme-btn" style="background-color:#191a50;" href="<?php echo e(route('editbizz', [$ad->id])); ?>">Edit </a>
							&nbsp &nbsp &nbsp
							<a class="btn theme-btn" style="background-color:#e8215a;" href="<?php echo e(route('deletead', [$ad->id])); ?>">Delete </a>
							<?php
					  }
					  ?>
							</div>
						</div>
					</div>
	<div class="col-md-4">
						<div class="gettouchprt">
							<h2>Get in touch</h2>
								<?php $x= "pdf/".$ad->pdffilename; ?>
				
								
									
							<button data-toggle="modal" data-target="#myModal" >Download Brochure</button>

							
	<!-- Modal -->
  <div class="modal fade " id="myModal" role="dialog">
    <div class="modal-dialog ">
      <!-- Modal content-->
      <div class="modal-content well well-sm">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Download Brochure</h3>
        </div>
        <div class="modal-body ">
                    <form action="<?php echo e(route('downloadmedia')); ?>" method="post" > <?php echo csrf_field(); ?>
            <div class="row">
                            <div class="col-md-12">
                                <div class="form-group <?php echo e($errors->has('name')? 'has-error':''); ?>">
                                    <label for="name"><?php echo app('translator')->get('app.name'); ?></label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="<?php echo app('translator')->get('app.enter_name'); ?>" value="<?php echo e(old('name')); ?>" required="required" />
                                    <?php echo $errors->has('name')? '<p class="help-block">'.$errors->first('name').'</p>':''; ?>

                                </div>
                                <div class="form-group <?php echo e($errors->has('email')? 'has-error':''); ?>">
                                    <label for="email"><?php echo app('translator')->get('app.email_address'); ?></label>
                                        <input type="email" class="form-control" id="email" placeholder="<?php echo app('translator')->get('app.enter_email_address'); ?>" name="email" value="<?php echo e(old('email')); ?>" required="required" />
                                       <?php echo $errors->has('email')? '<p class="help-block">'.$errors->first('email').'</p>':''; ?>

                                </div>
                            </div>
                            <input type ="hidden" name="url" id="url" value="<?php echo e($x); ?>" >
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" id="btnContactUs"> Submit</button>
                            </div>
                        </div>
                    </form>
        </div> <!--modal body-->
      </div>
    </div>
  </div> <!--modal-->
  <script>
function downloadthefile(filenamecustom){
if(filenamecustom !="") {
window.location = "<?php echo url('/');?>/uploads/pdf/<?php echo e($ad->pdffilename); ?>";
}else{
alert("No Documents found, Please write to info@magas.services");
}
}
</script>
	<span><?php echo e($ad->seller_email); ?></span>
							<span><?php echo e($ad->seller_phone); ?></span>
							<span><?php echo e($ad->website); ?></span>
						</span>
									<?php echo e($ad->address); ?>

							</span>                  
							<span>
									<?php echo e($ad->pdffilename); ?>

							</span> 
							<span>
									<?php echo e($ad->company_name); ?>

							</span> 
								<span>
									<?php echo e($ad->business_document); ?>

							</span> 
								<span>
									<?php echo e($ad->servicename); ?>

							</span>
								<span>
								    
                          </span>
                </div>
                </div>
                </div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/beta1magas/public_html/resources/views/theme/modern/bizz_preview.blade.php ENDPATH**/ ?>