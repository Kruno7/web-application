

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">Poruke </div>
                        <div class="col-md-6">
                            
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <h3>Poruke</h3>
                    <h4>Neprocitano: <?php echo e($count); ?></h4>
                    
                    <hr>
                    
                    <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($message->apartments->title); ?></h5>
                            <div style="border: 1px solid red">
                                <p class="card-text"><?php echo e($message->content); ?></p>
                                <p>Korisnik: <?php echo e($message->users->name); ?></p>

                            </div>
                            <?php $__currentLoopData = $replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <p>Ja: <?php echo e(Auth::user()->name); ?> | <?php echo e($reply->content); ?> Status: <?php if($message->status == 0): ?> neprocitano <?php endif; ?></p>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                            <!--<button type="button" class="btn btn-primary" onclick="sendMessage(4)" id="insert" value="insert">Odgovori</button>-->
                            
                                <a href="javascript:void(0)" class="btn btn-primary btn-sm" onclick="reply(this)" data-messageid="<?php echo e($message->id); ?>">Odgovori</a>
                            
                            <!-- <form id="asd" style="display:none" action="" method="POST">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" id="user" name="message_id" value="<?php echo e($message->id); ?>">
                                <input type="hidden" id="user" name="user_id" value="<?php echo e($message->users->id); ?>">
                                <div class="mb-3">
                                    <label for="content" class="form-label">Example textarea</label>
                                    <textarea class="form-control" id="content" name="content" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary mb-3">Posalji poruku</button>
                            </form> -->
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    
                        <div class="replyDiv" style="display:none;">
                            <form action="<?php echo e(route('renter.apartment.reply')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <input type="text" id="messageId" name="message_id" hidden>
                                <textarea class="form-control" name="content" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                
                                <!--<a href="" class="btn btn-primary btn-sm">Pošalji</a>-->
                                <button type="submit" class="btn btn-primary btn-sm">Posalji poruku</button>
                                <a href="javascript:void(0)" class="btn btn-danger btn-sm" onclick="reply_close(this)">Zatvori</a>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<script>

    function reply (caller) {
        document.getElementById('messageId').value = $(caller).attr('data-messageid')
        $('.replyDiv').insertAfter($(caller));
        $('.replyDiv').show();
        
    }

    function reply_close (caller) {
        $('.replyDiv').hide();
    }
    
    function sendMessage () {   
        var button = document.getElementById("insert").value
        document.getElementById("asd").style.display = "block";
        console.log("Klik")
    
    }
    
</script>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web-application\resources\views/renter/apartments/message.blade.php ENDPATH**/ ?>