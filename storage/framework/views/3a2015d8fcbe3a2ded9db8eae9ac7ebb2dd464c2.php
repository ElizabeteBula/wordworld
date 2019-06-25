<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
				<div class="card-body">
					<h3><B>PIEVIENOJAM PIERAKSTUS!!!</b></h3>
					<form method="POST" action="/pieraksti/add" class="form-horizontal">
					<?php echo csrf_field(); ?>
						<div class="form-group row">
							<textarea name="pieraksti" id="pieraksti"></textarea>
						</div>
						<button type="submit" class="btn btn-primary">Pievienot</button>
					</form>
				</div>	
			</div>	
			<?php $__currentLoopData = $pieraksti; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pieraksts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="card">
				<div class="card-body">
					<p><?php echo e($pieraksts); ?></p>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\wordworld\resources\views/pieraksti.blade.php ENDPATH**/ ?>