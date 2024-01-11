


<?php $__env->startSection('content'); ?>

<div class="container mt-4" style="min-height:70vh">
    <div class="card-body">
        <h3>Stanovi</h3>
        <hr>
        <div class="row">
        <?php $__currentLoopData = $apartments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $apartment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!--<h4><?php echo e($apartment->title); ?> </h4> <p><?php echo e($apartment->address); ?></p>
                <a href="<?php echo e(route('user.apartment.show', $apartment)); ?>">Klik</a>
            <hr> -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://www.akta.ba/resources/Promotions/Images/befaf08b-7a16-4fee-9aa9-89e671ada531sarajevotower_stanovi.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($apartment->title); ?></h5>
                            <p class="card-text"><?php echo e($apartment->address); ?>.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cijena: <?php echo e($apartment->price); ?> KM</li>
                            <li class="list-group-item">Broj soba: <?php echo e($apartment->type); ?></li>
                            <li class="list-group-item">A third item</li>
                        </ul>
                        <div class="card-body">
                            <a href="<?php echo e(route('user.apartment.show', $apartment)); ?>" class="btn btn-primary btn-sm">Prikaži stan</a>
                            
                        </div>
                    </div>
                </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
   

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.public.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web-application\resources\views/user/apartments/index.blade.php ENDPATH**/ ?>