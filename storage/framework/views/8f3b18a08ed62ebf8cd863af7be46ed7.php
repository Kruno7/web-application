

<?php $__env->startSection('content'); ?>

    <h1>Welcome</h1>
    <div class="row mt-5 border">

        <div class="col-md-6">
            <div class="card">
                <div class="input-box">
                    <input type="text" class="form-control">
                    <!--<i class="fa fa-search"></i>-->
                    <i class="bi bi-search"></i>                    
                </div>

                <div class="list border-bottom">
                    <i class="fa fa-fire"></i>
                    <div class="d-flex flex-column ml-3">
                    <span>Client communication policy</span> 
                    <small>#politics - may - @max</small>
                </div>                   
            </div>


            <div class="list border-bottom">
                <i class="fa fa-yelp"></i>
                <div class="d-flex flex-column ml-3">
                <span>Major activity done</span> 
                <small>#news - nov - @settings</small>
                </div>                   
            </div>

            <div class="list border-bottom">

                <i class="fa fa-fire"></i>
                <div class="d-flex flex-column ml-3">
                <span>Calling to USA Clients</span> 
                <small>#entertainment - dec - @tunes</small>
                </div>                   
            </div>

            <div class="list">
                <i class="fa fa-weibo"></i>
                <div class="d-flex flex-column ml-3">
                <span>Client communication policy</span> 
                <small>#politics - may - @max</small>
                </div>                   
            </div>
            
        </div>
    </div>
    <div class="col-md-6">
        Imas prostor za iznajmiti prijavite se <a class="btn btn-primary btn-sm" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a> i  objavite oglas
    </div>

</div>
    


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.public.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web-application\resources\views/welcome.blade.php ENDPATH**/ ?>