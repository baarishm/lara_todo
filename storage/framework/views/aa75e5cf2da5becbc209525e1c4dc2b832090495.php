<?php $__env->startSection('content'); ?>
    <h2>Edit Project</h2>
 
    <?php echo Form::model($project, ['method' => 'PATCH', 'route' => ['projects.update', $project->slug]]); ?>

        <?php echo $__env->make('projects/partials/_form', ['submit_text' => 'Edit Project'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>