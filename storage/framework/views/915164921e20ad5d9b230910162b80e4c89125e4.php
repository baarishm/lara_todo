<div class="form-group">
    <?php echo Form::label('name', 'Name:'); ?>

    <?php echo Form::text('name'); ?>

</div>
 
<div class="form-group">
    <?php echo Form::label('slug', 'Slug:'); ?>

    <?php echo Form::text('slug'); ?>

</div>
 
<div class="form-group">
    <?php echo Form::label('completed', 'Completed:'); ?>

    <?php echo Form::checkbox('completed'); ?>

</div>
 
<div class="form-group">
    <?php echo Form::label('description', 'Description:'); ?>

    <?php echo Form::textarea('description'); ?>

</div>
 
<div class="form-group">
    <?php echo Form::submit('Submit'); ?>

</div>