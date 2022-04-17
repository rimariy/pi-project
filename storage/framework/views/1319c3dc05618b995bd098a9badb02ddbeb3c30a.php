

<?php $__env->startSection('content'); ?>


<div class="container">

<br>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href='<?php echo e(route('addTask.index',$project->id)); ?>' class="btn btn-warning me-md-2" type="button">Add Task</a>
</div>

<br>

<div class="row">
    <div class="col-md-12">
        <h2 class="text-center pb-3 pt-1">This is Tasks for <?php echo e($project->title); ?></h2>
        <div class="row">
            <div class="col-md-5 p-3 bg-dark offset-md-1">
                <ul class="list-group shadow-lg connectedSortable" id="padding-item-drop">
                  <?php if(!empty($panddingItem) && $panddingItem->count()): ?>
                    <?php $__currentLoopData = $panddingItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <li class="list-group-item" item-id="<?php echo e($value->id); ?>"><?php echo e($value->name); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php endif; ?>
                </ul>
            </div>
            <div class="col-md-5 p-3 bg-dark offset-md-1 shadow-lg complete-item">
                <ul class="list-group  connectedSortable" id="complete-item-drop">
                  <?php if(!empty($completeItem) && $completeItem->count()): ?>
                    <?php $__currentLoopData = $completeItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <li class="list-group-item " item-id="<?php echo e($value->id); ?>"><?php echo e($value->name); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
  </div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tus5_4_2022\resources\views/Task.blade.php ENDPATH**/ ?>