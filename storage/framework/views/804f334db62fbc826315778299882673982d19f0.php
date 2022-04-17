

<?php $__env->startSection('content'); ?>


<div class="container">

<br>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href='<?php echo e(route('addTask.index',$project->id)); ?>' class="btn btn-warning me-md-2" type="button">Add Task</a>
</div>

<br>

<div class="row">
    <div class="col-md-12">
        <h2 class="text-center pb-3 pt-1">This is Tasks for (<?php echo e($project->title); ?>) Project</h2>
        <div class="row">
            <div class="col-md-10 p-3 offset-md-1">
              <table id="table" class="table table-bordered">
                
                  <thead>
                    <tr>
                      <th width="30px">#</th>
                      <th>Title</th>
                    </tr>
                  </thead>
                  <tbody id="tablecontents">
                  
                  
                  <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="row1" data-id="<?php echo e($task->id); ?>">
                      <td class="pl-3"><i class="fa fa-sort"></i></td>
                      <td class="tdcolor"><?php echo e($task->name); ?></td>
                      
                      
                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>                  
              </table>
                  
                

            </div>
            <h5  class="col-md-10 p-3 offset-md-1">Drag and Drop the table rows and <button class="btn btn-success btn-sm" onclick="window.location.reload()">REFRESH</button> the page to check the Demo.</h5> 

        </div>
    </div>
  </div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\thurs14-4-2022\resources\views/task.blade.php ENDPATH**/ ?>