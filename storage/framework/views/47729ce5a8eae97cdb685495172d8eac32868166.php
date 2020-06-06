<?php echo app('translator')->get('app.hi'); ?> : <?php echo e($user['name']); ?> <br /><br />

<p><?php echo app('translator')->get('app.activate_email_text'); ?></p><br />

<a href="<?php echo e(route('email_activation_link', $user['activation_code'])); ?>"><?php echo e(route('email_activation_link', $user['activation_code'])); ?></a>
<?php /**PATH /home/beta1magas/public_html/resources/views/emails/activation_email.blade.php ENDPATH**/ ?>