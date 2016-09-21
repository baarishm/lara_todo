<script>

  function ConfirmDelete()
  {
  var x = confirm("Are you sure you want to delete?");
  if (x)
    return true;
  else
    return false;
  }

</script>



<?php $__env->startSection('content'); ?>
    <h2><?php echo e($project->name); ?></h2>
 
    <?php if( !$project->tasks->count() ): ?>
        Your project has no tasks.
    <?php else: ?>
        <ul>
            <?php foreach( $project->tasks as $task ): ?>
                <li>
                    <?php echo Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.tasks.destroy', $project->slug, $task->slug),'onsubmit' => 'return ConfirmDelete()')); ?>

                        <a href="<?php echo e(route('projects.tasks.show', [$project->slug, $task->slug])); ?>"><?php echo e($task->name); ?></a>
                        (
                            <?php echo link_to_route('projects.tasks.edit', 'Edit', array($project->slug, $task->slug), array('class' => 'btn btn-info')); ?>,
 
                            <?php echo Form::submit('Delete', array('class' => 'btn btn-danger')); ?>

                        )
                    <?php echo Form::close(); ?>

                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
 
    <p>
        <?php echo link_to_route('projects.index', 'Back to Projects'); ?> |
        <?php echo link_to_route('projects.tasks.create', 'Create Task', $project->slug); ?>

    </p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>