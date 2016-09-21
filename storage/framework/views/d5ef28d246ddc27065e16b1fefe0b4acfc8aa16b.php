<?php $__env->startSection('content'); ?>
    <h2>Create Project</h2>
 
    <?php echo Form::model(new App\Project, ['route' => ['projects.store']]); ?>

        <?php echo $__env->make('projects/partials/_form', ['submit_text' => 'Create Project'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>