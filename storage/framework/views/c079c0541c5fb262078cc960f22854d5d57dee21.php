


<?php $__env->startSection('content'); ?>

<div class="container">
<!------------------------------------------------------------------------------------------------->
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a href='<?php echo e(route('addCourses.index')); ?>' class="btn btn-warning me-md-2" type="button">Add Courses</a>
</div>
<!------------------------------------------------------------------------------------------------->
</div>
<!---------------------------------------------table----------------------------------------------->
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Course</th>
      <th scope="col">prof_name</th>
      <th scope="col"></th>
      <th scope="col"></th>



    </tr>
  </thead>
  <tbody>

    <?php $__currentLoopData = $Courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <th scope="row"><?php echo e($course['id']); ?></th>
        <td><?php echo e($course['name']); ?></td>
        <td><?php echo e($course['prof_name']); ?></td>

        <td>
            <a href="<?php echo e(route('Courses.edit',$course->id)); ?>" type="button" class="btn btn-success">Edit</a>
        </td>
        <td>
          <form action='<?php echo e(route('deleteCourses',$course->id)); ?>' method="post" >
            <?php echo csrf_field(); ?>
            <input type='hidden' value="delete" name='_method' >
            <button type="submit"  class="btn btn-danger">Delete</button>
          </form>
        </td>

      </tr>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<br>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\thurs14-4-2022\resources\views/Courses.blade.php ENDPATH**/ ?>