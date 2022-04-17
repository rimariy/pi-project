


<?php $__env->startSection('content'); ?>

<div class="container">
    <!------------------------------------------------------------------------------------------------->
    
    

    <h3>Student Names <?php echo e($student->name); ?></h3>

    <!---------------------------------------------table----------------------------------------------->
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>  
          <th scope="col">Course</th>
          <th scope="col">Project title</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
    
        <?php $__currentLoopData = $student->courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


       <tr>
            <td><?php echo e($course->id); ?></td>

            <td><?php echo e($course->name); ?></td>

               
               <td>
                <?php echo e($course->project()->where('student_id',$student->Id)->first()->title??null); ?>

               <?php if(!$course->project()->where('student_id',$student->Id)->first()): ?>
                <a href="<?php echo e((!$course->project()->where('student_id',$student->Id)->first()? route('addProject.index',['id'=>$course->id,'id2'=>$student->Id]):'#')); ?>" class="link-secondary">Add project</a>
                <?php endif; ?>
               </td>
               <td>
                <?php if($course->project()->where('student_id',$student->Id)->first()): ?>
                <a href="<?php echo e(($course->project()->where('student_id',$student->Id)->first()? route('Task.index',$course->project()->where('student_id',$student->Id)->first()->id):'#')); ?>" class="btn link-success">Show Tasks</a>
                <?php endif; ?>
               </td>
               
             
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    </table>
    

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\thurs14-4-2022\resources\views/project.blade.php ENDPATH**/ ?>