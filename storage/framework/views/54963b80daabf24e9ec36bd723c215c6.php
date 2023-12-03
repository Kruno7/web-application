

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">Apartments</div>
                        <div class="col-md-6"><a class="btn btn-primary" href="<?php echo e(route('admin.apartment.create')); ?>">Apartment</a></div>
                    </div>
                </div>

                <div class="card-body">
                    <h3>Apartments</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web-application\resources\views/admin/apartments/index.blade.php ENDPATH**/ ?>