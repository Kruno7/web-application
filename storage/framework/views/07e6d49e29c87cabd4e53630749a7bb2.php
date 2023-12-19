


<?php $__env->startSection('content'); ?>
<h1>Apartment INDEX</h1>
    <div class="card-body">
        <h3>Stanovi</h3>
        <hr>
        <?php $__currentLoopData = $apartments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $apartment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h4><?php echo e($apartment->title); ?> </h4> <p><?php echo e($apartment->address); ?></p>
                <a href="<?php echo e(route('user.apartment.show', $apartment)); ?>">Klik</a>
            <hr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.public.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web-application\resources\views/user/apartments/index.blade.php ENDPATH**/ ?>