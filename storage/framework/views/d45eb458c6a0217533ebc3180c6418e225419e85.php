<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

    <div class="container" style='margin-top:10%'>
        <div id="wrapper">
            <?php echo $__env->make('admin.sidebar_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div id="page-wrapper">
                <?php if( ! empty($title)): ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"> <?php echo e($title); ?>

                                <a href="<?php echo e(route('create_new_post')); ?>" class="btn btn-info pull-right"> <i class="fa fa-floppy-o"></i> <?php echo app('translator')->get('app.create_new_post'); ?></a>
                            </h1>
                        </div> <!-- /.col-lg-12 -->
                    </div> <!-- /.row -->
                <?php endif; ?>

                <?php echo $__env->make('admin.flash_msg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <div class="row">
                        <div class="col-xs-12">

                            <?php if($posts->count()): ?>
                                <table class="table table-bordered table-striped" >
                                    <thead>
                                    <tr>
                                        <th><?php echo app('translator')->get('app.title'); ?></th>
                                        <th><?php echo app('translator')->get('app.created_at'); ?></th>
                                        <th><?php echo app('translator')->get('app.actions'); ?></th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo $post->title; ?></td>
                                            <td><?php echo $post->created_at_datetime(); ?></td>
                                            <td>
                                              
                                                <a href="posts/edit/<?php echo $post->slug;?>" class="btn btn-primary"><i class="fa fa-edit"></i> </a>
                                                <a href="javascript:;" class="btn btn-danger deletePage" data-slug="<?php echo $post->slug;?>"><i class="fa fa-trash"></i> </a>

                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>

                                </table>

                                <?php echo $posts->links(); ?>

                            <?php endif; ?>

                        </div>
                    </div>


            </div>   <!-- /#page-wrapper -->




        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-js'); ?>
    <script>
        $(document).ready(function() {
            $('body').on('click', '.btn-danger', function (e) {
                if (!confirm("<?php echo trans('app.are_you_sure') ?>")) {
                    e.preventDefault();
                    return false;
                }

                var selector = $(this);
                var slug = $(this).data('slug');

                $.ajax({
                    type: 'POST',
                    url: '<?php echo e(route('delete_page')); ?>',
                    data: {slug: slug, _token: '<?php echo e(csrf_token()); ?>'},
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



<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/beta1magas/public_html/resources/views/admin/posts.blade.php ENDPATH**/ ?>