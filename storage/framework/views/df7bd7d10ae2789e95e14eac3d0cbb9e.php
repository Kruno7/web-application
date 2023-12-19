


<?php $__env->startSection('content'); ?>
<h1>Apartment INDEX</h1>
    <div class="card-body">
        <h3>Stanovi</h3>
        <hr>
            <?php echo e($apartment->title); ?>

            <!--<a href="<?php echo e(route('user.apartment.contact', 1)); ?>">Posalji poruku iznajmljivacu</a> -->
            
            <!--<button type="button" onclick="sendMessage()" id="insert" value="Add new Product">Posalji poruku iznajmljivacu</button>
            <div id="contact">
                <form id="asd" style="display:block" action="<?php echo e(route('user.apartment.contact', 1)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    
                    <div class="mb-3">
                        <label for="content" class="form-label">Example textarea</label>
                        <textarea class="form-control" id="content" name="content" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Posalji poruku</button>
                </form>
            </div> -->
            <hr>
            <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p><?php echo e($message->content); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <hr>
            <?php $__currentLoopData = $replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p><?php echo e($reply->content); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!--<div class="row">
                <?php $__currentLoopData = $apartment->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="<?php echo e(asset('storage/' . $image->image)); ?>" class="card-img-top" alt="...">
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div> -->
    </div>

<?php $__env->stopSection(); ?>

<script>
    /*window.onload = function() {
        document.getElementById("asd").style.display = "none";
    };*/
    function sendMessage () {
        document.getElementById("asd").style.display = "block";
        
    }
</script>
<?php echo $__env->make('layouts.public.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web-application\resources\views/user/apartments/show.blade.php ENDPATH**/ ?>