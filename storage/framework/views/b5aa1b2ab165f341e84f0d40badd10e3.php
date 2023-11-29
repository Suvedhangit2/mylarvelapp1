<?php $__env->startSection('title','Home page'); ?>
<?php $__env->startSection('content'); ?>
    <?php if(auth()->guard()->check()): ?>
    <?php echo e(auth()->user()->name); ?>

    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rohit\OneDrive\Desktop\mylaravel\my_login\resources\views/welcome.blade.php ENDPATH**/ ?>