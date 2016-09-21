<?php $__env->startSection('content'); ?>
    <h2>Create Task for Project "<?php echo e($project->name); ?>"</h2>
 
    <?php echo Form::model(new App\Task, ['route' => ['projects.tasks.store', $project->slug], 'class'=>'']); ?>

        <?php echo $__env->make('tasks/partials/_form', ['submit_text' => 'Create Task'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>