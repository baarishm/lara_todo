 
<?php $__env->startSection('content'); ?>
    <h2>
        <?php echo link_to_route('projects.show', $project->name, [$project->slug]); ?> -
        <?php echo e($task->name); ?>

    </h2>
 
    <?php echo e($task->description); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>