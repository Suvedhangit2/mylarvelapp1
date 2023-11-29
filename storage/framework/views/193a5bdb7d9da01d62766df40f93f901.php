
<?php $__env->startSection('title','Login'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <form class="ms-auto me-auto mt-auto" style="width:500px">
            <div class="mb-3">
                <label  class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
              <label  class="form-label">Password</label>
              <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rohit\OneDrive\Desktop\mylaravel\my_login\resources\views/login.blade.php ENDPATH**/ ?>