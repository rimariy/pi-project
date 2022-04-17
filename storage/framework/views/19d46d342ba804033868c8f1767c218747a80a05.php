


<?php $__env->startSection('content'); ?>


<div class="container">
   <br>
   <br>
    <!---------------------------------------------Form------------------------------------------------>

    <form method="post" action="<?php echo e(route('addtotable.add',$student_id)); ?>">
        <?php echo csrf_field(); ?>
    <div class="input-group mb-3">
    <label class="input-group-text" for="inputGroupSelect02">Courses</label>
      <select class="form-select" id="inputGroupSelect02" name="id">
      
        <?php $__currentLoopData = $Courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <option value="<?php echo e($course->id); ?>"><?php echo e($course->name); ?></option>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
      </select>
      
    </div>
    <br>
      <button type="submit" class="btn btn-primary">Submit</button>
    
    </form>

    <!-------------------------------------------------End form----------------------------------------->
    
    </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\thurs14-4-2022\resources\views/addtotable.blade.php ENDPATH**/ ?>