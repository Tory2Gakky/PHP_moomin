<?php //Error��\������@-���@endif
	if (isset($html_error)): ?>
<?php echo $html_error; ?>
<?php endif; ?>

<?php echo Form::open('form/confirm'); 
		//?>
<p>
	<?php echo Form::label('���O', 'name'); ?>(*) :
	<?php echo Form::input('name', Input::post('name')); ?>
</p>
<p>
	<?php echo Form::label('���[���A�h���X', 'email'); ?>(*) :
	<?php echo Form::input('email', Input::post('email')); ?>
</p>
<p>
	<?php echo Form::label('�R�����g', 'comment'); ?>(*) :
	<?php echo Form::textarea('comment', Input::post('comment'), 
		array('rows' => 6, 'cols' => 70)); ?>
</p>
<div class="actions">
	<?php echo Form::submit('submit', '�m�F'); ?>
</div>
<?php echo Form::close(); ?>
