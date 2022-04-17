


<?php $__env->startSection('content'); ?>


<div class="container">
   <br>
   <br>

<!---------------------------------------------Form------------------------------------------------>

<form method="post" action=" <?php echo e(route('addTask.add',$project_id)); ?>">

    <?php echo csrf_field(); ?>
 
    <div class="mb-3">
     <label  class="form-label">New Task : </label>
     <input type="text" name="name" class="form-control" >
     <?php if($errors->has('name')): ?>
         <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
     <?php endif; ?>
   </div>

   <button type="submit" class="btn btn-primary">Submit</button>
 </form>

<!-------------------------------------------------End form------------------------------------------->



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\thurs14-4-2022\resources\views/addTask.blade.php ENDPATH**/ ?>