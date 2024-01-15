

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
    <?php if(Session::has('message')): ?>
        <p class="alert <?php echo e(Session::get('alert-class', 'alert-info')); ?>"><?php echo e(Session::get('message')); ?></p>
    <?php endif; ?>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">Cities</div>
                        <div class="col-md-6"><a class="btn btn-primary float-end" href="<?php echo e(route('admin.city.create')); ?>">Add city</a></div>
                    </div>
                </div>

                <div class="card-body">
                    <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p><?php echo e($city->name); ?></p>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web-application\resources\views/admin/cities/index.blade.php ENDPATH**/ ?>