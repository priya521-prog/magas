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
                    </div> <!-- /.row -->
                <?php endif; ?>
                <?php echo $__env->make('admin.flash_msg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="row">
                    <div class="col-sm-8 col-sm-offset-1 col-xs-12">

                        <form action="" class="form-horizontal" method="post"> <?php echo csrf_field(); ?>

                        <div class="form-group">
                            <label for="country_id" class="col-sm-4 control-label"><?php echo app('translator')->get('app.select_a_category'); ?></label>

                            <div class="col-sm-8 <?php echo e($errors->has('country_id')? 'has-error':''); ?>">
                                <select class="form-control select2" name="country_id">
                                    <option value=""><?php echo app('translator')->get('app.select_country'); ?></option>
                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($country->id); ?>"><?php echo e($country->country_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php echo $errors->has('country_id')? '<p class="help-block">'.$errors->first('country_id').'</p>':''; ?>


                            </div>
                        </div>

                        <div class="form-group <?php echo e($errors->has('state_name')? 'has-error':''); ?>">
                            <label for="state_name" class="col-sm-4 control-label"><?php echo app('translator')->get('app.state_name'); ?></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="state_name" value="<?php echo e(old('state_name')); ?>" name="state_name" placeholder="<?php echo app('translator')->get('app.state_name'); ?>">
                                <?php echo $errors->has('state_name')? '<p class="help-block">'.$errors->first('state_name').'</p>':''; ?>


                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-8">
                                <button type="submit" class="btn btn-primary"><?php echo app('translator')->get('app.save_new_state'); ?></button>
                            </div>
                        </div>
                        </form>

                    </div>

                </div>

                <hr />



                <div class="row">
                    <div class="col-xs-12">

                        <form method="get">
                            <p>
                                <input type="text" name="state_name" value="<?php echo e(request('state_name')); ?>">
                                <button type="submit"><?php echo app('translator')->get('app.search'); ?></button>
                            </p>
                        </form>

                        <table class="table table-bordered table-striped" >
                            <tr>
                                <th><?php echo app('translator')->get('app.state_name'); ?></th>
                                <th><?php echo app('translator')->get('app.country_name'); ?></th>
                                <th><?php echo app('translator')->get('app.actions'); ?></th>
                            </tr>

                            <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <tr>
                                    <td><?php echo $state->state_name; ?></td>
                                    <td><?php echo $state->country->country_name; ?></td>
                                    <td>
                                        <?php
                                        $html = '<a href="'.route('edit_state', $state->id).'" class="btn btn-primary"><i class="fa fa-edit"></i> </a>';
                                        $html .= '<a href="javascript:;" data-id="'.$state->id.'" class="btn btn-danger deleteState"><i class="fa fa-trash"></i> </a>';
                                        echo $html;
                                        ?>
                                    </td>
                                </tr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </table>

                        <?php echo $states->links(); ?>

                    </div>
                </div>
            </div>   <!-- /#page-wrapper -->

        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->
</div></div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-js'); ?>
    <script>
        $(document).ready(function() {
            $('body').on('click', '.deleteState', function (e) {
                if (!confirm("Are you sure? its can't be undone")) {
                    e.preventDefault();
                    return false;
                }
                var selector = $(this);
                var data_id = $(this).data('id');
                $.ajax({
                    type: 'POST',
                    url: '<?php echo e(route('delete_state')); ?>',
                    data: {state_id: data_id, _token: '<?php echo e(csrf_token()); ?>'},
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/beta1magas/public_html/resources/views/admin/states.blade.php ENDPATH**/ ?>