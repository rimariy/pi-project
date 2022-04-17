


<?php $__env->startSection('content'); ?>

<div class="container">

<!---------------------------------------------Form------------------------------------------------>
<form method="post" action="<?php echo e(route('updateCourses',$courses->Id??1)); ?>">

    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

    <div class="mb-3">
      <label  class="form-label">Name</label>
      <input type="text" name="name"  value="<?php echo e($courses->name); ?>" class="form-control" >
      <?php if($errors->has('name')): ?>
          <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
      <?php endif; ?>
    </div>
    
    
    <div class="mb-3">
      <label  class="form-label">Prof_name</label>
      <input type="text" name="prof_name"  value="<?php echo e($courses->prof_name); ?>" class="form-control" >
      <?php if($errors->has('prof_name')): ?>
          <span class="text-danger"><?php echo e($errors->first('prof_name')); ?></span>
      <?php endif; ?>
    </div>


  <button type="submit" class="btn btn-primary">Submit</button>
  
</form>
<!-------------------------------------------------End form------------------------------------------------>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tus5_4_2022\resources\views/editCourses.blade.php ENDPATH**/ ?>