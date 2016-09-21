<?php $__env->startSection('content'); ?>
    <h2>Projects</h2>
 
    <?php if( !$projects->count() ): ?>
        You have no projects
    <?php else: ?>
    <table border = 1>
        <col width="130">
        <col width="180">
            <?php foreach( $projects as $project ): ?>
                <tr>
                    <?php echo Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.destroy', $project->slug),'onsubmit' => 'return ConfirmDelete()')); ?>

                    <td>
                        <a href="<?php echo e(route('projects.show', $project->slug)); ?>"><?php echo e($project->name); ?></a>
                    </td>
                    <td>
                        (
                            <?php echo link_to_route('projects.edit', 'Edit', array($project->slug), array('class' => 'btn btn-info')); ?>,
                            <?php echo Form::submit('Delete', array('class' => 'btn btn-danger')); ?>

                        )
                    </td>
                    <?php echo Form::close(); ?>

                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
 
    <p>
        <?php echo link_to_route('projects.create', 'Create Project'); ?>

    </p>
<?php $__env->stopSection(); ?>
 

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
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>