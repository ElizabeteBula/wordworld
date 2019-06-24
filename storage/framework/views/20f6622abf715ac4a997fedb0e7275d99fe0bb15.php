<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('tulkot')); ?></div>

                <div class="card-body">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right"><?php echo e(__('vards')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="text">


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right"><?php echo e(__('tulkojums')); ?></label>

                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" >


                            </div>
                        </div>




                                <button type="PIEVIENOT" class="btn btn-primary">
                                    <?php echo e(__('PIEVIENOT')); ?>

                                </button>



                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\wordworld\resources\views/valoda.blade.php ENDPATH**/ ?>