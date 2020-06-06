<?php if($ads_images->count() > 0): ?>
    <?php $__currentLoopData = $ads_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="creating-ads-img-wrap">
            <img src="<?php echo e(media_url($img, false)); ?>" class="img-responsive" />
            <div class="img-action-wrap" id="<?php echo e($img->id); ?>">
                <a href="javascript:;" class="imgDeleteBtn"><i class="fa fa-trash-o"></i> </a>
                <a href="javascript:;" class="imgFeatureBtn"><i class="fa fa-star<?php echo e($img->is_feature ==1 ? '':'-o'); ?>"></i> </a>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?><?php /**PATH /home/beta1magas/public_html/resources/views/admin/append_media.blade.php ENDPATH**/ ?>