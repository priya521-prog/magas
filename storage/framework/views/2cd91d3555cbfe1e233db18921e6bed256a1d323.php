<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>


<?php $__env->startSection('main'); ?>

    <div class="main"><div class="custom-container"><div class="listingbody">

        <div id="wrapper">

            <?php echo $__env->make('admin.sidebar_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div id="page-wrapper">
                <?php if( ! empty($title)): ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"> <?php echo e($title); ?>  </h1>
                        </div> <!-- /.col-lg-12 -->
                    </div> <!-- /.row1 -->
                    
                <?php endif; ?>

                <?php echo $__env->make('admin.flash_msg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php
//dd($ads);
?>

                <div class="row">
                    <div class="col-xs-12">


                        <?php if($ads->total() > 0): ?>
                            <table class="table table-bordered table-striped table-responsive">

                                <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td width="100">
                                            <img src="<?php echo e(media_url($ad->feature_img)); ?>" class="thumb-listing-table" alt="">
                                        </td>
                                        <td>
                                            <h5><a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>" target="_blank"><?php echo e($ad->title); ?></a> (<?php echo $ad->status_context(); ?>)</h5>
                                            <!--<h5><a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>" target="_blank"><?php echo e($ad->title); ?></a> (<?php echo $ad->status_context(); ?>)</h5>-->
                                            
                                            <p class="text-muted">
                                                <i class="fa fa-map-marker"></i> <?php echo $ad->full_address(); ?> <br />  <i class="fa fa-clock-o"></i> <?php echo e($ad->posting_datetime()); ?>

                                           <br><i class="fa fa-clock-o"></i><?php echo e($ad->expiry); ?>

                                           <br> <?php echo e($ad->type); ?>

                                        
                                            </p>
                                        </td>

                                        <td>

                                            <!--<a href="<?php echo e(route('reports_by_ads', $ad->slug)); ?>">-->
                                            <!--    <i class="fa fa-exclamation-triangle"></i> <?php echo app('translator')->get('app.reports'); ?> : <?php echo e($ad->reports->count()); ?>-->
                                            <!--</a>-->

                                            <hr />

                                            <!--<a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-edit"></i> </a>-->

                                            <?php if($ad->status ==1): ?>
                                            <a href="javascript:void(0);" class="btn btn-warning blockAds" data-slug="<?php echo e($ad->slug); ?>" data-value="2"><i class="fa fa-ban"></i> </a>
                                            <?php else: ?>
                                                <a href="javascript:void(0);" class="btn btn-success approveAds" data-slug="<?php echo e($ad->slug); ?>" data-value="1"><i class="fa fa-check-circle-o"></i> </a>
                                               
                                                	<!--<button data-toggle="modal" data-target="#myModal" data-id="<?php //echo $ad->id; ?>">Comments</button>-->
                                                	
                                                	 <!--<button data-id="<?php //echo url()->full();?>"  onclick="$('#dataid').val($(this).data('id')); $('#myModal').modal('show');" >Add Comment</button>-->
                                                	 
                                                	  <button data-id="<?php echo url('/')."/"."ad/".$ad->id."/".$ad->slug."/".$ad->user_id; ?>"  onclick="$('#dataid').val($(this).data('id')); $('#myModal').modal('show');" >Add Comment</button>

                                            <?php endif; ?>

                                            <a href="javascript:void(0);" class="btn btn-danger deleteAds" data-slug="<?php echo e($ad->slug); ?>"><i class="fa fa-trash"></i> </a>
                                            
                                            
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </table>

                        <?php else: ?>
                            <h2><?php echo app('translator')->get('app.there_is_no_ads'); ?></h2>
                        <?php endif; ?>

                        <?php echo $ads->links(); ?>


                    </div>
                </div>

            </div>   <!-- /#page-wrapper -->

        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->
</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-js'); ?>

    <script>
        $(document).ready(function() {
            $('.deleteAds').on('click', function () {
                if (!confirm('<?php echo e(trans('app.are_you_sure')); ?>')) {
                    return '';
                }
                var selector = $(this);
                var slug = selector.data('slug');
                $.ajax({
                    url: '<?php echo e(route('delete_ads')); ?>',
                    type: "POST",
                    data: {slug: slug, _token: '<?php echo e(csrf_token()); ?>'},
                    success: function (data) {
                        if (data.success == 1) {
                            selector.closest('tr').hide('slow');
                            toastr.success(data.msg, '<?php echo app('translator')->get('app.success'); ?>', toastr_options);
                        }
                    }
                });
            });

            $('.approveAds, .blockAds').on('click', function () {
                var selector = $(this);
                var slug = selector.data('slug');
                var value = selector.data('value');
               // alert(value);
                $.ajax({
                    url: '<?php echo e(route('ads_status_change')); ?>',
                    type: "POST",
                    data: {slug: slug, value: value, _token: '<?php echo e(csrf_token()); ?>'},
                    success: function (data) {
                        if (data.success == 1) {
                            selector.closest('tr').hide('slow');
                            toastr.success(data.msg, '<?php echo app('translator')->get('app.success'); ?>', toastr_options);
                        }
                    }
                });
            });
        });

    </script>

    <script>
        <?php if(session('success')): ?>
            toastr.success('<?php echo e(session('success')); ?>', '<?php echo e(trans('app.success')); ?>', toastr_options);
        <?php endif; ?>
        <?php if(session('error')): ?>
            toastr.error('<?php echo e(session('error')); ?>', '<?php echo e(trans('app.success')); ?>', toastr_options);
        <?php endif; ?>
    </script>
    
     <div class="modal fade " id="myModal" role="dialog">
    <div class="modal-dialog ">
      <!-- Modal content-->
      <div class="modal-content well well-sm">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Add Comment</h3>
        </div>
        <div class="modal-body ">
         

           
                    <form action="<?php echo e(route('pending-comment')); ?>" method="post" > <?php echo csrf_field(); ?>
            <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  
                                    <!--<input type="text" class="form-control" id="name" name="name" placeholder="comments"  value=""/>-->
                                   <textarea name="name" class="form-control" id="name"  placeholder="comments"  value="<?php ?>"></textarea>
                                </div>
                               
                            </div>
                              <input type="hidden" name="dataid" id="dataid" value=""/>

                            <input type ="hidden" name="url" id="url" value="<?php echo $ad->id; ?>">
                            <input type ="hidden" name="fullpageurl" id="fullpageurl"  value="<?php echo url()->full();?>">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" id="btnContactUs"> Submit</button>
                            </div>
                        </div>
                    </form>
        </div> <!--modal body-->
      </div>
    </div>
  </div> <!--modal-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sermagas/public_html/resources/views/admin/all_ads.blade.php ENDPATH**/ ?>