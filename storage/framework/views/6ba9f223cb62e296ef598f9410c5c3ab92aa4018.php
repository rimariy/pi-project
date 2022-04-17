


<?php $__env->startSection('content'); ?>

<div class="container">
<!------------------------------------------------------------------------------------------------->
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a href='<?php echo e(route('addStudent.index')); ?>' class="btn btn-warning me-md-2" type="button">Add Student</a>
</div>
<!------------------------------------------------------------------------------------------------->
</div>
<!---------------------------------------------table----------------------------------------------->
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">address</th>
      <th scope="col">courses</th>
      <th scope="col"></th>
      <th scope="col"></th>



    </tr>
  </thead>
  <tbody>

    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($student['Id'] == 1 ): ?>
    
    <?php else: ?>
      <tr>
        <th scope="row"><?php echo e($student['Id']); ?></th>
        <td>
          <a href="<?php echo e(route('Project.index',$student->Id)); ?>" type="button" class="btn btn-outline-light">
            <?php echo e($student['name']); ?>

          </a>
        </td>
        <td><?php echo e($student['email']); ?></td>
        <td><?php echo e($student['address']); ?></td>

        <td>
          
          <?php $__currentLoopData = $student->courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li><?php echo e($course->name); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <a href="<?php echo e(route('addtotable.index',$student->Id)); ?>" class="btn link-success">Add Course</a>
        </td>

        <td>
            <a href="<?php echo e(route('student.edit',$student->Id)); ?>" type="button" class="btn btn-success">Edit</a>
        </td>
        <td>    
            <form action='<?php echo e(route('deleteStudent',$student->Id)); ?>' method="post" >
              <?php echo csrf_field(); ?>
              <input type='hidden' value="delete" name='_method' >
              <button type="submit"  class="btn btn-danger">Delete</button>
            </form>
        </td>
      </tr>
      <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tus5_4_2022\resources\views/Student.blade.php ENDPATH**/ ?>