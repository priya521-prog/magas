<?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo session('success'); ?>

    </div>
<?php endif; ?>

<?php if(session('error')): ?>
    <div class="alert alert-danger">
        <?php echo session('error'); ?>

    </div>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\magas_services\resources\views/admin/flash_msg.blade.php ENDPATH**/ ?>