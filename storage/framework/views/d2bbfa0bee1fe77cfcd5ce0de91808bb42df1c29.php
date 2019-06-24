<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('MANS KONTS')); ?></div>

                <div class="card-body">
                        <?php echo csrf_field(); ?>
		
			<div ><?php echo e(Auth::user()->name); ?></div>
			<div > <?php echo e(Auth::user()->email); ?></div>
		
                            
                    </form>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\wordworld\resources\views/manskonts.blade.php ENDPATH**/ ?>