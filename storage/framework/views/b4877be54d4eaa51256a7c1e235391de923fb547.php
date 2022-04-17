


<?php $__env->startSection('content'); ?>

<div class="container">
<!---------------------------------------------Form------------------------------------------------>
<form method="post" action="addStudent">
   <?php echo csrf_field(); ?>
  <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" name="name" class="form-control" >
    <?php if($errors->has('name')): ?>
        <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
    <?php endif; ?>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <?php if($errors->has('email')): ?>
      <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
  <?php endif; ?>

  <div class="mb-3">
    <label  class="form-label">address</label>
    <input type="text" name="address" class="form-control"  >
  </div>
  <?php if($errors->has('address')): ?>
      <span class="text-danger"><?php echo e($errors->first('address')); ?></span>
  <?php endif; ?>

  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <?php if($errors->has('password')): ?>
    <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
  <?php endif; ?>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<!-------------------------------------------------End form------------------------------------------------>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tus5_4_2022\resources\views/addStudent.blade.php ENDPATH**/ ?>