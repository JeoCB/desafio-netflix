

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div style="background-color:white; margin:10px; border-radius: 5px">
                        <div style="margin:10px">
                            <p><?php echo e($user->name); ?></p>
                            <p><?php echo e($user->email); ?></p>
                        </div>
                        <form action="<?php echo e(route('users.delete', ['id'=>$user->id])); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <button type="submit">Pedro</button>
                        </form>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\github\desafio-netflix\resources\views/management/users/index.blade.php ENDPATH**/ ?>