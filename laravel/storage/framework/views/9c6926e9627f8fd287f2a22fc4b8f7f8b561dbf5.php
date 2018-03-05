<?php $__env->startSection('content'); ?>

<div class="row">

	<div class="col-md-6 col-md-offset-3">

		<h2><?php echo e($card->title); ?></h2>

		<ul class="list-group">
			<?php $__currentLoopData = $card->notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

			<li class="list-group-item">
				<?php echo e($note->body); ?>

				<a href="#" class="pull-right"><?php echo e($note->user->username); ?></a>
			</li>

			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</ul>

		<hr>

		<h3>Add a New Note</h3>

		<form method="POST" action="/cards/<?php echo e($card->id); ?>/notes">
			<?php echo e(csrf_field()); ?>

			<input type="hidden" name="user_id" value="1">
			
			<div class="form-group">
				<textarea name="body" class="form-control"></textarea>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Add Note</button>
			</div>
		</form>

	</div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>