


<?php $__env->startSection('content'); ?>

<div class="container">

<!---------------------------------------------Form------------------------------------------------>
<form method="post" action="<?php echo e(route('updateStudent',$student->Id??1)); ?>">

    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>


    <div class="mb-3">
      <label  class="form-label">Name</label>
      <input type="text" name="name"  value="<?php echo e($student->name); ?>" class="form-control" >
      <?php if($errors->has('name')): ?>
          <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
      <?php endif; ?>
    </div>
  
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input type="email" name="email" value="<?php echo e($student->email); ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <?php if($errors->has('email')): ?>
        <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
    <?php endif; ?>
  
    <div class="mb-3">
      <label  class="form-label">address</label>
      <input type="text" name="address" value="<?php echo e($student->address); ?>" class="form-control"  >
    </div>
    <?php if($errors->has('address')): ?>
        <span class="text-danger"><?php echo e($errors->first('address')); ?></span>
    <?php endif; ?>

  <button type="submit" class="btn btn-primary">Submit</button>
  
</form>
<!-------------------------------------------------End form------------------------------------------------>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tus5_4_2022\resources\views/editStudent.blade.php ENDPATH**/ ?>