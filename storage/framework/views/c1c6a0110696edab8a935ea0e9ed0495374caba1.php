<?php $__env->startSection('content'); ?>
    <h2>Edit Task "<?php echo e($task->name); ?>"</h2>
 
    <?php echo Form::model($task, ['method' => 'PATCH', 'route' => ['projects.tasks.update', $project->slug, $task->slug]]); ?>

        <?php echo $__env->make('tasks/partials/_form', ['submit_text' => 'Edit Task'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>