

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Moj profil')); ?></div>   <br>  <br>
               

                    <div class="col-lg-12">
                    <div class="card mb-2">
                        
                    <div class="row mb-3">
                            <label for="text" class="col-md-4 col-form-label text-md-end"><?php echo e(__('Ime i prezime')); ?></label>

                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control <?php $__errorArgs = ['text'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="text" value="<?php echo e(old('text')); ?>" required autocomplete="text" autofocus>
                               
                            </div>
                        </div>

                    <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end"><?php echo e(__('Email')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
                               
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end"><?php echo e(__('Lozinka')); ?></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">

    
                            </div>
                        </div>
                        <div class="row mb-3">
                        <form>
                        <label for="file" class="col-md-4 col-form-label text-md-end"><?php echo e(__('Odaberi sliku profila')); ?></label>
                        <input type="file" id="myfile" name="myfile"><br><br>

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


    

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web-application\resources\views/renter/edit-profile.blade.php ENDPATH**/ ?>