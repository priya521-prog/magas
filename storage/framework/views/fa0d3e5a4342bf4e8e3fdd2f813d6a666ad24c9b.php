<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

     <div class="main" ><div class="custom-container"><div class="listingbody">

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
                            <label for="category_name" class="col-sm-4 control-label"><?php echo app('translator')->get('app.select_a_category'); ?></label>

                            <div class="col-sm-8">

                                <select class="form-control select2" name="category">
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
                        </div>

                        <div class="form-group <?php echo e($errors->has('brand_name')? 'has-error':''); ?>">
                            <label for="brand_name" class="col-sm-4 control-label">Service Type</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="brand_name" value="<?php echo e(old('brand_name')); ?>" name="brand_name" placeholder="Service Type">
                                <?php echo $errors->has('brand_name')? '<p class="help-block">'.$errors->first('brand_name').'</p>':''; ?>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-8">
                                <button type="submit" class="btn btn-primary">Save New Service Type</button>
                            </div>
                        </div>
                        </form>

                    </div>

                </div>


                <div class="row">
                    <div class="col-xs-12">
                        <table class="table table-bordered">
                            <tr>
                                <th>Service Type</th>
                                <th><?php echo app('translator')->get('app.category'); ?> </th>
                            </tr>
                            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <div class="clearfix">
                                            <strong><?php echo e($brand->brand_name); ?> (<?php echo e($brand->product_count); ?>)</strong>
                                            <span class="pull-right">

                                            <a href="<?php echo e(route('edit_brands', $brand->id)); ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> </a>
                                            <a href="javascript:;" class="btn btn-danger btn-xs" data-id="<?php echo e($brand->id); ?>"><i class="fa fa-trash"></i> </a>
                                            </span>

                                        </div>

                                    </td>
                                    <td> <?php if($brand->category): ?> <?php echo e($brand->category->category_name); ?> <?php endif; ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>
                </div>

            </div>   <!-- /#page-wrapper -->




        </div>   <!-- /#wrapper -->


    </div></div></div> <!-- /#container -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-js'); ?>

    <script>
        $(document).ready(function() {
            $('.btn-danger').on('click', function (e) {
                if (!confirm("<?php echo trans('app.are_you_sure') ?>")) {
                    e.preventDefault();
                    return false;
                }

                var selector = $(this);
                var data_id = $(this).data('id');

                $.ajax({
                    type: 'POST',
                    url: '<?php echo e(route('delete_brands')); ?>',
                    data: {data_id: data_id, _token: '<?php echo e(csrf_token()); ?>'},
                    success: function (data) {
                        if (data.success == 1) {
                            selector.closest('tr').hide('slow');
                            var options = {closeButton: true};
                            toastr.success(data.msg, '<?php echo trans('app.success') ?>', options)
                        }
                    }
                });
            });
        });
    </script>

    <script>
        var options = {closeButton : true};
        <?php if(session('success')): ?>
            toastr.success('<?php echo e(session('success')); ?>', '<?php echo trans('app.success') ?>', options);
        <?php endif; ?>
    </script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sermagas/public_html/resources/views/admin/brands.blade.php ENDPATH**/ ?>