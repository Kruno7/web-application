

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">Apartment</div>
                        <div class="col-md-6">
                            <div class="text-end">
                                <a class="btn btn-primary" href="<?php echo e(route('renter.apartment.create')); ?>">Add apartment</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <h3>Stanovi</h3>
                    <?php $__currentLoopData = $apartments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $apartment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p><?php echo e($apartment); ?></p>
                        <a href="<?php echo e(route('renter.apartment.show', $apartment)); ?>">Show apartment</a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web-application\resources\views/renter/apartments/index.blade.php ENDPATH**/ ?>