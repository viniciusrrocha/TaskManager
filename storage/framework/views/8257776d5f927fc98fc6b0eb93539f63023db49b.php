<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                <?php if(count($noticias) > 0): ?>
                    <?php $__currentLoopData = $noticias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $not): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="alert alert-success" role="alert">
                            <h1 class="alert-heading"><?php echo $not->titulo; ?></h1>
                            <p class="mb-0">
                                <?php echo $not->descricao; ?>

                                <a href="<?php echo $not->uri; ?>"> Saiba Mais...</a>
                            </p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <h1>Nao ha noticias</h1>
                <?php endif; ?>
                
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>