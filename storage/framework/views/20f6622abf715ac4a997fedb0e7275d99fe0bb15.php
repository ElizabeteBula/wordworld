<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('tulkot')); ?></div>

                <div class="card-body">
					<form method="POST" action="/valoda" class="form-horizontal">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="vards" class="col-md-4 col-form-label text-md-right"><?php echo e(__('vards')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="vards">
 

                            </div>
                        </div>
				
                        <div class="form-group row">
                            <label for="tulkojums" class="col-md-4 col-form-label text-md-right"><?php echo e(__('tulkojums')); ?></label>

                            <div class="col-md-6">
                                <input name="tulkojums" id="text" type="text" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" >


                            </div>
                        </div>
						<input type="hidden" name="valoda" id="valoda" value="<?php echo e($valodasId); ?>" class="form-control <?php if ($errors->has('valoda')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('valoda'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" >
						<div>



                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('PIEVIENOT')); ?>

                                </button>



                        </div>
                    </form>
                </div>
            </div>
			<div>
				<?php $__currentLoopData = $vardi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vards): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="card">
						<div class="card-body">
							<p>Vards: <?php echo e($vards->vards); ?></p>
							<p>Tulkojums: <?php echo e($vards->tulkojums); ?></p>	
						</div>
					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\wordworld\resources\views/valoda.blade.php ENDPATH**/ ?>