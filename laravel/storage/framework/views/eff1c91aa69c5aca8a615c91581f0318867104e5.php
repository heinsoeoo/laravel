<?php $__env->startSection('content'); ?>

	<h1>All Cards</h1>

	<?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

	<div>
		<a href="/cards/<?php echo e($card->id); ?>"><?php echo e($card -> title); ?></a>
	</div>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>