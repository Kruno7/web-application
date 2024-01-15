

<?php $__env->startSection('content'); ?>
<div class="container">
    <?php if(Session::has('message')): ?>
        <p class="alert <?php echo e(Session::get('alert-class', 'alert-info')); ?>"><?php echo e(Session::get('message')); ?></p>
    <?php endif; ?>
    <div class="row my-2">
        <div class="col-md-6"><h3>Moji Stanovi</h3></div>
        <div class="col-md-6">
            <div class="text-end">
                <a class="btn btn-primary" href="<?php echo e(route('renter.apartment.create')); ?>">Dodaj novi stan</a>
            </div>
        </div>
    </div>

    <table class="table table-hover border">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Naslov</th>
            <th scope="col">Adresa</th>
            <th scope="col">Opcije</th>
        </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $apartments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $apartment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($apartment->id); ?></th>
                <td><?php echo e($apartment->title); ?></td>
                <td><?php echo e($apartment->address); ?></td>
                <td>
                    <a href="<?php echo e(route('renter.apartment.show', $apartment)); ?>"><button type="button" class="btn btn-primary float-start btn-sm mx-2">Prikazi</button></a>
                    <a href="<?php echo e(route('renter.apartment.edit', $apartment)); ?>"><button type="button" class="btn btn-warning float-start btn-sm mx-2">Uredi</button></a>
                    <!--<a href="<?php echo e(route('renter.apartment.delete', $apartment)); ?>"><button type="button" class="btn btn-danger">Izbrisi</button></a>-->
                    <form action="<?php echo e(route('renter.apartment.delete', $apartment->id)); ?>" method="POST" class="float-start">
                        <?php echo csrf_field(); ?>
                        <?php echo e(method_field('DELETE')); ?>

                        <button type="submit" class="btn btn-danger btn-sm">Izbrisi</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    


    <!--<div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">Stanovi</div>
                        <div class="col-md-6">
                            <div class="text-end">
                                <a class="btn btn-primary" href="<?php echo e(route('renter.apartment.create')); ?>">Add apartment</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        
                        <?php $__currentLoopData = $apartments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $apartment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-6 border">
                                <p><?php echo e($apartment); ?></p>
                                <a href="<?php echo e(route('renter.apartment.show', $apartment)); ?>">Show apartment</a>
                                <a href="<?php echo e(route('renter.apartment.edit', $apartment)); ?>">Edit apartment</a>
                                <a href="<?php echo e(route('renter.apartment.delete', $apartment)); ?>">Delete apartment</a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div> -->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web-application\resources\views/renter/apartments/index.blade.php ENDPATH**/ ?>