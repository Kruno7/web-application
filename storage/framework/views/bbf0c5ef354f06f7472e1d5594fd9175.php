

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Moj profil')); ?></div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-0">
                        <div class="card-body text-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                            class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3">John Smith</h5>
                            
                            <div class="d-flex justify-content-center mb-2">
                            <a href="<?php echo e(route('renter.user.edit-profile')); ?>" class="btn btn-primary">Uredi profil</a>
                            <button type="button" class="btn btn-primary ms-1">Poruke</button>
                            </div>
                        </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-8">
                        <div class="card mb-2">
                        <div class="card-body">
                            <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Ime i prezime</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">#</p>
                            </div>
                            </div>
                            <hr>

                            <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">example@example.com</p>
                            </div>
                            </div>
                            
                            <hr>
                            <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Adresa</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">#</p>
                            </div>
                            </div>
                        
                            
                        </div>
                        </div>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="<?php echo e(route('renter.user.edit-profile')); ?>" class="btn btn-primary">Odustani</a>
                            <button type="button" class="btn btn-primary ms-1">Spremi promjene</button>
                            </div>
                        <div class="row">
                        <div class="col-md-6">
                            
                            </div>
                        </div>
                        <div class="col-md-6">
                            
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </section>
               
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


    

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web-application\resources\views/renter/profile.blade.php ENDPATH**/ ?>