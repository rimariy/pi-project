

<?php $__env->startSection('content'); ?>

<div class="container">

<!---------------------------------------------Form------------------------------------------------>

<form method="post" action=" <?php echo e(route('addProject.add',['id'=>$id,'id2'=>$Student_id])); ?>">

    <?php echo csrf_field(); ?>
 
    <div class="mb-3">
     <label  class="form-label">Project Name </label>
     <input type="text" name="name" class="form-control" >
     <?php if($errors->has('name')): ?>
         <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
     <?php endif; ?>
   </div>

   <button type="submit" class="btn btn-primary">Submit</button>
 </form>

<!-------------------------------------------------End form------------------------------------------------>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tus5_4_2022\resources\views/addProject.blade.php ENDPATH**/ ?>