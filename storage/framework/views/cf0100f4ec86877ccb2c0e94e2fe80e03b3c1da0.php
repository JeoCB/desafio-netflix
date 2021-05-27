<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <main class="main"> 
                
                <div class="gradient"></div>
                <div id="caixa_login" class="col-4 offset-4">
                    
                    <b>
                        <font class="texto" color="white">Entrar</font>
                    </b>
                        <b>
                            <form method="POST" action="<?php echo e(route('login')); ?>">
                                <?php echo csrf_field(); ?>
                                <input class="bloco" name="email"
                                    type="email" 
                                    class="form-control"
                                    placeholder="Email ou número de telefone"/>
                        <br>
                        <b>
                                <input class="bloco2" name="password"
                                    type="password" 
                                    class="form-control"
                                    placeholder="senha"/>
                        </b>
                        <b>            
                                <button class = "button">Entrar</button>
                        </b>
                            </form>
    
                </div>
            </main>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Documents\github\desafio-netflix\resources\views/auth/login.blade.php ENDPATH**/ ?>